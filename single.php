<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


						<h2><?php the_title(); ?> <small><em> by: <?php the_author();  ?></em></small></h2>
						<?php the_date(); ?>
				
						<?php the_content(); ?>
				

				
						<?php comments_template(); ?>
					
<!-- post -->
<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
<!-- no posts found -->
<?php endif; ?>

<?php get_footer(); ?>