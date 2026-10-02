<?php
/**
 * Template Name: Conference Participants
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 */

get_header(); ?>

<?php if ( is_home() && ! is_front_page() && ! empty( single_post_title( '', false ) ) ) : ?>
	<header class="page-header alignwide">
		<h1 class="page-title"><?php single_post_title(); ?></h1>
	</header><!-- .page-header -->
<?php endif; ?>

<div class="subpage-banner-full">
  <img
    src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/subpage-banner-1.jpg' ); ?>"
    alt="Conference Participants Banner"
    class="subpage-banner-img"
  >
</div>

<div class="container text-center middle-container">

	<h1 class="mt-5 mb-3 fw-bold">Conference Participants</h1>

  <div class="conference-participants-content">
    <div class="cp-controls">
      <div class="cp-search">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
        <input type="search" id="cpSearchInput" placeholder="Search by name, title, or institution..." aria-label="<?php esc_attr_e( 'Search delegates', 'twentytwentyone' ); ?>">
      </div>
      <div class="cp-filters">
        <select id="cpInstitutionFilter" aria-label="<?php esc_attr_e( 'Filter by institution', 'twentytwentyone' ); ?>">
          <option value="all"><?php esc_html_e( 'All Institutions', 'twentytwentyone' ); ?></option>
        </select>
        <select id="cpSortOrder" aria-label="<?php esc_attr_e( 'Sort order', 'twentytwentyone' ); ?>">
          <option value="name-asc"><?php esc_html_e( 'Sort: A – Z', 'twentytwentyone' ); ?></option>
          <option value="name-desc"><?php esc_html_e( 'Sort: Z – A', 'twentytwentyone' ); ?></option>
          <option value="inst-asc"><?php esc_html_e( 'Sort: Institution', 'twentytwentyone' ); ?></option>
        </select>
      </div>
    </div>
    <div id="cpParticipantGrid" class="cp-grid" aria-live="polite">
      <?php
      $cp_participants = pim2026_get_conference_participants();
      $cp_per_page     = 10;
      if ( ! empty( $cp_participants ) ) {
        $cp_page_slice = array_slice( $cp_participants, 0, $cp_per_page );
        foreach ( $cp_page_slice as $cp_participant ) {
          pim2026_render_conference_participant_card( $cp_participant );
        }
      }
      ?>
    </div>
    <nav id="cpPagination" class="cp-pagination" aria-label="<?php esc_attr_e( 'Participants pagination', 'twentytwentyone' ); ?>"></nav>
  </div>

  <script type="application/json" id="cpParticipantsData"><?php
    echo wp_json_encode(
      array(
        'participants' => pim2026_get_conference_participants(),
        'avatarBase'   => 'https://ui-avatars.com/api/?name=',
        'perPage'      => 10,
      )
    );
  ?></script>

</div>

<?php get_footer(); ?>
