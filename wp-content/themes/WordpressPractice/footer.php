<footer>
      <div class="footer-primary ">
        <div class="p-5 ">
          <div class="row">
            <div class="col-md-3">
              <a class="navbar-brand" href="#"><img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/images/edgeMedLogo.jpg"></a>
            </div>
            <div class="col-md-3">
              <div class="important-pages">
                <h3>Pages</h3>
               <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="home.html">Home</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="services.html">Services</a>
                  </li>
                  <li class="nav-item">
	                 	<a class="nav-link" href="contactus.html">Who We Help</a>
	               </li>
                  <li class="nav-item">
                      <a class="nav-link" href="aboutus.html">About Us</a>
                  </li>
                   <li class="nav-item">
	                    <a class="nav-link" href="contactus.html">Contact</a>
	                </li> 
                </ul>
              </div>
            </div>
            <div class="col-md-3">
              <div class="important-pages">
                <h3>About Us</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In et vestibulum justo, vel tristique sem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nullam a tempus lacus, ut mattis elit..</p>
              </div>
            </div>
            <div class="col-md-3">
              <div class="contact-details">
                <h3>Contact Details</h3>
                <p>If you have any questions or need help, feel free to contact us for assistanc</p>
                <p><a href="tel:+923123123123"><i class="fas fa-phone-alt"></i> 312 3123123</a></p>

              </div>
            </div>
          </div>
        </div>
        <div class="footer-secondary copy-right py-3">
          <h6 >Copyright © 2021 <span class="magenda-color"><strong>Edge Med Solution LLC</strong></span>. All Rights Reserved</h6>
        </div>
      </div>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
   <!--  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

     <script type="text/javascript">
        
        function initialSetup1() {
		  if (document.getElementById("title1") != null) {
		    setTimeout(function() {
		      document.getElementById('title1').style.display = 'block';
		    }, 1000);
		  }
		}
		initialSetup1();  

        function initialSetup2() {
		  if (document.getElementById("title2") != null) {
		    setTimeout(function() {
		      document.getElementById('title2').style.display = 'block';
		    }, 2000);
		  }
		}
		initialSetup2();

		function initialSetup3() {
		if (document.getElementById("title3") != null) {
		    setTimeout(function() {
		      document.getElementById('title3').style.display = 'block';
		    }, 3000);
		  }
		}
		initialSetup3();

		function initialSetup4() {
		if (document.getElementById("title4") != null) {
		    setTimeout(function() {
		      document.getElementById('title4').style.display = 'block';
		    }, 4000);
		  }
		}
		initialSetup4(); 
		function initialSetup5() {
		if (document.getElementById("title5") != null) {
		    setTimeout(function() {
		      document.getElementById('title5').style.display = 'block';
		    }, 5000);
		  }
		}
		initialSetup5();

		function initialSetup6() {
		if (document.getElementById("title6") != null) {
		    setTimeout(function() {
		      document.getElementById('title6').style.display = 'block';
		    }, 6000);
		  }
		}
		initialSetup6();

		function initialSetup7() {
		if (document.getElementById("title7") != null) {
		    setTimeout(function() {
		      document.getElementById('title7').style.display = 'block';
		    }, 7000);
		  }
		}
		initialSetup7();

		function initialSetup8() {
		if (document.getElementById("title8") != null) {
		    setTimeout(function() {
		      document.getElementById('title8').style.display = 'block';
		    }, 8000);
		  }
		}
		initialSetup8();
    </script>

	<script>
		const rotate = (image, degrees) => {
		image.style.transform = `rotate(${+degrees}deg)`;
		}

const img = document.getElementById('js-logo');

const oneLoop = () => {
  setTimeout(() => rotate(img, -278), 1500);
  setTimeout(() => rotate(img, -218), 2500);
  setTimeout(() => rotate(img, -176), 3500);
  setTimeout(() => rotate(img, -140), 4500);
  setTimeout(() => rotate(img, -95), 5500);
  setTimeout(() => rotate(img, -50), 6500);
//   setTimeout(() => rotate(img, -350), 7500);
}

oneLoop();
// setInterval(() => oneLoop(), 6000);
setTimeout(function() {
      clearInterval(loop);
    }, 6500);
	</script>
    
  </body>
</html>
<?php wp_footer(); ?>
