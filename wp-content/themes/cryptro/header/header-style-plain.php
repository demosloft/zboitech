<?php
	/* a template for displaying the header area */

	// header container
	$body_layout = cryptro_get_option('general', 'layout', 'full');
	$body_margin = cryptro_get_option('general', 'body-margin', '0px');
	$header_width = cryptro_get_option('general', 'header-width', 'boxed');
	$header_background_style = cryptro_get_option('general', 'header-background-style', 'solid');
	
	if( $header_width == 'boxed' ){
		$header_container_class = ' cryptro-container';
	}else if( $header_width == 'custom' ){
		$header_container_class = ' cryptro-header-custom-container';
	}else{
		$header_container_class = ' cryptro-header-full';
	}

	$header_style = cryptro_get_option('general', 'header-plain-style', 'menu-right');
	$navigation_offset = cryptro_get_option('general', 'fixed-navigation-anchor-offset', '');

	$header_wrap_class  = ' cryptro-style-' . $header_style;
	$header_wrap_class .= ' cryptro-sticky-navigation';
	if( $header_style == 'center-logo' || $body_layout == 'boxed' || 
		$body_margin != '0px' || $header_background_style == 'transparent' ){
		
		$header_wrap_class .= ' cryptro-style-slide';
	}else{
		$header_wrap_class .= ' cryptro-style-fixed';
	}
?>	
<header class="cryptro-header-wrap cryptro-header-style-plain <?php echo esc_attr($header_wrap_class); ?>" <?php
		if( !empty($navigation_offset) ){
			echo 'data-navigation-offset="' . esc_attr($navigation_offset) . '" ';
		}
	?> >
	<div class="cryptro-header-background" ></div>
	<div class="cryptro-header-container <?php echo esc_attr($header_container_class); ?>">
			
		<div class="cryptro-header-container-inner clearfix">
			<?php

				if( $header_style == 'splitted-menu' ){
					add_filter('cryptro_center_menu_item', 'cryptro_get_logo');
				}else{
					echo cryptro_get_logo();
				}

				$navigation_class = '';
				if( cryptro_get_option('general', 'enable-main-navigation-submenu-indicator', 'disable') == 'enable' ){
					$navigation_class = 'cryptro-navigation-submenu-indicator ';
				}
			?>
			<div class="cryptro-navigation cryptro-item-pdlr clearfix <?php echo esc_attr($navigation_class); ?>" >
			<?php
				// print main menu
				if( has_nav_menu('main_menu') ){
					echo '<div class="cryptro-main-menu" id="cryptro-main-menu" >';
					wp_nav_menu(array(
						'theme_location'=>'main_menu', 
						'container'=> '', 
						'menu_class'=> 'sf-menu',
						'walker' => new cryptro_menu_walker()
					));
					$slide_bar = cryptro_get_option('general', 'navigation-slide-bar', 'enable');
					if( $slide_bar == 'enable' ){
						echo '<div class="cryptro-navigation-slide-bar" id="cryptro-navigation-slide-bar" ></div>';
					}
					echo '</div>';
				}

				// menu right side
				$menu_right_class = '';
				if( in_array($header_style, array('center-menu', 'center-logo', 'splitted-menu')) ){
					$menu_right_class = ' cryptro-item-mglr cryptro-navigation-top';
				}

				$enable_search = (cryptro_get_option('general', 'enable-main-navigation-search', 'enable') == 'enable')? true: false;
				$enable_cart = (cryptro_get_option('general', 'enable-main-navigation-cart', 'enable') == 'enable' && class_exists('WooCommerce'))? true: false;
				$enable_right_button = (cryptro_get_option('general', 'enable-main-navigation-right-button', 'disable') == 'enable')? true: false;
				
				$wpml_flag = cryptro_get_option('general', 'wpml-language-selector-location', 'top-bar');
				if( $wpml_flag == 'nav-bar' ){
					$language_flag = cryptro_get_wpml_flag('dropdown');
				}
				if( has_nav_menu('right_menu') || $enable_search || $enable_cart || $enable_right_button ){
					echo '<div class="cryptro-main-menu-right-wrap clearfix ' . esc_attr($menu_right_class) . '" >';

					// search icon
					if( $enable_search ){
						echo '<div class="cryptro-main-menu-search" id="cryptro-top-search" >';
						echo '<i class="icon_search" ></i>';
						echo '</div>';
						cryptro_get_top_search();
					}

					// cart icon
					if( $enable_cart ){
						echo '<div class="cryptro-main-menu-cart" id="cryptro-menu-cart" >';
						echo '<i class="fa fa-shopping-cart" ></i>';
						cryptro_get_woocommerce_bar();
						echo '</div>';
					}

					// menu right button
					if( $enable_right_button ){
						$button_class = 'cryptro-style-' . cryptro_get_option('general', 'main-navigation-right-button-style', 'default');
						$button_link = cryptro_get_option('general', 'main-navigation-right-button-link', '');
						$button_link_target = cryptro_get_option('general', 'main-navigation-right-button-link-target', '_self');
						echo '<span class="cryptro-main-menu-right-button-divider" ></span>';
						echo '<a class="cryptro-main-menu-right-button ' . esc_attr($button_class) . '" href="' . esc_url($button_link) . '" target="' . esc_attr($button_link_target) . '" >';
						echo cryptro_get_option('general', 'main-navigation-right-button-text', '');
						echo '</a>';
					}

					// language flag
					if( !empty($language_flag) ){
						echo gdlr_core_escape_content($language_flag);
					}
					
					// print right menu
					if( has_nav_menu('right_menu') && $header_style != 'splitted-menu' ){
						cryptro_get_custom_menu(array(
							'container-class' => 'cryptro-main-menu-right',
							'button-class' => 'cryptro-right-menu-button cryptro-top-menu-button',
							'icon-class' => 'fa fa-bars',
							'id' => 'cryptro-right-menu',
							'theme-location' => 'right_menu',
							'type' => cryptro_get_option('general', 'right-menu-type', 'right')
						));
					}

					echo '</div>'; // cryptro-main-menu-right-wrap

					if( has_nav_menu('right_menu') && $header_style == 'splitted-menu' ){
						echo '<div class="cryptro-main-menu-left-wrap clearfix cryptro-item-pdlr cryptro-navigation-top" >';
						cryptro_get_custom_menu(array(
							'container-class' => 'cryptro-main-menu-right',
							'button-class' => 'cryptro-right-menu-button cryptro-top-menu-button',
							'icon-class' => 'fa fa-bars',
							'id' => 'cryptro-right-menu',
							'theme-location' => 'right_menu',
							'type' => cryptro_get_option('general', 'right-menu-type', 'right')
						));
						echo '</div>';
					}
				}
			?>
			</div><!-- cryptro-navigation -->

		</div><!-- cryptro-header-inner -->
	</div><!-- cryptro-header-container -->
</header><!-- header -->