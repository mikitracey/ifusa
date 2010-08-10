<?php load_theme_textdomain('lush'); ?>
<?php
require_once (ABSPATH . WPINC . '/class-snoopy.php');

// Let's start the admin menu!
add_action('admin_menu','lushmenu');

$lushloc = '../themes/' . basename(dirname($file)); 

function menu() { ?>

<div class="wrap">

<?php if (isset($_POST['Submit'])) : ?>
	<div class="updated">
		<p><?php _e('Lush Options have been updated','lush'); ?></p>
	</div>
<?php endif; ?>

<h2><?php _e('Lush Options','lush'); ?></h2>

<p><?php _e('Here you can set some parameters to suit your needs','lush'); ?></p>

<?php global $wpdb; ?>

<form name="dofollow" action="" method="post">
	<input type="hidden" name="action" value="<?php lushupdate(); ?>" />
	<input type="hidden" name="page_options" value="'dofollow_timeout'" />

<table width="700px" cellspacing="2" cellpadding="5" class="editform">
<tr valign="top">
	<th scope="row"><?php echo __('Header Link'); ?></th>
	<td><input type="checkbox" name="headerlink" id="add-headerlink" value="1" <?php checked('1',get_option('lushheaderlink')); ?>>
		<label for="add-headerlink"><?php _e('Enable header link','lush'); ?></label>
		<p><small><?php _e('Enabling this option will turn the header into a link to your front page','lush'); ?></small></p>
		<p><small><?php _e('This is particularly useful if you have a cool header image and want to get rid of the standard header','lush'); ?></small></p>
	</td>
</tr>

<?php if(function_exists('register_sidebar')) { ?>
	</table>
	<p>Sidebar widgets are active. Please configure your sidebar through the widgets menu.</p>
<?php } else { ?>

<tr valign="top">
	<th scope="row"><?php echo __('Sidebar Links','lush'); ?></th>
	<td><select name="sblinkcat" id="sblinkcat" style="width: 300px;">

<?php if(get_option('lushsblinkcat') != 0) {
	$whichlink = get_option('lushsblinkcat');
	$activelink = $wpdb->get_row("SELECT * FROM $wpdb->linkcategories where cat_id = $whichlink");
	echo '<option value="' . $activelink->cat_id . '">' . $activelink->cat_name . '</option>';
	echo '<option value="">--- ---</option>';
} else {
	echo '<option value="0">No links please</option>';
	echo '<option value="">--- ---</option>';
}

$link_cats = $wpdb->get_results("SELECT * from $wpdb->linkcategories");
foreach ($link_cats as $cat) {
			echo '<option value="' . $cat->cat_id . '">' . $cat->cat_name . '</option>';
            } ?>
		<option value="0"><?php _e('No links please','lush'); ?></option>
	</select>

	<p><small><?php _e('Choose the link category you want to display in your sidebar. You also have the option to display no links at all.','lush'); ?></small></p>
	<p><small><?php _e('Make sure you turn off descriptions for the chosen category, otherwise you will have a cluttered sidebar.','lush'); ?></small></p></td>
</tr>

<tr valign="top">
	<th scope="row"><?php echo __('About Page','lush'); ?></th>
	<td><input type="checkbox" name="aboutpage" id="add-about" name="tags" value="1" <?php checked(!(''), get_option('lushaboutpage')); ?>>
		<label for="add-about"><?php _e('Enable the Lush About Page','lush'); ?></label>
		<p><small><?php _e('Enabling this option will create a static page, which will be linked in the sidebar. Obviously you have to fill it out by yourself ;-)','lush'); ?></small></p>
		<p><small><?php _e('<strong>CAUTION!</strong> Disabling this option will also delete the about page!','lush'); ?></small></p>
	</td>
</tr>

<?php if(function_exists('UTW_ShowWeightedTagSet')) { ?>
<tr valign="top">
	<th scope="row"><?php echo __('Tags Cloud','lush'); ?></th>
	<td><input type="checkbox" name="tagcloud" id="add-tagcloud" name="tagcloud" value="1" <?php checked('1', get_option('lushtagcloud')); ?>>
		<label for="add-tags"><?php _e('Enable Tagcloud','lush'); ?></label>
		<p><small><?php _e('Enabling this option will display a weighed tagcloud with 20 tags in your sidebar.','lush'); ?></small></p>
	</td>
</tr>

<tr valign="top">
	<th scope="row"><?php echo __('Tags Page','lush'); ?></th>
	<td><input type="checkbox" name="tagspage" id="add-tags" name="tags" value="1" <?php checked(!(''), get_option('lushtagspage')); ?>>
		<label for="add-tags"><?php _e('Enable the Lush Tags Page','lush'); ?></label>
		<p><small><?php _e('Enabling this option will create a static page with all tags used in your blog. This page will be linked in the sidebar.','lush'); ?></small></p>
	</td>
</tr>
<?php } ?>

<?php if(function_exists('get_flickrRSS')) { ?>
<tr valign="top">
	<th scope="row"><?php echo __('flickRSS'); ?></th>
	<td><input type="checkbox" name="flickr" id="add-flickr" name="flickr" value="1" <?php checked('1', get_option('lushflickr')); ?>>
		<label for="add-flickr"><?php _e('Enable flickRSS','lush'); ?></label>
		<p><small><?php _e('Enabling this option will display four flickr pictures from the given RSS feed.','lush'); ?></small></p>
		<p><small><?php _e('Make sure you configure flickRSS before enabling this option. The amount of pictures is pre-defined to four with square-size.','lush'); ?></small></p>
	</td>
</tr>
<?php } ?>
</table>

<?php } // End widgets if-clause ?>
<p class="submit"><input type="submit" name="Submit" value="<?php _e('Update Options','lush'); ?> &raquo;" /></p>
</form>
</div>

<div class="wrap">
  <p style="text-align:center;"><?php _e('Help can be found at <a href="http://www.i-jeriko.de/2006/03/06/introducing-lush-for-wordpress/">www.i-jeriko.de</a> (WordPress related) or <a href="http://w3-labs.com">w3-labs.com</a> (Theme at all)','lush'); ?></p>
</div>

<? }

