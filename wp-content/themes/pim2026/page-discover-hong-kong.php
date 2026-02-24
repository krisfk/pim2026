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

    <h3 class="mt-5 mb-3 fw-bold text-start">Visa & Entry</h3>
    <div class="text-start mx-auto mb-4">Visitors must hold a passport valid for at least six months beyond their stay. Most nationalities do not require a visa for short visits (7–180 days). <br> <br> Check requirements: Hong Kong Immigration Department <br> <a href="https://www.immd.gov.hk/eng/services/visas/visit-transit/visit-visa-entry-permit.html" target="_blank">https://www.immd.gov.hk/eng/services/visas/visit-transit/visit-visa-entry-permit.html</a>
    </div>

    <h3 class="mt-5 mb-3 fw-bold text-start">Visa Invitation Letter:</h3>
    <div class="text-start mx-auto mb-4" >
        <p>
            Invitation letters can be issued <b>after your online registration is completed</b>. To request one, simply email us at 
            <a href="mailto:PIM2026@cuhk.edu.hk">PIM2026@cuhk.edu.hk</a> with your information:
        </p>
        <ul class="mb-3">
            <li>Full name (as shown on passport)</li>
            <li>Passport number (optional)</li>
            <li>Job title</li>
            <li>Institution name and address</li>
            <li>Email address for receiving the letter</li>
        </ul>
        <p>
            <strong>Processing time:</strong> approximately 7 business days.<br>
            Please note that invitation letters are provided only to registered attendees whose payment has been completed or formally invoiced.
        </p>
    </div>




    </div>


    <h3 class="mt-5 mb-3 fw-bold text-start">Overview of Hong Kong</h3>
    <div class="text-start mx-auto mb-4" style="">
        A dynamic city blending East and West – modern skyscrapers, historic temples, and scenic trails. Perfect for business and leisure.
    </div>

    <h3 class="mt-5 mb-3 fw-bold text-start">Must-Do Experiences</h3>
    <ul class="mb-4" style="text-align:left;">
        <li class="mb-3">
            <span class="fw-bold">Panoramic Night Tour</span>
        </li>
        <li class="mb-3">
            <span class="fw-bold">Old Town Central</span>
        </li>
        <li class="mb-3">
            <span class="fw-bold">Temple Street Market</span>
        </li>
        <li class="mb-3">
            <span class="fw-bold">Island Hopping</span>
        </li>
    </ul>
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
