<form id="searchform" method="get" action="<?php bloginfo('home'); ?>/">
	<div>
		<input id="s" name="s" type="text" value="<?php echo wp_specialchars($s, 1); ?>" size="5" tabindex="1" />
		<input id="searchsubmit" name="searchsubmit" type="submit" value="Find" tabindex="2"/>
	</div>
</form> 