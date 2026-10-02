<?php
/**
 * Conference participants data (from delegation-list.xlsx + photo-booklet folders).
 *
 * @package pim2026
 */

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
		$segments = array_map( 'rawurlencode', explode( '/', $relative_path ) );
		return home_url( '/' . implode( '/', $segments ) );
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
					src="<?php echo esc_url( $img_src ); ?>"
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
