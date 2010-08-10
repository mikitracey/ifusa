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

			<?php wp_footer(); ?>
			<div class="footer">
				<!--
				Please do not remove attribution to me from the bottom of your page
				It's the least that you can do to acknowledge my hard work.
				If you have significantly modified this theme you can add the phrase
				"modified by xxxx".
				-->
				<p>
					<?php
						printf(_t('%s is powered by <a href="http://wordpress.org" title="WordPress">WordPress</a>'),
									 get_bloginfo('name'));
						echo('<strong> | </strong>');
						_te('Using <a href="http://www.shamsulazhar.com/wp/archives/31" title="Tiga - A three column WordPress theme">Tiga</a> theme with a bit of <a href="http://frenchfragfactory.net/ozh/" title="planetOzh : Home of Wordpress Theme Toolkit">Ozh</a>');
					?>
				</p>
			</div> <!-- footer -->
		</div> <!-- page -->
	</body>
</html>