<?php get_header(); ?>
<?php 
  $args = array (

    'post_type' => 'post',
    'category_name' => 'featured',
    'posts_per_page' => 5
  );

  $featured_query = new WP_Query( $args );

?>


<section class="site-header">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
    <?php if ( have_posts() ) : while ( $featured_query->have_posts() ) : $featured_query->the_post(); ?>

      <!-- <h1><?php //the_title(); ?></h1>  -->
      <!-- <h1><?php echo $the_query->current_post; ?></h1> -->

     <li data-target="#carousel-example-generic" data-slide-to="<?php echo $featured_query->current_post; ?>" class="<?php if ($featured_query->current_post == 0) : ?>active <?php endif; ?>"></li> 
      <!-- <li data-target="#carousel-example-generic" data-slide-to="1"></li> -->
      <!-- <li data-target="#carousel-example-generic" data-slide-to="2"></li> -->
    <?php endwhile; endif; ?>

    </ol>

    <?php //rewind_posts(); ?>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <?php if ( have_posts() ) : while ( $featured_query->have_posts() ) : $featured_query->the_post(); ?>

        <div class="item <?php if ($featured_query->current_post == 0) : ?>active <?php endif; ?>">
          <!-- <img src="http://lorempixel.com/1920/600/nature/2" alt="..."> -->

          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('featured-banner', array( 'class'  => "img-responsive")); ?></a>

          <div class="carousel-caption">
            <!-- <h3>This is caption One</h3> -->
          </div>
        </div>

      <?php endwhile; endif; ?>

      <?php wp_reset_postdata(); ?>
 
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</section>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container text-center">
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
              <?php if ( is_active_sidebar( 'front-page-lastrow-left' ) ) : ?>
                <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
                  <?php dynamic_sidebar( 'front-page-lastrow-left' ); ?>
                </div><!-- #primary-sidebar -->
              <?php else: ?>
                <h3>Left Widget Goes Here</h3>
              <?php endif; ?>
            </div>


            <div class="col-md-6">
              <?php if ( is_active_sidebar( 'front-page-lastrow-right' ) ) : ?>
                <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
                  <?php dynamic_sidebar( 'front-page-lastrow-right' ); ?>
                </div><!-- #primary-sidebar -->
              <?php else: ?>
                <h3>Right Widget Goes Here</h3>
              <?php endif; ?>
                </div>
              </div>
            </div>



<?php get_footer(); ?>
