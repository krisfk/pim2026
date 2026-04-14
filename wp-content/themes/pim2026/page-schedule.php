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
  .schedule-table {
    width: 100%;
    border-collapse: collapse;
    font-family: sans-serif;
    background: #fff;
    margin-bottom: 2rem;
    box-shadow: 0 2px 12px rgba(0,0,0,0.06);
  }
  .schedule-table th, .schedule-table td {
    border: 1px solid #dee2e6;
    padding: 10px 18px;
    text-align: left;
    vertical-align: top;
    font-size: 1rem;
  }
  .schedule-table th {
    background-color: #e9ecef;
    font-weight: bold;
    color: #223871;
    text-align: center;
  }
  .timecell {
    white-space: nowrap;
    font-weight: bold;
    color: #124572;
    text-align: center;
    min-width: 80px;
  }
  .schedule-venue {
    font-size: .98rem;
    color: #484848;
    font-style: italic;
    white-space: nowrap;
  }
  .highbold { font-weight: bold; color: #1a263c; }
  .highlight { background: #fffbe8; }
  .italic-blue { color: #0C85DB; font-style: italic; font-weight: bold; }
  .note-box {
    border-left: 4px solid #337ab7;
    background-color: #f8faff;
    padding: 12px 16px;
    margin-bottom: 16px;
    font-size: 1.02rem;
  }
  .schedule-date {
    color: #2377BB;
    font-weight: bold;
    font-size: 1.12rem;
  }
  .schedule-focus {
    font-weight: bold;
    color: #17567e;
    font-size: 1.04rem;
    margin-bottom: 0.5rem;
    display: block;
  }
</style>

<div class="text-start mx-auto mb-4" style="max-width:800px;">
  <div class="schedule-date mb-1">Wednesday, 21 October 2026</div>
  <span class="schedule-focus mb-2">Focus: CUHK Business School’s Global Education Leadership</span>
  <div class="note-box">
    <strong>Programme Note:</strong> By-appointment one-on-one and small-group exchanges with CUHK leadership are arranged off-programme and do not conflict with formal sessions or conference dinners.
  </div>

  <table class="schedule-table">
    <thead>
      <tr>
        <th style="width:100px;">Time</th>
        <th style="width:130px;">Session</th>
        <th>Theme / Speaker</th>
        <th style="width:210px;">Venue</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="timecell">10:30–12:00</td>
        <td></td>
        <td>Registration opens</td>
        <td class="schedule-venue">Registration counter<br>(Ballroom entrance)</td>
      </tr>
      <tr>
        <td class="timecell">11:00–11:30</td>
        <td>Newcomer Session</td>
        <td>Welcome for PIM Newcomers<br>
          <span style="font-style:italic;font-size:97%;">(hosted by PIM Current Member Committee)</span>
        </td>
        <td class="schedule-venue">Ballroom (L/F),<br>Hyatt Regency Shatin</td>
      </tr>
      <tr>
        <td class="timecell">11:30–12:15</td>
        <td>Opening Session</td>
        <td>
          <div class="highbold">
            Welcome and Institutional Perspective —<br />
            <span class="highbold">Dean Zhan Li</span>
          </div>
          <div>
            Conversation and introduction to<br>
            CUHK Business School's approach to global education and East-West leadership.
          </div>
          <div style="margin-top:6px;">
            <span class="highbold">Yenn-Ru Chen, Peter Feher, Alex Markarian</span><br>
            <span style="font-size:96%;">PIM Chairs</span>
          </div>
        </td>
        <td class="schedule-venue"></td>
      </tr>
      <tr>
    

  
</div>

<?php

get_footer();
