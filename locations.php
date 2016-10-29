<?php /*Template Name: Locations*/
	get_header();
?>
<div class="location-map">
	<img id="loc-1" src="<?php echo get_template_directory_uri();?>/images/Apapa-Nigeria.jpg">

	<img id="loc-2" src="<?php echo get_template_directory_uri();?>/images/Ikoyi-Nigeria.jpg">

	<img id="loc-3" src="<?php echo get_template_directory_uri();?>/images/Ikeja-Nigeria.jpg">

</div>
<div class="container">
	<div class="container location-white-back">
		<div>
			<div class="col-md-2">
				<div class="page-title sec-title sec-title-blue">
					<h2><?php the_title();?></h2>
				</div>
			</div>
			<div class="col-md-10">
				<div class="row">
					<div class="col-md-4">
						<div class="location location1 loc-active">
							<div class="location-title">
								<img src="<?php echo get_template_directory_uri();?>/images/blue-arrow.png">
								<span>Apapa Clinic</span>
							</div>
							<hr>
							<div class="location-info">
								<span>5 Douala Road Apapa, Lagos, Nigeria (Near Apapa Post Office)</span><br>
								<div class="sep1"></div>
								<span>P: +(080) 505 57574</span><br>
								<span>P: +(080) 348 49005</span><br>
								<span>P: +(070) 463 10733</span><br>
								<a class="direction-link" href="https://www.google.com/maps/place/Schubbs+Dental+Clinic/@6.441537,3.36905,17z/data=!4m5!3m4!1s0x0:0x202d45ed9ce97cc1!8m2!3d6.4411418!4d3.3690275?hl=en-US" target="_blank">Get Direction</a>

							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="location location2">
							<div class="location-title">
								<img src="<?php echo get_template_directory_uri();?>/images/blue-arrow.png">
								<span>Ikoyi Clinic</span>
							</div>
							<hr>
							<div class="location-info">
								<span>22B Milverton Road Ikoyi, Lagos, Nigeria (Near St. Saviour's School, Ikoyi)</span><br>
								<div class="sep1"></div>
								<span>P: +(01) 279 8232</span><br>
								<span>P: +(01) 279 8233</span><br>
								<span>P: +(080) 668 56109</span><br>
								<span>P: +(070) 463 10734</span><br>
								<a class="direction-link" href="https://www.google.com/maps/place/Schubbs+Dental+Clinic/@6.4478009,3.4495146,16.44z/data=!4m5!3m4!1s0x103bf4fad5813719:0xaf7e4e887e5f8374!8m2!3d6.4466332!4d3.4493362?hl=en-US" target="_blank">Get Direction</a>
							</div>
						</div>
					</div>
					<div style="padding-right:0" class="col-md-4">
						<div class="location location3">
							<div class="location-title">
								<img src="<?php echo get_template_directory_uri();?>/images/blue-arrow.png">
								<span>Ikeja Clinic</span>
							</div>
							<hr>
							<div class="location-info">
								<span>11A Isaac John Street (Near IPNX Ikeja Office) GRA, Ikeja, Lagos, Nigeria</span><br>
								<div class="sep1"></div>
								<span>P: +(01) 342 9191</span><br>
								<span>P: +(070) 463 10735</span><br>
								<span>P: +(070) 463 10738</span><br>
								<a class="direction-link" href="https://www.google.com/maps/place/Schubbs+Dental+Clinic/@6.5743243,3.3615309,17z/data=!4m5!3m4!1s0x103b92730ae2214b:0xf2c41690caf905a2!8m2!3d6.5738873!4d3.3614129?hl=en-US" target="_blank">Get Direction</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer();?>