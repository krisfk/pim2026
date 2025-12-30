<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content">
		<?php
		/* translators: Hidden accessibility text. */
		esc_html_e( 'Skip to content', 'twentytwentyone' );
		?>
	</a>

	<?php //get_template_part( 'template-parts/header/site-header' ); ?>
	<div class="header-submenu-container" style="display:none; position:absolute; left:0; top:100px; width:100vw; margin-left:calc(50% - 50vw); background:#fff; z-index:1000; border-top:1px solid #eee; box-shadow:0 6px 25px rgba(0,0,0,0.09);">
								<div class="container py-4">
									
								
									<!-- <ul class="header-submenu list-unstyled mb-0 d-flex flex-wrap gap-4">
										<li><a href="#">Call for Papers</a></li>
										<li><a href="#">Keynote Speakers</a></li>
										<li><a href="#">Venue Info</a></li>
										<li><a href="#">Contact Us</a></li>
									</ul> -->

									<div class="row">

									<div class="col-md-4 col-lg-4 ">
	<h6>Getting there</h6>
	<table><tr>
		<td>
<img class="cube" src="<?php echo get_template_directory_uri();?>/assets/images/cube.jpg" alt="">

		</td><td>
		<span class="fw-bold">Register now</span> <br>
		Secure your place at the conference


		</td>
	</tr></table>
									
									</div>
									<div class="col-md-4 col-lg-4 ">
<h6>Resources</h6>

									</div>
									<div class="col-md-4 col-lg-4 ">

			<h6>Recent updates</h6>
									</div>


									</div>

								</div>
							</div>

	<div class="header-container mt-3 mb-3">
				<div class="container">
				

				<div class="header-left">

				<div class="site-logo">
					
				
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Logo">
				
				</div>

				<div class="site-title ps-3">
				<span class="line-1">2026 PIM Conference</span>	
				 <br>
				CUHK school of business </div>
				
				<div class="header-menu-container position-relative">
					<ul class="header-menu mb-0">
						<li><a href="#">Conference Overview</a></li>
						<li><a href="#">CUHK Highlights</a></li>
						<li><a href="#">Schedule</a></li>
						<li><a href="#">Registration</a></li>
						<li class="header-menu-more position-static" style="position:static;">
							<a href="#">More</a>
							<!-- Submenu -->
							
						</li>
					</ul>
				</div>
				<script>
				document.addEventListener('DOMContentLoaded', function() {
					var moreLi = document.querySelector('.header-menu-more');
					var submenu = document.querySelector('.header-submenu-container');
					var menuItems = document.querySelectorAll('.header-menu > li:not(.header-menu-more)');
					
					// Show submenu when hovering over "More"
					moreLi.addEventListener('mouseenter', function() {
						submenu.style.display = 'block';
					});

					// Hide submenu when mouse leaves submenu itself
					submenu.addEventListener('mouseleave', function() {
						submenu.style.display = 'none';
					});

					// To allow hover from "More" to submenu without flicker
					moreLi.addEventListener('mouseleave', function(e) {
						// Do nothing, submenu stays open, as hide is handled only when leaving submenu itself
					});
					
					// Hide submenu when mouse enters any other menu item
					menuItems.forEach(function(item){
						item.addEventListener('mouseenter', function() {
							submenu.style.display = 'none';
						});
					});
				});
				</script>
				<style>
				.header-menu-more { position: relative; }
				.header-submenu-container {
					transition: all 0.23s;
				}
				.header-menu .header-menu-more > a::after {
					content: " ▼";
					font-size:10px;
				}
				@media (max-width: 900px) {
					.header-submenu-container { position: static !important; width:100% !important; margin-left:0 !important; }
				}
				</style>

				</div>

			</div><!-- .container -->	
	</div><!-- .header-container -->


	<div id="content" class="site-content">
		<div id="primary" class="content-area">
			<main id="main" class="site-main">
