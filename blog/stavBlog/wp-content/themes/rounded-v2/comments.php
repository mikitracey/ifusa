<?php // Do not delete these lines
	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

        if (!empty($post->post_password)) { // if there's a password
            if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
				?>
				
				<p class="nocomments"><?php _e("This post is password protected. Enter the password to view comments."); ?><p>
				
				<?php
				return;
            }
        }

		/* This variable is for alternating comment background */
		$oddcomment = 'alt';
?>

<!-- You can start editing here. -->

<div class="comments-post">
<?php if ($comments) : ?>
	<h3 id="comments"><?php comments_number('<span class="nocomment">no</span> <span class="nextcomments"><span class="noflavor">com</span>ment yet, be the first !</span>', '<span class="acomment">1</span> <span class="nextcomments"><span class="oneflavor">Com</span>ment for this post</span>', '<span class="arecomments">% </span><span class="nextcomments"><span class="areflavor">Com</span>ments for this post</span>' );?></h3> 

	<div id="commentlist">

	<?php foreach ($comments as $comment) : ?>

			<?php /* Changes every other comment to a different class */	
		if ('alt' == $oddcomment) {
			$oddcomment = 'norm';
			}
		else {
			$oddcomment = 'alt';
		}
	?>
		<div class="<?php echo $oddcomment; ?>">
		
			
				
				<div class="licomtop"><div class="cheadfill">&nbsp;</div></div>

					<div class="licombody">
							<div class="co-content">
							<cite><?php comment_author_link() ?></cite> Says:
							<?php if ($comment->comment_approved == '0') : ?>
							<em>Your comment is awaiting moderation.</em>
							<?php endif; ?>
							

							<span class="commentmetadata"><a href="#comment-<?php comment_ID() ?>" title=""><?php comment_date('F jS, Y') ?> at <?php comment_time() ?></a> <?php edit_comment_link('e','',''); ?></span>

							<?php comment_text() ?>
							</div>
					</div>

	

		</div>



	<?php endforeach; /* end for each comment */ ?>

	</div><!-- //commentlist -->

 <?php else : // this is displayed if there are no comments so far ?>

  <?php if ('open' == $post-> comment_status) : ?> 
		<!-- If comments are open, but there are no comments. -->
		
	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p class="nocomments">Comments are closed.</p>
		
	<?php endif; ?>
<?php endif; ?>


<?php if ('open' == $post-> comment_status) : ?>

<h3 id="respond">Leave a Reply</h3>
	<div id="commentform-container">
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
<label for="email"><small>Mail (will not be published) <?php if ($req) _e('(required)'); ?></small></label></p>

<p><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
<label for="url"><small>Website</small></label></p>

<?php endif; ?>

<!--<p><small><strong>XHTML:</strong> You can use these tags: <?php echo allowed_tags(); ?></small></p>-->

<p><textarea name="comment" id="comment" cols="100%" rows="10" tabindex="4"></textarea></p>

<p><input name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" />
<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
</p>
<?php do_action('comment_form', $post->ID); ?>

</form>
	</div><!-- close commentform-container -->
</div><!-- close COMMENTS-POST -->
<?php endif; // If registration required and not logged in ?>

<?php endif; // if you delete this the sky will fall on your head ?>