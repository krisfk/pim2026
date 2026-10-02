<?php
/**
 * Conference participants data (from delegation-list.xlsx + photo-booklet folders).
 *
 * @package pim2026
 */

if ( ! function_exists( 'pim2026_normalize_path_token' ) ) {
	/**
	 * Normalize folder/file names for fuzzy matching (Unicode + spacing).
	 *
	 * @param string $value Raw name.
	 * @return string
	 */
	function pim2026_normalize_path_token( $value ) {
		$value = html_entity_decode( (string) $value, ENT_QUOTES, 'UTF-8' );
		$value = str_replace( array( "\xc2\xa0", '&nbsp;' ), ' ', $value );
		$value = trim( preg_replace( '/\s+/u', ' ', $value ) );
		if ( class_exists( 'Normalizer' ) ) {
			$value = Normalizer::normalize( $value, Normalizer::FORM_C );
		}
		return mb_strtolower( $value, 'UTF-8' );
	}
}

if ( ! function_exists( 'pim2026_photo_booklet_roots' ) ) {
	/**
	 * Directories that may contain delegate photos.
	 *
	 * @return array<int, string>
	 */
	function pim2026_photo_booklet_roots() {
		$roots = array(
			trailingslashit( get_template_directory() ) . 'assets/photo-booklet',
			trailingslashit( ABSPATH ) . 'photo-booklet',
		);
		$roots = array_unique( array_filter( $roots, 'is_dir' ) );
		return array_values( $roots );
	}
}

if ( ! function_exists( 'pim2026_path_to_public_url' ) ) {
	/**
	 * Turn an absolute file path into a public URL.
	 *
	 * @param string $absolute_path Absolute path to an image file.
	 * @return string
	 */
	function pim2026_path_to_public_url( $absolute_path ) {
		$absolute_path = wp_normalize_path( $absolute_path );
		$theme_dir     = wp_normalize_path( get_template_directory() );
		$root_dir      = wp_normalize_path( ABSPATH );

		if ( str_starts_with( $absolute_path, $theme_dir . '/' ) || $absolute_path === $theme_dir ) {
			$relative = ltrim( substr( $absolute_path, strlen( $theme_dir ) ), '/' );
			$base     = trailingslashit( get_template_directory_uri() );
		} elseif ( str_starts_with( $absolute_path, $root_dir . '/' ) || $absolute_path === $root_dir ) {
			$relative = ltrim( substr( $absolute_path, strlen( $root_dir ) ), '/' );
			$base     = trailingslashit( home_url() );
		} else {
			return '';
		}

		$segments = explode( '/', $relative );
		return $base . implode( '/', array_map( 'rawurlencode', $segments ) );
	}
}

if ( ! function_exists( 'pim2026_resolve_delegate_photo_file' ) ) {
	/**
	 * Resolve JSON photo path to a readable file on disk.
	 *
	 * @param string $relative_path Path such as photo-booklet/School/file.jpg.
	 * @return string Absolute path, or empty string.
	 */
	function pim2026_resolve_delegate_photo_file( $relative_path ) {
		if ( empty( $relative_path ) ) {
			return '';
		}

		$relative_path = ltrim( wp_normalize_path( $relative_path ), '/' );
		$candidates    = array(
			trailingslashit( ABSPATH ) . $relative_path,
			trailingslashit( get_template_directory() ) . 'assets/' . preg_replace( '#^photo-booklet/#', 'photo-booklet/', $relative_path ),
		);

		foreach ( $candidates as $candidate ) {
			if ( is_readable( $candidate ) ) {
				return wp_normalize_path( $candidate );
			}
		}

		$parts = explode( '/', $relative_path );
		if ( count( $parts ) < 3 || 'photo-booklet' !== $parts[0] ) {
			return '';
		}

		$institution = $parts[1];
		$filename    = $parts[ count( $parts ) - 1 ];
		$inst_key    = pim2026_normalize_path_token( $institution );
		$file_key    = pim2026_normalize_path_token( $filename );

		foreach ( pim2026_photo_booklet_roots() as $root ) {
			$inst_dir = null;
			foreach ( glob( trailingslashit( $root ) . '*', GLOB_ONLYDIR ) ?: array() as $dir ) {
				if ( pim2026_normalize_path_token( basename( $dir ) ) === $inst_key ) {
					$inst_dir = $dir;
					break;
				}
			}
			if ( ! $inst_dir ) {
				continue;
			}

			foreach ( glob( trailingslashit( $inst_dir ) . '*.*' ) ?: array() as $file ) {
				if ( pim2026_normalize_path_token( basename( $file ) ) === $file_key ) {
					return wp_normalize_path( $file );
				}
			}
		}

		return '';
	}
}

