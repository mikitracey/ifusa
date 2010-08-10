  <div id="sidebar">
    <div id="search" class="livesearchform">
		<form id="searchform" method="get" action="<?php bloginfo('home'); ?>/?s=">
			<p><label for="q" id="qlabel">Search this site</label><input  type="text"  id="q" name="s" value="<?php _e('search this site','lush'); ?>" onkeypress="liveSearchStart()" onblur="setTimeout('hideSearch()',2000); /*if (this.value == '';) {this.value = '';}*/"  onfocus="if (this.value == 'search this site') {this.value = '';}"  /></p>
			<!--<p style="display:none;"><input type="submit" id="searchsubmit" style="display: none;" value="Search" /></p>-->
		</form>
		<div id="search-results" style="display:none;"><div id="LSShadow"></div></div>
    </div>

      <div class="sidebar-node" id="fontprefs">
        <a id="fontsmall" href="javascript:void(null);" title="small article text" onclick="setActiveStyleSheet('smallfont');">&nbsp;</a>
        <a id="fontmedium" href="javascript:void(null);" title="medium article text" onclick="setActiveStyleSheet('mediumfont');">&nbsp;</a>
        <a id="fontlarge" href="javascript:void(null);" title="large article text" onclick="setActiveStyleSheet('largefont');">&nbsp;</a>
	    <div id="fontlabel">&nbsp;</div>
	  </div>
<?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar() ) : ?>
<?php if(get_option(lushaboutpage) != '') { ?>
	  <div class="sidebar-node">
		<h3><?php _e('About','lush'); ?></h3>
		
		<ul>
			<li><a href="<?php bloginfo('home'); ?>/?page_id=<?php echo get_option(lushaboutpage); ?>"><?php _e('About this site','lush'); ?></a></li>
		</ul>
	  </div>
<?php } ?>
      
      <div class="sidebar-node">
        
		<h3><?php _e('Archives','lush'); ?></h3>

		  <ul id="archives">
			<?php wp_get_archives('type=monthly'); ?>
		  </ul>
      </div>
    
      
      <div class="sidebar-node">
        <h3><?php _e('Categories','lush'); ?></h3>

		<ul id="categories">
		  <?php wp_list_cats('sort_column=name&hierarchical=0'); ?>
		</ul>
      </div>

	  <div class="sidebar-node">
		<h3><?php _e('Pages','lush'); ?></h3>

		<ul id="archives">
		  <?php $extagpage = get_option(lushtagspage); ?>
		  <?php wp_list_pages('title_li=&exclude='.$extagpage); ?>
		</ul>
	  </div>
    
<?php if(get_option(lushtagcloud) != '' || get_option(lushtagspage) != '') { ?>
      <div class="sidebar-node">
		<h3><?php _e('Tags','lush'); ?></h3>

<?php if(get_option(lushtagcloud) == '1') { ?>
		<p style="overflow: hidden;" id="tagcloud">
		<?php $lush = array('default'=>'<span style="font-size: %tagrelweightfontsize%">%taglink%</span> ');
			UTW_ShowWeightedTagSetAlphabetical("",$lush,20) ?>
		</p>
<?php } ?>

<?php if(get_option(lushtagspage) != '') { ?>
		<ul>
		  <li><a href="<?php bloginfo('url'); ?>?page_id=<?php echo get_option(lushtagspage); ?>"><?php _e('View all tags','lush'); ?></a></li>
		</ul>
<?php } ?>
      </div>
<?php } ?>


<?php if(get_option(lushsblinkcat) != '0') {
$linkcat = get_option(lushsblinkcat); ?>
      <div class="sidebar-node" id="linkslist">
        <h3><?php _e('Links','lush'); ?></h3>
		<ul>
			<?php wp_get_links($linkcat); ?>
		</ul>
      </div>
<?php } ?>
    

<?php if(get_option(lushflickr) == '1' && get_option(flickrRSS_flickrid) != '') { ?>
      <div class="sidebar-node">
        <h3><?php _e('flickr Photos','lush'); ?></h3>

		<div id="flickr">
		<?php get_flickrRSS(); ?>
		</div>
      </div>
<?php } ?>
      
      <div class="sidebar-node">
        <h3><?php _e('Syndicate','lush'); ?></h3>

		<ul>
		  <li><a href="<?php bloginfo('rss_url'); ?>" title="<?php _e('Articles feed','lush'); ?>"><?php _e('Articles','lush'); ?></a></li>
		  <li><a href="<?php bloginfo('comments_rss2_url'); ?>" title="<?php _e('Comments feed','lush'); ?>"><?php _e('Comments','lush'); ?></a></li>
		</ul>
      </div>

	  <div class="sidebar-node">
		<h3><?php _e('Meta','lush'); ?></h3>

		<ul>
			<?php wp_register(); ?>
			<li><?php wp_loginout(); ?></li>
			<?php wp_meta(); ?>
		</ul>
	  </div>
			
    
 
	  <div class="sidebar-node">
		<div id="sidefooter"></div>
      </div>

      <a href="http://www.wordpress.org/" class="powered"><img alt="Powered" src="<?php bloginfo('stylesheet_directory'); ?>/_img/powered.gif" /></a>
	  <?php endif; ?>
    </div>

