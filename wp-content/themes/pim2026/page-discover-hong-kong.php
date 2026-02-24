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


<style>
  .container.middle-container a,
  .middle-container a {
    color: #300353 !important;
  }
</style>

<div class="container text-center middle-container">

	<h1 class="mt-5 mb-3 fw-bold">Discover Hong Kong
    </h1>

   



    <h3 class="mt-5 mb-3 fw-bold text-start">Explore Hong Kong </h3>
    <div class="text-start mx-auto mb-4" style="">
    A city where glass towers meet mountain trails, incense-filled temples sit beside neon markets, and every corner offers something familiar and entirely new. Whether it’s your first visit or your fifteenth, Hong Kong always has a way of surprising you.
    </div>

    <h3 class="mt-5 mb-3 fw-bold text-start">Must‑Do Experiences in Hong Kong
    </h3>
<div class="text-start mb-5">
  <div class="mb-4">
    <h4 class="fw-bold mb-2">1. Panoramic Night Views of Victoria Harbour</h4>
    <div>
      Nothing captures Hong Kong quite like its skyline — glittering, dramatic, and alive. Head to <strong>The Peak</strong> or the Tsim Sha Tsui Promenade for breathtaking nighttime views. The Peak Tram offers a scenic ride up Hong Kong’s highest point at 552m, giving you sweeping city and harbour panoramas.
    </div>
    <div class="mt-3">
      <span class="fw-semibold">📍 The Peak</span>
      <br>
      <a href="https://maps.app.goo.gl/tN5w5cr8xRAbP2eJ8" target="_blank" rel="noopener">
        Google Maps
      </a>

      <img src="http://161.35.238.223/wp-content/uploads/2026/02/me-1.jpg" alt="">
    </div>
  </div>
</div>

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
