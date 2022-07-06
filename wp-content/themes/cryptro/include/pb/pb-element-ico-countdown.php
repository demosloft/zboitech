<?php
	/*	
	*	Goodlayers Item For Page Builder
	*/
	
	if( class_exists('gdlr_core_page_builder_element') ){
		gdlr_core_page_builder_element::add_element('ico-countdown', 'cryptro_pb_element_ico_countdown'); 
	}
	
	if( !class_exists('cryptro_pb_element_ico_countdown') ){
		class cryptro_pb_element_ico_countdown{
			
			// get the element settings
			static function get_settings(){
				return array(
					'icon' => 'fa-clock-o',
					'title' => esc_html__('ICO Countdown', 'cryptro')
				);
			}
			
			// return the element options
			static function get_options(){
				global $gdlr_core_item_pdb;
				
				return array(
					'general' => array(
						'title' => esc_html__('General', 'cryptro'),
						'options' => array(
							'title' => array(
								'title' => esc_html__('Title', 'cryptro'),
								'type' => 'text',
								'default' => esc_html__('Title', 'cryptro'),
							),
							'caption' => array(
								'title' => esc_html__('Caption', 'cryptro'),
								'type' => 'text',
								'default' => esc_html__('Caption', 'cryptro'),
							),
							'date' => array(
								'title' => esc_html__('Select Date', 'cryptro'),
								'type' => 'datepicker',
								'default' => date('Y') . '-12-31'
							),
							'button-style' => array(
								'title' => esc_html__('Button Style', 'cryptro'),
								'type' => 'combobox',
								'options' => array(
									'transparent' => esc_html__('Transparent With Border', 'cryptro'),
									'solid' => esc_html__('Solid', 'cryptro'),
									'gradient' => esc_html__('Gradient - Vertical', 'cryptro'),
									'gradient-v' => esc_html__('Gradient - Horizontal', 'cryptro'),
								),
								'default' => 'transparent',
								'description' => esc_html__('Use skin to define the color for non-transparent style.', 'goodlayers-core')
							),
							'button-text' => array(
								'title' => esc_html__('Button Text', 'cryptro'),
								'type' => 'text',
								'default' => esc_html__('Button Text', 'cryptro'),
							),
							'button-link' => array(
								'title' => esc_html__('Button Link', 'cryptro'),
								'type' => 'text',
							),
							'bottom-text' => array(
								'title' => esc_html__('Bottom Text', 'cryptro'),
								'type' => 'text',
								'default' => esc_html__('Bottom Text', 'cryptro'),
							),
							'bottom-text-caption' => array(
								'title' => esc_html__('Bottom Text Caption', 'cryptro'),
								'type' => 'text',
								'default' => esc_html__('Bottom Text Caption', 'cryptro'),
							),
						)
					),
					'general-2' => array(
						'title' => esc_html__('General 2', 'cryptro'),
						'options' => array(
							'progress-left-text' => array(
								'title' => esc_html__('Progress Left Text', 'cryptro'),
								'type' => 'text',
								'default' => esc_html__('Progress Left Text', 'cryptro'),
							),
							'progress-left-caption' => array(
								'title' => esc_html__('Progress Left Caption', 'cryptro'),
								'type' => 'text',
								'default' => esc_html__('Progress Left Caption', 'cryptro'),
							),
							'progress-right-text' => array(
								'title' => esc_html__('Progress Right Text', 'cryptro'),
								'type' => 'text',
								'default' => esc_html__('Progress Left Text', 'cryptro'),
							),
							'progress-right-caption' => array(
								'title' => esc_html__('Progress Right Caption', 'cryptro'),
								'type' => 'text',
								'default' => esc_html__('Progress Left Caption', 'cryptro'),
							),
							'progress-percent' => array(
								'title' => esc_html__('Progress Percent', 'cryptro'),
								'type' => 'text',
								'default' => 50,
							),
							'bottom-banner-text' => array(
								'title' => esc_html__('Bottom Bannner Text', 'cryptro'),
								'type' => 'text',
								'default' => esc_html__('Bottom Bannner Text', 'cryptro'),
							),
							'bottom-banner-image' => array(
								'title' => esc_html__('Bottom Bannner Image', 'cryptro'),
								'type' => 'upload',
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
				$content  = self::get_content($settings);
				$id = mt_rand(0, 9999);
				
				ob_start();
?><script id="gdlr-core-preview-ico-countdown-<?php echo esc_attr($id); ?>" >
jQuery(document).ready(function(){
	var ico_countdown_item = jQuery('#gdlr-core-preview-ico-countdown-<?php echo esc_attr($id); ?>').parent();
	ico_countdown_item.gdlr_core_countdown_item();
	ico_countdown_item.gdlr_core_skill_bar();
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
						'date' => date('Y') . '-12-31', 
						'title' => esc_html__('Title', 'cryptro'), 
						'caption' => esc_html__('Caption', 'cryptro'),
						'button-text' => esc_html__('Button Text', 'cryptro'), 
						'button-link' => '#', 
						'bottom-text' => esc_html__('Bottom Text', 'cryptro'), 
						'bottom-text-caption' => esc_html__('Bottom Text Caption', 'cryptro'),
						'bottom-banner-text' => esc_html__('Bottom Banner Text', 'cryptro'),
						'progress-left-text' => esc_html__('Progress Left Text', 'cryptro'),
						'progress-left-caption' => esc_html__('Progress Left Caption', 'cryptro'),
						'progress-right-text' => esc_html__('Progress Right Text', 'cryptro'),
						'progress-right-caption' => esc_html__('Progress Right Caption', 'cryptro'),
						'progress-percent' => 50,
						'padding-bottom' => $gdlr_core_item_pdb
					);
				}
				
				// start printing item
				$extra_class  = empty($settings['class'])? '': $settings['class'];
				$ret  = '<div class="gdlr-core-ico-countdown-item gdlr-core-item-pdlr gdlr-core-item-pdb ' . esc_attr($extra_class) . '" ';
				if( !empty($settings['padding-bottom']) && $settings['padding-bottom'] != $gdlr_core_item_pdb ){
					$ret .= gdlr_core_esc_style(array('padding-bottom'=>$settings['padding-bottom']));
				}
				if( !empty($settings['id']) ){
					$ret .= ' id="' . esc_attr($settings['id']) . '" ';
				}
				$ret .= ' >';

				// title wrap
				if( !empty($settings['title']) || !empty($settings['caption']) ){
					$ret .= '<div class="gdlr-core-ico-countdown-item-title-wrap" >';
					if( !empty($settings['title']) ){
						$ret .= '<h3 class="gdlr-core-ico-countdown-item-title" >' . gdlr_core_text_filter($settings['title']) . '</h3>';
					}
					if( !empty($settings['caption']) ){
						$ret .= '<div class="gdlr-core-ico-countdown-item-caption" >' . gdlr_core_text_filter($settings['caption']) . '</div>';
					}
					$ret .= '</div>';
				}
				
				// countdown timer
				if( !empty($settings['date']) ){
					$due_date = strtotime($settings['date']);	
					$current_date = strtotime(current_time('mysql'));

					if( $due_date > $current_date ){
						$total_time = $due_date - $current_date;
						$day = intval($total_time / 86400);
						
						$total_time = $total_time % 86400;
						$hrs = intval($total_time / 3600);
						
						$total_time = $total_time % 3600;
						$min = intval($total_time / 60);
						$sec = $total_time % 60;

						$ret .= '<div class="gdlr-core-countdown-wrap clearfix gdlr-core-js" >';
						$ret .= '<div class="gdlr-core-ico-countdown-block gdlr-core-block-day ' . ($day > 99? 'gdlr-core-large': '') .'" >';
						$ret .= '<span class="gdlr-core-ico-time gdlr-core-day" >' . $day . '</span>';
						$ret .= '<span class="gdlr-core-ico-unit gdlr-core-skin-caption" >' . esc_html__('days', 'cryptro') . '</span>';
						$ret .= '</div>';
						
						$ret .= '<div class="gdlr-core-ico-countdown-block gdlr-core-block-hrs" >';
						$ret .= '<span class="gdlr-core-ico-time gdlr-core-hrs" >' . $hrs . '</span>';
						$ret .= '<span class="gdlr-core-ico-unit gdlr-core-skin-caption" >' . esc_html__('hours', 'cryptro') . '</span>';
						$ret .= '</div>';

						$ret .= '<div class="gdlr-core-ico-countdown-block gdlr-core-block-min" >';
						$ret .= '<span class="gdlr-core-ico-time gdlr-core-min" >' . $min . '</span>';
						$ret .= '<span class="gdlr-core-ico-unit gdlr-core-skin-caption" >' . esc_html__('mins', 'cryptro') . '</span>';
						$ret .= '</div>';

						$ret .= '<div class="gdlr-core-ico-countdown-block gdlr-core-block-sec" >';
						$ret .= '<span class="gdlr-core-ico-time gdlr-core-sec" >' . $sec . '</span>';
						$ret .= '<span class="gdlr-core-ico-unit gdlr-core-skin-caption" >' . esc_html__('secs', 'cryptro') . '</span>';
						$ret .= '</div>';
			 			$ret .= '</div>';	
					}
				}

				if( !empty($settings['button-text']) && !empty($settings['button-link']) ){
					if( empty($settings['button-style']) || $settings['button-style'] == 'transparent' ){
						$button_class = 'gdlr-core-button-transparent gdlr-core-button-with-border';
					}else{
						$button_class = 'gdlr-core-button-' . $settings['button-style'];
					}
					
					$ret .= '<div class="gdlr-core-ico-countdown-button-wrap" >';
					$ret .= '<a class="gdlr-core-button ' . esc_attr($button_class) . '" href="' . esc_url($settings['button-link']) . '" >' . gdlr_core_text_filter($settings['button-text']) . '</a>';
					$ret .= '</div>';
				}

				// bottom text wrap
				if( !empty($settings['bottom-text']) || !empty($settings['bottom-text-caption']) ){
					$ret .= '<div class="gdlr-core-ico-countdown-item-bottom-text-wrap" >';
					if( !empty($settings['bottom-text']) ){
						$ret .= '<h3 class="gdlr-core-ico-countdown-item-bottom-text" >' . gdlr_core_text_filter($settings['bottom-text']) . '</h3>';
					}
					if( !empty($settings['bottom-text-caption']) ){
						$ret .= '<div class="gdlr-core-ico-countdown-item-bottom-text-caption" >' . gdlr_core_text_filter($settings['bottom-text-caption']) . '</div>';
					}
					$ret .= '</div>';
				}

				// progress
				if( !empty($settings['progress-left-text']) || !empty($settings['progress-left-caption']) || 
					!empty($settings['progress-right-text']) || !empty($settings['progress-right-caption']) ||
					!empty($settings['progress-percent']) ){
					$ret .= '<div class="gdlr-core-ico-countdown-item-progress clearfix" >';
					if( !empty($settings['progress-left-text']) || !empty($settings['progress-left-caption']) ){
						$ret .= '<div class="gdlr-core-ico-countdown-item-progress-text-left" >';
						$ret .= '<div class="gdlr-core-head" >' . gdlr_core_text_filter($settings['progress-left-text']) . '</div>';
						$ret .= '<div class="gdlr-core-tail" >' . gdlr_core_text_filter($settings['progress-left-caption']) . '</div>';
						$ret .= '</div>';
					}
					if( !empty($settings['progress-right-text']) || !empty($settings['progress-right-caption']) ){
						$ret .= '<div class="gdlr-core-ico-countdown-item-progress-text-right" >';
						$ret .= '<div class="gdlr-core-head" >' . gdlr_core_text_filter($settings['progress-right-text']) . '</div>';
						$ret .= '<div class="gdlr-core-tail" >' . gdlr_core_text_filter($settings['progress-right-caption']) . '</div>';
						$ret .= '</div>';
					}
					$ret .= '<div class="clear"></div>';
					if( !empty($settings['progress-percent']) ){
						$ret .= '<div class="gdlr-core-skill-bar-progress" >';
						$ret .= '<div class="gdlr-core-skill-bar-filled gdlr-core-js" data-width="' . esc_attr($settings['progress-percent']) . '" ></div>';
						$ret .= '</div>';	
					}
					$ret .= '</div>';
				}

				// bottom banner
				if( !empty($settings['bottom-banner-text']) || !empty($settings['bottom-banner-image']) ){
					$ret .= '<div class="gdlr-core-ico-countdown-item-bottom-banner" >';
					if( !empty($settings['bottom-banner-text']) ){
						$ret .= '<span class="gdlr-core-ico-countdown-item-bottom-banner-text" >' . gdlr_core_text_filter($settings['bottom-banner-text']) . '</span>';
					}
					if( !empty($settings['bottom-banner-image']) ){
						$ret .= gdlr_core_get_image($settings['bottom-banner-image']);
					}
					$ret .= '</div>';
				}

				$ret .= '</div>';
				
				return $ret;
			}
			
		} // gdlr_core_pb_element_countdown
	} // class_exists	