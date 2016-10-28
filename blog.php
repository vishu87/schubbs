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
		<div class="col-md-8">
			<?php 
			$query = new WP_Query(array(
				'post_type'=>'post', 
				'posts_per_page'=>2
			)); 
			?>
			<?php if($query->have_posts()):while($query->have_posts()): $query->the_post(); ?>
			<div class="blog">
				<div class="blog-img">
					<?php the_post_thumbnail();?>
				</div>
				<div class="sep1"></div>
				<div class="blog-info">
					<h3><?php the_title();?></h3>
					<p><?php the_content();?></p>
				</div>
				<div class="sep1"></div>
				<hr>
				<div class="sep1"></div>
			</div>
			<?php endwhile; endif;?>
		</div>
		<div class="col-md-4">
			<div class="sidebar">
				<div class="sidebar-title">
					<h3>Search</h3>
				</div>
				<div class="sep1"></div>
				<div class="search-bar">
					<?php get_search_form();?>
				</div>
				<div class="sep1"></div>
				<div class="sidebar-title">
					<h3>Recent Posts</h3>
				</div>
				<div class="sep1"></div>
				<hr>
				<div class="sep1"></div>
				<?php 
					$query = new WP_Query(array(
						'post_type'=>'post', 
						'posts_per_page'=>4
					)); 
					?>
				<?php if($query->have_posts()):while($query->have_posts()): $query->the_post(); ?>
				<div class="blog">
					<ul>
						<li><a href="<?php the_permalink()?>"><?php the_title();?></a></li>
						<span><?php the_date();?></span>
					</ul>
				</div>
				<?php endwhile; endif;?>
				<div class="sep1"></div>
				<hr>
				<div class="sep1"></div>
				<div class="sidebar-title">
					<h3>Archive</h3>
				</div>
				<div class="sep1"></div>
				<hr>
				<div class="sep1"></div>
				<div class="archives">
					<?php wp_get_archives(); ?>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer();?>