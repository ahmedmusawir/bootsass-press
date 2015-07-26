<form role="search" method="get" class="form" action="<?php echo home_url( '/' ); ?>">
	<label>
		<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
		<input type="search" class="form-control search-box" placeholder="Search" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
	</label>
	<input type="submit" class="search-submit btn btn-danger" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" /> 
</form>