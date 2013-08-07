<?php get_header(); ?>
<?php 
global $wp_query;
$total_results = $wp_query->found_posts;


 ?>


<?php if ( have_posts() ) : ?>
 <h3>Search results for: <i><?php echo get_search_query(); ?></i>
 	(<?php echo $total_results ?>)
 </h3>
 <?php while ( have_posts() ) : the_post(); ?>
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2> 
	<h5 class="media-heading">

					<?php echo the_author_posts_link(); ?>
						
					
					<small><?php echo get_the_date(); ?> at <?php the_time();?></small>
					<!--<small>(<?php $cat = get_the_category($post->ID); echo $cat[0]->cat_name;  ?>) </small>-->
				</h5>

	<?php the_content(); ?>

<!-- post -->
<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
<!-- no posts found -->
<?php endif; ?>
<?php get_footer(); ?>

id address 
utility proof of address