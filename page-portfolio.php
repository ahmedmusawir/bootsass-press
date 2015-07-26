<?php 
/**
*
* Template Name: PortVideo Page
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
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
               'post_type' => 'portvideo',
               'posts_per_page' => 9,
               'paged' => $paged

            );

            $the_query = new WP_Query( $args );

        ?>

        <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 portfolio-item">
          <h2><?php the_title(); ?></h2>
          <!-- <img class="img-responsive" src="http://lorempixel.com/300/200/nature/1"> -->
          <?php if ( has_post_thumbnail() ) : ?>

            <?php 

              $thumbnail_id = get_post_thumbnail_id();
              $thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true );


            ?>
            <div class="">  
              <figure class="blog-index-img" >

                
                <?php //the_post_thumbnail('medium', array( 'class'  => "img-responsive")); ?>
                <a href="<?php echo $thumbnail_url[0] ?>" rel="lightbox-0"><p><img class="img-responsive" src="<?php echo $thumbnail_url[0] ?>"></p></a>    
               
                  
              </figure>
            </div>
          <?php endif; ?>

          <!-- <p> commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui ... </p> -->
          <p><a class="btn btn-danger" href="<?php the_permalink(); ?>" role="button">View details &raquo;</a></p>
        </div>

            <?php $portvideo_count = $the_query->current_post + 1; ?>
            <?php if ( $portvideo_count % 3 == 0) : ?>

              </div> <!-- FIRST ROW CLOSED -->
              <div class="row">
            <?php endif; ?>

        <?php endwhile; ?>

                  <div class="nav-previous alignleft"><?php next_posts_link( 'Older posts &rarr;' ); ?></div>
                  <div class="nav-next alignright"><?php previous_posts_link( '&larr; Newer posts' ); ?></div>
        <?php else : ?>
                    
                    <h3>No Content Found ...</h3>

        <?php endif; ?>
        
      </div> <!-- ROW PortVideo -->

      </div> <!-- CONTAINER -->

      <hr>

<?php get_footer(); ?>
























