<?php // Do not delete these lines
	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

        if (!empty($post->post_password)) { // if there's a password
            if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
				?>
				
				<p class="nocomments"><?php _e('This post is password protected. Enter the password to view comments.','lush'); ?><p>
				
				<?php
				return;
            }
        }

/* Function for seperating comments from track- and pingbacks. */
	function comment_type_detection($commenttxt = 'Comment', $trackbacktxt = 'Trackback', $pingbacktxt = 'Pingback') {
		global $comment;
		if (preg_match('|trackback|', $comment->comment_type))
			return $trackbacktxt;
		elseif (preg_match('|pingback|', $comment->comment_type))
			return $pingbacktxt;
		else
			return $commenttxt;
	}
		/* This variable is for alternating comment background */
		$oddcomment = 'comment0';
		$commentcount = 1;
		$trackback = 'trackback0;'
?>

<a name="comments"></a><h2 id="commentshead"><?php _e('Commentary','lush'); ?></h2>
<p class="postmetadata alt"><small><a href="#respond" onclick="new Effect.ScrollTo('respond'); return false"><?php _e('Leave a response','lush'); ?> &raquo;</a></small></p>

  <ol class="comment-list" id="commentlist">

<?php if ($comments) : ?>

<?php foreach ($comments as $comment) :
if (comment_type_detection() == "Comment") { ?>
	<li class="<?php echo $oddcomment; ?>  <?php if ($comment->comment_author_email == get_the_author_email()) { echo 'author_comment'; } ?>">
	  <div class="commenthead"><em><?php echo $commentcount; ?>.</em>&nbsp;<?php if (function_exists('time_since')) { ?> <?php printf( __('%s ago','lush'), time_since(abs(strtotime($comment->comment_date_gmt . " GMT")), time())) ?> <? } else { comment_time(__('F jS, Y H:i','lush')); } ?></div>
	  <div class="commenttext">
<?php if(function_exists(gravatar)) { ?>
		<img alt="Avatar" class="gravatar" src="<?php gravatar("R", 40, get_bloginfo('stylesheet_directory')."/_img/default_gravatar.png"); ?>" />
<?php } ?>
		<?php comment_text() ?>
		<br style="clear: both;" />
	  </div>
	  <p class="commentmeta"><cite><strong><?php comment_author_link() ?></strong></cite></p>
	</li>

	<?php /* Changes every other comment to a different class and increases counter */	
		if ('comment1' == $oddcomment) {
		  $oddcomment = 'comment0';
		  $commentcount++;
		} else { 
		  $oddcomment = 'comment1';
		  $commentcount++;
		}		
	?>

	<?php } endforeach;/* end for each comment */ ?>

  </ol>

<a name="trackbacks"></a><h2 id="trackbackshead"><?php _e('Trackbacks','lush'); ?></h2>

<?php $comments = $wpdb->get_results("SELECT * FROM $wpdb->comments WHERE comment_post_ID = '$post->ID' AND comment_approved = '1' AND comment_type!= '' ORDER BY comment_date"); ?>

<?php if ($comments) : ?>
	  <ol class="trackback-list" id="trackbackList">
<? foreach ($comments as $comment) { 
if (comment_type_detection() != "Comment") { ?>

		<li><blockquote class="<?php echo $trackback; ?>"><p><?php comment_text(); ?></p>
			<p><cite><?php comment_author_link() ?></cite></p></li>

<?php if('trackback1' == $trackback) { $trackback = 'trackback0'; } else { $trackback = 'trackback1'; } ?>

<?php } } ?>

</ol>

<?php endif; ?>

<?php else : // this is displayed if there are no comments so far ?>

  <?php if ('open' == $post->comment_status) : ?> 
		<!-- If comments are open, but there are no comments. -->
		<li id="hidelist" style="display:none"></li>
</ol>
	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p class="nocomments"><?php _e('Comments are closed.','lush'); ?></p>
		<li style="display:none"></li>
</ol>
	<?php endif; ?>
<?php endif; ?>



	  <p id="rss_track">
		<a href="<?php bloginfo('url'); ?>/?feed=rss2&amp;p=<?php echo $id; ?>" title="<?php _e('RSS Feed','lush'); ?>" class="rssbutton">&nbsp;</a>
		<a href="<?php trackback_url(); ?>" class="trackbackbutton" title="<?php _e('Trackback URI','lush'); ?>">&nbsp;</a>
		<small><?php _e('Leave a comment, a trackback from your own site or subscribe to an RSS feed for this entry.','lush'); ?></small>
		<br style="clear: both;" />
	  </p>

