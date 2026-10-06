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
    src="<?php echo get_template_directory_uri(); ?>/assets/images/subpage-banner-5.jpg"
    alt="CUHK Highlights Banner"
    class="subpage-banner-img"
  >
</div>


<style>
  .card-title{
font-weight:bold;
  }
  .container.middle-container a,
  .middle-container a {
    color: #300353 !important;
  }
  .tour-title,.tour-duration{
    font-weight:bold;
  }
  /* Lightbox styles */
  .lightbox-overlay {
      position: fixed;
      top: 0; left: 0; width: 100vw; height: 100vh;
      background: rgba(0,0,0,0.8);
      display: flex;
      align-items: center; justify-content: center;
      z-index: 10500;
      cursor: zoom-out;
      opacity: 0;
      pointer-events: none;
      transition: opacity 0.24s;
  }
  .lightbox-overlay.active {
      opacity: 1;
      pointer-events: auto;
  }
  .lightbox-img {
      max-width: 92vw;
      max-height: 92vh;
      border-radius: 10px;
      box-shadow: 0 6px 24px rgba(0,0,0,.7);
      background: #fff;
      padding: 10px;
  }
  .lightbox-caption {
      color: #fff;
      text-align: center;
      margin-top: 0.5rem;
      font-size: 1.07em;
      text-shadow: 0 1px 6px #000, 0 2px 24px #000;
  }
  .lightbox-close-btn {
      position: absolute;
      top: 22px;
      right: 30px;
      z-index: 10600;
      background: rgba(0,0,0,0.65);
      border: none;
      color: #fff;
      font-size: 2rem;
      line-height: 1;
      padding: 0.13em 0.45em 0.15em 0.45em;
      border-radius: 50%;
      cursor: pointer;
      transition: background 0.17s;
      opacity: 0.9;
      box-shadow: 0 1px 8px #000;
      pointer-events: auto;
  }
  .lightbox-close-btn:hover, .lightbox-close-btn:focus {
      background: rgba(70,0,70,0.88);
      color: #fff;
      outline: none;
      opacity: 1.0;
  }
  @media (max-width: 767.98px) {
    .lightbox-img { max-width: 98vw; max-height: 98vh; }
    .lightbox-close-btn { top: 12px; right: 10px; font-size: 1.7rem;
    /* position: relative; */
    top:3rem;
    }
  }
</style>

<style>
		.schedule-programme-table {
			width: 100%;
			border-collapse: collapse;
			background: #fff;
			box-shadow: 0 2px 12px rgba(0, 0, 0, 0.06);
		}
		.schedule-programme-table th,
		.schedule-programme-table td {
			border: 1px solid #adb5bd;
			padding: 12px 16px;
			/* vertical-align: middle; */
			font-size: 1rem;
		}
		.schedule-programme-table th {
			background-color: #f2f2f2;
			font-weight: 700;
			color: #282828;
		}

    .schedule-programme-table thead th {
      vertical-align: middle;
    }
		.schedule-programme-table .schedule-col-time,
		.schedule-programme-table .schedule-col-session {
			/* text-align: center; */
		}
		.schedule-programme-table .schedule-col-theme {
			/* text-align: left; */
		}
		.schedule-programme-table .schedule-col-venue,
		.schedule-programme-table .schedule-col-logistics {
			/* text-align: center; */
		}
		.schedule-programme-table.schedule-day-thursday .schedule-col-theme,
		.schedule-programme-table.schedule-day-friday .schedule-col-theme {
			/* text-align: center; */
		}
		.schedule-friday-merged-title {
			/* text-align: center; */
			/* vertical-align: middle; */
		}
		.schedule-cell-cyan {
			background-color: #cff4fc !important;
		}
		.schedule-programme-title {
			color: #0d47a1;
			font-size: 1.75rem;
			font-weight: 700;
			margin-top: 2rem;
			margin-bottom: 0.5rem;
		}
		.schedule-programme-focus {
			font-weight: 700;
			margin-bottom: 1rem;
		}
		.schedule-programme-note {
			border: 1px solid #ced4da;
			background: #f8f9fa;
			padding: 1rem 1.25rem;
			text-align: left;
			margin-bottom: 1.5rem;
			max-width: 900px;
			margin-left: auto;
			margin-right: auto;
		}
		.schedule-highlight-grey {
			background-color: #e9ecef;
			font-style: italic;
			padding: 2px 4px;
			display: inline;
		}
		.schedule-highlight-yellow {
			background-color: #fff3cd;
			font-weight: 700;
		}
		.schedule-highlight-cyan {
			background-color: #cff4fc;
			font-weight: 700;
			font-style: italic;
		}
		@media (max-width: 767.98px) {
			.schedule-programme-table th,
			.schedule-programme-table td {
				padding: 8px 6px;
				font-size: 0.92rem;
			}
		}
	</style>
