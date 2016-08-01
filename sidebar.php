<!-- sidebar -->
<aside class="sidebar" role="complementary">
    	<div class="sidebar-widget">
		<?php get_template_part('partials/contact','address');?>
	</div>
	<?php if ( is_active_sidebar( 'widget-area-1' ) ) : ?>
		<div class="sidebar-widget">
			<?php dynamic_sidebar( 'widget-area-1' ); ?>
		</div>
	<?php else : ?>
	<div class="sidebar-widget">
		<nav class="footer-nav" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'sidebar-menu' ) );  ?>
		</nav>
	</div>
	<?php endif; ?>
	
	<?php if ( is_active_sidebar( 'widget-area-2' ) ) : ?>
		<div class="sidebar-widget">
			<?php dynamic_sidebar( 'widget-area-2' ); ?>
		</div>
	<?php endif ; ?>
	
	<?php if ( is_active_sidebar( 'widget-area-3' ) ) : ?>
		<div class="sidebar-widget">
			<?php dynamic_sidebar( 'widget-area-3' ); ?>
		</div>
	<?php else : ?>
	
	<?php endif; ?>
</aside>
<!-- /sidebar -->