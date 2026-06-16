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
                    <div class="tour-title">1. Old Town Central Walking Tour</div>
                    <div class="tour-tagline">“Best for first-time visitors & cultural immersion”</div>
                    <div class="tour-duration">Duration: 2 hours</div>
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
                        <li><a href="#">Central Market</a></li>
                        <li><a href="#">Central to Mid-Levels Escalator</a></li>
                        <li><a href="#">Tai Kwun</a></li>
                        <li><a href="#">Hollywood Road</a></li>
                        <li><a href="#">Man Mo Temple</a></li>
                        <li><a href="#">Kwong Wah Printing Company</a> (1-hour Letterpress Workshop)</li>
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
                    <div class="tour-title">2. Lantau Monastery & Tai O Tour</div>
                    <div class="tour-tagline">“Best for scenic + iconic Hong Kong landmarks”</div>
                    <div class="tour-duration">Duration: 5 hours</div>
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
                        <li><a href="#">Ngong Ping Cable Car</a> (include 1 way standard cabin cable car ticket)</li>
                        <li><a href="#">Po Lin Monastery</a></li>
                        <li><a href="#">Tian Tan Buddha</a></li>
                        <li><a href="#">Tai O Village</a></li>
                    </ul>
                </td>
                <td class="schedule-col-venue">
                    <ul>
                        <li><strong>Assembly Time:</strong> 09:00am (TBC)</li>
                        <li><strong>Assembly & Dismissal Point:</strong> Sheraton Hong Kong Hotel & Towers Lobby (Location>> <a href="https://maps.app.goo.gl/y2MMW92n6YBARvsu7" target="_blank">https://maps.app.goo.gl/y2MMW92n6YBARvsu7</a>)</li>
                        <li>Air-conditioned coach transport throughout the tour</li>
                        <li><strong>Participants are required to arrange their own transportation to the assembly point</strong></li>
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
