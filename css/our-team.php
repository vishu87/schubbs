<?php /*Template Name: Our Team*/
	get_header();
?>

<div class="sep2"></div>
<div class="container">
	<div class="page-title sec-title sec-title-blue">
		<h2><?php the_title();?></h2>
	</div>

	 <!-- Trigger/Open The Modal -->

<!-- The Modal -->
		<div>
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<?php 
					$query = new WP_Query(array( 
							'post_type'   => 'team',
							'order'       => 'ASC',
							'posts_per_page' => -1,
						)); 

					$post_id = get_the_ID();
				?>
				<div id="myModal" class="modal">

				  	<!-- Modal content -->
				 	<div class="modal-content team-modal">
				    <?php 
				    	if($query->have_posts()): $query->the_post();
				    ?>
					    <div class="col-md-5 padd-0">
					    	<div class="modal-left">
					    		<div class="team-member-img">
									<?php the_post_thumbnail();?>
								</div>
					    		<div class="sep1"></div>
					    		<div class="team-member-info">
									<h4 style="color:#fff;margin-bottom:5px;"><?php the_title();?></h4>
									<span style="color:#002434;font-weight:400;"><?php the_field('designation');?></span>
								</div>
					    	</div>
					    </div>
					    <div class="col-md-7 padd-0">
					    	<div class="modal-right">
					    		<?php the_content();?>
					    		<div class="sep1"></div>
					    		email: <span><?php the_field('email');?></span>
					    	</div>
					    	<span class="close">x</span>
					    </div>
					<?php endif;?>
				  	</div>
				</div>
			</div>
			<div class="col-md-3"></div>
		</div>
	<!-- Modal End -->	

	<div class="sep2"></div>
	<div class="page-content">
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quis lectus maximus, molestie lectus nec, rutrum justo. Sed aliquet lobortis eros. Duis enim est, cursus et velit vitae, dapibus semper lectus. Maecenas fringilla velit odio, eget dignissim risus luctus a. Nam non tortor pellentesque, iaculis erat non, viverra erat. Quisque malesuada id erat at lobortis. Aliquam sit amet malesuada augue. Sed suscipit velit at pulvinar faucibus. Praesent leo elit, accumsan malesuada pulvinar eget, ultricies in est. Aliquam vestibulum lacus et purus interdum, et commodo diam mattis.</p>
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
			<div class="team-member">
				<div id="<?php echo $post_id ?>" class="myBtn team-member-img">
					<?php the_post_thumbnail();?>
				</div>
				<div class="team-member-info">
					<h4><?php the_title();?></h4>
					<span><?php the_field('designation');?></span>
				</div>
			</div>
		</div>
		<?php endwhile; endif;?>
	</div>
</div>
<div class="sep4"></div>


<?php get_footer();?>