<?php 
/**
*
* Template Name: Test 3 Page
*
**/

?>
<?php get_header(); ?>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
       <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container">
          <h1><?php the_title(); ?></h1>
        </div>
      </div>

      <div class="container">
        <!-- Example row of columns -->
        <div class="row">

            <div class="col-md-12">
             
              <?php the_content(); ?>

            </div>
        <?php endwhile; ?>
    <?php else : ?>
              
              <h3>No Content Found ...</h3>


    <?php endif; ?>



      </div> <!-- ROW ONE -->
     <div class="row">

        <?php 
        global $wp_query;
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
               'post_type' => 'portvideo',
               'posts_per_page' => 3,
               'paged' => $paged

            );

            $the_query = new WP_Query( $args );
             // query_posts( $args );
            

        ?>

            <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 portfolio-item">
                  <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                </div>
            
            <?php endwhile; ?>

              <section class="custom-post-nav">

                <!-- pagination here -->
                <?php
                  if (function_exists(custom_pagination)) {
                    custom_pagination($the_query->max_num_pages,"",$paged);
                  }
                ?>

               
              </section>

              <?php wp_reset_postdata(); ?>

            <?php else : ?>
                        
                        <h3>No Content Found ...</h3>

            <?php endif; ?>
            

    </div> <!-- ROW TWO -->
      <hr>

<?php get_footer(); ?>
























