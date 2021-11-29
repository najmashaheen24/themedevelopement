<?php get_header(); ?>
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
   		<section class="services-slider d-flex align-items-center">
   			<div class="px-5 ">
   				<div class="page-title ">
   					<h1> <?php the_title() ?> </h1>
   				</div>
   			</div>
   		</section>
   		<div class="main-content">
        <div class="container">
          <!-- this is by using img tag and this is for feature image line number 33 and 34-39 have same function
        \that is to show featured image on website -->
          <?php the_post_thumbnail('large'); ?>
          <?php the_content(); ?>
          <?php $imagepath = wp_get_attachment_image_src(get_post_thumbnail_id(),'medium');
            //  print_r($imagepath); to get the path of image here i get immage path that is 0
           ?>

          <img src="<?php  echo $imagepath[0]; ?>" width="500" alt="">
        </div>
      </div>
<?php get_footer(); ?>