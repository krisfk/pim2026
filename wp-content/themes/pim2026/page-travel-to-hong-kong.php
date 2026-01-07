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

	<h1 class="mt-5 mb-3 fw-bold">Travel to Hong Kong</h1>


 <h4  class="mt-5 mb-3 fw-bold">Visa & Entry</h4>  

 <div class="text-start mx-auto mb-4">Visitors must hold a passport valid for at least six months beyond their stay. <br> Most nationalities do not require a visa for short visits (7–180 days). <br> <br> Check requirements: Hong Kong Immigration Department <br> <a href="https://www.immd.gov.hk/eng/services/visas/visit-transit/visit-visa-entry-permit.html" target="_blank">https://www.immd.gov.hk/eng/services/visas/visit-transit/visit-visa-entry-permit.html</a>
 </div>



<script>
  document.addEventListener('DOMContentLoaded', function() {
    const btnGroup = document.getElementById('submenu-btn-group');
    if (!btnGroup) return;
    btnGroup.querySelectorAll('.submenu-btn').forEach(function(btn) {
      btn.addEventListener('click', function(e) {
        btnGroup.querySelectorAll('.submenu-btn').forEach(function(b){b.classList.remove('active')});
        this.classList.add('active');
      });
    });
  });
</script>
</div>	







<?php


get_footer();
