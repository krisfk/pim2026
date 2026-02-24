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

	<h1 class="mt-5 mb-3 fw-bold">Key Facts of CUHK & CUHK Business School  </h1>

<!-- <div class="d-flex justify-content-center my-4" id="submenu-btn-group">
  <a href="#university-rankings" class="submenu-btn mx-2 active">University Rankings</a>
  <a href="#bs-accreditations" class="submenu-btn mx-2">Business School Accreditations</a>
  <a href="#programme-rankings" class="submenu-btn mx-2">Programme Rankings</a>
  <a href="#internationalisation" class="submenu-btn mx-2">Internationalisation</a>
</div> -->

<div class="cuhk-highlight-content">
  <div id="university-rankings" class="my-5">
    <div class="row align-items-center">
      <div class="col-12 col-md-3 mb-3 mb-md-0 d-flex justify-content-center">
        <img 
          src="<?php echo get_template_directory_uri(); ?>/assets/images/hl-icon-2.png" 
          alt="University Rankings Icon" 
          class="cuhk-highlight-icon"
        >
      </div>
      <div class="col-12 col-md-9 text-md-start text-center">
        <h4 class="fw-bold mb-3">CUHK Rankings        </h4>
        <ul class="list-unstyled fs-5 mb-2">
          <li class="mb-1">• QS World University Rankings 2026: <strong>#32</strong> globally</li>
          <li class="mb-1">• Times Higher Education Rankings 2026: <strong>#41</strong> globally</li>
        </ul>
      </div>
    </div>
  </div>

  <div id="bs-accreditations" class="my-5">
    <div class="row align-items-center">
      <div class="col-12 col-md-3 mb-3 mb-md-0 d-flex justify-content-center">
        <img 
          src="<?php echo get_template_directory_uri(); ?>/assets/images/hl-icon-1.png" 
          alt="Business School Accreditations Icon" 
          class="cuhk-highlight-icon"
        >
      </div>
      <div class="col-12 col-md-9 text-md-start text-center">
        <h4 class="fw-bold mb-3">Business School Accreditations &amp; Reputation</h4>
        <ul class="list-unstyled fs-5 mb-2">
          <li class="mb-1">• AACSB and AMBA accredited</li>
          <li class="mb-1">• First in Hong Kong to offer BBA, MBA, and EMBA programs</li>
          <li class="mb-1">• Leading research excellence <br>
            <span class="fst-italic text-muted">(Ranked No. 1 in Asia, No. 13 globally – UT Dallas 2024)</span>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <div id="programme-rankings" class="my-5">
    <div class="row align-items-center">
      <div class="col-12 col-md-3 mb-3 mb-md-0 d-flex justify-content-center">
        <img
          src="<?php echo get_template_directory_uri(); ?>/assets/images/hl-icon-4.png"
          alt="Programme Rankings Icon"
          class="cuhk-highlight-icon"
        >
      </div>
      <div class="col-12 col-md-9 text-md-start text-center">
        <h4 class="fw-bold mb-3">Business Programme & Subject Rankings        </h4>
        <ul class="list-unstyled fs-5 mb-2">
          <li class="mb-1">• MBA: <strong>#65</strong> (Financial Times 2025)</li>
          <li class="mb-1">• MSc Finance: <strong>#21</strong> (Financial Times 2025)</li>
          <li class="mb-1">• EMBA: <strong>Top 30</strong> globally (Financial Times 2025)</li>
          <li class="mb-1">• Accounting &amp; Finance: <strong>#37</strong> (QS 2025)</li>
          <li class="mb-1">• Top 50 globally in Business &amp; Management (QS 2025)</li>
        </ul>
      </div>
    </div>
  </div>
  
  <div id="internationalisation" class="my-5">
    <div class="row align-items-center">
      <div class="col-12 col-md-3 mb-3 mb-md-0 d-flex justify-content-center">
        <img
          src="<?php echo get_template_directory_uri(); ?>/assets/images/hl-icon-3.png"
          alt="Internationalisation Icon"
          class="cuhk-highlight-icon"
        >
      </div>
      <div class="col-12 col-md-9 text-md-start text-center">
        <h4 class="fw-bold mb-3">Our International Reach</h4>
        <ul class="list-unstyled fs-5 mb-2">
          <li class="mb-1">• 5,000+ students from 20+ countries</li>
          <li class="mb-1">• 230+ exchange programmes with 60+ partners in 30+ countries</li>
          <li class="mb-1">• 45,000+ alumni across 50 global locations</li>
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
