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
    src="<?php echo get_template_directory_uri(); ?>/assets/images/subpage-banner-2.jpg"
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

	<h1 class="mt-5 mb-3 fw-bold">Discover Hong Kong
    </h1>

   



    <h3 class="mt-5 mb-3 fw-bold text-start">Explore Hong Kong </h3>
    <div class="text-start mx-auto mb-4" style="">
    A city where glass towers meet mountain trails, incense-filled temples sit beside neon markets, and every corner offers something familiar and entirely new. Whether it’s your first visit or your fifteenth, Hong Kong always has a way of surprising you.
    </div>

    <h3 class="mt-5 mb-3 fw-bold text-start">Must‑Do Experiences in Hong Kong
    </h3>
<div class="text-start mb-5">
  <div class="mb-4">
    <h4 class="fw-bold mb-2">1. Panoramic Night Views of Victoria Harbour</h4>
    <div>
      Nothing captures Hong Kong quite like its skyline — glittering, dramatic, and alive. Head to <strong>The Peak</strong> or the Tsim Sha Tsui Promenade for breathtaking nighttime views. The Peak Tram offers a scenic ride up Hong Kong’s highest point at 552m, giving you sweeping city and harbour panoramas.
    </div>
    <div class="mt-3">
      <span class="fw-semibold">📍 The Peak</span>
      <br>
      <a href="https://maps.app.goo.gl/tN5w5cr8xRAbP2eJ8" target="_blank" rel="noopener">
        Google Maps
      </a>
      <br><br>

      <div>
      <img class="w-75" src="http://161.35.238.223/wp-content/uploads/2026/02/me-1.jpg" alt="">
      </div>
    </div>
  </div>


  <div class="mb-4">
    <h4 class="fw-bold mb-2">2. Old Town Central – Heritage Meets Style</h4>
    <div>
      Explore Hong Kong’s cultural heart: <strong>Man Mo Temple</strong>, the galleries of <strong>Tai Kwun</strong>, and the trendy cafés of SoHo. Expect a mix of incense, street art, historic alleys, and creative energy.
    </div>
    <div class="mt-3">
      <span class="fw-semibold">📍 Old Town Central</span><br>
      <a href="https://www.discoverhongkong.com/eng/explore/neighbourhoods/old-town-central.html" target="_blank" rel="noopener">
        More about Old Town Central
      </a> <br><br>

      <div class="mb-3">
      <img class="w-75" src="http://161.35.238.223/wp-content/uploads/2026/02/me-2a.jpg" alt="">
      </div>
      <div>
      <img class="w-75" src="http://161.35.238.223/wp-content/uploads/2026/02/me-2b.jpg" alt="">
      </div>

    </div>
  </div>


  <div class="mb-4">
    <h4 class="fw-bold mb-2">3. Temple Street Market – Nightlife & Local Flavour</h4>
    <div>
      One of Hong Kong’s most iconic night markets, filled with food stalls, trinkets, fortune tellers, and performers. A vibrant, classic Kowloon experience where you can take in the city’s energy in its most local form.
    </div>
    <div class="mt-3">
      <span class="fw-semibold">📍 Temple Street Market</span><br>
      <a href="https://www.google.com.hk/maps/place/Temple+Street+Night+Market/@22.3065234,114.1674002,17z/data=!3m1!4b1!4m6!3m5!1s0x340400eaf30bc0cd:0xb7dd432faf8433a4!8m2!3d22.3065185!4d114.1699805!16s%2Fg%2F1vv2pvqb?hl=en&entry=ttu&g_ep=EgoyMDI2MDEyMS4wIKXMDSoASAFQAw%3D%3D" target="_blank" rel="noopener">
        Google Maps
      </a>
      <br><br>
      <div>
        <img class="w-75" src="http://161.35.238.223/wp-content/uploads/2026/02/me-3.jpg" alt="Temple Street Market">
      </div>
    </div>
  </div>


  <div class="mb-4">
    <h4 class="fw-bold mb-2">4. Hong Kong UNESCO Global Geopark – Nature’s Drama near the City</h4>
    <div>
      Just beyond the city, the <strong>Hong Kong UNESCO Global Geopark</strong> reveals a quieter, more expansive side of Hong Kong — coastal trails, striking volcanic rock formations, and views shaped over millions of years. Centered around Sai Kung, it’s an easy half‑day escape for fresh air, open landscapes, and a slower pace.
    </div>
    <div class="mt-3">
      <span class="fw-semibold">📍 Hong Kong UNESCO Global Geopark (Sai Kung area)</span><br>
      <a href="https://www.google.com.hk/maps/place/UNESCO+Global+Geopark/@22.3645481,114.374272,18z/data=!4m6!3m5!1s0x34041a889e0f3319:0x2faaf370ad21bc1b!8m2!3d22.3645432!4d114.3755648!16s%2Fm%2F0bxzv_z?hl=en&entry=ttu&g_ep=EgoyMDI2MDEyMS4wIKXMDSoASAFQAw%3D%3D" target="_blank" rel="noopener">
        Google Maps
      </a>
      <br><br>
      <div>
        <img class="w-75" src="http://161.35.238.223/wp-content/uploads/2026/02/me-4.jpg" alt="Hong Kong UNESCO Global Geopark">
      </div>
    </div>
  </div>
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