// Update the options when the form is submitted
function lushupdate() {
	if ( !empty($_POST) ) {
		if ( isset($_POST['sblinkcat']) ) {
			$linkcat = $_POST['sblinkcat'];
			update_option('lushsblinkcat', $linkcat, '','');
		}
		if ( isset($_POST['aboutpage']) ) {
			$add = $_POST['aboutpage'];
			create_about();
		} else {
			$remove = '';
			delete_about();
			update_option('lushaboutpage', $remove, '','');
		}
		if ( isset($_POST['tagspage']) ) {
			$add = $_POST['tagspage'];
			//update_option('lushtagspage', $add, '','');
			create_archive();
		} else {
			$remove = '';
			delete_archive();
			update_option('lushtagspage', $remove, '','');
		}
		if ( isset($_POST['tagcloud']) ) {
			$add = $_POST['tagcloud'];
			update_option('lushtagcloud', $add, '','');
		} else {
			$remove = '';
			update_option('lushtagcloud', $remove, '','');
		}
		if ( isset($_POST['flickr']) ) {
			$add = $_POST['flickr'];
			update_option('lushflickr', $add, '','');
		} else {
			$remove = '';
			update_option('lushflickr', $remove, '','');
		}
		if ( isset($_POST['headerlink']) ) {
			$add = $_POST['headerlink'];
			update_option('lushheaderlink',$add, '', '');
		} else {
			$remove = '';
			update_option('lushheaderlink',$remove, '', '');
		}
	}
}

// First things first: The basic installation
if (!get_option('lushinstalled')) {
add_option('lushinstalled', $current, 'This options simply tells me if Lush has been installed before', $autoload);
add_option('lushtagspage', '', 'Wether a tags page is available or not', $autoload);
add_option('lushtagcloud', '', 'Wether a tagcloud will be displayed in the sidebar', $autoload);
add_option('lushflickr', '', 'Wether a set of flickr images will be displayed in the sidebar', $autoload);
add_option('lushsblinkcat', '1', 'Which link category is to be displayed in the sidebar', $autoload);
add_option('lushaboutpage', '', 'Wether a link to an about page will be displayed in the sidebar', $autoload);
add_option('lushrev','100', 'Lush Revision',$autoload);
}

