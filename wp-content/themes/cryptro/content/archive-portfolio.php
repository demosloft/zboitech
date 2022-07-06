<?php
/**
 * The template part for displaying portfolio archive
 */

	global $wp_query;



	$settings = array(
		'query' => $wp_query,
		'portfolio-style' => cryptro_get_option('general', 'archive-portfolio-style', 'medium'),
		'thumbnail-size' => cryptro_get_option('general', 'archive-portfolio-thumbnail-size', 'full'),
		'portfolio-grid-text-align' => cryptro_get_option('general', 'archive-portfolio-grid-text-align', 'left'),
		'portfolio-grid-style' => cryptro_get_option('general', 'archive-portfolio-grid-style', 'normal'),
		'enable-portfolio-tag' => cryptro_get_option('general', 'archive-enable-portfolio-tag', 'enable'),
		'portfolio-medium-size' => cryptro_get_option('general', 'archive-portfolio-medium-size', 'small'),
		'portfolio-medium-style' => cryptro_get_option('general', 'archive-portfolio-medium-style', 'switch'),
		'hover' => cryptro_get_option('general', 'archive-portfolio-hover', 'icon'),
		'column-size' => cryptro_get_option('general', 'archive-portfolio-column-size', '20'),
		'excerpt' => cryptro_get_option('general', 'archive-portfolio-excerpt', 'specify-number'),
		'excerpt-number' => cryptro_get_option('general', 'archive-portfolio-excerpt-number', '55'),

		'paged' => (get_query_var('paged'))? get_query_var('paged') : 1,
		'pagination' => 'page',
		'pagination-style' => cryptro_get_option('general', 'pagination-style', 'round'),
		'pagination-align' => cryptro_get_option('general', 'pagination-align', 'right'),

	);

	echo '<div class="cryptro-content-area" >';
	if( is_tax('portfolio_category') ){
		$tax_description = term_description(NULL, 'portfolio_category');
		if( !empty($tax_description) ){
			echo '<div class="cryptro-archive-taxonomy-description cryptro-item-pdlr" >' . $tax_description . '</div>';
		}
	}else if( is_tax('portfolio_tag') ){
		$tax_description = term_description(NULL, 'portfolio_tag');
		if( !empty($tax_description) ){
			echo '<div class="cryptro-archive-taxonomy-description cryptro-item-pdlr" >' . $tax_description . '</div>';
		}
	}

	echo gdlr_core_pb_element_portfolio::get_content($settings);
	echo '</div>'; // cryptro-content-area