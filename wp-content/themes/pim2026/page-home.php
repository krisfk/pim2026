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


<div id="home-banner-carousel" class="carousel slide position-relative" data-bs-ride="carousel" style="overflow: hidden;">
  <!-- Headline overlay: center horizontally -->
  <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="z-index: 10; pointer-events: none;">
    <h1 class="fw-bold text-white py-4 px-5 mx-auto" style="background: rgb(49 4 86 / 36%);margin-left: auto;margin-right: auto;margin-top: 0;margin-bottom: 0;text-align: center;max-width: 800px;">
      CUHK PIM Conference 2026: Navigating Sustainable East-West Connections in Dynamic Markets
    </h1>
  </div>
  <div class="carousel-indicators" style="z-index: 11;">
    <button type="button" data-bs-target="#home-banner-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#home-banner-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#home-banner-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/banner-1.jpg'); background-size: cover; background-position: center; min-height: 380px;">
      <!-- Optionally add content here (caption, etc.) -->
    </div>
    <div class="carousel-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/banner-2.jpg'); background-size: cover; background-position: center; min-height: 380px;">
      <!-- Optionally add content here -->
    </div>
    <div class="carousel-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/banner-3.jpg'); background-size: cover; background-position: center; min-height: 380px;">
      <!-- Optionally add content here -->
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#home-banner-carousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#home-banner-carousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>



<div class="container text-center middle-container">

	<h1 class="mt-5 mb-3 fw-bold">Overview</h1>

	<div>
  Join global leaders, scholars, and innovators at CUHK for three days of insights and collaboration. Explore strategies for cross-border partnerships, business resilience, and sustainable growth in today’s evolving global landscape.	</div>

	<h3 class="mt-5 mb-3 fw-bold">Key Dates</h3>

	<div>
  Conference Dates: October 21–23, 2026 <br>
  Place: The Chinese University of Hong Kong
		<!-- Registration Deadline: February 15, 2026 <br>
		 March 15 - March 17, 2026 <br><br>
		Attendees are encouraged to register early to secure their participation in this hybrid event. -->
	</div>

</div>	

<div id="testimonial-carousel" class="carousel slide w-100 mt-5" data-bs-ride="carousel">
  <h3 class="text-center  mb-4 fw-bold">Messages</h3>

 
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#testimonial-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#testimonial-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#testimonial-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="d-flex flex-column align-items-center justify-content-center">
        <p class="mb-3 fs-4 fst-italic pe-3 ps-3">"The PIM Conference 2026 was a transformative experience. The sessions were insightful and the networking opportunities unrivaled."</p>
        <div><img class="profile-pic" src="<?php echo get_template_directory_uri(); ?>/assets/images/profile-pic.png" alt=""></div>
		<div class="fw-bold mt-2">— Prof. Alex Wong, HKU</div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="d-flex flex-column align-items-center justify-content-center">
        <p class="mb-3 fs-4 fst-italic pe-3 ps-3">"Connecting with peers worldwide at CUHK truly broadened my perspectives on business and innovation."</p>
		<div><img class="profile-pic" src="<?php echo get_template_directory_uri(); ?>/assets/images/profile-pic.png" alt=""></div>

		<div class="fw-bold mt-2">— Maria Chen, Entrepreneur</div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="d-flex flex-column align-items-center justify-content-center">
        <p class="mb-3 fs-4 fst-italic pe-3 ps-3">"Superbly organized and very forward-thinking. I'm already looking forward to the next edition!"</p>
        <div><img class="profile-pic" src="<?php echo get_template_directory_uri(); ?>/assets/images/profile-pic.png" alt=""></div>

		<div class="fw-bold mt-2">— Dr. Samuel Lee, Industry Leader</div>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#testimonial-carousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#testimonial-carousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>




<div class="container youtube-container">

<div class="row justify-content-center my-5">
  <div class="col-12 col-md-10 col-lg-8">
    <div class="ratio ratio-16x9">
      <iframe src="https://www.youtube.com/embed/f3jhYXqb0TU" 
              title="YouTube video player" 
              frameborder="0" 
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
              allowfullscreen>
      </iframe>
    </div>
  </div>
</div>

<div class="d-flex gap-3 justify-content-center mt-4">
  <a href="#" class="btn btn-primary px-4 py-2 home-btn-register">
    Register
  </a>
  <a href="#" class="px-4 py-2 home-btn-schedule">
    Schedule
    <span class="ms-2">&#8594;</span>
  </a>
</div>

</div>



<?php


get_footer();
