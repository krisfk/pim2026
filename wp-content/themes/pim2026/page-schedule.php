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

	<h1 class="mt-5 mb-3 fw-bold">CUHK PIM Conference 2026 Programme   </h1>

    <div class="mb-4">
        <!-- <h2 class="fw-bold" style="font-size:2rem;">CUHK PIM Conference 2026 Programme</h2> -->
        <div class="mt-2 mb-1" style="font-size:1.1rem;">
            <div><strong>Dates:</strong> 21–23 October 2026</div>
            <div><strong>Venue:</strong> CUHK, Hong Kong</div>
        </div>
        <div class="mt-3" style="font-size:1.15rem; font-style:italic;">
            Inspiring Value in Global Education: Sustainable East-West Connections
        </div>
    </div>

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
			vertical-align: middle;
			font-size: 1rem;
		}
		.schedule-programme-table th {
			background-color: #f2f2f2;
			font-weight: 700;
			color: #282828;
		}
		.schedule-programme-table .schedule-col-time,
		.schedule-programme-table .schedule-col-session {
			text-align: center;
		}
		.schedule-programme-table .schedule-col-theme {
			text-align: left;
		}
		.schedule-programme-table .schedule-col-venue,
		.schedule-programme-table .schedule-col-logistics {
			text-align: center;
		}
		.schedule-programme-table.schedule-day-thursday .schedule-col-theme,
		.schedule-programme-table.schedule-day-friday .schedule-col-theme {
			text-align: center;
		}
		.schedule-friday-merged-title {
			text-align: center;
			vertical-align: middle;
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

	<h2 class="schedule-programme-title">Wednesday, 21 October 2026</h2>
	<p class="schedule-programme-focus">Focus: CUHK Business School&rsquo;s Global Education Leadership</p>
	<div class="schedule-programme-note">
		<strong>Programme Note:</strong> By-appointment one-on-one and small-group exchanges with CUHK leadership are arranged off-programme and do not conflict with formal sessions or conference dinners.
	</div>

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
					<td class="schedule-col-time">10:30&ndash;12:00</td>
					<td class="schedule-col-session"></td>
					<td class="schedule-col-theme">Registration opens</td>
					<td class="schedule-col-venue">Registration counter (Ballroom entrance)</td>
				</tr>
				<tr>
					<td class="schedule-col-time">11:00&ndash;11:30</td>
					<td class="schedule-col-session">Newcomer Session</td>
					<td class="schedule-col-theme">Welcome for PIM Newcomers (hosted by PIM Current Member Committee)</td>
					<td class="schedule-col-venue" rowspan="8">Ballroom (L/F), Hyatt Regency Shatin</td>
				</tr>
				<tr>
					<td class="schedule-col-time">11:30&ndash;12:15</td>
					<td class="schedule-col-session">Opening Session</td>
					<td class="schedule-col-theme">
						<strong>Welcome and Institutional Perspective &mdash; Dean Zhou Lin</strong><br>
						Conversation and Reflections: CUHK Business School&rsquo;s approach to global education and East&ndash;West collaboration<br>
						<strong><em>Yenn-Ru Chen, Peter Feher, Alex Markman</em></strong><br>
						PIM Chairs
					</td>
				</tr>
				<tr>
					<td class="schedule-col-time">12:15&ndash;13:15</td>
					<td class="schedule-col-session">Lunch</td>
					<td class="schedule-col-theme">Lunch</td>
				</tr>
				<tr>
					<td class="schedule-col-time">13:15&ndash;14:30</td>
					<td class="schedule-col-session">Session 1</td>
					<td class="schedule-col-theme">
						<strong>Panel Discussion on Global mobility in business education: Value, Challenges and Opportunities</strong><br>
						<span class="">Moderated by Prof. Yenn-Ru Chen</span>
					</td>
				</tr>
				<tr>
					<td class="schedule-col-time">14:30&ndash;15:00</td>
					<td class="schedule-col-session">Coffee Break</td>
					<td class="schedule-col-theme">&mdash;</td>
				</tr>
				<tr>
					<td class="schedule-col-time">15:00&ndash;15:45</td>
					<td class="schedule-col-session">Session 2</td>
					<td class="schedule-col-theme">
						<strong>Panel Discussion on Building Future-Ready Business Leaders Through Global Collaboration</strong><br>
						<em>Moderated by Alex Markman</em><br>
						<em>Speakers: CUHK, and <span class="">2 PIM members</span></em>
					</td>
				</tr>
				<tr>
					<td class="schedule-col-time">15:45&ndash;16:30</td>
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
					<td class="schedule-col-time">18:00&ndash;21:00</td>
					<td class="schedule-col-session">Dinner</td>
					<td class="schedule-col-theme">Reunion Dinner</td>
					<td class="schedule-col-venue">TBC</td>
				</tr>
			</tbody>
		</table>
	</div>

	<h2 class="schedule-programme-title">Thursday, 22 October 2026</h2>
	<p class="schedule-programme-focus">Focus: Global Work Experience &amp; Employability Outcomes</p>

	<div class="table-responsive my-4 text-start">
		<table class="table table-bordered schedule-programme-table schedule-day-thursday mb-0">
			<thead>
				<tr>
					<th class="schedule-col-time" scope="col">Time</th>
					<th class="schedule-col-session" scope="col">Session</th>
					<th class="schedule-col-theme" scope="col">Theme / Speaker</th>
					<th class="schedule-col-logistics" scope="col">Logistics</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="schedule-col-time">09:00&ndash;10:15</td>
					<td class="schedule-col-session">Session 1</td>
					<td class="schedule-col-theme">
						<strong>How experiential learning and co-op models build globally competitive graduates</strong><br>
						<span class="schedule-highlight-grey">Dr. John Lai (CUHK Co-op Director) and industry partners/student representatives</span>
					</td>
					<td class="schedule-col-logistics" rowspan="7">Ballroom (L/F), Hyatt Regency Shatin</td>
				</tr>
				<tr>
					<td class="schedule-col-time">10:15&ndash;10:45</td>
					<td class="schedule-col-session">Coffee Break</td>
					<td class="schedule-col-theme">&mdash;</td>
				</tr>
				<tr>
					<td class="schedule-col-time">10:45&ndash;12:00</td>
					<td class="schedule-col-session">Session 2</td>
					<td class="schedule-col-theme">
						<strong>Panel discussion on Redefining business education through industry-led experiential learning</strong><br>
						<span class="">Moderated by Prof Seen-Meng Chew 3 PIM members with industrial involvement</span>
					</td>
				</tr>
				<tr>
					<td class="schedule-col-time">12:00&ndash;13:00</td>
					<td class="schedule-col-session">Lunch</td>
					<td class="schedule-col-theme">&mdash;</td>
				</tr>
				<tr>
					<td class="schedule-col-time">13:00&ndash;14:00</td>
					<td class="schedule-col-session">Session 3</td>
					<td class="schedule-col-theme"><strong>Marketplace Networking</strong></td>
				</tr>
				<tr>
					<td class="schedule-col-time">14:00&ndash;14:15</td>
					<td class="schedule-col-session">Coffee Break</td>
					<td class="schedule-col-theme">&mdash;</td>
				</tr>
				<tr>
					<td class="schedule-col-time">14:15&ndash;15:30</td>
					<td class="schedule-col-session">Session 4</td>
					<td class="schedule-col-theme">
						<strong>Strategy Task Force Report / Activity</strong><br>
						<em>Moderated by Peter Feher</em>
					</td>
				</tr>
				<tr>
					<td class="schedule-col-time">16:00&ndash;16:45</td>
					<td class="schedule-col-session">Transfer to HK Palace Museum</td>
					<td class="schedule-col-theme"></td>
					<td class="schedule-col-logistics">Coach departs from Hyatt</td>
				</tr>
				<tr>
					<td class="schedule-col-time">17:00&ndash;18:00</td>
					<td class="schedule-col-session">Museum Tour</td>
					<td class="schedule-col-theme">Guided tour</td>
					<td class="schedule-col-logistics">HK Palace Museum</td>
				</tr>
				<tr>
					<td class="schedule-col-time">18:20&ndash;20:30</td>
					<td class="schedule-col-session">Welcome Dinner</td>
					<td class="schedule-col-theme">Connecting with broader CUHK guests. Hosted by Dean Zhou Lin: Institutional welcome and peer-level networking.</td>
					<td class="schedule-col-logistics">TBC</td>
				</tr>
			</tbody>
		</table>
	</div>

	<h2 class="schedule-programme-title">Friday, 23 October 2026</h2>
	<p class="schedule-programme-focus">Focus: Partnerships, Governance &amp; the Way Forward</p>

	<div class="table-responsive my-4 text-start">
		<table class="table table-bordered schedule-programme-table schedule-day-friday mb-0">
			<thead>
				<tr>
					<th class="schedule-col-time" scope="col">Time</th>
					<th class="schedule-col-session" scope="col">Session</th>
					<th class="schedule-col-theme" scope="col">Theme / Speaker</th>
					<th class="schedule-col-logistics" scope="col">Logistics</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="schedule-col-time">09:00&ndash;10:15</td>
					<td class="schedule-friday-merged-title" colspan="2"><strong>Campus Tour &amp; Group Photo</strong></td>
					<td class="schedule-col-logistics">Coaches will depart at Hyatt</td>
				</tr>
				<tr>
					<td class="schedule-col-time">10:20&ndash;10:30</td>
					<td class="schedule-col-session">Brief Closing</td>
					<td class="schedule-col-theme"></td>
					<td class="schedule-col-logistics" rowspan="5">Ballroom (L/F), Hyatt Regency Shatin</td>
				</tr>
				<tr>
					<td class="schedule-col-time">10:30&ndash;12:00</td>
					<td class="schedule-col-session">Closing Session</td>
					<td class="schedule-col-theme"><strong>AI, Best Practices, Strategy wrap-up</strong></td>
				</tr>
				<tr>
					<td class="schedule-col-time">12:00&ndash;13:00</td>
					<td class="schedule-col-session">Lunch</td>
					<td class="schedule-col-theme">&mdash;</td>
				</tr>
				<tr>
					<td class="schedule-col-time">13:00&ndash;14:30</td>
					<td class="schedule-col-session">PIM Business Meeting</td>
					<td class="schedule-col-theme"><strong>Annual updates, announcements</strong></td>
				</tr>
				<tr>
					<td class="schedule-col-time"></td>
					<td class="schedule-col-session">Free Time</td>
					<td class="schedule-col-theme"></td>
				</tr>
				<tr>
					<td class="schedule-col-time schedule-cell-cyan">17:30</td>
					<td class="schedule-col-session schedule-cell-cyan"></td>
					<td class="schedule-col-theme schedule-cell-cyan">Assemble and depart from Harbour Cruise Terminal</td>
					<td class="schedule-col-logistics schedule-cell-cyan">Individual arrangement to departure location</td>
				</tr>
				<tr>
					<td class="schedule-col-time">19:00&ndash;21:30</td>
					<td class="schedule-col-session">Closing Dinner</td>
					<td class="schedule-col-theme">&ldquo;Sea&rdquo; Hong Kong Cruise Dinner</td>
					<td class="schedule-col-logistics">Harbour Cruise</td>
				</tr>
			</tbody>
		</table>
	</div>

</div>

<?php

get_footer();
