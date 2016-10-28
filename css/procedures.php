<?php /*Template Name: Procedures */
	get_header();
?>
<div class="sep2"></div>
<div class="container">
	<div class="page-title sec-title sec-title-blue">
		<h2><?php the_title();?></h2>
	</div>
	<div class="sep2"></div>
	<div class="row">
		<div class="services-sec">
			<div class="col-md-5">
				<div class="services-img">
					<img src="<?php echo get_template_directory_uri();?>/images/general-services.jpg">
				</div>
			</div>
			<div class="col-md-7">
				<div class="services-text">
					<h2>General Services</h2>
					<hr>
					<ul>
						<?php 
							$query = new WP_Query(array(
								"post_type" => "service",
								"post_per_page" => -1,
								"order" => "ASC",
								"category_name" => "General Services"
							));

							if($query->have_posts()):while($query->have_posts()): $query->the_post();
						?>

						<li><img src="<?php echo get_template_directory_uri();?>/images/services-bullet.png"><!--<a href="<?php the_permalink();?>">--><?php the_title();?><!-- </a> --></li>
						<?php endwhile; endif;?>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="sep4"></div>
	<div class="row">
		<div class="services-sec">
			<div class="col-md-7">
				<div class="services-text">
					<h2>Speciality Services</h2>
					<hr>
					<ul>
						<?php 
							$query = new WP_Query(array(
								"post_type" => "service",
								"post_per_page" => -1,
								"order" => "ASC",
								"category_name" => "Speciality Services"
							));

							if($query->have_posts()):while($query->have_posts()): $query->the_post();
						?>

						<li><img src="<?php echo get_template_directory_uri();?>/images/services-bullet.png"><!--<a href="<?php the_permalink();?>">--><?php the_title();?><!-- </a> --></li>
						<?php endwhile; endif;?>
					</ul>
				</div>
			</div>
			<div class="col-md-5">
				<div class="services-img">
					<img src="<?php echo get_template_directory_uri();?>/images/speciality-services.jpg">
				</div>
			</div>
		</div>
	</div>
	<div class="sep4"></div>
	<div class="row">
		<div class="services-sec">
			<div class="col-md-5">
				<div class="services-img">
					<img src="<?php echo get_template_directory_uri();?>/images/cosmetic-services.jpg">
				</div>
			</div>
			<div class="col-md-7">
				<div class="services-text">
					<h2>Cosmetic Services</h2>
					<hr>
					<ul>
						<?php 
							$query = new WP_Query(array(
								"post_type" => "service",
								"post_per_page" => -1,
								"order" => "ASC",
								"category_name" => "Cosmetic Services"
							));

							if($query->have_posts()):while($query->have_posts()): $query->the_post();
						?>

						<li><img src="<?php echo get_template_directory_uri();?>/images/services-bullet.png"><!--<a href="<?php the_permalink();?>">--><?php the_title();?><!-- </a> --></li>
						<?php endwhile; endif;?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>


<?php get_footer();?>