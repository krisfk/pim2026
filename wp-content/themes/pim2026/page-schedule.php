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
    border-collapse: collapse;
    font-family: sans-serif;
    background: #fff;
    box-shadow: 0 2px 12px rgba(0,0,0,0.06);
  }
  .schedule-table th,
  .schedule-table td {
    border: 1px solid #dee2e6;
    padding: 12px 24px;
    text-align: left;
    vertical-align: middle !important;
    background: #fff;
    font-size: 1rem;
  }
  .schedule-table th {
    background-color: #f2f2f2;
    font-weight: bold;
    color: #282828;
    font-size: 1.07rem;
  }
  .schedule-table tbody tr {
    height: 120px;
  }
  .schedule-table td strong {
    font-size: 1.13em;
  }
  .schedule-table ul {
    padding-left: 20px;
    margin-bottom: 0;
  }
  /* Remove Bootstrap table-hover effect for schedule-table */
  .schedule-table.table-hover > tbody > tr:hover > * {
    background-color: inherit !important;
  }
  @media (max-width: 767.98px) {
    .schedule-table th, .schedule-table td {
      padding: 8px 6px;
      font-size: 0.97rem;
    }
    .schedule-table ul {
      padding-left: 16px;
    }
  }
</style>

<div class="table-responsive my-5">
  <table class="table table-bordered align-middle shadow schedule-table">
    <thead>
      <tr>
        <th align="left" style="min-width: 170px;">Date</th>
        <th align="left" style="min-width: 155px;">Session (Est. Time)</th>
        <th align="left">Planned Activities</th>
      </tr>
    </thead>
    <tbody>
      <!-- Wednesday, 21 October -->
      <tr>
        <td rowspan="3"><strong>Wednesday, 21 October</strong></td>
        <td><strong>Morning</strong><br><span class="text-muted">(10:30–12:30)</span></td>
        <td>
          <ul>
            <li>Registration</li>
            <li>Newcomer Welcome</li>
            <li>Opening Session with CUHK Leadership &amp; PIM Chairs</li>
          </ul>
        </td>
      </tr>
      <tr>
        <td><strong>Afternoon</strong><br><span class="text-muted">(12:15–16:45)</span></td>
        <td>
          <ul>
            <li>Networking Lunch</li>
            <li>Panel: Global Mobility in Business Education</li>
            <li>Panel: Building FutureReady Leaders</li>
            <li>CUHK Case Competition Showcase</li>
          </ul>
        </td>
      </tr>
      <tr>
        <td><strong>Evening</strong><br><span class="text-muted">(18:00–21:00)</span></td>
        <td>
          <ul>
            <li>Networking Dinner</li>
          </ul>
        </td>
      </tr>
      <!-- Thursday, 22 October -->
      <tr>
        <td rowspan="3"><strong>Thursday, 22 October</strong></td>
        <td><strong>Morning</strong><br><span class="text-muted">(09:00–12:00)</span></td>
        <td>
          <ul>
            <li>Experiential Learning &amp; Coop Models – building global competitive graduates</li>
            <li>IndustryLed Experiential Learning Panel</li>
          </ul>
        </td>
      </tr>
      <tr>
        <td><strong>Afternoon</strong><br><span class="text-muted">(12:00–16:00)</span></td>
        <td>
          <ul>
            <li>Networking Lunch</li>
            <li>Marketplace Networking</li>
            <li>PIM Strategy Task Force Session</li>
            <li>Transfer to Hong Kong Palace Museum</li>
          </ul>
        </td>
      </tr>
      <tr>
        <td><strong>Evening</strong><br><span class="text-muted">(17:00–20:30)</span></td>
        <td>
          <ul>
            <li>Guided Museum Tour</li>
            <li>Welcome Dinner</li>
          </ul>
        </td>
      </tr>
      <!-- Friday, 23 October -->
      <tr>
        <td rowspan="3"><strong>Friday, 23 October</strong></td>
        <td><strong>Morning</strong><br><span class="text-muted">(09:00–12:00)</span></td>
        <td>
          <ul>
            <li>CUHK Campus Tour &amp; Group Photo</li>
            <li>Reflection &amp; Closing Session</li>
          </ul>
        </td>
      </tr>
      <tr>
        <td><strong>Afternoon</strong><br><span class="text-muted">(13:00–17:00)</span></td>
        <td>
          <ul>
            <li>PIM Business Meeting</li>
            <li>Free Time</li>
          </ul>
        </td>
      </tr>
      <tr>
        <td><strong>Evening</strong><br><span class="text-muted">(19:00–21:30)</span></td>
        <td>
          <ul>
            <li>Harbour Cruise Closing Dinner</li>
          </ul>
        </td>
      </tr>
      <!-- Saturday, 24 October -->
      <tr>
        <td><strong>Saturday, 24 October <br><span class="text-muted">(Post-Conference)</span></strong></td>
        <td><strong>Optional Tour</strong></td>
        <td>Tour options TBC</td>
      </tr>
    </tbody>
  </table>
</div>

<div class="my-4">
  <a href="#" class="btn btn-primary px-4 py-2 fw-bold" style="background-color:#300353; border:none;">
    View Full Programme
  </a>
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
