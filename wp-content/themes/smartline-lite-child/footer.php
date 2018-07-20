</div>

<div id="footer-wrapper" class="footer-wrap">
	<footer id="footer-sidebar" class="footer-widget  clearfix" role="complementary">
	<section id="footer-nav" class="clearfix">
		<div class="footer-siderbar-wrapper">
         <?php get_sidebar( 'footer' ); ?>
       </div>
    </section>

	<?php do_action('smartline_before_footer'); ?>

	<section id="footer" class="clearfix" role="contentinfo">
		<div id="nav-text-wrap">
					<?php // Display Footer Navigation
		if ( has_nav_menu( 'footer' ) ) : ?>

		<nav id="footernav" class="clearfix" role="navigation">
			<?php wp_nav_menu(	array(
				'theme_location' => 'footer',
				'container' => false,
				'menu_id' => 'footernav-menu',
				'fallback_cb' => '',
				'depth' => 1)
			);
			?>
		</nav>
		</div>

		<?php endif; ?>

		<div id="footer-text">

			<?php do_action('smartline_footer_text'); ?>

		</div>
	</section>
	</footer>

</div>

</div><!-- end #wrapper -->
<a href="#header" class="scrollup"><i class="fa fa-chevron-up"></i></a>
<?php wp_footer(); ?>
</body>
</html>
