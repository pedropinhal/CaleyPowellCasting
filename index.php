<?php 
    /*
     Template Name: Blog
     */
 ?>


<?php get_header(); ?>

      
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
		<div class="media">
      <a class="pull-left" href="#">
        <?php the_post_thumbnail('thumbnail'); ?>
      </a>
      <div class="media-body">
        <h4 class="media-heading"><?php the_title(); ?></h4>

            <?php the_excerpt(); ?>

            <a href="<?php the_permalink(); ?>" class="btn btn-default btn-small">read more</a>
      </div>
 

</div>
<!-- post -->
<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
<!-- no posts found -->
<?php endif; ?>

   
  
<?php get_footer(); ?>
