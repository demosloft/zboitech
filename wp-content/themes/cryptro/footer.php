<?php
/**
 * The template for displaying the footer
 */
	
	$post_option = cryptro_get_post_option(get_the_ID());
	if( empty($post_option['enable-footer']) || $post_option['enable-footer'] == 'default' ){
		$enable_footer = cryptro_get_option('general', 'enable-footer', 'enable');
	}else{
		$enable_footer = $post_option['enable-footer'];
	}	
	if( empty($post_option['enable-copyright']) || $post_option['enable-copyright'] == 'default' ){
		$enable_copyright = cryptro_get_option('general', 'enable-copyright', 'enable');
	}else{
		$enable_copyright = $post_option['enable-copyright'];
	}

	$fixed_footer = cryptro_get_option('general', 'fixed-footer', 'disable');
	echo '</div>'; // cryptro-page-wrapper

	if( $enable_footer == 'enable' || $enable_copyright == 'enable' ){

		if( $fixed_footer == 'enable' ){
			echo '</div>'; // cryptro-body-wrapper

			echo '<footer class="cryptro-fixed-footer" id="cryptro-fixed-footer" >';
		}else{
			echo '<footer>';
		}

		if( $enable_footer == 'enable' ){

			$cryptro_footer_layout = array(
				'footer-1'=>array('cryptro-column-60'),
				'footer-2'=>array('cryptro-column-15', 'cryptro-column-15', 'cryptro-column-15', 'cryptro-column-15'),
				'footer-3'=>array('cryptro-column-15', 'cryptro-column-15', 'cryptro-column-30',),
				'footer-4'=>array('cryptro-column-20', 'cryptro-column-20', 'cryptro-column-20'),
				'footer-5'=>array('cryptro-column-20', 'cryptro-column-40'),
				'footer-6'=>array('cryptro-column-40', 'cryptro-column-20'),
			);
			$footer_style = cryptro_get_option('general', 'footer-style');
			$footer_style = empty($footer_style)? 'footer-2': $footer_style;

			$count = 0;
			$has_widget = false;
			foreach( $cryptro_footer_layout[$footer_style] as $layout ){ $count++;
				if( is_active_sidebar('footer-' . $count) ){ $has_widget = true; }
			}

			if( $has_widget ){ 	

				$footer_column_divider = cryptro_get_option('general', 'enable-footer-column-divider', 'enable');
				$extra_class  = ($footer_column_divider == 'enable')? ' cryptro-with-column-divider': '';

				echo '<div class="cryptro-footer-wrapper ' . esc_attr($extra_class) . '" >';
				echo '<div class="cryptro-footer-container cryptro-container clearfix" >';
				
				$count = 0;
				foreach( $cryptro_footer_layout[$footer_style] as $layout ){ $count++;
					echo '<div class="cryptro-footer-column cryptro-item-pdlr ' . esc_attr($layout) . '" >';
					if( is_active_sidebar('footer-' . $count) ){
						dynamic_sidebar('footer-' . $count); 
					}
					echo '</div>';
				}
				
				echo '</div>'; // cryptro-footer-container
				echo '</div>'; // cryptro-footer-wrapper 
			}
		} // enable footer

		if( $enable_copyright == 'enable' ){
			$copyright_style = cryptro_get_option('general', 'copyright-style', 'center');
			
			if( $copyright_style == 'center' ){
				$copyright_text = cryptro_get_option('general', 'copyright-text');

				if( !empty($copyright_text) ){
					echo '<div class="cryptro-copyright-wrapper" >';
					echo '<div class="cryptro-copyright-container cryptro-container">';
					echo '<div class="cryptro-copyright-text cryptro-item-pdlr">';
					echo gdlr_core_escape_content(gdlr_core_text_filter($copyright_text));
					echo '</div>';
					echo '</div>';
					echo '</div>'; // cryptro-copyright-wrapper
				}
			}else if( $copyright_style == 'left-right' ){
				$copyright_left = cryptro_get_option('general', 'copyright-left');
				$copyright_right = cryptro_get_option('general', 'copyright-right');

				if( !empty($copyright_left) || !empty($copyright_right) ){
					echo '<div class="cryptro-copyright-wrapper" >';
					echo '<div class="cryptro-copyright-container cryptro-container clearfix">';
					if( !empty($copyright_left) ){
						echo '<div class="cryptro-copyright-left cryptro-item-pdlr">';
						echo gdlr_core_escape_content(gdlr_core_text_filter($copyright_left));
						echo '</div>';
					}

					if( !empty($copyright_right) ){
						echo '<div class="cryptro-copyright-right cryptro-item-pdlr">';
						echo gdlr_core_escape_content(gdlr_core_text_filter($copyright_right));
						echo '</div>';
					}
					echo '</div>';
					echo '</div>'; // cryptro-copyright-wrapper
				}
			}
		}

		echo '</footer>';

		if( $fixed_footer == 'disable' ){
			echo '</div>'; // cryptro-body-wrapper
		}
		echo '</div>'; // cryptro-body-outer-wrapper

	// disable footer	
	}else{
		echo '</div>'; // cryptro-body-wrapper
		echo '</div>'; // cryptro-body-outer-wrapper
	}

	$header_style = cryptro_get_option('general', 'header-style', 'plain');
	
	if( $header_style == 'side' || $header_style == 'side-toggle' ){
		echo '</div>'; // cryptro-header-side-nav-content
	}

	$back_to_top = cryptro_get_option('general', 'enable-back-to-top', 'disable');
	if( $back_to_top == 'enable' ){
		echo '<a href="#cryptro-top-anchor" class="cryptro-footer-back-to-top-button" id="cryptro-footer-back-to-top-button"><i class="fa fa-angle-up" ></i></a>';
	}
?>

<?php wp_footer(); ?>

</body>
</html>