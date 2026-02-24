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


<style>
  .container.middle-container a,
  .middle-container a {
    color: #300353 !important;
  }
</style>

<div class="container text-center middle-container">

	<h1 class="mt-5 mb-3 fw-bold">Accommodation</h1>
	
    <div class="text-start mx-auto mb-4">
       
      <div>
        <!-- Desktop/Table view -->
        <div class="table-responsive d-none d-md-block">
          <table class="table table-bordered align-middle">
            <thead class="table-light">
              <tr>
                <th scope="col">Hotel</th>
                <th scope="col">Address</th>
                <th scope="col">Nearest MTR station</th>
                <th scope="col">Distance to CUHK and Conference venue<br><small>(next to University Station)</small></th>
                <th scope="col">Star rating</th>
                <th scope="col">Room rate</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <strong>Hyatt Regency Hong Kong, Sha Tin</strong><br>
                  <span>(Conference venue)</span>
                </td>
                <td>18 Chak Cheung Street, Sha Tin, New Territories, Hong Kong SAR</td>
                <td>University Station<br><small>(East Rail Line)</small></td>
                <td>
                  <ul class="mb-0">
                    <li>CUHK Main Campus (Exit A): 1–2 mins walk</li>
                    <li>Cheng Yu Tung Building (Exit B): 5 mins walk</li>
                  </ul>
                </td>
                <td>5</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td><strong>Renaissance Hong Kong Harbour View Hotel</strong></td>
                <td>1 Harbour Road, Wan Chai, Hong Kong</td>
                <td>Exhibition Centre<br><small>(East Rail Line)</small></td>
                <td>
                  <ul class="mb-0">
                    <li>CUHK Main Campus (Exit A): ~30 mins train and 1–2 mins walk</li>
                    <li>Cheng Yu Tung Building (Exit B): ~30 mins train and 5 mins walk</li>
                    <li>Hyatt Regency Hong Kong, Sha Tin: ~30 mins train and 5 mins walk</li>
                  </ul>
                </td>
                <td>5</td>
                <td>See comment</td>
              </tr>
            </tbody>
          </table>
        </div>
        <!-- Mobile/card view -->
        <div class="d-block d-md-none">
          <div class="card mb-4">
            <div class="card-body">
              <h5 class="card-title mb-1">Hyatt Regency Hong Kong, Sha Tin <span class="text-decoration-none;">(Conference venue)</span></h5>
              <p class="mb-1"><strong>Address:</strong><br>18 Chak Cheung Street, Sha Tin, New Territories, Hong Kong SAR</p>
              <p class="mb-1"><strong>Nearest MTR station:</strong><br>University Station <small>(East Rail Line)</small></p>
              <p class="mb-1"><strong>Distance to CUHK and Conference venue:</strong>
                <ul class="mb-1" style="padding-left:22px;">
                  <li>CUHK Main Campus (Exit A): 1–2 mins walk</li>
                  <li>Cheng Yu Tung Building (Exit B): 5 mins walk</li>
                </ul>
              </p>
              <p class="mb-1"><strong>Star rating:</strong> 5</p>
              <p class="mb-1"><strong>Room rate:</strong> –</p>
            </div>
          </div>
          <div class="card mb-4">
            <div class="card-body">
              <h5 class="card-title mb-1">Renaissance Hong Kong Harbour View Hotel</h5>
              <p class="mb-1"><strong>Address:</strong><br>1 Harbour Road, Wan Chai, Hong Kong</p>
              <p class="mb-1"><strong>Nearest MTR station:</strong><br>Exhibition Centre <small>(East Rail Line)</small></p>
              <p class="mb-1"><strong>Distance to CUHK and Conference venue:</strong>
                <ul class="mb-1" style="padding-left:22px;">
                  <li>CUHK Main Campus (Exit A): ~30 mins train and 1–2 mins walk</li>
                  <li>Cheng Yu Tung Building (Exit B): ~30 mins train and 5 mins walk</li>
                  <li>Hyatt Regency Hong Kong, Sha Tin: ~30 mins train and 5 mins walk</li>
                </ul>
              </p>
              <p class="mb-1"><strong>Star rating:</strong> 5</p>
              <p class="mb-1"><strong>Room rate:</strong> See comment</p>
            </div>
          </div>
        </div>
      </div>
      <style>
        @media (max-width: 767.98px) {
          /* Make the card title larger and bold on mobile */
          .card .card-title {
            font-size: 1.32rem;
            font-weight: bold;
          }
        }
      </style>
    </div>

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
