<?php get_header(); the_post(); $this_post_id = get_the_id(); ?>

<div class="sep2"></div>
<div class="container">
	<div class="row">
		<div class="col-md-8">
			<?php
				$query = new WP_Query(array(
					"post_type"=>"post",
					"posts_per_page"=> 1,
					"order"=>"ASC"
				));
			?>
			<div class="page-title sec-title sec-title-blue">
				<h2><?php the_title();?></h2>
			</div>
			<div class="sep2"></div>
			<?php if(has_post_thumbnail()): ?>	
				<div class="post-img">
					<?php the_post_thumbnail();?>
				</div>
			<?php endif; ?>
			<div class="sep1"></div>
			<div class="post-info">
				<?php the_content();?>
			</div>
			<div class="sep1"></div>
			<div class="blog-pagination">
				<div class="row">
					<div class="col-md-6">
						<div class="blog-btns blog-prev">
							<?php previous_post_link(); ?>
						</div>	
					</div>
					<div class="col-md-6">
						<div class="blog-btns blog-next">
							<?php next_post_link(); ?>
						</div>
					</div>
				</div>
			</div>
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
				<div class="sep2"></div>
				<div class="sidebar-title">
					<h3>Recent Posts</h3>
				</div>
				<div class="sep1"></div>
				<hr>
				<div class="sep1"></div>
				<?php 
					$query = new WP_Query(array(
						'post_type'=>'post', 
						'posts_per_page'=>5,
						"post__not_in" => array($post->ID)
					)); 
					?>
				<?php if($query->have_posts()):while($query->have_posts()): $query->the_post(); ?>
				<div class="blogs">
					<ul>
						<li><a href="<?php the_permalink()?>"><?php the_title();?></a></li>
						<span><?php the_time("F j, Y"); ?></span>
					</ul>
				</div>

				<?php endwhile; endif;?>
				<!-- <div class="sep1"></div>
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
				</div> -->
			</div>	
		</div>
	</div>
</div>
<div class="sep4"></div>

<?php get_footer(); ?>