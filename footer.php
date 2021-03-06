</div>

<div class="container-fluid blue-back">
	<div class="container">
		<div class="row">
			<div class="col-md-3 padd-0">
				<div class="logo-img footer-logo">
					<a href="<?php echo get_home_url();?>"><img src="<?php echo get_template_directory_uri();?>/images/logo.png"></a>
				</div>
				<!-- <div class="copyright">
					<span>&copy;2016 SCHUBBS Dental Clinics</span>
				</div> -->
			</div>
			<div class="col-md-5">
				<div>
					<nav class="footer-menu">
						<?php 
							$footer_menu = wp_nav_menu(array(
								'theme_location'=>'footer-menu','echo'=>true));
						?>
						<?php echo preg_replace('/\n/', '', $footer_menu) ?>
					</nav>
				</div>
			</div>
			<!-- <div class="col-md-5"></div> -->
			<div class="col-md-4">
				<div class="white-button">
					<a href="<?php echo get_home_url();?>/appointment">Request Appointment</a>
				</div>
				<div class="footer-social">
					<ul>
						<li><a href="https://www.facebook.com/Schubbs.Dental/" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/facebook.png"></a></li>
						<li><a href="https://www.youtube.com/channel/UCEZJthTWQkCNcN46_YjgGCw" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/youtube.png"></a></li>
						<li><a href="https://twitter.com/SchubbsDental" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/twitter.png"></a></li>
						<li><a href="https://www.instagram.com/schubbsdental/" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/instagram.png"></a></li>
					</ul>
				</div>	
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	var base_url = '<?php echo esc_url( home_url( '/' ) ); ?>';
</script>
<?php wp_footer(); ?>
</body>
</html>