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
  /* Ensure all table rows have equal height (120px), can be adjusted as needed */
  .schedule-table tbody tr {
    height: 120px;
  }
  .schedule-table td,
  .schedule-table th {
    vertical-align: middle !important;
  }
</style>
<div class="table-responsive my-5">
  <table class="table table-bordered table-hover align-middle shadow schedule-table">
    <thead class="table-light">
      <tr>
        <th style="width:220px;">Day</th>
        <th>Programme</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="fw-bold">Wednesday, October 21</td>
        <td>
          <ul class="list-unstyled mb-0">
            <li>Opening Remarks</li>
            <li>Keynote Address</li>
            <li>Panel Discussion</li>
          </ul>
        </td>
      </tr>
      <tr>
        <td class="fw-bold">Thursday, October 22</td>
        <td>
          <ul class="list-unstyled mb-0">
            <li>Workshops</li>
            <li>Breakout Sessions</li>
            <li>Networking Events</li>
          </ul>
        </td>
      </tr>
      <tr>
        <td class="fw-bold">Friday, October 23</td>
        <td>
          <ul class="list-unstyled mb-0">
            <li>Final Session</li>
            <li>Closing Ceremony</li>
            <li>Farewell Reception</li>
          </ul>
        </td>
      </tr>
      <tr>
        <td class="fw-bold">Saturday, October 24 <span class="badge bg-secondary ms-2">Optional Tour</span></td>
        <td>
          <ul class="list-unstyled mb-0">
            <li>Final Session</li>
          </ul>
        </td>
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
