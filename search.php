<?php /* Template Name: Search Page*/
get_header(); ?>

<div class="sep2"></div>
<div class="container search-Form">
	<?php if ( have_posts() ): ?>
		<h2>Search Results for <b>'<?php echo get_search_query(); ?>'</b></h2> 
		<ol style="padding-left:20px">
			<?php while ( have_posts() ) : the_post(); ?>
			    <li>
		            <h3><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php search_title_highlight(); ?></a></h3>
		            <time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><i><?php the_date(); ?> <?php the_time(); ?></i></time> <?php //comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?>
		            <div class="sep1"></div>
		            <?php search_content_highlight(); ?>
			    </li>
			<?php endwhile; ?>
			
			<?php //pagination_nav();?>

			<!-- <nav class="pagination">
				<?php pagination_bar(); ?>
			</nav> -->

		</ol>
	<?php else: ?>
		<h3>No results found for <i><b>'<?php echo get_search_query(); ?>'</i></b></h3>
		<div class="sep1"></div>
		<div class="col-md-4" style="padding-left:0">
			<h4>Want to search again? </h4>
			<div class="search-bar">
				<?php get_search_form();?>
			</div>
		</div>
	<?php endif; ?>
</div>
<div class="sep4"></div>

<?php get_footer(); ?>