<?php
	/*	
	*	Goodlayers Option
	*	---------------------------------------------------------------------
	*	This file store an array of theme options
	*	---------------------------------------------------------------------
	*/	

	// add custom css for theme option
	add_filter('gdlr_core_theme_option_top_file_write', 'cryptro_gdlr_core_theme_option_top_file_write', 10, 2);
	if( !function_exists('cryptro_gdlr_core_theme_option_top_file_write') ){
		function cryptro_gdlr_core_theme_option_top_file_write( $css, $option_slug ){
			if( $option_slug != 'goodlayers_main_menu' ) return;

			ob_start();
?>
.cryptro-body h1, .cryptro-body h2, .cryptro-body h3, .cryptro-body h4, .cryptro-body h5, .cryptro-body h6{ margin-top: 0px; margin-bottom: 20px; line-height: 1.2; font-weight: 700; }
#poststuff .gdlr-core-page-builder-body h2{ padding: 0px; margin-bottom: 20px; line-height: 1.2; font-weight: 700; }
#poststuff .gdlr-core-page-builder-body h1{ padding: 0px; font-weight: 700; }

.gdlr-core-accordion-style-background-title-icon .gdlr-core-accordion-item-title{ font-size: 14px; text-transform: none; letter-spacing: 0px; border-radius: 0px; -moz-border-radius: 0px; -webkit-border-radius: 0px; }

.gdlr-core-button-shortcode:after{ content: "\f178"; font-family: fontAwesome; vertical-align: middle; display: inline-block; margin-left: 13px; float: right; }

.gdlr-core-title-item .gdlr-core-title-item-divider{ font-size: 41px; position: static; display: inline-block; width: 45px; margin-bottom: 0.3em; margin-left: 20px; }
.gdlr-core-title-item .gdlr-core-title-item-divider-2{ font-size: 41px; margin-left: 25px; display: inline-block; height: 1.2em; border-left-width: 4px; border-left-style: solid; vertical-align: top; }
.gdlr-core-block-item-title-wrap.gdlr-core-left-align .gdlr-core-block-item-title{ margin-right: 25px; }
.gdlr-core-block-item-title-wrap.gdlr-core-left-align .gdlr-core-block-item-read-more{ float: right; margin-top: 8px; }

.gdlr-core-divider-item-small-left .gdlr-core-divider-line.gdlr-core-style-circle{ border-bottom-width: 2px; width: 75px; }
.gdlr-core-divider-item-small-left .gdlr-core-divider-line.gdlr-core-style-circle .gdlr-core-divider-line-bold{ width: 10px; border-bottom-width: 10px; margin-bottom: -6px; border-radius: 50%; -moz-border-radius: 50%; -webkit-border-radius: 50%; }
.gdlr-core-divider-item-small-center .gdlr-core-divider-line.gdlr-core-style-circle{ border-bottom-width: 2px; width: 75px; }
.gdlr-core-divider-item-small-center .gdlr-core-divider-line.gdlr-core-style-circle .gdlr-core-divider-line-bold{ width: 10px; border-bottom-width: 10px; margin-bottom: -6px; margin-left: 0px; border-radius: 50%; -moz-border-radius: 50%; -webkit-border-radius: 50%; }

.gdlr-core-block-item-title-divider.gdlr-core-style-1{ display: inline-block; border-bottom-width: 2px; border-bottom-style: solid; width: 75px; margin-bottom: 0.55em; }
.gdlr-core-block-item-title-divider.gdlr-core-style-1 .gdlr-core-block-item-title-divider-inner{ display: block; width: 10px; border-bottom-width: 10px; border-bottom-style: solid; margin-bottom: -6px; border-radius: 50%; -moz-border-radius: 50%; -webkit-border-radius: 50%; }
.gdlr-core-block-item-title-divider.gdlr-core-style-2{ font-size: 41px; display: inline-block; height: 1.2em; border-left-width: 4px; border-left-style: solid; vertical-align: top; }

.gdlr-core-personnel-item-style-grid .gdlr-core-personnel-list-image{ overflow: hidden; border-radius: 3px; -moz-border-radius: 3px; -webkit-border-radius: 3px; }
.gdlr-core-personnel-item-style-grid-with-background .gdlr-core-personnel-list-image{ overflow: hidden; border-radius: 3px 3px 0px 0px; -moz-border-radius: 3px 3px 0px 0px; -webkit-border-radius: 3px 3px 0px 0px; }
.gdlr-core-personnel-item-style-modern .gdlr-core-personnel-list-image{ overflow: hidden; border-radius: 3px; -moz-border-radius: 3px; -webkit-border-radius: 3px; }

.gdlr-core-flexslider.gdlr-core-bullet-style-cylinder .flex-control-nav li a{ height: 8px; border-radius: 5px; width: 19px; }
.gdlr-core-testimonial-style-left-2 .gdlr-core-testimonial-quote{ font-weight: bold; font-size: 120px; right: -40px; top: -5px; }
.gdlr-core-testimonial-style-left-2 .gdlr-core-testimonial-author-image{ width: 125px; margin-right: 50px; }
.gdlr-core-testimonial-style-left-2 .gdlr-core-testimonial-author-content{ padding-top: 0px; margin-bottom: 20px; }
.gdlr-core-testimonial-style-left-2 .gdlr-core-testimonial-title{ font-size: 17px; text-transform: uppercase; font-weight: 800; margin-bottom: 2px; }

.gdlr-core-blog-info-wrapper .gdlr-core-blog-info-comment-number .gdlr-core-head{ margin-right: 0px; }
.gdlr-core-blog-info-wrapper .gdlr-core-blog-info-comment-number a{ float: left; margin-right: 12px; }
.gdlr-core-blog-info-wrapper .gdlr-core-head{ vertical-align: baseline; margin-right: 5px; }
.gdlr-core-blog-info-wrapper .gdlr-core-blog-info{ font-size: 12px; font-weight: 400 }
.gdlr-core-style-blog-image .gdlr-core-blog-modern.gdlr-core-with-image{ border-radius: 3px; -moz-border-radius: 3px; -webkit-border-radius: 3px; }
.gdlr-core-blog-left-thumbnail .gdlr-core-blog-thumbnail,
.gdlr-core-blog-right-thumbnail .gdlr-core-blog-thumbnail{ border-radius: 3px; -moz-border-radius: 3px; -webkit-border-radius: 3px; }
.gdlr-core-blog-left-thumbnail .gdlr-core-blog-title{ margin-bottom: 8px; }
.gdlr-core-blog-left-thumbnail .gdlr-core-blog-info-wrapper{ margin-bottom: 20px; }
.gdlr-core-blog-right-thumbnail .gdlr-core-blog-title{ margin-bottom: 8px; }
.gdlr-core-blog-right-thumbnail .gdlr-core-blog-info-wrapper{ margin-bottom: 20px; }
.gdlr-core-blog-medium.gdlr-core-style-2 .gdlr-core-blog-title{ margin-bottom: 8px; }
.gdlr-core-blog-medium.gdlr-core-style-2 .gdlr-core-blog-info-wrapper{ margin-bottom: 20px; }
.gdlr-core-blog-medium.gdlr-core-style-2 .gdlr-core-blog-info-wrapper .gdlr-core-head{ display: inline; }
.gdlr-core-blog-medium.gdlr-core-style-2 .gdlr-core-blog-info-wrapper .gdlr-core-blog-info{ margin-right: 25px; font-size: 12px; text-transform: uppercase; letter-spacing: 1px; }
.gdlr-core-blog-medium.gdlr-core-style-2 .gdlr-core-blog-thumbnail .gdlr-core-blog-info-category{ top: 13px; left: 15px; right: auto; bottom: auto; padding: 6px 12px; }
.gdlr-core-style-blog-column .gdlr-core-blog-grid .gdlr-core-blog-thumbnail{ border-radius: 3px; -moz-border-radius: 3px; -webkit-border-radius: 3px; }
.gdlr-core-style-blog-column-with-frame .gdlr-core-blog-grid .gdlr-core-blog-thumbnail{ border-radius: 3px 3px 0px 0px; -moz-border-radius: 3px 3px 0px 0px; -webkit-border-radius: 3px 3px 0px 0px; }
.gdlr-core-blog-grid.gdlr-core-style-2 .gdlr-core-blog-title{ margin-bottom: 8px; }
.gdlr-core-blog-grid.gdlr-core-style-2 .gdlr-core-blog-info-wrapper{ margin-bottom: 20px; }
.gdlr-core-blog-grid.gdlr-core-style-2 .gdlr-core-blog-info-wrapper .gdlr-core-head{ display: inline; }
.gdlr-core-blog-grid.gdlr-core-style-2 .gdlr-core-blog-info-wrapper .gdlr-core-blog-info{ margin-right: 25px; font-size: 13px; }
.gdlr-core-blog-grid.gdlr-core-style-2 .gdlr-core-blog-thumbnail .gdlr-core-blog-info-category{ top: 13px; left: 15px; right: auto; bottom: auto; padding: 6px 12px; }
.gdlr-core-blog-widget{ padding-top: 0px; border-top: none; margin-bottom: 30px; }
.gdlr-core-blog-widget .gdlr-core-blog-thumbnail{ max-width: 80px; margin-right: 25px; border-radius: 3px; -moz-border-radius: 3px; -webkit-border-radius: 3px; }
.gdlr-core-blog-feature .gdlr-core-blog-info-category{ padding: 7px 10px; }
.gdlr-core-blog-feature.gdlr-core-sub-item .gdlr-core-blog-info-category{ padding: 6px 8px; }
.gdlr-core-blog-modern.gdlr-core-style-2 .gdlr-core-blog-thumbnail .gdlr-core-blog-info-category{ top: 13px; left: 15px; padding: 6px 12px; }

.gdlr-core-tbwtd-item{ position: relative; }
.gdlr-core-tbwtd-item .gdlr-core-tbwtd-item-left-text{ float: left; width: 50%; font-size: 41px; font-weight: 800; text-transform: uppercase; padding-right: 50px; padding-top: 12px; }
.gdlr-core-tbwtd-item .gdlr-core-tbwtd-item-left-text p{ line-height: 1.3; }
.gdlr-core-tbwtd-item .gdlr-core-tbwtd-item-right-text{ float: left; width: 50%; padding-left: 50px; padding-top: 69px; font-size: 18px; }
.gdlr-core-tbwtd-item .gdlr-core-tbwtd-item-divider-text{ position: absolute; top: 0px; bottom: 0px; left: 50%; margin-left: -10px; overflow: hidden; 
    writing-mode: tb-rl; font-size: 12px; text-transform: uppercase; font-weight: bold; letter-spacing: 1px;
    -webkit-transform: rotate(180deg); -moz-transform: rotate(180deg); -o-transform: rotate(180deg); -ms-transform: rotate(180deg); transform: rotate(180deg); }
.gdlr-core-tbwtd-item .gdlr-core-tbwtd-item-divider-line{ position: absolute; border-left-width: 1px; border-left-style: solid; margin: 12px 0.65em 0px 0px; height: 100%; }

.gdlr-core-ico-countdown-item{ text-align: center; }
.gdlr-core-ico-countdown-item .gdlr-core-ico-countdown-item-title{ font-size: 19px; text-transform: uppercase; margin-bottom: 5px; }
.gdlr-core-ico-countdown-item .gdlr-core-ico-countdown-item-caption{ font-size: 16px; font-weight: 600; }
.gdlr-core-ico-countdown-item .gdlr-core-ico-countdown-item-title-wrap{ margin-bottom: 40px; }
.gdlr-core-ico-countdown-item .gdlr-core-countdown-wrap{ max-width: 320px; margin: 0px auto 40px; }
.gdlr-core-ico-countdown-item .gdlr-core-ico-countdown-block{ width: 25%; float: left; position: relative; }
.gdlr-core-ico-countdown-item .gdlr-core-ico-countdown-block.gdlr-core-large{ width: 32%; margin-left: -7%; }
.gdlr-core-ico-countdown-item .gdlr-core-ico-countdown-block:after{ content: " "; position: absolute; top: 12px; right: 0px; height: 16px; border-right-width: 1px; border-right-style: solid; }
.gdlr-core-ico-countdown-item .gdlr-core-ico-countdown-block:last-child:after{ display: none; }
.gdlr-core-ico-countdown-block .gdlr-core-ico-time{ display: block; font-size: 37px; font-weight: 600; line-height: 1; }
.gdlr-core-ico-countdown-block .gdlr-core-ico-unit{ display: block; font-size: 17px; font-weight: 500; }
.gdlr-core-ico-countdown-block .gdlr-core-ico-time.gdlr-core-sec{ width: auto !important; }
.gdlr-core-ico-countdown-item .gdlr-core-ico-countdown-item-bottom-text-wrap{ margin-bottom: 25px; }
.gdlr-core-ico-countdown-item .gdlr-core-ico-countdown-item-bottom-text{ font-size: 19px; font-weight: bold; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 7px; }
.gdlr-core-ico-countdown-item .gdlr-core-ico-countdown-item-bottom-text-caption{ font-size: 14px; font-weight: 600; }
.gdlr-core-ico-countdown-item .gdlr-core-ico-countdown-button-wrap{ margin-bottom: 40px; }
.gdlr-core-ico-countdown-item .gdlr-core-ico-countdown-button-wrap .gdlr-core-button-with-border{ border-width: 3px; padding: 11px 33px; }
.gdlr-core-ico-countdown-item .gdlr-core-skill-bar-progress{ overflow: hidden; clear: left; margin-top: 15px; height: 6px;
    border-radius: 3px; -moz-border-radius: 3px; -webkit-border-radius: 3px; }
.gdlr-core-ico-countdown-item .gdlr-core-skill-bar-filled{ height: 100%; width: 0%; }
.gdlr-core-ico-countdown-item-progress{ margin-bottom: 32px; }
.gdlr-core-ico-countdown-item-progress-text-left{ float: left; text-align: left; }
.gdlr-core-ico-countdown-item-progress-text-left .gdlr-core-head{ font-size: 13px; text-transform: uppercase; font-weight: 600; margin-bottom: 3px; }
.gdlr-core-ico-countdown-item-progress-text-left .gdlr-core-tail{ font-size: 12px; font-weight: 600; }
.gdlr-core-ico-countdown-item-progress-text-right{ float: right; text-align: right; }
.gdlr-core-ico-countdown-item-progress-text-right .gdlr-core-head { font-size: 13px; text-transform: uppercase; font-weight: 600; margin-bottom: 3px; }
.gdlr-core-ico-countdown-item-progress-text-right .gdlr-core-tail{ font-size: 12px; font-weight: 600; }
.gdlr-core-ico-countdown-item .gdlr-core-ico-countdown-item-bottom-banner{ text-align: left; }
.gdlr-core-ico-countdown-item .gdlr-core-ico-countdown-item-bottom-banner img{ vertical-align: middle; }
.gdlr-core-ico-countdown-item .gdlr-core-ico-countdown-item-bottom-banner-text{ font-size: 15px; font-weight: 600; margin-right: 22px; }

.gdlr-core-recent-post-widget-wrap.gdlr-core-style-1 .gdlr-core-recent-post-widget{ padding-top: 20px; border-top-width: 1px; border-top-style: solid; margin-bottom: 20px; }
.gdlr-core-recent-post-widget-wrap.gdlr-core-style-1 .gdlr-core-recent-post-widget:first-child{ padding-top: 0px; border-top: 0px; }
.gdlr-core-recent-post-widget-wrap.gdlr-core-style-1 .gdlr-core-recent-post-widget-thumbnail{ border-radius: 3px; -moz-border-radius: 3px; -webkit-border-radius: 3px; overflow: hidden; }
.gdlr-core-recent-post-widget-wrap.gdlr-core-style-1 .gdlr-core-recent-post-widget-title{ line-height: 1.3; margin-bottom: 6px; margin-top: 2px; }
.gdlr-core-recent-post-widget-wrap.gdlr-core-style-1 .gdlr-core-blog-info .gdlr-core-head{ margin-right: 6px; }

.gdlr-core-icon-list-item .gdlr-core-icon-list-content{ text-transform: uppercase; font-weight: bold; letter-spacing: 1px; }
.gdlr-core-icon-list-item .gdlr-core-icon-list-caption{ letter-spacing: 1px; }

.gdlr-core-recent-post-widget-wrap.gdlr-core-style-full .gdlr-core-recent-post-widget-thumbnail{ border-radius: 3px; -moz-border-radius: 3px; -webkit-border-radius: 3px; overflow: hidden; }
.gdlr-core-recent-post-widget-wrap.gdlr-core-style-full .gdlr-core-blog-info{ font-size: 12px; letter-spacing: 1px; }
.gdlr-core-recent-post-widget-wrap.gdlr-core-style-full .gdlr-core-blog-info-comment-number a{ float: left; margin-right: 9px; }
.gdlr-core-recent-post-widget-wrap.gdlr-core-style-full .gdlr-core-recent-post-widget-thumbnail .gdlr-core-blog-info-category{ top: 13px; left: 15px; padding: 6px 12px; }

.gdlr-core-newsletter-shortcode .gdlr-core-newsletter-item.gdlr-core-style-rectangle-full .gdlr-core-newsletter-email{ margin-bottom: 5px; }
.gdlr-core-newsletter-shortcode .gdlr-core-newsletter-item.gdlr-core-style-rectangle-full .gdlr-core-newsletter-email input[type="email"]{ text-align: center; border: none; }
.gdlr-core-newsletter-shortcode .gdlr-core-newsletter-item.gdlr-core-style-rectangle-full .gdlr-core-newsletter-submit input[type="submit"]{ font-weight: 500; border-radius: 3px; -moz-border-radius: 3px; -webkit-border-radius: 3px; }
@media only screen and (max-width: 767px){
    .gdlr-core-tbwtd-item .gdlr-core-tbwtd-item-left-text{ float: none; width: auto; padding: 0px; margin-bottom: 20px; }
    .gdlr-core-tbwtd-item .gdlr-core-tbwtd-item-divider-text{ display: none; }
    .gdlr-core-tbwtd-item .gdlr-core-tbwtd-item-right-text{ padding: 0px !important; width: auto; }
    .gdlr-core-testimonial-style-left-2 .gdlr-core-testimonial-author-image{ float: none; margin: 0px 0px 35px; }
}

/* custom */
body .vcw.vcw-table{ box-shadow: none !important; }
blockquote{ border-left-width: 3px; padding: 33px 33px 18px; font-style: normal; font-size: 18px; }
blockquote p{ line-height: 2 !important; }
.gdlr-core-button{ font-weight: 700; text-transform: none; letter-spacing: 0; border-radius: 31px; -moz-border-radius: 31px; -webkit-border-radius: 31px; }
.gdlr-core-blog-info-wrapper .gdlr-core-blog-info{ margin-right: 20px; font-weight: 500; }
.gdlr-core-blog-info-wrapper .gdlr-core-blog-info-comment-number a{ margin-right: 8px; }
.gdlr-core-blog-widget .gdlr-core-blog-title{ margin-bottom: 5px; }
.gdlr-core-blog-modern.gdlr-core-with-image .gdlr-core-blog-modern-content{ padding: 0px 25px 15px 30px; }
.gdlr-core-column-60 .gdlr-core-blog-modern.gdlr-core-with-image .gdlr-core-blog-modern-content{ padding: 0px 25px 28px 42px; }
.gdlr-core-column-30 .gdlr-core-blog-modern.gdlr-core-with-image .gdlr-core-blog-modern-content{ padding: 0px 25px 15px 30px; }
.gdlr-core-blog-feature.gdlr-core-sub-item.gdlr-core-with-image .gdlr-core-blog-feature-content{ padding: 0px 30px 20px 27px; }
.gdlr-core-blog-feature.gdlr-core-sub-item .gdlr-core-blog-info-category{ top: 16px; left: 17px; }
.gdlr-core-blog-feature .gdlr-core-blog-info-category{ border-radius: 2px; -moz-border-radius: 2px; -webkit-border-radius: 2px; padding: 6px 11px; }
.gdlr-core-blog-medium.gdlr-core-style-2 .gdlr-core-blog-thumbnail .gdlr-core-blog-info-category{ border-radius: 2px; -moz-border-radius: 2px; -webkit-border-radius: 2px; padding: 6px 11px; }
.gdlr-core-blog-medium.gdlr-core-style-2 .gdlr-core-blog-thumbnail .gdlr-core-blog-info-category{ top: 16px; left: 16px; }
.gdlr-core-blog-grid .gdlr-core-blog-title { line-height: 1.7; }
.gdlr-core-blog-grid.gdlr-core-style-2 .gdlr-core-blog-thumbnail .gdlr-core-blog-info-category{ top: 16px; left: 16px; }
.gdlr-core-blog-grid.gdlr-core-style-2 .gdlr-core-blog-info-wrapper .gdlr-core-blog-info { text-transform: uppercase; letter-spacing: 1px; }

.gdlr-core-ico-countdown-item .gdlr-core-ico-countdown-item-title { letter-spacing: 2px; }
.gdlr-core-ico-countdown-block .gdlr-core-ico-time{ font-weight: 700; }
.gdlr-core-ico-countdown-item .gdlr-core-ico-countdown-button-wrap .gdlr-core-button-with-border{ padding: 12px 25px 15px; }
.gdlr-core-tbwtd-item .gdlr-core-tbwtd-item-divider-text{ letter-spacing: 4px; }
.gdlr-core-divider-item-normal.gdlr-core-style-vertical .gdlr-core-divider-line-vertical-text{ letter-spacing: 4px; margin-top: 22px; }
.gdlr-core-testimonial-style-left-2 .gdlr-core-testimonial-title{ font-weight: 700; letter-spacing: 2px; }
.gdlr-core-testimonial-style-left-2 .gdlr-core-testimonial-quote{ font-weight: 400; font-size: 200px; top: -23px; }
.gdlr-core-testimonial-style-left-2 .gdlr-core-testimonial-author-image{ margin-right: 65px; }

.cryptro-body-front .gdlr-core-widget-box-shortcode{ font-size: 14px; }
.gdlr-core-accordion-style-background-title-icon .gdlr-core-accordion-item-title{ font-size: 14px; text-transform: none; font-weight: 600; padding: 22px 25px 22px; letter-spacing: 0; }
.gdlr-core-breadcrumbs-item{ padding: 16px 0px; }
.gdlr-core-breadcrumbs-item span[property="itemListElement"]{ margin: 0px 18px; }
.gdlr-core-breadcrumbs-item{ font-size: 12px; padding: 16px 0px; text-transform: uppercase; letter-spacing: 2px; }
.gdlr-core-blog-widget .gdlr-core-blog-info-wrapper .gdlr-core-head{ margin-right: 6px; }
.gdlr-core-widget-box-shortcode .gdlr-core-widget-box-shortcode-title{ font-size: 16px; }
.gdlr-core-blog-grid .gdlr-core-blog-title{ font-weight: 700; }
.gdlr-core-blog-content .gdlr-core-button.gdlr-core-rectangle{ border-radius: 3px; -moz-border-radius: 3px; -webkit-border-radius: 3px; }
.gdlr-core-blog-content .gdlr-core-button{ font-size: 14px; }
.gdlr-core-blog-content .gdlr-core-button{ padding: 13px 29px; }
.gdlr-core-blog-full .gdlr-core-blog-title{ margin-bottom: 6px; }
.gdlr-core-ico-countdown-item-progress-text-left .gdlr-core-head, 
.gdlr-core-ico-countdown-item-progress-text-right .gdlr-core-head{ letter-spacing: 2px; }
.gdlr-core-product-item.woocommerce .gdlr-core-product-thumbnail{ margin-bottom: 30px; }
.gdlr-core-product-grid .gdlr-core-product-title{ font-size: 15px; }
.gdlr-core-product-grid .gdlr-core-product-grid-content-wrap .onsale{ margin-bottom: 15px; }

.gdlr-core-recent-post-widget-info{ font-weight: 500; }
<?php
			$css .= ob_get_contents();
			ob_end_clean(); 

			return $css;
		}
	}
	add_filter('gdlr_core_theme_option_bottom_file_write', 'cryptro_gdlr_core_theme_option_bottom_file_write', 10, 2);
	if( !function_exists('cryptro_gdlr_core_theme_option_bottom_file_write') ){
		function cryptro_gdlr_core_theme_option_bottom_file_write( $css, $option_slug ){
			if( $option_slug != 'goodlayers_main_menu' ) return;

			$general = get_option('cryptro_general');

			if( !empty($general['item-padding']) ){
				$margin = 2 * intval(str_replace('px', '', $general['item-padding']));
				if( !empty($margin) && is_numeric($margin) ){
					$css .= '.cryptro-item-mgb, .gdlr-core-item-mgb{ margin-bottom: ' . $margin . 'px; }';
				}
			}

			if( !empty($general['mobile-logo-position']) && $general['mobile-logo-position'] == 'logo-right' ){
				$css .= '.cryptro-mobile-header .cryptro-logo-inner{ margin-right: 0px; margin-left: 80px; float: right; }';	
				$css .= '.cryptro-mobile-header .cryptro-mobile-menu-right{ left: 30px; right: auto; }';	
				$css .= '.cryptro-mobile-header .cryptro-main-menu-search{ float: right; margin-left: 0px; margin-right: 25px; }';	
				$css .= '.cryptro-mobile-header .cryptro-mobile-menu{ float: right; margin-left: 0px; margin-right: 30px; }';	
				$css .= '.cryptro-mobile-header .cryptro-main-menu-cart{ float: right; margin-left: 0px; margin-right: 20px; padding-left: 0px; padding-right: 5px; }';	
				$css .= '.cryptro-mobile-header .cryptro-top-cart-content-wrap{ left: 0px; }';
			}

			return $css;
		}
	}

	$cryptro_admin_option->add_element(array(
	
		// general head section
		'title' => esc_html__('General', 'cryptro'),
		'slug' => 'cryptro_general',
		'icon' => get_template_directory_uri() . '/include/options/images/general.png',
		'options' => array(
		
			'layout' => array(
				'title' => esc_html__('Layout', 'cryptro'),
				'options' => array(
					
					'layout' => array(
						'title' => esc_html__('Layout', 'cryptro'),
						'type' => 'combobox',
						'options' => array(
							'full' => esc_html__('Full', 'cryptro'),
							'boxed' => esc_html__('Boxed', 'cryptro'),
						)
					),
					'boxed-layout-top-margin' => array(
						'title' => esc_html__('Box Layout Top/Bottom Margin', 'cryptro'),
						'type' => 'fontslider',
						'data-min' => '0',
						'data-max' => '150',
						'data-type' => 'pixel',
						'default' => '0px',
						'selector' => 'body.cryptro-boxed .cryptro-body-wrapper{ margin-top: #gdlr#; margin-bottom: #gdlr#; }',
						'condition' => array( 'layout' => 'boxed' ) 
					),
					'body-margin' => array(
						'title' => esc_html__('Body Magin ( Frame Spaces )', 'cryptro'),
						'type' => 'fontslider',
						'data-min' => '0',
						'data-max' => '100',
						'data-type' => 'pixel',
						'default' => '0px',
						'selector' => '.cryptro-body-wrapper.cryptro-with-frame, body.cryptro-full .cryptro-fixed-footer{ margin: #gdlr#; }',
						'condition' => array( 'layout' => 'full' ),
						'description' => esc_html__('This value will be automatically omitted for side header style.', 'cryptro'),
					),
					'background-type' => array(
						'title' => esc_html__('Background Type', 'cryptro'),
						'type' => 'combobox',
						'options' => array(
							'color' => esc_html__('Color', 'cryptro'),
							'image' => esc_html__('Image', 'cryptro'),
							'pattern' => esc_html__('Pattern', 'cryptro'),
						),
						'condition' => array( 'layout' => 'boxed' )
					),
					'background-image' => array(
						'title' => esc_html__('Background Image', 'cryptro'),
						'type' => 'upload',
						'data-type' => 'file', 
						'selector' => '.cryptro-body-background{ background-image: url(#gdlr#); }',
						'condition' => array( 'layout' => 'boxed', 'background-type' => 'image' )
					),
					'background-image-opacity' => array(
						'title' => esc_html__('Background Image Opacity', 'cryptro'),
						'type' => 'fontslider',
						'data-type' => 'opacity',
						'default' => '100',
						'condition' => array( 'layout' => 'boxed', 'background-type' => 'image' ),
						'selector' => '.cryptro-body-background{ opacity: #gdlr#; }'
					),
					'background-pattern' => array(
						'title' => esc_html__('Background Type', 'cryptro'),
						'type' => 'radioimage',
						'data-type' => 'text',
						'options' => 'pattern', 
						'selector' => '.cryptro-background-pattern .cryptro-body-outer-wrapper{ background-image: url(' . GDLR_CORE_URL . '/include/images/pattern/#gdlr#.png); }',
						'condition' => array( 'layout' => 'boxed', 'background-type' => 'pattern' ),
						'wrapper-class' => 'gdlr-core-fullsize'
					),
					'enable-boxed-border' => array(
						'title' => esc_html__('Enable Boxed Border', 'cryptro'),
						'type' => 'checkbox',
						'default' => 'disable',
						'condition' => array( 'layout' => 'boxed', 'background-type' => 'pattern' ),
					),
					'item-padding' => array(
						'title' => esc_html__('Item Left/Right Spaces', 'cryptro'),
						'type' => 'fontslider',
						'data-min' => '0',
						'data-max' => '40',
						'data-type' => 'pixel',
						'default' => '15px',
						'description' => 'Space between each page items',
						'selector' => '.cryptro-item-pdlr, .gdlr-core-item-pdlr{ padding-left: #gdlr#; padding-right: #gdlr#; }' . 
							'.cryptro-item-rvpdlr, .gdlr-core-item-rvpdlr{ margin-left: -#gdlr#; margin-right: -#gdlr#; }' .
							'.gdlr-core-metro-rvpdlr{ margin-top: -#gdlr#; margin-right: -#gdlr#; margin-bottom: -#gdlr#; margin-left: -#gdlr#; }' .
							'.cryptro-item-mglr, .gdlr-core-item-mglr, .cryptro-navigation .sf-menu > .cryptro-mega-menu .sf-mega{ margin-left: #gdlr#; margin-right: #gdlr#; }' .
							'.cryptro-body .gdlr-core-personnel-item .gdlr-core-flexslider.gdlr-core-with-outer-frame-element .flex-viewport, ' . 
							'.cryptro-body .gdlr-core-hover-box-item .gdlr-core-flexslider.gdlr-core-with-outer-frame-element .flex-viewport,' . 
							'.cryptro-body .gdlr-core-blog-item .gdlr-core-flexslider.gdlr-core-with-outer-frame-element .flex-viewport{ padding-top: #gdlr#; margin-top: -#gdlr#; padding-right: #gdlr#; margin-right: -#gdlr#; padding-left: #gdlr#; margin-left: -#gdlr#; padding-bottom: #gdlr#; margin-bottom: -#gdlr#; }'
					
					),
					'container-width' => array(
						'title' => esc_html__('Container Width', 'cryptro'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel',
						'default' => '1180px',
						'selector' => '.cryptro-container, .gdlr-core-container, body.cryptro-boxed .cryptro-body-wrapper, ' . 
							'body.cryptro-boxed .cryptro-fixed-footer .cryptro-footer-wrapper, body.cryptro-boxed .cryptro-fixed-footer .cryptro-copyright-wrapper{ max-width: #gdlr#; }' 
					),
					'container-padding' => array(
						'title' => esc_html__('Container Padding', 'cryptro'),
						'type' => 'fontslider',
						'data-min' => '0',
						'data-max' => '100',
						'data-type' => 'pixel',
						'default' => '15px',
						'selector' => '.cryptro-body-front .gdlr-core-container, .cryptro-body-front .cryptro-container{ padding-left: #gdlr#; padding-right: #gdlr#; }'  . 
							'.cryptro-body-front .cryptro-container .cryptro-container, .cryptro-body-front .cryptro-container .gdlr-core-container, '.
							'.cryptro-body-front .gdlr-core-container .gdlr-core-container{ padding-left: 0px; padding-right: 0px; }'
					),
					'sidebar-title-divider' => array(
						'title' => esc_html__('Sidebar Title Divider', 'cryptro'),
						'type' => 'combobox',
						'options' => array(
							'disable' => esc_html__('None', 'cryptro'),
							'enable' => esc_html__('Style 1', 'cryptro'),
							'style-2' => esc_html__('Style 2', 'cryptro'),
						),
						'default' => 'enable',
					),
					'sidebar-width' => array(
						'title' => esc_html__('Sidebar Width', 'cryptro'),
						'type' => 'combobox',
						'options' => array(
							'30' => '50%', '20' => '33.33%', '15' => '25%', '12' => '20%', '10' => '16.67%'
						),
						'default' => 20,
					),
					'both-sidebar-width' => array(
						'title' => esc_html__('Both Sidebar Width', 'cryptro'),
						'type' => 'combobox',
						'options' => array(
							'30' => '50%', '20' => '33.33%', '15' => '25%', '12' => '20%', '10' => '16.67%'
						),
						'default' => 15,
					),
					
				) // header-options
			), // header-nav

			'top-bar' => array(
				'title' => esc_html__('Top Bar', 'cryptro'),
				'options' => array(

					'wpml-language-selector-location' => array(
						'title' => esc_html__('WPML Language Selector Location ( If Activated )', 'cryptro'),
						'type' => 'combobox',
						'options' => array(
							'none' => esc_html__('None', 'cryptro'),
							'top-bar' => esc_html__('Top Bar', 'cryptro'),
							'nav-bar' => esc_html__('Navigation Bar', 'cryptro'),
						),
						'default' => 'top-bar'
					),
					'enable-top-bar' => array(
						'title' => esc_html__('Enable Top Bar', 'cryptro'),
						'type' => 'checkbox',
					),
					'enable-top-bar-on-mobile' => array(
						'title' => esc_html__('Enable Top Bar On Mobile', 'cryptro'),
						'type' => 'checkbox',
						'default' => 'disable'
					),
					'top-bar-width' => array(
						'title' => esc_html__('Top Bar Width', 'cryptro'),
						'type' => 'combobox',
						'options' => array(
							'boxed' => esc_html__('Boxed ( Within Container )', 'cryptro'),
							'full' => esc_html__('Full', 'cryptro'),
							'custom' => esc_html__('Custom', 'cryptro'),
						),
						'condition' => array( 'enable-top-bar' => 'enable' )
					),
					'top-bar-width-pixel' => array(
						'title' => esc_html__('Top Bar Width Pixel', 'cryptro'),
						'type' => 'text',
						'data-type' => 'pixel',
						'default' => '1140px',
						'condition' => array( 'enable-top-bar' => 'enable', 'top-bar-width' => 'custom' ),
						'selector' => '.cryptro-top-bar-container.cryptro-top-bar-custom-container{ max-width: #gdlr#; }'
					),
					'top-bar-full-side-padding' => array(
						'title' => esc_html__('Top Bar Full ( Left/Right ) Padding', 'cryptro'),
						'type' => 'fontslider',
						'data-min' => '0',
						'data-max' => '100',
						'data-type' => 'pixel',
						'default' => '15px',
						'selector' => '.cryptro-top-bar-container.cryptro-top-bar-full{ padding-right: #gdlr#; padding-left: #gdlr#; }',
						'condition' => array( 'enable-top-bar' => 'enable', 'top-bar-width' => 'full' )
					),
					'top-bar-left-text' => array(
						'title' => esc_html__('Top Bar Left Text', 'cryptro'),
						'type' => 'textarea',
						'condition' => array( 'enable-top-bar' => 'enable' )
					),
					'top-bar-right-text' => array(
						'title' => esc_html__('Top Bar Right Text', 'cryptro'),
						'type' => 'textarea',
						'condition' => array( 'enable-top-bar' => 'enable' )
					),
					'top-bar-top-padding' => array(
						'title' => esc_html__('Top Bar Top Padding', 'cryptro'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'data-min' => '0',
						'data-max' => '200',
 						'default' => '10px',
						'selector' => '.cryptro-top-bar{ padding-top: #gdlr#; }' . 
							'.cryptro-top-bar-right-text, .cryptro-top-bar-right .cryptro-dropdown-wpml-flag{ padding-top: #gdlr#; padding-bottom: #gdlr#; }',
						'condition' => array( 'enable-top-bar' => 'enable' )
					),
					'top-bar-bottom-padding' => array(
						'title' => esc_html__('Top Bar Bottom Padding', 'cryptro'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'data-min' => '0',
						'data-max' => '200',
						'default' => '10px',
						'selector' => '.cryptro-top-bar{ padding-bottom: #gdlr#; }',
						'condition' => array( 'enable-top-bar' => 'enable' )
					),
					'top-bar-text-size' => array(
						'title' => esc_html__('Top Bar Text Size', 'cryptro'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'default' => '15px',
						'selector' => '.cryptro-top-bar{ font-size: #gdlr#; }',
						'condition' => array( 'enable-top-bar' => 'enable' )
					),
					'top-bar-bottom-border' => array(
						'title' => esc_html__('Top Bar Bottom Border', 'cryptro'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'data-min' => '0',
						'data-max' => '10',
						'default' => '0',
						'selector' => '.cryptro-top-bar{ border-bottom-width: #gdlr#; }',
						'condition' => array( 'enable-top-bar' => 'enable' )
					),

				)
			), // top bar

			'top-bar-social' => array(
				'title' => esc_html__('Top Bar Social', 'cryptro'),
				'options' => array(
					'enable-top-bar-social' => array(
						'title' => esc_html__('Enable Top Bar Social', 'cryptro'),
						'type' => 'checkbox',
						'default' => 'enable'
					),
					'top-bar-social-style' => array(
						'title' => esc_html__('Top Bar Social Style', 'cryptro'),
						'type' => 'combobox',
						'options' => array(
							'plain' => esc_html__('Plain', 'cryptro'),
							'round' => esc_html__('Round', 'cryptro')
						),
						'default' => 'plain'
					),
					'top-bar-social-delicious' => array(
						'title' => esc_html__('Top Bar Social Delicious Link', 'cryptro'),
						'type' => 'text',
						'condition' => array( 'enable-top-bar-social' => 'enable' )
					),
					'top-bar-social-email' => array(
						'title' => esc_html__('Top Bar Social Email Link', 'cryptro'),
						'type' => 'text',
						'condition' => array( 'enable-top-bar-social' => 'enable' )
					),
					'top-bar-social-deviantart' => array(
						'title' => esc_html__('Top Bar Social Deviantart Link', 'cryptro'),
						'type' => 'text',
						'condition' => array( 'enable-top-bar-social' => 'enable' )
					),
					'top-bar-social-digg' => array(
						'title' => esc_html__('Top Bar Social Digg Link', 'cryptro'),
						'type' => 'text',
						'condition' => array( 'enable-top-bar-social' => 'enable' )
					),
					'top-bar-social-facebook' => array(
						'title' => esc_html__('Top Bar Social Facebook Link', 'cryptro'),
						'type' => 'text',
						'condition' => array( 'enable-top-bar-social' => 'enable' )
					),
					'top-bar-social-flickr' => array(
						'title' => esc_html__('Top Bar Social Flickr Link', 'cryptro'),
						'type' => 'text',
						'condition' => array( 'enable-top-bar-social' => 'enable' )
					),
					'top-bar-social-google-plus' => array(
						'title' => esc_html__('Top Bar Social Google Plus Link', 'cryptro'),
						'type' => 'text',
						'condition' => array( 'enable-top-bar-social' => 'enable' )
					),
					'top-bar-social-lastfm' => array(
						'title' => esc_html__('Top Bar Social Lastfm Link', 'cryptro'),
						'type' => 'text',
						'condition' => array( 'enable-top-bar-social' => 'enable' )
					),
					'top-bar-social-linkedin' => array(
						'title' => esc_html__('Top Bar Social Linkedin Link', 'cryptro'),
						'type' => 'text',
						'condition' => array( 'enable-top-bar-social' => 'enable' )
					),
					'top-bar-social-pinterest' => array(
						'title' => esc_html__('Top Bar Social Pinterest Link', 'cryptro'),
						'type' => 'text',
						'condition' => array( 'enable-top-bar-social' => 'enable' )
					),
					'top-bar-social-rss' => array(
						'title' => esc_html__('Top Bar Social RSS Link', 'cryptro'),
						'type' => 'text',
						'condition' => array( 'enable-top-bar-social' => 'enable' )
					),
					'top-bar-social-skype' => array(
						'title' => esc_html__('Top Bar Social Skype Link', 'cryptro'),
						'type' => 'text',
						'condition' => array( 'enable-top-bar-social' => 'enable' )
					),
					'top-bar-social-stumbleupon' => array(
						'title' => esc_html__('Top Bar Social Stumbleupon Link', 'cryptro'),
						'type' => 'text',
						'condition' => array( 'enable-top-bar-social' => 'enable' )
					),
					'top-bar-social-tumblr' => array(
						'title' => esc_html__('Top Bar Social Tumblr Link', 'cryptro'),
						'type' => 'text',
						'condition' => array( 'enable-top-bar-social' => 'enable' )
					),
					'top-bar-social-twitter' => array(
						'title' => esc_html__('Top Bar Social Twitter Link', 'cryptro'),
						'type' => 'text',
						'condition' => array( 'enable-top-bar-social' => 'enable' )
					),
					'top-bar-social-vimeo' => array(
						'title' => esc_html__('Top Bar Social Vimeo Link', 'cryptro'),
						'type' => 'text',
						'condition' => array( 'enable-top-bar-social' => 'enable' )
					),
					'top-bar-social-youtube' => array(
						'title' => esc_html__('Top Bar Social Youtube Link', 'cryptro'),
						'type' => 'text',
						'condition' => array( 'enable-top-bar-social' => 'enable' )
					),
					'top-bar-social-instagram' => array(
						'title' => esc_html__('Top Bar Social Instagram Link', 'cryptro'),
						'type' => 'text',
						'condition' => array( 'enable-top-bar-social' => 'enable' )
					),
					'top-bar-social-snapchat' => array(
						'title' => esc_html__('Top Bar Social Snapchat Link', 'cryptro'),
						'type' => 'text',
						'condition' => array( 'enable-top-bar-social' => 'enable' )
					),

				)
			),			

			'header' => array(
				'title' => esc_html__('Header', 'cryptro'),
				'options' => array(

					'header-style' => array(
						'title' => esc_html__('Header Style', 'cryptro'),
						'type' => 'combobox',
						'options' => array(
							'plain' => esc_html__('Plain', 'cryptro'),
							'bar' => esc_html__('Bar', 'cryptro'),
							'boxed' => esc_html__('Boxed', 'cryptro'),
							'side' => esc_html__('Side Menu', 'cryptro'),
							'side-toggle' => esc_html__('Side Menu Toggle', 'cryptro'),
						),
						'default' => 'plain',
					),
					'header-plain-style' => array(
						'title' => esc_html__('Header Plain Style', 'cryptro'),
						'type' => 'radioimage',
						'options' => array(
							'menu-right' => get_template_directory_uri() . '/images/header/plain-menu-right.jpg',
							'center-logo' => get_template_directory_uri() . '/images/header/plain-center-logo.jpg',
							'center-menu' => get_template_directory_uri() . '/images/header/plain-center-menu.jpg',
							'splitted-menu' => get_template_directory_uri() . '/images/header/plain-splitted-menu.jpg',
						),
						'default' => 'menu-right',
						'condition' => array( 'header-style' => 'plain' ),
						'wrapper-class' => 'gdlr-core-fullsize'
					),
					'header-plain-bottom-border' => array(
						'title' => esc_html__('Plain Header Bottom Border', 'cryptro'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'data-min' => '0',
						'data-max' => '10',
						'default' => '0',
						'selector' => '.cryptro-header-style-plain{ border-bottom-width: #gdlr#; }',
						'condition' => array( 'header-style' => array('plain') )
					),
					'header-bar-navigation-align' => array(
						'title' => esc_html__('Header Bar Style', 'cryptro'),
						'type' => 'radioimage',
						'options' => array(
							'left' => get_template_directory_uri() . '/images/header/bar-left.jpg',
							'center' => get_template_directory_uri() . '/images/header/bar-center.jpg',
							'center-logo' => get_template_directory_uri() . '/images/header/bar-center-logo.jpg',
						),
						'default' => 'center',
						'condition' => array( 'header-style' => 'bar' ),
						'wrapper-class' => 'gdlr-core-fullsize'
					),
					'header-bar-background-image' => array(
						'title' => esc_html__('Header Bar Background Image', 'cryptro'),
						'type' => 'upload',
						'data-type' => 'file',
						'condition' => array( 'header-style' => 'bar' ),
						'selector' => '.cryptro-header-style-bar.cryptro-header-background{ background-image: url(#gdlr#); }'
					),
					'header-background-style' => array(
						'title' => esc_html__('Header/Navigation Background Style', 'cryptro'),
						'type' => 'combobox',
						'options' => array(
							'solid' => esc_html__('Solid', 'cryptro'),
							'transparent' => esc_html__('Transparent', 'cryptro'),
						),
						'default' => 'solid',
						'condition' => array( 'header-style' => array('plain', 'bar') )
					),
					'top-bar-background-opacity' => array(
						'title' => esc_html__('Top Bar Background Opacity', 'cryptro'),
						'type' => 'fontslider',
						'data-type' => 'opacity',
						'default' => '50',
						'condition' => array( 'header-style' => 'plain', 'header-background-style' => 'transparent' ),
						'selector' => '.cryptro-header-background-transparent .cryptro-top-bar-background{ opacity: #gdlr#; }'
					),
					'header-background-opacity' => array(
						'title' => esc_html__('Header Background Opacity', 'cryptro'),
						'type' => 'fontslider',
						'data-type' => 'opacity',
						'default' => '50',
						'condition' => array( 'header-style' => 'plain', 'header-background-style' => 'transparent' ),
						'selector' => '.cryptro-header-background-transparent .cryptro-header-background{ opacity: #gdlr#; }'
					),
					'navigation-background-opacity' => array(
						'title' => esc_html__('Navigation Background Opacity', 'cryptro'),
						'type' => 'fontslider',
						'data-type' => 'opacity',
						'default' => '50',
						'condition' => array( 'header-style' => 'bar', 'header-background-style' => 'transparent' ),
						'selector' => '.cryptro-navigation-bar-wrap.cryptro-style-transparent .cryptro-navigation-background{ opacity: #gdlr#; }'
					),
					'header-boxed-style' => array(
						'title' => esc_html__('Header Boxed Style', 'cryptro'),
						'type' => 'radioimage',
						'options' => array(
							'menu-right' => get_template_directory_uri() . '/images/header/boxed-menu-right.jpg',
							'center-menu' => get_template_directory_uri() . '/images/header/boxed-center-menu.jpg',
							'splitted-menu' => get_template_directory_uri() . '/images/header/boxed-splitted-menu.jpg',
						),
						'default' => 'menu-right',
						'condition' => array( 'header-style' => 'boxed' ),
						'wrapper-class' => 'gdlr-core-fullsize'
					),
					'boxed-top-bar-background-opacity' => array(
						'title' => esc_html__('Top Bar Background Opacity', 'cryptro'),
						'type' => 'fontslider',
						'data-type' => 'opacity',
						'default' => '0',
						'condition' => array( 'header-style' => 'boxed' ),
						'selector' => '.cryptro-header-boxed-wrap .cryptro-top-bar-background{ opacity: #gdlr#; }'
					),
					'boxed-top-bar-background-extend' => array(
						'title' => esc_html__('Top Bar Background Extend ( Bottom )', 'cryptro'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'data-min' => '0px',
						'data-max' => '200px',
						'default' => '0px',
						'condition' => array( 'header-style' => 'boxed' ),
						'selector' => '.cryptro-header-boxed-wrap .cryptro-top-bar-background{ margin-bottom: -#gdlr#; }'
					),
					'boxed-header-top-margin' => array(
						'title' => esc_html__('Header Top Margin', 'cryptro'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'data-min' => '0px',
						'data-max' => '200px',
						'default' => '0px',
						'condition' => array( 'header-style' => 'boxed' ),
						'selector' => '.cryptro-header-style-boxed{ margin-top: #gdlr#; }'
					),
					'header-side-style' => array(
						'title' => esc_html__('Header Side Style', 'cryptro'),
						'type' => 'radioimage',
						'options' => array(
							'top-left' => get_template_directory_uri() . '/images/header/side-top-left.jpg',
							'middle-left' => get_template_directory_uri() . '/images/header/side-middle-left.jpg',
							'middle-left-2' => get_template_directory_uri() . '/images/header/side-middle-left-2.jpg',
							'top-right' => get_template_directory_uri() . '/images/header/side-top-right.jpg',
							'middle-right' => get_template_directory_uri() . '/images/header/side-middle-right.jpg',
							'middle-right-2' => get_template_directory_uri() . '/images/header/side-middle-right-2.jpg',
						),
						'default' => 'top-left',
						'condition' => array( 'header-style' => 'side' ),
						'wrapper-class' => 'gdlr-core-fullsize'
					),
					'header-side-align' => array(
						'title' => esc_html__('Header Side Text Align', 'cryptro'),
						'type' => 'radioimage',
						'options' => 'text-align',
						'default' => 'left',
						'condition' => array( 'header-style' => 'side' )
					),
					'header-side-toggle-style' => array(
						'title' => esc_html__('Header Side Toggle Style', 'cryptro'),
						'type' => 'radioimage',
						'options' => array(
							'left' => get_template_directory_uri() . '/images/header/side-toggle-left.jpg',
							'right' => get_template_directory_uri() . '/images/header/side-toggle-right.jpg',
						),
						'default' => 'left',
						'condition' => array( 'header-style' => 'side-toggle' ),
						'wrapper-class' => 'gdlr-core-fullsize'
					),
					'header-side-toggle-menu-type' => array(
						'title' => esc_html__('Header Side Toggle Menu Type', 'cryptro'),
						'type' => 'combobox',
						'options' => array(
							'left' => esc_html__('Left Slide Menu', 'cryptro'),
							'right' => esc_html__('Right Slide Menu', 'cryptro'),
							'overlay' => esc_html__('Overlay Menu', 'cryptro'),
						),
						'default' => 'overlay',
						'condition' => array( 'header-style' => 'side-toggle' )
					),
					'header-side-toggle-display-logo' => array(
						'title' => esc_html__('Display Logo', 'cryptro'),
						'type' => 'checkbox',
						'default' => 'enable',
						'condition' => array( 'header-style' => 'side-toggle' )
					),
					'header-width' => array(
						'title' => esc_html__('Header Width', 'cryptro'),
						'type' => 'combobox',
						'options' => array(
							'boxed' => esc_html__('Boxed ( Within Container )', 'cryptro'),
							'full' => esc_html__('Full', 'cryptro'),
							'custom' => esc_html__('Custom', 'cryptro'),
						),
						'condition' => array('header-style'=> array('plain', 'bar', 'boxed'))
					),
					'header-width-pixel' => array(
						'title' => esc_html__('Header Width Pixel', 'cryptro'),
						'type' => 'text',
						'data-type' => 'pixel',
						'default' => '1140px',
						'condition' => array('header-style'=> array('plain', 'bar', 'boxed'), 'header-width' => 'custom'),
						'selector' => '.cryptro-header-container.cryptro-header-custom-container{ max-width: #gdlr#; }'
					),
					'header-full-side-padding' => array(
						'title' => esc_html__('Header Full ( Left/Right ) Padding', 'cryptro'),
						'type' => 'fontslider',
						'data-min' => '0',
						'data-max' => '100',
						'data-type' => 'pixel',
						'default' => '15px',
						'selector' => '.cryptro-header-container.cryptro-header-full{ padding-right: #gdlr#; padding-left: #gdlr#; }',
						'condition' => array('header-style'=> array('plain', 'bar', 'boxed'), 'header-width'=>'full')
					),
					'boxed-header-frame-radius' => array(
						'title' => esc_html__('Header Frame Radius', 'cryptro'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel',
						'default' => '3px',
						'condition' => array( 'header-style' => 'boxed' ),
						'selector' => '.cryptro-header-boxed-wrap .cryptro-header-background{ border-radius: #gdlr#; -moz-border-radius: #gdlr#; -webkit-border-radius: #gdlr#; }'
					),
					'boxed-header-content-padding' => array(
						'title' => esc_html__('Header Content ( Left/Right ) Padding', 'cryptro'),
						'type' => 'fontslider',
						'data-min' => '0',
						'data-max' => '100',
						'data-type' => 'pixel',
						'default' => '30px',
						'selector' => '.cryptro-header-style-boxed .cryptro-header-container-item{ padding-left: #gdlr#; padding-right: #gdlr#; }' . 
							'.cryptro-navigation-right{ right: #gdlr#; } .cryptro-navigation-left{ left: #gdlr#; }',
						'condition' => array( 'header-style' => 'boxed' )
					),
					'navigation-text-top-margin' => array(
						'title' => esc_html__('Navigation Text Top Padding', 'cryptro'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'data-min' => '0',
						'data-max' => '200',
						'default' => '0px',
						'condition' => array( 'header-style' => 'plain', 'header-plain-style' => 'splitted-menu' ),
						'selector' => '.cryptro-header-style-plain.cryptro-style-splitted-menu .cryptro-navigation .sf-menu > li > a{ padding-top: #gdlr#; } ' .
							'.cryptro-header-style-plain.cryptro-style-splitted-menu .cryptro-main-menu-left-wrap,' .
							'.cryptro-header-style-plain.cryptro-style-splitted-menu .cryptro-main-menu-right-wrap{ padding-top: #gdlr#; }'

					),
					'navigation-text-top-margin-boxed' => array(
						'title' => esc_html__('Navigation Text Top Padding', 'cryptro'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'data-min' => '0',
						'data-max' => '200',
						'default' => '0px',
						'condition' => array( 'header-style' => 'boxed', 'header-boxed-style' => 'splitted-menu' ),
						'selector' => '.cryptro-header-style-boxed.cryptro-style-splitted-menu .cryptro-navigation .sf-menu > li > a{ padding-top: #gdlr#; } ' .
							'.cryptro-header-style-boxed.cryptro-style-splitted-menu .cryptro-main-menu-left-wrap,' .
							'.cryptro-header-style-boxed.cryptro-style-splitted-menu .cryptro-main-menu-right-wrap{ padding-top: #gdlr#; }'
					),
					'navigation-text-side-spacing' => array(
						'title' => esc_html__('Navigation Text Side ( Left / Right ) Spaces', 'cryptro'),
						'type' => 'fontslider',
						'data-min' => '0',
						'data-max' => '30',
						'data-type' => 'pixel',
						'default' => '13px',
						'selector' => '.cryptro-navigation .sf-menu > li{ padding-left: #gdlr#; padding-right: #gdlr#; }' . 
							'.cryptro-navigation-bar-wrap .cryptro-navigation-slide-bar{ padding-left: #gdlr#; padding-right: #gdlr#; margin-left: -#gdlr#; }' . 
							'.sf-menu > .cryptro-normal-menu ul{ margin-left: -#gdlr#; }',
						'condition' => array( 'header-style' => array('plain', 'bar', 'boxed') )
					),
					'navigation-slide-bar' => array(
						'title' => esc_html__('Navigation Slide Bar', 'cryptro'),
						'type' => 'checkbox',
						'default' => 'enable',
						'condition' => array( 'header-style' => array('plain', 'bar', 'boxed') )
					),
					'side-header-width-pixel' => array(
						'title' => esc_html__('Header Width Pixel', 'cryptro'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'data-min' => '0',
						'data-max' => '600',
						'default' => '340px',
						'condition' => array('header-style' => array('side', 'side-toggle')),
						'selector' => '.cryptro-header-side-nav{ width: #gdlr#; }' . 
							'.cryptro-header-side-content.cryptro-style-left{ margin-left: #gdlr#; }' .
							'.cryptro-header-side-content.cryptro-style-right{ margin-right: #gdlr#; }'
					),
					'side-header-side-padding' => array(
						'title' => esc_html__('Header Side Padding', 'cryptro'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'data-min' => '0',
						'data-max' => '200',
						'default' => '70px',
						'condition' => array('header-style' => 'side'),
						'selector' => '.cryptro-header-side-nav.cryptro-style-side{ padding-left: #gdlr#; padding-right: #gdlr#; }' . 
							'.cryptro-header-side-nav.cryptro-style-left .sf-vertical > li > ul.sub-menu{ padding-left: #gdlr#; }' .
							'.cryptro-header-side-nav.cryptro-style-right .sf-vertical > li > ul.sub-menu{ padding-right: #gdlr#; }'
					),
					'navigation-text-top-spacing' => array(
						'title' => esc_html__('Navigation Text Top / Bottom Spaces', 'cryptro'),
						'type' => 'fontslider',
						'data-min' => '0',
						'data-max' => '40',
						'data-type' => 'pixel',
						'default' => '16px',
						'selector' => ' .cryptro-navigation .sf-vertical > li{ padding-top: #gdlr#; padding-bottom: #gdlr#; }',
						'condition' => array( 'header-style' => array('side') )
					),
					'logo-right-text' => array(
						'title' => esc_html__('Header Right Text', 'cryptro'),
						'type' => 'textarea',
						'condition' => array('header-style' => 'bar'),
					),
					'logo-right-text-top-padding' => array(
						'title' => esc_html__('Header Right Text Top Padding', 'cryptro'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'data-min' => '0',
						'data-max' => '200',
						'default' => '30px',
						'condition' => array('header-style' => 'bar'),
						'selector' => '.cryptro-header-style-bar .cryptro-logo-right-text{ padding-top: #gdlr#; }'
					),

				)
			), // header
			
			'logo' => array(
				'title' => esc_html__('Logo', 'cryptro'),
				'options' => array(
					'logo' => array(
						'title' => esc_html__('Logo', 'cryptro'),
						'type' => 'upload'
					),
					'logo-top-padding' => array(
						'title' => esc_html__('Logo Top Padding', 'cryptro'),
						'type' => 'fontslider',
						'data-min' => '0',
						'data-max' => '200',
						'data-type' => 'pixel',
						'default' => '20px',
						'selector' => '.cryptro-logo{ padding-top: #gdlr#; }',
						'description' => esc_html__('This option will be omitted on splitted menu option.', 'cryptro'),
					),
					'logo-bottom-padding' => array(
						'title' => esc_html__('Logo Bottom Padding', 'cryptro'),
						'type' => 'fontslider',
						'data-min' => '0',
						'data-max' => '200',
						'data-type' => 'pixel',
						'default' => '20px',
						'selector' => '.cryptro-logo{ padding-bottom: #gdlr#; }',
						'description' => esc_html__('This option will be omitted on splitted menu option.', 'cryptro'),
					),
					'logo-left-padding' => array(
						'title' => esc_html__('Logo Left Padding', 'cryptro'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel',
						'selector' => '.cryptro-logo.cryptro-item-pdlr{ padding-left: #gdlr#; }',
						'description' => esc_html__('Leave this field blank for default value.', 'cryptro'),
					),
					'max-logo-width' => array(
						'title' => esc_html__('Max Logo Width', 'cryptro'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel',
						'default' => '200px',
						'selector' => '.cryptro-logo-inner{ max-width: #gdlr#; }'
					),

					'mobile-logo' => array(
						'title' => esc_html__('Mobile Logo', 'cryptro'),
						'type' => 'upload',
						'description' => esc_html__('Leave this option blank to use the same logo.', 'cryptro'),
					),
					'max-mobile-logo-width' => array(
						'title' => esc_html__('Max Mobile Logo Width', 'cryptro'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel',
						'selector' => '.cryptro-mobile-header-wrap .cryptro-logo-inner{ max-width: #gdlr#; }'
					),
					'mobile-logo-position' => array(
						'title' => esc_html__('Mobile Logo Position', 'cryptro'),
						'type' => 'combobox',
						'options' => array(
							'logo-left' => esc_html__('Logo Left', 'cryptro'),
							'logo-center' => esc_html__('Logo Center', 'cryptro'),
							'logo-right' => esc_html__('Logo Right', 'cryptro'),
						)
					),
				
				)
			),
			'navigation' => array(
				'title' => esc_html__('Navigation', 'cryptro'),
				'options' => array(
					'main-navigation-top-padding' => array(
						'title' => esc_html__('Main Navigation Top Padding', 'cryptro'),
						'type' => 'fontslider',
						'data-min' => '0',
						'data-max' => '200',
						'data-type' => 'pixel',
						'default' => '25px',
						'selector' => '.cryptro-navigation{ padding-top: #gdlr#; }' . 
							'.cryptro-navigation-top{ top: #gdlr#; }'
					),
					'main-navigation-bottom-padding' => array(
						'title' => esc_html__('Main Navigation Bottom Padding', 'cryptro'),
						'type' => 'fontslider',
						'data-min' => '0',
						'data-max' => '200',
						'data-type' => 'pixel',
						'default' => '20px',
						'selector' => '.cryptro-navigation .sf-menu > li > a{ padding-bottom: #gdlr#; }'
					),
					'main-navigation-item-right-padding' => array(
						'title' => esc_html__('Main Navigation Item Right Padding', 'cryptro'),
						'type' => 'fontslider',
						'data-min' => '0',
						'data-max' => '200',
						'data-type' => 'pixel',
						'default' => '0px',
						'selector' => '.cryptro-navigation .cryptro-main-menu{ padding-right: #gdlr#; }'
					),
					'main-navigation-right-padding' => array(
						'title' => esc_html__('Main Navigation Wrap Right Padding', 'cryptro'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel',
						'selector' => '.cryptro-navigation.cryptro-item-pdlr{ padding-right: #gdlr#; }',
						'description' => esc_html__('Leave this field blank for default value.', 'cryptro'),
					),
					'enable-main-navigation-submenu-indicator' => array(
						'title' => esc_html__('Enable Main Navigation Submenu Indicator', 'cryptro'),
						'type' => 'checkbox',
						'default' => 'disable',
					),
					'navigation-right-top-margin' => array(
						'title' => esc_html__('Navigation Right ( search/cart/button ) Top Margin ', 'cryptro'),
						'type' => 'text',
						'data-input-type' => 'pixel',
						'data-type' => 'pixel',
						'selector' => '.cryptro-main-menu-right-wrap{ margin-top: #gdlr#; }'
					),
					'enable-main-navigation-search' => array(
						'title' => esc_html__('Enable Main Navigation Search', 'cryptro'),
						'type' => 'checkbox',
						'default' => 'enable',
					),
					'enable-main-navigation-cart' => array(
						'title' => esc_html__('Enable Main Navigation Cart ( Woocommerce )', 'cryptro'),
						'type' => 'checkbox',
						'default' => 'enable',
						'description' => esc_html__('The icon only shows if the woocommerce plugin is activated', 'cryptro')
					),
					'enable-main-navigation-right-button' => array(
						'title' => esc_html__('Enable Main Navigation Right Button', 'cryptro'),
						'type' => 'checkbox',
						'default' => 'disable',
						'description' => esc_html__('This option will be ignored on header side style', 'cryptro')
					),
					'main-navigation-right-button-style' => array(
						'title' => esc_html__('Main Navigation Right Button Style', 'cryptro'),
						'type' => 'combobox',
						'options' => array(
							'default' => esc_html__('Default', 'cryptro'),
							'round' => esc_html__('Round', 'cryptro'),
							'round-with-shadow' => esc_html__('Round With Shadow', 'cryptro'),
						),
						'condition' => array( 'enable-main-navigation-right-button' => 'enable' ) 
					),
					'main-navigation-right-button-text' => array(
						'title' => esc_html__('Main Navigation Right Button Text', 'cryptro'),
						'type' => 'text',
						'default' => esc_html__('Buy Now', 'cryptro'),
						'condition' => array( 'enable-main-navigation-right-button' => 'enable' ) 
					),
					'main-navigation-right-button-link' => array(
						'title' => esc_html__('Main Navigation Right Button Link', 'cryptro'),
						'type' => 'text',
						'condition' => array( 'enable-main-navigation-right-button' => 'enable' ) 
					),
					'main-navigation-right-button-link-target' => array(
						'title' => esc_html__('Main Navigation Right Button Link Target', 'cryptro'),
						'type' => 'combobox',
						'options' => array(
							'_self' => esc_html__('Current Screen', 'cryptro'),
							'_blank' => esc_html__('New Window', 'cryptro'),
						),
						'condition' => array( 'enable-main-navigation-right-button' => 'enable' ) 
					),
					'right-menu-type' => array(
						'title' => esc_html__('Secondary/Mobile Menu Type', 'cryptro'),
						'type' => 'combobox',
						'options' => array(
							'left' => esc_html__('Left Slide Menu', 'cryptro'),
							'right' => esc_html__('Right Slide Menu', 'cryptro'),
							'overlay' => esc_html__('Overlay Menu', 'cryptro'),
						),
						'default' => 'right'
					),
					'right-menu-style' => array(
						'title' => esc_html__('Secondary/Mobile Menu Style', 'cryptro'),
						'type' => 'combobox',
						'options' => array(
							'hamburger-with-border' => esc_html__('Hamburger With Border', 'cryptro'),
							'hamburger' => esc_html__('Hamburger', 'cryptro'),
						),
						'default' => 'hamburger-with-border'
					),
					
				) // logo-options
			), // logo-navigation			
			
			'fixed-navigation' => array(
				'title' => esc_html__('Fixed Navigation', 'cryptro'),
				'options' => array(

					'enable-main-navigation-sticky' => array(
						'title' => esc_html__('Enable Fixed Navigation Bar', 'cryptro'),
						'type' => 'checkbox',
						'default' => 'enable',
					),
					'enable-logo-on-main-navigation-sticky' => array(
						'title' => esc_html__('Enable Logo on Fixed Navigation Bar', 'cryptro'),
						'type' => 'checkbox',
						'default' => 'enable',
						'condition' => array( 'enable-main-navigation-sticky' => 'enable' )
					),
					'fixed-navigation-bar-logo' => array(
						'title' => esc_html__('Fixed Navigation Bar Logo', 'cryptro'),
						'type' => 'upload',
						'description' => esc_html__('Leave blank to show default logo', 'cryptro'),
						'condition' => array( 'enable-main-navigation-sticky' => 'enable', 'enable-logo-on-main-navigation-sticky' => 'enable' )
					),
					'fixed-navigation-max-logo-width' => array(
						'title' => esc_html__('Fixed Navigation Max Logo Width', 'cryptro'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel',
						'default' => '',
						'condition' => array( 'enable-main-navigation-sticky' => 'enable' ),
						'selector' => '.cryptro-fixed-navigation.cryptro-style-slide .cryptro-logo-inner img{ max-height: none !important; }' .
							'.cryptro-animate-fixed-navigation.cryptro-header-style-plain .cryptro-logo-inner, ' . 
							'.cryptro-animate-fixed-navigation.cryptro-header-style-boxed .cryptro-logo-inner{ max-width: #gdlr#; }'
					),
					'fixed-navigation-logo-top-padding' => array(
						'title' => esc_html__('Fixed Navigation Logo Top Padding', 'cryptro'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel',
						'default' => '20px',
						'condition' => array( 'enable-main-navigation-sticky' => 'enable' ),
						'selector' => '.cryptro-animate-fixed-navigation.cryptro-header-style-plain .cryptro-logo, ' . 
							'.cryptro-animate-fixed-navigation.cryptro-header-style-boxed .cryptro-logo{ padding-top: #gdlr#; }'
					),
					'fixed-navigation-logo-bottom-padding' => array(
						'title' => esc_html__('Fixed Navigation Logo Bottom Padding', 'cryptro'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel',
						'default' => '20px',
						'condition' => array( 'enable-main-navigation-sticky' => 'enable' ),
						'selector' => '.cryptro-animate-fixed-navigation.cryptro-header-style-plain .cryptro-logo, ' . 
							'.cryptro-animate-fixed-navigation.cryptro-header-style-boxed .cryptro-logo{ padding-bottom: #gdlr#; }'
					),
					'fixed-navigation-top-padding' => array(
						'title' => esc_html__('Fixed Navigation Top Padding', 'cryptro'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel',
						'default' => '30px',
						'condition' => array( 'enable-main-navigation-sticky' => 'enable' ),
						'selector' => '.cryptro-animate-fixed-navigation.cryptro-header-style-plain .cryptro-navigation, ' . 
							'.cryptro-animate-fixed-navigation.cryptro-header-style-boxed .cryptro-navigation{ padding-top: #gdlr#; }' . 
							'.cryptro-animate-fixed-navigation.cryptro-header-style-plain .cryptro-navigation-top, ' . 
							'.cryptro-animate-fixed-navigation.cryptro-header-style-boxed .cryptro-navigation-top{ top: #gdlr#; }'
					),
					'fixed-navigation-bottom-padding' => array(
						'title' => esc_html__('Fixed Navigation Bottom Padding', 'cryptro'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel',
						'default' => '25px',
						'condition' => array( 'enable-main-navigation-sticky' => 'enable' ),
						'selector' => '.cryptro-animate-fixed-navigation.cryptro-header-style-plain .cryptro-navigation .sf-menu > li > a, ' . 
							'.cryptro-animate-fixed-navigation.cryptro-header-style-boxed .cryptro-navigation .sf-menu > li > a{ padding-bottom: #gdlr#; }'
					),
					'fixed-navigation-anchor-offset' => array(
						'title' => esc_html__('Fixed Navigation Anchor Offset ( Fixed Navigation Height )', 'cryptro'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel',
						'default' => '75px',
						'condition' => array( 'enable-main-navigation-sticky' => 'enable' ),
					),
					'fixed-navigation-background-opacity' => array(
						'title' => esc_html__('Fixed Navigation Background Opacity', 'cryptro'),
						'type' => 'fontslider',
						'data-type' => 'opacity',
						'default' => '100',
						'condition' => array( 'enable-main-navigation-sticky' => 'enable' ),
						'selector' => '.cryptro-fixed-navigation .cryptro-header-background, .cryptro-fixed-navigation .cryptro-navigation-background{ opacity: #gdlr#; }'
					),
					'enable-mobile-navigation-sticky' => array(
						'title' => esc_html__('Enable Mobile Fixed Navigation Bar', 'cryptro'),
						'type' => 'checkbox',
						'default' => 'enable',
					),
				)
			),

			'title-style' => array(
				'title' => esc_html__('Page Title Style', 'cryptro'),
				'options' => array(

					'default-title-style' => array(
						'title' => esc_html__('Default Page Title Style', 'cryptro'),
						'type' => 'combobox',
						'options' => array(
							'small' => esc_html__('Small', 'cryptro'),
							'medium' => esc_html__('Medium', 'cryptro'),
							'large' => esc_html__('Large', 'cryptro'),
							'custom' => esc_html__('Custom', 'cryptro'),
							'plain' => esc_html__('Plain ( No background )', 'cryptro'),
						),
						'default' => 'small'
					),
					'default-title-align' => array(
						'title' => esc_html__('Default Page Title Alignment', 'cryptro'),
						'type' => 'radioimage',
						'options' => 'text-align',
						'default' => 'left'
					),
					'default-title-top-padding' => array(
						'title' => esc_html__('Default Page Title Top Padding', 'cryptro'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'data-min' => '0',
						'data-max' => '350',
						'default' => '93px',
						'selector' => '.cryptro-page-title-wrap.cryptro-style-custom .cryptro-page-title-content{ padding-top: #gdlr#; }',
						'condition' => array( 'default-title-style' => 'custom' )
					),
					'default-title-bottom-padding' => array(
						'title' => esc_html__('Default Page Title Bottom Padding', 'cryptro'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'data-min' => '0',
						'data-max' => '350',
						'default' => '87px',
						'selector' => '.cryptro-page-title-wrap.cryptro-style-custom .cryptro-page-title-content{ padding-bottom: #gdlr#; }',
						'condition' => array( 'default-title-style' => 'custom' )
					),
					'default-page-caption-top-margin' => array(
						'title' => esc_html__('Default Page Caption Top Margin', 'cryptro'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'data-min' => '0',
						'data-max' => '200',
						'default' => '13px',						
						'selector' => '.cryptro-page-title-wrap.cryptro-style-custom .cryptro-page-caption{ margin-top: #gdlr#; }',
						'condition' => array( 'default-title-style' => 'custom' )
					),
					'default-title-font-transform' => array(
						'title' => esc_html__('Default Page Title Font Transform', 'cryptro'),
						'type' => 'combobox',
						'data-type' => 'text',
						'options' => array(
							'' => esc_html__('Default', 'cryptro'),
							'none' => esc_html__('None', 'cryptro'),
							'uppercase' => esc_html__('Uppercase', 'cryptro'),
							'lowercase' => esc_html__('Lowercase', 'cryptro'),
							'capitalize' => esc_html__('Capitalize', 'cryptro'),
						),
						'default' => 'default',
						'selector' => '.cryptro-page-title-wrap .cryptro-page-title{ text-transform: #gdlr#; }'
					),
					'default-title-font-size' => array(
						'title' => esc_html__('Default Page Title Font Size', 'cryptro'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'default' => '37px',
						'selector' => '.cryptro-page-title-wrap.cryptro-style-custom .cryptro-page-title{ font-size: #gdlr#; }',
						'condition' => array( 'default-title-style' => 'custom' )
					),
					'default-title-font-weight' => array(
						'title' => esc_html__('Default Page Title Font Weight', 'cryptro'),
						'type' => 'text',
						'data-type' => 'text',
						'selector' => '.cryptro-page-title-wrap .cryptro-page-title{ font-weight: #gdlr#; }',
						'description' => esc_html__('Eg. lighter, bold, normal, 300, 400, 600, 700, 800. Leave this field blank for default value (700).', 'cryptro')					
					),
					'default-title-letter-spacing' => array(
						'title' => esc_html__('Default Page Title Letter Spacing', 'cryptro'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'data-min' => '0',
						'data-max' => '20',
						'default' => '0px',
						'selector' => '.cryptro-page-title-wrap.cryptro-style-custom .cryptro-page-title{ letter-spacing: #gdlr#; }',
						'condition' => array( 'default-title-style' => 'custom' )
					),
					'default-caption-font-transform' => array(
						'title' => esc_html__('Default Page Caption Font Transform', 'cryptro'),
						'type' => 'combobox',
						'data-type' => 'text',
						'options' => array(
							'' => esc_html__('Default', 'cryptro'),
							'none' => esc_html__('None', 'cryptro'),
							'uppercase' => esc_html__('Uppercase', 'cryptro'),
							'lowercase' => esc_html__('Lowercase', 'cryptro'),
							'capitalize' => esc_html__('Capitalize', 'cryptro'),
						),
						'default' => 'default',
						'selector' => '.cryptro-page-title-wrap .cryptro-page-caption{ text-transform: #gdlr#; }'
					),
					'default-caption-font-size' => array(
						'title' => esc_html__('Default Page Caption Font Size', 'cryptro'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'default' => '16px',
						'selector' => '.cryptro-page-title-wrap.cryptro-style-custom .cryptro-page-caption{ font-size: #gdlr#; }',
						'condition' => array( 'default-title-style' => 'custom' )
					),
					'default-caption-font-weight' => array(
						'title' => esc_html__('Default Page Caption Font Weight', 'cryptro'),
						'type' => 'text',
						'data-type' => 'text',
						'selector' => '.cryptro-page-title-wrap .cryptro-page-caption{ font-weight: #gdlr#; }',
						'description' => esc_html__('Eg. lighter, bold, normal, 300, 400, 600, 700, 800. Leave this field blank for default value (400).', 'cryptro')					
					),
					'default-caption-letter-spacing' => array(
						'title' => esc_html__('Default Page Caption Letter Spacing', 'cryptro'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'data-min' => '0',
						'data-max' => '20',
						'default' => '0px',
						'selector' => '.cryptro-page-title-wrap.cryptro-style-custom .cryptro-page-caption{ letter-spacing: #gdlr#; }',
						'condition' => array( 'default-title-style' => 'custom' )
					),
					'default-title-background-overlay-opacity' => array(
						'title' => esc_html__('Default Page Title Background Overlay Opacity', 'cryptro'),
						'type' => 'fontslider',
						'data-type' => 'opacity',
						'default' => '80',
						'selector' => '.cryptro-page-title-wrap .cryptro-page-title-overlay{ opacity: #gdlr#; }'
					),
				) 
			), // title style

			'title-background' => array(
				'title' => esc_html__('Page Title Background', 'cryptro'),
				'options' => array(

					'default-title-background' => array(
						'title' => esc_html__('Default Page Title Background', 'cryptro'),
						'type' => 'upload',
						'data-type' => 'file',
						'selector' => '.cryptro-page-title-wrap{ background-image: url(#gdlr#); }'
					),
					'default-portfolio-title-background' => array(
						'title' => esc_html__('Default Portfolio Title Background', 'cryptro'),
						'type' => 'upload',
						'data-type' => 'file',
						'selector' => 'body.single-portfolio .cryptro-page-title-wrap{ background-image: url(#gdlr#); }'
					),
					'default-personnel-title-background' => array(
						'title' => esc_html__('Default Personnel Title Background', 'cryptro'),
						'type' => 'upload',
						'data-type' => 'file',
						'selector' => 'body.single-personnel .cryptro-page-title-wrap{ background-image: url(#gdlr#); }'
					),
					'default-product-title-background' => array(
						'title' => esc_html__('Default Product Transparent Header Background (Woocommerce)', 'cryptro'),
						'type' => 'upload',
						'data-type' => 'file',
						'selector' => 'body.single-product .cryptro-page-title-wrap, ' . 
							'body.single-product .cryptro-header-transparent-substitute{ background-image: url(#gdlr#); }'
					),
					'default-search-title-background' => array(
						'title' => esc_html__('Default Search Title Background', 'cryptro'),
						'type' => 'upload',
						'data-type' => 'file',
						'selector' => 'body.search .cryptro-page-title-wrap{ background-image: url(#gdlr#); }'
					),
					'default-archive-title-background' => array(
						'title' => esc_html__('Default Archive Title Background', 'cryptro'),
						'type' => 'upload',
						'data-type' => 'file',
						'selector' => 'body.archive .cryptro-page-title-wrap{ background-image: url(#gdlr#); }'
					),
					'default-404-background' => array(
						'title' => esc_html__('Default 404 Background', 'cryptro'),
						'type' => 'upload',
						'data-type' => 'file',
						'selector' => '.cryptro-not-found-wrap .cryptro-not-found-background{ background-image: url(#gdlr#); }'
					),
					'default-404-background-opacity' => array(
						'title' => esc_html__('Default 404 Background Opacity', 'cryptro'),
						'type' => 'fontslider',
						'data-type' => 'opacity',
						'default' => '27',
						'selector' => '.cryptro-not-found-wrap .cryptro-not-found-background{ opacity: #gdlr#; }'
					),

				) 
			), // title background

			'blog-title-style' => array(
				'title' => esc_html__('Blog Title Style', 'cryptro'),
				'options' => array(

					'default-blog-title-style' => array(
						'title' => esc_html__('Default Blog Title Style', 'cryptro'),
						'type' => 'combobox',
						'options' => array(
							'small' => esc_html__('Small', 'cryptro'),
							'large' => esc_html__('Large', 'cryptro'),
							'custom' => esc_html__('Custom', 'cryptro'),
							'inside-content' => esc_html__('Inside Content', 'cryptro'),
							'none' => esc_html__('None', 'cryptro'),
						),
						'default' => 'small'
					),
					'default-blog-title-top-padding' => array(
						'title' => esc_html__('Default Blog Title Top Padding', 'cryptro'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'data-min' => '0',
						'data-max' => '400',
						'default' => '93px',
						'selector' => '.cryptro-blog-title-wrap.cryptro-style-custom .cryptro-blog-title-content{ padding-top: #gdlr#; }',
						'condition' => array( 'default-blog-title-style' => 'custom' )
					),
					'default-blog-title-bottom-padding' => array(
						'title' => esc_html__('Default Blog Title Bottom Padding', 'cryptro'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'data-min' => '0',
						'data-max' => '400',
						'default' => '87px',
						'selector' => '.cryptro-blog-title-wrap.cryptro-style-custom .cryptro-blog-title-content{ padding-bottom: #gdlr#; }',
						'condition' => array( 'default-blog-title-style' => 'custom' )
					),
					'default-blog-feature-image' => array(
						'title' => esc_html__('Default Blog Feature Image Location', 'cryptro'),
						'type' => 'combobox',
						'options' => array(
							'content' => esc_html__('Inside Content', 'cryptro'),
							'title-background' => esc_html__('Title Background', 'cryptro'),
							'none' => esc_html__('None', 'cryptro'),
						),
						'default' => 'content',
						'condition' => array( 'default-blog-title-style' => array('small', 'large', 'custom') )
					),
					'default-blog-title-background-image' => array(
						'title' => esc_html__('Default Blog Title Background Image', 'cryptro'),
						'type' => 'upload',
						'data-type' => 'file',
						'selector' => '.cryptro-blog-title-wrap{ background-image: url(#gdlr#); }',
						'condition' => array( 'default-blog-title-style' => array('small', 'large', 'custom') )
					),
					'default-blog-top-bottom-gradient' => array(
						'title' => esc_html__('Default Blog ( Feature Image ) Title Top/Bottom Gradient', 'cryptro'),
						'type' => 'checkbox',
						'default' => 'enable',
					),
					'default-blog-title-background-overlay-opacity' => array(
						'title' => esc_html__('Default Blog Title Background Overlay Opacity', 'cryptro'),
						'type' => 'fontslider',
						'data-type' => 'opacity',
						'default' => '80',
						'selector' => '.cryptro-blog-title-wrap .cryptro-blog-title-overlay{ opacity: #gdlr#; }',
						'condition' => array( 'default-blog-title-style' => array('small', 'large', 'custom') )
					),

				) 
			), // post title style			

			'blog-style' => array(
				'title' => esc_html__('Blog Style', 'cryptro'),
				'options' => array(
					'blog-style' => array(
						'title' => esc_html__('Single Blog Style', 'cryptro'),
						'type' => 'combobox',
						'options' => array(
							'style-1' => esc_html__('Style 1', 'cryptro'),
							'style-2' => esc_html__('Style 2', 'cryptro'),
							'magazine' => esc_html__('Magazine', 'cryptro')
						),
						'default' => 'style-1'
					),
					'blockquote-style' => array(
						'title' => esc_html__('Blockquote Style ( <blockquote> tag )', 'cryptro'),
						'type' => 'combobox',
						'options' => array(
							'style-1' => esc_html__('Style 1', 'cryptro'),
							'style-2' => esc_html__('Style 2', 'cryptro')
						),
						'default' => 'style-1'
					),
					'blog-sidebar' => array(
						'title' => esc_html__('Single Blog Sidebar ( Default )', 'cryptro'),
						'type' => 'radioimage',
						'options' => 'sidebar',
						'default' => 'none',
						'wrapper-class' => 'gdlr-core-fullsize'
					),
					'blog-sidebar-left' => array(
						'title' => esc_html__('Single Blog Sidebar Left ( Default )', 'cryptro'),
						'type' => 'combobox',
						'options' => 'sidebar',
						'default' => 'none',
						'condition' => array( 'blog-sidebar'=>array('left', 'both') )
					),
					'blog-sidebar-right' => array(
						'title' => esc_html__('Single Blog Sidebar Right ( Default )', 'cryptro'),
						'type' => 'combobox',
						'options' => 'sidebar',
						'default' => 'none',
						'condition' => array( 'blog-sidebar'=>array('right', 'both') )
					),
					'blog-max-content-width' => array(
						'title' => esc_html__('Single Blog Max Content Width ( No sidebar layout )', 'cryptro'),
						'type' => 'text',
						'data-type' => 'text',
						'data-input-type' => 'pixel',
						'default' => '900px',
						'selector' => 'body.single-post .cryptro-sidebar-style-none, body.blog .cryptro-sidebar-style-none, ' . 
							'.cryptro-blog-style-2 .cryptro-comment-content{ max-width: #gdlr#; }'
					),
					'blog-thumbnail-size' => array(
						'title' => esc_html__('Single Blog Thumbnail Size', 'cryptro'),
						'type' => 'combobox',
						'options' => 'thumbnail-size',
						'default' => 'full'
					),
					'blog-date-feature' => array(
						'title' => esc_html__('Enable Blog Date Feature', 'cryptro'),
						'type' => 'checkbox',
						'default' => 'enable',
						'condition' => array( 'blog-style' => 'style-1' )
					),
					'blog-date-feature-year' => array(
						'title' => esc_html__('Enable Year on Blog Date Feature', 'cryptro'),
						'type' => 'checkbox',
						'default' => 'disable',
						'condition' => array( 'blog-style' => 'style-1', 'blog-date-feature' => 'enable' )
					),
					'meta-option' => array(
						'title' => esc_html__('Meta Option', 'cryptro'),
						'type' => 'multi-combobox',
						'options' => array( 
							'date' => esc_html__('Date', 'cryptro'),
							'author' => esc_html__('Author', 'cryptro'),
							'category' => esc_html__('Category', 'cryptro'),
							'tag' => esc_html__('Tag', 'cryptro'),
							'comment' => esc_html__('Comment', 'cryptro'),
							'comment-number' => esc_html__('Comment Number', 'cryptro'),
						),
						'default' => array('author', 'category', 'tag', 'comment-number')
					),
					'blog-author' => array(
						'title' => esc_html__('Enable Single Blog Author', 'cryptro'),
						'type' => 'checkbox',
						'default' => 'enable'
					),
					'blog-navigation' => array(
						'title' => esc_html__('Enable Single Blog Navigation', 'cryptro'),
						'type' => 'checkbox',
						'default' => 'enable'
					),
					'pagination-style' => array(
						'title' => esc_html__('Pagination Style', 'cryptro'),
						'type' => 'combobox',
						'options' => array(
							'plain' => esc_html__('Plain', 'cryptro'),
							'rectangle' => esc_html__('Rectangle', 'cryptro'),
							'rectangle-border' => esc_html__('Rectangle Border', 'cryptro'),
							'round' => esc_html__('Round', 'cryptro'),
							'round-border' => esc_html__('Round Border', 'cryptro'),
							'circle' => esc_html__('Circle', 'cryptro'),
							'circle-border' => esc_html__('Circle Border', 'cryptro'),
						),
						'default' => 'round'
					),
					'pagination-align' => array(
						'title' => esc_html__('Pagination Alignment', 'cryptro'),
						'type' => 'radioimage',
						'options' => 'text-align',
						'default' => 'right'
					),
					'enable-related-post' => array(
						'title' => esc_html__('Enable Related Post', 'cryptro'),
						'type' => 'checkbox',
						'default' => 'enable',
						'condition' => array('blog-style' => array('style-2', 'magazine'))
					),
					'related-post-blog-style' => array(
						'title' => esc_html__('Related Post Blog Style', 'cryptro'),
						'type' => 'combobox',
						'options' => array(
							'blog-column' => esc_html__('Blog Column', 'cryptro'), 
							'blog-column-with-frame' => esc_html__('Blog Column With Frame', 'cryptro'), 
						),
						'default' => 'blog-column-with-frame',
						'condition' => array('blog-style' => array('style-2', 'magazine'), 'enable-related-post'=>'enable')
					),
					'related-post-blog-column-style' => array(
						'title' => esc_html__('Related Post Blog Column Style', 'cryptro'),
						'type' => 'combobox',
						'options' => array(
							'style-1' => esc_html__('Style 1', 'cryptro'), 
							'style-2' => esc_html__('Style 2', 'cryptro'), 
						),
						'default' => 'blog-column-with-frame',
						'condition' => array('blog-style' => array('style-2', 'magazine'), 'enable-related-post'=>'enable')
					),
					'related-post-column-size' => array(
						'title' => esc_html__('Related Post Column Size', 'cryptro'),
						'type' => 'combobox',
						'options' => array( 60 => 1, 30 => 2, 20 => 3, 15 => 4, 12 => 5 ),
						'default' => '20',
						'condition' => array('blog-style' => array('style-2', 'magazine'), 'enable-related-post'=>'enable')
					),
					'related-post-meta-option' => array(
						'title' => esc_html__('Related Post Meta Option', 'cryptro'),
						'type' => 'multi-combobox',
						'options' => array(
							'date' => esc_html__('Date', 'cryptro'),
							'author' => esc_html__('Author', 'cryptro'),
							'category' => esc_html__('Category', 'cryptro'),
							'tag' => esc_html__('Tag', 'cryptro'),
							'comment' => esc_html__('Comment', 'cryptro'),
							'comment-number' => esc_html__('Comment Number', 'cryptro'),
						),
						'default' => array('date', 'author', 'category', 'comment-number'),
						'condition' => array('blog-style' => array('style-2', 'magazine'), 'enable-related-post'=>'enable')
					),
					'related-post-thumbnail-size' => array(
						'title' => esc_html__('Related Post Blog Thumbnail Size', 'cryptro'),
						'type' => 'combobox',
						'options' => 'thumbnail-size',
						'default' => 'full',
						'condition' => array('blog-style' => array('style-2', 'magazine'), 'enable-related-post'=>'enable')
					),
					'related-post-num-fetch' => array(
						'title' => esc_html__('Related Post Num Fetch', 'cryptro'),
						'type' => 'text',
						'default' => '3',
						'condition' => array('blog-style' => array('style-2', 'magazine'), 'enable-related-post'=>'enable')
					),
					'related-post-excerpt-number' => array(
						'title' => esc_html__('Related Post Excerpt Number', 'cryptro'),
						'type' => 'text',
						'default' => '0',
						'condition' => array('blog-style' => array('style-2', 'magazine'), 'enable-related-post'=>'enable')
					),
				) // blog-style-options
			), // blog-style-nav

			'blog-social-share' => array(
				'title' => esc_html__('Blog Social Share', 'cryptro'),
				'options' => array(
					'blog-social-share' => array(
						'title' => esc_html__('Enable Single Blog Share', 'cryptro'),
						'type' => 'checkbox',
						'default' => 'enable'
					),
					'blog-social-share-count' => array(
						'title' => esc_html__('Enable Single Blog Share Count', 'cryptro'),
						'type' => 'checkbox',
						'default' => 'enable'
					),
					'blog-social-facebook' => array(
						'title' => esc_html__('Facebook', 'cryptro'),
						'type' => 'checkbox',
						'default' => 'enable'
					),		
					'blog-facebook-access-token' => array(
						'title' => esc_html__('Facebook Access Token', 'cryptro'),
						'type' => 'text',
					),	
					'blog-social-linkedin' => array(
						'title' => esc_html__('Linkedin', 'cryptro'),
						'type' => 'checkbox',
						'default' => 'disable'
					),			
					'blog-social-google-plus' => array(
						'title' => esc_html__('Google Plus', 'cryptro'),
						'type' => 'checkbox',
						'default' => 'enable'
					),			
					'blog-social-pinterest' => array(
						'title' => esc_html__('Pinterest', 'cryptro'),
						'type' => 'checkbox',
						'default' => 'enable'
					),			
					'blog-social-stumbleupon' => array(
						'title' => esc_html__('Stumbleupon', 'cryptro'),
						'type' => 'checkbox',
						'default' => 'disable'
					),			
					'blog-social-twitter' => array(
						'title' => esc_html__('Twitter', 'cryptro'),
						'type' => 'checkbox',
						'default' => 'enable'
					),			
					'blog-social-email' => array(
						'title' => esc_html__('Email', 'cryptro'),
						'type' => 'checkbox',
						'default' => 'disable'
					),
				) // blog-style-options
			), // blog-style-nav
			
			'search-archive' => array(
				'title' => esc_html__('Search/Archive', 'cryptro'),
				'options' => array(
					'archive-blog-sidebar' => array(
						'title' => esc_html__('Archive Blog Sidebar', 'cryptro'),
						'type' => 'radioimage',
						'options' => 'sidebar',
						'default' => 'right',
						'wrapper-class' => 'gdlr-core-fullsize'
					),
					'archive-blog-sidebar-left' => array(
						'title' => esc_html__('Archive Blog Sidebar Left', 'cryptro'),
						'type' => 'combobox',
						'options' => 'sidebar',
						'default' => 'none',
						'condition' => array( 'archive-blog-sidebar'=>array('left', 'both') )
					),
					'archive-blog-sidebar-right' => array(
						'title' => esc_html__('Archive Blog Sidebar Right', 'cryptro'),
						'type' => 'combobox',
						'options' => 'sidebar',
						'default' => 'none',
						'condition' => array( 'archive-blog-sidebar'=>array('right', 'both') )
					),
					'archive-blog-style' => array(
						'title' => esc_html__('Archive Blog Style', 'cryptro'),
						'type' => 'radioimage',
						'options' => array(
							'blog-full' => GDLR_CORE_URL . '/include/images/blog-style/blog-full.png',
							'blog-full-with-frame' => GDLR_CORE_URL . '/include/images/blog-style/blog-full-with-frame.png',
							'blog-column' => GDLR_CORE_URL . '/include/images/blog-style/blog-column.png',
							'blog-column-with-frame' => GDLR_CORE_URL . '/include/images/blog-style/blog-column-with-frame.png',
							'blog-column-no-space' => GDLR_CORE_URL . '/include/images/blog-style/blog-column-no-space.png',
							'blog-image' => GDLR_CORE_URL . '/include/images/blog-style/blog-image.png',
							'blog-image-no-space' => GDLR_CORE_URL . '/include/images/blog-style/blog-image-no-space.png',
							'blog-left-thumbnail' => GDLR_CORE_URL . '/include/images/blog-style/blog-left-thumbnail.png',
							'blog-right-thumbnail' => GDLR_CORE_URL . '/include/images/blog-style/blog-right-thumbnail.png',
						),
						'default' => 'blog-full',
						'wrapper-class' => 'gdlr-core-fullsize'
					),
					'archive-blog-full-style' => array(
						'title' => esc_html__('Blog Full Style', 'cryptro'),
						'type' => 'combobox',
						'options' => array(
							'style-1' => esc_html__('Style 1', 'cryptro'),
							'style-2' => esc_html__('Style 2', 'cryptro'),
						),
						'condition' => array( 'archive-blog-style'=>array('blog-full', 'blog-full-with-frame') )
					),
					'archive-blog-side-thumbnail-style' => array(
						'title' => esc_html__('Blog Side Thumbnail Style', 'cryptro'),
						'type' => 'combobox',
						'options' => array(
							'style-1' => esc_html__('Style 1', 'cryptro'),
							'style-1-large' => esc_html__('Style 1 Large Thumbnail', 'cryptro'),
							'style-2' => esc_html__('Style 2', 'cryptro'),
							'style-2-large' => esc_html__('Style 2 Large Thumbnail', 'cryptro'),
						),
						'condition' => array( 'archive-blog-style'=>array('blog-left-thumbnail', 'blog-right-thumbnail') )
					),
					'archive-blog-column-style' => array(
						'title' => esc_html__('Blog Column Style', 'cryptro'),
						'type' => 'combobox',
						'options' => array(
							'style-1' => esc_html__('Style 1', 'cryptro'),
							'style-2' => esc_html__('Style 2', 'cryptro'),
						),
						'condition' => array( 'archive-blog-style'=>array('blog-column', 'blog-column-with-frame', 'blog-column-no-space') )
					),
					'archive-blog-image-style' => array(
						'title' => esc_html__('Blog Image Style', 'cryptro'),
						'type' => 'combobox',
						'options' => array(
							'style-1' => esc_html__('Style 1', 'cryptro'),
							'style-2' => esc_html__('Style 2', 'cryptro'),
						),
						'condition' => array( 'archive-blog-style'=>array('blog-image', 'blog-image-no-space') )
					),
					'archive-blog-full-alignment' => array(
						'title' => esc_html__('Archive Blog Full Alignment', 'cryptro'),
						'type' => 'combobox',
						'default' => 'enable',
						'options' => array(
							'left' => esc_html__('Left', 'cryptro'),
							'center' => esc_html__('Center', 'cryptro'),
						),
						'condition' => array( 'archive-blog-style' => array('blog-full', 'blog-full-with-frame') )
					),
					'archive-thumbnail-size' => array(
						'title' => esc_html__('Archive Thumbnail Size', 'cryptro'),
						'type' => 'combobox',
						'options' => 'thumbnail-size'
					),
					'archive-show-thumbnail' => array(
						'title' => esc_html__('Archive Show Thumbnail', 'cryptro'),
						'type' => 'checkbox',
						'default' => 'enable',
						'condition' => array( 'archive-blog-style' => array('blog-full', 'blog-full-with-frame', 'blog-column', 'blog-column-with-frame', 'blog-column-no-space', 'blog-left-thumbnail', 'blog-right-thumbnail') )
					),
					'archive-column-size' => array(
						'title' => esc_html__('Archive Column Size', 'cryptro'),
						'type' => 'combobox',
						'options' => array( 60 => 1, 30 => 2, 20 => 3, 15 => 4, 12 => 5 ),
						'default' => 20,
						'condition' => array( 'archive-blog-style' => array('blog-column', 'blog-column-with-frame', 'blog-column-no-space', 'blog-image', 'blog-image-no-space') )
					),
					'archive-excerpt' => array(
						'title' => esc_html__('Archive Excerpt Type', 'cryptro'),
						'type' => 'combobox',
						'options' => array(
							'specify-number' => esc_html__('Specify Number', 'cryptro'),
							'show-all' => esc_html__('Show All ( use <!--more--> tag to cut the content )', 'cryptro'),
						),
						'default' => 'specify-number',
						'condition' => array('archive-blog-style' => array('blog-full', 'blog-full-with-frame', 'blog-column', 'blog-column-with-frame', 'blog-column-no-space', 'blog-left-thumbnail', 'blog-right-thumbnail'))
					),
					'archive-excerpt-number' => array(
						'title' => esc_html__('Archive Excerpt Number', 'cryptro'),
						'type' => 'text',
						'default' => 55,
						'data-input-type' => 'number',
						'condition' => array('archive-blog-style' => array('blog-full', 'blog-full-with-frame', 'blog-column', 'blog-column-with-frame', 'blog-column-no-space', 'blog-left-thumbnail', 'blog-right-thumbnail'), 'archive-excerpt' => 'specify-number')
					),
					'archive-date-feature' => array(
						'title' => esc_html__('Enable Blog Date Feature', 'cryptro'),
						'type' => 'checkbox',
						'default' => 'enable',
						'condition' => array( 'archive-blog-style' => array('blog-full', 'blog-full-with-frame', 'blog-left-thumbnail', 'blog-right-thumbnail') )
					),
					'archive-meta-option' => array(
						'title' => esc_html__('Archive Meta Option', 'cryptro'),
						'type' => 'multi-combobox',
						'options' => array( 
							'date' => esc_html__('Date', 'cryptro'),
							'author' => esc_html__('Author', 'cryptro'),
							'category' => esc_html__('Category', 'cryptro'),
							'tag' => esc_html__('Tag', 'cryptro'),
							'comment' => esc_html__('Comment', 'cryptro'),
							'comment-number' => esc_html__('Comment Number', 'cryptro'),
						),
						'default' => array('date', 'author', 'category')
					),
					'archive-show-read-more' => array(
						'title' => esc_html__('Archive Show Read More Button', 'cryptro'),
						'type' => 'checkbox',
						'default' => 'enable',
						'condition' => array('archive-blog-style' => array('blog-full', 'blog-full-with-frame', 'blog-left-thumbnail', 'blog-right-thumbnail'),)
					),
					'archive-blog-title-font-size' => array(
						'title' => esc_html__('Blog Title Font Size', 'cryptro'),
						'type' => 'text',
						'data-input-type' => 'pixel',
					),
					'archive-blog-title-font-weight' => array(
						'title' => esc_html__('Blog Title Font Weight', 'cryptro'),
						'type' => 'text',
						'description' => esc_html__('Eg. lighter, bold, normal, 300, 400, 600, 700, 800', 'cryptro')
					),
					'archive-blog-title-letter-spacing' => array(
						'title' => esc_html__('Blog Title Letter Spacing', 'cryptro'),
						'type' => 'text',
						'data-input-type' => 'pixel',
					),
					'archive-blog-title-text-transform' => array(
						'title' => esc_html__('Blog Title Text Transform', 'cryptro'),
						'type' => 'combobox',
						'data-type' => 'text',
						'options' => array(
							'none' => esc_html__('None', 'cryptro'),
							'uppercase' => esc_html__('Uppercase', 'cryptro'),
							'lowercase' => esc_html__('Lowercase', 'cryptro'),
							'capitalize' => esc_html__('Capitalize', 'cryptro'),
						),
						'default' => 'none'
					),
				)
			),

			'woocommerce-style' => array(
				'title' => esc_html__('Woocommerce Style', 'cryptro'),
				'options' => array(

					'woocommerce-archive-sidebar' => array(
						'title' => esc_html__('Woocommerce Archive Sidebar', 'cryptro'),
						'type' => 'radioimage',
						'options' => 'sidebar',
						'default' => 'right',
						'wrapper-class' => 'gdlr-core-fullsize'
					),
					'woocommerce-archive-sidebar-left' => array(
						'title' => esc_html__('Woocommerce Archive Sidebar Left', 'cryptro'),
						'type' => 'combobox',
						'options' => 'sidebar',
						'default' => 'none',
						'condition' => array( 'woocommerce-archive-sidebar'=>array('left', 'both') )
					),
					'woocommerce-archive-sidebar-right' => array(
						'title' => esc_html__('Woocommerce Archive Sidebar Right', 'cryptro'),
						'type' => 'combobox',
						'options' => 'sidebar',
						'default' => 'none',
						'condition' => array( 'woocommerce-archive-sidebar'=>array('right', 'both') )
					),
					'woocommerce-archive-column-size' => array(
						'title' => esc_html__('Woocommerce Archive Column Size', 'cryptro'),
						'type' => 'combobox',
						'options' => array( 60 => 1, 30 => 2, 20 => 3, 15 => 4, 12 => 5, 10 => 6, ),
						'default' => 15
					),
					'woocommerce-archive-thumbnail' => array(
						'title' => esc_html__('Woocommerce Archive Thumbnail Size', 'cryptro'),
						'type' => 'combobox',
						'options' => 'thumbnail-size',
						'default' => 'full'
					),
					'woocommerce-related-product-column-size' => array(
						'title' => esc_html__('Woocommerce Related Product Column Size', 'cryptro'),
						'type' => 'combobox',
						'options' => array( 60 => 1, 30 => 2, 20 => 3, 15 => 4, 12 => 5, 10 => 6, ),
						'default' => 15
					),
					'woocommerce-related-product-num-fetch' => array(
						'title' => esc_html__('Woocommerce Related Product Num Fetch', 'cryptro'),
						'type' => 'text',
						'default' => 4,
						'data-input-type' => 'number'
					),
					'woocommerce-related-product-thumbnail' => array(
						'title' => esc_html__('Woocommerce Related Product Thumbnail Size', 'cryptro'),
						'type' => 'combobox',
						'options' => 'thumbnail-size',
						'default' => 'full'
					),
				)
			),

			'portfolio-style' => array(
				'title' => esc_html__('Portfolio Style', 'cryptro'),
				'options' => array(
					'portfolio-slug' => array(
						'title' => esc_html__('Portfolio Slug (Permalink)', 'cryptro'),
						'type' => 'text',
						'default' => 'portfolio',
						'description' => esc_html__('Please save the "Settings > Permalink" area once after made a changes to this field.', 'cryptro')
					),
					'portfolio-category-slug' => array(
						'title' => esc_html__('Portfolio Category Slug (Permalink)', 'cryptro'),
						'type' => 'text',
						'default' => 'portfolio_category',
						'description' => esc_html__('Please save the "Settings > Permalink" area once after made a changes to this field.', 'cryptro')
					),
					'portfolio-tag-slug' => array(
						'title' => esc_html__('Portfolio Tag Slug (Permalink)', 'cryptro'),
						'type' => 'text',
						'default' => 'portfolio_tag',
						'description' => esc_html__('Please save the "Settings > Permalink" area once after made a changes to this field.', 'cryptro')
					),
					'enable-single-portfolio-navigation' => array(
						'title' => esc_html__('Enable Single Portfolio Navigation', 'cryptro'),
						'type' => 'checkbox',
						'default' => 'enable'
					),
					'enable-single-portfolio-navigation-in-same-tag' => array(
						'title' => esc_html__('Enable Single Portfolio Navigation Within Same Tag', 'cryptro'),
						'type' => 'checkbox',
						'default' => 'enable',
						'condition' => array( 'enable-single-portfolio-navigation' => 'enable' )
					),
					'portfolio-icon-hover-link' => array(
						'title' => esc_html__('Portfolio Hover Icon (Link)', 'cryptro'),
						'type' => 'radioimage',
						'options' => 'hover-icon-link',
						'default' => 'icon_link_alt'
					),
					'portfolio-icon-hover-video' => array(
						'title' => esc_html__('Portfolio Hover Icon (Video)', 'cryptro'),
						'type' => 'radioimage',
						'options' => 'hover-icon-video',
						'default' => 'icon_film'
					),
					'portfolio-icon-hover-image' => array(
						'title' => esc_html__('Portfolio Hover Icon (Image)', 'cryptro'),
						'type' => 'radioimage',
						'options' => 'hover-icon-image',
						'default' => 'icon_zoom-in_alt'
					),
					'portfolio-icon-hover-size' => array(
						'title' => esc_html__('Portfolio Hover Icon Size', 'cryptro'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'default' => '22px',
						'selector' => '.gdlr-core-portfolio-thumbnail .gdlr-core-portfolio-icon{ font-size: #gdlr#; }' 
					),
					'enable-related-portfolio' => array(
						'title' => esc_html__('Enable Related Portfolio', 'cryptro'),
						'type' => 'checkbox',
						'default' => 'enable'
					),
					'related-portfolio-style' => array(
						'title' => esc_html__('Related Portfolio Style', 'cryptro'),
						'type' => 'combobox',
						'options' => array(
							'grid' => esc_html__('Grid', 'cryptro'),
							'modern' => esc_html__('Modern', 'cryptro'),
						),
						'condition' => array('enable-related-portfolio'=>'enable')
					),
					'related-portfolio-column-size' => array(
						'title' => esc_html__('Related Portfolio Column Size', 'cryptro'),
						'type' => 'combobox',
						'options' => array( 60 => 1, 30 => 2, 20 => 3, 15 => 4, 12 => 5, 10 => 6, ),
						'default' => 15,
						'condition' => array('enable-related-portfolio'=>'enable')
					),
					'related-portfolio-num-fetch' => array(
						'title' => esc_html__('Related Portfolio Num Fetch', 'cryptro'),
						'type' => 'text',
						'default' => 4,
						'data-input-type' => 'number',
						'condition' => array('enable-related-portfolio'=>'enable')
					),
					'related-portfolio-thumbnail-size' => array(
						'title' => esc_html__('Related Portfolio Thumbnail Size', 'cryptro'),
						'type' => 'combobox',
						'options' => 'thumbnail-size',
						'condition' => array('enable-related-portfolio'=>'enable'),
						'default' => 'medium'
					),
					'related-portfolio-num-excerpt' => array(
						'title' => esc_html__('Related Portfolio Num Excerpt', 'cryptro'),
						'type' => 'text',
						'default' => 20,
						'data-input-type' => 'number',
						'condition' => array('enable-related-portfolio'=>'enable', 'related-portfolio-style'=>'grid')
					),
				)
			),

			'portfolio-archive' => array(
				'title' => esc_html__('Portfolio Archive', 'cryptro'),
				'options' => array(
					'archive-portfolio-sidebar' => array(
						'title' => esc_html__('Archive Portfolio Sidebar', 'cryptro'),
						'type' => 'radioimage',
						'options' => 'sidebar',
						'default' => 'none',
						'wrapper-class' => 'gdlr-core-fullsize'
					),
					'archive-portfolio-sidebar-left' => array(
						'title' => esc_html__('Archive Portfolio Sidebar Left', 'cryptro'),
						'type' => 'combobox',
						'options' => 'sidebar',
						'default' => 'none',
						'condition' => array( 'archive-portfolio-sidebar'=>array('left', 'both') )
					),
					'archive-portfolio-sidebar-right' => array(
						'title' => esc_html__('Archive Portfolio Sidebar Right', 'cryptro'),
						'type' => 'combobox',
						'options' => 'sidebar',
						'default' => 'none',
						'condition' => array( 'archive-portfolio-sidebar'=>array('right', 'both') )
					),
					'archive-portfolio-style' => array(
						'title' => esc_html__('Archive Portfolio Style', 'cryptro'),
						'type' => 'radioimage',
						'options' => array(
							'modern' => get_template_directory_uri() . '/include/options/images/portfolio/modern.png',
							'modern-no-space' => get_template_directory_uri() . '/include/options/images/portfolio/modern-no-space.png',
							'grid' => get_template_directory_uri() . '/include/options/images/portfolio/grid.png',
							'grid-no-space' => get_template_directory_uri() . '/include/options/images/portfolio/grid-no-space.png',
							'modern-desc' => get_template_directory_uri() . '/include/options/images/portfolio/modern-desc.png',
							'modern-desc-no-space' => get_template_directory_uri() . '/include/options/images/portfolio/modern-desc-no-space.png',
							'medium' => get_template_directory_uri() . '/include/options/images/portfolio/medium.png',
						),
						'default' => 'medium',
						'wrapper-class' => 'gdlr-core-fullsize'
					),
					'archive-portfolio-thumbnail-size' => array(
						'title' => esc_html__('Archive Portfolio Thumbnail Size', 'cryptro'),
						'type' => 'combobox',
						'options' => 'thumbnail-size'
					),
					'archive-portfolio-grid-text-align' => array(
						'title' => esc_html__('Archive Portfolio Grid Text Align', 'cryptro'),
						'type' => 'radioimage',
						'options' => 'text-align',
						'default' => 'left',
						'condition' => array( 'archive-portfolio-style' => array( 'grid', 'grid-no-space' ) )
					),
					'archive-portfolio-grid-style' => array(
						'title' => esc_html__('Archive Portfolio Grid Content Style', 'cryptro'),
						'type' => 'combobox',
						'options' => array(
							'normal' => esc_html__('Normal', 'cryptro'),
							'with-frame' => esc_html__('With Frame', 'cryptro'),
							'with-bottom-border' => esc_html__('With Bottom Border', 'cryptro'),
						),
						'default' => 'normal',
						'condition' => array( 'archive-portfolio-style' => array( 'grid', 'grid-no-space' ) )
					),
					'archive-enable-portfolio-tag' => array(
						'title' => esc_html__('Archive Enable Portfolio Tag', 'cryptro'),
						'type' => 'checkbox',
						'default' => 'enable',
						'condition' => array( 'archive-portfolio-style' => array( 'grid', 'grid-no-space', 'modern-desc', 'modern-desc-no-space', 'medium' ) )
					),
					'archive-portfolio-medium-size' => array(
						'title' => esc_html__('Archive Portfolio Medium Thumbnail Size', 'cryptro'),
						'type' => 'combobox',
						'options' => array(
							'small' => esc_html__('Small', 'cryptro'),
							'large' => esc_html__('Large', 'cryptro'),
						),
						'condition' => array( 'archive-portfolio-style' => 'medium' )
					),
					'archive-portfolio-medium-style' => array(
						'title' => esc_html__('Archive Portfolio Medium Thumbnail Style', 'cryptro'),
						'type' => 'combobox',
						'options' => array(
							'left' => esc_html__('Left', 'cryptro'),
							'right' => esc_html__('Right', 'cryptro'),
							'switch' => esc_html__('Switch ( Between Left and Right )', 'cryptro'),
						),
						'default' => 'switch',
						'condition' => array( 'archive-portfolio-style' => 'medium' )
					),
					'archive-portfolio-hover' => array(
						'title' => esc_html__('Archive Portfolio Hover Style', 'cryptro'),
						'type' => 'radioimage',
						'options' => array(
							'title' => get_template_directory_uri() . '/include/options/images/portfolio/hover/title.png',
							'title-icon' => get_template_directory_uri() . '/include/options/images/portfolio/hover/title-icon.png',
							'title-tag' => get_template_directory_uri() . '/include/options/images/portfolio/hover/title-tag.png',
							'icon-title-tag' => get_template_directory_uri() . '/include/options/images/portfolio/hover/icon-title-tag.png',
							'icon' => get_template_directory_uri() . '/include/options/images/portfolio/hover/icon.png',
							'margin-title' => get_template_directory_uri() . '/include/options/images/portfolio/hover/margin-title.png',
							'margin-title-icon' => get_template_directory_uri() . '/include/options/images/portfolio/hover/margin-title-icon.png',
							'margin-title-tag' => get_template_directory_uri() . '/include/options/images/portfolio/hover/margin-title-tag.png',
							'margin-icon-title-tag' => get_template_directory_uri() . '/include/options/images/portfolio/hover/margin-icon-title-tag.png',
							'margin-icon' => get_template_directory_uri() . '/include/options/images/portfolio/hover/margin-icon.png',
							'none' => get_template_directory_uri() . '/include/options/images/portfolio/hover/none.png',
						),
						'default' => 'icon',
						'max-width' => '100px',
						'condition' => array( 'archive-portfolio-style' => array('modern', 'modern-no-space', 'grid', 'grid-no-space', 'medium') ),
						'wrapper-class' => 'gdlr-core-fullsize'
					),
					'archive-portfolio-column-size' => array(
						'title' => esc_html__('Archive Portfolio Column Size', 'cryptro'),
						'type' => 'combobox',
						'options' => array( 60=>1, 30=>2, 20=>3, 15=>4, 12=>5 ),
						'default' => 20,
						'condition' => array( 'archive-portfolio-style' => array('modern', 'modern-no-space', 'grid', 'grid-no-space', 'modern-desc', 'modern-desc-no-space') )
					),
					'archive-portfolio-excerpt' => array(
						'title' => esc_html__('Archive Portfolio Excerpt Type', 'cryptro'),
						'type' => 'combobox',
						'options' => array(
							'specify-number' => esc_html__('Specify Number', 'cryptro'),
							'show-all' => esc_html__('Show All ( use <!--more--> tag to cut the content )', 'cryptro'),
							'none' => esc_html__('Disable Exceprt', 'cryptro'),
						),
						'default' => 'specify-number',
						'condition' => array( 'archive-portfolio-style' => array( 'grid', 'grid-no-space', 'modern-desc', 'modern-desc-no-space', 'medium' ) )
					),
					'archive-portfolio-excerpt-number' => array(
						'title' => esc_html__('Archive Portfolio Excerpt Number', 'cryptro'),
						'type' => 'text',
						'default' => 55,
						'data-input-type' => 'number',
						'condition' => array( 'archive-portfolio-style' => array( 'grid', 'grid-no-space', 'modern-desc', 'modern-desc-no-space', 'medium' ), 'archive-portfolio-excerpt' => 'specify-number' )
					),

				)
			),

			'personnel-style' => array(
				'title' => esc_html__('Personnel Style', 'cryptro'),
				'options' => array(
					'personnel-slug' => array(
						'title' => esc_html__('Personnel Slug (Permalink)', 'cryptro'),
						'type' => 'text',
						'default' => 'personnel',
						'description' => esc_html__('Please save the "Settings > Permalink" area once after made a changes to this field.', 'cryptro')
					),
					'personnel-category-slug' => array(
						'title' => esc_html__('Personnel Category Slug (Permalink)', 'cryptro'),
						'type' => 'text',
						'default' => 'personnel_category',
						'description' => esc_html__('Please save the "Settings > Permalink" area once after made a changes to this field.', 'cryptro')
					),
				)
			),

			'footer' => array(
				'title' => esc_html__('Footer/Copyright', 'cryptro'),
				'options' => array(

					'fixed-footer' => array(
						'title' => esc_html__('Fixed Footer', 'cryptro'),
						'type' => 'checkbox',
						'default' => 'disable'
					),
					'enable-footer' => array(
						'title' => esc_html__('Enable Footer', 'cryptro'),
						'type' => 'checkbox',
						'default' => 'enable'
					),
					'enable-footer-column-divider' => array(
						'title' => esc_html__('Enable Footer Column Divider', 'cryptro'),
						'type' => 'checkbox',
						'default' => 'enable',
						'condition' => array( 'enable-footer' => 'enable' )
					),
					'footer-top-padding' => array(
						'title' => esc_html__('Footer Top Padding', 'cryptro'),
						'type' => 'fontslider',
						'data-min' => '0',
						'data-max' => '300',
						'data-type' => 'pixel',
						'default' => '70px',
						'selector' => '.cryptro-footer-wrapper{ padding-top: #gdlr#; }',
						'condition' => array( 'enable-footer' => 'enable' )
					),
					'footer-bottom-padding' => array(
						'title' => esc_html__('Footer Bottom Padding', 'cryptro'),
						'type' => 'fontslider',
						'data-min' => '0',
						'data-max' => '300',
						'data-type' => 'pixel',
						'default' => '50px',
						'selector' => '.cryptro-footer-wrapper{ padding-bottom: #gdlr#; }',
						'condition' => array( 'enable-footer' => 'enable' )
					),
					'footer-style' => array(
						'title' => esc_html__('Footer Style', 'cryptro'),
						'type' => 'radioimage',
						'wrapper-class' => 'gdlr-core-fullsize',
						'options' => array(
							'footer-1' => get_template_directory_uri() . '/include/options/images/footer-style1.png',
							'footer-2' => get_template_directory_uri() . '/include/options/images/footer-style2.png',
							'footer-3' => get_template_directory_uri() . '/include/options/images/footer-style3.png',
							'footer-4' => get_template_directory_uri() . '/include/options/images/footer-style4.png',
							'footer-5' => get_template_directory_uri() . '/include/options/images/footer-style5.png',
							'footer-6' => get_template_directory_uri() . '/include/options/images/footer-style6.png',
						),
						'default' => 'footer-2',
						'condition' => array( 'enable-footer' => 'enable' )
					),
					'enable-copyright' => array(
						'title' => esc_html__('Enable Copyright', 'cryptro'),
						'type' => 'checkbox',
						'default' => 'enable'
					),
					'copyright-style' => array(
						'title' => esc_html__('Copyright Style', 'cryptro'),
						'type' => 'combobox',
						'options' => array(
							'center' => esc_html__('Center', 'cryptro'),
							'left-right' => esc_html__('Left & Right', 'cryptro'),
						),
						'condition' => array( 'enable-copyright' => 'enable' )
					),
					'copyright-top-padding' => array(
						'title' => esc_html__('Copyright Top Padding', 'cryptro'),
						'type' => 'fontslider',
						'data-min' => '0',
						'data-max' => '300',
						'data-type' => 'pixel',
						'default' => '38px',
						'selector' => '.cryptro-copyright-container{ padding-top: #gdlr#; }',
						'condition' => array( 'enable-copyright' => 'enable' )
					),
					'copyright-bottom-padding' => array(
						'title' => esc_html__('Copyright Bottom Padding', 'cryptro'),
						'type' => 'fontslider',
						'data-min' => '0',
						'data-max' => '300',
						'data-type' => 'pixel',
						'default' => '38px',
						'selector' => '.cryptro-copyright-container{ padding-bottom: #gdlr#; }',
						'condition' => array( 'enable-copyright' => 'enable' )
					),		
					'copyright-text' => array(
						'title' => esc_html__('Copyright Text', 'cryptro'),
						'type' => 'textarea',
						'wrapper-class' => 'gdlr-core-fullsize',
						'condition' => array( 'enable-copyright' => 'enable' )
					),
					'copyright-left' => array(
						'title' => esc_html__('Copyright Left', 'cryptro'),
						'type' => 'textarea',
						'wrapper-class' => 'gdlr-core-fullsize',
						'condition' => array( 'enable-copyright' => 'enable', 'copyright-style' => 'left-right' )
					),
					'copyright-right' => array(
						'title' => esc_html__('Copyright Right', 'cryptro'),
						'type' => 'textarea',
						'wrapper-class' => 'gdlr-core-fullsize',
						'condition' => array( 'enable-copyright' => 'enable', 'copyright-style' => 'left-right' )
					),
					'enable-back-to-top' => array(
						'title' => esc_html__('Enable Back To Top Button', 'cryptro'),
						'type' => 'checkbox',
						'default' => 'disable'
					),
				) // footer-options
			), // footer-nav	
		
		) // general-options
		
	), 2);