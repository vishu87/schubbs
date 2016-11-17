<?php /* Index Page */
	global $wpdb;
	$flag_error = '';
	if(isset($_POST['is_submit'])) {

		if(wp_verify_nonce($_POST["_wpnonce"], 'testimonial-form')){
			$full_name = (isset($_POST["full_name"]))?esc_attr($_POST["full_name"]):'';
			$message = (isset($_POST["message"]))?esc_attr($_POST["message"]):'';

			if($full_name && $message){

				$check_preg = true;
				// if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
				// 	$flag_error = "*Please provide a valid email address";
				// 	$check_preg = false;
				// }

				if($check_preg){
					$wpdb->insert('testimonials',array(
						"name" => $full_name,
						"message" => $message
					));
				    
				    
				    $new_post = array(
				        'post_title'    => $full_name,
				        'post_content'  => $message,
				        'post_status'   => 'draft',
				        'post_type' => 'testimonial'
				    );

				    $pid = wp_insert_post($new_post);
					wp_redirect(get_home_url().'?test_submit=true#test_success');

				}
			} else {
				$flag_error = '*Please fill all the fields';
			}
		} else {
			$flag_error = '*Invalid Request';
		}
	}
?>
<?php /* Index Page */
	global $wpdb;
	$index_flag_error = '';
	if(isset($_POST['is_index_submit'])) {

		if(wp_verify_nonce($_POST["_wpnonce"], 'index-form')){
			$index_full_name = (isset($_POST["index_full_name"]))?esc_attr($_POST["index_full_name"]):'';
			$index_email = (isset($_POST["index_email"]))?esc_attr($_POST["index_email"]):'';
			$index_mobile = (isset($_POST["index_mobile"]))?esc_attr($_POST["index_mobile"]):'';
			$index_subject = (isset($_POST["index_subject"]))?esc_attr($_POST["index_subject"]):'';
			$index_message = (isset($_POST["index_message"]))?esc_attr($_POST["index_message"]):'';

			if($index_full_name && $index_email && $index_mobile){

				$check_preg = true;
				if(filter_var($index_email, FILTER_VALIDATE_EMAIL) === false){
					$index_flag_error = "*Please provide a valid email address";
					$check_preg = false;
				}

				if($check_preg){
					$wpdb->insert('messages',array(
						"name" => $index_full_name,
						"email" => $index_email,
						"mobile" => $index_mobile,
						"subject" => $index_subject,
						"message" => $index_message
					));
					$to = 'frontoffice@schubbsdental.com';
					$subject = 'Contact form Schubbs Dental Clinic';
					$message = 'Name: '.$index_full_name.'<br>Email: '.$index_email.'<br> Mobile: '.$index_mobile.'<br> Message: '.$index_message.'<br> Subject: '.$index_subject.'<br> Message: '.$index_message;
					$headers = array('Content-Type: text/html; charset=UTF-8');
					wp_mail( $to, $subject, $message, $headers );
					
					wp_redirect(get_home_url().'?index_submit=true#index_success');
				}
			} else {
				$index_flag_error = '*Please fill all the fields';
			}
		} else {
			$index_flag_error = '*Invalid Request';
		}
	}
?>
<?php get_header('home'); the_post(); ?>

<!-- Trigger/Open The Modal -->

<!-- The Modal -->
<div style="height:0">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<div id="myModal" class="modal">

		  <!-- Modal content -->
		 	<div class="modal-content" style="min-height:300px;">
		    	<div class="appoint-modal">
					<form name="test_form" method="POST" action="" id="testimonial-form" class="appoint-form testimonial-form">
						<h3>Add Testimonial</h3>
						<div class="form-div">
							<label>Name<span class="red-asterik">*</span></label>
							<input class="form-input" name="full_name" required="true" value="<?php echo (isset($_POST["full_name"]))?esc_attr($_POST["full_name"]):'' ?>" >
						</div>
						<div class="form-div">
							<label>Message<span class="red-asterik">*</span></label>
							<textarea class="form-input" name="message" required="true" value="<?php echo (isset($_POST["message"]))?esc_attr($_POST["message"]):'' ?>" ><?php echo (isset($_POST["message"]))?esc_attr($_POST["message"]):'' ?></textarea>
						</div>
						<input type="hidden" name="is_submit" value="1">
						<?php wp_nonce_field('testimonial-form') ?>
						<div class="form-div">
							<input type='submit' class="blue-btn" value="Submit" >
						</div>
						<span class="close">x</span>
					</form>
				</div>
		  	</div>
		</div>
	</div>
	<div class="col-md-3"></div>
