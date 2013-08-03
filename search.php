<?php get_header(); ?>
search
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<?php the_title( $before = '<h3>', $after = '</h3>', $echo = true ) ?>

	<?php the_content(); ?>

<!-- post -->
<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
<!-- no posts found -->
<?php endif; ?>
<?php get_footer(); ?>