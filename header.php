<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8"/>
	<title><?php bloginfo('name'); ?><?php wp_title('||'); ?></title>
	<?php wp_head(); ?>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="">

</head>
<body>
<div class="container-fluid blue-back">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-xs-6">
				<div class="logo-img">
					<a href="<?php echo get_home_url();?>"><img src="<?php echo get_template_directory_uri();?>/images/logo.png"></a>
				</div>
				<div class="logo-img-small">
					<a href="<?php echo get_home_url();?>"><img src="<?php echo get_template_directory_uri();?>/images/logo_small.png"></a>
				</div>
			</div>
			<div class="col-xs-6" id="menu-bar">
				<img src="<?php echo get_template_directory_uri();?>/images/menu_bar.png">
			</div>
			<div class="col-md-9 col-xs-12">
				<nav class="header-menu">
					<?php 
						$primary_menu = wp_nav_menu(array(
							'theme-location'=>'primary-menu','echo'=>false));
					?>
					<?php echo preg_replace('/\n/', '', $primary_menu) ?>
				</nav>
			</div>
		</div>
	</div>
</div>
<div class="wrapper">

<!--End Header-->