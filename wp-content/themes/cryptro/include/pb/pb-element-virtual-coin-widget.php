<?php
	/*	
	*	Goodlayers Item For Page Builder
	*/
	if( class_exists('gdlr_core_page_builder_element') ){
		gdlr_core_page_builder_element::add_element('virtual-coin-widget', 'cryptro_pb_element_virtual_coin_widget'); 
	}

	if( !class_exists('cryptro_pb_element_virtual_coin_widget') ){
		class cryptro_pb_element_virtual_coin_widget{
			
			// get the element settings
			static function get_settings(){
				return array(
					'icon' => '',
					'title' => esc_html__('Virtual Coin Widget', 'cryptro')
				);
			}
			
			// return the element options
			static function get_options(){
				global $gdlr_core_item_pdb;
				
				return array(
					'general' => array(
						'title' => esc_html__('General', 'cryptro'),
						'options' => array(
							'type' => array(
								'title' => esc_html__('Type', 'cryptro'),
								'type' => 'combobox',
								'options' => array(
									'vcw-change-label' => esc_html__('Change Label', 'cryptro'),
									'vcw-price-label' => esc_html__('Price Label', 'cryptro'),
									'vcw-change-big-label' => esc_html__('Change Big Label', 'cryptro'),
									'vcw-price-big-label' => esc_html__('Price Big Label', 'cryptro'),
									'vcw-change-card' => esc_html__('Change Card', 'cryptro'),
									'vcw-price-card' => esc_html__('Price Card', 'cryptro'),
									'vcw-full-card' => esc_html__('Full Card', 'cryptro'),
									'vcw-table' => esc_html__('Table', 'cryptro'),
									'vcw-small-table' => esc_html__('Small Table', 'cryptro'),
									'vcw-converter' => esc_html__('Converter', 'cryptro'),
								)
							),
							'color' => array(
								'title' => esc_html__('Color', 'cryptro'),
								'type' => 'combobox', 
								'options' => array(
									'white' => esc_html__('White','cryptro'),
									'red' => esc_html__('Red','cryptro'),
									'pink' => esc_html__('Pink','cryptro'),
									'purple' => esc_html__('Purple','cryptro'),
									'deep_purple' => esc_html__('Deep Purple','cryptro'),
									'indigo' => esc_html__('Indigo','cryptro'),
									'blue' => esc_html__('Blue','cryptro'),
									'light_blue' => esc_html__('Light Blue','cryptro'),
									'cyan' => esc_html__('Cyan','cryptro'),
									'teal' => esc_html__('Teal','cryptro'),
									'green' => esc_html__('Green','cryptro'),
									'light_green' => esc_html__('Light Green','cryptro'),
									'lime' => esc_html__('Lime','cryptro'),
									'yellow' => esc_html__('Yellow','cryptro'),
									'amber' => esc_html__('Amber','cryptro'),
									'orange' => esc_html__('Orange','cryptro'),
									'deep_orange' => esc_html__('Deep Orange','cryptro'),
									'brown' => esc_html__('Brown','cryptro'),
									'grey' => esc_html__('Grey','cryptro'),
									'blue_grey' => esc_html__('Blue Grey','cryptro'),
									'black' => esc_html__('Black','cryptro'),
								),
							),
							'symbol' => array(
								'title' => esc_html__('Coin Symbol', 'cryptro'),
								'type' => 'text',
								'default' => 'BTC',
								'condition' => array('type' => array('vcw-change-label', 'vcw-price-label', 'vcw-change-big-label', 'vcw-price-big-label', 'vcw-change-card', 'vcw-price-card', 'vcw-full-card') ),
								'description' => esc_html__('You can see list of all coins here.', 'cryptro') . 
									' <a href="' . 'https://coinmarketcap.com/all/views/all/' . '" >https://coinmarketcap.com/all/views/all/</a>'
							),
							'symbols' => array(
								'title' => esc_html__('Coin Symbols', 'cryptro'),
								'type' => 'text',
								'default' => '',
								'condition' => array('type' => array('vcw-table', 'vcw-small-table') ),
								'description' => esc_html__('Fill multiple currencies separated by comma.', 'cryptro') . ' ' .
									esc_html__('If symbols is empty, this will display top market cap cryptocurrencies.', 'cryptro') . ' ' . 
									esc_html__('You can see list of all coins here.', 'cryptro') . 
									' <a href="' . 'https://coinmarketcap.com/all/views/all/' . '" >https://coinmarketcap.com/all/views/all/</a>'
							),
							'count' => array(
								'title' => esc_html__('Count', 'cryptro'),
								'type' => 'text',
								'default' => '10',
								'condition' => array('type' => array('vcw-table', 'vcw-small-table') ),
							),
							'currency' => array(
								'title' => esc_html__('Currency', 'cryptro'),
								'type' => 'text',
								'default' => 'USD',
								'condition' => array( 'type' => array('vcw-price-label', 'vcw-table', 'vcw-small-table') )
							),
							'currency1' => array(
								'title' => esc_html__('Currency', 'cryptro'),
								'type' => 'text',
								'default' => 'USD',
								'condition' => array( 'type' => array('vcw-price-big-label', 'vcw-price-card', 'vcw-full-card') )
							),
							'currency2' => array(
								'title' => esc_html__('Currency', 'cryptro'),
								'type' => 'text',
								'default' => 'EUR',
								'condition' => array( 'type' => array('vcw-price-big-label', 'vcw-price-card', 'vcw-full-card') )
							),
							'currency3' => array(
								'title' => esc_html__('Currency', 'cryptro'),
								'type' => 'text',
								'default' => 'GBP',
								'condition' => array( 'type' => array('vcw-price-big-label', 'vcw-price-card', 'vcw-full-card') )
							),
							'url' => array(
								'title' => esc_html__('URL', 'cryptro'),
								'type' => 'text',
								'condition' => array('type' => array('vcw-change-label', 'vcw-price-label', 'vcw-change-big-label', 'vcw-price-big-label', 'vcw-change-card', 'vcw-price-card', 'vcw-full-card') ),
							),
							'target' => array(
								'title' => esc_html__('URL Target', 'cryptro'),
								'type' => 'combobox',
								'options' => array(
									'_blank' => esc_html__('Open the URL in new window.', 'cryptro'),
									'_self' => esc_html__('Open the URL in same window', 'cryptro'),
								),
								'condition' => array('type' => array('vcw-change-label', 'vcw-price-label', 'vcw-change-big-label', 'vcw-price-big-label', 'vcw-change-card', 'vcw-price-card', 'vcw-full-card') ),
							),
							'symbol1' => array(
								'title' => esc_html__('Coin Symbol 1', 'cryptro'),
								'type' => 'text',
								'default' => 'BTC',
								'condition' => array('type' => array('vcw-converter') ),
								'description' => esc_html__('You can see list of all coins here.', 'cryptro') . 
									' <a href="' . 'https://coinmarketcap.com/all/views/all/' . '" >https://coinmarketcap.com/all/views/all/</a>'
							),
							'symbol2' => array(
								'title' => esc_html__('Coin Symbol 2', 'cryptro'),
								'type' => 'text',
								'default' => 'USD',
								'condition' => array('type' => array('vcw-converter') ),
								'description' => esc_html__('You can see list of all coins here.', 'cryptro') . 
									' <a href="' . 'https://coinmarketcap.com/all/views/all/' . '" >https://coinmarketcap.com/all/views/all/</a>'
							),
							'initial' => array(
								'title' => esc_html__('initial', 'cryptro'),
								'type' => 'text',
								'default' => '1',
								'condition' => array('type' => array('vcw-converter')),
								'description' => esc_html__('Initial value for symbol 1', 'cryptro')
							),
							'fullwidth' => array(
								'title' => esc_html__('Full Width', 'cryptro'),
								'type' => 'combobox',
								'options' => array(
									'no' => esc_html__('No', 'cryptro'),
									'yes' => esc_html__('Yes', 'cryptro'),
								)
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
						'type' => 'vcw-change-label', 'color' => 'white', 'symbol' => 'btc', 'url' => '', 'target' => '_blank', 'fullwidth' => 'no',
						'padding-bottom' => $gdlr_core_item_pdb
					);
				}
				$settings['symbol'] = empty($settings['symbol'])? '': strtoupper($settings['symbol']);
				$settings['symbols'] = empty($settings['symbols'])? '': strtoupper($settings['symbols']);
				$settings['symbol1'] = empty($settings['symbol1'])? '': strtoupper($settings['symbol1']);
				$settings['symbol2'] = empty($settings['symbol2'])? '': strtoupper($settings['symbol2']);
				$settings['currency'] = empty($settings['currency'])? '': strtoupper($settings['currency']);
				
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
				if( !class_exists('VCW_Shortcodes') ){
					$message = wp_kses(__('Please install and activate the "Virtual Coin Widget" plugin to show the content of this item.', 'cryptro'), 
						array( 'a' => array('target'=>array(), 'href'=>array()) ));
				}else{

					// generate shortcode
					$shortcode = '[' . $settings['type'] . ' ';
					switch($settings['type']){
						case 'vcw-change-label': 
						case 'vcw-change-big-label': 
						case 'vcw-change-card': 
							$shortcode .= self::get_shortcode_atts($settings, array('color', 'symbol', 'url', 'target', 'fullwidth')); 
							break;
						case 'vcw-price-label': 
							$shortcode .= self::get_shortcode_atts($settings, array('color', 'symbol', 'currency', 'url', 'target', 'fullwidth')); 
							break;
						case 'vcw-price-label': 
						case 'vcw-price-card': 
						case 'vcw-full-card': 
							$shortcode .= self::get_shortcode_atts($settings, array('color', 'symbol', 'currency1', 'currency2', 'currency3', 'url', 'target', 'fullwidth')); 
							break;
						case 'vcw-table': 
						case 'vcw-small-table': 
							$shortcode .= self::get_shortcode_atts($settings, array('color', 'symbols', 'count', 'currency', 'fullwidth')); 
							break;
						case 'vcw-converter':
							$shortcode .= self::get_shortcode_atts($settings, array('color', 'symbol1', 'symbol2', 'initial', 'fullwidth')); 
							break;
					}
					$shortcode .= ']';
					
					if( $preview ){
						$message = $shortcode;
					}else{
						$ret .= do_shortcode($shortcode);
					}
				}
				if( !empty($message) ){
					$ret .= '<div class="gdlr-core-external-plugin-message">' . gdlr_core_escape_content($message) . '</div>';
				}
				
				$ret .= '</div>';
				
				return $ret;
			}

			static function get_shortcode_atts($settings, $types){
				$ret = '';
				foreach( $types as $type ){
					if( !empty($settings[$type]))
					$ret .= $type . '="' . esc_attr($settings[$type]) . '" '; 
				}

				return $ret;
			}
			
		} // cryptro_pb_element_virtual_coin_widget
	} // class_exists	