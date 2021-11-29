<?php
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
                  </a>
               </li>
            </ul>
         </div>
      </div>
   </div>
</section>
	<section>
		<div class="container">
			<h1 class="center magenda-color mt-4">OUR POSTS</h1>
			<div class="row">
			<?php 
			while(have_posts()) {
				the_post();
				$imagepath= wp_get_attachment_image_src(get_post_thumbnail_id(), 'medium');
			?>
				<div class="col-md-4">
					<div class="post-box mb-5 ">
						<img src="<?php echo $imagepath[0] ?>" alt="" class="img-fluid">
						<div class="post-details pt-1 pb-5">
							<h2 class="post-title"><?php the_title(); ?></h2>
							<p class="mb-0 "> <?php echo get_the_excerpt(); ?></p>
							<p class="mb-0 magenda-color"> <?php echo get_the_date(); ?></p> 
							<p class="mb-4 magenda-color">Author Name: <?php echo get_the_author(); ?> </p>
							<a href="<?php the_permalink(); ?>" class="post-detail"><span class="me-2">Read More</span><i class="fas fa-arrow-right"></i></a>
						</div>
					</div>
				</div>
			<?php } ?>
			<?php wp_pagenavi(); ?>
			</div>
			
		</div>
	</section>
    
  <?php get_footer(); ?>