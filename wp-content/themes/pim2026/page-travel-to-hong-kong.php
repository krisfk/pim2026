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


  <h2 class="mb-4 mt-5">Visa &amp; Entry</h2>
  <ul class="text-start mx-auto" style="max-width:650px; font-size:1.08rem;">
    <li>
      Visitors must hold a passport valid for at least six months beyond their stay.
    </li>
    <li>
      Most nationalities do <strong>not</strong> require a visa for short visits (7–180 days).
    </li>
    <li>
      <span>Check requirements: </span>
      <a href="https://www.immd.gov.hk/eng/services/visas/visit-transit/visit-visa-entry-permit.html" target="_blank" rel="noopener">Hong Kong Immigration Department</a>
    </li>
  </ul>

  <h2 class="mb-4 mt-5">Visa Invitation Letter</h2>
  <ul class="text-start mx-auto" style="max-width:650px; font-size:1.08rem;">
    <li>
      If you need an invitation letter for visa purposes, email <a href="mailto:iro@baf.cuhk.edu.hk">iro@baf.cuhk.edu.hk</a> with:
      <ul>
        <li>Full name (as in passport)</li>
        <li>Passport number (optional)</li>
        <li>Job title</li>
        <li>Institution name &amp; address</li>
        <li>Email for receiving the letter</li>
      </ul>
    </li>
    <li>
      Processing time: <strong>7 business days</strong>.
    </li>
    <li>
      Letters are issued only to registered attendees with payment completed or invoiced.
    </li>
  </ul>

  <h2 class="mb-4 mt-5">Airport Logistics</h2>
  <ul class="text-start mx-auto" style="max-width:650px; font-size:1.08rem;">
    <li>
      <strong>By MTR (~65 mins):</strong> Airport Express &rarr; Hong Kong Station &rarr; Central &rarr; Admiralty &rarr; East Rail Line &rarr; University Station (exit B to Cheng Yu Tung Building)
      <br>
      <a href="https://www.mtr.com.hk/en/customer/services/timetable_index.html" target="_blank" rel="noopener">Airport Express timetable</a>
    </li>
    <li>
      <strong>By Taxi (~35 mins):</strong> Red urban taxi from Arrivals Hall; approx. HKD 300. Cash preferred.
    </li>
  </ul>

  <h2 class="mb-4 mt-5">Local Transport &amp; Essentials</h2>
  <ul class="text-start mx-auto" style="max-width:650px; font-size:1.08rem;">
    <li>
      <a href="https://www.google.com/maps/dir//Cheng+Yu+Tung+Building+12+Chak+Cheung+St+Ma+Liu+Shui/@22.4121683,114.2105302,17z/data=!4m5!4m4!1m0!1m2!1m1!1s0x34040620c2f0273b:0x908bdf177aa469b3" target="_blank" rel="noopener">View Map</a>
    </li>
    <li>
      <strong>Weather in October:</strong> 23–28&#8451;, mild and pleasant.<br>
      Before you travel, check latest updates at the <a href="https://www.hko.gov.hk/en/index.html" target="_blank" rel="noopener">Hong Kong Observatory</a>.
    </li>
    <li>
      <a href="https://www.mtr.com.hk/en/customer/services/system_map.html" target="_blank" rel="noopener">MTR map</a>
    </li>
    <li>
      <strong>Currency:</strong> HKD; carry some cash for local shops and taxis.
    </li>
    <li>
      <strong>Payment:</strong> Credit cards widely accepted; Octopus card for local transport.
    </li>
    <li>
      <strong>Power:</strong> UK-style plug, 220V.
    </li>
  </ul>

  <h2 class="mb-4 mt-5">Overview of Hong Kong</h2>
  <p class="text-start mx-auto" style="max-width:650px; font-size:1.08rem;">
    A dynamic city blending East and West – modern skyscrapers, historic temples, and scenic trails. Perfect for business and leisure.
  </p>

  <h2 class="mb-4 mt-5">Must-Do Experiences</h2>
  <ul class="text-start mx-auto" style="max-width:650px; font-size:1.08rem;">
    <li>Panoramic Night Tour</li>
    <li>Old Town Central</li>
    <li>Temple Street Market</li>
    <li>Island Hopping</li>
  </ul>



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
