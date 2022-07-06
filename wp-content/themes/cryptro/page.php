<?php
/**
 * The template for displaying pages
 */

	get_header();

	while( have_posts() ){ the_post();
	
		$post_option = cryptro_get_post_option(get_the_ID());
		$show_content = (empty($post_option['show-content']) || $post_option['show-content'] == 'enable')? true: false;

		if( empty($post_option['sidebar']) ){
			$sidebar_type = 'none';
			$sidebar_left = '';
			$sidebar_right = '';
		}else{
			$sidebar_type = empty($post_option['sidebar'])? 'none': $post_option['sidebar'];
			$sidebar_left = empty($post_option['sidebar-left'])? '': $post_option['sidebar-left'];
			$sidebar_right = empty($post_option['sidebar-right'])? '': $post_option['sidebar-right'];
		}

		if( $sidebar_type == 'none' ){

			// content from wordpress editor area
			ob_start();
			the_content();
			wp_link_pages(array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'cryptro' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . esc_html__( 'Page', 'cryptro' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			));
			$content = ob_get_contents();
			ob_end_clean();

			if( ($show_content && trim($content) != "") || post_password_required() ){
				echo '<div class="cryptro-content-container cryptro-container">';
				echo '<div class="cryptro-content-area cryptro-item-pdlr cryptro-sidebar-style-none clearfix" >';
				echo gdlr_core_escape_content($content);
				echo '</div>'; // cryptro-content-area
				echo '</div>'; // cryptro-content-container
			}

			if( !post_password_required() ){
				do_action('gdlr_core_print_page_builder');
			}

			// comments template
			if( comments_open() || get_comments_number() ){
				echo '<div class="cryptro-page-comment-container cryptro-container" >';
				echo '<div class="cryptro-page-comments cryptro-item-pdlr" >';
				comments_template();
				echo '</div>';
				echo '</div>';
			}

		}else{

			echo '<div class="cryptro-content-container cryptro-container">';
			echo '<div class="' . cryptro_get_sidebar_wrap_class($sidebar_type) . '" >';

			// sidebar content
			echo '<div class="' . cryptro_get_sidebar_class(array('sidebar-type'=>$sidebar_type, 'section'=>'center')) . '" >';
			
			// content from wordpress editor area
			ob_start();
			the_content();
			wp_link_pages(array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'cryptro' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . esc_html__( 'Page', 'cryptro' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			));
			$content = ob_get_contents();
			ob_end_clean();

			if( ($show_content && trim($content) != "") || post_password_required() ){
				echo '<div class="cryptro-content-area cryptro-item-pdlr" >' . $content . '</div>'; // cryptro-content-wrapper
			}

			if( !post_password_required() ){
				do_action('gdlr_core_print_page_builder');
			}

			// comments template
			if( comments_open() || get_comments_number() ){
				echo '<div class="cryptro-page-comments cryptro-item-pdlr" >';
				comments_template();
				echo '</div>';
			}

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

		}
		
	} // while

	get_footer(); 
?>