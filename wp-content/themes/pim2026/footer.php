<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
	
	<footer id="colophon" class="site-footer">

	<div class="container">


	<div class="row">

			<div class="col-4">

					<div class="site-logo">
									
								
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Logo">
									
					</div>


					<div class="mt-4">
				<b>Location</b> <br>
				Chinese University of Hong Kong, Shatin <br><br>
							<b>Reach</b> <br>
							+852 (3943) 8888
							<a href="mailto:into@pim2026.com" target="_blank">into@pim2026.com</a>

							</div>

			</div>
			<div class="col-4"></div>
			<div class="col-4"></div>

	</div>



	</div>
	
		
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
