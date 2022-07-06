<?php
	/* a template for displaying the header area */

	$header_side_style = cryptro_get_option('general', 'header-side-style', 'top-left');
	$header_class = 'cryptro-' . cryptro_get_option('general', 'header-side-align', 'left') . '-align';
?>	
<header class="cryptro-header-wrap cryptro-header-style-side <?php echo esc_attr($header_class); ?>" >
	<?php

		$logo_wrap_class = '';
		$navigation_class = '';
		if( cryptro_get_option('general', 'enable-main-navigation-submenu-indicator', 'disable') == 'enable' ){
			$navigation_class .= 'cryptro-navigation-submenu-indicator ';
		}
		if( in_array($header_side_style, array('middle-left-2', 'middle-right-2')) ){
			$logo_wrap_class .= 'cryptro-pos-middle ';
		}else if( in_array($header_side_style, array('middle-left', 'middle-right')) ){
			$navigation_class .= 'cryptro-pos-middle ';
		} 

		echo cryptro_get_logo(array('padding' => false, 'wrapper-class' => $logo_wrap_class));
	?>
	<div class="cryptro-navigation clearfix <?php echo esc_attr($navigation_class); ?>" >
	<?php
		// print main menu
		if( has_nav_menu('main_menu') ){
			echo '<div class="cryptro-main-menu" id="cryptro-main-menu" >';
			wp_nav_menu(array(
				'theme_location'=>'main_menu', 
				'container'=> '', 
				'menu_class'=> 'sf-vertical'
			));
			echo '</div>';
		}

		// menu right side
		$enable_search = (cryptro_get_option('general', 'enable-main-navigation-search', 'enable') == 'enable')? true: false;
		$enable_cart = (cryptro_get_option('general', 'enable-main-navigation-cart', 'enable') == 'enable' && class_exists('WooCommerce'))? true: false;
		if( $enable_search || $enable_cart ){
			echo '<div class="cryptro-main-menu-right-wrap clearfix" >';

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
	</div><!-- cryptro-navigation -->
	<?php
		// social network
		$top_bar_social = cryptro_get_option('general', 'enable-top-bar-social', 'enable');
		if( $top_bar_social == 'enable' ){

			$top_bar_social_class = '';
			if( in_array($header_side_style, array('top-left', 'top-right', 'middle-left', 'middle-right')) ){
				$top_bar_social_class .= 'cryptro-pos-bottom ';
			}

			echo '<div class="cryptro-header-social ' . esc_attr($top_bar_social_class) . '" >';
			get_template_part('header/header', 'social');
			echo '</div>';
			
			cryptro_set_option('general', 'enable-top-bar-social', 'disable');
		}
	?>
</header><!-- header -->