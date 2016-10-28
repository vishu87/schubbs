<div class="sep4"></div>
<div class="container-fluid blue-back">
	<div class="container">
		<div class="sep1"></div>
		<div class="row">
			<div class="col-md-2">
				<div class="logo-img footer-logo">
					<a href="<?php echo get_home_url();?>"><img src="<?php echo get_template_directory_uri();?>/images/logo.png"></a>
				</div>
			</div>
			<div class="col-md-6">
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
					<a href="<?php echo get_home_url();?>/appointments">Request Appointments</a>
				</div>
				<div class="footer-social">
					<ul>
						<li><a href="#"><img src="<?php echo get_template_directory_uri();?>/images/facebook.png"></a></li>
						<li><a href="#"><img src="<?php echo get_template_directory_uri();?>/images/youtube.png"></a></li>
						<li><a href="#"><img src="<?php echo get_template_directory_uri();?>/images/twitter.png"></a></li>
						<li><a href="#"><img src="<?php echo get_template_directory_uri();?>/images/pinterest.png"></a></li>
						<li><a href="#"><img src="<?php echo get_template_directory_uri();?>/images/instagram.png"></a></li>
					</ul>
				</div>	
			</div>
		</div>
		<div class="sep2"></div>
		<div class="row">
			<div class="copyright">
				<span>All Rights Reserved &copy; SCHUBBS Dental Clinics - 2016.</span>
			</div>
		</div>
	</div>
</div>

<?php wp_footer(); ?>


</body>
</html>