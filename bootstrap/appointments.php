<?php /*Template Name: Appointments*/
	get_header();
?>
<div class="sep2"></div>
<div class="container">
	<div class="page-title sec-title sec-title-blue">
		<h2><?php the_title();?></h2>
	</div>
	<div class="sep2"></div>
	<div class="row">
		<div class="col-md-7">
			<div class="calender-div">
				<div id="cal">
					<div class="header">
						<!-- <span class="left button" id="prev"> &lang; </span> -->
						<!-- <span class="left hook"></span> -->
						<span class="month-year" id="label"> June 2016 </span>
						<!-- <span class="right hook" id=""></span> -->
						<span class="right button" id="next"> &rang; </span>
					</div>
					<div id="cal-frame">
						<table class="curr">
							<thead>
								<td>sun</td>
								<td>mon</td>
								<td>tue</td>
								<td>wed</td>
								<td>thu</td>
								<td>fri</td>
								<td>sat</td>
							</thead>
							<tr>
								<td></td><td></td><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td>
							</tr>
							<tr>
								<td>6</td><td>7</td><td>8</td><td>9</td><td>10</td><td class="today">11</td><td>12</td>
							</tr>
							<tr>
								<td>13</td><td>14</td><td>15</td><td>16</td><td>17</td><td>18</td><td>19</td>
							</tr>
							<tr>
								<td>20</td><td>21</td><td>22</td><td>23</td><td>24</td><td>25</td><td>26</td>
							</tr>
							<tr>
								<td>27</td><td>28</td><td>29</td><td>30</td><td class="nil"></td><td class="nil"></td><td class="nil"></td>
							</tr>
						</table>
					</div>
					<div class="appointment-schedule">
						<h3>Preferred Time:</h3>
						<div class="sep1"></div>
						<div class="appoint-timing">
							<span>Morning<br>8am - 12pm</span>
						</div>
						<div class="appoint-timing">
							<span>Early Afternoon<br>12pm - 3pm</span>
						</div>
						<div class="appoint-timing">
							<span>Late Afternoon<br>3pm - 6pm</span>
						</div>
						<div class="appoint-timing">
							<span>Next</span>
						</div>

					</div>
				</div>
			</div>
		</div>
		<div class="col-md-5">
			<div class="page-content appointment-content">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quis lectus maximus, molestie lectus nec, rutrum justo. Sed aliquet lobortis eros. Duis enim est, cursus et velit vitae, dapibus semper lectus. Maecenas fringilla velit odio, eget dignissim risus luctus a. Nam non tortor pellentesque, iaculis erat non, viverra erat. Quisque malesuada id erat at lobortis. Aliquam sit amet malesuada augue. Sed suscipit velit at pulvinar faucibus. Praesent leo elit, accumsan malesuada pulvinar eget, ultricies in est. Aliquam vestibulum lacus et purus interdum, et commodo diam mattis.</p>
			</div>
		</div>	
	</div>
</div>


<?php get_footer();?>