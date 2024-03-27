<?php
require_once('header.php');
?>
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/contactt.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.php">Home <i class="fa fa-chevron-right"></i></a></span> <span>Contact <i class="fa fa-chevron-right"></i></span></p>
            <h1 class="mb-0 bread">Contact</h1>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section bg-light">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-12">
						<div class="wrapper">
							<div class="row mb-5">
								<div class="col-md-4">
									<div class="dbox w-100 text-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-map-marker"></span>
				        		</div>
				        		<div class="text">
					            <p><span>Address:</span> Tilak Nagar Mumbai - 400089</p>
					          </div>
				          </div>
								</div>
								<div class="col-md-4">
									<div class="dbox w-100 text-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-phone"></span>
				        		</div>
				        		<div class="text">
					            <p><span>Phone:</span> <a href="tel://9892447919">9892447919 / 9769272742</a></p>
					          </div>
				          </div>
								</div>
								<div class="col-md-4">
									<div class="dbox w-100 text-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-envelope"></span>
				        		</div>
				        		<div class="text">
					            <p><span>Email:</span> <a href="mailto:adarshberojgar2012@gmail.com">adarshberojgar2012@gmail.com</a></p>
					          </div>
				          </div>
								</div>
							
							</div>
							<div class="row no-gutters">
								<div class="col-md-7">
									<div class="contact-wrap w-100 p-md-5 p-4">
										<h3 class="mb-4">Contact Us</h3>
										<div id="form-message-warning" class="mb-4"></div> 
					      		<div id="form-message-success" class="mb-4">
					            Your message was sent, thank you!
					      		</div>
										<form method="POST" id="contact-form" name="contactForm" class="contactForm">
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label class="label" for="name">Full Name</label>
														<input type="text" class="form-control" name="name" id="name" placeholder="Name">
													</div>
												</div>
												<div class="col-md-6"> 
													<div class="form-group">
														<label class="label" for="email">Email Address</label>
														<input type="email" class="form-control" name="email" id="email" placeholder="Email">
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<label class="label" for="subject">Subject</label>
														<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<label class="label" for="#">Message</label>
														<textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message"></textarea>
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<input type="button" value="Send Message" id="submitBtn" class="btn btn-primary">
														<div class="submitting"></div>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
								<div class="col-md-5 d-flex align-items-stretch">
									<div class="info-wrap w-100 p-5 img" style="background-image: url(images/about.jpg);">
				          </div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12 mt-5">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15082.938069072994!2d72.85477898873594!3d19.07540666206047!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c903914cd983%3A0x83856f60dbe519a7!2sSantacruz%20%E2%80%93%20Chembur%20Link%20Rd%2C%20Mumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1709261834715!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
	var email = $('#email').val();
	var subject = $('#subject').val();
	var message = $('#message').val();

	if(name == '' || email== '' || subject == '' || message == ''){

		alert("All fields are mandatory");
		return false;
	}else{

       $.ajax({
            url: "contacts.php",
            type: "POST",
            data: $("#contact-form").serialize(),
            success: function(response) {
                console.log(response.success);
				alert("Contact store successfully");
				$('#name').val('');
                $('#email').val('');
                $('#subject').val('');
                $('#message').val('');
            },
            error: function(xhr, status, error) {
				alert('Error saving contact. Please try again later.');
                console.error(xhr.responseText); // Log error message
            }
        });
	}

    });
});
</script>