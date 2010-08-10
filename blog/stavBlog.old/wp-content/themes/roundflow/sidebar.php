<div id="bottombar">
<div class="column1">
<ul>
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Bottom Left') ) : ?>
<li><h2>Search</h2>
<form id="searchform" method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<ul><li>
<input type="text" name="s" id="s" size="15" /> <input type="submit" value="Search" />
</li></ul>
</form>
</li>
<li><h2>Archives</h2>
<ul>
<?php wp_get_archives('type=monthly'); ?>
</ul>
</li>
<?php endif; ?>
</ul>
    </div>

<div class="column2">
<ul>
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Bottom Right') ) : ?>
<li><h2>Categories</h2>
<ul>
<?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
</ul>
</li>
<?php get_links_list(); ?>
<?php endif; ?>
</ul>
</div>
<div class="spacer">&nbsp;</div>
</div>
