<? require('../../../wp-blog-header.php');

//global $comment, $comments;
?>
<ul class="comment-list preview">
<li class="<?php echo $_POST['oddcomment']; ?>">
<div class="commenthead"><em><?php echo $_POST['commentcount']; ?>.</em></em>&nbsp;<?php _e('(later)','lush'); ?><a name="preview"></a>
</div>
<div class="commenttext">
<img alt="Avatar" class="gravatar" src="<?php bloginfo('stylesheet_directory'); ?>/_img/default_gravatar.png">
	<?php echo $_POST['comment']; ?>
	<br style="clear: both;">
</div>

<p class="commentmeta"><cite><strong>
<?php if($_POST['url'] != '') { ?><a href="<?php echo $_POST['url']; ?>"><?php echo $_POST['author']; ?></a><? }
else { echo $_POST['author']; } ?>

</strong></cite></p>
</ul>
