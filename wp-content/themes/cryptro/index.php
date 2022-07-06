<?php
/**
 * The main template file
 */ 


	get_header();

	echo '<div class="cryptro-content-container cryptro-container">';
	echo '<div class="cryptro-sidebar-style-none" >'; // for max width

	get_template_part('content/archive', 'default');

	echo '</div>'; // cryptro-content-area
	echo '</div>'; // cryptro-content-container

	get_footer(); 
