<?php 
/**
*
* Template Name: Test 4 Featured
*
**/

?>
<?php get_header(); ?>

<?php 
  $args = array (

    'post_type' => 'post',
    'category_name' => 'porsche'
  );

  $featured_query = new WP_Query( $args );

?>

<section class="jumbotron">
  

      <?php if ( have_posts() ) : while ( $featured_query->have_posts() ) : $featured_query->the_post(); ?>

          <h2><?php the_title(); ?></h2>

          <a href="<?php the_permalink(); ?>"><?php // the_post_thumbnail('featured-banner', array( 'class'  => "img-responsive")); ?></a>


      <?php endwhile; endif; ?>

      <?php wp_reset_postdata(); ?>

</section>

 
    
    <hr>

<?php get_footer(); ?>
























