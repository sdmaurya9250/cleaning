<?php
require_once('header.php');
?>
<div class="hero-wrap js-fullheight" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
			<div class="col-md-6 ftco-animate">
				<h2 class="subheading">Leave the house cleaning chores to us</h2>
				<h1 class="mb-4">Let us do the dirty work, so you don't have to.</h1>
				<p><a href="#" class="btn btn-primary mr-md-4 py-2 px-4">Learn more <span class="ion-ios-arrow-forward"></span></a></p>
			</div>
		</div>
	</div>
</div>

<section class="ftco-appointment ftco-section ftco-no-pt ftco-no-pb">
	<div class="overlay"></div>
	<div class="container">
		<div class="row d-md-flex justify-content-center">
			<div class="col-md-12">
				<div class="wrap-appointment bg-white d-md-flex pl-md-4 pb-5 pb-md-0">
					<form id="appointment-form" class="appointment w-100">
						<div class="row justify-content-center">
							<div class="col-12 col-md d-flex align-items-center pt-4 pt-md-0">
								<div class="form-group py-md-4 py-2 px-4 px-md-0">
									<label for="name">Name</label>
									<input type="text" id="name" name="name" class="form-control" placeholder="Your Name">
								</div>
							</div>
							<div class="col-12 col-md d-flex align-items-center">
								<div class="form-group py-md-4 py-2 px-4 px-md-0">
									<label for="name">Phone number</label>
									<input type="text" id="phone" name="phone" class="form-control" placeholder="Phone number">
								</div>
							</div>
							<div class="col-12 col-md d-flex align-items-center">
								<div class="form-group py-md-4 py-2 px-4 px-md-0">
									<label for="name">Select Services</label>
									<div class="form-field">
										<div class="select-wrap">
											<div class="icon"><span class="fa fa-chevron-down"></span></div>
											<select name="service" id="service" class="form-control">
												<option disabled>Select Services</option>
												<option value="HOUSE KEEPING">HOUSE KEEPING</option>
												<option value="SANITIZATION">SANITIZATION</option>
												<option value="PEST CONTROL">PEST CONTROL</option>
												<option value="WASTAE MANAGEMENT">WASTAE MANAGEMENT</option>
												<option value="Water Tank Cleaning">Water Tank Cleaning</option>
												<option value="Home Cleaning">Home Cleaning</option>
												<option value="Deep Cleaning">Deep Cleaning</option>
												<option value="Drainage Cleaning">Drainage Cleaning</option>
												<option value="Facade Cleaning">Facade Cleaning</option>
												<option value="Other Cleaning">Other Cleaning</option>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="col-12 col-md d-flex align-items-center pb-4 pb-md-0">
								<div class="form-group py-md-4 py-2 px-4 px-md-0">
									<label for="name">Datetime</label>
									<div class="form-field">
										<div class="select-wrap">
											<div class="icon"><span class="fa fa-chevron-down"></span></div>
											<input type="text" name="datetime" id="datetime" class="form-control">
										</div>
									</div>
								</div>
							</div>
							<div class="col-12 col-md d-flex align-items-center align-items-stretch">
								<div class="form-group py-md-4 py-2 px-4 px-md-0 d-flex align-items-stretch bg-primary">
								<input type="button" value="Make an Appointment" class="btn btn-primary py-3 px-4" id="submitBtn">
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb">
	<div class="container">
		<div class="row d-flex no-gutters">
			<div class="col-md-6 d-flex">
				<div class="img d-flex align-items-center justify-content-center py-5 py-md-0" style="background-image:url(images/about.jpg);">
					<div class="time-open-wrap">
						<div class="desc p-4">
							<h2>Business Hours</h2>
							<div class="opening-hours">
								<h4>Opening Days:</h4>
								<p class="pl-3">
									<span><strong>Monday – Friday:</strong> 9am to 20 pm</span>
									<span><strong>Saturday :</strong> 9am to 17 pm</span>
								</p>
								<h4>Vacations:</h4>
								<p class="pl-3">
									<span>All Sunday Days</span>
									<span>All Official Holidays</span>
								</p>
							</div>
						</div>
						<div class="desc p-4 bg-secondary">
							<h3 class="heading">For Emergency Cases</h3>
							<span class="phone">(+91) 9892447919</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 pl-md-5 pt-md-5">
				<div class="row justify-content-start py-5">
					<div class="col-md-12 heading-section ftco-animate">
						<span class="subheading">Welcome to Cleaning Company</span>
						<h2 class="mb-4">Let's make you fresher than ever</h2>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
					</div>
				</div>
				<div class="row ftco-counter py-5" id="section-counter">
					<div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
						<div class="block-18">
							<div class="text">
								<strong class="number" data-number="45">0</strong>
							</div>
							<div class="text">
								<span>Years of <br>Experienced</span>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
						<div class="block-18">
							<div class="text">
								<strong class="number" data-number="2342">0</strong>
							</div>
							<div class="text">
								<span>Happy <br>Customers</span>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
						<div class="block-18">
							<div class="text">
								<strong class="number" data-number="30">0</strong>
							</div>
							<div class="text">
								<span>Building <br>Cleaned</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center pb-5 mb-3">
			<div class="col-md-7 heading-section text-center ftco-animate">
				<h2>WHY CHOOSE US</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 col-lg-12 services ftco-animate">
				<div class="d-block d-flex">
					<div class="media-body">
					
						<p>Adarsh Unemployed Seva Co-operative Society
							Ltd. has been es tabl i shed by the Skill
							Development Department and Cooperative
							Department of Maharashtra Government to
							provide employment to the unemployed youth by
							providing the below services.</p>
						<p>
						<p>The purpose of establishment of Adarsh
							Unemployed Seva Cooperative Society Ltd. is not
							to make profit but to provide employment to
							unemployed youth by providing various services .
						</p>
						<p>Many types of services are provided on behalf of
							the organization. All the required licenses are with
							the organization, today Adarsh Unemployed
							Sanstha is continuously providing the types of
							services since last 23 years. Adarsh Unemployed
							Seva Sahakari Sanstha Ltd is a local organization
							in Tilak Nagar and through this organization is
							providing the following services at a modest cost</p>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>

