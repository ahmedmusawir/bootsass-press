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
            <div class="blog-index-content">
                <p class="blog-post-meta"><?php echo the_time( 'l, F jS, Y' ); ?> 
                    by <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a>
                    in <?php the_category( ', '); ?>
                    | <a href="<?php comments_link(); ?>"><?php comments_number(); ?> </a></p>
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
