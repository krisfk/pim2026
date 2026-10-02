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

if ( ! function_exists( 'pim2026_enqueue_conference_participants_assets' ) ) {
	/**
	 * Styles and script for the conference participants page template.
	 */
	function pim2026_enqueue_conference_participants_assets() {
		if ( ! is_page_template( 'page-conference-participants.php' ) ) {
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
