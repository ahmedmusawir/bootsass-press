<?php get_header(); ?>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <!-- <h2><?php //the_title(); ?></h2> -->

          <?php the_content(); ?>

        </div>
        <?php endwhile; ?>
      <?php else : ?>
        
        <h3>No Content Found ...</h3>

      <?php endif; ?>

    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">

          <?php if ( is_active_sidebar( 'front-left' ) ) : ?>
            <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
              <?php dynamic_sidebar( 'front-left' ); ?>
            </div><!-- #primary-sidebar -->
          <?php else: ?>
            <h3>Left Widget Goes Here</h3>
          <?php endif; ?>
          
        </div>
        <div class="col-md-4">
          <?php if ( is_active_sidebar( 'front-center' ) ) : ?>
            <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
              <?php dynamic_sidebar( 'front-center' ); ?>
            </div><!-- #primary-sidebar -->
          <?php else: ?>
            <h3>Center Widget Goes Here</h3>
          <?php endif; ?>
       </div>
        <div class="col-md-4">
          <?php if ( is_active_sidebar( 'front-right' ) ) : ?>
            <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
              <?php dynamic_sidebar( 'front-right' ); ?>
            </div><!-- #primary-sidebar -->
          <?php else: ?>
            <h3>Right Widget Goes Here</h3>
          <?php endif; ?>
        </div>
      </div>


      <hr>
    </div> <!-- /container -->

         <div class="jumbotron">
          <div class="container index-content">
            <div class="col-md-6">
              <img src="http://lorempixel.com/400/300/nature/2">
            </div>


            <div class="col-md-6">
              <h1> I Love Jesus! </h1>
              <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
              <p><a class="btn btn-warning btn-lg" href="#" role="button">Never Learn more &raquo;</a></p>
            </div>
          </div>
        </div>



<?php get_footer(); ?>
