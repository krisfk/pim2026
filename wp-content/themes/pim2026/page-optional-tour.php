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
  .card-title{
font-weight:bold;
  }
  .container.middle-container a,
  .middle-container a {
    color: #300353 !important;
  }
  .tour-title,.tour-duration{
    font-weight:bold;
  }
</style>

<style>
		.schedule-programme-table {
			width: 100%;
			border-collapse: collapse;
			background: #fff;
			box-shadow: 0 2px 12px rgba(0, 0, 0, 0.06);
		}
		.schedule-programme-table th,
		.schedule-programme-table td {
			border: 1px solid #adb5bd;
			padding: 12px 16px;
			/* vertical-align: middle; */
			font-size: 1rem;
		}
		.schedule-programme-table th {
			background-color: #f2f2f2;
			font-weight: 700;
			color: #282828;
		}

    .schedule-programme-table thead th {
      vertical-align: middle;
    }
		.schedule-programme-table .schedule-col-time,
		.schedule-programme-table .schedule-col-session {
			/* text-align: center; */
		}
		.schedule-programme-table .schedule-col-theme {
			/* text-align: left; */
		}
		.schedule-programme-table .schedule-col-venue,
		.schedule-programme-table .schedule-col-logistics {
			/* text-align: center; */
		}
		.schedule-programme-table.schedule-day-thursday .schedule-col-theme,
		.schedule-programme-table.schedule-day-friday .schedule-col-theme {
			/* text-align: center; */
		}
		.schedule-friday-merged-title {
			/* text-align: center; */
			/* vertical-align: middle; */
		}
		.schedule-cell-cyan {
			background-color: #cff4fc !important;
		}
		.schedule-programme-title {
			color: #0d47a1;
			font-size: 1.75rem;
			font-weight: 700;
			margin-top: 2rem;
			margin-bottom: 0.5rem;
		}
		.schedule-programme-focus {
			font-weight: 700;
			margin-bottom: 1rem;
		}
		.schedule-programme-note {
			border: 1px solid #ced4da;
			background: #f8f9fa;
			padding: 1rem 1.25rem;
			text-align: left;
			margin-bottom: 1.5rem;
			max-width: 900px;
			margin-left: auto;
			margin-right: auto;
		}
		.schedule-highlight-grey {
			background-color: #e9ecef;
			font-style: italic;
			padding: 2px 4px;
			display: inline;
		}
		.schedule-highlight-yellow {
			background-color: #fff3cd;
			font-weight: 700;
		}
		.schedule-highlight-cyan {
			background-color: #cff4fc;
			font-weight: 700;
			font-style: italic;
		}
		@media (max-width: 767.98px) {
			.schedule-programme-table th,
			.schedule-programme-table td {
				padding: 8px 6px;
				font-size: 0.92rem;
			}
		}
	</style>
<div class="container text-center middle-container">

	<h1 class="mt-5 mb-3 fw-bold">Optional Tour</h1>

  <div>

  We are offering two optional tour experiences for participants. Each tour is subject to a minimum number of participants. If the minimum is not met or no preference is indicated, the tour may not proceed.
