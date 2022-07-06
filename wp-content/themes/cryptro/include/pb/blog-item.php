<?php 

	add_filter('gdlr_core_blog_info_prefix', 'cryptro_gdlr_core_blog_info_prefix');
	if( !function_exists('cryptro_gdlr_core_blog_info_prefix') ){
		function cryptro_gdlr_core_blog_info_prefix(){
			return array(
				'date' => '',
				'tag' => esc_html__('Tag:', 'cryptro'),
				'category' => esc_html__('In', 'cryptro'),
				'comment' => '<i class="fa fa-comments-o" ></i>',
				'like' => '<i class="icon_heart_alt" ></i>',
				'author' => esc_html__('By', 'cryptro'),
				'comment-number' => '<i class="fa fa-comments-o" ></i>',
			);
		}
	}

	add_filter('gdlr_core_blog_style_content', 'cryptro_gdlr_core_blog_style_content', 10, 3);
	if( !function_exists('cryptro_gdlr_core_blog_style_content') ){
		function cryptro_gdlr_core_blog_style_content($ret, $args, $blog_style){

			if( in_array($args['blog-style'], array('blog-column', 'blog-column-with-frame', 'blog-column-no-space')) ){
				if( !empty($args['blog-column-style']) && $args['blog-column-style'] == 'style-2' ){
					return cryptro_gdlr_core_blog_grid_style_2($ret, $args, $blog_style);
				}
			}else if( in_array($args['blog-style'], array('blog-left-thumbnail', 'blog-right-thumbnail')) ){
				if( !empty($args['blog-side-thumbnail-style']) && in_array($args['blog-side-thumbnail-style'], array('style-2', 'style-2-large')) ){
					return cryptro_gdlr_core_blog_side_thumbnail_style_2($ret, $args, $blog_style);
				}
			}

			return $ret;
		}
	}

	if( !function_exists('cryptro_gdlr_core_blog_grid_style_2') ){
		function cryptro_gdlr_core_blog_grid_style_2($ret, $args, $blog_style){

			$post_format = get_post_format();
			if( in_array($post_format, array('aside', 'quote', 'link')) ){
				$args['extra-class'] = ' gdlr-core-blog-grid gdlr-core-style-2 gdlr-core-small';
				if($args['blog-style'] == 'blog-column-with-frame' && $args['layout'] != 'masonry' ){
					$args['sync-height'] = true;
				}
				return $blog_style->blog_format( $args, $post_format );
			}

			$additional_class = '';

			// shadow
			$blog_atts = array(
				'margin-bottom' => empty($args['margin-bottom'])? '': $args['margin-bottom']
			);
			$thumbnail_shadow = array();
			if($args['blog-style'] == 'blog-column-with-frame' ){
				$additional_class .= ' gdlr-core-blog-grid-with-frame gdlr-core-item-mgb gdlr-core-skin-e-background ';
				
				if( !empty($args['frame-shadow-size']['size']) && !empty($args['frame-shadow-color']) && !empty($args['frame-shadow-opacity']) ){
					$blog_atts['background-shadow-size'] = $args['frame-shadow-size'];
					$blog_atts['background-shadow-color'] = $args['frame-shadow-color'];
					$blog_atts['background-shadow-opacity'] = $args['frame-shadow-opacity'];

					$additional_class .= ' gdlr-core-outer-frame-element';
				}
			}else{
				if( !empty($args['frame-shadow-size']['size']) && !empty($args['frame-shadow-color']) && !empty($args['frame-shadow-opacity']) ){
					$thumbnail_shadow['background-shadow-size'] = $args['frame-shadow-size'];
					$thumbnail_shadow['background-shadow-color'] = $args['frame-shadow-color'];
					$thumbnail_shadow['background-shadow-opacity'] = $args['frame-shadow-opacity'];
				}
			}

			if($args['blog-style'] == 'blog-column-with-frame' && $args['layout'] != 'masonry' ){
				$ret  = '<div class="gdlr-core-blog-grid gdlr-core-style-2 gdlr-core-js ' . esc_attr($additional_class) . '" ' . gdlr_core_esc_style($blog_atts);
				$ret .= ' data-sync-height="blog-item-' . esc_attr($blog_style->blog_item_id) . '" ';
				if( $post_format == 'audio' ){
					$ret .= ' data-sync-height-center';
				}
				$ret .= ' >';
			}else{
				$ret  = '<div class="gdlr-core-blog-grid gdlr-core-style-2 ' . esc_attr($additional_class) . '" ' . gdlr_core_esc_style($blog_atts) . ' >';
			}

			if( empty($args['show-thumbnail']) || $args['show-thumbnail'] == 'enable' ){
				$blog_thumbnail = $blog_style->blog_thumbnail(array(
					'thumbnail-size' => $args['thumbnail-size'],
					'post-format' => $post_format,
					'post-format-gallery' => 'slider',
					'opacity-on-hover' => empty($args['enable-thumbnail-opacity-on-hover'])? 'enable': $args['enable-thumbnail-opacity-on-hover'],
					'zoom-on-hover' => empty($args['enable-thumbnail-zoom-on-hover'])? 'enable': $args['enable-thumbnail-zoom-on-hover'],
					'grayscale-effect' => empty($args['enable-thumbnail-grayscale-effect'])? 'disable': $args['enable-thumbnail-grayscale-effect'],
					'thumbnail-content' => $blog_style->blog_info(array(
						'display' => array('category'),
						'category-background-color' => empty($args['category-background-color'])? '': $args['category-background-color']
					))
				), $thumbnail_shadow);

				$ret .= $blog_thumbnail;
				if( !empty($blog_thumbnail) && empty($post_format) ){ 	
					$args['meta-option'] = array_diff($args['meta-option'], array('category'));
				}
			}
			
			if( $args['blog-style'] == 'blog-column-with-frame' ){
				$ret .= '<div class="gdlr-core-blog-grid-frame gdlr-core-sync-height-space-position" >';
			}else{
				$ret .= '<div class="gdlr-core-blog-grid-content-wrap">';
			}

			$ret .= $blog_style->blog_title($args);
			$ret .= $blog_style->blog_info(array(
				'display' => $args['meta-option'],
				'wrapper' => true
			));
			$ret .= $blog_style->get_blog_excerpt($args);
			$ret .= '</div>'; // gdlr-core-blog-grid-content-wrap
			$ret .= '</div>'; // gdlr-core-blog-grid
			
			return $ret;

		}
	}
	if( !function_exists('cryptro_gdlr_core_blog_side_thumbnail_style_2') ){
		function cryptro_gdlr_core_blog_side_thumbnail_style_2($ret, $args, $blog_style){
			$post_format = get_post_format();
			if( in_array($post_format, array('aside', 'quote', 'link')) ){
				$args['extra-class']  = ' gdlr-core-blog-medium gdlr-core-large';
				$args['extra-class'] .= (!empty($args['layout']) && $args['layout'] == 'carousel')? '': ' gdlr-core-item-pdlr';
				return $blog_style->blog_format( $args, $post_format );
			}

			$additional_class  = empty($args['blog-style'])? '': 'gdlr-core-' . $args['blog-style'];
			$additional_class .= (!empty($args['layout']) && $args['layout'] == 'carousel')? '': ' gdlr-core-item-pdlr';
			if( !empty($args['blog-side-thumbnail-style']) || $args['blog-side-thumbnail-style'] == 'style-2-large' ){
				$additional_class .= ' gdlr-core-large';
			}

			$ret .= '<div class="gdlr-core-item-list gdlr-core-blog-medium gdlr-core-style-2 clearfix ' . esc_attr($additional_class) . '" ' . gdlr_core_esc_style(array(
				'margin-bottom' => empty($args['margin-bottom'])? '': $args['margin-bottom']
			)) . '>';

			// left thumbnail
			if( $args['blog-style'] == 'blog-left-thumbnail' ){
				$ret .= '<div class="gdlr-core-blog-thumbnail-wrap clearfix" >';
				if( empty($args['show-thumbnail']) || $args['show-thumbnail'] == 'enable' ){
					$thumbnail_shadow = array();
					if( !empty($args['frame-shadow-size']['size']) && !empty($args['frame-shadow-color']) && !empty($args['frame-shadow-opacity']) ){
						$thumbnail_shadow['background-shadow-size'] = $args['frame-shadow-size'];
						$thumbnail_shadow['background-shadow-color'] = $args['frame-shadow-color'];
						$thumbnail_shadow['background-shadow-opacity'] = $args['frame-shadow-opacity'];
					}

					$blog_thumbnail = $blog_style->blog_thumbnail(array(
						'thumbnail-size' => $args['thumbnail-size'],
						'post-format' => ($post_format == 'audio')? '': $post_format,
						'post-format-gallery' => 'slider',
						'opacity-on-hover' => empty($args['enable-thumbnail-opacity-on-hover'])? 'enable': $args['enable-thumbnail-opacity-on-hover'],
						'zoom-on-hover' => empty($args['enable-thumbnail-zoom-on-hover'])? 'enable': $args['enable-thumbnail-zoom-on-hover'],
						'grayscale-effect' => empty($args['enable-thumbnail-grayscale-effect'])? 'disable': $args['enable-thumbnail-grayscale-effect'],
						'thumbnail-content' => $blog_style->blog_info(array(
							'display' => array('category'),
							'category-background-color' => empty($args['category-background-color'])? '': $args['category-background-color']
						))
					), $thumbnail_shadow);

					$ret .= $blog_thumbnail;
					if( !empty($blog_thumbnail) && empty($post_format) ){ 
						$args['meta-option'] = array_diff($args['meta-option'], array('category'));
					}
					
				}
				$ret .= '</div>';
			}

			// content
			$ret .= '<div class="gdlr-core-blog-medium-content-wrapper clearfix">';
			if( $post_format == 'audio' ){
				$ret .= $blog_style->blog_thumbnail(array(
					'thumbnail-size' => $args['thumbnail-size'],
					'post-format' => 'audio',
					'post-format-gallery' => 'slider',
					'opacity-on-hover' => empty($args['enable-thumbnail-opacity-on-hover'])? 'enable': $args['enable-thumbnail-opacity-on-hover'],
					'zoom-on-hover' => empty($args['enable-thumbnail-zoom-on-hover'])? 'enable': $args['enable-thumbnail-zoom-on-hover'],
					'grayscale-effect' => empty($args['enable-thumbnail-grayscale-effect'])? 'disable': $args['enable-thumbnail-grayscale-effect']
				));
			}

			$ret .= $blog_style->blog_title( $args );
			$ret .= $blog_style->blog_info(array(
				'display' => $args['meta-option'],
				'wrapper' => true,
			));
			$ret .= $blog_style->get_blog_excerpt($args);
			$ret .= '</div>'; // gdlr-core-blog-medium-content-wrapper

			// right thumbnail
			if( $args['blog-style'] == 'blog-right-thumbnail' ){
				$ret .= '<div class="gdlr-core-blog-thumbnail-wrap clearfix" >';
				if( empty($args['show-thumbnail']) || $args['show-thumbnail'] == 'enable' ){
					$thumbnail_shadow = array();
					if( !empty($args['frame-shadow-size']['size']) && !empty($args['frame-shadow-color']) && !empty($args['frame-shadow-opacity']) ){
						$thumbnail_shadow['background-shadow-size'] = $args['frame-shadow-size'];
						$thumbnail_shadow['background-shadow-color'] = $args['frame-shadow-color'];
						$thumbnail_shadow['background-shadow-opacity'] = $args['frame-shadow-opacity'];
					}

					$blog_thumbnail = $blog_style->blog_thumbnail(array(
						'thumbnail-size' => $args['thumbnail-size'],
						'post-format' => ($post_format == 'audio')? '': $post_format,
						'post-format-gallery' => 'slider',
						'opacity-on-hover' => empty($args['enable-thumbnail-opacity-on-hover'])? 'enable': $args['enable-thumbnail-opacity-on-hover'],
						'zoom-on-hover' => empty($args['enable-thumbnail-zoom-on-hover'])? 'enable': $args['enable-thumbnail-zoom-on-hover'],
						'grayscale-effect' => empty($args['enable-thumbnail-grayscale-effect'])? 'disable': $args['enable-thumbnail-grayscale-effect'],
						'thumbnail-content' => $blog_style->blog_info(array(
							'display' => array('category'),
							'category-background-color' => empty($args['category-background-color'])? '': $args['category-background-color']
						))
					), $thumbnail_shadow);

					$ret .= $blog_thumbnail;
					if( !empty($blog_thumbnail) && empty($post_format) ){ 
						$args['meta-option'] = array_diff($args['meta-option'], array('category'));
					}
					
				}
				$ret .= '</div>';
			}
			$ret .= '</div>'; // gdlr-core-blog-medium
			
			return $ret;
		}
	}