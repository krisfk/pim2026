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


	<div class="header-container">
				<div class="container">
				

				<div class="header-left">

				<div class="site-logo">
					
				
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Logo">
				
				</div>

				<div class="site-title ps-3">2026 PIM Conference <br>
				CUHK school of business </div>
				
				<div class="header-menu-container">
					<ul class="header-menu">
						<li><a href="#">Conference Overview</a></li>
						<li><a href="#">CUHK Highlights</a></li>
						<li><a href="#">Schedule</a></li>
						<li><a href="#">Registration</a></li>
						<li><a href="#">More</a></li>
					</ul>
				</div>

				</div>

			</div><!-- .container -->	
	</div><!-- .header-container -->


	<div id="content" class="site-content">
		<div id="primary" class="content-area">
			<main id="main" class="site-main">
