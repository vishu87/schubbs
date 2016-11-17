<?php /*Template Name: Blog*/
	get_header();
?>
<div class="sep2"></div>
<div class="container">
	<div class="page-title sec-title sec-title-blue">
		<h2><?php the_title();?></h2>
	</div>
	<div class="sep2"></div>
	<div class="row">
		<?php 
			$query = new WP_Query(array(
				'post_type'=>'post', 
				'posts_per_page'=>6
			)); 
		?>
		<?php if($query->have_posts()):while($query->have_posts()): $query->the_post(); ?>
			<div class="col-md-4">
				<div class="blogs">
					<div class="blog-img">
						<a href="<?php echo get_permalink();?>"><?php the_post_thumbnail('blog-thumb');?></a>
						<div class="blog-opac">
							<a href="<?php echo get_permalink();?>">View</a>
						</div>
					</div>
					<div class="blog-info">
						<a href="<?php echo get_permalink();?>">
							<?php
								$blog_title = get_the_title();
								if(strlen($blog_title) > 50) { ?>
									<h3><?php echo substr($blog_title, 0, 50).'...';?></h3>
								<?php } else { ?>
								<h3><?php echo $blog_title; ?></h3>
							<?php } ?>
						</a>
						<span><?php the_time("F j, Y"); ?></span>
					</div>
				</div>
			</div>
		<?php endwhile; endif;?>
	</div>
</div>
<div class="sep4"></div>


<?php get_footer();?>