<?php
 
$postTitleError = '';
 
if ( isset( $_POST['submitted'] ) ) {
 
    if ( trim( $_POST['postTitle'] ) === '' ) {
        $postTitleError = 'Please enter a title.';
        $hasError = true;
    }
 
}
 
?>
<?php /*Template Name: Add Custom Post */ 
get_header();?>

<form action="" id="primaryPostForm" method="POST">
 
    <fieldset>
        <label for="postTitle"><?php _e('Post Title:', 'framework') ?></label>
 
        <input type="text" name="postTitle" id="postTitle" value="<?php if ( isset( $_POST['postTitle'] ) ) echo $_POST['postTitle']; ?>" class="required" />
    </fieldset>
 
    <fieldset>
        <label for="postContent"><?php _e('Post Content:', 'framework') ?></label>
 
        <textarea name="postContent" id="postContent" rows="8" cols="30" <?php if ( isset( $_POST['postContent'] ) ) { if ( function_exists( 'stripslashes' ) ) { echo stripslashes( $_POST['postContent'] ); } else { echo $_POST['postContent']; } } ?> class="required"></textarea>
    </fieldset>
 
    <fieldset>
        <input type="hidden" name="submitted" id="submitted" value="true" />
 		
 		<?php wp_nonce_field( 'post_nonce', 'post_nonce_field' ); ?>
        <button type="submit"><?php _e('Add Post', 'framework') ?></button>
    </fieldset>
 
</form>


<?php get_footer();?>
