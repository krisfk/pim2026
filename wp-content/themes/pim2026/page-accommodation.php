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

	<h1 class="mt-5 mb-3 fw-bold">Accommodation</h1>

    <h3 class="mt-5 mb-3 fw-bold text-start">Visa & Entry</h3>
    <div class="text-start mx-auto mb-4">Visitors must hold a passport valid for at least six months beyond their stay. Most nationalities do not require a visa for short visits (7–180 days). <br> <br> Check requirements: Hong Kong Immigration Department <br> <a href="https://www.immd.gov.hk/eng/services/visas/visit-transit/visit-visa-entry-permit.html" target="_blank">https://www.immd.gov.hk/eng/services/visas/visit-transit/visit-visa-entry-permit.html</a>
    </div>

    <h3 class="mt-5 mb-3 fw-bold text-start">Visa Invitation Letter:</h3>
  

  
    <div class="text-start mx-auto mb-4">
      
    <b>Conference Venue</b> <br>
    Hyatt Regency Hong Kong, Sha Tin <br>
    香港沙田凱悅酒店

    <br>
    <b>MTR</b> <br>
    5 minutes walk from University Station exit B <br>
    <a href="https://maps.app.goo.gl/T9Jffe8Xnrh6fMgZ6" target="_blank">View on map</a>

    <br><br>
    <b>Airport <-> Conference venue</b>


  
    </div>

    <h3 class="mt-5 mb-3 fw-bold text-start">Local Transport &amp; Essentials</h3>
    <div class="text-start mx-auto mb-4">
        <ul class="mb-3">
            <li>
                <strong>View Map:</strong>
                <br>
                
                <a href="https://maps.app.goo.gl/4C13qz6Ebe8Et1Dm7" target="_blank">
                    Directions to Hyatt Regency Hong Kong, Sha Tin
                </a> <br>
                <a href="https://maps.app.goo.gl/bcV3shhQa5tEK1EM6" target="_blank">
                    Directions to CUHK Business School
                </a>

            </li>
            <li class="mt-3">
                <strong>Weather in October:</strong>
                <br>
                23–28&#8451;, mild and pleasant.
                <br>
                Check Hong Kong Observatory for updates:
                <a href="https://www.hko.gov.hk/en/index.html" target="_blank">hko.gov.hk</a>
            </li>
            <li class="mt-3">
                <strong>MTR Map:</strong>
                <br>
                <a href="https://www.mtr.com.hk/en/customer/services/system_map.html" target="_blank">
                    Hong Kong MTR System Map
                </a>
            </li>
            <li class="mt-3">
                <strong>Currency:</strong>
                <br>
                Hong Kong Dollar (HKD); carry some cash for local shops and taxis.
            </li>
            <li class="mt-3">
                <strong>Payment:</strong>
                <br>
                Credit cards are widely accepted. Consider getting an <a href="https://www.octopus.com.hk/en/consumer/octopus-cards/products/on-loan/index.html" target="_blank">Octopus card</a> for convenient payment on public transport and at many retailers.
            </li>
            <li class="mt-3">
                <strong>Power:</strong>
                <br>
                UK-style plug (Type G), 220V.
            </li>
        </ul>
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