</div>
<!-- Modal End -->	
<body <?php body_class(); ?>>
<div class="container-fluid dark-blue-back">
	<div class="container">
		<div class="sec-title">
			<h2>Why Schubbs Dental?</h2>
		</div>
		<div class="sep3"></div>
		<div class="row">
			<div class="col-md-6 col-xs-6">
				<div  class="why-schubbs-img">
					<img src="<?php echo get_template_directory_uri();?>/images/advanced-technology1.jpg">
					<h2>Advanced Technology</h2>
				</div>
			</div>
			<div class="col-md-6 col-xs-6">
				<div class="why-schubbs-img">
					<img src="<?php echo get_template_directory_uri();?>/images/experienced-dentists.jpg">
					<h2>Child-friendly Environment</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-xs-6">
				<div class="why-schubbs-img">
					<img src="<?php echo get_template_directory_uri();?>/images/experienced-dentists1.jpg">
					<h2>Experienced Dentists</h2>
				</div>
			</div>
			<div class="col-md-6 col-xs-6">
				<div class="why-schubbs-img">
					<img src="<?php echo get_template_directory_uri();?>/images/bicon-implants.jpg">
					<h2>Bicon Implants</h2>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container white-back">
	<div class="sec-title sec-title-blue">
		<h2>Our Journey So Far</h2>
	</div>
	<div class="sep3"></div>
	<div id="animate-no" class="row">
		<div class="col-md-3 col-xs-6">
			<div class="stats-sec">
				<div class="stats-img">
					<img src="<?php echo get_template_directory_uri();?>/images/stat-img1.png">
				</div>
				<div class="stats-text">
					<h1 id="implants-no">2062</h1>
					<p>Number of implants done</p>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-xs-6">
			<div class="stats-sec">
				<div class="stats-img">
					<img src="<?php echo get_template_directory_uri();?>/images/stat-img2.png">
				</div>
				<div class="stats-text">
					<h1 id="dentists-no">12</h1>
					<p>Number of dentist</p>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-xs-6">
			<div class="stats-sec">
				<div class="stats-img">
					<img src="<?php echo get_template_directory_uri();?>/images/stat-img3.png">
				</div>
				<div class="stats-text">
					<h1 id="braces-no">6450</h1>
					<p>Number of braces done</p>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-xs-6">
			<div class="stats-sec">
				<div class="stats-img">
					<img src="<?php echo get_template_directory_uri();?>/images/stat-img4.png">
				</div>
				<div class="stats-text">
					<h1 id="operations-no">28</h1>
					<p>Years of operation</p>
					<span>(since 1988)</span>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid test-back">
	<div class="container">
		<div id="test_success" class="sec-title sec-title-dark">
			<h2>Testimonials</h2>
		</div>
		<div class="sep3"></div>
		<div class="testimonials">
			<?php
			$query = new WP_Query(array( 
				'post_type'   => 'testimonial',
				'posts_per_page' => -1
				) 
			);

			if($query->have_posts()): while($query->have_posts()): $query->the_post();
			?>
			<div class="testimonial">
				<?php
					$test_title = get_the_title();
					if(strlen($test_title) > 5) { ?>
						<h3><?php echo substr($test_title, 0, 8).'.';?></h3>
					<?php } else { ?>
						<h3><?php echo $test_title; ?></h3>
					<?php } ?>
				<div class="testimonial-text">
					<a href="<?php the_permalink();?>"><p><?php the_excerpt();?></p></a>
				</div>
				<hr>
				<?php
					$test_title = get_the_title();
					if(strlen($test_title) > 5) { ?>
						<h5><?php echo substr($test_title, 0, 8).'.';?></h5>
					<?php } else { ?>
						<h5><?php echo $test_title; ?></h5>
					<?php } ?>
			</div>
			<?php endwhile; endif;?>
		</div>
		<div class="sep2"></div>
		<?php if($_GET["test_submit"]){ ?>
			<div style="margin: 0 35%;width:350px;" class="div-success">
				Thank You for Adding Your Review.
			</div>
			<?php } else {?>
				<div class="banner-buttons banner-buttons-small">
					<a class="myBtn">Submit Testimonials</a>
				</div>
		<?php } ?>
	</div>
