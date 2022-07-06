<?php
	/*	
	*	Goodlayers Option
	*	---------------------------------------------------------------------
	*	This file store an array of theme options
	*	---------------------------------------------------------------------
	*/	

	$cryptro_admin_option->add_element(array(
	
		// typography head section
		'title' => esc_html__('Typography', 'cryptro'),
		'slug' => 'cryptro_typography',
		'icon' => get_template_directory_uri() . '/include/options/images/typography.png',
		'options' => array(
		
			// starting the subnav
			'font-family' => array(
				'title' => esc_html__('Font Family', 'cryptro'),
				'options' => array(
					'heading-font' => array(
						'title' => esc_html__('Heading Font', 'cryptro'),
						'type' => 'font',
						'data-type' => 'font',
						'default' => 'Open Sans',
						'selector' => '.cryptro-body h1, .cryptro-body h2, .cryptro-body h3, ' . 
							'.cryptro-body h4, .cryptro-body h5, .cryptro-body h6, .cryptro-body .cryptro-title-font,' .
							'.cryptro-body .gdlr-core-title-font{ font-family: #gdlr#; }' . 
							'.woocommerce-breadcrumb, .woocommerce span.onsale, ' .
							'.single-product.woocommerce div.product p.price .woocommerce-Price-amount, .single-product.woocommerce #review_form #respond label{ font-family: #gdlr#; }'
					),
					'navigation-font' => array(
						'title' => esc_html__('Navigation Font', 'cryptro'),
						'type' => 'font',
						'data-type' => 'font',
						'default' => 'Open Sans',
						'selector' => '.cryptro-navigation .sf-menu > li > a, .cryptro-navigation .sf-vertical > li > a, .cryptro-navigation-font{ font-family: #gdlr#; }'
					),	
					'content-font' => array(
						'title' => esc_html__('Content Font', 'cryptro'),
						'type' => 'font',
						'data-type' => 'font',
						'default' => 'Open Sans',
						'selector' => '.cryptro-body, .cryptro-body .gdlr-core-content-font, ' . 
							'.cryptro-body input, .cryptro-body textarea, .cryptro-body button, .cryptro-body select, ' . 
							'.cryptro-body .cryptro-content-font, .gdlr-core-audio .mejs-container *{ font-family: #gdlr#; }'
					),
					'info-font' => array(
						'title' => esc_html__('Info Font', 'cryptro'),
						'type' => 'font',
						'data-type' => 'font',
						'default' => 'Open Sans',
						'selector' => '.cryptro-body .gdlr-core-info-font, .cryptro-body .cryptro-info-font{ font-family: #gdlr#; }'
					),
					'blog-info-font' => array(
						'title' => esc_html__('Blog Info Font', 'cryptro'),
						'type' => 'font',
						'data-type' => 'font',
						'default' => 'Open Sans',
						'selector' => '.cryptro-body .gdlr-core-blog-info-font, .cryptro-body .cryptro-blog-info-font{ font-family: #gdlr#; }'
					),
					'quote-font' => array(
						'title' => esc_html__('Quote Font', 'cryptro'),
						'type' => 'font',
						'data-type' => 'font',
						'default' => 'Open Sans',
						'selector' => '.cryptro-body .gdlr-core-quote-font, blockquote{ font-family: #gdlr#; }'
					),
					'testimonial-font' => array(
						'title' => esc_html__('Testimonial Font', 'cryptro'),
						'type' => 'font',
						'data-type' => 'font',
						'default' => 'Open Sans',
						'selector' => '.cryptro-body .gdlr-core-testimonial-content{ font-family: #gdlr#; }'
					),
					'additional-font' => array(
						'title' => esc_html__('Additional Font', 'cryptro'),
						'type' => 'font',
						'data-type' => 'font',
						'customizer' => false,
						'default' => 'Georgia, serif',
						'description' => esc_html__('Additional font you want to include for custom css.', 'cryptro')
					),
					'additional-font2' => array(
						'title' => esc_html__('Additional Font2', 'cryptro'),
						'type' => 'font',
						'data-type' => 'font',
						'customizer' => false,
						'default' => 'Georgia, serif',
						'description' => esc_html__('Additional font you want to include for custom css.', 'cryptro')
					),
					
				) // font-family-options
			), // font-family-nav
			
			'font-size' => array(
				'title' => esc_html__('Font Size', 'cryptro'),
				'options' => array(
				
					'h1-font-size' => array(
						'title' => esc_html__('H1 Size', 'cryptro'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'default' => '52px',
						'selector' => '.cryptro-body h1{ font-size: #gdlr#; }' 
					),					
					'h2-font-size' => array(
						'title' => esc_html__('H2 Size', 'cryptro'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'default' => '48px',
						'selector' => '.cryptro-body h2, #poststuff .gdlr-core-page-builder-body h2{ font-size: #gdlr#; }' 
					),					
					'h3-font-size' => array(
						'title' => esc_html__('H3 Size', 'cryptro'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'default' => '36px',
						'selector' => '.cryptro-body h3{ font-size: #gdlr#; }' 
					),					
					'h4-font-size' => array(
						'title' => esc_html__('H4 Size', 'cryptro'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'default' => '28px',
						'selector' => '.cryptro-body h4{ font-size: #gdlr#; }' 
					),					
					'h5-font-size' => array(
						'title' => esc_html__('H5 Size', 'cryptro'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'default' => '22px',
						'selector' => '.cryptro-body h5{ font-size: #gdlr#; }' 
					),					
					'h6-font-size' => array(
						'title' => esc_html__('H6 Size', 'cryptro'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'default' => '18px',
						'selector' => '.cryptro-body h6{ font-size: #gdlr#; }' 
					),				
					'header-font-weight' => array(
						'title' => esc_html__('Header Font Weight', 'cryptro'),
						'type' => 'text',
						'data-type' => 'text',
						'selector' => '.cryptro-body h1, .cryptro-body h2, .cryptro-body h3, .cryptro-body h4, .cryptro-body h5, .cryptro-body h6{ font-weight: #gdlr#; }' . 
							'#poststuff .gdlr-core-page-builder-body h1, #poststuff .gdlr-core-page-builder-body h2{ font-weight: #gdlr#; }',
						'description' => esc_html__('Eg. lighter, bold, normal, 300, 400, 600, 700, 800', 'cryptro')
					),
					'content-font-size' => array(
						'title' => esc_html__('Content Font Size', 'cryptro'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'default' => '15px',
						'selector' => '.cryptro-body{ font-size: #gdlr#; }' 
					),
					'content-font-weight' => array(
						'title' => esc_html__('Content Font Weight', 'cryptro'),
						'type' => 'text',
						'data-type' => 'text',
						'selector' => '.cryptro-body{ font-weight: #gdlr#; }',
						'description' => esc_html__('Eg. lighter, bold, normal, 300, 400, 600, 700, 800', 'cryptro')
					),
					'content-line-height' => array(
						'title' => esc_html__('Content Line Height', 'cryptro'),
						'type' => 'text',
						'data-type' => 'text',
						'default' => '1.7',
						'selector' => '.cryptro-body, .cryptro-body p, .cryptro-line-height, .gdlr-core-line-height{ line-height: #gdlr#; }'
					),
					
				) // font-size-options
			), // font-size-nav			
			
			'mobile-font-size' => array(
				'title' => esc_html__('Mobile Font Size', 'cryptro'),
				'options' => array(

					'mobile-h1-font-size' => array(
						'title' => esc_html__('Mobile H1 Size', 'cryptro'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel',
						'selector' => '@media only screen and (max-width: 767px){ .cryptro-body h1{ font-size: #gdlr#; } }' 
					),
					'mobile-h2-font-size' => array(
						'title' => esc_html__('Mobile H2 Size', 'cryptro'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel',
						'selector' => '@media only screen and (max-width: 767px){ .cryptro-body h2, #poststuff .gdlr-core-page-builder-body h2{ font-size: #gdlr#; } }' 
					),
					'mobile-h3-font-size' => array(
						'title' => esc_html__('Mobile H3 Size', 'cryptro'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel',
						'selector' => '@media only screen and (max-width: 767px){ .cryptro-body h3{ font-size: #gdlr#; } }' 
					),
					'mobile-h4-font-size' => array(
						'title' => esc_html__('Mobile H4 Size', 'cryptro'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel',
						'selector' => '@media only screen and (max-width: 767px){ .cryptro-body h4{ font-size: #gdlr#; } }' 
					),
					'mobile-h5-font-size' => array(
						'title' => esc_html__('Mobile H5 Size', 'cryptro'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel',
						'selector' => '@media only screen and (max-width: 767px){ .cryptro-body h5{ font-size: #gdlr#; } }' 
					),
					'mobile-h6-font-size' => array(
						'title' => esc_html__('Mobile H6 Size', 'cryptro'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel',
						'selector' => '@media only screen and (max-width: 767px){ .cryptro-body h6{ font-size: #gdlr#; } }' 
					),					
					'mobile-content-font-size' => array(
						'title' => esc_html__('Mobile Content Font Size', 'cryptro'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel',
						'selector' => '@media only screen and (max-width: 767px){ .cryptro-body{ font-size: #gdlr#; } }' 
					),

				)
			),

			'navigation-font-size' => array(
				'title' => esc_html__('Navigation Font Size', 'cryptro'),
				'options' => array(	
					'navigation-font-size' => array(
						'title' => esc_html__('Navigation Font Size', 'cryptro'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'default' => '14px',
						'selector' => '.cryptro-navigation .sf-menu > li > a, .cryptro-navigation .sf-vertical > li > a{ font-size: #gdlr#; }' 
					),	
					'navigation-font-weight' => array(
						'title' => esc_html__('Navigation Font Weight', 'cryptro'),
						'type' => 'text',
						'data-type' => 'text',
						'default' => '800',
						'selector' => '.cryptro-navigation .sf-menu > li > a, .cryptro-navigation .sf-vertical > li > a{ font-weight: #gdlr#; }',
						'description' => esc_html__('Eg. lighter, bold, normal, 300, 400, 600, 700, 800', 'cryptro')
					),	
					'navigation-font-letter-spacing' => array(
						'title' => esc_html__('Navigation Font Letter Spacing', 'cryptro'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel',
						'selector' => '.cryptro-navigation .sf-menu > li > a, .cryptro-navigation .sf-vertical > li > a{ letter-spacing: #gdlr#; }'
					),
					'navigation-text-transform' => array(
						'title' => esc_html__('Navigation Text Transform', 'cryptro'),
						'type' => 'combobox',
						'data-type' => 'text',
						'options' => array(
							'uppercase' => esc_html__('Uppercase', 'cryptro'),
							'lowercase' => esc_html__('Lowercase', 'cryptro'),
							'capitalize' => esc_html__('Capitalize', 'cryptro'),
							'none' => esc_html__('None', 'cryptro'),
						),
						'default' => 'uppercase',
						'selector' => '.cryptro-navigation .sf-menu > li > a, .cryptro-navigation .sf-vertical > li > a{ text-transform: #gdlr#; }',
					),
					'navigation-right-button-font-size' => array(
						'title' => esc_html__('Navigation Right Button Font Size', 'cryptro'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'default' => '11px',
						'selector' => '.cryptro-main-menu-right-button{ font-size: #gdlr#; }' 
					),	
					'navigation-right-button-font-weight' => array(
						'title' => esc_html__('Navigation Right Button Font Weight', 'cryptro'),
						'type' => 'text',
						'data-type' => 'text',
						'selector' => '.cryptro-main-menu-right-button{ font-weight: #gdlr#; }',
						'description' => esc_html__('Eg. lighter, bold, normal, 300, 400, 600, 700, 800', 'cryptro')
					),	
					'navigation-right-button-font-letter-spacing' => array(
						'title' => esc_html__('Navigation Right Button Font Letter Spacing', 'cryptro'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel',
						'selector' => '.cryptro-main-menu-right-button{ letter-spacing: #gdlr#; }'
					),
					'navigation-right-button-text-transform' => array(
						'title' => esc_html__('Navigation Right Button Text Transform', 'cryptro'),
						'type' => 'combobox',
						'data-type' => 'text',
						'options' => array(
							'uppercase' => esc_html__('Uppercase', 'cryptro'),
							'lowercase' => esc_html__('Lowercase', 'cryptro'),
							'capitalize' => esc_html__('Capitalize', 'cryptro'),
							'none' => esc_html__('None', 'cryptro'),
						),
						'default' => 'uppercase',
						'selector' => '.cryptro-main-menu-right-button{ text-transform: #gdlr#; }',
					),
				) // font-size-options
			), // font-size-nav
			
			'footer-font-size' => array(
				'title' => esc_html__('Sidebar / Footer Font Size', 'cryptro'),
				'options' => array(
					
					'sidebar-title-font-size' => array(
						'title' => esc_html__('Sidebar Title Font Size', 'cryptro'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'default' => '13px',
						'selector' => '.cryptro-sidebar-area .cryptro-widget-title{ font-size: #gdlr#; }' 
					),
					'sidebar-title-font-weight' => array(
						'title' => esc_html__('Sidebar Title Font Weight', 'cryptro'),
						'type' => 'text',
						'data-type' => 'text',
						'selector' => '.cryptro-sidebar-area .cryptro-widget-title{ font-weight: #gdlr#; }',
						'description' => esc_html__('Eg. lighter, bold, normal, 300, 400, 600, 700, 800', 'cryptro')
					),	
					'sidebar-title-font-letter-spacing' => array(
						'title' => esc_html__('Sidebar Title Font Letter Spacing', 'cryptro'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel',
						'selector' => '.cryptro-sidebar-area .cryptro-widget-title{ letter-spacing: #gdlr#; }'
					),
					'sidebar-title-text-transform' => array(
						'title' => esc_html__('Sidebar Title Text Transform', 'cryptro'),
						'type' => 'combobox',
						'data-type' => 'text',
						'options' => array(
							'uppercase' => esc_html__('Uppercase', 'cryptro'),
							'lowercase' => esc_html__('Lowercase', 'cryptro'),
							'capitalize' => esc_html__('Capitalize', 'cryptro'),
							'none' => esc_html__('None', 'cryptro'),
						),
						'default' => 'uppercase',
						'selector' => '.cryptro-sidebar-area .cryptro-widget-title{ text-transform: #gdlr#; }',
					),
					'footer-title-font-size' => array(
						'title' => esc_html__('Footer Title Font Size', 'cryptro'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'default' => '13px',
						'selector' => '.cryptro-footer-wrapper .cryptro-widget-title{ font-size: #gdlr#; }' 
					),
					'footer-title-font-weight' => array(
						'title' => esc_html__('Footer Title Font Weight', 'cryptro'),
						'type' => 'text',
						'data-type' => 'text',
						'selector' => '.cryptro-footer-wrapper .cryptro-widget-title{ font-weight: #gdlr#; }',
						'description' => esc_html__('Eg. lighter, bold, normal, 300, 400, 600, 700, 800', 'cryptro')
					),	
					'footer-title-font-letter-spacing' => array(
						'title' => esc_html__('Footer Title Font Letter Spacing', 'cryptro'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel',
						'selector' => '.cryptro-footer-wrapper .cryptro-widget-title{ letter-spacing: #gdlr#; }'
					),
					'footer-title-text-transform' => array(
						'title' => esc_html__('Footer Title Text Transform', 'cryptro'),
						'type' => 'combobox',
						'data-type' => 'text',
						'options' => array(
							'uppercase' => esc_html__('Uppercase', 'cryptro'),
							'lowercase' => esc_html__('Lowercase', 'cryptro'),
							'capitalize' => esc_html__('Capitalize', 'cryptro'),
							'none' => esc_html__('None', 'cryptro'),
						),
						'default' => 'uppercase',
						'selector' => '.cryptro-footer-wrapper .cryptro-widget-title{ text-transform: #gdlr#; }',
					),
					'footer-font-size' => array(
						'title' => esc_html__('Footer Content Font Size', 'cryptro'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'default' => '15px',
						'selector' => '.cryptro-footer-wrapper{ font-size: #gdlr#; }' 
					),	
					'copyright-font-size' => array(
						'title' => esc_html__('Copyright Font Size', 'cryptro'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'default' => '14px',
						'selector' => '.cryptro-copyright-text, .cryptro-copyright-left, .cryptro-copyright-right{ font-size: #gdlr#; }' 
					),
					'copyright-font-weight' => array(
						'title' => esc_html__('Copyright Font Weight', 'cryptro'),
						'type' => 'text',
						'data-type' => 'text',
						'selector' => '.cryptro-copyright-text, .cryptro-copyright-left, .cryptro-copyright-right{ font-weight: #gdlr#; }',
						'description' => esc_html__('Eg. lighter, bold, normal, 300, 400, 600, 700, 800', 'cryptro')
					),	
					'copyright-font-letter-spacing' => array(
						'title' => esc_html__('Copyright Font Letter Spacing', 'cryptro'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel',
						'selector' => '.cryptro-copyright-text, .cryptro-copyright-left, .cryptro-copyright-right{ letter-spacing: #gdlr#; }'
					),
					'copyright-text-transform' => array(
						'title' => esc_html__('Copyright Text Transform', 'cryptro'),
						'type' => 'combobox',
						'data-type' => 'text',
						'options' => array(
							'uppercase' => esc_html__('Uppercase', 'cryptro'),
							'lowercase' => esc_html__('Lowercase', 'cryptro'),
							'capitalize' => esc_html__('Capitalize', 'cryptro'),
							'none' => esc_html__('None', 'cryptro'),
						),
						'default' => 'uppercase',
						'selector' => '.cryptro-copyright-text, .cryptro-copyright-left, .cryptro-copyright-right{ text-transform: #gdlr#; }',
					),
				)
			),

			'font-upload' => array(
				'title' => esc_html__('Font Uploader', 'cryptro'),
				'reload-after' => true,
				'customizer' => false,
				'options' => array(
					
					'font-upload' => array(
						'title' => esc_html__('Upload Fonts', 'cryptro'),
						'type' => 'custom',
						'item-type' => 'fontupload',
						'wrapper-class' => 'gdlr-core-fullsize',
					),
					
				) // fontupload-options
			), // fontupload-nav
		
		) // typography-options
		
	), 4);