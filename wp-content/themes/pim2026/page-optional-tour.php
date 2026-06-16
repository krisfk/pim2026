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

    
    <div class="table-responsive my-4 text-start">
		<table class="table table-bordered schedule-programme-table mb-0 align-middle text-start">
			<thead>
				<tr>
					<th style="width:18%" scope="col">Tour option</th>
					<th style="width:7%" scope="col">Capacity</th>
					<th style="width:15%" scope="col">Estimated Cost</th>
					<th style="width:35%" scope="col">Overview</th>
					<th style="width:25%" scope="col">Remarks</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<!-- Old Town Central Walking Tour -->
					<td>
						<strong>1. Old Town Central Walking Tour</strong>
						<br>
						<span class="small fst-italic">Hong Kong’s creative culture &amp; colonial encounters</span>
						<br>
						<span class="small"><strong>Duration:</strong> 2 hours</span>
					</td>
					<td>
						Min.: 17<br>
						Max.: 40
					</td>
					<td>
						HKD420<br>
						(~USD53)
					</td>
					<td>
						Get a feel for the contrasts of Hong Kong through this guided walking tour of Central and Sheung Wan. Participants will discover both well-known icons and hidden heritage stories influencing the city’s vibrancy: historical temples, contemporary architectural symbols, local crafts, graffiti artworks, and unique tea experiences. 
						<br>
						<strong>Highlights:</strong>
						<ul class="mb-1 mt-2 small" style="padding-left:18px;">
							<li><a href="https://www.discoverhongkong.com/eng/place-to-go/travel.guide-central-market.html" target="_blank" rel="noopener">Central Market</a></li>
							<li><a href="https://www.manmo.org/" target="_blank" rel="noopener">Man Mo Temple</a></li>
							<li><a href="https://www.centralmarket.hk/en/about-us" target="_blank" rel="noopener">Central Market Revamp</a></li>
							<li><a href="https://www.tai-kwun.hk/en" target="_blank" rel="noopener">Tai Kwun</a></li>
							<li><a href="https://www.stauntons.com.hk/" target="_blank" rel="noopener">Staunton Street</a></li>
							<li>Kung Wah Printing Company <span class="fst-italic">(Chinese Letterpress Workshop)</span></li>
						</ul>
					</td>
					<td>
						<ul class="mb-1 small" style="padding-left:16px;">
							<li><strong>Assembly Time:</strong> 10:00am (TBC)</li>
							<li><strong>Assembly Point:</strong> Central MTR Station</li>
							<li><strong>Destination Must-See:</strong> Man Mo Temple</li>
							<li>Participants are required to arrange their own transportation to the assembly point.</li>
						</ul>
					</td>
				</tr>
				<tr>
					<!-- Lantau Monastery & Tai O Tour -->
					<td>
						<strong>2. Lantau Monastery & Tai O Tour</strong>
						<br>
						<span class="small fst-italic">Hong Kong’s serene &amp; rustic side. Away from the hustle.</span>
						<br>
						<span class="small"><strong>Duration:</strong> 5 hours</span>
					</td>
					<td>
						Min.: 12<br>
						Max.: 22
					</td>
					<td>
						HKD850<br>
						(~USD109)
					</td>
					<td>
						Experience the serenity and heritage of Lantau Island: enjoy panoramic views on the Ngong Ping 360 cable car*, visit the iconic Tian Tan Buddha and Po Lin Monastery, and take a scenic boat ride plus a cultural stroll at Tai O fishing village. Lunch is included. 
						<br>
						<strong>Highlights:</strong>
						<ul class="mb-1 mt-2 small" style="padding-left:18px;">
							<li><a href="https://www.np360.com.hk/en/" target="_blank" rel="noopener">Ngong Ping 360 Cable Car</a></li>
							<li><a href="https://www.plm.org.hk/eng/home.php" target="_blank" rel="noopener">Po Lin Monastery</a></li>
							<li><a href="https://www.bigbuddha.org.hk/en/index.html" target="_blank" rel="noopener">Tian Tan Buddha</a></li>
							<li><a href="https://www.discoverhongkong.com/eng/explore/neighbourhoods/tai-o.html" target="_blank" rel="noopener">Tai O Village</a></li>
						</ul>
					</td>
					<td>
						<ul class="mb-1 small" style="padding-left:16px;">
							<li><strong>Assembly Time:</strong> 09:00am (TBC)</li>
							<li>
								<strong>Assembly Point:</strong> Disneyland Resort MTR — Hong Kong Hotel at 
								<a href="https://www.hyatt.com/en-US/hotel/china/hyatt-regency-hong-kong-shatin/shahr" target="_blank" rel="noopener">Hyatt Regency Shatin</a>
							</li>
							<li>Lunch included</li>
							<li>An English-speaking guide is included.<br>
							Cost includes all admission fees, cable car, boat trip, guided tour, and transportation to the assembly point.</li>
						</ul>
					</td>
				</tr>
			</tbody>
		</table>
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
