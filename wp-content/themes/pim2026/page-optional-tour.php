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
    src="<?php echo get_template_directory_uri(); ?>/assets/images/subpage-banner-5.jpg"
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

	<h1 class="mt-5 mb-3 fw-bold">Optional Tour</h1>

  <div>

  We are offering two optional tour experiences for participants. Each tour is subject to a minimum number of participants. If the minimum is not met or no preference is indicated, the tour may not proceed.
<br>
  <br>

  Please indicate your preference via the tour selection form: <a href="https://forms.cloud.microsoft/r/HFhLiyk8Rp" target="_blank">PIM Conference 2026 - Optional Tour Selection Survey – Fill out form</a>

  <div>

  <div class="table-responsive">
    <table class="table table-bordered align-middle" style="min-width:1000px; font-size:1rem;">
      <thead class="table-light">
        <tr>
          <th style="min-width:150px;">Tour option</th>
          <th style="min-width:100px;">Capacity</th>
          <th style="min-width:120px;">Estimated Cost</th>
          <th style="min-width:350px;">Overview</th>
          <th style="min-width:250px;">Remarks</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <strong>1. Old Town Central Walking Tour</strong><br>
            <span class="fst-italic" style="font-size:90%;">*Enjoy signature dishes & classic encounters*</span><br>
            <span style="font-size:90%;">Duration: 2 hours</span>
          </td>
          <td>
            Min: 17<br>
            Max: 40
          </td>
          <td>
            HKD440<br>
            ~USD56
          </td>
          <td>
            Explore the rich contrasts of Hong Kong through this guided walking tour of Central and Sheung Wan. Participants will trace the evolution, drama and cultural heritage where East harmonizes with West. The tour features major stops at some top contemporary architectural sites, heritage temples, colonial landmarks and local permanent fixtures such as art galleries, creative studios, food businesses in Hong Kong’s cultural and walkable hub.
            <ul style="margin:0; padding-left:1.1em;">
              <li>Central Market</li>
              <li>Graham Street Wet Market Escalator</li>
              <li>Man Mo Temple</li>
              <li>Pang Jai Fabric Market</li>
              <li>Hong Kong Park</li>
              <li>Foreign Multi Printing Company (Letterpress Workshop)</li>
            </ul>
          </td>
          <td>
            <ul style="margin:0; padding-left:1.1em; font-size:95%;">
              <li><strong>Assembly Time:</strong> 16:00hrs (TBC)</li>
              <li><strong>Assembly Point:</strong> Central MTR station</li>
              <li><strong>Destination Point:</strong> Man Mo Temple</li>
              <li>Dismissal point: near temple or arrange other area as required</li>
            </ul>
          </td>
        </tr>
        <tr>
          <td>
            <strong>2. Lantau Monastery & Trail Tour</strong><br>
            <span class="fst-italic" style="font-size:90%;">*Breathtaking views & inside story from Buddhist monks*</span><br>
            <span style="font-size:90%;">Duration: 5 hours</span>
          </td>
          <td>
            Min: 12<br>
            Max: 27
          </td>
          <td>
            HKD691<br>
            ~USD89
          </td>
          <td>
            This is the second morning trip around Lantau of famous Po Lin (Precious Lotus) Monastery, Ngong Ping 360 cable car, the Big Buddha, the Wisdom Path, and Tai O – the “Venice of the East.” Meet local residents, hear living stories, and take in the fantastic sea- and mountainscapes of Lantau, Hong Kong’s largest outlying island.
            <ul style="margin:0; padding-left:1.1em;">
              <li>Ngong Ping 360 Cable Car (25 minutes scenic ride)</li>
              <li>Po Lin Monastery</li>
              <li>Tian Tan Buddha</li>
              <li>Tai O Village</li>
            </ul>
          </td>
          <td>
            <ul style="margin:0; padding-left:1.1em; font-size:95%;">
              <li><strong>Assembly Time:</strong> 09:00hrs (TBC)</li>
              <li><strong>Assembly Point:</strong> Diamond Hill MTR Exit C2</li>
              <li><strong>Destination Point:</strong> Ngong Ping/Po Lin Monastery, Lantau Island</li>
              <li>
                <a href="https://www.np360.com.hk/en/" target="_blank">Ngong Ping 360 Official Website</a>
              </li>
              <li>Includes roundtrip transportation to the assembly point</li>
            </ul>
  
  </div>
  </div>
    <!-- <h3 class="mt-5 mb-3 fw-bold text-start"></h3>
    <div class="text-start mx-auto mb-4">Visitors must hold a passport valid for at least six months beyond their stay. Most nationalities do not require a visa for short visits (7–180 days). <br> <br> Check requirements: Hong Kong Immigration Department <br> <a href="https://www.immd.gov.hk/eng/services/visas/visit-transit/visit-visa-entry-permit.html" target="_blank">https://www.immd.gov.hk/eng/services/visas/visit-transit/visit-visa-entry-permit.html</a>
    </div> -->


   
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
