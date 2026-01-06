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

<div class="d-flex justify-content-center my-4" id="submenu-btn-group">
  <a href="#accreditations" class="submenu-btn mx-2 active">Accreditations &amp; Reputation</a>
  <a href="#rankings" class="submenu-btn mx-2">Rankings</a>
  <a href="#internationalization" class="submenu-btn mx-2">Internationalization</a>
</div>
<style>
  @media (max-width: 576px) {
    #submenu-btn-group .submenu-btn {
      font-size: 0.93rem !important;
      padding: 0.35rem 0.5rem !important;
    }
  }
</style>

<div id="accreditations" class="my-5">
  <div class="row align-items-center">
    <div class="col-12 col-md-3 mb-3 mb-md-0 d-flex justify-content-center">
      <img 
        src="<?php echo get_template_directory_uri(); ?>/assets/images/hl-icon-1.png" 
        alt="Accreditations Icon" 
        style="max-width:110px; height:auto;"
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
        style="max-width:110px; height:auto;"
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
        style="max-width:110px; height:auto;"
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
<style>
  .submenu-btn.active {
    background-color: #300353 !important;
    color: #fff !important;
  }
</style>
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
