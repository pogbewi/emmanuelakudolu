<?php
/**
 * The footer widget area is triggered if any of the areas
 * have widgets. So let's check that first.
 *
 * If none of the sidebars have widgets, then let's bail early.
 */
if( !is_active_sidebar( 'savysoft_footer_sidebar_one' ) &&
	!is_active_sidebar( 'savysoft_footer_sidebar_two' ) &&
   !is_active_sidebar( 'savysoft_footer_sidebar_three' ) &&
   !is_active_sidebar( 'savysoft_footer_sidebar_four' ) ) {
	return;
}
?>


<div class="footer-inner-siderbar-wrapper">
	<div class="footer-sidebar-left">
		<div class="footer-sidebar-item">
			<?php
			if ( !dynamic_sidebar( 'savysoft_footer_sidebar_one' ) ):
			endif;
			?>
	   </div>
	</div>

	<div class="footer-sidebar-right group">
			<div class="footer-sidebar-item item-two">
				<?php
				if ( !dynamic_sidebar( 'savysoft_footer_sidebar_two' ) ):
				endif;
				?>
			</div>

				<div class="footer-sidebar-item item-three">
				<?php
				if ( !dynamic_sidebar( 'savysoft_footer_sidebar_three' ) ):
				endif;
				?>
			</div>

				<div class="footer-sidebar-item item-four">
				<?php
				if ( !dynamic_sidebar( 'savysoft_footer_sidebar_four' ) ):
				endif;
				?>
	   </div>
	</div>
</div>