<br>
  <br>

  Please indicate your preference via the tour selection form: <br> <a href="https://forms.cloud.microsoft/r/HFhLiyk8Rp" target="_blank">PIM Conference 2026 - Optional Tour Selection Survey – Fill out form</a>

    
    <div class="table-responsive my-4 text-start">
    <!-- Desktop/table view -->
    <div class="d-none d-md-block">
        <table class="table table-bordered schedule-programme-table mb-0">
            <thead>
                <tr>
                    <th class="schedule-col-time" scope="col" style="width: 28%;">Tour option</th>
                    <th class="schedule-col-session" scope="col" style="width: 8%;">Capacity</th>
                    <th class="schedule-col-theme" scope="col" style="width: 12%;">Estimated Cost</th>
                    <th class="schedule-col-venue" scope="col" style="width: 42%;">Overview</th>
                    <th class="schedule-col-venue" scope="col" style="width: 10%;">Remarks</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="schedule-col-time">
                        <div class="tour-title">1. Old Town Central Walking Tour</div> <br>
                        <div class="tour-tagline">“Best for first-time visitors & cultural immersion”</div> <br>
                        <div class="tour-duration">Duration: 2 hours</div>


                        <div class="tour-photos">

                        <ul class="list-unstyled">
                        <li class="mt-3"><img class="w-100" src="https://2026cuhkpim.com/wp-content/uploads/2026/06/o1.png" alt=""></li>
                          <li class="mt-3"><img class="w-100" src="https://2026cuhkpim.com/wp-content/uploads/2026/06/o2.png" alt=""></li>
                          <li class="mt-3"><img class="w-100" src="https://2026cuhkpim.com/wp-content/uploads/2026/06/o3.png" alt=""></li>

                        </ul>
                        </div>
                    </td>
                    <td class="schedule-col-session">
                        Min. 17<br>
                        Max. 40
                    </td>
                    <td class="schedule-col-theme">
                        HKD470<br>
                        (~USD60)
                    </td>
                    <td class="schedule-col-venue">
                        <p style="margin-top: 0;">Explore the rich contrasts of Hong Kong through this guided walking tour of Central and Sheung Wan. This experience takes you through a dynamic urban landscape where heritage buildings, traditional trades, and historic temples coexist with contemporary architecture and modern city life. Discover stories and local perspectives beyond typical guidebooks, offering an authentic introduction to Hong Kong’s cultural and social fabric.</p>
                        <div class="highlights-title">Highlights:</div>
                        <ul>
                            <li><a href="https://www.discoverhongkong.com/eng/place-to-go/travel.guide-central-market.html" target="_blank">Central Market</a></li>
                            <li><a href="https://www.discoverhongkong.com/eng/place-to-go/travel.guide-central-mid-levels-escalator.html" target="_blank">Central to Mid-Levels Escalator</a></li>
                            <li><a href="https://www.taikwun.hk/en/programme/detail/a-vibrant-summer-awaits-encore-hkjc-celebrates-tai-kwun-8th-anniversary/1794?gad_source=1&gad_campaignid=21483967175&gbraid=0AAAAA99b5E1EZBQWFxnA94XQcD4nDTiMc&gclid=CjwKCAjwxb7RBhA5EiwAQ-AAdGBdwDGmtIvVIIv8cHxcfAelvc5WGKJ-b6-4e0zBeHbSsUSSMZiiwRoCdnUQAvD_BwE" target="_blank">Tai Kwun</a></li>
                            <li><a href="https://www.discoverhongkong.com/eng/neighbourhoods/hollywood-road.html" target="_blank">Hollywood Road</a></li>
                            <li><a href="https://www.discoverhongkong.com/eng/place-to-go/travel.guide-man-mo-temple.html" target="_blank">Man Mo Temple</a></li>
                            <li><a href="https://www.discoverhongkong.com/eng/place-to-go/travel.guide-kwong-wah-printing-company.html" target="_blank">Kwong Wah Printing Company</a> (1-hour Letterpress Workshop)</li>
                        </ul>
                    </td>
                    <td class="schedule-col-venue">
                        <ul>
                            <li><strong>Assembly Time:</strong> 10:00am (TBC)</li>
                            <li><strong>Assembly Point:</strong> Central Market</li>
                            <li><strong>Dismissal Point:</strong> Man Mo Temple</li>
                            <li>Participants are required to arrange their own transportation</li>
                        </ul>
                    </td>
                </tr>
                
                <tr>
                    <td class="schedule-col-time">
                        <div class="tour-title">2. Lantau Monastery & Tai O Tour</div> <br>
                        <div class="tour-tagline">“Best for scenic + iconic Hong Kong landmarks”</div> <br>
                        <div class="tour-duration">Duration: 5 hours</div>

                        <ul class="list-unstyled">
                        <li class="mt-3"><img class="w-100" src="https://2026cuhkpim.com/wp-content/uploads/2026/06/l1.png" alt=""></li>
                        <li class="mt-3"><img class="w-100" src="https://2026cuhkpim.com/wp-content/uploads/2026/06/l2.png" alt=""></li>
                        <li class="mt-3"><img class="w-100" src="https://2026cuhkpim.com/wp-content/uploads/2026/06/l3.png" alt=""></li>
                        </ul>
                    </td>
                    <td class="schedule-col-session">
                        Min. 12<br>
                        Max. 22
                    </td>
                    <td class="schedule-col-theme">
                        HKD980<br>
                        (~USD126)
                    </td>
                    <td class="schedule-col-venue">
                        <p style="margin-top: 0;">Take in the natural scenery and cultural heritage of Lantau Island on this half-day tour. Begin with a scenic 5.7 km Ngong Ping Cable Car ride offering panoramic views of mountains and coastline. Visit the tranquil Po Lin Monastery and the iconic Tian Tan Buddha. The tour concludes at Tai O Fishing Village, known for its stilt houses, local shops, and traditional way of life.</p>
                        <div class="highlights-title">Highlights:</div>
                        <ul>
                            <li><a href="https://www.np360.com.hk/en/" target="_blank">Ngong Ping Cable Car</a> (include 1 way standard cabin cable car ticket)</li>
                            <li><a href="https://www.discoverhongkong.com/eng/place-to-go/travel.guide-po-lin-monastery.html" target="_blank">Po Lin Monastery</a></li>
                            <li><a href="https://www.discoverhongkong.com/eng/place-to-go/travel.guide-the-big-buddha.html" target="_blank">Tian Tan Buddha</a></li>
                            <li><a href="https://www.discoverhongkong.com/eng/place-to-go/travel.guide-tai-o-village.html" target="_blank">Tai O Village</a></li>
                        </ul>
                    </td>
                    <td class="schedule-col-venue">
                        <ul>
                            <li><strong>Assembly Time:</strong> 09:00am (TBC)</li>
                            <li><strong>Assembly & Dismissal Point:</strong> Sheraton Hong Kong Hotel & Towers Lobby (<a href="https://maps.app.goo.gl/y2MMW92n6YBArvsu7" target="_blank">Location</a>)</li>
                            <li>Air-conditioned coach transport throughout the tour</li>
                            <li><strong>Participants are required to arrange their own transportation to the assembly point</strong></li>
                        </ul>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Mobile/card view -->
    <div class="d-block d-md-none">
        <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title mb-1">1. Old Town Central Walking Tour</h5>
                <div class="mb-2 text-muted">Best for first-time visitors & cultural immersion</div>
                <div class="mb-2"><strong>Duration:</strong> 2 hours</div>
                <div class="mb-2">
                    <strong>Capacity:</strong> Min. 17, Max. 40
                </div>
                <div class="mb-2">
                    <strong>Estimated Cost:</strong> HKD470 (~USD60)
                </div>
                <div class="mb-2">
                    <strong>Overview:</strong><br>
                    Explore the rich contrasts of Hong Kong through this guided walking tour of Central and Sheung Wan. This experience takes you through a dynamic urban landscape where heritage buildings, traditional trades, and historic temples coexist with contemporary architecture and modern city life. Discover stories and local perspectives beyond typical guidebooks, offering an authentic introduction to Hong Kong’s cultural and social fabric.
                </div>
                <div class="mb-2">
                    <strong>Highlights:</strong>
                    <ul class="mb-2">
                        <li><a href="https://www.discoverhongkong.com/eng/place-to-go/travel.guide-central-market.html" target="_blank">Central Market</a></li>
                        <li><a href="https://www.discoverhongkong.com/eng/place-to-go/travel.guide-central-mid-levels-escalator.html" target="_blank">Central to Mid-Levels Escalator</a></li>
                        <li><a href="https://www.taikwun.hk/en/programme/detail/a-vibrant-summer-awaits-encore-hkjc-celebrates-tai-kwun-8th-anniversary/1794?gad_source=1&gad_campaignid=21483967175&gbraid=0AAAAA99b5E1EZBQWFxnA94XQcD4nDTiMc&gclid=CjwKCAjwxb7RBhA5EiwAQ-AAdGBdwDGmtIvVIIv8cHxcfAelvc5WGKJ-b6-4e0zBeHbSsUSSMZiiwRoCdnUQAvD_BwE" target="_blank">Tai Kwun</a></li>
                        <li><a href="https://www.discoverhongkong.com/eng/neighbourhoods/hollywood-road.html" target="_blank">Hollywood Road</a></li>
                        <li><a href="https://www.discoverhongkong.com/eng/place-to-go/travel.guide-man-mo-temple.html" target="_blank">Man Mo Temple</a></li>
                        <li><a href="https://www.discoverhongkong.com/eng/place-to-go/travel.guide-kwong-wah-printing-company.html" target="_blank">Kwong Wah Printing Company</a> (1-hour Letterpress Workshop)</li>
                    </ul>
                </div>
                <div>
                    <strong>Remarks:</strong>
                    <ul class="mb-2">
                        <li><strong>Assembly Time:</strong> 10:00am (TBC)</li>
                        <li><strong>Assembly Point:</strong> Central Market</li>
                        <li><strong>Dismissal Point:</strong> Man Mo Temple</li>
                        <li>Participants are required to arrange their own transportation</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title mb-1">2. Lantau Monastery & Tai O Tour</h5>
                <div class="mb-2 text-muted">Best for scenic + iconic Hong Kong landmarks</div>
                <div class="mb-2"><strong>Duration:</strong> 5 hours</div>
                <div class="mb-2">
                    <strong>Capacity:</strong> Min. 12, Max. 22
                </div>
                <div class="mb-2">
                    <strong>Estimated Cost:</strong> HKD980 (~USD126)
                </div>
                <div class="mb-2">
                    <strong>Overview:</strong><br>
                    Take in the natural scenery and cultural heritage of Lantau Island on this half-day tour. Begin with a scenic 5.7 km Ngong Ping Cable Car ride offering panoramic views of mountains and coastline. Visit the tranquil Po Lin Monastery and the iconic Tian Tan Buddha. The tour concludes at Tai O Fishing Village, known for its stilt houses, local shops, and traditional way of life.
                </div>
                <div class="mb-2">
                    <strong>Highlights:</strong>
                    <ul class="mb-2">
                        <li><a href="https://www.np360.com.hk/en/" target="_blank">Ngong Ping Cable Car</a> (include 1 way standard cabin cable car ticket)</li>
                        <li><a href="https://www.discoverhongkong.com/eng/place-to-go/travel.guide-po-lin-monastery.html" target="_blank">Po Lin Monastery</a></li>
                        <li><a href="https://www.discoverhongkong.com/eng/place-to-go/travel.guide-the-big-buddha.html" target="_blank">Tian Tan Buddha</a></li>
                        <li><a href="https://www.discoverhongkong.com/eng/place-to-go/travel.guide-tai-o-village.html" target="_blank">Tai O Village</a></li>
                    </ul>
                </div>
                <div>
                    <strong>Remarks:</strong>
                    <ul class="mb-2">
                        <li><strong>Assembly Time:</strong> 09:00am (TBC)</li>
                        <li><strong>Assembly & Dismissal Point:</strong> Sheraton Hong Kong Hotel & Towers Lobby (<a href="https://maps.app.goo.gl/y2MMW92n6YBArvsu7" target="_blank">Location</a>)</li>
                        <li>Air-conditioned coach transport throughout the tour</li>
                        <li><strong>Participants are required to arrange their own transportation to the assembly point</strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
	</div>


  <h3 class="mt-5 mb-3 fw-bold text-start">Important Notes</h3>
<ul class="text-start" style="padding-left:1rem;">
<li>All tours are organised by third-party agencies and are subject to minimum participant numbers.</li>
Payment will be made directly by participants; detailed arrangements will be provided separately.
<li>Places are limited and will be allocated on a first-come, first-served basis.</li>
<li>Additional or ad hoc tour requests cannot be accommodated due to weekend traffic conditions.</li>
<li>All tours include an English-speaking guide.</li>
Tour duration excludes participants’ travel time to and from the assembly/dismissal points.
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

</div>






<?php


get_footer();
