<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

</div>

<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="footer-container">
		<div class="footer-content">
			<div class="contact-info">
				<h3>contact info</h3>
				<p>
					<i class="fa fa-envelope" aria-hidden="true" style="color: white"></i>
					<a href="info@inhabitent.com">info@inhabitent.com</a>
				</p>	
				<p>
					<i class="fa fa-phone" aria-hidden="true"></i>
					<a href="778-456-7891">778-456-7891</a>
				</p>
				<p>
					<i class="fa fa-facebook-official" aria-hidden="true"></i>
					<i class="fa fa-twitter" aria-hidden="true"></i>
					<i class="fa fa-google-plus-square" aria-hidden="true"></i>
				</p>
			</div>	
			<div class="business-hours">
				<h3>business hours</h3>
				<p><span class="bold-hours">Monday-Friday: </span>9am to 5pm</p>
				<p><span class="bold-hours">Saturday: </span>10am to 2pm</p>
				<p><span class="bold-hours">Sunday: </span>Closed</p>
			</div>
			<div class="footer-logo">
				<a href="localhost:3000/inhabitent"><img src="<?php echo get_template_directory_uri() . '/images/logos/inhabitent-logo-text.svg' ?>"></a>
				
			</div>
		</div>
		<div class="copyright">
				<p>copyright &copy; 2016 inhabitent</p>
		</div>
	</div>	
</footer>


<?php wp_footer(); ?>

<script src="https://use.fontawesome.com/d51ac7c865.js"></script>
</body>
</html>
