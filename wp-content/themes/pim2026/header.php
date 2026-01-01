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
	<style>
		.header-hamburger {
			display: none;
			cursor: pointer;
			width: 36px;
			height: 36px;
			align-items: center;
			justify-content: center;
			border: none;
			background: transparent;
			padding: 0;
			margin: 0;
			position: fixed;
			top: 16px;
			right: 16px;
			z-index: 2201;
		}
		.header-hamburger span,
		.header-hamburger span::before,
		.header-hamburger span::after {
			display: block;
			position: absolute;
			width: 24px;
			height: 3px;
			background: #300353;
			border-radius: 2px;
			transition: 0.3s;
			content: '';
		}
		.header-hamburger span {
			position: relative;
		}
		.header-hamburger span::before {
			content: '';
			position: absolute;
			top: -8px;
		}
		.header-hamburger span::after {
			content: '';
			position: absolute;
			top: 8px;
		}
		@media (max-width: 900px) {
			.header-hamburger {
				display: flex;
			}
			.header-menu-container {
				display: none !important;
			}
			.header-menu-mobile {
				display: none !important;
			}
			/* Remove top:auto on .header-submenu-container so JS can set absolute */
		}
		@media (min-width: 901px) {
			.header-menu-mobile {
				display: none !important;
			}
			.header-hamburger {
				display: none !important;
			}
		}
		.header-menu-mobile {
			position: fixed;
			top: 0;
			right: 0;
			width: 80vw;
			max-width: 360px;
			height: 100vh;
			background: white;
			box-shadow: -2px 0 12px rgba(0,0,0,0.15);
			padding: 2rem 2rem 1rem 2rem;
			z-index: 2001;
			display: none;
		}
		.header-menu-mobile .close-mobile-menu {
			right: 1.2rem;
			top: 1.1rem;
		}
		.header-menu-mobile ul.header-menu {
			flex-direction: column;
			gap: 0.2rem;
		}
		.header-menu-mobile ul.header-menu li {
			margin-bottom: 1rem;
		}
		.header-menu-mobile .header-submenu-container {
			position: static !important;
			box-shadow: none !important;
			width: 100vw !important;
			margin-left: 0 !important;
			display: none;
		}
		.header-menu-mobile .header-submenu-container.open {
			display: block !important;
		}
		.header-menu-mobile .header-menu-more.open > a {
			color: #511380;
			text-decoration: underline;
		}
	</style>
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

	<!-- Hamburger icon (mobile, fixed top right) -->
	<button class="header-hamburger" aria-label="Open navigation" aria-controls="mobile-header-menu" aria-expanded="false">
		<span></span>
	</button>

	<!-- Desktop submenu (absolute, hidden in mobile) -->
	<div class="header-submenu-container" style="display:none; position:absolute; left:0; top:100px; width:100vw; margin-left:calc(50% - 50vw); background:#fff; z-index:1000; border-top:1px solid #eee; box-shadow:0 6px 25px rgba(0,0,0,0.09);">
		<div class="container py-4">
			<div class="row">
				<div class="col-md-4 col-lg-4 ">
					<h6>Getting there</h6>
					<table>
						<tr>
							<td class="align-top pe-2">
							<img class="cube" src="<?php echo get_template_directory_uri();?>/assets/images/cube.jpg" alt="">
							</td><td>
							<span class="fw-bold">Register now</span> <br>
							Secure your place at the conference</td>
						</tr>
						<tr>
							<td class="align-top pe-2">
							<img class="cube" src="<?php echo get_template_directory_uri();?>/assets/images/cube.jpg" alt="">
							</td><td>
							<span class="fw-bold">Travel to HK</span> <br>
							Plan your journey to Hong Kong</td>
						</tr>
						<tr>
							<td class="align-top pe-2">
							<img class="cube" src="<?php echo get_template_directory_uri();?>/assets/images/cube.jpg" alt="">
							</td><td>
							<span class="fw-bold">Accommodation & tours</span> <br>
							Find lodging and explore the city</td>
						</tr>
						<tr>
							<td class="align-top pe-2">
							<img class="cube" src="<?php echo get_template_directory_uri();?>/assets/images/cube.jpg" alt="">
							</td><td>
							<span class="fw-bold">About HK</span> <br>
							Learn what makes Hong Kong special</td>
						</tr>
					</table>
				</div>
				<div class="col-md-4 col-lg-4 ">
					<h6>Resources</h6>
					<table>
						<tr>
							<td class="align-top pe-2">
							<img class="cube" src="<?php echo get_template_directory_uri();?>/assets/images/cube.jpg" alt="">
							</td><td>
							<span class="fw-bold">Contact us</span> <br>
							Reach out with questions or concerns</td>
						</tr>
						<tr>
							<td class="align-top pe-2">
							<img class="cube" src="<?php echo get_template_directory_uri();?>/assets/images/cube.jpg" alt="">
							</td><td>
							<span class="fw-bold">Home</span> <br>
							Return to the main page</td>
						</tr>
						<tr>
							<td class="align-top pe-2">
							<img class="cube" src="<?php echo get_template_directory_uri();?>/assets/images/cube.jpg" alt="">
							</td><td>
							<span class="fw-bold">About</span> <br>
							Discover our conference mission</td>
						</tr>
						<tr>
							<td class="align-top pe-2">
							<img class="cube" src="<?php echo get_template_directory_uri();?>/assets/images/cube.jpg" alt="">
							</td><td>
							<span class="fw-bold">The gathering</span> <br>
							Where scholars meet and ideas take shape</td>
						</tr>
					</table>
				</div>
				<div class="col-md-4 col-lg-4 ">
					<h6>Recent updates</h6>
					<table>
						<tr>
							<td class="align-top pe-2">
							<img class="news-pic" src="<?php echo get_template_directory_uri();?>/assets/images/news-pic.png" alt="">
							</td><td>
							<span class="fw-bold">Conference dates announced</span> <br>
							Mark your calendar for this year's event</td>
						</tr>
						<tr>
							<td class="align-top pe-2">
							<img class="news-pic" src="<?php echo get_template_directory_uri();?>/assets/images/news-pic.png" alt="">
							</td><td>
							<span class="fw-bold">Early bird registration open</span> <br>
							Register early and save on conference fees</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>

	<!-- MOBILE MENU DRAWER (appears when triggered by hamburger) -->
	<div id="mobile-header-menu" class="header-menu-mobile" tabindex="-1" aria-hidden="true" style="display:none;">
		<button class="btn-close position-absolute close-mobile-menu" aria-label="Close menu" style="z-index:101;right:0.7rem;top:0.8rem;"></button>
		<ul class="header-menu mb-4 mt-4" style="list-style:none; padding-left:0;">
			<li><a href="#" class="d-block py-1">Conference Overview</a></li>
			<li><a href="#" class="d-block py-1">CUHK Highlights</a></li>
			<li><a href="#" class="d-block py-1">Schedule</a></li>
			<li><a href="#" class="d-block py-1">Registration</a></li>
			<li class="header-menu-more-mobile position-static" style="position:static;">
				<a href="#" class="d-block py-1 menu-more-link">More <span style="font-size:12px;">&#9660;</span></a>
				<!-- Custom mobile submenu (copied from .header-submenu-container content) -->
				<div class="header-submenu-container" style="display:none;">
					<div>
						<div class="py-2">
						<h6>Getting there</h6>
						<table>
							<tr>
								<td class="align-top pe-2"><img class="cube" src="<?php echo get_template_directory_uri();?>/assets/images/cube.jpg" alt=""></td>
								<td><span class="fw-bold">Register now</span> <br>Secure your place at the conference</td>
							</tr>
							<tr>
								<td class="align-top pe-2"><img class="cube" src="<?php echo get_template_directory_uri();?>/assets/images/cube.jpg" alt=""></td>
								<td><span class="fw-bold">Travel to HK</span> <br>Plan your journey to Hong Kong</td>
							</tr>
							<tr>
								<td class="align-top pe-2"><img class="cube" src="<?php echo get_template_directory_uri();?>/assets/images/cube.jpg" alt=""></td>
								<td><span class="fw-bold">Accommodation & tours</span> <br>Find lodging and explore the city</td>
							</tr>
							<tr>
								<td class="align-top pe-2"><img class="cube" src="<?php echo get_template_directory_uri();?>/assets/images/cube.jpg" alt=""></td>
								<td><span class="fw-bold">About HK</span> <br>Learn what makes Hong Kong special</td>
							</tr>
						</table>
						</div>
						<div class="py-2">
						<h6>Resources</h6>
						<table>
							<tr>
								<td class="align-top pe-2"><img class="cube" src="<?php echo get_template_directory_uri();?>/assets/images/cube.jpg" alt=""></td>
								<td><span class="fw-bold">Contact us</span> <br>Reach out with questions or concerns</td>
							</tr>
							<tr>
								<td class="align-top pe-2"><img class="cube" src="<?php echo get_template_directory_uri();?>/assets/images/cube.jpg" alt=""></td>
								<td><span class="fw-bold">Home</span> <br>Return to the main page</td>
							</tr>
							<tr>
								<td class="align-top pe-2"><img class="cube" src="<?php echo get_template_directory_uri();?>/assets/images/cube.jpg" alt=""></td>
								<td><span class="fw-bold">About</span> <br>Discover our conference mission</td>
							</tr>
							<tr>
								<td class="align-top pe-2"><img class="cube" src="<?php echo get_template_directory_uri();?>/assets/images/cube.jpg" alt=""></td>
								<td><span class="fw-bold">The gathering</span> <br>Where scholars meet and ideas take shape</td>
							</tr>
						</table>
						</div>
						<div class="py-2">
						<h6>Recent updates</h6>
						<table>
							<tr>
								<td class="align-top pe-2"><img class="news-pic" src="<?php echo get_template_directory_uri();?>/assets/images/news-pic.png" alt=""></td>
								<td><span class="fw-bold">Conference dates announced</span> <br>Mark your calendar for this year's event</td>
							</tr>
							<tr>
								<td class="align-top pe-2"><img class="news-pic" src="<?php echo get_template_directory_uri();?>/assets/images/news-pic.png" alt=""></td>
								<td><span class="fw-bold">Early bird registration open</span> <br>Register early and save on conference fees</td>
							</tr>
						</table>
						</div>
					</div>
				</div>
			</li>
		</ul>
	</div>

	<div class="header-container mt-3 mb-3">
		<div class="container">
			<div class="header-left">
				<div class="site-logo">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Logo">
				</div>
				<div class="site-title ps-3">
					<span class="line-1">2026 PIM Conference</span><br>
					CUHK school of business
				</div>
				<!-- DESKTOP MENU -->
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
				<!-- JS for responsive menu -->
				<script>
				document.addEventListener('DOMContentLoaded', function() {
					// Desktop: Submenu show/hide on hover
					var moreLi = document.querySelector('.header-menu-more');
					var submenu = document.querySelector('.header-submenu-container');
					var menuItems = document.querySelectorAll('.header-menu > li:not(.header-menu-more)');
					if (moreLi && submenu) {
						moreLi.addEventListener('mouseenter', function() {
							if (window.innerWidth > 900) submenu.style.display = 'block';
						});
						submenu.addEventListener('mouseleave', function() {
							if (window.innerWidth > 900) submenu.style.display = 'none';
						});
						moreLi.addEventListener('mouseleave', function(e) { /* only hide on submenu leave */ });
						menuItems.forEach(function(item){
							item.addEventListener('mouseenter', function() {
								if (window.innerWidth > 900) submenu.style.display = 'none';
							});
						});
					}

					// Hamburger logic: toggle submenu display
					var hamburger = document.querySelector('.header-hamburger');
					var mobileMenu = document.getElementById('mobile-header-menu');

					if (hamburger && submenu) {
						hamburger.addEventListener('click', function(e) {
							e.stopPropagation();
							// If submenu is currently shown, hide it; else show it with fixed position
							if (submenu.style.display === 'block') {
								submenu.style.display = 'none';
								// Optionally, also hide mobile menu and reset aria attrs if needed
								if (mobileMenu) {
									mobileMenu.style.display = 'none';
									mobileMenu.setAttribute('aria-hidden', 'true');
									document.body.style.overflow = '';
									hamburger.setAttribute('aria-expanded', 'false');
								}
							} else {
								submenu.style.position = 'fixed';
								submenu.style.left = "0";
								submenu.style.top = "100px";
								submenu.style.width = "100vw";
								submenu.style.marginLeft = "calc(50% - 50vw)";
								submenu.style.display = 'block';
								// Optionally show mobile menu as well, as before
								if (mobileMenu) {
									mobileMenu.style.display = 'block';
									mobileMenu.setAttribute('aria-hidden', 'false');
									document.body.style.overflow = 'hidden';
									hamburger.setAttribute('aria-expanded', 'true');
								}
							}
						});
					}
					// --- End Hamburger logic ---

					// Mobile menu close and other controls are intentionally omitted for this minimal requirement

					// Desktop: leave the rest as-is for submenu (no changes)
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
						.header-menu-container { display: none !important; }
						/* Remove forcing .header-submenu-container to static, so we can override position via JS on hamburger click */
						/* .header-submenu-container { position: static !important; width:100% !important; margin-left:0 !important; } */
					}
				</style>
			</div>
		</div><!-- .container -->	
	</div><!-- .header-container -->


	<div id="content" class="site-content">
		<div id="primary" class="content-area">
			<main id="main" class="site-main">
