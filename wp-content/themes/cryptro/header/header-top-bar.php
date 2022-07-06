<?php
	/* a template for displaying the top bar */

	if( cryptro_get_option('general', 'enable-top-bar', 'enable') == 'enable' ){

		$top_bar_width = cryptro_get_option('general', 'top-bar-width', 'boxed');
		$top_bar_container_class = '';

		if( $top_bar_width == 'boxed' ){
			$top_bar_container_class = 'cryptro-container ';
		}else if( $top_bar_width == 'custom' ){
			$top_bar_container_class = 'cryptro-top-bar-custom-container ';
		}else{
			$top_bar_container_class = 'cryptro-top-bar-full ';
		}
		
		echo '<div class="cryptro-top-bar" >';
		echo '<div class="cryptro-top-bar-background" ></div>';
		echo '<div class="cryptro-top-bar-container clearfix ' . esc_attr($top_bar_container_class) . '" >';

		$left_text = cryptro_get_option('general', 'top-bar-left-text', '');
		if( !empty($left_text) || has_nav_menu('top_bar_left') ){
			echo '<div class="cryptro-top-bar-left cryptro-item-pdlr">';

			if( has_nav_menu('top_bar_left') ){
				wp_nav_menu(array(
					'menu_id' => 'cryptro-top-bar-menu',
					'theme_location'=>'top_bar_left', 
					'container'=> '', 
					'menu_class'=> 'sf-menu cryptro-top-bar-left-menu',
					'walker' => new cryptro_menu_walker()
				));
			}

			if( !empty($left_text) ){
				echo gdlr_core_escape_content(gdlr_core_text_filter($left_text));
			}
			echo '</div>';
		}
		$wpml_flag = cryptro_get_option('general', 'wpml-language-selector-location', 'top-bar');
		if( $wpml_flag == 'top-bar' ){
			$language_flag = cryptro_get_wpml_flag('dropdown');
		}			
		$right_text = cryptro_get_option('general', 'top-bar-right-text', '');
		$top_bar_social = cryptro_get_option('general', 'enable-top-bar-social', 'enable');
		if( !empty($right_text) || !empty($language_flag) || $top_bar_social == 'enable' ){
			echo '<div class="cryptro-top-bar-right cryptro-item-pdlr">';
			if( !empty($right_text) ){
				echo '<div class="cryptro-top-bar-right-text">';
				echo gdlr_core_escape_content(gdlr_core_text_filter($right_text));
				echo '</div>';
			}

			if( $top_bar_social == 'enable' ){
				echo '<div class="cryptro-top-bar-right-social" >';
				get_template_part('header/header', 'social');
				echo '</div>';	
			}

			if( !empty($language_flag) ){
				echo gdlr_core_escape_content($language_flag);
			}
			echo '</div>';	
		}
		echo '</div>';
		echo '</div>';

	}  // top bar
?>