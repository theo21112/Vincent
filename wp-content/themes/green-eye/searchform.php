<?php
/* 	GREEN EYE Theme's Search Form
	Copyright: 2012-2017, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since GREEN 1.0
*/
?>


<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<label for="s" class="assistive-text"></label>
		<input type="text" class="field" name="s" id="s" placeholder="<?php esc_attr_e( 'Your Search Text Here', 'green-eye' ); ?>" />
		<input type="submit" class="submit" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'green-eye' ); ?>" />
	</form>