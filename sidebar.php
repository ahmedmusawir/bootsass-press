	<aside class="sidebar-widget">
		
		<?php if ( is_active_sidebar( 'sidebar-blog' ) ) : ?>
			<ul id="sidebar">
				<?php dynamic_sidebar( 'sidebar-blog' ); ?>
			</ul>

		<?php else : ?>
			
			<div class="date-select">
				<select name="archive-dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;">
				  <option value=""><?php echo esc_attr( __( 'Select Month' ) ); ?></option> 
				  <?php wp_get_archives( array( 'type' => 'monthly', 'format' => 'option', 'show_post_count' => 1 ) ); ?>
				</select>
			</div>

		<?php endif; ?>
	</aside>