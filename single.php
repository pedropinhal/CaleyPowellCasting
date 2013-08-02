<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>



  

<h2><?php the_title(); ?></h2>  
<h5 class="media-heading">

					<?php echo the_author_posts_link(); ?>
						
					
					<small><?php the_date(); ?> at <?php the_time();?></small>
				</h5>



						
						
						<?php the_content(); ?>
								
						<?php comments_template(); ?>
					
<!-- post -->
<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
<!-- no posts found -->
<?php endif; ?>

<?php get_footer(); ?>