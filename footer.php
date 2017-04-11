<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">
	<?php wp_nav_menu(
		array(
			'theme_location' => 'social',
			'container_class' => 'rb-social',
			'container_id' => 'rb-social-top',
			'fallback_cb' => '',
			'menu_id' => 'main-menu',
			'walker' => new WP_Bootstrap_Navwalker(),
		)
	); ?>
	</div><!-- wrapper end -->
<div class="rb-footer"></div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
