<?php /*Template Name: Locations*/
	get_header();
?>
<div class="location-map">
	<iframe id="loc-1" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3309.0230439660754!2d3.3668398141824136!3d6.441147825903658!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8bb29d9b0d4b%3A0x202d45ed9ce97cc1!2sSchubbs+Dental+Clinic!5e1!3m2!1sen!2sin!4v1472819407223" width="100%" height="1000px" frameborder="0" style="border:0" allowfullscreen></iframe>

	<iframe id="loc-2" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3308.9865046336085!2d3.4478214141823895!3d6.446749525840773!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bf4fad5813719%3A0xaf7e4e887e5f8374!2sSchubbs+Dental+Clinic!5e1!3m2!1sen!2sin!4v1472819458020" width="100%" height="1000px" frameborder="0" style="border:0" allowfullscreen></iframe>
	
	<iframe id="loc-3" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3287.387449836581!2d3.3592242147709803!3d6.573887295245602!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b92730ae2214b%3A0xf2c41690caf905a2!2sSchubbs+Dental+Clinic!5e1!3m2!1sen!2sin!4v1472819283944" width="100%" height="1000px" frameborder="0" style="border:0" allowfullscreen></iframe>

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
								<span>P: +(070) 463 10733</span>
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
								<span>P: +(070) 463 10734</span>
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
								<span>P: +(070) 463 10738</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer();?>