<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center pb-5 mb-3">
			<div class="col-md-7 heading-section text-center ftco-animate">
				<span class="subheading">Services</span>
				<h2>How We Works</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-lg-4 services ftco-animate">
				<div class="d-block d-flex">
					<div class="icon d-flex justify-content-center align-items-center">
						<span class="flaticon-workplace"></span>
					</div>
					<div class="media-body pl-3">
						<h3 class="heading">HOUSE KEEPING
						</h3>
						<p class="text-truncate-service">Housekeeping services ensure your home is clean, organized, and comfortable, allowing you to relax and enjoy your space without worrying about chores.</p>
						<p><a href="#" class="btn-custom">Read more</a></p>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-4 services ftco-animate">
				<div class="d-block d-flex">
					<div class="icon d-flex justify-content-center align-items-center">
						<span class="flaticon-pool"></span>
					</div>
					<div class="media-body pl-3">
						<h3 class="heading">Water Tank Cleaning</h3>
						<p class="text-truncate-service">Water tank cleaning services help maintain the quality of your water supply by removing sediment, debris, and harmful contaminants, ensuring clean and safe water for your household.</p>
						<p><a href="#" class="btn-custom">Read more</a></p>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-4 services ftco-animate">
				<div class="d-block d-flex">
					<div class="icon d-flex justify-content-center align-items-center">
						<span class="flaticon-rug"></span>
					</div>
					<div class="media-body pl-3">
						<h3 class="heading">Pest Control </h3>
						<p class="text-truncate-service">Pest control services protect your home from unwanted intruders such as insects, rodents, and pests, ensuring a hygienic and comfortable living environment for you and your family.</p>
						<p><a href="#" class="btn-custom">Read more</a></p>
					</div>
				</div>
			</div>

			<div class="col-md-6 col-lg-4 services ftco-animate">
				<div class="d-block d-flex">
					<div class="icon d-flex justify-content-center align-items-center">
						<span class="flaticon-kitchen"></span>
					</div>
					<div class="media-body pl-3">
						<h3 class="heading">. Home Cleaning </h3>
						<p class="text-truncate-service">Home cleaning services take care of all your cleaning needs, from dusting and vacuuming to mopping and sanitizing, leaving your home sparkling clean and fresh.</p>
						<p><a href="#" class="btn-custom">Read more</a></p>
					</div>
				</div>
			</div>

			<div class="col-md-6 col-lg-4 services ftco-animate">
				<div class="d-block d-flex">
					<div class="icon d-flex justify-content-center align-items-center">
						<span class="flaticon-garden"></span>
					</div>
					<div class="media-body pl-3">
						<h3 class="heading">Deep Cleaning</h3>
						<p class="text-truncate-service">Deep cleaning services provide a thorough and comprehensive cleaning of your home, tackling dirt, grime, and stains in hard-to-reach areas for a truly spotless finish.</p>
						<p><a href="#" class="btn-custom">Read more</a></p>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-4 services ftco-animate">
				<div class="d-block d-flex">
					<div class="icon d-flex justify-content-center align-items-center">
						<span class="flaticon-balcony"></span>
					</div>
					<div class="media-body pl-3">
						<h3 class="heading">Drainage Cleaning</h3>
						<p class="text-truncate-service">Drainage cleaning services prevent clogs and blockages in your plumbing system, ensuring smooth water flow and preventing costly repairs and water damage.</p>
						<p><a href="#" class="btn-custom">Read more</a></p>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-4 services ftco-animate">
				<div class="d-block d-flex">
					<div class="icon d-flex justify-content-center align-items-center">
						<span class="flaticon-kitchen"></span>
					</div>
					<div class="media-body pl-3">
						<h3 class="heading">Sanitization</h3>
						<p class="text-truncate-service">Sanitization services eliminate harmful bacteria, viruses, and germs from your home, providing a safe and healthy environment for you and your loved ones.</p>
						<p><a href="#" class="btn-custom">Read more</a></p>
					</div>
				</div>
			</div>

			<div class="col-md-6 col-lg-4 services ftco-animate">
				<div class="d-block d-flex">
					<div class="icon d-flex justify-content-center align-items-center">
						<span class="flaticon-garden"></span>
					</div>
					<div class="media-body pl-3">
						<h3 class="heading">Waste Management						</h3>
						<p class="text-truncate-service">Waste management services handle the collection, disposal, and recycling of household waste, promoting environmental sustainability and cleanliness in your community.</p>
						<p><a href="#" class="btn-custom">Read more</a></p>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-4 services ftco-animate">
				<div class="d-block d-flex">
					<div class="icon d-flex justify-content-center align-items-center">
						<span class="flaticon-balcony"></span>
					</div>
					<div class="media-body pl-3">
						<h3 class="heading"> Facade Cleaning </h3>
						<p class="text-truncate-service">Facade cleaning services keep the exterior of your home looking pristine and attractive, removing dirt, grime, and pollutants to enhance curb appeal and property value..</p>
						<p><a href="#" class="btn-custom">Read more</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="ftco-section ftco-no-pb">
	<div class="container">
		<div class="row justify-content-center pb-5 mb-3">
			<div class="col-md-12 heading-section  text-center ftco-animate">
				<span class="subheading">Our Project</span>
				<h2>We have done many latest cleaning project</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="work img d-flex align-items-center" style="background-image: url(images/work-1.jpg);">
					<a href="images/work-1.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
						<span class="fa fa-expand"></span>
					</a>
					<div class="desc w-100 px-4 text-center pt-5 mt-5">
						<div class="text w-100 mb-3 mt-4">
							<h2><a href="work-single.html">House Cleaning</a></h2>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="work img d-flex align-items-center" style="background-image: url(images/work-2.jpg);">
					<a href="images/work-2.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
						<span class="fa fa-expand"></span>
					</a>
					<div class="desc w-100 px-4 text-center pt-5 mt-5">
						<div class="text w-100 mb-3 mt-4">
							<h2><a href="work-single.html">Window Cleaning</a></h2>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="work img d-flex align-items-center" style="background-image: url(images/work-3.jpg);">
					<a href="images/work-3.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
						<span class="fa fa-expand"></span>
					</a>
					<div class="desc w-100 px-4 text-center pt-5 mt-5">
						<div class="text w-100 mb-3 mt-4">
							<h2><a href="work-single.html">Pool Cleaning</a></h2>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="work img d-flex align-items-center" style="background-image: url(images/work-4.jpg);">
					<a href="images/work-4.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
						<span class="fa fa-expand"></span>
					</a>
					<div class="desc w-100 px-4 text-center pt-5 mt-5">
						<div class="text w-100 mb-3 mt-4">
							<h2><a href="work-single.html">Office Cleaning</a></h2>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="work img d-flex align-items-center" style="background-image: url(images/work-5.jpg);">
					<a href="images/work-5.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
						<span class="fa fa-expand"></span>
					</a>
					<div class="desc w-100 px-4 text-center pt-5 mt-5">
						<div class="text w-100 mb-3 mt-4">
							<h2><a href="work-single.html">Carpet Cleaning</a></h2>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="work img d-flex align-items-center" style="background-image: url(images/work-6.jpg);">
					<a href="images/work-6.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
						<span class="fa fa-expand"></span>
					</a>
					<div class="desc w-100 px-4 text-center pt-5 mt-5">
						<div class="text w-100 mb-3 mt-4">
							<h2><a href="work-single.html">Garden Cleaning</a></h2>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="work img d-flex align-items-center" style="background-image: url(images/work-7.jpg);">
					<a href="images/work-7.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
						<span class="fa fa-expand"></span>
					</a>
					<div class="desc w-100 px-4 text-center pt-5 mt-5">
						<div class="text w-100 mb-3 mt-4">
							<h2><a href="work-single.html">Carpet Cleaning</a></h2>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="work img d-flex align-items-center" style="background-image: url(images/work-8.jpg);">
					<a href="images/work-8.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
						<span class="fa fa-expand"></span>
					</a>
					<div class="desc w-100 px-4 text-center pt-5 mt-5">
						<div class="text w-100 mb-3 mt-4">
							<h2><a href="work-single.html">Pool Cleaning</a></h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<?php
require_once('footer.php');
?>

<script>
$(document).ready(function() {
    $("#submitBtn").click(function() {
	var name = 	$('#name').val();
	var phone = $('#phone').val();
	var service = $('#service').val();
	var datetime = $('#datetime').val();

	if(name == '' || phone== '' || service == '' || datetime == ''){

		alert("All fields are mandatory");
		return false;
	}else{

       $.ajax({
            url: "appointment.php",
            type: "POST",
            data: $("#appointment-form").serialize(),
            success: function(response) {
                console.log(response);
				alert('Appointment saved successfully!');
				$('#name').val('');
                $('#phone').val('');
                $('#service').val('');
                $('#datetime').val('');
            },
            error: function(xhr, status, error) {
				alert('Error saving appointment. Please try again later.');
                console.error(xhr.responseText); // Log error message
            }
        });
	}

    });
});
</script>