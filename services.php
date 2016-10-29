<?php /* Template Name: Services*/
get_header();?>

<div class="sep2"></div>
<div class="container">
	<div class="page-title sec-title sec-title-blue">
		<h2><?php the_title();?></h2>
	</div>
	<div class="sep2"></div>
	<div class="row">
		<?php 
			$query = new WP_Query(array(
				"post_type" => "service",
				"posts_per_page" => -1,
				"orderby" => "title",
				"order" => "ASC"
			));

			if($query->have_posts()):while($query->have_posts()): $query->the_post();
		?>
		<div class="col-md-3">
			<div class="service-category">
				<!--<img src="<?php echo get_template_directory_uri();?>/images/services-bullet.png"><span><a href="<?php the_permalink();?>"><?php the_title();?></a></span>-->
				<img src="<?php echo get_template_directory_uri();?>/images/services-bullet.png"><span><a href="javascript:;"><?php the_title();?></a></span>
			</div>
		</div> 
		<?php endwhile; endif;?>
	</div>
</div>
<div class="sep4"></div>

<?php get_footer();?>