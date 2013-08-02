<?php 

// load CSS & JS
function loadStylesAndScripts()
{
	wp_enqueue_style(
			'bootstrap-styles', get_template_directory_uri() . '/css/bootstrap.min.css'
		);
	wp_enqueue_style(
			'bootstrap-styles-icon', get_template_directory_uri() . '/css/bootstrap-glyphicons.css'
		);
	wp_enqueue_style(
			'main-styles', get_template_directory_uri() . '/style.css'
		);
	wp_enqueue_script(
			'jquery', 'http://code.jquery.com/jquery.min.js'
		);
	wp_enqueue_script(
			'bootstrap-scripts', get_template_directory_uri() . '/js/bootstrap.min.js'
		);
}

add_action('wp_enqueue_scripts', 'loadStylesAndScripts');

// register main nav

register_nav_menus(array(
		'main-nav' => 'Main Navigation',
		'footer-nav' => 'Footer Navigation'
	));

// add thumbnail feature
add_theme_support( 'post_thumbnails' );


// boostrap comment template
// comment template
function comments_feed_template_callback($comment, $args, $depth){
	$GLOBAL['coment'] = $comment;

	?>
		<div class="media">
			<a href="<?php echo get_comment_author_url(); ?>" class="pull-left">
				<?php echo get_avatar(); ?>
			</a>

			<div class="media-body">
				<h5 class="media-heading">
					<a href="<?php echo get_comment_author_url(); ?>">
						<?php echo get_comment_author(); ?>
					</a>
					<small><?php comment_date(); ?> at <?php comment_time();?></small>
				</h5>
				<?php comment_text(); ?>

				<?php comment_reply_link( array_merge($args, array(
					'reply_text' => __('<strong>reply</strong> <span class="glyphicon glyphicon-share-alt"></span>'),
					'depth' => $depth,
					'max_depth' => $args['max_depth']
				))); ?>
			</div>

		</div>

	<?php
}


// filter for reply link bs style
add_filter('comment_reply_link', 'add_reply_link_class');

function add_reply_link_class($class){
	$class = str_replace("class='comment-reply-link", "class='btn btn-default btn-small", $class);
	return $class;

}

// filter for adding class to avatar thumbail
add_filter('get_avatar', 'add_avatar_class');

function add_avatar_class($class){
	$class = str_replace("class='avatar", "class='img-rounded", $class);
	return $class;

}

function custom_news_post_type() {

   /**
    * Register a custom post type
    *
    * Supplied is a "reasonable" list of defaults
    * @see register_post_type for full list of options for register_post_type
    * @see add_post_type_support for full descriptions of 'supports' options
    * @see get_post_type_capabilities for full list of available fine grained capabilities that are supported
    */
    register_post_type( 'news', array(
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'news' ),
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt'),
        'capability_type' => 'post',
        'capabilities' => array(),
        'labels' => array(
            'name' => 'News',
            'singular_name' => 'News',
            'add_new' => 'Add new',
            'add_new_item' => 'Add New News Item',
            'edit_item' => 'Edit News Item',
            'new_item' => 'New News Item',
            'all_items' => 'All News',
            'view_item' => 'View News',
            'search_items' => 'Search News',
            'not_found' =>  'No News Found',
            'not_found_in_trash' => 'No new found in trash',
            'parent_item_colon' => '',
            'menu_name' => 'News'
        )
    ) );
}
add_action( 'init', 'custom_news_post_type' );

