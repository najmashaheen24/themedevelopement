<?php 
    //Template Name:Contact
    get_header();
?>
    <section class="social-links ">
        <div class="px-5 ">
          <div class="row">
            <div class="col-md-7"></div>
            <div class="col-md-5 ms-0">
              <ul class="py-2 m-0 d-flex justify-content-end">
                <li class="d-inline "><a href="https://www.facebook.com/">
                  <i class="fab fa-facebook-f  white-circles " 
                  style="padding: .5rem .7rem;"></i></i></a>
                </li>
                <li class="d-inline mx-3"><a href="https://www.instagram.com/">
                  <i class="fab fa-instagram p-2 white-circles"></i></a>
                </li>
                <li class="d-inline "><a href="https://www.linkedin.com/">
                  <i class="fab fa-linkedin-in me-1 p-2 white-circles"></i>
                </a></li>
              </ul>
            </div>
          </div>
        </div>
      </section>
   		<section class="contactus-slider d-flex align-items-center mb-5">
   			<div class="px-5 ">
   				<div class="page-title ">
   					<h1>contact us</h1>
   				</div>
   			</div>
   		</section>
   		<section class="contactus-content  pt-5 pb-5">
   			<!-- d-flex justify-content-center -->
   			<div class="px-5 padding-1">
 					<div class="row">
            <div class="col-md-7">
              <!--Google map-->
              <div id="map-container-google-1" class="z-depth-1-half map-container margin-bottom-2" style="height: 500px">
                <iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" class="w-100 h-100" 
                  style="border:0; border-radius: 9px;" allowfullscreen></iframe>
              </div>
              <!--Google Maps-->
            </div>
            <div class="col-md-5">
              <div class="px-5 py-5 padding-2 padding-1 qucik-details h-100">
                <div class="aboutus-heading">
                  <h2 class="white-color">Quick Contacts</h2>
                  <h5 class="mt-4">Please feel free to contact our friendly staff with any medical enquiry.</h5>  
                </div>
                <div class="contact-assets pt-4">
                  <p><a href="tel:+923123123123"><i class="fas fa-phone-alt me-3 margin-right-1"></i> 312 3123123</a></p>
                  <p><a href="mailto:edgemed@yahoo.com"><i class="fas fa-envelope me-3 margin-right-1"></i> edgemed@yahoo.com</a></p>
                </div>
              </div>
            </div>
          </div>
   			</div>
   		</section>

<?php

    get_footer();

?>