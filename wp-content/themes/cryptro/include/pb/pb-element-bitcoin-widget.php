<?php
	/*	
	*	Goodlayers Item For Page Builder
	*/
	
	if( class_exists('gdlr_core_page_builder_element') ){
		gdlr_core_page_builder_element::add_element('bitcoin-widget', 'cryptro_pb_element_bitcoin_widget'); 
	}
	
	if( !class_exists('cryptro_pb_element_bitcoin_widget') ){
		class cryptro_pb_element_bitcoin_widget{
			
			// get the element settings
			static function get_settings(){
				return array(
					'icon' => 'fa-bitcoin',
					'title' => esc_html__('Bitcoin Widget', 'cryptro')
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
									'bc-price-chart' => esc_html__('Bitcoin Price Chart Widget', 'cryptro'),
									'simple-bc-price' => esc_html__('Simple Bitcoin Price Widget', 'cryptro'),
									'news-headlines-widget' => esc_html__('Bitcoin News Headlines Widget', 'cryptro'),
									'forum-topic-widget' => esc_html__('Forum Topic Widget', 'cryptro'),
									'news-ticker' => esc_html__('News Ticker', 'cryptro'),
								)
							),
							'theme' => array(
								'title' => esc_html__('Theme', 'cryptro'),
								'type' => 'combobox',
								'options' => array(
									'dark' => esc_html__('Dark', 'cryptro'),
									'light' => esc_html__('Light', 'cryptro'),
								)
							),
							'currency' => array(
								'title' => esc_html__('Currency', 'cryptro'),
								'type' => 'text',
								'default' => 'usd',
								'condition' => array('type' => array('simple-bc-price', 'news-headlines-widget') )
							),
							'entries' => array(
								'title' => esc_html__('Entries Number', 'cryptro'),
								'type' => 'text',
								'default' => '5',
								'condition' => array('type' => array('news-headlines-widget', 'forum-topic-widget'))
							)
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
						'padding-bottom' => $gdlr_core_item_pdb,
					);
				}
				
				$settings['type'] = empty($settings['type'])? 'bc-price-chart': $settings['type'];

				// start printing item
				$extra_class  = empty($settings['class'])? '': $settings['class'];
				$ret  = '<div class="gdlr-core-bitcoin-widget-item gdlr-core-item-pdlr gdlr-core-item-pdb ' . esc_attr($extra_class) . '" ';
				if( !empty($settings['padding-bottom']) && $settings['padding-bottom'] != $gdlr_core_item_pdb ){
					$ret .= gdlr_core_esc_style(array('padding-bottom'=>$settings['padding-bottom']));
				}
				if( !empty($settings['id']) ){
					$ret .= ' id="' . esc_attr($settings['id']) . '" ';
				}
				$ret .= ' >';
				
				// display
				if( $preview ){
					$types = array(
						'bc-price-chart' => esc_html__('Bitcoin Price Chart Widget', 'cryptro'),
						'simple-bc-price' => esc_html__('Simple Bitcoin Price Widget', 'cryptro'),
						'news-headlines-widget' => esc_html__('Bitcoin News Headlines Widget', 'cryptro'),
						'forum-topic-widget' => esc_html__('Forum Topic Widget', 'cryptro'),
						'news-ticker' => esc_html__('News Ticker', 'cryptro'),
					);
					$message = $types[$settings['type']];
				}else{
					switch($settings['type']){
						case 'bc-price-chart': 
							$ret .= '<div class="btcwdgt-chart" ';
							$ret .= empty($settings['theme'])? '': self::get_scrirpt_atts('theme', $settings['theme']);
							$ret .= ' ></div>';
							break;
						case 'simple-bc-price': 
							$ret .= '<div class="btcwdgt-price" ';
							$ret .= empty($settings['theme'])? '': self::get_scrirpt_atts('theme', $settings['theme']);
							$ret .= empty($settings['currency'])? '': self::get_scrirpt_atts('currency', $settings['currency']);
							$ret .= ' ></div>';
							break;
						case 'news-headlines-widget': 
							$ret .= '<div class="btcwdgt-news" ';
							$ret .= empty($settings['theme'])? '': self::get_scrirpt_atts('theme', $settings['theme']);
							$ret .= empty($settings['currency'])? '': self::get_scrirpt_atts('currency', $settings['currency']);
							$ret .= empty($settings['entries'])? '': self::get_scrirpt_atts('entries', $settings['entries']);
							$ret .= ' ></div>';
							break;
						case 'forum-topic-widget': 
							$ret .= '<div class="btcwdgt-forum" ';
							$ret .= empty($settings['theme'])? '': self::get_scrirpt_atts('theme', $settings['theme']);
							$ret .= empty($settings['entries'])? '': self::get_scrirpt_atts('entries', $settings['entries']);
							$ret .= ' ></div>';
							break;
						case 'news-ticker': 
							$ret .= '<div class="btcwdgt-news-ticker" ';
							$ret .= empty($settings['theme'])? '': self::get_scrirpt_atts('theme', $settings['theme']);
							$ret .= ' ></div>';
							break;
					}
				}
				if( !empty($message) ){
					$ret .= '<div class="gdlr-core-external-plugin-message">' . gdlr_core_escape_content($message) . '</div>';
				}
				
				$ret .= '</div>';

				add_action('wp_footer', 'cryptro_pb_element_bitcoin_widget::set_footer_script');
				
				return $ret;
			}

			static function get_scrirpt_atts($key, $value){
				switch($key){
					case 'theme': 
						if( $value == 'light' ){
							return ' bw-theme="light"';
						} 
						break;
					case 'currency': 
						if( strtolower($value) != 'usd' ){
							return ' bw-cur="' . esc_attr($value) . '"';
						}
						break;
					case 'entries':
						return ' bw-entries="' . (empty($value)? 5: esc_attr($value)) . '"';
						break;
				}

				return '';
			}

			static function set_footer_script(){
				global $bitcoin_widget_script;
				if( $bitcoin_widget_script ){ return; }
?>
<script>
  (function(b,i,t,C,O,I,N) {
    window.addEventListener('load',function() {
      if(b.getElementById(C))return;
      I=b.createElement(i),N=b.getElementsByTagName(i)[0];
      I.src=t;I.id=C;N.parentNode.insertBefore(I, N);
    },false)
  })(document,'script','https://widgets.bitcoin.com/widget.js','btcwdgt');
</script>
<?php
				$bitcoin_widget_script = true;
			}
			
		} // gdlr_core_pb_element_bitcoin_widget
	} // class_exists		