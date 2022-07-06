<?php
	/*	
	*	Goodlayers Function File
	*	---------------------------------------------------------------------
	*	This file include all of important function and features of the theme
	*	---------------------------------------------------------------------
	*/
	
	// goodlayers core plugin function
	include_once(get_template_directory() . '/admin/core/sidebar-generator.php');
	include_once(get_template_directory() . '/admin/core/utility.php');
	include_once(get_template_directory() . '/admin/core/media.php' );
	
	// create admin page
	if( is_admin() ){
		include_once(get_template_directory() . '/admin/tgmpa/class-tgm-plugin-activation.php');

		if( !class_exists('gdlr_core_admin_menu') ){
			include_once(get_template_directory() . '/admin/installer/admin-menu.php');	
			gdlr_core_admin_menu::init();
		}
		include_once(get_template_directory() . '/admin/installer/verification.php');
		include_once(get_template_directory() . '/admin/installer/theme-landing.php');
		include_once(get_template_directory() . '/admin/installer/getting-start.php');	
		include_once(get_template_directory() . '/admin/installer/plugin-activation.php');
	}
	
	// plugins
	include_once(get_template_directory() . '/plugins/wpml.php');
	include_once(get_template_directory() . '/plugins/revslider.php');
	
	/////////////////////
	// front end script
	/////////////////////
	
	include_once(get_template_directory() . '/include/utility.php' );
	include_once(get_template_directory() . '/include/function-regist.php' );
	include_once(get_template_directory() . '/include/navigation-menu.php' );
	include_once(get_template_directory() . '/include/include-script.php' );
	include_once(get_template_directory() . '/include/goodlayers-core-filter.php' );
	include_once(get_template_directory() . '/include/maintenance.php' );
	include_once(get_template_directory() . '/woocommerce/woocommerce-settings.php' );

	// override the page builder
	include_once(get_template_directory() . '/include/pb/blog-item.php' );
	include_once(get_template_directory() . '/include/pb/block-title.php' );
	include_once(get_template_directory() . '/include/pb/pb-element-bitcoin-widget.php' );
	include_once(get_template_directory() . '/include/pb/pb-element-cryptocurrency-price-ticker-widget.php' );
	include_once(get_template_directory() . '/include/pb/pb-element-divider.php' );
	include_once(get_template_directory() . '/include/pb/pb-element-ico-countdown.php' );
	include_once(get_template_directory() . '/include/pb/pb-element-title.php' );
	include_once(get_template_directory() . '/include/pb/pb-element-testimonial.php' );
	include_once(get_template_directory() . '/include/pb/pb-element-textbox-with-textdivider.php' );
	include_once(get_template_directory() . '/include/pb/pb-element-virtual-coin-widget.php' );
	
	/////////////////////
	// execute module 
	/////////////////////
	
	// initiate sidebar structure
	$sidebar_atts = array(
		'before_widget' => '<div id="%1$s" class="widget %2$s cryptro-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="cryptro-widget-title">',
		'after_title'   => '</h3><span class="clear"></span>' );

	$sidebar_divider = cryptro_get_option('general', 'sidebar-title-divider', 'enable');
	if( $sidebar_divider == 'enable' ){
		$sidebar_atts['before_title'] = '<h3 class="cryptro-widget-title"><span class="cryptro-widget-head-text">';
		$sidebar_atts['after_title'] = '</span><span class="cryptro-widget-head-divider"></span></h3><span class="clear"></span>';
	}else if( $sidebar_divider == 'style-2' ){
		$sidebar_atts['before_title'] = '<h3 class="cryptro-widget-title"><span class="cryptro-widget-head-text">';
		$sidebar_atts['after_title'] = '</span><span class="cryptro-widget-head-divider2"></span></h3><span class="clear"></span>';
	}
	new gdlr_core_sidebar_generator($sidebar_atts);

	// clear data for wpml translation
	add_action('init', 'cryptro_clear_general_option');
	if( !function_exists('cryptro_clear_general_option') ){
		function cryptro_clear_general_option(){
			unset($GLOBALS['cryptro_general']);
		}	
	}	

	// remove the core default action to enqueue the theme script
	remove_action('after_setup_theme', 'gdlr_init_goodlayers_core_elements');
	add_action('after_setup_theme', 'cryptro_init_goodlayers_core_elements');
	if( !function_exists('cryptro_init_goodlayers_core_elements') ){
		function cryptro_init_goodlayers_core_elements(){

			// create an admin option and customizer
			if( (is_admin() || is_customize_preview()) && class_exists('gdlr_core_admin_option') && class_exists('gdlr_core_theme_customizer') ){
				
				$cryptro_admin_option = new gdlr_core_admin_option(array(
					'filewrite' => cryptro_get_style_custom(true)
				));	
				
				include_once( get_template_directory() . '/include/options/general.php');
				include_once( get_template_directory() . '/include/options/typography.php');
				include_once( get_template_directory() . '/include/options/color.php');
				include_once( get_template_directory() . '/include/options/plugin-settings.php');

				if( is_customize_preview() ){
					new gdlr_core_theme_customizer($cryptro_admin_option);
				}

				// clear an option for customize page
				add_action('wp', 'cryptro_clear_option');
				
			}
			
			// add the script for page builder / page options / post option
			if( is_admin() ){
				
				if( class_exists('gdlr_core_revision') ){
					$revision_num = 5;
					new gdlr_core_revision($revision_num);
				}
				
				// create page option
				if( class_exists('gdlr_core_page_option') ){

					// for page post type
					new gdlr_core_page_option(array(
						'post_type' => array('page'),
						'options' => array(
							'layout' => array(
								'title' => esc_html__('Layout', 'cryptro'),
								'options' => array(
									'enable-header-area' => array(
										'title' => esc_html__('Enable Header Area', 'cryptro'),
										'type' => 'checkbox',
										'default' => 'enable'
									),
									'sticky-navigation' => array(
										'title' => esc_html__('Sticky Navigation', 'cryptro'),
										'type' => 'combobox',
										'options' => array(
											'default' => esc_html__('Default', 'cryptro'),
											'enable' => esc_html__('Enable', 'cryptro'),
											'disable' => esc_html__('Disable', 'cryptro'),
										),
										'condition' => array( 'enable-header-area' => 'enable' )
									),
									'enable-page-title' => array(
										'title' => esc_html__('Enable Page Title', 'cryptro'),
										'type' => 'checkbox',
										'default' => 'enable',
										'condition' => array( 'enable-header-area' => 'enable' )
									),
									'page-caption' => array(
										'title' => esc_html__('Caption', 'cryptro'),
										'type' => 'textarea',
										'condition' => array( 'enable-header-area' => 'enable', 'enable-page-title' => 'enable' )
									),					
									'title-background' => array(
										'title' => esc_html__('Page Title Background', 'cryptro'),
										'type' => 'upload',
										'condition' => array( 'enable-header-area' => 'enable', 'enable-page-title' => 'enable' )
									),					
									'enable-breadcrumbs' => array(
										'title' => esc_html__('Enable Breadcrumbs', 'cryptro'),
										'type' => 'checkbox',
										'default' => 'disable',
										'description' => esc_html__('Please install and activate the "Breadcrumbs NavXT" to use this function.', 'cryptro'),
										'condition' => array( 'enable-header-area' => 'enable', 'enable-page-title' => 'enable' )
									),
									'body-background-type' => array(
										'title' => esc_html__('Body Background Type', 'cryptro'),
										'type' => 'combobox',
										'options' => array(
											'default' => esc_html__('Default', 'cryptro'),
											'image' => esc_html__('Image ( Only For Boxed Layout )', 'cryptro'),
										)
									),
									'body-background-image' => array(
										'title' => esc_html__('Body Background Image', 'cryptro'),
										'type' => 'upload',
										'data-type' => 'file', 
										'condition' => array( 'body-background-type' => 'image' )
									),
									'body-background-image-opacity' => array(
										'title' => esc_html__('Body Background Image Opacity', 'cryptro'),
										'type' => 'fontslider',
										'data-type' => 'opacity',
										'default' => '100',
										'condition' => array( 'body-background-type' => 'image' )
									),
									'show-content' => array(
										'title' => esc_html__('Show WordPress Editor Content', 'cryptro'),
										'type' => 'checkbox',
										'default' => 'enable',
										'description' => esc_html__('Disable this to hide the content in editor to show only page builder content.', 'cryptro'),
									),
									'sidebar' => array(
										'title' => esc_html__('Sidebar', 'cryptro'),
										'type' => 'radioimage',
										'options' => 'sidebar',
										'default' => 'none',
										'wrapper-class' => 'gdlr-core-fullsize'
									),
									'sidebar-left' => array(
										'title' => esc_html__('Sidebar Left', 'cryptro'),
										'type' => 'combobox',
										'options' => 'sidebar',
										'condition' => array( 'sidebar' => array('left', 'both') )
									),
									'sidebar-right' => array(
										'title' => esc_html__('Sidebar Right', 'cryptro'),
										'type' => 'combobox',
										'options' => 'sidebar',
										'condition' => array( 'sidebar' => array('right', 'both') )
									),
									'enable-footer' => array(
										'title' => esc_html__('Enable Footer', 'cryptro'),
										'type' => 'combobox',
										'options' => array(
											'default' => esc_html__('Default', 'cryptro'),
											'enable' => esc_html__('Enable', 'cryptro'),
											'disable' => esc_html__('Disable', 'cryptro'),
										)
									),
									'enable-copyright' => array(
										'title' => esc_html__('Enable Copyright', 'cryptro'),
										'type' => 'combobox',
										'options' => array(
											'default' => esc_html__('Default', 'cryptro'),
											'enable' => esc_html__('Enable', 'cryptro'),
											'disable' => esc_html__('Disable', 'cryptro'),
										)
									),

								)
							), // layout
							'title' => array(
								'title' => esc_html__('Title Style', 'cryptro'),
								'options' => array(

									'title-style' => array(
										'title' => esc_html__('Page Title Style', 'cryptro'),
										'type' => 'combobox',
										'options' => array(
											'default' => esc_html__('Default', 'cryptro'),
											'small' => esc_html__('Small', 'cryptro'),
											'medium' => esc_html__('Medium', 'cryptro'),
											'large' => esc_html__('Large', 'cryptro'),
											'custom' => esc_html__('Custom', 'cryptro'),
											'plain' => esc_html__('Plain ( No background )', 'cryptro'),
										),
										'default' => 'default'
									),
									'title-align' => array(
										'title' => esc_html__('Page Title Alignment', 'cryptro'),
										'type' => 'radioimage',
										'options' => 'text-align',
										'with-default' => true,
										'default' => 'default'
									),
									'title-spacing' => array(
										'title' => esc_html__('Page Title Padding', 'cryptro'),
										'type' => 'custom',
										'item-type' => 'padding',
										'data-input-type' => 'pixel',
										'options' => array('padding-top', 'padding-bottom', 'caption-top-margin'),
										'wrapper-class' => 'gdlr-core-fullsize gdlr-core-no-link gdlr-core-large',
										'condition' => array( 'title-style' => 'custom' )
									),
									'title-font-size' => array(
										'title' => esc_html__('Page Title Font Size', 'cryptro'),
										'type' => 'custom',
										'item-type' => 'padding',
										'data-input-type' => 'pixel',
										'options' => array('title-size', 'title-letter-spacing', 'caption-size', 'caption-letter-spacing'),
										'wrapper-class' => 'gdlr-core-fullsize gdlr-core-no-link gdlr-core-large',
										'condition' => array( 'title-style' => 'custom' )
									),
									'title-font-weight' => array(
										'title' => esc_html__('Page Title Font Weight', 'cryptro'),
										'type' => 'custom',
										'item-type' => 'padding',
										'options' => array('title-weight', 'caption-weight'),
										'wrapper-class' => 'gdlr-core-fullsize gdlr-core-no-link gdlr-core-large',
										'condition' => array( 'title-style' => 'custom' )
									),
									'title-font-transform' => array(
										'title' => esc_html__('Page Title Font Transform', 'cryptro'),
										'type' => 'combobox',
										'options' => array(
											'none' => esc_html__('None', 'cryptro'),
											'uppercase' => esc_html__('Uppercase', 'cryptro'),
											'lowercase' => esc_html__('Lowercase', 'cryptro'),
											'capitalize' => esc_html__('Capitalize', 'cryptro'),
										),
										'default' => 'uppercase',
										'condition' => array( 'title-style' => 'custom' )
									),
									'title-background-overlay-opacity' => array(
										'title' => esc_html__('Page Title Background Overlay Opacity', 'cryptro'),
										'type' => 'text',
										'description' => esc_html__('Fill the number between 0.01 - 1 ( Leave Blank For Default Value )', 'cryptro'),
										'condition' => array( 'title-style' => 'custom' )
									),
									'title-color' => array(
										'title' => esc_html__('Page Title Color', 'cryptro'),
										'type' => 'colorpicker',
									),
									'caption-color' => array(
										'title' => esc_html__('Page Caption Color', 'cryptro'),
										'type' => 'colorpicker',
									),
									'title-background-overlay-color' => array(
										'title' => esc_html__('Page Background Overlay Color', 'cryptro'),
										'type' => 'colorpicker',
									),

								)
							), // title
							'header' => array(
								'title' => esc_html__('Header', 'cryptro'),
								'options' => array(

									'header-slider' => array(
										'title' => esc_html__('Header Slider ( Above Navigation )', 'cryptro'),
										'type' => 'combobox',
										'options' => array(
											'none' => esc_html__('None', 'cryptro'),
											'layer-slider' => esc_html__('Layer Slider', 'cryptro'),
											'master-slider' => esc_html__('Master Slider', 'cryptro'),
											'revolution-slider' => esc_html__('Revolution Slider', 'cryptro'),
										),
										'description' => esc_html__('For header style plain / bar / boxed', 'cryptro'),
									),
									'layer-slider-id' => array(
										'title' => esc_html__('Choose Layer Slider', 'cryptro'),
										'type' => 'combobox',
										'options' => gdlr_core_get_layerslider_list(),
										'condition' => array( 'header-slider' => 'layer-slider' )
									),
									'master-slider-id' => array(
										'title' => esc_html__('Choose Master Slider', 'cryptro'),
										'type' => 'combobox',
										'options' => gdlr_core_get_masterslider_list(),
										'condition' => array( 'header-slider' => 'master-slider' )
									),
									'revolution-slider-id' => array(
										'title' => esc_html__('Choose Revolution Slider', 'cryptro'),
										'type' => 'combobox',
										'options' => gdlr_core_get_revolution_slider_list(),
										'condition' => array( 'header-slider' => 'revolution-slider' )
									),

								) // header options
							), // header
							'bullet-anchor' => array(
								'title' => esc_html__('Bullet Anchor', 'cryptro'),
								'options' => array(
									'bullet-anchor-description' => array(
										'type' => 'description',
										'description' => esc_html__('This feature is used for one page navigation. It will appear on the right side of page. You can put the id of element in \'Anchor Link\' field to let the bullet scroll the page to.', 'cryptro')
									),
									'bullet-anchor' => array(
										'title' => esc_html__('Add Anchor', 'cryptro'),
										'type' => 'custom',
										'item-type' => 'tabs',
										'options' => array(
											'title' => array(
												'title' => esc_html__('Anchor Link', 'cryptro'),
												'type' => 'text',
											),
											'anchor-color' => array(
												'title' => esc_html__('Anchor Color', 'cryptro'),
												'type' => 'colorpicker',
											),
											'anchor-hover-color' => array(
												'title' => esc_html__('Anchor Hover Color', 'cryptro'),
												'type' => 'colorpicker',
											)
										),
										'wrapper-class' => 'gdlr-core-fullsize'
									),
								)
							)
						)
					));

					// for post post type
					new gdlr_core_page_option(array(
						'post_type' => array('post'),
						'options' => array(
							'layout' => array(
								'title' => esc_html__('Layout', 'cryptro'),
								'options' => array(

									'show-content' => array(
										'title' => esc_html__('Show WordPress Editor Content', 'cryptro'),
										'type' => 'checkbox',
										'default' => 'enable',
										'description' => esc_html__('Disable this to hide the content in editor to show only page builder content.', 'cryptro'),
									),
									'sidebar' => array(
										'title' => esc_html__('Sidebar', 'cryptro'),
										'type' => 'radioimage',
										'options' => 'sidebar',
										'with-default' => true,
										'default' => 'default',
										'wrapper-class' => 'gdlr-core-fullsize'
									),
									'sidebar-left' => array(
										'title' => esc_html__('Sidebar Left', 'cryptro'),
										'type' => 'combobox',
										'options' => 'sidebar',
										'condition' => array( 'sidebar' => array('left', 'both') )
									),
									'sidebar-right' => array(
										'title' => esc_html__('Sidebar Right', 'cryptro'),
										'type' => 'combobox',
										'options' => 'sidebar',
										'condition' => array( 'sidebar' => array('right', 'both') )
									),
								)
							),
							'metro-layout' => array(
								'title' => esc_html__('Metro Layout', 'cryptro'),
								'options' => array(
									'metro-column-size' => array(
										'title' => esc_html__('Column Size', 'cryptro'),
										'type' => 'combobox',
										'options' => array( 'default'=> esc_html__('Default', 'cryptro'), 
											60 => '1/1', 30 => '1/2', 20 => '1/3', 40 => '2/3', 
											15 => '1/4', 45 => '3/4', 12 => '1/5', 24 => '2/5', 36 => '3/5', 48 => '4/5',
											10 => '1/6', 50 => '5/6'),
										'default' => 'default',
										'description' => esc_html__('Choosing default will display the value selected by the page builder item.', 'cryptro')
									),
									'metro-thumbnail-size' => array(
										'title' => esc_html__('Thumbnail Size', 'cryptro'),
										'type' => 'combobox',
										'options' => 'thumbnail-size',
										'with-default' => true,
										'default' => 'default',
										'description' => esc_html__('Choosing default will display the value selected by the page builder item.', 'cryptro')
									)
								)
							),						
							'title' => array(
								'title' => esc_html__('Title', 'cryptro'),
								'options' => array(

									'blog-title-style' => array(
										'title' => esc_html__('Blog Title Style', 'cryptro'),
										'type' => 'combobox',
										'options' => array(
											'default' => esc_html__('Default', 'cryptro'),
											'small' => esc_html__('Small', 'cryptro'),
											'large' => esc_html__('Large', 'cryptro'),
											'custom' => esc_html__('Custom', 'cryptro'),
											'inside-content' => esc_html__('Inside Content', 'cryptro'),
											'none' => esc_html__('None', 'cryptro'),
										),
										'default' => 'default'
									),
									'blog-title-padding' => array(
										'title' => esc_html__('Blog Title Padding', 'cryptro'),
										'type' => 'custom',
										'item-type' => 'padding',
										'data-input-type' => 'pixel',
										'options' => array('padding-top', 'padding-bottom'),
										'wrapper-class' => 'gdlr-core-fullsize gdlr-core-no-link gdlr-core-large',
										'condition' => array( 'blog-title-style' => 'custom' )
									),
									'blog-feature-image' => array(
										'title' => esc_html__('Blog Feature Image Location', 'cryptro'),
										'type' => 'combobox',
										'options' => array(
											'default' => esc_html__('Default', 'cryptro'),
											'content' => esc_html__('Inside Content', 'cryptro'),
											'title-background' => esc_html__('Title Background', 'cryptro'),
											'none' => esc_html__('None', 'cryptro'),
										)
									),
									'blog-title-background-image' => array(
										'title' => esc_html__('Blog Title Background Image', 'cryptro'),
										'type' => 'upload',
										'data-type' => 'file',
										'condition' => array( 
											'blog-title-style' => array('default', 'small', 'large', 'custom'),
											'blog-feature-image' => array('default', 'content', 'none')
										),
										'description' => esc_html__('Will be overridden by feature image if selected.', 'cryptro'),
									),
									'blog-top-bottom-gradient' => array(
										'title' => esc_html__('Blog ( Feature Image ) Title Top/Bottom Gradient', 'cryptro'),
										'type' => 'combobox',
										'options' => array(
											'default' => esc_html__('Default', 'cryptro'),
											'enable' => esc_html__('Enable', 'cryptro'),
											'disable' => esc_html__('Disable', 'cryptro'),
										)
									),
									'blog-title-background-overlay-opacity' => array(
										'title' => esc_html__('Blog Title Background Overlay Opacity', 'cryptro'),
										'type' => 'text',
										'description' => esc_html__('Fill the number between 0.01 - 1 ( Leave Blank For Default Value )', 'cryptro'),
									),

								) // options
							) // title
						)
					));
				}

			}
			
			// create page builder
			if( class_exists('gdlr_core_page_builder') ){
				new gdlr_core_page_builder(array(
					'style' => array(
						'style-custom' => cryptro_get_style_custom()
					)
				));
			}
			
		} // cryptro_init_goodlayers_core_elements
	} // function_exists