<?php
/*
Tiga WordPress Theme

Copyright (C) 2006  Shamsul Azhar

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/
?>
<?php // Do not delete these lines
	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if (!empty($post->post_password))
	{ // if there's a password
		if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password)
		{  // and it doesn't match the cookie
?>
			<div class="center-widget-title"><?php _te('Comments'); ?></div>
			<div class="center-widget">
				<p class="nocomments"><?php _te('This post is password protected. Enter the password to view comments.'); ?><p>
			</div> <!-- center-widget -->
<?php
			return;
		}
	}

	/* This variable is for alternating comment background */
	$oddcomment = 'alt';
?>

<!-- You can start editing here. -->

<?php if ($comments) : ?>
	<div class="center-widget-title">
		<?php comments_number(_t('No Responses'), _t('One Response'), _t('% Responses') );?> <?php _te('to'); ?> &#8220;<?php the_title(); ?>&#8221;
	</div> <!-- center-widget-title -->

	<div class="center-widget">
		<div class="comment-list">
			<?php
			$comment_num = 1;
			foreach ($comments as $comment) :
			?>
				<div class="<?php if ($oddcomment) echo "odd-comment"; else echo "even-comment"; ?>"
						 id="comment-<?php comment_ID() ?>">

					<div class="comment-header">
						<div class="clearfix">

							<!-- gravatar plugin - http://www.gravatar.com/plugins/wp_gravatar.zip -->
							<?php if (function_exists('gravatar')) { ?>
								<a target="_blank" href="http://www.gravatar.com" title="Add your own user icon">
									<img class="gravatar"
											 src="<?php gravatar('G', 36, get_bloginfo('template_url'). '/images/anon.jpg'); ?>"
											 alt="Gravatar"
											 height="36"
											 width="36" />
								</a>
							<?php } ?>
							<!-- gravatar plugin - end -->

							<a class="comment-num"
								 href="#comment-<?php comment_ID() ?>"
								 title="<?php _te('Permanent link to this comment'); ?>">
								<?php echo $comment_num ?>
							</a>

							<div class="comment-meta">
								<cite>
									<?php if (get_comment_author_url() == '') { ?>
										<?php comment_author(); ?>
									<?php } else { ?>
										<a target="_blank" href="<?php comment_author_url(); ?>"><?php comment_author(); ?></a>
									<?php } ?>
								</cite> <?php _te('says'); ?>:
								<?php if ($comment->comment_approved == '0') : ?>
										<em><?php _te('Your comment is awaiting moderation.'); ?></em>
								<?php endif; ?>
								<br />

								<div class="comment-date">
									<?php comment_date(_t('F jS, Y')) ?> <?php _te('at'); ?> <?php comment_time() ?>
								</div> <!-- comment-date -->

								<div class="comment-edit-link">
									<?php edit_comment_link(_t('edit'),'',''); ?>
								</div> <!-- comment-edit-link -->
							</div> <!-- comment-meta -->

						</div> <!-- clear-fix -->
					</div> <!-- comment-header -->

					<div class="comment-text"><?php comment_text() ?></div>

				</div> <!-- even/odd comment -->

			<?php /* Changes every other comment to a different class */
				if ('alt' == $oddcomment)
					$oddcomment = '';
				else
					$oddcomment = 'alt';
			?>

			<?php
				$comment_num++;

			endforeach; /* end for each comment */
			?>

		</div> <!-- comment-list -->
	</div> <!-- center-widget -->
<?php else : // this is displayed if there are no comments so far ?>
	<?php if ('open' == $post->comment_status) : ?>
		<!-- If comments are open, but there are no comments. -->
	<?php else : // comments are closed ?>
		<!-- If comments are closed. -->
	<?php endif; ?>
<?php endif; ?>

<?php if ('open' == $post->comment_status) : ?>
	<div class="center-widget-title" id="respond"><?php _te('Leave a Reply'); ?></div>
	<div class="center-widget">
		<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
			<p><?php _te('You must be'); ?> <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>"><?php _te('logged in'); ?></a> <?php _te('to post a comment'); ?>.</p>
		<?php else : ?>
			<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
			<?php if ( $user_ID ) : ?>
				<p><?php _te('Logged in as'); ?> <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Logout &raquo;</a></p>
			<?php else : ?>
				<p>
					<input type="text"
								 name="author"
								 id="author"
								 value="<?php echo $comment_author; ?>"
								 size="22"
								 tabindex="1" />
						<label for="author"><small>Name <?php if ($req) echo "(required)"; ?></small></label>
				</p>

				<p>
					<input type="text"
								 name="email"
								 id="email"
								 value="<?php echo $comment_author_email; ?>"
								 size="22"
								 tabindex="2" />
					<label for="email">
						<small>Mail (will not be published) <?php if ($req) echo "(required)"; ?></small>
					</label>
				</p>

				<p>
					<input type="text"
								 name="url"
								 id="url"
								 value="<?php echo $comment_author_url; ?>"
								 size="22"
								 tabindex="3" />
					<label for="url"><small>Website</small></label>
				</p>

			<?php endif; ?>

			<p class="permitted-tags"><?php _te('You can use these tags:'); ?> <?php echo allowed_tags(); ?></p>

			<p><textarea name="comment" id="comment" cols="80" rows="10" tabindex="4"></textarea></p>

			<p>
				<input name="submit" type="submit" id="submit" tabindex="5" value="<?php _te("Submit Comment"); ?>" />
				<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
			</p>

			<?php do_action('comment_form', $post->ID); ?>

			</form>

			<?php if (function_exists('show_manual_subscription_form')) show_manual_subscription_form(); ?>

		<?php endif; ?>
	</div> <!-- center-widget -->
<?php else : // comments are closed ?>
	<!-- If comments are closed. -->
	<div class="center-widget-title"><?php _te('Leave a Reply'); ?></div>
	<div class="center-widget">
		<p class="nocomments"><?php _te('Comments are closed.'); ?><p>
	</div> <!-- center-widget -->
<?php endif; ?>
