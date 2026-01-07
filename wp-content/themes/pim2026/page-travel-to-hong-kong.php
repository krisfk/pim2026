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


 <h3 class="mt-5 mb-3 fw-bold">Visa & Entry</h3>  

 <div class="text-start mx-auto mb-4">Visitors must hold a passport valid for at least six months beyond their stay. Most nationalities do not require a visa for short visits (7–180 days). <br> <br> Check requirements: Hong Kong Immigration Department <br> <a href="https://www.immd.gov.hk/eng/services/visas/visit-transit/visit-visa-entry-permit.html" target="_blank">https://www.immd.gov.hk/eng/services/visas/visit-transit/visit-visa-entry-permit.html</a>
 </div>

<h3 class="mt-5 mb-3 fw-bold">Visa Invitation Letter</h3>  
<div class="text-start mx-auto mb-4" >
    <p>
        If you need an invitation letter for visa purposes, please email 
        <a href="mailto:iro@baf.cuhk.edu.hk">iro@baf.cuhk.edu.hk</a>
        with the following information:
    </p>
    <ul class="mb-3">
        <li>Full name (as in passport)</li>
        <li>Passport number (optional)</li>
        <li>Job title</li>
        <li>Institution name &amp; address</li>
        <li>Email for receiving the letter</li>
    </ul>
    <p>
        <strong>Processing time:</strong> 7 business days.<br>
        Letters are issued only to registered attendees with payment completed or invoiced.
    </p>
</div>

<h3 class="mt-5 mb-3 fw-bold">Airport Logistics</h3>
<div class="text-start mx-auto mb-4">
    <ul class="mb-3">
        <li>
            <strong>By MTR (~65 mins):</strong><br>
            Take the Airport Express → Hong Kong Station → transfer to Central → Admiralty → East Rail Line → University Station (exit B to Cheng Yu Tung Building).<br>
            <a href="https://www.mtr.com.hk/en/customer/services/timetable_index.html" target="_blank">Airport Express timetable</a>
        </li>
        <li class="mt-3">
            <strong>By Taxi (~35 mins):</strong><br>
            Take a red urban taxi from the Arrivals Hall; fare approx. HKD 300.<br>
            <span class="fst-italic">Cash preferred.</span>
        </li>
    </ul>
</div>

<h3 class="mt-5 mb-3 fw-bold">Local Transport &amp; Essentials</h3>
<div class="text-start mx-auto mb-4">
    <ul class="mb-3">
        <li>
            <strong>View Map:</strong>
            <br>
            <a href="https://www.google.com/maps/dir//Cheng+Yu+Tung+Building+12+Chak+Cheung+St+Ma+Liu+Shui/@22.4121683,114.2105302,17z/data=!4m5!4m4!1m0!1m2!1m1!1s0x34040620c2f0273b:0x908bdf177aa469b3" target="_blank">
                Directions to Cheng Yu Tung Building
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
            Credit cards are widely accepted. Consider getting an <a href="https://www.octopus.com.hk/en/consumer/octopus-cards/index.html" target="_blank">Octopus card</a> for convenient payment on public transport and at many retailers.
        </li>
        <li class="mt-3">
            <strong>Power:</strong>
            <br>
            UK-style plug (Type G), 220V.
        </li>
    </ul>
</div>

<h3 class="mt-5 mb-3 fw-bold">Overview of Hong Kong</h3>
<div class="text-start mx-auto mb-4" style="max-width:700px; font-size:1.13rem;">
    A dynamic city blending East and West – modern skyscrapers, historic temples, and scenic trails. Perfect for business and leisure.
</div>

<h3 class="mt-5 mb-3 fw-bold">Must-Do Experiences</h3>
<ul class="list-unstyled mb-4" style="font-size:1.1rem; max-width:700px; margin-left:auto; margin-right:auto;">
    <li class="mb-3">
        <span class="fw-bold">Panoramic Night Tour:</span>
        <br>
        Ride the Star Ferry or head to Victoria Peak for breathtaking city night views.
    </li>
    <li class="mb-3">
        <span class="fw-bold">Old Town Central:</span>
        <br>
        Explore Hong Kong’s heritage, street art, and vibrant cafés in this lively district.
    </li>
    <li class="mb-3">
        <span class="fw-bold">Temple Street Market:</span>
        <br>
        Experience the buzzing night market with street food, local wares, and fortune-tellers.
    </li>
    <li class="mb-3">
        <span class="fw-bold">Island Hopping:</span>
        <br>
        Take a ferry to nearby islands—like Lantau or Cheung Chau—for beaches, hikes, and unique culture.
    </li>
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
