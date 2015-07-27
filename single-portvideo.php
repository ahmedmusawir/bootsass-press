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

            <nav class="custom-post-nav well">
               <section class="nav-item">
                  <div class="pull-left col-md-1"><?php next_post_link( '%link', '<span class="glyphicon glyphicon-circle-arrow-left">Prev</span>' ); ?></div>
                  <div class="text-center col-md-10">
                    <a href="<?php bloginfo( 'url' ); ?>/?p=219"><span class="glyphicon glyphicon-th"></span></a>
                  </div>
                  <div class="pull-right col-md-1"><?php previous_post_link( '%link', '<span class="glyphicon glyphicon-circle-arrow-right">Next</span>' ); ?></div>
               </section>
            </nav>

            <div class="blog-index-content">
                <p class="blog-post-meta col-md-9"><?php echo the_time( 'l, F jS, Y' ); ?> 
                    by <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a>
                    in <?php the_category( ', '); ?>
                    | <a href="<?php comments_link(); ?>"><?php comments_number(); ?> </a></p>

                <p class=" col-md-3 single-portvideo-link-btn"><a  class="btn btn-primary pull-right" href="<?php the_field( 'link' ) ?>" target="_blank"><span class="glyphicon glyphicon-new-window"></span>Learn More ...</a></p>    
            </div>


            <?php if ( has_post_thumbnail() ) : ?>
                  <figure class="img-responsive blog-index-img" >

                    
                        <?php the_post_thumbnail('portvideo-single-banner', array( 'class'  => "img-responsive")); ?>
                   
                      
                  </figure>
              <?php endif; ?>
          </div>


             
            
                <div class="portvideo-single-content">  
                  <p><?php the_content(); ?></p>
                </div>
            </div>

        <?php endwhile; ?>
        <?php else : ?>
              
              <h3>No Content Found ...</h3>


        <?php endif; ?>


        </div>

      <hr>

<?php get_footer(); ?>
