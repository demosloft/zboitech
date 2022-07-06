<?php
/**
 * The template part for displaying single post title
 */

	$blog_date = cryptro_get_option('general', 'blog-date-feature', '');
	$blog_style = cryptro_get_option('general', 'blog-style', 'style-1');
	
	$blog_info_atts = array( 'wrapper' => true );
	$blog_info_atts['display'] = cryptro_get_option('general', 'meta-option', '');
	if( empty($blog_date) && empty($blog_info_atts['display']) ){
		$blog_info_atts['display'] = array('author', 'category', 'tag', 'comment-number');
	}

	echo '<header class="cryptro-single-article-head clearfix" >';
	if( $blog_style == 'style-1' && (empty($blog_date) || $blog_date == 'enable') ){
		echo '<div class="cryptro-single-article-date-wrapper">';
		echo '<div class="cryptro-single-article-date-day">' .  get_the_time('d') . '</div>';
		echo '<div class="cryptro-single-article-date-month">' . get_the_time('M') . '</div>';

		$blog_date_year = cryptro_get_option('general', 'blog-date-feature-year', '');
		if( !empty($blog_date_year) && $blog_date_year == 'enable' ){
			echo '<div class="cryptro-single-article-date-year">' . get_the_time('Y') . '</div>';
		} 
		echo '</div>';
	}else if( $blog_style == 'style-2' ){
		$blog_info_atts['separator'] = '•';
		echo cryptro_get_blog_info($blog_info_atts);
	}

	echo '<div class="cryptro-single-article-head-right">';
	if( is_single() ){
		echo '<h1 class="cryptro-single-article-title">' . get_the_title() . '</h1>';
	}else{
		echo '<h3 class="cryptro-single-article-title"><a href="' . get_permalink() . '" >' . get_the_title() . '</a></h3>';
	}

	if( in_array($blog_style, array('style-1', 'magazine')) ){
		echo cryptro_get_blog_info($blog_info_atts);
	}
	echo '</div>';
	echo '</header>';