</div>
<div class="container-fluid location-back">
	<div class="container">
		<div id="index_success" class="sec-title">
			<h2>Get in Touch</h2>
		</div>
		<div class="sep3"></div>
		<div class="row">
			<div class="col-md-5">
				<div class="contact-form">
					<?php if($index_flag_error != ''): ?>
						<div class="flag-error"><?php echo $index_flag_error ?></div>
					<?php endif; ?>
					<?php if($_GET["index_submit"]): ?>
					<div class="div-success div-index-success">
						Thank You. We will get back to you soon.
					</div>
					<?php else: ?>
					<form name="index-form" action="" method="POST" id="index-form" class="appoint-form testimonial-form">
						<div class="form-elem">
							<input type="text" name="index_full_name" value="<?php echo (isset($_POST['index_full_name']))?esc_attr($_POST['index_full_name']):''?>" placeholder="Your full name" required>
						</div>
						<div class="form-elem">
							<input type="email" name="index_email" value="<?php echo (isset($_POST['index_email']))?esc_attr($_POST['index_email']):''?>" placeholder="Your email" required>
						</div>
						<div class="form-elem">
							<input type="number" name="index_mobile" value="<?php echo (isset($_POST['index_mobile']))?esc_attr($_POST['index_mobile']):''?>" placeholder="Your phone number" required>
						</div>
						<div class="form-elem">
							<input type="text" name="index_subject" value="<?php echo (isset($_POST['index_subject']))?esc_attr($_POST['index_subject']):''?>" placeholder="Subject">
						</div>
						<div class="form-elem">
							<textarea name="index_message" value="<?php echo (isset($_POST['index_message']))?esc_attr($_POST['index_message']):''?>" placeholder="Your message"><?php echo (isset($_POST['index_message']))?esc_attr($_POST['index_message']):''?></textarea>
						</div>
						<input type="hidden" name="is_index_submit" value="2">
						<?php wp_nonce_field('index-form') ?>
						<div class="submit-button">
							<input class="submit-btn" type="submit" value="Send Message">
						</div>
					</form>
					<?php endif;?>
				</div>
			</div>
			<div class="col-md-7">
				<div class="locations">
					<div class="multiple-locations">
						<h2>Multiple Locations</h2>
						<h3>Same Top Quality</h3>
					</div>
					<div class="clinic-info">
						<div class="clinic">
							<h4>Apapa Clinic</h4>
							<p>5 Douala Road Apapa, Lagos, Nigeria(Near Apapa Post Office)<br>
							P: +(080) 505 575 74<br>
							P: +(080) 348 490 05<br>
							P: +(070) 463 107 33
							</p>
						</div>
						<hr>
						<div class="clinic">
							<h4>Ikoyi Clinic</h4>
							<p>22B Milverton Road Ikoyi, Lagos, Nigeria(Near St. Saviour's School Ikoyi)<br>
							P: +(01) 279 8232<br>
							P: +(01) 279 8233<br>
							P: +(080) 668 56109<br>
							P: +(070) 463 10734
							</p>
						</div>
						<hr>
						<div class="clinic">
							<h4>Ikeja Clinic</h4>
							<p>11A Isaac John Street(Near IPNX Ikeja Office)GRA, Ikeja, Lagos, Nigeria<br>
							P: +(01) 342 9191<br>
							P: +(070) 463 10735<br>
							P: +(070) 463 10738
							</p>
						</div>
					</div>
				</div>

				<!--Mobile Corousel-->
				
				<div class="clinics">
					<div class="clinic">
						<h4>Apapa Clinic</h4>
						<p>5 Douala Road Apapa, Lagos, Nigeria(Near Apapa Post Office)<br>
						P: (080)505 - 57574<br>
						P: (080)348 - 49005<br>
						P: (070)463 - 10733
						</p>
					</div>
					<div class="clinic">
						<h4>Ikoyi Clinic</h4>
						<p>22B Milverton Road Ikoyi, Lagos, Nigeria(Near St. Saviour's School Ikoyi)<br>
						P: (01)279 - 8232<br>
						P: (01)279 - 8233<br>
						P: (080)668 - 56109<br>
						P: (070)463 - 10734
						</p>
					</div>
					<div class="clinic">
						<h4>Ikeja Clinic</h4>
						<p>11A Isaac John Street(Near IPNX Ikeja Office)GRA, Ikeja, Lagos, Nigeria<br>
						P: (01)342 - 9191<br>
						P: (070)463 - 10735<br>
						P: (070)463 - 10738
						</p>
					</div>
				</div>
				
				<!--End Corousel-->
			</div>
		</div>
	</div>
</div>
<div class="container white-back">
	<div class="sec-title sec-title-blue">
		<h2>Schubbs News</h2>
	</div>
	<div class="sep3"></div>
	<div class="schubbs-news">
		<?php
			$query = new WP_Query(array( 
				'post_type'   => 'news',
				'posts_per_page' => -1
				) 
			);
			if($query->have_posts()): while($query->have_posts()): $query->the_post();
			?>
			<div class="news">
				<div class="news-info">
					<div class="news-img">
						<?php the_post_thumbnail();?>
					</div>
					<div class="news-text">
						<?php
							$home_news_title = get_the_title();
							if(strlen($home_news_title) > 30) { ?>
								<a href="<?php echo get_permalink();?>"><h3><?php echo substr($home_news_title, 0, 30).'...';?></h3></a>
							<?php } else { ?>
								<a href="<?php echo get_permalink();?>"><h3><?php echo $home_news_title; ?></h3></a>
							<?php } ?>
						<a href="<?php the_permalink();?>">
							<p><?php the_excerpt();?></p>
						</a>
					</div>
				</div>
			</div>
		<?php endwhile; endif;?>
	</div>
	<div class="sep2"></div>
	<div class="banner-buttons banner-buttons-small btn-small-blue">
		<a href="<?php echo get_home_url();?>/news">Read All News</a>
	</div>
</div>

<?php get_footer(); ?>