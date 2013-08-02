<?php 
    /*
     Template Name: Home
     */
     ?>

 <?php get_header(); ?>

 <p class="lead"><?php the_field('leading_text'); ?></p>



 

 <?php 
 $args = array(
 	'numberposts' => -1,
 	'post_type' => 'news',
 	'meta_key' => 'news_carousel',
 	'meta_value' => True
 	);

 $carousel_news = new WP_Query( $args);

 ?>
 <?php if( $carousel_news->have_posts() ): ?>
 


	<div id="carousel-example-generic" class="carousel slide">
 	<!-- Indicators -->
 	<ol class="carousel-indicators">

 		<?php for ($i=0; $i < $carousel_news->post_count; $i++) { ?> 
 		<li data-target="#slider" data-slide-to="<? echo $i; ?>" class="<? if ($i == 0) { echo 'active';} ?>"></li>
 		<? } ?>
 	</ol>

 	<!-- Wrapper for slides -->
 	<div class="carousel-inner">
 		<?php while ( $carousel_news->have_posts() ) : $carousel_news->the_post();

 		$attachment_id = get_field('news_image');
		$size = "full"; // (thumbnail, medium, large, full or custom size)
		$image = wp_get_attachment_image_src( $attachment_id, $size );
		?>


		<div class="item <?php if ($carousel_news->current_post == 0) { echo 'active'; } ?>">
			<img id="carped" src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>">
			<div class="carousel-caption  hidden-phone">
				<h4><?php the_title(); ?></h4>
				<p><?php the_excerpt(); ?></p>
			</div>
		</div>


		<?php endwhile; ?>
	</div>
	<!-- Controls -->
		<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
			<span class="icon-prev"></span>
		</a>
		<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
			<span class="icon-next"></span>
		</a>
	</div>



<?php endif; ?>
<?php wp_reset_query();  ?>


 <p>I also co-run my own production company Flitter Films with my other half Kristian Mitchell-Dolby where I produce and cast all of our projects so I mention Flitter Film news in my news section. 
 </p>
 <p>Please get in touch if you have a project that you would like me to cast and also get in touch if you are an actor as if I find a part for you I will let you know. Also send through your headshots, showreels and any questions about acting or casting and I'll get back to you as soon as I can.
 </p>
 <p>On a side note to casting I am also, this year, doing a yearly fundraising event for Cancer Research UK, follow me on @CaleyPCasting here is the reason why: http://nowletmetellyou.tumblr.com  and more information will be posted up on my JustGiving page I appreciate all donations. 
 </p>

<?php get_footer(); ?>