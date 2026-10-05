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
		$candidates = array(
			trailingslashit( ABSPATH ) . 'photo-booklet',
			trailingslashit( get_template_directory() ) . 'assets/photo-booklet',
		);

		$roots = array();
		foreach ( $candidates as $candidate ) {
			if ( ! is_dir( $candidate ) ) {
				continue;
			}
			$key = wp_normalize_path( realpath( $candidate ) ?: $candidate );
			if ( ! isset( $roots[ $key ] ) ) {
				$roots[ $key ] = wp_normalize_path( $candidate );
			}
		}

		return array_values( $roots );
	}
}

if ( ! function_exists( 'pim2026_photo_booklet_subpath' ) ) {
	/**
	 * Path inside photo-booklet (Institution/file.jpg) for a resolved file.
	 *
	 * @param string $absolute_path Absolute path to an image file.
	 * @return string
	 */
	function pim2026_photo_booklet_subpath( $absolute_path ) {
		$absolute_path = wp_normalize_path( $absolute_path );
		$resolved      = wp_normalize_path( realpath( $absolute_path ) ?: $absolute_path );

		foreach ( pim2026_photo_booklet_roots() as $root ) {
			$root_resolved = wp_normalize_path( realpath( $root ) ?: $root );
			if ( ! $root_resolved ) {
				continue;
			}
			if ( str_starts_with( $resolved, $root_resolved . '/' ) ) {
				return ltrim( substr( $resolved, strlen( $root_resolved ) ), '/' );
			}
		}

		return '';
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
		$booklet_subpath = pim2026_photo_booklet_subpath( $absolute_path );
		if ( '' !== $booklet_subpath ) {
			$segments = explode( '/', 'photo-booklet/' . $booklet_subpath );
			return trailingslashit( home_url() ) . implode( '/', array_map( 'rawurlencode', $segments ) );
		}

		$absolute_path = wp_normalize_path( $absolute_path );
		$root_dir      = wp_normalize_path( ABSPATH );

		$theme_dir = wp_normalize_path( get_template_directory() );
		$resolved  = wp_normalize_path( realpath( $absolute_path ) ?: $absolute_path );

		if ( str_starts_with( $resolved, $theme_dir . '/' ) ) {
			$relative = ltrim( substr( $resolved, strlen( $theme_dir ) ), '/' );
			if ( str_starts_with( $relative, 'assets/delegates/' ) ) {
				$segments = explode( '/', $relative );
				return trailingslashit( get_template_directory_uri() ) . implode( '/', array_map( 'rawurlencode', $segments ) );
			}
		}

		if ( str_starts_with( $absolute_path, $root_dir . '/' ) ) {
			$relative = ltrim( substr( $absolute_path, strlen( $root_dir ) ), '/' );
			$segments = explode( '/', $relative );
			return trailingslashit( home_url() ) . implode( '/', array_map( 'rawurlencode', $segments ) );
		}

		return '';
	}
}

if ( ! function_exists( 'pim2026_delegate_name_slug' ) ) {
	/**
	 * christy-poon style slug from a delegate display name.
	 *
	 * @param string $name Display name.
	 * @return string
	 */
	function pim2026_delegate_name_slug( $name ) {
		$name = preg_replace( '/\([^)]*\)/', '', (string) $name );
		$name = remove_accents( $name );
		$name = strtolower( $name );
		$name = preg_replace( '/[^a-z0-9]+/', '-', $name );
		return trim( $name, '-' );
	}
}

