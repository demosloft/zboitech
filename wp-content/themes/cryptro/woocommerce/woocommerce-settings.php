<?php

	// declare woocommerce support
	add_action('after_setup_theme', 'cryptro_woocommerce_support');
	if( !function_exists( 'cryptro_woocommerce_support' ) ){
		function cryptro_woocommerce_support(){
			add_theme_support( 'woocommerce' );
			add_theme_support( 'wc-product-gallery-zoom' );
			add_theme_support( 'wc-product-gallery-lightbox' );
			add_theme_support( 'wc-product-gallery-slider' );
		}
	}	

	// modify woocommerce wrapper
	remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
	remove_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

	add_action('woocommerce_before_main_content', 'cryptro_woocommerce_wrapper_start', 10);
	if( !function_exists( 'cryptro_woocommerce_wrapper_start' ) ){
		function cryptro_woocommerce_wrapper_start(){
			echo '<div class="cryptro-content-container cryptro-container">';
			echo '<div class="cryptro-content-area cryptro-item-pdlr cryptro-sidebar-style-none clearfix" >';
		}
	}

	add_action('woocommerce_after_main_content', 'cryptro_woocomemrce_wrapper_end', 10);
	if( !function_exists( 'cryptro_woocomemrce_wrapper_end' ) ){
		function cryptro_woocomemrce_wrapper_end(){
			echo '</div>'; // cryptro-content-area
			echo '</div>'; // cryptro-content-container
		}
	}

	// remove breadcrumbs on single product
	add_action('wp', 'cryptro_init_woocommerce_hook');
	if( !function_exists( 'cryptro_init_woocommerce_hook' ) ){
		function cryptro_init_woocommerce_hook(){
			if( is_single() && get_post_type() == 'product' ){ 
				add_filter('woocommerce_product_description_heading', 'cryptro_remove_woocommerce_tab_heading');
				add_filter('woocommerce_product_additional_information_heading', 'cryptro_remove_woocommerce_tab_heading');

				remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
				remove_action('woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10);
				remove_action('woocommerce_review_before_comment_meta', 'woocommerce_review_display_rating', 10);

				add_action('woocommerce_review_after_comment_text', 'woocommerce_review_display_rating', 10);
			}
		}
	}
	
	if( !function_exists( 'cryptro_remove_woocommerce_tab_heading' ) ){
		function cryptro_remove_woocommerce_tab_heading( $title ){
			return '';
		}
	}

	add_filter('woocommerce_review_gravatar_size', 'cryptro_woocommerce_review_gravatar_size');
	if( !function_exists( 'cryptro_woocommerce_review_gravatar_size' ) ){
		function cryptro_woocommerce_review_gravatar_size( $size ){
			return 120;
		}
	}

	if( !function_exists('cryptro_get_woocommerce_bar') ){
		function cryptro_get_woocommerce_bar(){

			global $woocommerce;
			
			if(!empty($woocommerce)){
				
				echo '<span class="cryptro-top-cart-count">' . $woocommerce->cart->cart_contents_count . '</span>';
				echo '<div class="cryptro-top-cart-hover-area" ></div>';

				echo '<div class="cryptro-top-cart-content-wrap" >';
				echo '<div class="cryptro-top-cart-content" >';
				echo '<div class="cryptro-top-cart-count-wrap" >';
				echo '<span class="head">' . esc_html__('Items : ', 'cryptro') . ' </span>';
				echo '<span class="cryptro-top-cart-count">' . $woocommerce->cart->cart_contents_count . '</span>'; 
				echo '</div>';
				
				echo '<div class="cryptro-top-cart-amount-wrap" >';
				echo '<span class="head">' . esc_html__('Subtotal :', 'cryptro') . ' </span>';
				echo '<span class="cryptro-top-cart-amount">' . $woocommerce->cart->get_cart_total() . '</span>';
				echo '</div>';
				
				echo '<a class="cryptro-top-cart-button" href="' . esc_url(wc_get_cart_url()) . '" >';
				echo esc_html__('View Cart', 'cryptro');
				echo '</a>';

				echo '<a class="cryptro-top-cart-checkout-button" href="' . esc_url(wc_get_checkout_url()) . '" >';
				echo esc_html__('Check Out', 'cryptro');
				echo '</a>';
				echo '</div>';
				echo '</div>';
			}
		}
	}

	add_filter('woocommerce_add_to_cart_fragments', 'cryptro_woocommerce_cart_ajax');
	if( !function_exists('cryptro_woocommerce_cart_ajax') ){
		function cryptro_woocommerce_cart_ajax($fragments){
			global $woocommerce;

			$fragments['span.cryptro-top-cart-count'] = '<span class="cryptro-top-cart-count">' . $woocommerce->cart->cart_contents_count . '</span>'; 
			$fragments['span.cryptro-top-cart-amount'] = '<span class="cryptro-top-cart-amount">' . $woocommerce->cart->get_cart_total() . '</span>';

			return $fragments;
		}
	}	

	add_filter('woocommerce_output_related_products_args', 'cryptro_related_products_args');
	if( !function_exists('cryptro_related_products_args') ){
		function cryptro_related_products_args($args){
			if( class_exists('gdlr_core_pb_element_product') ){
				$num_fetch = cryptro_get_option('general', 'woocommerce-related-product-num-fetch', '4');
				$args['posts_per_page'] = $num_fetch;
			}
			
			return $args;
		}
	}