if ( ! function_exists( 'pim2026_conference_participant_photo_url' ) ) {
	/**
	 * Build a public URL for a photo path relative to the WordPress root.
	 *
	 * @param string $relative_path Path such as photo-booklet/School/file.jpg.
	 * @return string
	 */
	function pim2026_conference_participant_photo_url( $relative_path ) {
		if ( empty( $relative_path ) ) {
			return '';
		}

		$absolute = pim2026_resolve_delegate_photo_file( $relative_path );
		if ( $absolute ) {
			return pim2026_path_to_public_url( $absolute );
		}

		$segments = array_map( 'rawurlencode', explode( '/', ltrim( $relative_path, '/' ) ) );
		return trailingslashit( home_url() ) . implode( '/', $segments );
	}
}

if ( ! function_exists( 'pim2026_get_conference_participants' ) ) {
	/**
	 * Load hard-coded participant list from JSON export.
	 *
	 * @return array<int, array<string, string>>
	 */
	function pim2026_get_conference_participants() {
		static $cached = null;
		if ( null !== $cached ) {
			return $cached;
		}

		$json_path = get_template_directory() . '/inc/conference-participants.json';
		if ( ! is_readable( $json_path ) ) {
			$cached = array();
			return $cached;
		}

		$raw  = file_get_contents( $json_path );
		$data = json_decode( $raw, true );
		if ( ! is_array( $data ) ) {
			$cached = array();
			return $cached;
		}

		foreach ( $data as $index => $row ) {
			$data[ $index ]['photo'] = pim2026_conference_participant_photo_url(
				isset( $row['photo'] ) ? $row['photo'] : ''
			);
		}

		$cached = $data;
		return $cached;
	}
}

if ( ! function_exists( 'pim2026_is_conference_participants_page' ) ) {
	/**
	 * True when the conference participants template is active (assigned or page-{slug} hierarchy).
	 */
	function pim2026_is_conference_participants_page() {
		if ( is_page_template( 'page-conference-participants.php' ) ) {
			return true;
		}
		if ( ! is_singular( 'page' ) ) {
			return false;
		}
		$template_path = get_page_template();
		return $template_path && 'page-conference-participants.php' === basename( $template_path );
	}
}

if ( ! function_exists( 'pim2026_render_conference_participant_card' ) ) {
	/**
	 * Output one participant card (used for SSR and consistent markup).
	 *
	 * @param array<string, string> $participant Participant row.
	 */
	function pim2026_render_conference_participant_card( $participant ) {
		$name        = isset( $participant['name'] ) ? $participant['name'] : '';
		$title       = isset( $participant['title'] ) ? $participant['title'] : '';
		$institution = isset( $participant['institution'] ) ? $participant['institution'] : '';
		$region      = isset( $participant['region'] ) ? $participant['region'] : '';
		$photo       = isset( $participant['photo'] ) ? $participant['photo'] : '';
		$avatar      = 'https://ui-avatars.com/api/?name=' . rawurlencode( $name ) . '&background=f4f4f4&color=300353&size=400';
		$img_src     = $photo ? $photo : $avatar;
		?>
		<div class="participant-card">
			<div class="photo-frame">
				<img
					src="<?php echo esc_attr( $img_src ); ?>"
					alt="<?php echo esc_attr( $name ); ?>"
					loading="lazy"
					onerror="this.onerror=null;this.src='<?php echo esc_js( $avatar ); ?>';"
				>
			</div>
			<div class="info-content">
				<div class="p-name"><?php echo esc_html( $name ); ?></div>
				<div class="p-title"><?php echo esc_html( $title ); ?></div>
				<div class="p-divider"></div>
				<div class="p-institution"><?php echo esc_html( $institution ); ?></div>
				<div class="p-region"><?php echo esc_html( $region ); ?></div>
			</div>
		</div>
		<?php
	}
}

if ( ! function_exists( 'pim2026_enqueue_conference_participants_assets' ) ) {
	/**
	 * Styles and script for the conference participants page template.
	 */
	function pim2026_enqueue_conference_participants_assets() {
		if ( ! pim2026_is_conference_participants_page() ) {
			return;
		}

		$theme_version = wp_get_theme()->get( 'Version' );

		wp_enqueue_style(
			'pim2026-conference-participants',
			get_template_directory_uri() . '/assets/css/conference-participants.css',
			array(),
			$theme_version
		);

		wp_enqueue_script(
			'pim2026-conference-participants',
			get_template_directory_uri() . '/assets/js/conference-participants.js',
			array(),
			$theme_version,
			true
		);

		wp_localize_script(
			'pim2026-conference-participants',
			'pimConferenceParticipants',
			array(
				'participants' => pim2026_get_conference_participants(),
				'avatarBase'   => 'https://ui-avatars.com/api/?name=',
			)
		);
	}
}
add_action( 'wp_enqueue_scripts', 'pim2026_enqueue_conference_participants_assets' );
