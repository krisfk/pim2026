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
                <td><a target="_blank" href="https://www.google.com/maps?q=Hyatt+Regency+Hong+Kong,+Sha+Tin">Location</a></td>
                <td>University Station<br><small>(East Rail Line)</small></td>
                <td>
                  <ul class="mb-0" style="padding-left: 18px;">
                    <li>CUHK Main Campus (Exit A): 1–2 mins walk</li>
                    <li>Cheng Yu Tung Building (Exit B): 5 mins walk</li>
                    <li>a short walk from the hotel</li>
                  </ul>
                </td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td><strong>Renaissance Hong Kong Harbour View Hotel</strong></td>
                <td><a target="_blank" href="https://www.google.com/maps/search/?api=1&query=22.2815130%2C114.1737820&hl=en-US">Location</a></td>
                <td>Exhibition Centre<br><small>(East Rail Line)</small></td>
                <td>
                  <ul class="mb-0" style="padding-left: 18px;">
                    <li>CUHK Main Campus (Exit A): ~30 mins by metro and 1–2 mins walk</li>
                    <li>Cheng Yu Tung Building (Exit B): ~30 mins by metro and 5 mins walk</li>
                    <li>Hyatt Regency Hong Kong, Sha Tin: ~30 mins by metro and 5 mins walk</li>
                     <!-- <li>A short walk from the hotel</li> -->
                  </ul> 
                </td>
                <td>

                <a href="https://www.marriott.com/event-reservations/reservation-link.mi?id=1770175771093&key=GRP&app=resvlink&_branch_match_id=1352190193368132452&_branch_referrer=H4sIAAAAAAAAA8soKSkottLXTywo0MtNLCrKzC8p0UvOz9UvSi3OyczLtgdK2ALZZSCOWmaKraG5uYGhuam5uaGBpbFadmqlrXtQgFpdUWpaKlB3Xnp8UlF%2BeXFqka1zRlF%2BbioAJz4swmAAAAA%3D" target="_blank">Booking</a> <br><br>
                valid till 20 October 2026
                </td>
              </tr>
              <tr>
                <td><strong>Nina Hotel</strong></td>
                <td>
                  <ol class="mb-0" style="padding-left: 18px;">
                    <li><a href="https://www.google.com/maps/place/Nina+Hotel+Tsuen+Wan+West/@22.3685909,114.110402,17z/data=!4m9!3m8!1s0x3403f8eeb9e6e989:0xd41a294d7391bbb0!5m2!4m1!1i2!8m2!3d22.3685909!4d114.1129769!16s%2Fg%2F12214dqg5?entry=tts" target="_blank">Tsuen Wan West</a></li>
                    <li><a href="https://www.google.com/maps/place/Nina+Hotel+Island+South/@22.2497529,114.1675671,20.25z/data=!4m9!3m8!1s0x34040022712f69bf:0x5ba2cc7319f1e86!5m2!4m1!1i2!8m2!3d22.2496433!4d114.1681462!16s%2Fg%2F155qkm4s?entry=tts" target="_blank">Island South</a></li>
                    <li><a href="https://www.google.com.hk/maps/place/Nina+Hotel+Causeway+Bay/@22.2833345,114.192193,19.79z/data=!4m9!3m8!1s0x3404010009bf34c1:0xcb6d670af2333cf1!5m2!4m1!1i2!8m2!3d22.2832644!4d114.192838!16s%2Fg%2F155sznkt?entry=tts" target="_blank">Causeway Bay</a></li>
                    <li><a href="https://www.google.com/maps/place/Nina+Hotel+Kowloon+East/@22.3143166,114.218221,19.5z/data=!4m10!3m9!1s0x340401097d97e145:0xa466fd0ea5ad7a14!5m3!1s2024-05-03!4m1!1i2!8m2!3d22.3141482!4d114.219058!16s%2Fg%2F11c702qc6j?entry=tts" target="_blank">Kowloon East</a></li>
                  </ol>
                </td>
                <td>
                  <ol class="mb-0" style="padding-left: 18px;">
                    <li>Tsuen Wan West Station (Tuen Ma Line)</li>
                    <li>Wong Chuk Hang Station (South Island Line)</li>
                    <li>Tin Hau Station (Island Line)</li>
                    <li>Ngau Tau Kok Station (Kwun Tong Line)</li>
                  </ol>
                </td>
                <td>
                  <ol class="mb-0" style="padding-left: 18px;">
                    <li>~43 mins by metro</li>
                    <li>~37 mins by metro</li>
                    <li>~41 mins by metro</li>
                    <li>~30 mins by metro</li>
                  </ol>
                </td>
                <td>


                <b>Reservation:</b> <br>
                <ol class="mb-0" style="padding-left: 18px;">
                  <li>
                    <a href="https://be.synxis.com/?adult=1&arrive=2026-10-20&chain=10767&child=0&currency=HKD&depart=2026-10-21&hotel=64396&level=hotel&locale=en-US&productcurrency=HKD&promo=CUHK1026&rooms=1" target="_blank">
                      Booking
                    </a>
                  </li>
                  <li>
                    <a href="https://be.synxis.com/?Hotel=28383&Chain=10767&locale=EN&arrive=2026-10-20&promo=CUHK1026" target="_blank">
                      Booking
                    </a>
                  </li>
                  <li>
                    <a href="https://be.synxis.com/?Hotel=64395&Chain=10767&locale=EN&arrive=2026-10-20&promo=CUHK1026" target="_blank">
                      Booking
                    </a>
                  </li>
                  <li>
                    <a href="https://be.synxis.com/?Hotel=56602&Chain=10767&locale=EN&arrive=2026-10-20&promo=CUHK1026" target="_blank">
                      Booking
                    </a>

                  </li>
                </ol>
