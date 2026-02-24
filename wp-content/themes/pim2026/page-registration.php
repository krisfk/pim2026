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
    src="<?php echo get_template_directory_uri(); ?>/assets/images/subpage-banner-3.jpg"
    alt="CUHK Highlights Banner"
    class="subpage-banner-img"
  >
</div>





<div class="container text-center middle-container">

	<h1 class="mt-5 mb-3 fw-bold">Registration & Payment</h1>


    <div class="text-start mx-auto mb-4" style="max-width:600px; font-size:1.1rem;">
        <p>
        <strong>How to Register:</strong>
        <br>

            Complete your registration securely via CUHK’s platform.
            <br>
            <i>Payment options (choose one only):</i>
        </p>
        <ul class="mb-3">
            <li>Credit card</li>
            <li>FPS</li>
            <li>Alipay</li>
            <li>Telegraphic transfer (TT)/Bank Transfer</li>
        </ul>
        <p>
            <strong>Confirmation:</strong>
            <br>
            You’ll receive a confirmation email once payment is processed.
        </p>
        <p class="mt-4">
            <strong>Accessibility:</strong>
            <br>
            We strive to make the conference accessible to all. Contact us for assistance.
        </p>
        <div class="text-center mt-4">
            <a href="#" class="btn btn-primary px-4 py-2 fw-bold" style="background-color:#300353; border:none;">
                Register Now
            </a>
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
