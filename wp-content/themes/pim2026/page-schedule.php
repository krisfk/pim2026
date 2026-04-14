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

	<h1 class="mt-5 mb-3 fw-bold">Schedule of Conference Programme</h1>

<style>
  /* Custom schedule table styles for consistent appearance */
  .schedule-table {
    width: 100%;
    max-width: 1000px;
    margin: 0 auto 32px auto;
    border-collapse: collapse;
    font-family: inherit;
    background: #fff;
    box-shadow: 0 2px 12px rgba(0,0,0,0.06);
    border-radius: 10px;
    overflow: hidden;
  }
  .schedule-table th,
  .schedule-table td {
    border: 1px solid #dee2e6;
    padding: 12px 20px;
    text-align: left;
    font-size: 1rem;
    vertical-align: top;
  }
  .schedule-table th {
    background: #f8f1fa;
    font-weight: bold;
    color: #300353;
    font-size: 1.06rem;
  }
  .schedule-table tr.time-row th,
  .schedule-table tr.time-row td {
    background: #e4dbf8;
    color: #300353;
    font-weight: bold;
    text-align: center;
    font-size: 1.04rem;
  }
  .schedule-table .event-title {
    font-weight: bold;
    color: #300353;
  }
  .schedule-table .event-speaker {
    color: #652cb3;
    font-style: italic;
    font-size: 0.98rem;
  }
  @media (max-width: 768px) {
    .schedule-table,
    .schedule-table thead,
    .schedule-table tbody,
    .schedule-table th,
    .schedule-table td,
    .schedule-table tr {
      display: block;
      width: 100%;
    }
    .schedule-table th,
    .schedule-table td {
      box-sizing: border-box;
      width: 100%;
      display: block;
      padding: 12px 10px;
    }
    .schedule-table thead {
      display: none;
    }
    .schedule-table tr {
      margin-bottom: 20px;
      border-radius: 10px;
      box-shadow: 0 1px 4px rgba(0,0,0,0.04);
      border: none;
    }
    .schedule-table td:before {
      content: attr(data-label);
      font-weight: bold;
      color: #300353;
      display: block;
      margin-bottom: 4px;
    }
  }
</style>

<div class="mb-4" style="font-size: 1.15rem;">
  <strong>CUHK PIM Conference 2026 Programme</strong><br>
  <span class="text-muted">Dates:</span> 21–23 October 2026 <br>
  <span class="text-muted">Venue:</span> CUHK, Hong Kong <br>
  <span style="font-style: italic; color: #652cb3;">Inspiring Value in Global Education: Sustainable East-West Connections</span>
</div>

