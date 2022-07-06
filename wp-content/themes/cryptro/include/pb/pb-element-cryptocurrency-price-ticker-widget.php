<?php
	/*	
	*	Goodlayers Item For Page Builder
	*/
	if( class_exists('gdlr_core_page_builder_element') ){
		gdlr_core_page_builder_element::add_element('cryptocurrency-price-ticker-widget', 'cryptro_pb_element_cryptocurrency_price_ticker_widget'); 
	}

	if( !class_exists('cryptro_pb_element_cryptocurrency_price_ticker_widget') ){
		class cryptro_pb_element_cryptocurrency_price_ticker_widget{
			
			// get the element settings
			static function get_settings(){
				return array(
					'icon' => '',
					'title' => esc_html__('Cryptocurrency Price Ticker Widget', 'cryptro')
				);
			}
			
			// return the element options
			static function get_options(){
				global $gdlr_core_item_pdb;
				
				return array(
					'general' => array(
						'title' => esc_html__('General', 'cryptro'),
						'options' => array(
							'widget-id' => array(
								'title' => esc_html__('Select Widget', 'cryptro'),
								'type' => 'combobox',
								'options' => 'post_type',
								'options-data' => 'ccpw'
							),
						)
					),
					'spacing' => array(
						'title' => esc_html__('Spacing', 'cryptro'),
						'options' => array(
							'padding-bottom' => array(
								'title' => esc_html__('Padding Bottom', 'cryptro'),
								'type' => 'text',
								'data-input-type' => 'pixel',
								'default' => $gdlr_core_item_pdb
							),
						)
					),
				);
			}
			
			// get the preview for page builder
			static function get_preview( $settings = array() ){
				$content  = self::get_content($settings, true);			
				return $content;
			}			
			
			// get the content from settings
			static function get_content( $settings = array(), $preview = false ){
				global $gdlr_core_item_pdb;
				
				// default variable
				if( empty($settings) ){
					$settings = array(
						'id' => '',
						'padding-bottom' => $gdlr_core_item_pdb
					);
				}
				
				// start printing item
				$extra_class = empty($settings['class'])? '': $settings['class'];
				$ret  = '<div class="gdlr-core-virtual-coin-widget-item gdlr-core-item-pdlr gdlr-core-item-pdb ' . esc_attr($extra_class) . '" ';
				if( !empty($settings['padding-bottom']) && $settings['padding-bottom'] != $gdlr_core_item_pdb ){
					$ret .= gdlr_core_esc_style(array('padding-bottom'=>$settings['padding-bottom']));
				}
				if( !empty($settings['id']) ){
					$ret .= ' id="' . esc_attr($settings['id']) . '" ';
				}
				$ret .= ' >';
				
				// display
				if( !class_exists('Crypto_Currency_Price_Widget') ){
					$message = wp_kses(__('Please install and activate the "Cryptocurrency Price Ticker Widget" plugin to show the content of this item.', 'cryptro'), 
						array( 'a' => array('target'=>array(), 'href'=>array()) ));
				}else{
					if( empty($settings['widget-id']) ){
						$message = esc_html__('Please edit the item to select the widget ID.', 'cryptro');
					}else{
						$shortcode = '[ccpw id="' . esc_attr($settings['widget-id']) . '" ]';
						if( $preview ){
							$message = $shortcode;
						}else{
							$ret .= do_shortcode($shortcode);
						}
					}					
				}
				if( !empty($message) ){
					$ret .= '<div class="gdlr-core-external-plugin-message">' . gdlr_core_escape_content($message) . '</div>';
				}
				
				$ret .= '</div>';
				
				return $ret;
			}
			
		} // cryptro_pb_element_cryptocurrency_price_ticker_widget
	} // class_exists	