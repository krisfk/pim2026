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


<div id="home-banner-carousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#home-banner-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#home-banner-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#home-banner-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/banner-1.jpg');">
      <!-- Optionally add content here (caption, etc.) -->
    </div>
    <div class="carousel-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/banner-2.jpg');">
      <!-- Optionally add content here -->
    </div>
    <div class="carousel-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/banner-3.jpg');">
      <!-- Optionally add content here -->
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#home-banner-carousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#home-banner-carousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- Bootstrap 5 carousel requires Bootstrap's JS, which should be loaded in your theme header/footer. -->

<!-- You may want to place your banner.jpg file in your theme's assets/images/ directory -->



<?php
// if ( have_posts() ) {

// 	// Load posts loop.
// 	while ( have_posts() ) {
// 		the_post();

// 		get_template_part( 'template-parts/content/content', get_theme_mod( 'display_excerpt_or_full_post', 'excerpt' ) );
// 	}

// 	// Previous/next page navigation.
// 	twenty_twenty_one_the_posts_navigation();

// } else {

// 	// If no content, include the "No posts found" template.
// 	get_template_part( 'template-parts/content/content-none' );

// }

get_footer();
