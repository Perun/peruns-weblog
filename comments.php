<?php if ( !empty($post->post_password) && $_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) : ?>
<p><?php _e('Enter your password to view comments.'); ?></p>
<?php return; endif; ?>

<h3 id="comments"><?php comments_number(__('No Comments'), __('1 Comment'), __('% Comments')); ?>
<?php if ( comments_open() ) : ?>
	<a href="#postcomment" title="<?php _e("Leave a comment"); ?>" id="respond"><strong>&raquo;</strong></a><!-- id="respond" hinzugefuegt -->
<?php endif; ?>
</h3>

<?php $kommentar_status = ' ungerade'; /* Leitet die abwechselnde Hintergrundfarbe ein */ ?>

<?php if ( $comments ) : ?>
<ol id="commentlist">
<?php /*foreach ($comments as $comment) :*/ ?>

<?php $count = 0; foreach ($comments as $comment): $count++; ?>
	<li id="comment-<?php comment_ID() ?>" class="kommentare<?php echo $kommentar_status; ?><?php
global $comment;
if ( ($comment->comment_author_email == get_the_author_email()) && ($comment->user_id != 0) ) {
echo " mein-kommentar";
}
?>">
  <h4><?php echo get_avatar( $comment, 18 ); ?><?php comment_author_link() ?><?php edit_comment_link(__("*"), '&nbsp;'); ?></h4>

	<?php comment_text() ?>
    <p class="kommentar-info"><a href="#comment-<?php comment_ID() ?>" class="fett">#<?php echo $count; ?></a> <em><?php comment_type(__('Comment'), __('Trackback'), __('Pingback')); ?> vom <?php comment_date('d. F Y') ?> um <?php comment_time() ?></em></p>
	</li>

	<?php /* Changes every other comment to a different class */
		if (' ungerade' == $kommentar_status) $kommentar_status = ' gerade';
		else $kommentar_status = ' ungerade';
	?>

<?php endforeach; /* end for each comment */ ?>

</ol>

<?php else : /* If there are no comments yet */ ?>
	<p><?php _e('No comments yet.'); ?></p>
<?php endif; ?>

<?php if ( pings_open() ) : ?>
<p><img src="<?php bloginfo('template_directory'); ?>/grafik/feed-icon-12x12.png" alt="Kommentar-RSS: " width="12" height="12" class="bild-mittig" /> <?php comments_rss_link(__('<abbr title="Really Simple Syndication">RSS</abbr> feed for comments on this post.')); ?></p>
<?php endif; ?>


<?php if ( comments_open() ) : ?>
<h3 id="postcomment"><?php _e('Leave a comment'); ?></h3>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">logged in</a> to post a comment.</p>
<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<?php if ( $user_ID ) : ?>

<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="<?php _e('Log out of this account') ?>">Logout &raquo;</a></p>

<?php else : ?>

<p><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" />
<label for="author"><small>Name <?php if ($req) _e('(required)'); ?></small></label></p>

<p><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />
<label for="email"><small>Mail (wird nicht angezeigt) <?php if ($req) _e('(required)'); ?></small></label></p>

<p><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
<label for="url"><small>Website</small></label></p>

<?php endif; ?>

<p><textarea name="comment" id="comment" cols="60" rows="11" tabindex="4"></textarea></p>

<?php if (function_exists('SJB_outputSmilies')) { ?> <div class="smileys"><?php SJB_outputSmilies(); ?></div> <?php } ?>

<p><input name="submit" type="submit" id="submit" tabindex="5" value="Senden" />

<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
</p>
<?php do_action('comment_form', $post->ID); ?>

</form>

<?php endif; // If registration required and not logged in ?>

<?php else : // Comments are closed ?>
<p><?php _e('Sorry, the comment form is closed at this time.'); ?></p>
<?php endif; ?>
