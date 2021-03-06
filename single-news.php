<?php get_header(); the_post(); $this_post_id = get_the_id(); ?>

<div class="sep2"></div>
<div class="container">
	<div class="page-title sec-title sec-title-blue">
		<h2>News</h2>
	</div>
	<div class="row">
		<div class="col-md-8">
			<?php
				$args = array(
					'posts_per_page' => 1,
					'post_type' => 'news'
				);

				$query = new WP_Query( $args );
			?>	
				<div class="blog-title">
					<h2><?php the_title();?></h2>
					<h5><?php the_time("F j, Y"); ?></h5>
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
				<div class="blog-pagination" style="display: none">
					<div class="row">
						<div class="col-md-6 col-xs-6">
							<div class="blog-btns blog-prev">
								<?php
								$prev_post = get_previous_post();
								if (!empty( $prev_post )): ?>
								  <a href="<?php echo get_permalink( $prev_post->ID ); ?>" title="<?php echo $prev_post->post_title ?>"><?php echo '<< Previous';?></a>
								<?php endif ?>
							</div>	
						</div>
						<div class="col-md-6 col-xs-6">
							<div class="blog-btns blog-next">
								<?php
								$next_post = get_next_post();
								if (!empty( $next_post )): ?>
								  <a href="<?php echo get_permalink( $next_post->ID ); ?>" title="<?php echo $next_post->post_title ?>"><?php echo 'Next >>';?></a>
								<?php endif ?>
							</div>
						</div>
					</div>
				</div>
		</div>
		<div class="col-md-4">
			<div class="sidebar">
				<!-- <div class="sidebar-title">
					<h3>Search</h3>
				</div>
				<div class="sep1"></div>
				<div class="search-bar">
					<?php get_search_form();?>
				</div>
				<div class="sep2"></div> -->
				<div class="sidebar-title">
					<h3>Recent News</h3>
				</div>
				<div class="sep1"></div>
				<hr>
				<div class="sep1"></div>
				<?php 
					$query = new WP_Query(array(
						'post_type'=>'news', 
						'posts_per_page'=>5,
						"post__not_in" => array($post->ID)
					)); 
				?>
				<?php if($query->have_posts()):while($query->have_posts()): $query->the_post(); ?>
				<div class="sidebar-blogs">
					<ul>
						<li>
							<a href="<?php echo get_permalink();?>">
								<?php
									$news_title = get_the_title();
									if(strlen($news_title) > 35) { ?>
										<?php echo substr($news_title, 0, 35).'...';?>
									<?php } else { ?>
									<?php echo $news_title; ?>
								<?php } ?>
							</a>
						</li>
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