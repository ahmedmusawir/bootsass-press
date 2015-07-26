<?php include('header.php'); ?>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
          <div class="col-md-8">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>



              <h2><?php the_title(); ?></h2> 

              <?php the_content(); ?>

          

            <?php endwhile; ?>
            <?php else : ?>
              
              <h3>No Content Found ...</h3>

            <?php endif; ?>

          </div>
     
         
          <div class="col-md-4">
            <h2>Sidebar Heading</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-info" href="#" role="button">View details &raquo;</a></p>
          </div>


        </div> <!-- END ROW -->
      </div> <!-- END Container -->


      <hr>
   
<?php include('footer.php'); ?>
