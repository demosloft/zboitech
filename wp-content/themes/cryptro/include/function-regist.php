<?php 
	/*	
	*	Goodlayers Function Inclusion File
	*	---------------------------------------------------------------------
	*	This file contains the script to includes necessary function to the theme
	*	---------------------------------------------------------------------
	*/

	// Set the content width based on the theme's design and stylesheet.
	if( !isset($content_width) ){
		$content_width = str_replace('px', '', '1150px'); 
	}

	// Add body class for page builder
	add_filter('body_class', 'cryptro_body_class');
	if( !function_exists('cryptro_body_class') ){
		function cryptro_body_class( $classes ) {
			$classes[] = 'cryptro-body';
			$classes[] = 'cryptro-body-front';

			// layout class
			$layout = cryptro_get_option('general', 'layout', 'full');
			if( $layout == 'boxed' ){
			 	$classes[] = 'cryptro-boxed';

			 	$border = cryptro_get_option('general', 'enable-boxed-border', 'disable');
			 	if( $border == 'enable' ){
			 		$classes[] = 'cryptro-boxed-border';
			 	}
			}else{
				$classes[] = 'cryptro-full';
			}

			// background class
			if( $layout == 'boxed' ){
				$post_option = cryptro_get_post_option(get_the_ID());
				if( empty($post_option['body-background-type']) || $post_option['body-background-type'] == 'default' ){
					$background = cryptro_get_option('general', 'background-type', 'color');
				 	if( $background == 'pattern' ){
				 		$classes[] = 'cryptro-background-pattern';
				 	}
				}
			}

			// header style
			$header_style = cryptro_get_option('general', 'header-style', 'plain');
			if( !in_array($header_style, array('side', 'side-toggle')) ){
				if( is_page() ){
					$post_option = cryptro_get_post_option(get_the_ID());
				}

				if( empty($post_option['sticky-navigation']) || $post_option['sticky-navigation'] == 'default' ){
					$sticky_menu = cryptro_get_option('general', 'enable-main-navigation-sticky', 'enable');
				}else{
					$sticky_menu = $post_option['sticky-navigation'];
				}
				if( $sticky_menu == 'enable' ){
					$classes[] = ' cryptro-with-sticky-navigation';
					
					$sticky_menu_logo = cryptro_get_option('general', 'enable-logo-on-main-navigation-sticky', 'enable');
					if( $sticky_menu_logo == 'disable' ){
						$classes[] = ' cryptro-sticky-navigation-no-logo';
					}
				}
			}

			// blog style
			if( is_home() || (is_single() && get_post_type() == 'post') ){
				$blog_style = cryptro_get_option('general', 'blog-style', 'style-1');
				$classes[] = ' cryptro-blog-' . $blog_style;
			}

			// blockquote style
			$blockquote_style = cryptro_get_option('general', 'blockquote-style', 'style-1');
			$classes[] = ' cryptro-blockquote-' . $blockquote_style;
			
			return $classes;
		}
	}

	// Set the neccessary function to be used in the theme
	add_action('after_setup_theme', 'cryptro_theme_setup');
	if( !function_exists( 'cryptro_theme_setup' ) ){
		function cryptro_theme_setup(){
			
			// define textdomain for translation
			load_theme_textdomain('cryptro', get_template_directory() . '/languages');

			// add default posts and comments RSS feed links to head.
			add_theme_support('automatic-feed-links');

			// declare that this theme does not use a hard-coded <title> tag in <head>
			add_theme_support('title-tag');

			// tmce editor stylesheet
			add_editor_style('/css/editor-style.css');

			// define menu locations
			register_nav_menus(array(
				'main_menu' => esc_html__('Primary Menu', 'cryptro'),
				'right_menu' => esc_html__('Secondary Menu', 'cryptro'),
				'top_bar_left' => esc_html__('Top Bar Left Menu', 'cryptro'),
				'mobile_menu' => esc_html__('Mobile Menu', 'cryptro'),
			));

			// enable support for post formats / thumbnail
			add_theme_support('post-thumbnails');
			add_theme_support('post-formats', array('aside', 'image', 'video', 'quote', 'link', 'gallery', 'audio')); // 'status', 'chat'
			
			// switch default core markup
			add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
			
			// add custom image size
			$thumbnail_sizes = cryptro_get_option('plugin', 'thumbnail-sizing');
			if( !empty($thumbnail_sizes) ){
				foreach( $thumbnail_sizes as $thumbnail_size ){
					add_image_size($thumbnail_size['name'], $thumbnail_size['width'], $thumbnail_size['height'], true);
				}
			}

		}
	}

	// turn the page comment off by default
	add_filter( 'wp_insert_post_data', 'cryptro_page_default_comments_off' );
	if( !function_exists('cryptro_page_default_comments_off') ){
		function cryptro_page_default_comments_off( $data ) {
			if( $data['post_type'] == 'page' && $data['post_status'] == 'auto-draft' ) {
				$data['comment_status'] = 0;
			} 

			return $data;
		}
	}	

	// logo displaying
	if( !function_exists('cryptro_get_logo') ){
		function cryptro_get_logo($settings = array()){

			$extra_class  = (isset($settings['padding']) && $settings['padding'] === false)? '': ' cryptro-item-pdlr';
			$extra_class .= empty($settings['wrapper-class'])? '': ' ' . $settings['wrapper-class'];
			
			$ret  = '<div class="cryptro-logo ' . esc_attr($extra_class) . '">';
			$ret .= '<div class="cryptro-logo-inner">';
		
			// fixed nav logo
			$orig_logo_class = ''; 
			if( empty($settings['mobile']) ){
				$enable_fixed_nav = cryptro_get_option('general', 'enable-main-navigation-sticky', 'enable');
				$fixed_nav_sticky = cryptro_get_option('general', 'enable-logo-on-main-navigation-sticky', 'enable');
				$fixed_nav_logo = cryptro_get_option('general', 'fixed-navigation-bar-logo', '');
				if( $enable_fixed_nav == 'enable' && $fixed_nav_sticky == 'enable' && !empty($fixed_nav_logo) ){
					$ret .= '<a class="cryptro-fixed-nav-logo" href="' . esc_url(home_url('/')) . '" >';
					$ret .= gdlr_core_get_image($fixed_nav_logo);
					$ret .= '</a>';

					$orig_logo_class = ' cryptro-orig-logo'; 
				}
			}

			// print logo / mobile logo
			if( !empty($settings['mobile']) ){
				$logo_id = cryptro_get_option('general', 'mobile-logo');
			}
			if( empty($logo_id) ){
				$logo_id = cryptro_get_option('general', 'logo');
			}
			if( is_numeric($logo_id) && !wp_attachment_is_image($logo_id) ){
				$logo_id = '';
			}
			$ret .= '<a class="' . esc_attr($orig_logo_class) . '" href="' . esc_url(home_url('/')) . '" >';
			if( empty($logo_id) ){
				if( !empty($settings['mobile']) && file_exists(get_template_directory() . '/images/logo-mobile.png') ){
					$ret .= gdlr_core_get_image(get_template_directory_uri() . '/images/logo-mobile.png');
				}else{
					$ret .= gdlr_core_get_image(get_template_directory_uri() . '/images/logo.png');
				}
			}else{
				$ret .= gdlr_core_get_image($logo_id);
			}
			$ret .= '</a>';
			$ret .= '</div>';
			$ret .= '</div>';

			return $ret;
		}	
	}

	// set anchor color
	add_action('wp_enqueue_scripts', 'cryptro_set_anchor_color', 11);
	if( !function_exists('cryptro_set_anchor_color') ){
		function cryptro_set_anchor_color(){
			$post_option = cryptro_get_post_option(get_the_ID());

			$anchor_css = '';
			if( !empty($post_option['bullet-anchor']) ){
				foreach( $post_option['bullet-anchor'] as $anchor ){
					if( !empty($anchor['title']) ){
						$anchor_section = str_replace('#', '', $anchor['title']);

						if( !empty($anchor['anchor-color']) ){
							$anchor_css .= '.cryptro-bullet-anchor[data-anchor-section="' . esc_attr($anchor_section) . '"] a:before{ background-color: ' . esc_html($anchor['anchor-color']) . '; }';
						}
						if( !empty($anchor['anchor-hover-color']) ){
							$anchor_css .= '.cryptro-bullet-anchor[data-anchor-section="' . esc_attr($anchor_section) . '"] a:hover, ';
							$anchor_css .= '.cryptro-bullet-anchor[data-anchor-section="' . esc_attr($anchor_section) . '"] a.current-menu-item{ border-color: ' . esc_html($anchor['anchor-hover-color']) . '; }';
							$anchor_css .= '.cryptro-bullet-anchor[data-anchor-section="' . esc_attr($anchor_section) . '"] a:hover:before, ';
							$anchor_css .= '.cryptro-bullet-anchor[data-anchor-section="' . esc_attr($anchor_section) . '"] a.current-menu-item:before{ background: ' . esc_html($anchor['anchor-hover-color']) . '; }';
						}
					}
				}
			}

			if( !empty($anchor_css) ){
				wp_add_inline_style('cryptro-style-core', $anchor_css);
			}
		}
	}

	// remove id from nav menu item
	add_filter('nav_menu_item_id', 'cryptro_nav_menu_item_id', 10, 4);
	if( !function_exists('cryptro_nav_menu_item_id') ){
		function cryptro_nav_menu_item_id( $id, $item, $args, $depth ){
			return '';
		}
	}

	// add additional script
	add_action('wp_head', 'cryptro_header_script', 99);
	if( !function_exists('cryptro_header_script') ){
		function cryptro_header_script(){
			$header_script = cryptro_get_option('plugin', 'additional-head-script', '');
			if( !empty($header_script) ){
				echo '<script>' . $header_script . '</script>';
			}

			$header_script2 = cryptro_get_option('plugin', 'additional-head-script2', '');
			if( !empty($header_script2) ){
				echo gdlr_core_text_filter($header_script2);
			}

		}
	}
	add_action('wp_footer', 'cryptro_footer_script');
	if( !function_exists('cryptro_footer_script') ){
		function cryptro_footer_script(){
			$footer_script = cryptro_get_option('plugin', 'additional-script', '');
			if( !empty($footer_script) ){
				echo '<script>' . $footer_script . '</script>';
			}
		}
	}

	remove_action('tgmpa_register', 'newsletter_register_required_plugins');