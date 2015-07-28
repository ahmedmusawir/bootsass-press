<?php get_header(); ?>

<?php include('header.php'); ?>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1><?php wp_title(''); ?></h1>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-8">

          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
         
            <div class="row blog-index-content">
              <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
              <p class="blog-post-meta"><?php echo the_time( 'l, F jS, Y' ); ?> 
                  by <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a>
                  in <?php the_category( ', '); ?>
                  | <a href="<?php comments_link(); ?>"><?php comments_number(); ?> </a></p>

              <?php if ( has_post_thumbnail() ) : ?>
                <div class="pull-left">  
                  <figure class="img-responsive blog-index-img" >
                        
                   <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>                    
                      
                  </figure>
                </div>
              <?php endif; ?>

                <div class="">  
                  <?php the_excerpt(); ?>
                  <p><a class="btn btn-danger" href="<?php the_permalink(); ?>" role="button">Read More ... &raquo;</a></p>
                </div>
            </div>
                   <?php endwhile; ?>

                  <div class="nav-previous alignleft"><?php next_posts_link( 'Older posts &rarr;' ); ?></div>
                  <div class="nav-next alignright"><?php previous_posts_link( '&larr; Newer posts' ); ?></div>
          <?php else : ?>
                    
                    <h3>No Content Found ...</h3>

          <?php endif; ?>
         
        </div>
        <div class="col-md-4">
          <?php get_sidebar(); ?>
        </div>
      </div>

      <hr>

<?php include('footer.php'); ?>


<?php get_footer(); ?>