if(!get_option('lushrev')) {
add_option('lushrev','100','Lush Revision',$autoload);
}

if(get_option(lushrev) == '100') {
update_option('lushrev','101', '','');
add_option('lushheaderlink', '', 'Wether the header link should be a clickable image',$autoload);
}

if ( function_exists('register_sidebar')) {
	register_sidebar(array(
	'before_widget' => '<div class="sidebar-node">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
    ));

// New widgets
// Displays the pages the Lush way
function widget_lushpages($args) {
	extract($args);
	$title = 'Pages';

	echo $before_widget . $before_title . $title . $after_title;
	echo wp_list_pages('title_li=&depth=1');
	echo $after_widget;
}

// Displays links to your RSS feeds
function widget_rssfeeds($args) {
	extract($args);
	$title = 'RSS Feeds';

	echo $before_widget . $before_title . $title . $after_title;
	echo '<ul>';
	echo '<li><a href="' . get_bloginfo('rss_url') . '" title = "Articles feed">Articles</a></li>';
	echo '<li><a href="' . get_bloginfo('comments_rss2_url') . '" title="Comments feed">Comments</a></li>';
	echo '</ul>';
	echo $after_widget;
}

// Displays the latest flickr images supplied via flickrRSS
function widget_flickrrss($args) {
	extract($args);

	$title = 'Flickr';

	echo $before_widget . $before_title . $title . $after_title;
	echo '<div id="flickr">';
	echo get_flickrRSS();
	echo '</div>';
	echo $after_widget;
}

// Displays the tagcloud generated by Ultimate Tag Warrior
function widget_tagcloud($args) {
	extract($args);

	$options = get_option('widget_tagcloud');
	$title = $options['title'];
	if($title == '') $title = 'Tagcloud';

	echo $before_widget . $before_title . $title . $after_title;
	$url_parts = parse_url(get_bloginfo('home'));
	$lush = array('default'=>'<span style="font-size: %tagrelweightfontsize%">%taglink%</span> ');
	echo "<p style='overflow: hidden;' id='tagcloud'>";
	echo UTW_ShowWeightedTagSetAlphabetical("",$lush,20);
	echo "</p>";
	echo $after_widget;
}

function widget_tagcloud_control() {
	$options = get_option('widget_tagcloud');
	if (!is_array($options)) $options = array('title'=>'', 'buttontext'=>'Tag Cloud');
	if ($_POST['tagcloud-submit'] ) {
		$options['title'] = strip_tags(stripslashes($_POST['tagcloud-title']));
		update_option('widget_tagcloud',$options);
	}
	$title = htmlspecialchars($options['title'], ENT_QUOTES);
	echo '<p style="text-align:right;"><label for="tagcloud-title">Title: <input style="width:200px;" id="tagcloud-title" name="tagcloud-title" type="text" value="'.$title.'" /></label></p>';
	echo '<input type="hidden" id="tagcloud-submit" name="tagcloud-submit" value="1" />';
}

if(function_exists('UTW_ShowWeightedTagSetAlphabetical')) {
	register_sidebar_widget('Tagcloud','widget_tagcloud');
	register_widget_control('Tagcloud','widget_tagcloud_control');
}

if(function_exists('get_flickrRSS')) {
	register_sidebar_widget('FlickrRSS','widget_flickrrss');
}

	register_sidebar_widget('Pages','widget_lushpages');
	unregister_widget_control('Pages');
	register_sidebar_widget('Your RSS Feeds','widget_rssfeeds');

	unregister_sidebar_widget('Calendar');
	unregister_sidebar_widget('Links');
	unregister_widget_control('RSS 1');
	unregister_sidebar_widget('RSS 1');
	unregister_widget_control('Recent Comments');
	unregister_sidebar_widget('Recent Comments');
	unregister_sidebar_widget('Search');
}

function lushmenu() {
	add_submenu_page('themes.php', 'Lush Options', 'Lush Options', 5, $lushloc . 'functions.php', 'menu');
}

