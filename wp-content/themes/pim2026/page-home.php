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


<div id="home-banner-carousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#home-banner-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#home-banner-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#home-banner-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/banner-1.jpg');">
      <!-- Optionally add content here (caption, etc.) -->
    </div>
    <div class="carousel-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/banner-2.jpg');">
      <!-- Optionally add content here -->
    </div>
    <div class="carousel-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/banner-3.jpg');">
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
		From March 15 to March 17, 2026, the conference will explore the theme "Navigating Business Innovation in a Dynamic World." This hybrid event aims to unite scholars, practitioners, and thought leaders to discuss emerging trends and innovative strategies in business. Participants can join either in person at The Chinese University of Hong Kong or virtually, fostering a global dialogue on critical issues affecting the business landscape. Attendees will enjoy keynote speeches, panel discussions, and networking opportunities, enhancing their insights into contemporary challenges and solutions within the ever-evolving business environment
	</div>

	<h3 class="mt-5 mb-3 fw-bold">Key Dates</h3>

	<div>

		Registration Deadline: February 15, 2026 <br>
		Conference Dates: March 15 - March 17, 2026 <br><br>
		Attendees are encouraged to register early to secure their participation in this hybrid event.
	</div>

</div>	

<div id="testimonial-carousel" class="carousel slide w-100 mt-5" data-bs-ride="carousel" style="width:100vw; margin-left:calc(50% - 50vw);">
  <h3 class="text-center  mb-4 fw-bold" style="">Messages</h3>

 
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#testimonial-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#testimonial-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#testimonial-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>

  <div class="carousel-inner" style="max-width: 1000px; margin:0 auto;">
    <div class="carousel-item active">
      <div class="d-flex flex-column align-items-center justify-content-center" style="">
        <p class="mb-3 fs-4 fst-italic" style="max-width:700px;">"The PIM Conference 2026 was a transformative experience. The sessions were insightful and the networking opportunities unrivaled."</p>
        <div><img class="profile-pic" src="<?php echo get_template_directory_uri(); ?>/assets/images/profile-pic.png" alt=""></div>
		<div class="fw-bold mt-2">— Prof. Alex Wong, HKU</div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="d-flex flex-column align-items-center justify-content-center" style="">
        <p class="mb-3 fs-4 fst-italic" style="max-width:700px;">"Connecting with peers worldwide at CUHK truly broadened my perspectives on business and innovation."</p>
		<div><img class="profile-pic" src="<?php echo get_template_directory_uri(); ?>/assets/images/profile-pic.png" alt=""></div>

		<div class="fw-bold mt-2">— Maria Chen, Entrepreneur</div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="d-flex flex-column align-items-center justify-content-center" style="">
        <p class="mb-3 fs-4 fst-italic" style="max-width:700px;">"Superbly organized and very forward-thinking. I’m already looking forward to the next edition!"</p>
        <div><img class="profile-pic" src="<?php echo get_template_directory_uri(); ?>/assets/images/profile-pic.png" alt=""></div>

		<div class="fw-bold mt-2">— Dr. Samuel Lee, Industry Leader</div>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#testimonial-carousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true" style="filter:invert(1);"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#testimonial-carousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true" style="filter:invert(1);"></span>
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

<style>
  .home-btn-register {
    background-color: #300353 !important;
    border: none;
    font-weight: 600;
    transition: background 0.2s, box-shadow 0.2s, transform 0.2s;
  }
  .home-btn-register:hover, .home-btn-register:focus {
    background-color: #511380 !important;
    box-shadow: 0 2px 16px rgba(48,3,83, 0.17);
    transform: translateY(-2px) scale(1.04);
  }
  .home-btn-schedule {
    background: transparent;
    border: 2px solid #300353;
    color: #300353;
    font-weight: 600;
    border-radius: 5px;
    text-decoration: none;
    transition: background 0.2s, color 0.2s, box-shadow 0.2s, transform 0.2s;
    display: flex;
    align-items: center;
  }
  .home-btn-schedule:hover, .home-btn-schedule:focus {
    color: #fff;
    background: #300353;
    box-shadow: 0 2px 16px rgba(48,3,83, 0.11);
    transform: translateY(-2px) scale(1.04);
  }
  .home-btn-schedule:hover span,
  .home-btn-schedule:focus span {
    color: #fff;
    transform: translateX(4px);
    transition: color 0.2s, transform 0.2s;
  }
  .home-btn-schedule span {
    transition: color 0.2s, transform 0.2s;
    color: #300353;
  }
</style>
<div class="d-flex gap-3 justify-content-center mt-4">
  <a href="#" class="btn btn-primary px-4 py-2 home-btn-register">
    Register
  </a>
  <a href="#" class="px-4 py-2 home-btn-schedule">
    Schedule
    <span class="ms-2" style="font-size:1.3em; line-height:1; display:inline-block;">&#8594;</span>
  </a>
</div>

</div>



<?php


get_footer();
