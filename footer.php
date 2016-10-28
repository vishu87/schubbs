</div>

<div class="container-fluid blue-back">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="logo-img footer-logo">
					<a href="<?php echo get_home_url();?>"><img src="<?php echo get_template_directory_uri();?>/images/logo.png"></a>
				</div>
				<div class="copyright">
					<span>&copy;2016 SCHUBBS Dental Clinics</span>
				</div>
			</div>
			<div class="col-md-5">
				<div>
					<nav class="footer-menu">
						<?php 
							$primary_menu = wp_nav_menu(array(
								'theme-location'=>'primary-menu','echo'=>false));
						?>
						<?php echo preg_replace('/\n/', '', $primary_menu) ?>
					</nav>
				</div>
			</div>
			<div class="col-md-4">
				<div class="white-button">
					<a href="<?php echo get_home_url();?>/appointments">Request Appointment</a>
				</div>
				<div class="footer-social">
					<ul>
						<li><a href="#"><img src="<?php echo get_template_directory_uri();?>/images/facebook.png"></a></li>
						<li><a href="#"><img src="<?php echo get_template_directory_uri();?>/images/youtube.png"></a></li>
						<li><a href="#"><img src="<?php echo get_template_directory_uri();?>/images/twitter.png"></a></li>
						<li><a href="#"><img src="<?php echo get_template_directory_uri();?>/images/instagram.png"></a></li>
					</ul>
				</div>	
			</div>
		</div>
	</div>
</div>

<?php wp_footer(); ?>


</body>
</html>