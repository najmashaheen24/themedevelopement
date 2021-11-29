<?php
	get_header();
    the_post();
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
                  </a>
               </li>
            </ul>
         </div>
      </div>
   </div>
</section>
	<section>
		<div class="container">
            <div class="mt-4 mb-5">
               <a href="<?php the_permalink(48) ?>"> <h2 class="magenda-color"><?php the_title(); ?></h2></a>
                <p><?php $imagepath = wp_get_attachment_image_src(get_post_thumbnail_id(),'medium') ?>
                    <img src="<?php echo $imagepath[0] ?>" alt="" 
                    style="width: 800px; height:500px">
                </p>
                <p class="mt-3 mb-0 magenda-color"><?php echo get_the_date(); ?></p>
                <p class=" magenda-color">Author Name: <?php echo get_the_author(); ?></p>
                <p class="mt-2 mb-0 magenda-color"><?php the_content(); ?></p>
            </div>
		</div>
	</section>
    
  <?php get_footer(); ?>