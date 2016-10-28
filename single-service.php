<?php get_header(); the_post(); $this_post_id = get_the_id(); ?>

<div class="sep2"></div>
<div class="container">
	<div class="row">
		<div class="col-md-8">
			<?php
				$query = new WP_Query(array(
					"post_type"=>"service",
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
			<?php if( get_field('video_url') ): ?>
				<div class="post-video">
					<div class="page-title sec-title sec-title-blue">
						<h2 style="font-size:25px;">Related Video</h2>
					</div>
					<div class="sep1"></div>
					<?php 
						echo $youtubevideo_code = wp_oembed_get( get_field('video_url') );
					?>
				</div>
			<?php endif; ?>
			<?php if( get_field('faqs') ): ?>
				<div class="post-faqs">
					<div class="page-title sec-title sec-title-blue">
						<h2 style="font-size:25px;">FAQs</h2>
					</div>
					<div class="sep1"></div>
					<?php 
					$faqs = get_field('faqs');
					$count = 1;

					if($faqs) {
						foreach ($faqs as $faq) { ?>
							<div class='faq-toggle faq-ques' id="<?php echo $count;?>">
								<?php echo $count.". ".$faq['question']; ?>
							</div>
							<div class='faq-ans <?php echo $count; ?>'>
								<?php echo $faq['answer']; ?>
								<hr>
							</div>
							<?php $count++; ?>
						<?php } ?>
					<?php } ?>
				</div>
			<?php endif; ?>
		</div>
		<div class="col-md-4">
			<div class="sidebar">
				<div class="page-title sec-title sec-title-blue">
					<h2>Other Services</h2>
				</div>
				<div class="sep1"></div>
				<div class="recent-posts">
						<?php
							$query = new WP_Query(array(
								"post_type"=>"service",
								"posts_per_page"=> -1,
								"post__not_in"=>array($post->ID),
								"orderby"=>"title",
								"order"=>"ASC"
							));

							if($query->have_posts()): while($query->have_posts()): $query->the_post();
						?>
						<div class="recent-posts-info">
							<img src="<?php echo get_template_directory_uri();?>/images/services-bullet.png"><a href="<?php echo the_permalink();?>"><?php the_title();?></a>
						</div>
					<?php endwhile; endif;?>
				</div>
			</div>	
		</div>
	</div>
</div>
<div class="sep4"></div>

<?php get_footer(); ?>