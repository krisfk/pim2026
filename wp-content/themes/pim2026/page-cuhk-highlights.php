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


<div style="width:100vw; margin-left:calc(50% - 50vw);">
  <img 
    src="<?php echo get_template_directory_uri(); ?>/assets/images/subpage-banner.jpg" 
    alt="CUHK Highlights Banner" 
    style="width:100%; height:auto; display:block; object-fit:cover; max-height:420px;"
  >
</div>




<div class="container text-center middle-container">

	<h1 class="mt-5 mb-3 fw-bold">CUHK highlights</h1>

<div class="d-flex justify-content-center my-4">
  <a href="#accreditations" class="submenu-btn mx-2">Accreditations &amp; Reputation</a>
  <a href="#rankings" class="submenu-btn mx-2">Rankings</a>
  <a href="#internationalization" class="submenu-btn mx-2">Internationalization</a>
</div>
<style>
  .submenu-btn {
    display: inline-block;
    padding: 0.7em 1.7em;
    background-color: #f5f5fa;
    color: #300353;
    border: none;
    border-radius: 24px;
    font-weight: 600;
    font-size: 1.08em;
    transition: background 0.18s, color 0.18s, box-shadow 0.18s;
    text-decoration: none;
    box-shadow: 0 1px 6px rgba(48,3,83,0.09);
  }
  .submenu-btn:hover, .submenu-btn:focus {
    background: #ece1fa;
    color: #511380;
    text-decoration: none;
    box-shadow: 0 3px 14px rgba(48,3,83,0.13);
  }
</style>


</div>	







<?php


get_footer();
