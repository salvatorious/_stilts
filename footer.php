<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package _stilts
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<nav id="site-footer-navigation" class="footer-navigation" role="navigation">
      <?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_class' => 'menu-footer') ); ?>
	    </nav> <!-- .footer-navigation -->
			<?php do_action( '_stilts_credits' ); ?>
			<a href="http://wordpress.org/" rel="generator"><?php printf( __( 'Proudly powered by %s', '_stilts' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', '_stilts' ), '_stilts', '<a href="http://underscores.me/" rel="designer">Salvatore Candela</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>