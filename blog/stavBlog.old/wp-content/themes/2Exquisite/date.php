<?php
/* Don't remove this line. */
require('./wp-blog-header.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/1">
	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset'); ?>" />
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats please -->
	<style type="text/css" media="screen">
		@import url( <?php bloginfo('stylesheet_url'); ?> );
	</style>
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_get_archives('type=monthly&format=link'); ?>
	<?php //comments_popup_script(); // off by default ?>
	<?php wp_head(); ?>

</head>

<body>
<div id="rap">
	<?php get_header();?>
	<div id="content">
		<?php if ($posts) { ?>
		<?php $post = $posts[0]; /* Hack. Set $post so that the_date() works. */ ?>
		<?php if (is_day()) { ?>
			<h3><?php the_time('l, F jS, Y'); ?></h3>
			<div class="post-info">Daily Archive</div>
		<?php } elseif (is_month()) { ?>
			<h3><?php the_time('F Y'); ?></h3>
			<div class="post-info">Monthly Archive</div>

		<?php } elseif (is_year()) { ?>
			<h3><?php the_time('Y'); ?></h3>
			<div class="post-info">Yearly Archive</div>

		<?php } ?>
		<br/>
		<?php foreach ($posts as $post) : start_wp(); ?>
			<?php require('post.php'); ?>
		<?php endforeach; ?>
		<p align="center"><?php posts_nav_link() ?></p>
		<?php } else { ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php } ?>
	</div>
	<div id="sidebar">
		<?php /* If this is a daily archive */ if (isset($_GET['day']) && !empty($_GET['day'])) { ?>
			<h2>Currently Browsing</h2><ul><li><p>You are currently browsing the <a href="<?php bloginfo('url'); ?>"><?php echo bloginfo('name'); ?></a> weblog archives
			for the day <?php the_time('l, F jS, Y'); ?>.</p></li></ul>

			<?php /* If this is a monthly archive */ } elseif ((isset($_GET['m']) && !empty($_GET['m'])) or (isset($_GET['monthnum']) && ! empty($_GET['monthnum']))) { ?>
			<h2>Currently Browsing</h2><ul><li><p>You are currently browsing the <a href="<?php bloginfo('url'); ?>"><?php echo bloginfo('name'); ?></a> weblog archives
			for <?php the_time('F, Y'); ?>.</p></li></ul>

			<?php /* If this is a yearly archive */ } elseif (isset($_GET['year']) && !empty($_GET['year'])) { ?>
			<h2>Currently Browsing</h2><ul><li><p>You are currently browsing the <a href="<?php bloginfo('url'); ?>"><?php echo bloginfo('name'); ?></a> weblog archives
			for the year <?php the_time('Y'); ?>.</p></li></ul>
			<?php } ?>
		<h2>Monthly Archives</h2>
		<ul><?php wp_get_archives('type=monthly'); ?></ul>
		<h2>Categories</h2>
		<ul><?php wp_list_cats(); ?></ul>
		<h2><?php _e('Search:'); ?></h2>
		<ul><li>
		<form id="searchform" method="get" action="<?php echo $PHP_SELF; ?>">
			<input type="text" name="s" id="s" size="15" /><br />
			<input type="submit" name="submit" value="<?php _e('Search'); ?>" />
		</form>
		</li></ul>
	</div>

<?php get_footer();?>
</div>

</body>
</html>