<?php if ('open' == $post->comment_status) : ?>

<h2 id="responsehead"><?php _e('Leave a response','lush'); ?></h2>

		<?php if ( get_option('comment_registration') && !$user_ID ) : ?>

			<p style="margin-left:40px;"><?printf( __('You must <a href="%s" />log in</a> to post a comment.','lush'), get_option('siteurl') . '/wp-login.php?redirect_to=' . get_permalink()) ?></p>

		<?php else : ?>

<div id="preview" style="display: none;"><p>test <?php echo $comment_author_text; ?></p></div>

<form id="commentform" action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" onsubmit="new Ajax.Updater({success: 'commentlist'}, '<?php bloginfo('stylesheet_directory') ?>/comments-ajax.php', {asynchronous: true, evalScripts: true, insertion: Insertion.Bottom, onComplete: function(request){complete(request)}, onFailure: function(request){failure(request)}, onLoading: function(request){loading()}, parameters: Form.serialize(this)}); return false;">
  <p id="commentformtop">&nbsp;</p>
  <div class="comment-box">
    <div id="cformtop">
    <div id="errors"></div>
    <a name="respond" id="respond"></a>

<?php if ( $user_ID ) { ?>
			<p style="margin:0 40px; padding-bottom:10px; font-weight:bold; line-height:20px;"><?printf( __('Logged in as %s.','lush'), '<a href="' . get_option('siteurl') . '/wp-admin/profile.php">' . $user_identity . '</a>') ?></a> <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="<?php _e('Log out of this account','lush') ?>"><?php _e('Logout','lush'); ?> &raquo;</a></p></div>
			<input type="hidden" id="author" name="author" value="<?php echo $user_identity; ?>" />
<?php } else { ?>
    
	<p id="guest_name">
      <label for="author"><?php _e('Name:','lush'); ?></label>
      <input id="author" name="author" size="20" type="text" value="<?php echo $comment_author; ?>" />
    </p>

      <p id="guest_email">
        <label for="email"><?php _e('Email:','lush'); ?></label>
        <input id="email" name="email" size="30" type="text" value="<?php echo $comment_author_email; ?>" />
      </p>
	<div style="display: none;" id="mailurl">
      <p id="guest_url">
        <label for="url"><?php _e('URL:','lush'); ?></label>
        <input id="url" name="url" size="30" type="text" value="<?php echo $comment_author_url; ?>" />
      </p>
    </div>
  </div>

  <p id="cformtoggle"><a href="javascript:void(null);" onclick="toggleMailUrl();"><?php _e('leave url','lush'); ?></a></p>
<? } ?>
  <p>
    <label for="comment"><?php _e('Message:','lush'); ?></label>
    <textarea cols="40" id="comment" name="comment" rows="20"></textarea>
  </p>

  <p id="commentbuttons">
    <a style="display: block;" href="" id="previewbutton" onclick="new Ajax.Updater('preview', '<?php bloginfo('stylesheet_directory'); ?>/comment_preview.php',  {asynchronous:true, evalScripts:true, parameters:Form.serialize('commentform'), onComplete:function(request){Effect.Appear('preview')}}); return false;"></a>
	<input type="submit" style="display:block;" id="form-submit-button" value="" />

    <input style="display:inline;" value="<?php _e('Submit comment','lush'); ?>" id="noscriptsubmit" type="submit" />

    <span id="comment_loading" style="display: none;"><img alt="<?php _e('Submitspinner','lush'); ?>" src="<?php bloginfo('stylesheet_directory'); ?>/_img/submitspinner.gif" /></span>
  </p>

  <input type="hidden" name="comment_post_ID" value="<?php echo $id ?>" />
  <input type="hidden" name="oddcomment" id="oddcomment" value="<?php echo $oddcomment; ?>" />
  <input type="hidden" name="commentcount" id="commentcount" value="<?php echo $commentcount; ?>" />

  <br style="clear: both;" />

  <p id="cformfoot">&nbsp;</p>
  </div>
<?php do_action('comment_form', $post->ID); ?>
</form>

<script type="text/javascript">
showButtons();
</script>

<?php endif; endif; ?>

