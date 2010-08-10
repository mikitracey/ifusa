<?php $posts_per_page = 15; global $table_prefix; require('../../../wp-blog-header.php'); ?>
<a title="<?php _e('close search box','lush'); ?>" class="searchclose" href="javascript:hideSearch();">&nbsp;</a>
<p id="searchfor"><?php printf( __('Searched for <em>"%s"</em>','lush'), $s) ?></p>

<ul>
<?php if ($posts) { foreach ($posts as $post) { start_wp(); ?>
<li><a href="<?php echo get_permalink() ?>" rel="bookmark" title="<?php printf( __('go read %s','lush'), get_the_title()) ?>"><?php the_title(); ?></a></li>
<?php } } else { ?><li><?php _e('No Results','lush'); ?></li><?php } ?>
<li><a href="<?php bloginfo('url'); ?>?s=<?php echo wp_specialchars($s); ?>"><?php _e('More Results...','lush'); ?></a></li>
</ul>
<a title="<?php _e('close search box','lush'); ?>" class="searchclose" href="javascript:hideSearch();">&nbsp;</a>


