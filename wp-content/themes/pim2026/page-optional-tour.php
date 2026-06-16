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
					<th class="schedule-col-time" scope="col">Time</th>
					<th class="schedule-col-session" scope="col">Session</th>
					<th class="schedule-col-theme" scope="col">Theme / Speaker</th>
					<th class="schedule-col-venue" scope="col">Venue</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="schedule-col-time">10:30–12:00</td>
					<td class="schedule-col-session"></td>
					<td class="schedule-col-theme">Registration opens</td>
					<td class="schedule-col-venue">Registration counter (Ballroom entrance)</td>
				</tr>
				<tr>
					<td class="schedule-col-time">11:00–11:30</td>
					<td class="schedule-col-session">Newcomer Session</td>
					<td class="schedule-col-theme">Welcome for PIM Newcomers (hosted by PIM Current Member Committee)</td>
					<td class="schedule-col-venue" rowspan="8">Ballroom (L/F), Hyatt Regency Shatin</td>
				</tr>
				<tr>
					<td class="schedule-col-time">11:30–12:15</td>
					<td class="schedule-col-session">Opening Session</td>
					<td class="schedule-col-theme">
						<strong>Welcome and Institutional Perspective — Dean Zhou Lin</strong><br>
						Conversation and Reflections: CUHK Business School’s approach to global education and East–West collaboration<br>
						<strong><em>Yenn-Ru Chen, Peter Feher, Alex Markman</em></strong><br>
						PIM Chairs
					</td>
				</tr>
				<tr>
					<td class="schedule-col-time">12:15–13:15</td>
					<td class="schedule-col-session">Lunch</td>
					<td class="schedule-col-theme">Lunch</td>
				</tr>
				<tr>
					<td class="schedule-col-time">13:15–14:30</td>
					<td class="schedule-col-session">Session 1</td>
					<td class="schedule-col-theme">
						<strong>Panel Discussion on Global mobility in business education: Value, Challenges and Opportunities</strong><br>
						<span class="">Moderated by Prof. Yenn-Ru Chen</span>
					</td>
				</tr>
				<tr>
					<td class="schedule-col-time">14:30–15:00</td>
					<td class="schedule-col-session">Coffee Break</td>
					<td class="schedule-col-theme">—</td>
				</tr>
				<tr>
					<td class="schedule-col-time">15:00–15:45</td>
					<td class="schedule-col-session">Session 2</td>
					<td class="schedule-col-theme">
						<strong>Panel Discussion on Building Future-Ready Business Leaders Through Global Collaboration</strong><br>
						<em>Moderated by Alex Markman</em><br>
						<em>Speakers: CUHK, and <span class="">2 PIM members</span></em>
					</td>
				</tr>
				<tr>
					<td class="schedule-col-time">15:45–16:30</td>
					<td class="schedule-col-session">Session 3</td>
					<td class="schedule-col-theme">
						<strong>CUHK Student Case Competition Group Presentation</strong><br>
						(<span class="">CUHK students and alumni</span>; facilitated by Dr. Rosette Leung)
					</td>
				</tr>
				<tr>
					<td class="schedule-col-time">17:00</td>
					<td class="schedule-col-session"></td>
					<td class="schedule-col-theme">Departure from Hyatt to dinner venue</td>
				</tr>
				<tr>
					<td class="schedule-col-time">18:00–21:00</td>
					<td class="schedule-col-session">Dinner</td>
					<td class="schedule-col-theme">Reunion Dinner</td>
					<td class="schedule-col-venue">TBC</td>
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
