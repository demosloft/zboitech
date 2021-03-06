<?php
/**
 * The template for displaying archive not found
 */

	echo '<div class="cryptro-not-found-wrap" id="cryptro-full-no-header-wrap" >';
	echo '<div class="cryptro-not-found-background" ></div>';
	echo '<div class="cryptro-not-found-container cryptro-container">';
	echo '<div class="cryptro-header-transparent-substitute" ></div>';
	
	echo '<div class="cryptro-not-found-content cryptro-item-pdlr">';
	echo '<h1 class="cryptro-not-found-head" >' . esc_html__('Not Found', 'cryptro') . '</h1>';
	echo '<div class="cryptro-not-found-caption" >' . esc_html__('Nothing matched your search criteria. Please try again with different keywords.', 'cryptro') . '</div>';

	echo '<form role="search" method="get" class="search-form" action="' . esc_url(home_url('/')) . '">';
	echo '<input type="text" class="search-field cryptro-title-font" placeholder="' . esc_attr__('Type Keywords...', 'cryptro') . '" value="" name="s">';
	echo '<div class="cryptro-top-search-submit"><i class="fa fa-search" ></i></div>';
	echo '<input type="submit" class="search-submit" value="Search">';
	echo '</form>';
	echo '<div class="cryptro-not-found-back-to-home" ><a href="' . esc_url(home_url('/')) . '" >' . esc_html__('Or Back To Homepage', 'cryptro') . '</a></div>';
	echo '</div>'; // cryptro-not-found-content

	echo '</div>'; // cryptro-not-found-container
	echo '</div>'; // cryptro-not-found-wrap