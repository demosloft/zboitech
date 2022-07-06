<?php
	/**
	 * The template part for displaying single posts style 1
	 */

	// print header title
	if( get_post_type() == 'post' ){
		get_template_part('header/header', 'title-blog');
	}

	$post_option = cryptro_get_post_option(get_the_ID());
	$post_option['show-content'] = empty($post_option['show-content'])? 'enable': $post_option['show-content']; 

	if( empty($post_option['sidebar']) || $post_option['sidebar'] == 'default' ){
		$sidebar_type = cryptro_get_option('general', 'blog-sidebar', 'none');
		$sidebar_left = cryptro_get_option('general', 'blog-sidebar-left');
		$sidebar_right = cryptro_get_option('general', 'blog-sidebar-right');
	}else{
		$sidebar_type = empty($post_option['sidebar'])? 'none': $post_option['sidebar'];
		$sidebar_left = empty($post_option['sidebar-left'])? '': $post_option['sidebar-left'];
		$sidebar_right = empty($post_option['sidebar-right'])? '': $post_option['sidebar-right'];
	}

	if( $sidebar_type != 'none' || $post_option['show-content'] == 'enable' ){
		echo '<div class="cryptro-content-container cryptro-container">';
		echo '<div class="' . cryptro_get_sidebar_wrap_class($sidebar_type) . '" >';

		// sidebar content
		echo '<div class="' . cryptro_get_sidebar_class(array('sidebar-type'=>$sidebar_type, 'section'=>'center')) . '" >';
		echo '<div class="cryptro-content-wrap cryptro-item-pdlr clearfix" >';

		// single content
		if( $post_option['show-content'] == 'enable' ){
			echo '<div class="cryptro-content-area" >';
			if( in_array(get_post_format(), array('aside', 'quote', 'link')) ){
				get_template_part('content/content', get_post_format());
			}else{
				get_template_part('content/content', 'single');
			}
			echo '</div>';
		}
	}

	if( !post_password_required() ){
		if( $sidebar_type != 'none' ){
			echo '<div class="cryptro-page-builder-wrap cryptro-item-rvpdlr" >';
			do_action('gdlr_core_print_page_builder');
			echo '</div>';

		// sidebar == 'none'
		}else{
			ob_start();
			do_action('gdlr_core_print_page_builder');
			$pb_content = ob_get_contents();
			ob_end_clean();

			if( !empty($pb_content) ){
				if( $post_option['show-content'] == 'enable' ){
					echo '</div>'; // cryptro-content-area
					echo '</div>'; // cryptro_get_sidebar_class
					echo '</div>'; // cryptro_get_sidebar_wrap_class
					echo '</div>'; // cryptro_content_container
				}
				echo gdlr_core_escape_content($pb_content);
				echo '<div class="cryptro-bottom-page-builder-container cryptro-container" >'; // cryptro-content-area
				echo '<div class="cryptro-bottom-page-builder-sidebar-wrap cryptro-sidebar-style-none" >'; // cryptro_get_sidebar_class
				echo '<div class="cryptro-bottom-page-builder-sidebar-class" >'; // cryptro_get_sidebar_wrap_class
				echo '<div class="cryptro-bottom-page-builder-content cryptro-item-pdlr" >'; // cryptro_content_container
			}
		}
	}

	// social share
	if( cryptro_get_option('general', 'blog-social-share', 'enable') == 'enable' ){
		if( class_exists('gdlr_core_pb_element_social_share') ){
			$share_count = (cryptro_get_option('general', 'blog-social-share-count', 'enable') == 'enable')? 'counter': 'none';

			echo '<div class="cryptro-single-social-share cryptro-item-rvpdlr" >';
			echo gdlr_core_pb_element_social_share::get_content(array(
				'social-head' => $share_count,
				'layout'=>'left-text', 
				'text-align'=>'center',
				'facebook'=>cryptro_get_option('general', 'blog-social-facebook', 'enable'),
				'facebook-access-token'=>cryptro_get_option('general', 'blog-facebook-access-token', 'enable'),
				'linkedin'=>cryptro_get_option('general', 'blog-social-linkedin', 'enable'),
				'google-plus'=>cryptro_get_option('general', 'blog-social-google-plus', 'enable'),
				'pinterest'=>cryptro_get_option('general', 'blog-social-pinterest', 'enable'),
				'stumbleupon'=>cryptro_get_option('general', 'blog-social-stumbleupon', 'enable'),
				'twitter'=>cryptro_get_option('general', 'blog-social-twitter', 'enable'),
				'email'=>cryptro_get_option('general', 'blog-social-email', 'enable'),
				'padding-bottom'=>'0px'
			));
			echo '</div>';
		}
	}

	// author section
	$author_desc = get_the_author_meta('description');
	if( !empty($author_desc) && cryptro_get_option('general', 'blog-author', 'enable') == 'enable' ){
		echo '<div class="clear"></div>';
		echo '<div class="cryptro-single-author clearfix" >';
		echo '<div class="cryptro-single-author-wrap" >';
		echo '<div class="cryptro-single-author-avartar cryptro-media-image">' . get_avatar(get_the_author_meta('ID'), 90) . '</div>';
		
		echo '<div class="cryptro-single-author-content-wrap" >';
		echo '<div class="cryptro-single-author-caption cryptro-info-font" >' . esc_html__('About the author', 'cryptro') . '</div>';
		echo '<h4 class="cryptro-single-author-title">';
		the_author_posts_link();
		echo '</h4>';

		echo '<div class="cryptro-single-author-description" >' . gdlr_core_escape_content(gdlr_core_text_filter($author_desc)) . '</div>';
		echo '</div>'; // cryptro-single-author-content-wrap
		echo '</div>'; // cryptro-single-author-wrap
		echo '</div>'; // cryptro-single-author
	}

	// prev - next post navigation
	if( cryptro_get_option('general', 'blog-navigation', 'enable') == 'enable' ){
		$prev_post = get_previous_post_link(
			'<span class="cryptro-single-nav cryptro-single-nav-left">%link</span>',
			'<i class="arrow_left" ></i><span class="cryptro-text" >' . esc_html__( 'Prev', 'cryptro' ) . '</span>'
		);
		$next_post = get_next_post_link(
			'<span class="cryptro-single-nav cryptro-single-nav-right">%link</span>',
			'<span class="cryptro-text" >' . esc_html__( 'Next', 'cryptro' ) . '</span><i class="arrow_right" ></i>'
		);
		if( !empty($prev_post) || !empty($next_post) ){
			echo '<div class="cryptro-single-nav-area clearfix" >' . $prev_post . $next_post . '</div>';
		}
	}

	// comments template
	if( comments_open() || get_comments_number() ){
		comments_template();
	}

	echo '</div>'; // cryptro-content-area
	echo '</div>'; // cryptro-get-sidebar-class

	// sidebar left
	if( $sidebar_type == 'left' || $sidebar_type == 'both' ){
		echo cryptro_get_sidebar($sidebar_type, 'left', $sidebar_left);
	}

	// sidebar right
	if( $sidebar_type == 'right' || $sidebar_type == 'both' ){
		echo cryptro_get_sidebar($sidebar_type, 'right', $sidebar_right);
	}

	echo '</div>'; // cryptro-get-sidebar-wrap-class
 	echo '</div>'; // cryptro-content-container

?>