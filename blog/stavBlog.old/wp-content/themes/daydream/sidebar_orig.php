	<div id="sidebar">
		<ul>

			<li>
			</li>

			<div id="pushing_box"></div>
			
			<li id="categories"><h2>Categories</h2>
				<ul>
				<?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
				</ul>
			</li>
			
			<li id="archives"><h2>Archives</h2>
				<ul>
				<?php wp_get_archives('type=monthly'); ?>
				</ul>
			</li>
				
				<li id="meta"><h2>Meta</h2>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<li><a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional">Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a></li>
					<li><a href="http://gmpg.org/xfn/"><abbr title="XHTML Friends Network">XFN</abbr></a></li>
					<li><a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress</a></li>
					<?php wp_meta(); ?>
				</ul>
				</li>
				
			<li style="clear: both;">
				<?php include (TEMPLATEPATH . '/searchform.php'); ?>
			</li>
			
		</ul>
	</div>

