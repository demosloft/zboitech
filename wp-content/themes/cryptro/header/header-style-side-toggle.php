<?php
	/* a template for displaying the header area */
?>	
<header class="cryptro-header-wrap cryptro-header-style-side-toggle" >
	<?php
		$display_logo = cryptro_get_option('general', 'header-side-toggle-display-logo', 'enable');
		if( $display_logo == 'enable' ){
			echo cryptro_get_logo(array('padding' => false));
		}

		$navigation_class = '';
		if( cryptro_get_option('general', 'enable-main-navigation-submenu-indicator', 'disable') == 'enable' ){
			$navigation_class = 'cryptro-navigation-submenu-indicator ';
		}
	?>
	<div class="cryptro-navigation clearfix <?php echo esc_attr($navigation_class); ?>" >
	<?php
		// print main menu
		if( has_nav_menu('main_menu') ){
			cryptro_get_custom_menu(array(
				'container-class' => 'cryptro-main-menu',
				'button-class' => 'cryptro-side-menu-icon',
				'icon-class' => 'fa fa-bars',
				'id' => 'cryptro-main-menu',
				'theme-location' => 'main_menu',
				'type' => cryptro_get_option('general', 'header-side-toggle-menu-type', 'overlay')
			));
		}
	?>
	</div><!-- cryptro-navigation -->
	<?php

		// menu right side
		$enable_search = (cryptro_get_option('general', 'enable-main-navigation-search', 'enable') == 'enable')? true: false;
		$enable_cart = (cryptro_get_option('general', 'enable-main-navigation-cart', 'enable') == 'enable' && class_exists('WooCommerce'))? true: false;
		if( $enable_search || $enable_cart ){ 
			echo '<div class="cryptro-header-icon cryptro-pos-bottom" >';

			// search icon
			if( $enable_search ){
				echo '<div class="cryptro-main-menu-search" id="cryptro-top-search" >';
				echo '<i class="icon_search" ></i>';
				echo '</div>';
				cryptro_get_top_search();
			}

			// cart icon
			if( $enable_cart ){
				echo '<div class="cryptro-main-menu-cart" id="cryptro-main-menu-cart" >';
				echo '<i class="fa fa-shopping-cart" ></i>';
				cryptro_get_woocommerce_bar();
				echo '</div>';
			}

			echo '</div>'; // cryptro-main-menu-right-wrap
		}

	?>
</header><!-- header -->