<table class="schedule-table mb-5">
  <thead>
    <tr>
      <th style="width:22%;">Date</th>
      <th style="width:18%;">Time</th>
      <th style="width:60%;">Programme Details</th>
    </tr>
  </thead>
  <tbody>
    <!-- Day 1 -->
    <tr class="time-row">
      <th colspan="3">Wednesday, 21 October 2026</th>
    </tr>
    <tr>
      <td data-label="Date"></td>
      <td data-label="Time">08:30 – 09:30</td>
      <td data-label="Programme Details">
        <span class="event-title">Registration & Welcome Coffee</span>
      </td>
    </tr>
    <tr>
      <td data-label="Date"></td>
      <td data-label="Time">09:30 – 10:00</td>
      <td data-label="Programme Details">
        <span class="event-title">Opening Ceremony & Welcome Address</span>
        <br><span class="event-speaker">Prof. Alice Wong, Vice-Chancellor, CUHK</span>
      </td>
    </tr>
    <tr>
      <td data-label="Date"></td>
      <td data-label="Time">10:00 – 11:00</td>
      <td data-label="Programme Details">
        <span class="event-title">Keynote: "Navigating East-West Partnerships for the Future"</span>
        <br><span class="event-speaker">Dr. Samuel Lee, World Education Forum</span>
      </td>
    </tr>
    <tr>
      <td data-label="Date"></td>
      <td data-label="Time">11:00 – 11:30</td>
      <td data-label="Programme Details">
        <span class="event-title">Coffee Break & Networking</span>
      </td>
    </tr>
    <tr>
      <td data-label="Date"></td>
      <td data-label="Time">11:30 – 13:00</td>
      <td data-label="Programme Details">
        <span class="event-title">Panel 1: Sustainable Global Mobility in Higher Education</span>
        <br><span class="event-speaker">Moderator: Prof. Laura Chan (CUHK)</span>
        <br>
        <span class="event-speaker">Panelists:</span> Dr. Johan Klein (Leiden Univ.), Dr. Priya Verma (IIT Delhi), Prof. Ming Xu (Fudan Univ.)
      </td>
    </tr>
    <tr>
      <td data-label="Date"></td>
      <td data-label="Time">13:00 – 14:00</td>
      <td data-label="Programme Details">
        <span class="event-title">Lunch Break</span>
      </td>
    </tr>
    <tr>
      <td data-label="Date"></td>
      <td data-label="Time">14:00 – 15:30</td>
      <td data-label="Programme Details">
        <span class="event-title">Parallel Sessions: 
          <ul class="mb-0" style="padding-left:22px;">
            <li>1A: Transnational Partnerships</li>
            <li>1B: Technology & Inclusion in Education</li>
          </ul>
        </span>
      </td>
    </tr>
    <tr>
      <td data-label="Date"></td>
      <td data-label="Time">15:30 – 16:00</td>
      <td data-label="Programme Details">
        <span class="event-title">Poster Session & Refreshments</span>
      </td>
    </tr>
    <tr>
      <td data-label="Date"></td>
      <td data-label="Time">16:00 – 17:15</td>
      <td data-label="Programme Details">
        <span class="event-title">Workshop: Building Intercultural Competence</span>
        <br><span class="event-speaker">Dr. Karen Lee (CUHK)</span>
      </td>
    </tr>
    <tr>
      <td data-label="Date"></td>
      <td data-label="Time">18:00 – 20:00</td>
      <td data-label="Programme Details">
        <span class="event-title">Welcome Reception & Networking Dinner</span>
        <br><span class="event-speaker">CUHK Shaw College Hall</span>
      </td>
    </tr>
    <!-- Day 2 -->
    <tr class="time-row">
      <th colspan="3">Thursday, 22 October 2026</th>
    </tr>
    <tr>
      <td data-label="Date"></td>
      <td data-label="Time">09:00 – 09:30</td>
      <td data-label="Programme Details">
        <span class="event-title">Morning Coffee & Registration</span>
      </td>
    </tr>
    <tr>
      <td data-label="Date"></td>
      <td data-label="Time">09:30 – 10:30</td>
      <td data-label="Programme Details">
        <span class="event-title">Keynote: "Innovation in Global Education Models"</span>
        <br><span class="event-speaker">Prof. Elena Rossi (Univ. of Bologna)</span>
      </td>
    </tr>
    <tr>
      <td data-label="Date"></td>
      <td data-label="Time">10:30 – 11:45</td>
      <td data-label="Programme Details">
        <span class="event-title">Panel 2: Policy & Practice in East-West Collaborations</span>
        <br><span class="event-speaker">Moderator: Dr. James Lam (CUHK)</span>
        <br>
        <span class="event-speaker">Panelists:</span> Dr. Helen Kim (Yonsei Univ.), Prof. David Ng (HKU), Ms. Tessa Jones (King's College London)
      </td>
    </tr>
    <tr>
      <td data-label="Date"></td>
      <td data-label="Time">11:45 – 12:15</td>
      <td data-label="Programme Details">
        <span class="event-title">Coffee Break</span>
      </td>
    </tr>
    <tr>
      <td data-label="Date"></td>
      <td data-label="Time">12:15 – 13:30</td>
      <td data-label="Programme Details">
        <span class="event-title">Roundtable: Sustainable Value in International Partnerships</span>
        <br><span class="event-speaker">Facilitators: Dr. Paul Sze (CUHK), Dr. Anya Müller (Freie Universität Berlin)</span>
      </td>
    </tr>
    <tr>
      <td data-label="Date"></td>
      <td data-label="Time">13:30 – 14:30</td>
      <td data-label="Programme Details">
        <span class="event-title">Lunch Break</span>
      </td>
    </tr>
    <tr>
      <td data-label="Date"></td>
      <td data-label="Time">14:30 – 16:00</td>
      <td data-label="Programme Details">
        <span class="event-title">Parallel Sessions:
          <ul class="mb-0" style="padding-left:22px;">
            <li>2A: Student Voices: Future Leaders</li>
            <li>2B: Digital Pedagogies & Sustainability</li>
          </ul>
        </span>
      </td>
    </tr>
    <tr>
      <td data-label="Date"></td>
      <td data-label="Time">16:00 – 16:30</td>
      <td data-label="Programme Details">
        <span class="event-title">Networking Break</span>
      </td>
    </tr>
    <tr>
      <td data-label="Date"></td>
      <td data-label="Time">16:30 – 17:30</td>
      <td data-label="Programme Details">
        <span class="event-title">Country Sessions: Best Practices in Mobility</span>
      </td>
    </tr>
    <tr>
      <td data-label="Date"></td>
      <td data-label="Time">18:30 – 21:00</td>
      <td data-label="Programme Details">
        <span class="event-title">Conference Gala Dinner</span>
        <br><span class="event-speaker">CUHK University Guest House</span>
      </td>
    </tr>
    <!-- Day 3 -->
    <tr class="time-row">
      <th colspan="3">Friday, 23 October 2026</th>
    </tr>
    <tr>
      <td data-label="Date"></td>
      <td data-label="Time">09:30 – 10:00</td>
      <td data-label="Programme Details">
        <span class="event-title">Morning Coffee</span>
      </td>
    </tr>
    <tr>
      <td data-label="Date"></td>
      <td data-label="Time">10:00 – 11:15</td>
      <td data-label="Programme Details">
        <span class="event-title">Panel 3: East-West Collaborations in Research & Innovation</span>
        <br><span class="event-speaker">Moderator: Prof. Francis Choi (CUHK)</span>
        <br>
        <span class="event-speaker">Panelists:</span> Dr. Saori Tanaka (Waseda Univ.), Prof. Tony Li (NUS), Dr. Melissa Brown (Monash Univ.)
      </td>
    </tr>
    <tr>
      <td data-label="Date"></td>
      <td data-label="Time">11:15 – 12:00</td>
      <td data-label="Programme Details">
        <span class="event-title">Closing Plenary: "Towards an Inclusive and Sustainable Future"</span>
        <br><span class="event-speaker">Prof. Michael Cheung (CUHK)</span>
      </td>
    </tr>
    <tr>
      <td data-label="Date"></td>
      <td data-label="Time">12:00 – 12:30</td>
      <td data-label="Programme Details">
        <span class="event-title">Closing Remarks & Farewell</span>
      </td>
    </tr>
    <tr>
      <td data-label="Date"></td>
      <td data-label="Time">14:00 – 17:00</td>
      <td data-label="Programme Details">
        <span class="event-title">Optional Campus & City Tours</span>
      </td>
    </tr>
  </tbody>
</table>

  
</div>

<?php

get_footer();