if ( ! function_exists( 'pim2026_find_delegate_photo_by_name' ) ) {
	/**
	 * Locate a delegate photo by institution + name (theme override or institution folder).
	 *
	 * @param string $institution Institution label.
	 * @param string $name        Delegate name.
	 * @return string Absolute path, or empty string.
	 */
	function pim2026_find_delegate_photo_by_name( $institution, $name ) {
		$slug = pim2026_delegate_name_slug( $name );
		if ( '' === $slug ) {
			return '';
		}

		$theme_delegates = trailingslashit( get_template_directory() ) . 'assets/delegates/';
		foreach ( array( 'png', 'jpg', 'jpeg', 'webp' ) as $ext ) {
			$candidate = $theme_delegates . $slug . '.' . $ext;
			if ( is_readable( $candidate ) ) {
				return wp_normalize_path( $candidate );
			}
		}

		$inst_key = pim2026_normalize_path_token( $institution );
		foreach ( pim2026_photo_booklet_roots() as $root ) {
			$inst_dir = null;
			foreach ( glob( trailingslashit( $root ) . '*', GLOB_ONLYDIR ) ?: array() as $dir ) {
				$dir_key = pim2026_normalize_path_token( basename( $dir ) );
				if ( $dir_key === $inst_key || false !== strpos( $dir_key, $inst_key ) || false !== strpos( $inst_key, $dir_key ) ) {
					$inst_dir = $dir;
					break;
				}
			}
			if ( ! $inst_dir ) {
				continue;
			}

			foreach ( glob( trailingslashit( $inst_dir ) . '*.*' ) ?: array() as $file ) {
				$base = pim2026_normalize_path_token( pathinfo( $file, PATHINFO_FILENAME ) );
				if ( false !== strpos( $base, $slug ) || false !== strpos( $slug, $base ) ) {
					return wp_normalize_path( $file );
				}
			}
		}

		return '';
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
		$candidates = array(
			trailingslashit( ABSPATH ) . $relative_path,
		);
		$theme_path = trailingslashit( get_template_directory() ) . 'assets/' . $relative_path;
		if ( ! in_array( $theme_path, $candidates, true ) ) {
			$candidates[] = $theme_path;
		}

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

if ( ! function_exists( 'pim2026_get_optimized_delegate_photo_url' ) ) {
	/**
	 * Return a cached, resized JPEG URL for delegate photos (smaller downloads).
	 *
	 * @param string $absolute_path Absolute path to the source image.
	 * @return string Public URL, or empty string on failure.
	 */
	function pim2026_get_optimized_delegate_photo_url( $absolute_path ) {
		if ( empty( $absolute_path ) || ! is_readable( $absolute_path ) ) {
			return '';
		}

		$upload_dir = wp_upload_dir();
		if ( ! empty( $upload_dir['error'] ) ) {
			return pim2026_path_to_public_url( $absolute_path );
		}

		$cache_dir = trailingslashit( $upload_dir['basedir'] ) . 'pim2026-participant-cache';
		$cache_url = trailingslashit( $upload_dir['baseurl'] ) . 'pim2026-participant-cache';

		if ( ! wp_mkdir_p( $cache_dir ) ) {
			return pim2026_path_to_public_url( $absolute_path );
		}

		$mtime      = (int) filemtime( $absolute_path );
		$cache_name = md5( wp_normalize_path( $absolute_path ) . '|' . $mtime ) . '.jpg';
		$cache_file = trailingslashit( $cache_dir ) . $cache_name;
		$public_url = trailingslashit( $cache_url ) . $cache_name;

		if ( is_readable( $cache_file ) ) {
			return $public_url;
		}

		if ( ! function_exists( 'wp_get_image_editor' ) ) {
			require_once ABSPATH . 'wp-admin/includes/image.php';
		}

		$editor = wp_get_image_editor( $absolute_path );
		if ( is_wp_error( $editor ) ) {
			return pim2026_path_to_public_url( $absolute_path );
		}

		$size = $editor->get_size();
		if ( is_array( $size ) && ! empty( $size['width'] ) && $size['width'] > 480 ) {
			$editor->resize( 480, null, false );
		}

		$editor->set_quality( 82 );
		$saved = $editor->save( $cache_file, 'image/jpeg' );
		if ( is_wp_error( $saved ) ) {
			return pim2026_path_to_public_url( $absolute_path );
		}

		return $public_url;
	}
}

if ( ! function_exists( 'pim2026_delegate_display_photo_url' ) ) {
	/**
	 * Resolve institution/name/path to an optimized public photo URL.
	 *
	 * @param string $institution Institution label.
	 * @param string $name        Delegate name.
	 * @param string $relative    Optional JSON relative path.
	 * @return string
	 */
	function pim2026_delegate_display_photo_url( $institution, $name, $relative = '' ) {
		$absolute = pim2026_find_delegate_photo_by_name( $institution, $name );
		if ( ! $absolute && '' !== $relative ) {
			$absolute = pim2026_resolve_delegate_photo_file( $relative );
		}

		if ( $absolute ) {
			$optimized = pim2026_get_optimized_delegate_photo_url( $absolute );
			if ( $optimized ) {
				return $optimized;
			}
			return pim2026_path_to_public_url( $absolute );
		}

		if ( '' === $relative ) {
			return '';
		}

		$segments = array_map( 'rawurlencode', explode( '/', ltrim( $relative, '/' ) ) );
		return trailingslashit( home_url() ) . implode( '/', $segments );
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

		return pim2026_delegate_display_photo_url( '', '', $relative_path );
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
			$name        = isset( $row['name'] ) ? $row['name'] : '';
			$institution = isset( $row['institution'] ) ? $row['institution'] : '';
			$relative    = isset( $row['photo'] ) ? $row['photo'] : '';

			$data[ $index ]['photo'] = pim2026_delegate_display_photo_url( $institution, $name, $relative );
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
					class="cp-participant-photo"
					src="<?php echo esc_attr( $img_src ); ?>"
					alt="<?php echo esc_attr( $name ); ?>"
					width="480"
					height="480"
					loading="lazy"
					decoding="async"
					onload="this.closest('.photo-frame').classList.add('is-loaded')"
					onerror="this.onerror=null;this.src='<?php echo esc_js( $avatar ); ?>';this.closest('.photo-frame').classList.add('is-loaded');"
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
