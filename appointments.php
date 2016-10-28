<?php /* Template Name: Appointments */
	global $wpdb;
	$flag_error = '';
	if(isset($_POST['is_submit'])) {

		if(wp_verify_nonce($_POST["_wpnonce"], 'appoint_form')){
			$full_name = isset($_POST["full_name"])?esc_attr($_POST["full_name"]):'';
			$email = isset($_POST["email"])?esc_attr($_POST["email"]):'';
			$mobile = isset($_POST["mobile"])?esc_attr($_POST["mobile"]):'';
			$mobile2 = isset($_POST["mobile2"])?esc_attr($_POST["mobile2"]):'';
			$appoint_date = isset($_POST["appoint_date"])?esc_attr($_POST["appoint_date"]):'';
			$appoint_time = isset($_POST["appoint_time"])?esc_attr($_POST["appoint_time"]):'';
			$location = isset($_POST["location"])?esc_attr($_POST["location"]):'';
			$reason = isset($_POST["reason"])?esc_attr($_POST["reason"]):'';
			$first_visit = isset($_POST["first_visit"])?esc_attr($_POST["first_visit"]):'';
			$last_visit = isset($_POST["last_visit"])?esc_attr($_POST["last_visit"]):'';
			$comment = isset($_POST["comment"])?esc_attr($_POST["comment"]):'';


			if($full_name && $email && $mobile && $appoint_date && $appoint_time && $location){

				$check_preg = true;
				if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
					$flag_error = "Please provide a valid email address";
					$check_preg = false;
				}

				if($check_preg){
					$wpdb->insert('appointments',array(
						"name" => $full_name,
						"email" => $email,
						"mobile" => $mobile,
						"mobile2" => $mobile2,
						"appoint_date" => date("Y-m-d",strtotime($appoint_date)),
						"appoint_time" => $appoint_time,
						"location" => $location,
						"reason" => $reason,
						"first_visit" => $first_visit,
						"last_visit" => $last_visit,
						"comment" => $comment

					));

					wp_redirect(get_permalink().'?submit=true#success');
				}
			} else {
				$flag_error = 'Please fill all required fields';
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
	<?php if($flag_error != ''): ?>
		<div class="flag-error"><?php echo $flag_error ?></div>
	<?php endif; ?>
	<div class="appoint-form-div">
		<?php if($_GET["submit"]): ?>
		<div class="div-success" id="success">
			Thank you for getting in touch. We will get back to you within next 4 hours to confirm your appointment.
		</div>
		<?php else: ?>
		<form method="POST" id="appoint-form" class="testimonial-form appoint-form">
			<div class="row">
				<div class="col-md-6">
					<div class="appoint-head">
						Your Details:
					</div>
					<div class="form-div">
						<label>Full Name<span class="red-asterik">*</span></label>
						<input class="form-input" name="full_name" required="true" value="<?php echo ($_POST["full_name"])?esc_attr($_POST["full_name"]):'' ?>">
					</div>
					<div class="form-div">
						<label>Email <span class="red-asterik">*</span></label>
						<input type="email" class="form-input" name="email" required="true" value="<?php echo ($_POST["email"])?esc_attr($_POST["email"]):'' ?>">
					</div>
					<div class="form-div">
						<label>Phone Number <span class="red-asterik">*</span></label>
						<input class="form-input" name="mobile" required="true" value="<?php echo ($_POST["mobile"])?esc_attr($_POST["mobile"]):'' ?>">
					</div>
					<div class="form-div">
						<label>Alternate Number</label>
						<input class="form-input" name="mobile2" value="<?php echo ($_POST["mobile2"])?esc_attr($_POST["mobile2"]):'' ?>">
					</div>
				</div>
				<div class="col-md-6">
					<div class="appoint-head">
						Appointment Details:
					</div>
					<div class="form-div">
						<label>Preferred Date<span class="red-asterik">*</span></label>
						<input class="form-input" id="appoint-date" name="appoint_date" required="true" value="<?php echo ($_POST["appoint_date"])?esc_attr($_POST["appoint_date"]):'' ?>"><!-- <img class="cal-icon" src="<?php echo get_template_directory_uri();?>/images/cal-icon.png"> -->
					</div>

					<?php
						$time_array = array("Morning (8AM - 12PM)","Early Afternoon (12PM - 3PM)","Late Afternoon (3PM - 6PM)");
					?>

					<div class="form-div">
						<label>Preferred Time <span class="red-asterik">*</span></label>
						<select class="form-input" name="appoint_time" required="true">
							<option value="">Select</option>
							<?php
								foreach ($time_array as $value) {
									echo '<option value="'.$value.'" ';
									if(isset($_POST["appoint_time"])){
										if($_POST["appoint_time"] == $value){
											echo 'selected checked';
										}
									}
									echo '>'.$value.'</option>';
								}
							?>
						</select>
					</div>
					<?php
						$location_array = array("Apapa Clinic","Ikoyi Clinic","Ikeja Clinic");
					?>
					<div class="form-div">
						<label>Preferred Clinic <span class="red-asterik">*</span></label>
						<select class="form-input" name="location" required="true">
							<option value="">Select</option>
							<?php
								foreach ($location_array as $value) {
									echo '<option value="'.$value.'" ';
									if(isset($_POST["location"])){
										if($_POST["location"] == $value){
											echo 'selected checked';
										}
									}
									echo '>'.$value.'</option>';
								}
							?>
						</select>
					</div>
					<div class="form-div">
						<label>Appointment Reason</label>
						<input class="form-input" name="reason" value="<?php echo ($_POST["reason"])?esc_attr($_POST["reason"]):'' ?>">
					</div>
					<div class="form-div">
						<label>First Visit?</label>
						<div class="checkbox-div">
							<input class="first-visit" type="radio" name="first_visit" value="Yes" checked><label>Yes</label>
							<span style="margin-left:20px;"></span>
							<input class="first-visit" type="radio" name="first_visit" value="No" <?php if(isset($_POST["first_visit"])){ if($_POST["first_visit"] == 'No'){ echo 'checked'; } } ?> ><label>No</label>
						</div>
					</div>
					<div class="form-div" id="last-visit">
						<label>Have you been here in last 6 months?</label>
						<div class="checkbox-div">
							<input type="radio" class="" name="last_visit" value="Yes" checked><label>Yes</label>
							<span style="margin-left:20px;"></span>
							<input type="radio" name="last_visit" value="No" <?php if(isset($_POST["last_visit"])){ if($_POST["last_visit"] == 'No'){ echo 'checked'; } } ?> ><label>No</label>
						</div>
					</div>
					<div class="form-div">
						<label>Addition Comment</label>
						<textarea class="form-input" name="comment" value="<?php echo ($_POST["comment"])?esc_attr($_POST["comment"]):'' ?>"><?php echo ($_POST["comment"])?esc_attr($_POST["comment"]):'' ?></textarea>
					</div>
				</div>
			</div>
			<div style="text-align:center;">
				<div class="sep2"></div>
				<input type="hidden" name="is_submit" value="1">
				<?php wp_nonce_field('appoint_form') ?>
				<input type='submit' class="blue-btn" value="Submit">
			</div>
		</form>
		<?php endif; ?>
	</div>
</div>
<div class="sep4"></div>

<?php get_footer();?>