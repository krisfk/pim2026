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
    src="<?php echo get_template_directory_uri(); ?>/assets/images/subpage-banner-4.jpg"
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
                <th scope="col">Google location</th>
                <th scope="col">Nearest MTR station</th>
                <th scope="col">Distance to CUHK and Conference venue<br><small>(next to University Station)</small></th>
                <th scope="col">Online reservation</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <strong>Hyatt Regency Hong Kong, Sha Tin</strong><br>
                  <span>(Conference venue)</span>
                </td>
                <td><a href="https://www.google.com/maps?q=Hyatt+Regency+Hong+Kong,+Sha+Tin">Location</a></td>
                <td>University Station<br><small>(East Rail Line)</small></td>
                <td>
                  <ul class="mb-0" style="padding-left: 18px;">
                    <li>CUHK Main Campus (Exit A): 1–2 mins walk</li>
                    <li>Cheng Yu Tung Building (Exit B): 5 mins walk</li>
                  </ul>
                </td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td><strong>Renaissance Hong Kong Harbour View Hotel</strong></td>
                <td>1 Harbour Road, Wan Chai, Hong Kong</td>
                <td>Exhibition Centre<br><small>(East Rail Line)</small></td>
                <td>
                  <ul class="mb-0" style="padding-left: 18px;">
                    <li>CUHK Main Campus (Exit A): ~30 mins train and 1–2 mins walk</li>
                    <li>Cheng Yu Tung Building (Exit B): ~30 mins train and 5 mins walk</li>
                    <li>Hyatt Regency Hong Kong, Sha Tin: ~30 mins train and 5 mins walk</li>
                  </ul> 
                </td>
                <td>

                <a href="https://www.marriott.com/event-reservations/reservation-link.mi?id=1770175771093&key=GRP&app=resvlink&_branch_match_id=1352190193368132452&_branch_referrer=H4sIAAAAAAAAA8soKSkottLXTywo0MtNLCrKzC8p0UvOz9UvSi3OyczLtgdK2ALZZSCOWmaKraG5uYGhuam5uaGBpbFadmqlrXtQgFpdUWpaKlB3Xnp8UlF%2BeXFqka1zRlF%2BbioAJz4swmAAAAA%3D " target="_blank">Reservation</a>
                </td>
              </tr>
              <tr>
                <td><strong>Nina Hotel</strong></td>
                <td>
                  <ul class="mb-0" style="padding-left: 18px;">
                    <li>Tsuen Wan West</li>
                    <li>Island South</li>
                    <li>Causeway Bay</li>
                    <li>Kowloon East</li>
                  </ul>
                </td>
                <td>
                  <ul class="mb-0" style="padding-left: 18px;">
                    <li>Tsuen Wan West Station (Tuen Ma Line)</li>
                    <li>Wong Chuk Hang Station (South Island Line)</li>
                    <li>Tin Hau Station (Island Line)</li>
                    <li>Ngau Tau Kok Station (Kwun Tong Line)</li>
                  </ul>
                </td>
                <td>
                  <ul class="mb-0" style="padding-left: 18px;">
                    <li>~43 mins train</li>
                    <li>~37 mins train</li>
                    <li>~41 mins train</li>
                    <li>~30 mins train</li>
                  </ul>
                </td>
                <td>


                <b>Reservation:</b> <br>
                <ul class="mb-0" style="padding-left: 18px;">
                  <li>
                    <a href="https://be.synxis.com/?adult=1&arrive=2026-10-20&chain=10767&child=0&currency=HKD&depart=2026-10-21&hotel=64396&level=hotel&locale=en-US&productcurrency=HKD&promo=CUHK1026&rooms=1" target="_blank">
                      Tsuen Wan West
                    </a>
                  </li>
                  <li>
                    <a href="https://be.synxis.com/?Hotel=28383&Chain=10767&locale=EN&arrive=2026-10-20&promo=CUHK1026" target="_blank">
                      Island South
                    </a>
                  </li>
                  <li>
                    <a href="https://be.synxis.com/?Hotel=64395&Chain=10767&locale=EN&arrive=2026-10-20&promo=CUHK1026" target="_blank">
                      Causeway Bay
                    </a>
                  </li>
                  <li>
                    <a href="https://be.synxis.com/?Hotel=56602&Chain=10767&locale=EN&arrive=2026-10-20&promo=CUHK1026" target="_blank">
                      Kowloon East
                    </a>
                  </li>
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
              <h5 class="card-title mb-1">Hyatt Regency Hong Kong, Sha Tin <span class="fw-normal">(Conference venue)</span></h5>
              <p class="mb-1"><strong>Google location:</strong><br><a href="https://www.google.com/maps?q=Hyatt+Regency+Hong+Kong,+Sha+Tin">Location</a></p>
              <p class="mb-1"><strong>Nearest MTR station:</strong><br>University Station <small>(East Rail Line)</small></p>
              <p class="mb-1"><strong>Distance to CUHK and Conference venue:</strong>
                <ul class="mb-1" style="padding-left:22px;">
                  <li>CUHK Main Campus (Exit A): 1–2 mins walk</li>
                  <li>Cheng Yu Tung Building (Exit B): 5 mins walk</li>
                </ul>
              </p>
              <p class="mb-1"><strong>Online reservation:</strong> –</p>
            </div>
          </div>
          <div class="card mb-4">
            <div class="card-body">
              <h5 class="card-title mb-1">Renaissance Hong Kong Harbour View Hotel</h5>
              <p class="mb-1"><strong>Google location:</strong><br>1 Harbour Road, Wan Chai, Hong Kong</p>
              <p class="mb-1"><strong>Nearest MTR station:</strong><br>Exhibition Centre <small>(East Rail Line)</small></p>
              <p class="mb-1"><strong>Distance to CUHK and Conference venue:</strong>
                <ul class="mb-1" style="padding-left:22px;">
                  <li>CUHK Main Campus (Exit A): ~30 mins train and 1–2 mins walk</li>
                  <li>Cheng Yu Tung Building (Exit B): ~30 mins train and 5 mins walk</li>
                  <li>Hyatt Regency Hong Kong, Sha Tin: ~30 mins train and 5 mins walk</li>
                </ul>
              </p>
              <p class="mb-1"><strong>Online reservation:</strong>
            <br>
            <a href="https://www.marriott.com/event-reservations/reservation-link.mi?id=1770175771093&key=GRP&app=resvlink&_branch_match_id=1352190193368132452&_branch_referrer=H4sIAAAAAAAAA8soKSkottLXTywo0MtNLCrKzC8p0UvOz9UvSi3OyczLtgdK2ALZZSCOWmaKraG5uYGhuam5uaGBpbFadmqlrXtQgFpdUWpaKlB3Xnp8UlF%2BeXFqka1zRlF%2BbioAJz4swmAAAAA%3D " target="_blank">Reservation</a>

            </p>
            </div>
          </div>
          <div class="card mb-4">
            <div class="card-body">
              <h5 class="card-title mb-1">Nina Hotel</h5>
              <p class="mb-1"><strong>Google location:</strong>
                <ul class="mb-1" style="padding-left:22px;">
                  <li>Tsuen Wan West</li>
                  <li>Island South</li>
                  <li>Causeway Bay</li>
                  <li>Kowloon East</li>
                </ul>
              </p>
              <p class="mb-1"><strong>Nearest MTR station:</strong>
                <ul class="mb-1" style="padding-left:22px;">
                  <li>Tsuen Wan West Station (Tuen Ma Line)</li>
                  <li>Wong Chuk Hang Station (South Island Line)</li>
                  <li>Tin Hau Station (Island Line)</li>
                  <li>Ngau Tau Kok Station (Kwun Tong Line)</li>
                </ul>
              </p>
              <p class="mb-1"><strong>Distance to CUHK and Conference venue:</strong>
                <ul class="mb-1" style="padding-left:22px;">
                  <li>~43 mins train</li>
                  <li>~37 mins train</li>
                  <li>~41 mins train</li>
                  <li>~30 mins train</li>
                </ul>
              </p>
              <p class="mb-1"><strong>Online reservation:</strong>
              <b>Reservation:</b> <br>
                <ul class="mb-0" style="padding-left: 18px;">
                  <li>
                    <a href="https://be.synxis.com/?adult=1&arrive=2026-10-20&chain=10767&child=0&currency=HKD&depart=2026-10-21&hotel=64396&level=hotel&locale=en-US&productcurrency=HKD&promo=CUHK1026&rooms=1" target="_blank">
                      Tsuen Wan West
                    </a>
                  </li>
                  <li>
                    <a href="https://be.synxis.com/?Hotel=28383&Chain=10767&locale=EN&arrive=2026-10-20&promo=CUHK1026" target="_blank">
                      Island South
                    </a>
                  </li>
                  <li>
                    <a href="https://be.synxis.com/?Hotel=64395&Chain=10767&locale=EN&arrive=2026-10-20&promo=CUHK1026" target="_blank">
                      Causeway Bay
                    </a>
                  </li>
                  <li>
                    <a href="https://be.synxis.com/?Hotel=56602&Chain=10767&locale=EN&arrive=2026-10-20&promo=CUHK1026" target="_blank">
                      Kowloon East
                    </a>
                  </li>
                </ul>
            </p>
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
