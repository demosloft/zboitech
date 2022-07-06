<?php
	/*	
	*	Goodlayers Item For Page Builder
	*/
	
	if( class_exists('gdlr_core_page_builder_element') ){
		gdlr_core_page_builder_element::add_element('textbox-with-textdivider', 'cryptro_pb_element_textbox_with_textdivider'); 
	}
	
	if( !class_exists('cryptro_pb_element_textbox_with_textdivider') ){
		class cryptro_pb_element_textbox_with_textdivider{
			
			// get the element settings
			static function get_settings(){
				return array(
					'icon' => '',
					'title' => esc_html__('Text Box With Text Divider', 'cryptro')
				);
			}
			
			// return the element options
			static function get_options(){
				global $gdlr_core_item_pdb;
				
				return array(
					'general' => array(
						'title' => esc_html__('General', 'cryptro'),
						'options' => array(	
							'left-text' => array(
								'title' => esc_html__('Left Text', 'cryptro'),
								'type' => 'textarea'
							),
							'right-text' => array(
								'title' => esc_html__('Right Text', 'cryptro'),
								'type' => 'textarea'
							),
							'divider-text' => array(
								'title' => esc_html__('Divider Text', 'cryptro'),
								'type' => 'textarea'
							),
						)
					),
					'typography' => array(
						'title' => esc_html__('Typography', 'cryptro'),
						'options' => array(
							'left-text-font-size' => array(
								'title' => esc_html__('Left Text Font Size', 'cryptro'),
								'type' => 'text',
								'data-input-type' => 'pixel'
							),
							'left-text-font-weight' => array(
								'title' => esc_html__('Left Text Font Weight', 'cryptro'),
								'type' => 'text',
								'description' => esc_html__('Eg. lighter, bold, normal, 300, 400, 600, 700, 800', 'cryptro')
							),
							'left-text-letter-spacing' => array(
								'title' => esc_html__('Left Text Letter Spacing', 'cryptro'),
								'type' => 'text',
								'data-input-type' => 'pixel',
							),
							'left-text-text-transform' => array(
								'title' => esc_html__('Left Text Text Transform', 'cryptro'),
								'type' => 'combobox',
								'options' => array(
									'uppercase' => esc_html__('Uppercase', 'cryptro'),
									'lowercase' => esc_html__('Lowercase', 'cryptro'),
									'capitalize' => esc_html__('Capitalize', 'cryptro'),
									'none' => esc_html__('None', 'cryptro'),
								),
								'default' => 'uppercase'
							),
							'right-text-font-size' => array(
								'title' => esc_html__('Right Text Font Size', 'cryptro'),
								'type' => 'text',
								'data-input-type' => 'pixel'
							),
							'right-text-font-weight' => array(
								'title' => esc_html__('Right Text Font Weight', 'cryptro'),
								'type' => 'text',
								'description' => esc_html__('Eg. lighter, bold, normal, 300, 400, 600, 700, 800', 'cryptro')
							),
							'right-text-letter-spacing' => array(
								'title' => esc_html__('Right Text Letter Spacing', 'cryptro'),
								'type' => 'text',
								'data-input-type' => 'pixel',
							),
							'right-text-text-transform' => array(
								'title' => esc_html__('Right Text Text Transform', 'cryptro'),
								'type' => 'combobox',
								'options' => array(
									'uppercase' => esc_html__('Uppercase', 'cryptro'),
									'lowercase' => esc_html__('Lowercase', 'cryptro'),
									'capitalize' => esc_html__('Capitalize', 'cryptro'),
									'none' => esc_html__('None', 'cryptro'),
								),
								'default' => 'none'
							),
						)
					),
					'spacing' => array(
						'title' => esc_html__('Spacing', 'cryptro'),
						'options' => array(
							'left-text-top-padding' => array(
								'title' => esc_html__('Left Text Top Padding', 'cryptro'),
								'type' => 'text',
								'data-input-type' => 'pixel'
							),
							'right-text-top-padding' => array(
								'title' => esc_html__('Right Text Top Padding', 'cryptro'),
								'type' => 'text',
								'data-input-type' => 'pixel'
							),
							'padding-bottom' => array(
								'title' => esc_html__('Padding Bottom', 'cryptro'),
								'type' => 'text',
								'data-input-type' => 'pixel',
								'default' => $gdlr_core_item_pdb
							),
							'margin-bottom' => array(
								'title' => esc_html__('Margin Bottom', 'cryptro'),
								'type' => 'text',
								'data-input-type' => 'pixel',
							),
						)
					),
					'color' => array(
						'title' => esc_html__('Color', 'cryptro'),
						'options' => array(
							'left-text-color' => array(
								'title' => esc_html__('Left Text Color', 'cryptro'),
								'type' => 'colorpicker',
							),
							'right-text-color' => array(
								'title' => esc_html__('Right Text Color', 'cryptro'),
								'type' => 'colorpicker',
							),
							'divider-color' => array(
								'title' => esc_html__('Divider Color', 'cryptro'),
								'type' => 'colorpicker',
							),
							'divider-text-color' => array(
								'title' => esc_html__('Divider Text Color', 'cryptro'),
								'type' => 'colorpicker',
							),
						)
					),
				);
			}
			
			// get the preview for page builder
			static function get_preview( $settings = array() ){
				$content  = self::get_content($settings);
				$id = mt_rand(0, 9999);
				
				ob_start();
?><script id="gdlr-core-preview-textbox-with-textdivider-<?php echo esc_attr($id); ?>" >
jQuery(document).ready(function(){
	// jQuery('#gdlr-core-preview-textbox-with-textdivider-<?php echo esc_attr($id); ?>').parent().gdlr_core_divider();
});
</script><?php	
				$content .= ob_get_contents();
				ob_end_clean();
				
				return $content;
			}			
			
			// get the content from settings
			static function get_content( $settings = array() ){
				global $gdlr_core_item_pdb;
				
				// default variable
				if( empty($settings) ){
					$settings = array(
						'padding-bottom' => $gdlr_core_item_pdb
					);
				}
				
				// start printing item
				$ret  = '<div class="gdlr-core-tbwtd-item gdlr-core-item-pdb gdlr-core-item-pdlr clearfix" ';
				$ret .= gdlr_core_esc_style(array(
					'padding-bottom' => (empty($settings['padding-bottom']) || $settings['padding-bottom'] == $gdlr_core_item_pdb )? '': $settings['padding-bottom'],
					'margin-bottom' => empty($settings['margin-bottom'])? '': $settings['margin-bottom']
				));
				if( !empty($settings['id']) ){
					$ret .= ' id="' . esc_attr($settings['id']) . '" ';
				}
				$ret .= ' >';

				if( !empty($settings['left-text']) ){
					$ret .= '<div class="gdlr-core-tbwtd-item-left-text" ' . gdlr_core_esc_style(array(
						'color' => empty($settings['left-text-color'])? '': $settings['left-text-color'],
						'padding-top' => empty($settings['left-text-top-padding'])? '': $settings['left-text-top-padding'],
						'font-size' => empty($settings['left-text-font-size'])? '': $settings['left-text-font-size'],
						'font-weight' => empty($settings['left-text-font-weight'])? '': $settings['left-text-font-weight'],
						'letter-spacing' => empty($settings['left-text-letter-spacing'])? '': $settings['left-text-letter-spacing'],
						'text-transform' => (empty($settings['left-text-text-transform']) || $settings['left-text-text-transform'] == 'uppercase')? '': $settings['left-text-text-transform'],
					)) . ' >' . gdlr_core_content_filter($settings['left-text']) . '</div>';
				}
				if( !empty($settings['right-text']) ){
					$ret .= '<div class="gdlr-core-tbwtd-item-right-text" ' . gdlr_core_esc_style(array(
						'color' => empty($settings['right-text-color'])? '': $settings['right-text-color'],
						'padding-top' => empty($settings['right-text-top-padding'])? '': $settings['right-text-top-padding'],
						'font-size' => empty($settings['right-text-font-size'])? '': $settings['right-text-font-size'],
						'font-weight' => empty($settings['right-text-font-weight'])? '': $settings['right-text-font-weight'],
						'letter-spacing' => empty($settings['right-text-letter-spacing'])? '': $settings['right-text-letter-spacing'],
						'text-transform' => (empty($settings['right-text-text-transform']) || $settings['right-text-text-transform'] == 'none')? '': $settings['right-text-text-transform'],
					)) . ' >' . gdlr_core_content_filter($settings['right-text']) . '</div>';
				}

				if( !empty($settings['divider-text']) ){
					$ret .= '<div class="gdlr-core-tbwtd-item-divider-text" ' . gdlr_core_esc_style(array(
						'color' => empty($settings['divider-text-color'])? '': $settings['divider-text-color'], 
					)) . ' >';
					$ret .= gdlr_core_text_filter($settings['divider-text']);
					$ret .= '<span class="gdlr-core-tbwtd-item-divider-line" ' . gdlr_core_esc_style(array(
						'border-color' => empty($settings['divider-color'])? '': $settings['divider-color'], 
					)) . ' ></span>';
					$ret .= '</div>';
				}

				$ret .= '</div>'; // gdlr-core-tbwtd-item
				
				return $ret;
			}
			
		} // gdlr_core_pb_element_divider
	} // class_exists	