<div class="container text-center middle-container">

	<h1 class="mt-5 mb-3 fw-bold">Optional Tour</h1>

  <div class="text-center">



    
    <div class="table-responsive my-4 text-start">
    <!-- Desktop/table view -->
    <div class="d-none d-md-block">
      
    </div>

   
	</div>


  <h3 class="mt-5 mb-3 fw-bold text-start">Important Notes</h3>
<ul class="text-start" style="padding-left:1rem;">
<li>All tours are organised by third-party agencies and are subject to minimum participant numbers.</li>
<li>Payment will be made directly by participants; detailed arrangements will be provided separately.</li>
<li>Places are limited and will be allocated on a first-come, first-served basis.</li>
<li>Additional or ad hoc tour requests cannot be accommodated due to weekend traffic conditions.</li>
<li>All tours include an English-speaking guide.</li>
<li>Tour duration excludes participants’ travel time to and from the assembly/dismissal points.</li>
<li>All tour details, including assembly and departure times, will be decided by the tour organiser and are final.</li>
</ul>


<!-- Lightbox Modal HTML - appears once per page -->
<div id="tour-image-lightbox" class="lightbox-overlay">
  <button type="button" aria-label="Close" class="lightbox-close-btn" id="lightbox-close-btn">&times;</button>
  <div class="lightbox-inner" style="text-align:center; width:100%">
    <img src="" alt="Tour Photo" class="lightbox-img" />
    <div class="lightbox-caption"></div>
  </div>
</div>

<script>
  // Lightbox logic for Tour Photos
  document.addEventListener("DOMContentLoaded", function() {
    var lightboxLinks = document.querySelectorAll('.tour-lightbox');
    var lightbox = document.getElementById('tour-image-lightbox');
    var lightboxImg = lightbox.querySelector('.lightbox-img');
    var lightboxCaption = lightbox.querySelector('.lightbox-caption');
    var lightboxInner = lightbox.querySelector('.lightbox-inner');
    var lightboxCloseBtn = document.getElementById('lightbox-close-btn');

    function closeLightbox() {
      lightbox.classList.remove('active');
      document.body.style.overflow = '';
      setTimeout(function(){lightboxImg.src = "";}, 300);
    }

    lightboxLinks.forEach(function(link) {
      link.addEventListener('click', function(e) {
        e.preventDefault();
        var imgUrl = link.getAttribute('href');
        var altText = '';
        var imgTag = link.querySelector('img');
        var caption = link.dataset.caption || '';
        if(imgTag && imgTag.getAttribute('alt')) { altText = imgTag.getAttribute('alt'); }
        lightboxImg.src = imgUrl;
        lightboxImg.alt = altText;
        if (caption) {
          lightboxCaption.innerHTML = caption;
          lightboxCaption.style.display = 'block';
        } else {
          lightboxCaption.style.display = 'none';
        }
        lightbox.classList.add('active');
        document.body.style.overflow = 'hidden';
        // Move focus to close button for accessibility
        setTimeout(function(){ lightboxCloseBtn && lightboxCloseBtn.focus(); }, 100);
      });
    });

    // Close on overlay click (but not on inner content/image/caption)
    lightbox.addEventListener('click', function(e) {
      // Only close if clicked directly on the overlay (not on inner content/image/caption or button)
      if (e.target === lightbox) {
        closeLightbox();
      }
    });

    // Close with close button
    if (lightboxCloseBtn) {
      lightboxCloseBtn.addEventListener('click', function(e) {
        e.preventDefault();
        closeLightbox();
      });
    }

    // Close on ESC key
    document.addEventListener('keydown', function(e) {
        if (e.key === "Escape" && lightbox.classList.contains('active')) {
          closeLightbox();
        }
    });

    // submenu btn code unchanged
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

</div>






<?php


get_footer();
