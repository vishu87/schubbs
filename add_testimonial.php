<?php /* Template Name: Add Testimonial */
	global $wpdb;
	$flag_error = '';
	if(isset($_POST['is_submit'])) {

		if(wp_verify_nonce($_POST["_wpnonce"], 'testimonial-form')){
			$full_name = isset($_POST["full_name"])?esc_attr($_POST["full_name"]):'';
			$email = isset($_POST["email"])?esc_attr($_POST["email"]):'';
			$mobile = isset($_POST["mobile"])?esc_attr($_POST["mobile"]):'';
			$message = isset($_POST["message"])?esc_attr($_POST["message"]):'';

			if($full_name && $email && $mobile && $message){

				$check_preg = true;
				if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
					$flag_error = "Please provide a valid email address";
					$check_preg = false;
				}

				if($check_preg){
					$wpdb->insert('testimonials',array(
						"name" => $full_name,
						"email" => $email,
						"mobile" => $mobile,
						"message" => $message
					));
				}
			} else {
				$flag_error = 'Please fill all the fields';
			}
		} else {
			$flag_error = 'Invalid Request';
		}
	}
?>
<?php get_header(); the_post(); ?>
<div class="sep2"></div>
<div class="container">
	<div class="page-title sec-title sec-title-blue">
		<h2><?php the_title();?></h2>
	</div>
	<div class="sep2"></div>
	<div>
		<div class="row">
			<div class="col-md-8">
				<?php if($_GET["submit"]): ?>
				<div class="div-success">
					Thank You for Adding Your Review.
				</div>
				<?php else: ?>
				<form method="POST" action="#" id="testimonial-form" class="testimonial-form">
					<div class="form-div">
						<label>Full Name</label>
						<input class="form-input" name="full_name" required="true">
					</div>
					<div class="form-div">
						<label>Email <span class="red-asterik">*</span></label>
						<input class="form-input" name="email" required="true">
					</div>
					<div class="form-div">
						<label>Contact Number <span class="red-asterik">*</span></label>
						<input class="form-input" name="mobile" required="true">
					</div>
					<div class="form-div">
						<label>Message</label>
						<textarea class="form-input" name="message" required="true"></textarea>
					</div>
					<input type="hidden" name="is_submit" value="1">
					<?php wp_nonce_field('testimonial-form') ?>
					<div class="form-div">
						<input type='submit' class="blue-btn" value="Submit">
					</div>
				</form>
				<?php endif; ?>
			</div>
			<div class="col-md-4">
				<div class="sidebar">

				</div>
			</div>
		</div>
	</div>
</div>
<div class="sep4"></div>

<?php get_footer();?>