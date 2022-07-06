<?php 

	// item title
	add_filter('gdlr_core_block_item_option', 'cryptro_block_item_option');
	if( !function_exists('cryptro_block_item_option') ){
		function cryptro_block_item_option(){
			return array(
				'title-align' => array(
					'title' => esc_html__('Title Align', 'cryptro'),
					'type' => 'combobox',
					'options' => array(
						'left' => esc_html__('Left', 'cryptro'),
						'center' => esc_html__('Center', 'cryptro'),
					),
					'default' => 'left',
				),
				'title-left-media' => array(
					'title' => esc_html__('Title Left Media', 'cryptro'),
					'type' => 'combobox',
					'options' => array(
						'icon' => esc_html__('Icon', 'cryptro'),
						'image' => esc_html__('Image', 'cryptro')
					),
					'default' => 'icon'
				),
				'title-left-icon' => array(
					'title' => esc_html__('Title Left Icon', 'cryptro'),
					'type' => 'icons',
					'allow-none' => true,
					'wrapper-class' => 'gdlr-core-fullsize',
					'condition' => array('title-left-media' => 'icon')
				),
				'title-left-image' => array(
					'title' => esc_html__('Upload Image', 'cryptro'),
					'type' => 'upload',
					'condition' => array('title-left-media' => 'image')
				),
				'title' => array(
					'title' => esc_html__('Title', 'cryptro'),
					'type' => 'text',
				),
				'title-divider' => array(
					'title' => esc_html__('Title Divider', 'cryptro'),
					'type' => 'combobox',
					'options' => array(
						'none' => esc_html__('None', 'cryptro'),
						'style-1' => esc_html__('Style 1', 'cryptro'),
						'style-2' => esc_html__('Side Vertical Border', 'cryptro')
					),
					'condition' => array( 'title-align' => 'left' )
				),
				'caption' => array(
					'title' => esc_html__('Caption', 'cryptro'),
					'type' => 'textarea',
				),
				'caption-position' => array(
					'title' => esc_html__('Caption Position', 'cryptro'),
					'type' => 'combobox',
					'options' => array(
						'top' => esc_html__('Above Title', 'cryptro'),
						'bottom' => esc_html__('Below Title', 'cryptro'),
					)
				),
				'read-more-text' => array(
					'title' => esc_html__('Read More Text', 'cryptro'),
					'type' => 'text',
					'default' => esc_html__('Read More', 'cryptro'),
				),
				'read-more-link' => array(
					'title' => esc_html__('Read More Link', 'cryptro'),
					'type' => 'text',
				),
				'read-more-target' => array(
					'title' => esc_html__('Read More Target', 'cryptro'),
					'type' => 'combobox',
					'options' => array(
						'_self' => esc_html__('Current Screen', 'cryptro'),
						'_blank' => esc_html__('New Window', 'cryptro'),
					),
				),
				'title-size' => array(
					'title' => esc_html__('Title Size', 'cryptro'),
					'type' => 'fontslider',
					'default' => '41px'
				),
				'title-letter-spacing' => array(
					'title' => esc_html__('Title Letter Spacing', 'cryptro'),
					'type' => 'text',
					'data-input-type' => 'pixel',
				),
				'title-font-style' => array(
					'title' => esc_html__('Title Font Style', 'cryptro'),
					'type' => 'combobox',
					'options' => array(
						'' => esc_html__('Default', 'cryptro'),
						'normal' => esc_html__('Normal', 'cryptro'),
						'italic' => esc_html__('Italic', 'cryptro'),
					),
					'default' => ''
				),
				'title-text-transform' => array(
					'title' => esc_html__('Title Text Transform', 'cryptro'),
					'type' => 'combobox',
					'data-type' => 'text',
					'options' => array(
						'none' => esc_html__('None', 'cryptro'),
						'uppercase' => esc_html__('Uppercase', 'cryptro'),
						'lowercase' => esc_html__('Lowercase', 'cryptro'),
						'capitalize' => esc_html__('Capitalize', 'cryptro'),
					),
					'default' => 'uppercase'
				),
				'caption-size' => array(
					'title' => esc_html__('Caption Size', 'cryptro'),
					'type' => 'fontslider',
					'default' => '16px'
				),
				'caption-font-style' => array(
					'title' => esc_html__('Caption Font Style', 'cryptro'),
					'type' => 'combobox',
					'options' => array(
						'' => esc_html__('Default', 'cryptro'),
						'normal' => esc_html__('Normal', 'cryptro'),
						'italic' => esc_html__('Italic', 'cryptro'),
					),
					'default' => ''
				),
				'caption-spaces' => array(
					'title' => esc_html__('Space Between Caption ( And Title )', 'cryptro'),
					'type' => 'text',
					'data-input-type' => 'pixel',
					'default' => ''
				),
				'read-more-size' => array(
					'title' => esc_html__('Read More Size', 'cryptro'),
					'type' => 'fontslider',
					'default' => '14px',
				),
				'title-left-icon-color' => array(
					'title' => esc_html__('Title Left Icon Color', 'cryptro'),
					'type' => 'colorpicker'
				),
				'title-color' => array(
					'title' => esc_html__('Title Color', 'cryptro'),
					'type' => 'colorpicker'
				),
				'read-more-divider-color' => array(
					'title' => esc_html__('Title Divider Color', 'cryptro'),
					'type' => 'colorpicker',
					'condition' => array( 'title-align' => 'left', 'title-divider' => array( 'style-1', 'style-2' ) )
				),
				'caption-color' => array(
					'title' => esc_html__('Caption Color', 'cryptro'),
					'type' => 'colorpicker'
				),
				'read-more-color' => array(
					'title' => esc_html__('Read More Color', 'cryptro'),
					'type' => 'colorpicker',
				),
				'title-wrap-bottom-margin' => array(
					'title' => esc_html__('Title Wrap Bottom Margin', 'cryptro'),
					'type' => 'text',
					'data-input-type' => 'pixel',
				),
				'title-carousel-nav-style' => array(
					'title' => esc_html__('Title Carousel Nav Style (if any)', 'cryptro'),
					'type' => 'combobox',
					'options' => array(
						'default' => esc_html__('Default', 'cryptro'),
						'gdlr-core-plain-style gdlr-core-small' => esc_html__('Small Plain Style', 'cryptro'),
						'gdlr-core-plain-style' => esc_html__('Plain Style', 'cryptro'),
						'gdlr-core-plain-circle-style' => esc_html__('Plain Circle Style', 'cryptro'),
						'gdlr-core-round-style' => esc_html__('Large Round Style', 'cryptro'),
						'gdlr-core-rectangle-style' => esc_html__('Rectangle Style', 'cryptro'),
						'gdlr-core-rectangle-style gdlr-core-large' => esc_html__('Large Rectangle Style', 'cryptro'),
					)
				)
			);
		}
	}
	add_filter('gdlr_core_block_item_title', 'cryptro_block_item_title', 10, 2);
	if( !function_exists('cryptro_block_item_title') ){
		function cryptro_block_item_title( $ret = '', $settings = array() ){

			$settings['title-size'] = (empty($settings['title-size']) || $settings['title-size'] == '41px')? '': $settings['title-size'];
			$settings['caption-size'] = (empty($settings['caption-size']) || $settings['caption-size'] == '16px')? '': $settings['caption-size'];
			$settings['read-more-size'] = (empty($settings['read-more-size']) || $settings['read-more-size'] == '14px')? '': $settings['read-more-size'];

			if( !empty($settings['title']) || !empty($settings['caption']) ){ 

				$title_align = empty($settings['title-align'])? 'left': $settings['title-align'];
				$extra_class  = ' gdlr-core-' . $title_align . '-align';
				$extra_class .= (!isset($settings['pdlr']) || $settings['pdlr'] == true)? ' gdlr-core-item-mglr': '';

				$ret .= '<div class="gdlr-core-block-item-title-wrap ' . esc_attr($extra_class) . '" ' . gdlr_core_esc_style(array(
					'margin-bottom' => empty($settings['title-wrap-bottom-margin'])? '': $settings['title-wrap-bottom-margin']
				)) . ' >';
				if( !empty($settings['caption']) && 
					((!empty($settings['caption-position']) && $settings['caption-position'] == 'top') ||
					 (empty($settings['caption-position']) && $title_align == 'left')) ){
					
					$ret .= '<div class="gdlr-core-block-item-caption gdlr-core-top gdlr-core-info-font gdlr-core-skin-caption" ' . gdlr_core_esc_style(array(
						'font-size' => $settings['caption-size'],
						'font-style' => empty($settings['caption-font-style'])? '': $settings['caption-font-style'],
						'color' => empty($settings['caption-color'])? '': $settings['caption-color'],
						'margin-bottom' => empty($settings['caption-spaces'])? '': $settings['caption-spaces']
					)) . ' >' . gdlr_core_text_filter($settings['caption']) . '</div>';
				}
				if( !empty($settings['title']) ){
					$ret .= '<div class="gdlr-core-block-item-title-inner" >';
					$ret .= '<h3 class="gdlr-core-block-item-title" ' . gdlr_core_esc_style(array(
						'font-size' => $settings['title-size'],
						'font-weight' => empty($settings['title-font-weight'])? '': $settings['title-font-weight'],
						'font-style' => empty($settings['title-font-style'])? '': $settings['title-font-style'],
						'text-transform' => (empty($settings['title-text-transform']) || $settings['title-text-transform'] == 'uppercase')? '': $settings['title-text-transform'],
						'letter-spacing' => empty($settings['title-letter-spacing'])? '': $settings['title-letter-spacing'],
						'color' => empty($settings['title-color'])? '': $settings['title-color']
					)) . ' >';
					if( empty($settings['title-left-media']) || $settings['title-left-media'] == 'icon' ){
						if( !empty($settings['title-left-icon']) ){
							$ret .= '<i class="' . esc_attr($settings['title-left-icon']) . '" ' . gdlr_core_esc_style(array(
								'color' => (empty($settings['title-left-icon-color'])? '': $settings['title-left-icon-color'])
							)) . ' ></i>';
						}
					}else{
						if( !empty($settings['title-left-image']) ){
							$ret .= gdlr_core_get_image($settings['title-left-image']);
						}
					}
					$ret .= gdlr_core_text_filter($settings['title']);
					$ret .= '</h3>';

					if ( $title_align == 'left' ){
						if( !empty($settings['title-divider']) ){
							$ret .= '<span class="gdlr-core-block-item-title-divider gdlr-core-' . esc_attr($settings['title-divider']) . '" ' . gdlr_core_esc_style(array(
								'font-size' => $settings['title-size'],
								'border-color' => empty($settings['read-more-divider-color'])? '': $settings['read-more-divider-color'],
							)) . ' >';
							if( !empty($settings['title-divider']) ){
								$ret .= '<span class="gdlr-core-block-item-title-divider-inner" ' . gdlr_core_esc_style(array(
									'border-color' => empty($settings['read-more-divider-color'])? '': $settings['read-more-divider-color'],
								)) . ' ></span>';
							}
							$ret .= '</span>';
						}
					}
					
					if( !empty($settings['read-more-text']) && !empty($settings['read-more-link']) ){	
						$ret .= '<a class="gdlr-core-block-item-read-more" href="' . esc_url($settings['read-more-link']) . '" ';
						$ret .= empty($settings['read-more-target'])? '': 'target="' . esc_attr($settings['read-more-target']) . '" ';
						$ret .= gdlr_core_esc_style(array(
							'font-size' => $settings['read-more-size'],
							'color' => empty($settings['read-more-color'])? '': $settings['read-more-color']
						));
						$ret .= ' >' . gdlr_core_text_filter($settings['read-more-text']) . '</a>';
					}

					$ret .= '</div>'; // gdlr-core-block-item-title-inner
				}
				if( !empty($settings['caption']) && 
					((!empty($settings['caption-position']) && $settings['caption-position'] == 'bottom') ||
					 (empty($settings['caption-position']) && $title_align == 'center')) ){

					$ret .= '<div class="gdlr-core-block-item-caption gdlr-core-bottom gdlr-core-info-font gdlr-core-skin-caption" ' . gdlr_core_esc_style(array(
						'font-size' => $settings['caption-size'],
						'font-style' => empty($settings['caption-font-style'])? '': $settings['caption-font-style'],
						'color' => empty($settings['caption-color'])? '': $settings['caption-color'],
						'margin-top' => empty($settings['caption-spaces'])? '': $settings['caption-spaces']
					)) . ' >' . gdlr_core_text_filter($settings['caption']) . '</div>';
				}
				if( $title_align == 'center' && !empty($settings['read-more-text']) && !empty($settings['read-more-link']) ){
					$ret .= '<a class="gdlr-core-block-item-read-more" href="' . esc_url($settings['read-more-link']) . '" ';
					$ret .= empty($settings['read-more-target'])? '': 'target="' . esc_attr($settings['read-more-target']) . '" ';
					$ret .= gdlr_core_esc_style(array(
						'font-size' => $settings['read-more-size'],
						'color' => empty($settings['read-more-color'])? '': $settings['read-more-color']
					));
					$ret .= ' >' . gdlr_core_text_filter($settings['read-more-text']) . '</a>';
				}

				if( !empty($settings['carousel']) && $settings['carousel'] != 'disable' ){
					if( empty($settings['title-carousel-nav-style']) || $settings['title-carousel-nav-style'] == 'default' ){
						$nav_style = apply_filters('gdlr_core_block_item_title_nav_filter', 'gdlr-core-round-style');
					}else{
						$nav_style = $settings['title-carousel-nav-style'];
					}
					
					$ret .= '<div class="gdlr-core-flexslider-nav ' . esc_attr($nav_style) . ' gdlr-core-absolute-center gdlr-core-right" ></div>';
				}
				$ret .= '</div>';

			}else if( !empty($settings['carousel']) && $settings['carousel'] != 'disable' ){

				if( empty($settings['carousel-navigation']) || in_array($settings['carousel-navigation'], array('navigation', 'both')) ){

					$enable_carousel = apply_filters('gdlr_core_block_item_title_only_carousel', 'enable');
					if( $enable_carousel == 'enable' ){
						$extra_class = (!isset($settings['pdlr']) || $settings['pdlr'] == true)? ' gdlr-core-item-mglr': '';

						if( empty($settings['title-carousel-nav-style']) || $settings['title-carousel-nav-style'] == 'default' ){
							$nav_style = 'gdlr-core-plain-style';
						}else{
							$nav_style = $settings['title-carousel-nav-style'];
						}

						$ret .= '<div class="gdlr-core-block-item-title-nav ' . esc_attr($extra_class) . '" >';
						$ret .= '<div class="gdlr-core-flexslider-nav ' . esc_attr($nav_style) . ' gdlr-core-block-center" ></div>';
						$ret .= '</div>';
					}

				}
			} 

			return $ret;
		}
	}