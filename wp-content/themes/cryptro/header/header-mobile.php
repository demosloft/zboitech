<?php
	// mobile menu template
	echo '<div class="cryptro-mobile-header-wrap" >';

	// top bar
	$top_bar = cryptro_get_option('general', 'enable-top-bar-on-mobile', 'disable');
	if( $top_bar == 'enable' ){
		get_template_part('header/header', 'top-bar');
	}

	// header
	$logo_position = cryptro_get_option('general', 'mobile-logo-position', 'logo-left');
	$sticky_mobile_nav = cryptro_get_option('general', 'enable-mobile-navigation-sticky', 'enable');
	echo '<div class="cryptro-mobile-header cryptro-header-background cryptro-style-slide ';
	echo ($sticky_mobile_nav == 'enable')? 'cryptro-sticky-mobile-navigation ': '';
	echo '" id="cryptro-mobile-header" >';
	echo '<div class="cryptro-mobile-header-container cryptro-container clearfix" >';
	echo cryptro_get_logo(array(
		'mobile' => true,
		'wrapper-class' => ($logo_position == 'logo-center'? 'cryptro-mobile-logo-center': '')
	));

	echo '<div class="cryptro-mobile-menu-right" >';

	// search icon
	$enable_search = (cryptro_get_option('general', 'enable-main-navigation-search', 'enable') == 'enable')? true: false;
	if( $enable_search ){
		echo '<div class="cryptro-main-menu-search" id="cryptro-mobile-top-search" >';
		echo '<i class="icon_search" ></i>';
		echo '</div>';
		cryptro_get_top_search();
	}

	// cart icon
	$enable_cart = (cryptro_get_option('general', 'enable-main-navigation-cart', 'enable') == 'enable' && class_exists('WooCommerce'))? true: false;
	if( $enable_cart ){
		echo '<div class="cryptro-main-menu-cart" id="cryptro-mobile-menu-cart" >';
		echo '<i class="fa fa-shopping-cart" ></i>';
		cryptro_get_woocommerce_bar();
		echo '</div>';
	}

	if( $logo_position == 'logo-center' ){
		echo '</div>';
		echo '<div class="cryptro-mobile-menu-left" >';
	}

	// mobile menu
	if( has_nav_menu('mobile_menu') ){
		cryptro_get_custom_menu(array(
			'type' => cryptro_get_option('general', 'right-menu-type', 'right'),
			'container-class' => 'cryptro-mobile-menu',
			'button-class' => 'cryptro-mobile-menu-button',
			'icon-class' => 'fa fa-bars',
			'id' => 'cryptro-mobile-menu',
			'theme-location' => 'mobile_menu'
		));
	}
	echo '</div>'; // cryptro-mobile-menu-right/left
	echo '</div>'; // cryptro-mobile-header-container
	echo '</div>'; // cryptro-mobile-header

	echo '</div>'; // cryptro-mobile-header-wrap