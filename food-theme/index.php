<?php

get_header();

?>


<!-- Image Gallery -->
<main>

  <div class="container height" >
   
  <p class="header" ><?php single_post_title(); ?></p>
  </div>
  
  <div class="container ">
    

        

        <?php

          $count = 1;
            while(have_posts()) {
                the_post();
                if($count % 2 == 1) { ?>
                 <div class="row">
                <?php }
                ?>
  <div class="col-lg-6 col-md-3 col-sm-12">
          <div class="card mb-5 shadow-sm">
          <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>

            <div class="card-body">
              <div class="card-title">
                <h2>"Bell Beefer" | Taco Bell Item</h2>
              </div>
              <hr>
              <div class="card-text">
                <p>
                   <?php the_excerpt(); ?>
                </p>
              </div>
              <a href="<?php the_permalink(); ?>" class="btn btn-outline-primary rounded-0 float-end"
                >See More</a >
            </div> 
            </div> <!--  -->
           
            </div>  <!-- col-6 -->   
            <?php if($count % 2 == 0) { ?>
               </div> <!-- row -->

         <?php   } $count++; ?>
         <?php  }
         if($count % 2 != 1) echo "</div>"; ?>
        </div> <!-- container -->








<?php

get_footer();

?>