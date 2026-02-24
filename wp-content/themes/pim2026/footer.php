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

		<!-- Responsive Row: Stack on mobile, 3 cols on md+ -->
		<div class="row flex-column flex-md-row">
			<style>
				/* Reverse order of col-a and col-b on mobile, col-c always last on mobile. Default order on md/desktop */
				@media (max-width: 767.98px) {
					.footer-col-a {
						order: 2;
					}
					.footer-col-b {
						order: 1;
					}
					.footer-col-c {
						order: 3;
					}
				}
				@media (min-width: 768px) {
					.footer-col-a {
						order: 1;
					}
					.footer-col-b {
						order: 2;
					}
					.footer-col-c {
						order: 3;
					}
				}
			</style>
			<div class="col-12 col-a col-md-4 mb-5 mb-md-0 footer-col-a">

				<div class="site-logo">
					<a href="<?php echo home_url(); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Logo">
					</a>
				</div>

				<div class="mt-4">
					<b>Location</b> <br>
					CUHK Business School <br>
Cheng Yu Tung Building, 12 Chak Cheung Street, Shatin, N.T., Hong Kong

					<br><br>
					<b>Contact Us</b> <br>
					<!-- +852 (3943) 8888 <br> -->
					<a href="mailto:into@pim2026.com" target="_blank">PIM2026@cuhk.edu.hk</a>
				</div>

				<div class="mt-4">
					<div class="d-flex gap-1 align-items-center">
						<a href="https://www.facebook.com/cuhkbschool" target="_blank" rel="noopener" aria-label="Facebook">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect width="24" height="24" rx="6" fill="#fff"/>
								<path d="M16.2 8.45h-2.175V7.3c0-.468.307-.577.523-.577h1.62V4.75L14.04 4.75C11.773 4.75 11.724 6.389 11.724 7.15V8.45H10V10.964h1.724V17.25h2.301V10.963H16l.2-2.513z" fill="#300353"/>
							</svg>
						</a>
						<a href="https://www.instagram.com/cuhkbusinessschool/" target="_blank" rel="noopener" aria-label="Instagram">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect width="24" height="24" rx="6" fill="#fff"/>
								<path d="M12 8.461A3.543 3.543 0 1 0 12 15.547a3.543 3.543 0 0 0 0-7.086zm0 5.84a2.297 2.297 0 1 1 0-4.595 2.297 2.297 0 0 1 0 4.595zm4.55-6.41a.829.829 0 1 0 0 1.658.829.829 0 0 0 0-1.658zm2.361.843c-.053-1.13-.298-2.132-1.09-2.924-.792-.792-1.794-1.037-2.924-1.09C13.58 4.567 13.235 4.55 12 4.55s-1.58.017-2.897.07c-1.13.053-2.132.298-2.924 1.09-.792.792-1.037 1.794-1.09 2.924C4.567 10.42 4.55 10.765 4.55 12s.017 1.58.07 2.897c.053 1.13.298 2.132 1.09 2.924.792.792 1.794 1.037 2.924 1.09C10.42 19.433 10.765 19.45 12 19.45s1.58-.017 2.897-.07c1.13-.053 2.132-.298 2.924-1.09.792-.792 1.037-1.794 1.09-2.924.053-1.317.07-1.662.07-2.897s-.017-1.58-.07-2.897zm-1.478 7.04a2.272 2.272 0 0 1-1.28 1.28c-.888.352-2.994.271-4.153.271-1.158 0-3.265.08-4.153-.271a2.272 2.272 0 0 1-1.28-1.28c-.352-.888-.271-2.994-.271-4.153 0-1.158-.08-3.265.271-4.153a2.272 2.272 0 0 1 1.28-1.28c.888-.352 2.994-.271 4.153-.271 1.158 0 3.265-.08 4.153.271a2.272 2.272 0 0 1 1.28 1.28c.352.888.271 2.994.271 4.153 0 1.158.08 3.265-.271 4.153z" fill="#300353"/>
							</svg>
						</a>
						<a href="https://www.linkedin.com/school/cuhkbusinessschool/" target="_blank" rel="noopener" aria-label="LinkedIn">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect width="24" height="24" rx="6" fill="#fff"/>
								<path d="M18.164 17.25h-2.374v-3.65c0-.87-.015-1.99-1.21-1.99-1.21 0-1.395.946-1.395 1.925v3.715h-2.374V9h2.278v1.12h.032c.317-.602 1.092-1.235 2.247-1.235 2.403 0 2.847 1.582 2.847 3.64v4.725zM6.507 7.876a1.375 1.375 0 1 1 0-2.75 1.375 1.375 0 0 1 0 2.75zM7.7 17.25H5.315V9H7.7v8.25z" fill="#300353"/>
							</svg>
						</a>
						<a href="https://www.youtube.com/channel/UC5FIKe0C-4Cy2afSb1HBTkw" target="_blank" rel="noopener" aria-label="YouTube">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect width="24" height="24" rx="6" fill="#fff"/>
								<path d="M19.615 8.25a2.145 2.145 0 0 0-1.516-1.517C16.872 6.5 12 6.5 12 6.5s-4.872 0-6.099.233A2.147 2.147 0 0 0 4.385 8.25C4.15 9.477 4.15 12 4.15 12s0 2.523.235 3.75a2.148 2.148 0 0 0 1.517 1.516C7.128 17.5 12 17.5 12 17.5s4.872 0 6.099-.234a2.145 2.145 0 0 0 1.516-1.516C19.85 14.523 19.85 12 19.85 12s-.001-2.523-.235-3.75zM10.75 14.5v-5l4.5 2.5-4.5 2.5z" fill="#300353"/>
							</svg>
						</a>
					</div>
				</div>
			</div>

			<div class="col-12 col-b col-md-4 mb-5 mb-md-0 footer-col-b">
				<b>Conference Enquiries</b>
				<form class="mt-3" method="post" action="#">
					<div class="mb-3">
						<input type="text" class="form-control" id="footer-contact-name" name="footer_contact_name" placeholder="Name" required>
					</div>
					<div class="mb-3">
						<input type="email" class="form-control" id="footer-contact-email" name="footer_contact_email" placeholder="Email" required>
					</div>
					<div class="mb-3">
						<textarea class="form-control" id="footer-contact-content" name="footer_contact_content" rows="4" placeholder="Write your message here" required></textarea>
					</div>
					<button type="submit" class="btn btn-primary w-100" style="background-color: #300353; border: none;">Send Message</button>
				</form>
			</div>

			<div class="col-12 col-c col-md-4 footer-col-c">
				<div class="footer-menu">
					<div class="row">
						<div class="col-6">
							<ul class="list-unstyled">
								<li><a href="<?php echo home_url(); ?>" class="footer-link">Conference overview</a></li>
								<li><a href="<?php echo home_url('/schedule'); ?>" class="footer-link">Schedule</a></li>
								<li><a href="<?php echo home_url('/registration'); ?>" class="footer-link">Register now</a></li>
								<li><a href="<?php echo home_url('/travel-to-hong-kong'); ?>" class="footer-link">Travel to HK</a></li>
								<li><a href="<?php echo home_url('/travel-to-hong-kong'); ?>" class="footer-link">Accommodation</a></li>
							</ul>
						</div>
						<div class="col-6">
							<ul class="list-unstyled">
								<li><a href="<?php echo home_url('/travel-to-hong-kong'); ?>" class="footer-link">Tours</a></li>
								<li><a href="<?php echo home_url('/travel-to-hong-kong'); ?>" class="footer-link">About HK</a></li>
								<li><a href="<?php echo home_url('/cuhk-highlights'); ?>" class="footer-link">CUHK highlights</a></li>
								<li><a href="#" onclick="window.scrollTo({ top: document.body.scrollHeight, behavior: 'smooth' }); return false;" class="footer-link">Contact</a></li>
								<li><a href="<?php echo home_url('/travel-to-hong-kong'); ?>" class="footer-link">Logistics</a></li>
							</ul>
						</div>
					</div>
				</div>
				<style>
					
				</style>
			</div>
		</div>

		<hr style="margin-top: 2rem; margin-bottom: 2rem; border-top: 2px solid #300353; opacity: 0.15;">

		<div class="d-flex justify-content-between align-items-center flex-column flex-md-row pb-3 px-2" style="font-size: 1rem;">
			<div class="text-secondary mb-2 mb-md-0">
				© 2026 PIM. All rights reserved
			</div>
			<div class="terms-links">
				<a href="#" class="footer-link px-2">Privacy policy</a>
				<span class="text-muted">|</span>
				<a href="#" class="footer-link px-2">Terms of service</a>
				<span class="text-muted">|</span>
				<a href="#" class="footer-link px-2">Cookies settings</a>
			</div>
		</div>

	</div>
	
		
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
