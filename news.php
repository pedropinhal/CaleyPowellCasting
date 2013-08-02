<?php 
    /*
     Template Name: News
     */
     ?>


     <?php get_header(); ?>
     <h3>News</h3>

     <?php 
     $news = new WP_Query('post_type=news&posts_per_page=-1');

     ?>
<?php if( $news->have_posts() ): ?>
     <?php while ( $news->have_posts()) : $news->the_post(); ?>
     <?php 
$attachment_id = get_field('news_image');
$size = "thumbnail"; // (thumbnail, medium, large, full or custom size)
 $image = wp_get_attachment_image_src( $attachment_id, $size );

      ?>

 
     <div class="media">
     	<a class="pull-left" href="#">
     		<img class="media-object" src="<?php echo $image[0]; ?>" />
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
<?php endif; ?>


<?php wp_reset_query(); ?>
 <?php get_footer(); ?>