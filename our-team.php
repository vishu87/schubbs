<?php /*Template Name: Our Team*/
	get_header();
?>

<div class="sep2"></div>
<div class="container">
	<div class="page-title sec-title sec-title-blue">
		<h2><?php the_title();?></h2>
	</div>

	<div class="page-content">
		<?php the_content() ?>
	</div>
	<div class="sep2"></div>
	<div class="row">
		<?php 
		$query = new WP_Query(array( 
			'post_type'   => 'team',
			'order'       => 'ASC',
			'posts_per_page' => -1,
		)); 
		?>

		<?php 
			if($query->have_posts()): while($query->have_posts()): $query->the_post(); 
		?>
		<div class="col-md-3">
			<div class="team-member" data-id="<?php the_ID(); ?>">
				<div class=" team-member-img">
					<?php the_post_thumbnail();?>
				</div>
				<div class="team-member-info">
					<h4><?php the_title();?></h4>
					<span><?php the_field('designation');?></span>
				</div>
				<div class="" id="member-info-<?php the_ID(); ?>">
					<div class="team-info">
						<div class="row">
							<div class="col-md-5 padd-0">
						    	<div class="modal-left">
						    		<div class="team-member-img">
										<?php the_post_thumbnail();?>
									</div>
						    		<div class="sep1"></div>
						    		<div class="team-member-info">
										<h4 style="margin-bottom:5px;"><?php the_title();?></h4>
										<span style="color:#002434;font-weight:400;"><?php the_field('designation');?></span>
									</div>
						    	</div>
						    </div>
						    <div class="col-md-7 padd-0">
						    	<div class="close">x</div>
						    	<div class="modal-right">
						    		<?php the_content();?>
						    		<div class="sep1"></div>
						    			<?php if(get_field('email') != ''): ?>
						    		email: <span><?php the_field('email');?>
						    			<?php endif; ?>
						    		</span>
						    	</div>
						    	
						    </div>

						</div>
					</div>

				</div>
			</div>
		</div>
		<?php endwhile; endif;?>
	</div>
</div>
<div class="sep1"></div>

<!-- Trigger/Open The Modal -->

<!-- The Modal -->
	<div id="myModal" class="modal">
	  	<!-- Modal content -->
	 	<div class="modal-content team-modal">
	  	</div>
	</div>
<!-- Modal End -->	
<div class="sep2"></div>

<?php get_footer();?>