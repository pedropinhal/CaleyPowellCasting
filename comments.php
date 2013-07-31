<?php if ( 'open' == $post->comment_status ) : ?>

<div id="respond">

<h3><?php comment_form_title(); ?></h3>

<?php cancel_comment_reply_link(); ?>

<?php if ( get_option( 'comment_registration' ) && !$user_ID ) : ?>

<p>You must be <a href="<?php echo wp_login_url( get_permalink() ); ?>">logged in</a> to post a comment.</p>

<?php else : ?>

<form class="form-horizontal" action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<?php if ( $user_ID ) : ?>

<p>Logged in as <a href="<?php echo get_option( 'siteurl' ); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url( get_permalink() ); ?>" title="Log out of this account">Log out &raquo;</a></p>

<?php else : ?>

<div class="form-group">
	<label for="author" class="col-lg-3 control-label">Name <?php if ( $req ) echo "( required )"; ?></label>
	<div class="col-lg-8">
		<input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" class="form-control" placeholder="Name" <?php if ($req) echo "aria-required='true'"; ?> />
	</div>
</div>

<div class="form-group">
	<label for="email" class="col-lg-4 control-label">Email ( <?php if ( $req ) echo "required, "; ?>never shared )</label>
	<div class="col-lg-8">
		<input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" class="form-control" placeholder="Email" <?php if ($req) echo "aria-required='true'"; ?> />
	</div>		
</div>

<div class="form-group">
	<label for="url" class="col-lg-3 control-label">Website</label>
	<div class="col-lg-8">
		<input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" class="form-control" placeholder="Website" />
	</div>
</div>

<?php endif; ?>

<div class="form-group">
	<label for="comment" class="col-lg-3 control-label">Comment</label>
	<div class="col-lg-8">
		<textarea name="comment" id="comment" class="form-control"></textarea></p>
	</div>
</div>
<p><input name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" /></p>
<?php do_action( 'comment_form', $post->ID ); comment_id_fields(); ?>

</form>

<?php endif; // If registration required and not logged in ?>
</div>

<?php endif; // If comments are open: delete this and the sky will fall on your head ?>

<?php wp_list_comments(array(
	'type' => 'comment',
	'callback' => 'comments_feed_template_callback'
	)); ?>