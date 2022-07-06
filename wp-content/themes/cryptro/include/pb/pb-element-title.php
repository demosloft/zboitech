<?php
	/*	
	*	Goodlayers Item For Page Builder
	*/
	if( class_exists('gdlr_core_page_builder_element') ){
		gdlr_core_page_builder_element::add_element('title', 'cryptro_pb_element_title'); 
	}
	
	if( !class_exists('cryptro_pb_element_title') ){
		class cryptro_pb_element_title{
			
			// get the element settings
			static function get_settings(){
				return array(
					'icon' => 'fa-text-width',
					'title' => esc_html__('Title', 'cryptro')
				);
			}
			
			// return the element options
			static function get_options(){
				global $gdlr_core_item_pdb;
				
				return apply_filters('gdlr_core_title_item_options', array(
					'general' => array(
						'title' => esc_html__('General', 'cryptro'),
						'options' => array(
							'title' => array(
								'title' => esc_html__('Title', 'cryptro'),
								'type' => 'text',
								'default' => esc_html__('Default Sample Title', 'cryptro'),
							),	
							'caption' => array(
								'title' => esc_html__('Caption', 'cryptro'),
								'type' => 'textarea',
								'default' => esc_html__('Default sample caption text', 'cryptro'),
							),
							'caption-position' => array(
								'title' => esc_html__('Caption Position', 'cryptro'),
								'type' => 'combobox',
								'options' => array(
									'top' => esc_html__('Top', 'cryptro'),
									'bottom' => esc_html__('Bottom', 'cryptro'),
									'right' => esc_html__('Right', 'cryptro'),
								),
								'default' => 'top'
							),	
							'title-width' => array(
								'title' => esc_html__('Title Width', 'cryptro'),
								'type' => 'text',
								'data-input-type' => 'pixel',
								'default' => '300px',
								'condition' => array( 'caption-position' => 'right' )
							),
							'title-link-text' => array(
								'title' => esc_html__('Title Link Text', 'cryptro'),
								'type' => 'text',
								'description' => esc_html__('Leave this field blank to link the title text', 'cryptro')
							),
							'title-link' => array(
								'title' => esc_html__('Title Link', 'cryptro'),
								'type' => 'text'
							),
							'title-link-target' => array(
								'title' => esc_html__('Title Link Target', 'cryptro'),
								'type' => 'combobox',
								'options' => array(
									'_self' => esc_html__('Current Screen', 'cryptro'),
									'_blank' => esc_html__('New Window', 'cryptro'),
								)
							),				
						)
					),
					'style' => array(
						'title' => esc_html__('Style', 'cryptro'),
						'options' => array(
							'text-align' => array(
								'title' => esc_html__('Text Align', 'cryptro'),
								'type' => 'radioimage',
								'options' => 'text-align',
								'default' => 'left'
							),
							'left-media-type' => array(
								'title' => esc_html__('Left Media Type', 'cryptro'),
								'type' => 'combobox',
								'options' => array(
									'none' => esc_html__('None', 'cryptro'),
									'icon' => esc_html__('Icon', 'cryptro'),
									'image' => esc_html__('Image', 'cryptro'),
								),
								'default' => 'image',
								'condition' => array( 'text-align' => 'left' ),
							),
							'left-icon' => array(
								'title' => esc_html__('Left Icon Selector', 'cryptro'),
								'type' => 'icons',
								'default' => 'fa fa-gear',
								'wrapper-class' => 'gdlr-core-fullsize',
								'condition' => array( 'text-align' => 'left', 'left-media-type' => 'icon' )
							),
							'left-image' => array(
								'title' => esc_html__('Left Image', 'cryptro'),
								'type' => 'upload',
								'condition' => array( 'text-align' => 'left', 'left-media-type' => 'image' ),
							),
							'title-left-icon' => array(
								'title' => esc_html__('Title Left Icon', 'cryptro'),
								'type' => 'icons',
								'allow-none' => true,
								'default' => 'none',
								'wrapper-class' => 'gdlr-core-fullsize',
								'condition' => array( 'text-align' => 'center' )
							),
							'enable-side-border' => array(
								'title' => esc_html__('Enable Title Divider', 'cryptro'),
								'type' => 'combobox',
								'options' => array(
									'disable' => esc_html__('None', 'cryptro'),
									'enable' => esc_html__('Side Border', 'cryptro'),
									'style-2' => esc_html__('Side Vertical Border', 'cryptro'),
								),
								'default' => 'disable',
								'condition' => array( 'text-align' => array('left') )
							),
							'side-border-size' => array(
								'title' => esc_html__('Title Divider Size', 'cryptro'),
								'type' => 'text',
								'default' => '1px',
								'condition' => array( 'text-align' => array('left'), 'enable-side-border' => 'enable'  )
							),
							'side-border-style' => array(
								'title' => esc_html__('Title Divider Style', 'cryptro'),
								'type' => 'combobox',
								'options' => array(
									'solid' => esc_html__('Solid', 'cryptro'),
									'double' => esc_html__('Double', 'cryptro'),
									'dotted' => esc_html__('Dotted', 'cryptro'),
									'dashed' => esc_html__('Dash', 'cryptro'),
								),
								'default' => 'solid',
								'condition' => array( 'text-align' => array('left'), 'enable-side-border' => 'enable' )
							),
							'side-border-divider-color' => array(
								'title' => esc_html__('Title Divider Color', 'cryptro'),
								'type' => 'colorpicker',
								'condition' => array( 'text-align' => array('left'), 'enable-side-border' => array('enable', 'style-2')  )
							),	
							'heading-tag' => array(
								'title' => esc_html__('Heading Tag', 'cryptro'),
								'type' => 'combobox',
								'options' => array(
									'h1' => esc_html__('H1', 'cryptro'),
									'h2' => esc_html__('H2', 'cryptro'),
									'h3' => esc_html__('H3', 'cryptro'),
									'h4' => esc_html__('H4', 'cryptro'),
									'h5' => esc_html__('H5', 'cryptro'),
									'h6' => esc_html__('H6', 'cryptro'),
									'div' => esc_html__('Div', 'cryptro'),
								),
								'default' => 'h3'
							),
						)
					),
					'typography' => array(
						'title' => esc_html__('Typography', 'cryptro'),
						'options' => array(
							'icon-font-size' => array(
								'title' => esc_html__('Left Icon Size ( Only for left align with icon )', 'cryptro'),
								'type' => 'fontslider',
								'default' => '30px'
							),
							'title-font-size' => array(
								'title' => esc_html__('Title Font Size', 'cryptro'),
								'type' => 'fontslider',
								'default' => '41px'
							),
							'mobile-title-font-size' => array(
								'title' => esc_html__('Mobile Title Font Size', 'cryptro'),
								'type' => 'text',
								'data-input-type' => 'pixel',
								'description' => esc_html__('Breaks at 999px', 'cryptro')
							),
							'title-font-weight' => array(
								'title' => esc_html__('Title Font Weight', 'cryptro'),
								'type' => 'text',
								'default' => 800,
								'description' => esc_html__('Eg. lighter, bold, normal, 300, 400, 600, 700, 800', 'cryptro')
							),
							'title-font-style' => array(
								'title' => esc_html__('Title Font Style', 'cryptro'),
								'type' => 'combobox',
								'options' => array(
									'normal' => esc_html__('Normal', 'cryptro'),
									'italic' => esc_html__('Italic', 'cryptro'),
								),
								'default' => 'normal'
							),
							'title-font-letter-spacing' => array(
								'title' => esc_html__('Title Font Letter Spacing', 'cryptro'),
								'type' => 'text',
								'data-input-type' => 'pixel',
								'default' => '1px'
							),
							'title-font-uppercase' => array(
								'title' => esc_html__('Title Font Uppercase', 'cryptro'),
								'type' => 'checkbox',
								'default' => 'enable'
							),	
							'caption-font-size' => array(
								'title' => esc_html__('Caption Font Size', 'cryptro'),
								'type' => 'fontslider',
								'default' => '16px'
							),
							'caption-font-weight' => array(
								'title' => esc_html__('Caption Font Weight', 'cryptro'),
								'type' => 'text',
								'default' => 400
							),
							'caption-font-style' => array(
								'title' => esc_html__('Caption Font Style', 'cryptro'),
								'type' => 'combobox',
								'options' => array(
									'normal' => esc_html__('Normal', 'cryptro'),
									'italic' => esc_html__('Italic', 'cryptro'),
								),
								'default' => 'italic'
							),
							'caption-font-letter-spacing' => array(
								'title' => esc_html__('Caption Font Letter Spacing', 'cryptro'),
								'type' => 'text',
								'data-input-type' => 'pixel',
								'default' => '0px'
							),
							'caption-font-uppercase' => array(
								'title' => esc_html__('Caption Font Uppercase', 'cryptro'),
								'type' => 'checkbox',
								'default' => 'disable'
							),
						)
					),
					'color' => array(
						'title' => esc_html__('Color', 'cryptro'),
						'options' => array(
							'left-icon-color' => array(
								'title' => esc_html__('Left Icon Color', 'cryptro'),
								'type' => 'colorpicker',
							),	
							'title-color' => array(
								'title' => esc_html__('Title Color', 'cryptro'),
								'type' => 'colorpicker',
							),	
							'title-link-hover-color' => array(
								'title' => esc_html__('Title Link Hover Color', 'cryptro'),
								'type' => 'colorpicker',
							),	
							'title-text-shadow-size' => array(
								'title' => esc_html__('Title Text Shadow Size', 'cryptro'),
								'type' => 'custom',
								'item-type' => 'padding',
								'options' => array('x', 'y', 'size'),
								'data-input-type' => 'pixel',
							),
							'title-text-shadow-color' => array(
								'title' => esc_html__('Title Text Shadow Color', 'cryptro'),
								'type' => 'colorpicker',
							),
							'caption-color' => array(
								'title' => esc_html__('Caption Color', 'cryptro'),
								'type' => 'colorpicker',
							),
						)
					),
					'spacing' => array(
						'title' => esc_html__('Spacing', 'cryptro'),
						'options' => array(
							
							'caption-spaces' => array(
								'title' => esc_html__('Space Between Caption ( And Title )', 'cryptro'),
								'type' => 'text',
								'data-input-type' => 'pixel',
								'default' => '10px'
							),
							'media-margin' => array(
								'title' => esc_html__('Left Media Margin ( Only for left title style )', 'cryptro'),
								'type' => 'custom',
								'item-type' => 'padding',
								'data-input-type' => 'pixel',
								'default' => array( 'top'=>'10px', 'right'=>'30px', 'bottom'=>'0px', 'left'=>'0px', 'settings'=>'unlink' ),
							),
							'padding-bottom' => array(
								'title' => esc_html__('Padding Bottom ( Item )', 'cryptro'),
								'type' => 'text',
								'data-input-type' => 'pixel',
								'default' => $gdlr_core_item_pdb
							)
						)
					)
				));
			}
			
			// get the preview for page builder
			static function get_preview( $settings = array() ){
				$content  = self::get_content($settings, true);
				$id = mt_rand(0, 9999);
				
				ob_start();
?><script id="gdlr-core-preview-title-<?php echo esc_attr($id); ?>" >
jQuery(document).ready(function(){
	jQuery('#gdlr-core-preview-title-<?php echo esc_attr($id); ?>').parent().gdlr_core_title_divider();
});
</script><?php	
				$content .= ob_get_contents();
				ob_end_clean();
				
				return $content;
			}			
			
			// get the content from settings
			static function get_content( $settings = array(), $preview = false ){
				global $gdlr_core_item_pdb;
				
				// default variable
				if( empty($settings) ){
					$settings = array(
						'title' => esc_html__('Default Sample Title', 'cryptro'),
						'caption' => esc_html__('Default sample caption text', 'cryptro'),
						'title-link' => '',
						'text-align' => 'left',
						'padding-bottom' => $gdlr_core_item_pdb
					);
				}

				$extra_style = '';
				if( !empty($settings['title-link']) && (!empty($settings['title-color']) || !empty($settings['title-link-hover-color'])) ){
					if( empty($settings['id']) ){
						global $gdlr_core_title_id; 
						$gdlr_core_title_id = empty($gdlr_core_title_id)? array(): $gdlr_core_title_id;
						
						// generate unique id so it does not get overwritten in admin area
						$rnd_title_id = mt_rand(0, 99999);
						while( in_array($rnd_title_id, $gdlr_core_title_id) ){
							$rnd_title_id = mt_rand(0, 99999);
						}
						$gdlr_core_title_id[] = $rnd_title_id;
						$settings['id'] = 'gdlr-core-title-item-id-' . $rnd_title_id;
					}
						
					
					if( !empty($settings['title-color']) ){
						$extra_style .= '#' . $settings['id'] . ' .gdlr-core-title-item-title a{ color:' . $settings['title-color'] . '; }';
					}
					if( !empty($settings['title-link-hover-color']) ){
						$extra_style .= '#' . $settings['id'] . ' .gdlr-core-title-item-title a:hover{ color:' . $settings['title-link-hover-color'] . '; }';
					}
					if( $preview ){
						$extra_style = '<style>' . $extra_style . '</style>';
					}else{
						gdlr_core_add_inline_style($extra_style);
						$extra_style = '';
					}
				}

				// mobile css
				if( !empty($settings['mobile-title-font-size']) ){
					if( empty($settings['id']) ){
						global $gdlr_core_title_item_id;
						$gdlr_core_title_item_id = empty($gdlr_core_title_item_id)? 1: $gdlr_core_title_item_id + 1;
						$settings['id'] = 'gdlr-core-title-item-' . $gdlr_core_title_item_id;
					}

					$mobile_style  = '@media only screen and (max-width: 999px){';
					$mobile_style .= '#' . $settings['id'] . ' .gdlr-core-title-item-title{';
					$mobile_style .= gdlr_core_esc_style(array('font-size'=>$settings['mobile-title-font-size']), false, true);
					$mobile_style .= '}';
					$mobile_style .= '}';
					gdlr_core_add_inline_style($mobile_style);
				}
				
				// default value
				$settings['text-align'] = empty($settings['text-align'])? 'left': $settings['text-align'];
				$settings['caption-position'] = empty($settings['caption-position'])? 'top': $settings['caption-position'];
				$settings['heading-tag'] = ($preview || empty($settings['heading-tag']))? 'h3': $settings['heading-tag'];

				$title_atts = array(
					'font-size' => (empty($settings['title-font-size']) || $settings['title-font-size'] == '41px')? '': $settings['title-font-size'],
					'font-weight' => (empty($settings['title-font-weight']) || $settings['title-font-weight'] == '800')? '': $settings['title-font-weight'],
					'font-style' => (empty($settings['title-font-style']) || $settings['title-font-style'] == 'normal')? '': $settings['title-font-style'],
					'letter-spacing' => (empty($settings['title-font-letter-spacing']) || $settings['title-font-letter-spacing'] == '1px')? '': $settings['title-font-letter-spacing'],
					'text-transform' => (empty($settings['title-font-uppercase']) || $settings['title-font-uppercase'] == 'enable')? '': 'none',
					'color' => empty($settings['title-color'])? '': $settings['title-color']
				);
				if( !empty($settings['title-text-shadow-color']) && !empty($settings['title-text-shadow-color']) &&
					!empty($settings['title-text-shadow-size']['x']) && !empty($settings['title-text-shadow-size']['y']) && 
					!empty($settings['title-text-shadow-size']['size']) ){
					$title_atts['text-shadow'] = "{$settings['title-text-shadow-size']['x']} {$settings['title-text-shadow-size']['y']} {$settings['title-text-shadow-size']['size']} {$settings['title-text-shadow-color']}";
				}
				$caption_atts = array(
					'font-size' => (empty($settings['caption-font-size']) || $settings['caption-font-size'] == '16px')? '': $settings['caption-font-size'],
					'font-weight' => (empty($settings['caption-font-weight']) || $settings['caption-font-weight'] == '400')? '': $settings['caption-font-weight'],
					'font-style' => (empty($settings['caption-font-style']) || $settings['caption-font-style'] == 'italic')? '': $settings['caption-font-style'],
					'letter-spacing' => (empty($settings['caption-font-letter-spacing']) || $settings['caption-font-letter-spacing'] == '0px')? '': $settings['caption-font-letter-spacing'],
					'text-transform' => (empty($settings['caption-font-uppercase']) || $settings['caption-font-uppercase'] == 'disable')? '': 'uppercase',
					'color' => empty($settings['caption-color'])? '': $settings['caption-color']
				);

				$side_border = '';
				if( $settings['text-align'] == 'left' ){
					if( !empty($settings['enable-side-border']) && $settings['enable-side-border'] == 'enable' ){
						$side_border_atts = array(
							'font-size' => (empty($settings['title-font-size']) || $settings['title-font-size'] == '41px')? '': $settings['title-font-size'],
							'border-bottom-width' => (empty($settings['side-border-size']) || $settings['side-border-size'] == '1px')? '': $settings['side-border-size'],
							'border-style' => (empty($settings['side-border-style']) || $settings['side-border-style'] == 'solid')? '': $settings['side-border-style'],
							'border-color' => empty($settings['side-border-divider-color'])? '': $settings['side-border-divider-color']
						);

						$side_border  = '<div class="gdlr-core-title-item-divider gdlr-core-skin-divider" ' . gdlr_core_esc_style($side_border_atts) . ' ></div>';
					}else if( !empty($settings['enable-side-border']) && $settings['enable-side-border'] == 'style-2' ){
						$side_border_atts = array(
							'font-size' => (empty($settings['title-font-size']) || $settings['title-font-size'] == '41px')? '': $settings['title-font-size'],
							'border-color' => empty($settings['side-border-divider-color'])? '': $settings['side-border-divider-color']
						);

						$side_border  = '<div class="gdlr-core-title-item-divider-2 gdlr-core-skin-divider" ' . gdlr_core_esc_style($side_border_atts) . ' ></div>';
					
					}
				}

				// start printing item
				$extra_class  = ' gdlr-core-' . $settings['text-align'] . '-align';
				$extra_class .= ' gdlr-core-title-item-caption-' . $settings['caption-position'];
				$extra_class .= empty($settings['no-pdlr'])? ' gdlr-core-item-pdlr': '';
				$extra_class .= empty($settings['class'])? '': ' ' . $settings['class'];
				$extra_class .= apply_filters('gdlr_core_pb_element_title_class', '', $settings);
				
				$ret  = '<div class="gdlr-core-title-item gdlr-core-item-pdb clearfix ' . esc_attr($extra_class) . '" ';
				if( !empty($settings['padding-bottom']) && $settings['padding-bottom'] != $gdlr_core_item_pdb ){
					$ret .= gdlr_core_esc_style(array('padding-bottom'=>$settings['padding-bottom']));
				}
				if( !empty($settings['id']) ){
					$ret .= ' id="' . esc_attr($settings['id']) . '" ';
				}
				$ret .= ' >';

				if( $settings['text-align'] == 'left' ){
					$media_css_atts = array(
						'margin' => (empty($settings['media-margin']) || $settings['media-margin'] == array('top'=>'10px', 'right'=>'30px', 'bottom'=>'0px', 'left'=>'0px', 'settings'=>'unlink' ))? '': $settings['media-margin']
					);

					if( empty($settings['left-media-type']) || $settings['left-media-type'] == 'image' ){
						if( !empty($settings['left-image']) ){
							$ret .= '<div class="gdlr-core-title-item-left-image gdlr-core-media-image" ' . gdlr_core_esc_style($media_css_atts) . ' >' . gdlr_core_get_image($settings['left-image']) . '</div>';
							$ret .= '<div class="gdlr-core-title-item-left-image-wrap" >';
						}
					}else if( $settings['left-media-type'] == 'icon' ){

						$media_css_atts['font-size'] = (empty($settings['icon-font-size']) || $settings['icon-font-size'] == '30px')? '': $settings['icon-font-size'];

						$ret .= '<div class="gdlr-core-title-item-left-icon" ' . gdlr_core_esc_style($media_css_atts) . ' >';
						$ret .= '<i class="' . esc_attr($settings['left-icon']) . '" ' . gdlr_core_esc_style(array(
							'color' => empty($settings['left-icon-color'])? '': $settings['left-icon-color']
						)) . ' ></i>';
						$ret .= '</div>';	
						$ret .= '<div class="gdlr-core-title-item-left-icon-wrap" >';
					}
				}

				if( $settings['caption-position'] == 'top' && !empty($settings['caption']) ){
					$caption_atts['margin-bottom'] = (empty($settings['caption-spaces']) || $settings['caption-spaces'] == '10px')? '': $settings['caption-spaces'];
					$ret .= '<span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption" ' . gdlr_core_esc_style($caption_atts) . ' >' . gdlr_core_text_filter($settings['caption']) . '</span>';
				}
				if( !empty($settings['title']) ){
					
					$ret .= '<div class="gdlr-core-title-item-title-wrap" ';
					if( $settings['caption-position'] == 'right' ){
						$ret .= gdlr_core_esc_style(array(
							'width' => empty($settings['title-width'])? '': $settings['title-width']
						));
					}
					$ret .= ' >';

					$heading_tag_class = '';
					if( $settings['heading-tag'] == 'div' ){
						$heading_tag_class = ' gdlr-core-title-font';
					} 
					$ret .= '<' . $settings['heading-tag'] . ' class="gdlr-core-title-item-title gdlr-core-skin-title ' . esc_attr($heading_tag_class) . '" ' . gdlr_core_esc_style($title_atts) . ' >';
					if( empty($settings['title-link-text']) && !empty($settings['title-link']) ){
						$ret .= '<a href="'. esc_url($settings['title-link']) . '" target="' . (empty($settings['title-link-target'])? '_self': $settings['title-link-target']) . '" >';
					}
					if( $settings['text-align'] == 'center' && !empty($settings['title-left-icon']) ){
						if( $settings['title-left-icon'] != 'none' ){
							$ret .= '<i class="' . esc_attr($settings['title-left-icon']) . '" ' . gdlr_core_esc_style(array(
								'color' => empty($settings['left-icon-color'])? '': $settings['left-icon-color']
							)) . ' ></i>';
						}
					}
					$ret .= gdlr_core_text_filter($settings['title']);
					if( empty($settings['title-link-text']) && !empty($settings['title-link']) ){
						$ret .= '</a>';
					}
					$ret .= '</' . $settings['heading-tag'] . '>';
					$ret .= $side_border;

					if( $settings['text-align'] == 'left' && !empty($settings['title-link-text']) && !empty($settings['title-link']) && $settings['caption-position'] != 'right' ){
						$ret .= '<a href="'. esc_url($settings['title-link']) . '" target="' . (empty($settings['title-link-target'])? '_self': $settings['title-link-target']) . '" class="gdlr-core-title-item-link">';
						$ret .= gdlr_core_text_filter($settings['title-link-text']) . '</a>';
					}
					$ret .= '</div>';
					if( $settings['text-align'] != 'left' && !empty($settings['title-link-text']) && !empty($settings['title-link']) && $settings['caption-position'] != 'right' ){
						$ret .= '<a href="'. esc_url($settings['title-link']) . '" target="' . (empty($settings['title-link-target'])? '_self': $settings['title-link-target']) . '" class="gdlr-core-title-item-link">';
						$ret .= gdlr_core_text_filter($settings['title-link-text']) . '</a>';
					}
					
				}
				if( $settings['caption-position'] != 'top' && !empty($settings['caption']) ){
					$caption_atts['margin-top'] = (empty($settings['caption-spaces']) || $settings['caption-spaces'] == '10px')? '': $settings['caption-spaces'];
					$ret .= '<span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption" ' . gdlr_core_esc_style($caption_atts) . ' >';
					$ret .= gdlr_core_text_filter($settings['caption']);
					if( !empty($settings['title-link-text']) && !empty($settings['title-link']) && $settings['caption-position'] == 'right' ){
						$ret .= '<a href="'. esc_url($settings['title-link']) . '" target="' . (empty($settings['title-link-target'])? '_self': $settings['title-link-target']) . '" class="gdlr-core-title-item-link">';
						$ret .= gdlr_core_text_filter($settings['title-link-text']) . '</a>';
					}
					$ret .= '</span>';
				}
				
				if( $settings['text-align'] == 'left' ){

					if( ((empty($settings['left-media-type']) || $settings['left-media-type'] == 'image') && !empty($settings['left-image'])) ||
						(!empty($settings['left-media-type']) && $settings['left-media-type'] == 'icon') ){

						$ret .= '</div>'; // gdlr-core-title-item-left-image-wrap
					}
				}

				$ret .= '</div>' . $extra_style;

				return $ret;
			}
			
		} // gdlr_core_pb_element_title
	} // class_exists