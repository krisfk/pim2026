<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header(); ?>

<?php if ( is_home() && ! is_front_page() && ! empty( single_post_title( '', false ) ) ) : ?>
	<header class="page-header alignwide">
		<h1 class="page-title"><?php single_post_title(); ?></h1>
	</header><!-- .page-header -->
<?php endif; ?>

<div class="subpage-banner-full">
  <img
    src="<?php echo get_template_directory_uri(); ?>/assets/images/subpage-banner.jpg"
    alt="CUHK Highlights Banner"
    class="subpage-banner-img"
  >
</div>

<div class="container text-center middle-container">

	<h1 class="mt-5 mb-3 fw-bold">Schedule of Conference Programme</h1>

    <div class="mb-4">
        <h2 class="fw-bold" style="font-size:2rem;">CUHK PIM Conference 2026 Programme</h2>
        <div class="mt-2 mb-1" style="font-size:1.1rem;">
            <div><strong>Dates:</strong> 21–23 October 2026</div>
            <div><strong>Venue:</strong> CUHK, Hong Kong</div>
        </div>
        <div class="mt-3" style="font-size:1.15rem; font-style:italic;">
            Inspiring Value in Global Education: Sustainable East-West Connections
        </div>
    </div>

  
</div>

<?php

get_footer();