function create_archive() {
global $wpdb, $user_ID;
get_currentuserinfo();
	$check = $wpdb->query("SELECT * from $wpdb->posts WHERE post_title = 'All tags'");
		if(!$check) {
	$message = __('Do not edit this page','lush');
	$title_message = __('All tags','lush');
	$content = apply_filters('content_save_pre', $message);
	$post_title = apply_filters('title_save_pre', $title_message);
	$now = current_time('mysql');
	$now_gmt = current_time('mysql', 1);
	$post_author = $user_ID;
	$id_result = $wpdb->get_row("SHOW TABLE STATUS LIKE '$wpdb->posts'");
	$post_ID = $id_result->Auto_increment;
	$post_name = sanitize_title($post_title, $post_ID);
	$ping_status = get_option('default_ping_status');
	$comment_status = get_option('default_comment_status');
	
	$postquery ="INSERT INTO $wpdb->posts
			(ID, post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt,  post_status, comment_status, ping_status, post_password, post_name, to_ping, post_modified, post_modified_gmt, post_parent, menu_order)
			VALUES
			('$post_ID', '$post_author', '$now', '$now_gmt', '$content', '$post_title', '', 'static', '$comment_status', '$ping_status', '', '$post_name', '', '$now', '$now_gmt', '', '')";
	$result = $wpdb->query($postquery);
	$metaquery = "INSERT INTO $wpdb->postmeta(meta_id, post_id, meta_key, meta_value) VALUES('', '$post_ID', '_wp_page_template', 'page-tags.php')";
	$result2 = $wpdb->query($metaquery);
	update_option('lushtagspage', $post_ID, '','');
	}
}

function delete_archive() {
global $wpdb;
	$pid = get_option('lushtagspage'); 
	$check = $wpdb->query("SELECT * from $wpdb->posts WHERE ID = $pid");
		if($check) {
	$burninate = $wpdb->query("DELETE from $wpdb->posts WHERE ID = $pid and post_status = 'static'");
	$result = $wpdb->query($burninate);
	}
} 

function create_about() {
global $wpdb, $user_ID;
get_currentuserinfo();
	$pid = get_option('lushaboutpage');
	$check = $wpdb->query("SELECT * from $wpdb->posts WHERE ID=$pid");
		if(!$check) {
	$message = __('Feel free to edit this page to your likings','lush');
	$title_message = __('About this site','lush');
	$content = apply_filters('content_save_pre', $message);
	$post_title = apply_filters('title_save_pre', $title_message);
	$now = current_time('mysql');
	$now_gmt = current_time('mysql', 1);
	$post_author = $user_ID;
	$id_result = $wpdb->get_row("SHOW TABLE STATUS LIKE '$wpdb->posts'");
	$post_ID = $id_result->Auto_increment;
	$post_name = sanitize_title($post_title, $post_ID);
	$ping_status = get_option('default_ping_status');
	$comment_status = get_option('default_comment_status');

	$postquery ="INSERT INTO $wpdb->posts
			(ID, post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt,  post_status, comment_status, ping_status, post_password, post_name, to_ping, post_modified, post_modified_gmt, post_parent, menu_order)
			VALUES
			('$post_ID', '$post_author', '$now', '$now_gmt', '$content', '$post_title', '', 'static', '$comment_status', '$ping_status', '', '$post_name', '', '$now', '$now_gmt', '', '')";
	$result = $wpdb->query($postquery);
	//$metaquery = "INSERT INTO $wpdb->postmeta(meta_id, post_id, meta_key, meta_value) VALUES('', '$post_ID', '_wp_page_template', 'page-tags.php')";
	//$result2 = $wpdb->query($metaquery);
	update_option('lushaboutpage', $post_ID, '','');
	}
}

function delete_about() {
global $wpdb;
	$pid = get_option('lushaboutpage'); 
	$check = $wpdb->query("SELECT * from $wpdb->posts WHERE ID = $pid");
		if($check) {
	$burninate = $wpdb->query("DELETE from $wpdb->posts WHERE ID = $pid and post_status = 'static'");
	$result = $wpdb->query($burninate);
	}
}

?>
