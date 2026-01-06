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

	<h1 class="mt-5 mb-3 fw-bold">CUHK highlights</h1>

<div class="d-flex justify-content-center my-4" id="submenu-btn-group">
  <a href="#accreditations" class="submenu-btn mx-2 active">Accreditations &amp; Reputation</a>
  <a href="#rankings" class="submenu-btn mx-2">Rankings</a>
  <a href="#internationalization" class="submenu-btn mx-2">Internationalization</a>
</div>

<div class="cuhk-highlight-content">
  <div id="accreditations" class="my-5">
    <div class="row align-items-center">
      <div class="col-12 col-md-3 mb-3 mb-md-0 d-flex justify-content-center">
        <img 
          src="<?php echo get_template_directory_uri(); ?>/assets/images/hl-icon-1.png" 
          alt="Accreditations Icon" 
          class="cuhk-highlight-icon"
        >
      </div>
      <div class="col-12 col-md-9 text-md-start text-center">
        <h4 class="fw-bold mb-3">Accreditations &amp; Reputation</h4>
        <ul class="list-unstyled fs-5 mb-2">
          <li class="mb-1">• AACSB and AMBA accredited</li>
          <li class="mb-1">• 1<sup>st</sup> in Hong Kong to offer BBA, MBA, and EMBA programs</li>
          <li class="mb-1">• Renowned for research excellence</li>
        </ul>
        <div class="fst-italic text-muted">
          (No. 1 in Asia, No. 13 globally per UT Dallas 2024)
        </div>
      </div>
    </div>
  </div>

  <div id="rankings" class="my-5">
    <div class="row align-items-center">
      <div class="col-12 col-md-3 mb-3 mb-md-0 d-flex justify-content-center">
        <img
          src="<?php echo get_template_directory_uri(); ?>/assets/images/hl-icon-2.png"
          alt="Rankings Icon"
          class="cuhk-highlight-icon"
        >
      </div>
      <div class="col-12 col-md-9 text-md-start text-center">
        <h4 class="fw-bold mb-3">Rankings</h4>
        <ul class="list-unstyled fs-5 mb-2">
          <li class="mb-1">• MBA No. 65 (FT 2025)</li>
          <li class="mb-1">• MSc Finance No. 21 (FT 2025)</li>
          <li class="mb-1">• Accounting &amp; Finance No. 37 (QS 2025)</li>
          <li class="mb-1">• Top 50 globally in Business &amp; Management (QS 2025)</li>
        </ul>
      </div>
    </div>
  </div>

  <div id="internationalization" class="my-5">
    <div class="row align-items-center">
      <div class="col-12 col-md-3 mb-3 mb-md-0 d-flex justify-content-center">
        <img
          src="<?php echo get_template_directory_uri(); ?>/assets/images/hl-icon-3.png"
          alt="Internationalization Icon"
          class="cuhk-highlight-icon"
        >
      </div>
      <div class="col-12 col-md-9 text-md-start text-center">
        <h4 class="fw-bold mb-3">Internationalization</h4>
        <ul class="list-unstyled fs-5 mb-2">
          <li class="mb-1">• 5,000+ students from 20+ countries</li>
          <li class="mb-1">• 280+ global exchange programs with 80+ partners in 30+ countries</li>
          <li class="mb-1">• 45,000+ alumni across 50 locations for worldwide network</li>
        </ul>
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