<br>
valid till 1 September 2026

                
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
              <p class="mb-1"><strong>Google location:</strong><br><a target="_blank" href="https://www.google.com/maps?q=Hyatt+Regency+Hong+Kong,+Sha+Tin">Location</a></p>
              <p class="mb-1"><strong>Nearest MTR station:</strong><br>University Station <small>(East Rail Line)</small></p>
              <p class="mb-1"><strong>Distance to CUHK and Conference venue:</strong>
                <ul class="mb-1" style="padding-left:22px;">
                  <li>CUHK Main Campus (Exit A): 1–2 mins walk</li>
                  <li>Cheng Yu Tung Building (Exit B): 5 mins walk</li>
                  <li>a short walk from the hotel</li>
                </ul>
              </p>
              <p class="mb-1"><strong>Online reservation:</strong> –</p>
            </div>
          </div>
          <div class="card mb-4">
            <div class="card-body">
              <h5 class="card-title mb-1">Renaissance Hong Kong Harbour View Hotel</h5>
              <p class="mb-1"><strong>Google location:</strong><br><a target="_blank" href="https://www.google.com/maps/search/?api=1&query=22.2815130%2C114.1737820&hl=en-US">Location</a></p>
              <p class="mb-1"><strong>Nearest MTR station:</strong><br>Exhibition Centre <small>(East Rail Line)</small></p>
              <p class="mb-1"><strong>Distance to CUHK and Conference venue:</strong>
                <ul class="mb-1" style="padding-left:22px;">
                  <li>CUHK Main Campus (Exit A): ~30 mins by metro and 1–2 mins walk</li>
                  <li>Cheng Yu Tung Building (Exit B): ~30 mins by metro and 5 mins walk</li>
                  <li>Hyatt Regency Hong Kong, Sha Tin: ~30 mins by metro and 5 mins walk</li>
                   <!-- <li>A short walk from the hotel</li> -->
                </ul>
              </p>
              <p class="mb-1"><strong>Online reservation:</strong>
            <br>
            <a href="https://www.marriott.com/event-reservations/reservation-link.mi?id=1770175771093&key=GRP&app=resvlink&_branch_match_id=1352190193368132452&_branch_referrer=H4sIAAAAAAAAA8soKSkottLXTywo0MtNLCrKzC8p0UvOz9UvSi3OyczLtgdK2ALZZSCOWmaKraG5uYGhuam5uaGBpbFadmqlrXtQgFpdUWpaKlB3Xnp8UlF%2BeXFqka1zRlF%2BbioAJz4swmAAAAA%3D " target="_blank">Booking</a> <br><br>
            valid till 20 October 2026

            </p>
            </div>
          </div>
          <div class="card mb-4">
            <div class="card-body">
              <h5 class="card-title mb-1">Nina Hotel</h5>
              <p class="mb-1"><strong>Google location:</strong>
                <ol class="mb-1" style="padding-left:22px;">
                <li><a href="https://www.google.com/maps/place/Nina+Hotel+Tsuen+Wan+West/@22.3685909,114.110402,17z/data=!4m9!3m8!1s0x3403f8eeb9e6e989:0xd41a294d7391bbb0!5m2!4m1!1i2!8m2!3d22.3685909!4d114.1129769!16s%2Fg%2F12214dqg5?entry=tts" target="_blank">Tsuen Wan West</a></li>
                    <li><a href="https://www.google.com/maps/place/Nina+Hotel+Island+South/@22.2497529,114.1675671,20.25z/data=!4m9!3m8!1s0x34040022712f69bf:0x5ba2cc7319f1e86!5m2!4m1!1i2!8m2!3d22.2496433!4d114.1681462!16s%2Fg%2F155qkm4s?entry=tts" target="_blank">Island South</a></li>
                    <li><a href="https://www.google.com.hk/maps/place/Nina+Hotel+Causeway+Bay/@22.2833345,114.192193,19.79z/data=!4m9!3m8!1s0x3404010009bf34c1:0xcb6d670af2333cf1!5m2!4m1!1i2!8m2!3d22.2832644!4d114.192838!16s%2Fg%2F155sznkt?entry=tts" target="_blank">Causeway Bay</a></li>
                    <li><a href="https://www.google.com/maps/place/Nina+Hotel+Kowloon+East/@22.3143166,114.218221,19.5z/data=!4m10!3m9!1s0x340401097d97e145:0xa466fd0ea5ad7a14!5m3!1s2024-05-03!4m1!1i2!8m2!3d22.3141482!4d114.219058!16s%2Fg%2F11c702qc6j?entry=tts" target="_blank">Kowloon East</a></li>
                </ol>
              </p>
              <p class="mb-1"><strong>Nearest MTR station:</strong>
                <ol class="mb-1" style="padding-left:22px;">
                  <li>Tsuen Wan West Station (Tuen Ma Line)</li>
                  <li>Wong Chuk Hang Station (South Island Line)</li>
                  <li>Tin Hau Station (Island Line)</li>
                  <li>Ngau Tau Kok Station (Kwun Tong Line)</li>
                </ol>
              </p>
              <p class="mb-1"><strong>Distance to CUHK and Conference venue:</strong>
                <ol class="mb-1" style="padding-left:22px;">
                  <li>~43 mins by metro</li>
                  <li>~37 mins by metro</li>
                  <li>~41 mins by metro</li>
                  <li>~30 mins by metro</li>
                </ol>
              </p>
              <p class="mb-1"><strong>Online reservation:</strong>
              <b>Reservation:</b> <br>
                <ol class="mb-0" style="padding-left: 18px;">
                  <li>
                    <a href="https://be.synxis.com/?adult=1&arrive=2026-10-20&chain=10767&child=0&currency=HKD&depart=2026-10-21&hotel=64396&level=hotel&locale=en-US&productcurrency=HKD&promo=CUHK1026&rooms=1" target="_blank">
                      Booking
                    </a>
                  </li>
                  <li>
                    <a href="https://be.synxis.com/?Hotel=28383&Chain=10767&locale=EN&arrive=2026-10-20&promo=CUHK1026" target="_blank">
                      Booking
                    </a>
                  </li>
                  <li>
                    <a href="https://be.synxis.com/?Hotel=64395&Chain=10767&locale=EN&arrive=2026-10-20&promo=CUHK1026" target="_blank">
                      Booking
                    </a>
                  </li>
                  <li>
                    <a href="https://be.synxis.com/?Hotel=56602&Chain=10767&locale=EN&arrive=2026-10-20&promo=CUHK1026" target="_blank">
                      Booking
                    </a>

                  </li>
                </ol>
                <br>
valid till 1 September 2026

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
