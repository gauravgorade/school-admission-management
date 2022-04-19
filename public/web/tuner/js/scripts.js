/**/
/* on load event */
/**/
"use strict";
jQuery(document).ready( function (){
	if ( !is_mobile_device () ) {
		$('body').append('<div id="tuner" class="tuner"><div class="layout-style"><p>Layout Style</p><div class="page-style wide active">Wide</div><div class="page-style boxed">Boxed</div></div> <div class="colors"> <p>Color Skin</p> <div id="color-1" class="color-picker" data-color="#f27c66" style="background-color:#f27c66;"></div><div id="color-2" class="color-picker" data-color="#18bb7c" style="background-color:#18bb7c;"></div><div id="color-3" class="color-picker" data-color="#f9cb8f" style="background-color:#f9cb8f;"></div> </div>  <ul class="patterns"><p>Patterns</p> <li data-pattern="1" class="color-blue active"></li><li data-pattern="2" class="color-blue" style="background-position: -132px -44px;"></li><li data-pattern="3" class="color-blue" style="background-position: -88px 0;"></li><li data-pattern="4" class="color-blue" style="background-position: -88px -44px;"></li><li data-pattern="5" class="color-blue" style="background-position: -44px 0;"></li><li data-pattern="6" class="color-blue" style="background-position: -132px 0;"></li><li data-pattern="7" class="color-blue" style="background-position: -176px 0;"></li><li data-pattern="8" class="color-blue" style="background-position: 0 -44px;"></li></ul> </div> <div id="tuner-style-1" class="tuner-style" style="display: none;"> /* Colors for: main color */ .header-top-panel form input { background: rgb(<span class="darknest">cws_theme_color#</span>); } .action:last-child .action-block:before { border-right-color: #<span>cws_theme_color#</span>; } .price_slider .ui-slider-handle:before, .community.color-1, .main-nav ul ul { border-top-color: #<span>cws_theme_color#</span>; } hr.divider-color:before, .divider-mini, .twitter-1 .divider-mini, .blog-post .tags-post a + a, .action .action-block:before, .cat-courses-item .info-block.bg-color-1:before { border-left-color: #<span>cws_theme_color#</span>; } p.paragraph-border:first-letter, p.paragraph-color:first-letter, p a, ol li, ul li:before, q h3, q:before, q p:after, .widget-tag, .widget-tag a[rel="tag"], .cws-button.white:hover, .page-title h1, .megamenu>ul a:before, .main-nav>ul>li>ul a:before, .info-boxes.error-message .info-box-icon i, .has-error input, .caption .sl-title, .owl-controls .owl-buttons .owl-prev:hover, .owl-controls .owl-buttons .owl-next:hover, .blog-post .tags-post, .quote-avatar-author .author-info span, .page-pagination a:last-child, .page-pagination a:first-child, .widget-contact-form label span, .widget-post .course-date, .widget-instructor .course-date, .widget-course .course-date, .widget-event .event-description span, .widget-comments .header-comments .date, .widget-pages ul a:hover, .widget-navigation>ul>li>ul>li.hover:before, .widget-navigation>ul>li>ul>li:hover:before, .widget-navigation>ul>li>ul>li.active:before, .widget-navigation>ul>li>ul>li.hover>a, .widget-navigation>ul>li>ul>li:hover>a, .widget-navigation>ul>li>ul>li.active, .widget-navigation>ul>li>ul>li>ul>li.hover>a, .twitter .fa-twitter, .widget-subscribe a, .widget_shopping_cart_content ul li a, .widget-selers h4, .course-description .teacher, .price .amount, .banner-offer.bg-color-1 .banner-icon i, .category-item .category-info h4, .widget-course-details .category-info h4, .category-item.list .category-info .count-users i, .category-search>i, .pricing-table.color-1 .price-pt, .pricing-table.color-1 p, .pricing-table.color-1 ul li:before, .comments .button.reply, .comment-title span, .comment .meta strong, .comment-form-rating .stars .stars-active, .community.color-1:hover .community-logo i, .community.color-1 h3, .action .action-block i, .item-instructor.bg-color-1:hover .info-box .social-link, .tabs-box a.active, .sitemap a:hover, .container-404 p span, .social-icon, .main-features .minus, .woocommerce .product_meta .tagged_as a:before, .woocommerce table thead, .woocommerce table tbody .product-remove .remove:hover:before, .woocommerce .cart-collaterals .cart_totals tr td, .event-container-wrap tbody tr td .details, nav a.active, nav a:hover , .cart_totals tr td , .col2-set h3 , .tp-caption .sl-title { color: #<span>cws_theme_color#</span>; } p.paragraph-border:first-letter, .cws-button, .footer-social a, .info-boxes.alt.error-message,.info-boxes.alt.error-message .info-box-icon, .has-error input, .caption .cws-button, .scroll-down, .twitter .fa-twitter, .twitter.alt .fa-twitter, .widget-subscribe a, .community.color-1 .community-logo, .testimonial .owl-pagination .owl-page, .action .action-block, .line-element .level:before, .portfolio-item:hover, .social-icon, .woocommerce table tbody .product-remove .remove:before , .tp-caption .cws-button , .page-pagination a.active , .page-pagination a:hover { border-color: #<span>cws_theme_color#</span>; } p.paragraph-background:first-letter, ins, ins.color, .cws-button, .cws-button.alt:hover, .bg-color-1 , .page-header-top address .phone-number i, .page-header-top address .email i, .main-nav .mobile_menu_switcher, .create-account , footer h2, .footer-social a:hover, .project-details .title-details, .info-boxes.error-message, .info-boxes.alt.error-message .close-button:before, .info-boxes.alt.error-message .close-button:after, .accordions .content-title.active:after, .caption .cws-button, .blog-post .post-info, .page-pagination a.active, .page-pagination a:hover, .widget-event .date .day, .widget-comments .header-comments:before, .widget-navigation>ul>li.hover>a, .widget-navigation>ul>li:hover>a, .widget-navigation>ul>li.active, .widget-navigation>ul>li>ul, .widget-subscribe a:hover, .course-description .course-date, .banner-offer.bg-color-1, .pricing-table.color-1 .header-pt, .ribbon .banner::after, .ribbon .banner::before, .ribbon .text::before, .ribbon .text::after, .community.color-1 .info-block:before, .community.color-1 .community-logo, .testimonial .owl-pagination .owl-page.active, .action .action-block .text, .line-element .level-block, .item-instructor.bg-color-1:hover .info-box .divider, .tabs-box a:before, .head-sitemap, .container-404 .number span, .social-icon:hover, #list-or-grid>div.active, .woocommerce table tbody .product-remove .remove:before, .calendar-header .buttons-calendar-view>div.active, .picture>.hover-effect , .header-top-panel .search-open , .tp-caption .cws-button { background-color: #<span>cws_theme_color#</span>; } </div> <div id="tuner-style-2" class="tuner-style" style="display: none;"> /* Colors for: middle content (the sand color) */ .color-3 .action .action-block:before, .cat-courses-item .info-block.bg-color-3:before { border-left-color: #<span>cws_theme_color_middle#</span>; } .tabs-btn.active, .community.color-2 { border-top-color: #<span>cws_theme_color_middle#</span>; } hr.divider-color:before, .divider-mini, .color-3 .action:last-child .action-block:before, .woocommerce table thead th { border-right-color: #<span>cws_theme_color_middle#</span>; } .cws-button.bt-color-3, .info-boxes.alt.confirmation-message, .info-boxes.alt.confirmation-message .info-box-icon, .has-success input, .accordions .content-title:after, .toggles .content-title:after, .accordions .content-title.active, .ui-datepicker-calendar thead th, .widget-search form .search-submit, .widget-rss .subscribe-form form .button-send, .category-button, .service-icon, .community.color-2 .community-logo, .line-element.color-3 .level:before, .color-3 .action .action-block, .checkbox label:hover, .radio label:hover, .checkbox input[type=checkbox]:checked + label, .radio input[type=radio]:checked + label, .woocommerce table thead tr { border-color: #<span>cws_theme_color_middle#</span>; } .cws-button.alt.bt-color-3:hover, .cws-button.bt-color-3, .bg-color-3, .header-top-panel a.fa-shopping-cart , td.ui-datepicker-today , .tabs-box a:nth-child(3n):before , .footer-contact-form h2, .info-boxes.alt.confirmation-message .close-button:before, .info-boxes.alt.confirmation-message .close-button:after, .accordions .content-title.active:after, .toggles .content-title.active:after, .accordions .content-title.active, td.ui-datepicker-today:before, form.subscribe input[type="submit"], .widget-search form .search-submit, .widget-meta li a:hover, .widget-archives li a:hover, .widget-categories li a:hover, .widget-rss .subscribe-form form .button-send, .price_slider .ui-slider-range, .category-button:hover, .banner-offer.bg-color-2, .pricing-table.color-3 .header-pt, .service-icon:hover, .community.color-2 .info-block:before, .community.color-2 .community-logo, .line-element.color-3 .level-block, .color-3 .action .action-block .text.line-element.color-3 .level-block, .color-3 .action .action-block .text, .item-instructor.bg-color-3:hover .info-box .divider, .select2-container.select2-container--default .select2-results__option--highlighted[aria-selected], .radio label:before, .calendar-header, .event-container-wrap tbody tr td:before, .event-container-wrap tbody tr td .popup { background-color: #<span>cws_theme_color_middle#</span>; } .footer-contact-form form button[type="submit"].cws-button, .has-success input, .accordions .content-title:after, .toggles .content-title:after, .toggles .content-title:hover, .toggles .content-title.active, .ui-datepicker-calendar thead th, .widget-search form .search-submit:hover, .widget-meta li a:before, .widget-archives li a:before, .widget-categories li a:before, .category-button, .banner-offer .banner-icon i, .banner-offer.bg-color-2 .banner-icon i, .pricing-table.color-3 .price-pt, .pricing-table.color-3 p, .pricing-table.color-3 ul li:before, .community.color-2:hover .community-logo i, .community.color-2 h3, .color-3 .action .action-block i, .item-instructor.bg-color-3:hover .info-box .social-link, .checkbox label:before, .carousel-list i , .tabs-box a:nth-child(3n).active { color: #<span>cws_theme_color_middle#</span>; } .service-icon i { color: #<span>cws_theme_color_middle#</span>; }  /* sand color */  { border-color: #<span>cws_theme_color_middle_helper#</span>; } </div> <div id="tuner-style-3" class="tuner-style" style="display: none;"> /* Colors for middle content helper */ .color-2 .action:last-child .action-block:before { border-right-color: #<span>cws_theme_color_middle_helper#</span>; } .color-2 .action .action-block:before, .cat-courses-item .info-block.bg-color-2:before { border-left-color: #<span>cws_theme_color_middle_helper#</span>; } .community { border-top-color: #<span>cws_theme_color_middle_helper#</span>; } .cws-button.bt-color-2, .info-boxes.alt.warning-message, .info-boxes.alt.warning-message .info-box-icon, .has-warning input, .community .community-logo, .line-element.color-2 .level:before, .color-2 .action .action-block { border-color: #<span>cws_theme_color_middle_helper#</span>; } hr.divider-color:before, .twitter-1 .divider-mini, .cws-button.alt.bt-color-2:hover, .cws-button.bt-color-2, .bg-color-2, .header-top-panel a.fa-share-alt , .tabs-box a:nth-child(2n):before , #top_social_links_wrapper , .footer-latest h2, .info-boxes.alt.warning-message .close-button:before, .info-boxes.alt.warning-message .close-button:after, .post-info .comments-post, .banner-offer.bg-color-3, .community .community-logo, .community .info-block:before, .line-element.color-2 .level-block, .color-2 .action .action-block .text, .item-instructor.bg-color-2:hover .info-box .divider { background-color: #<span>cws_theme_color_middle_helper#</span>; } .has-warning input, form.subscribe input[type="submit"]:hover, .banner-offer.bg-color-3 .banner-icon i, .category-item .star-rating>span:before, .comments .star-rating>span:before, .widget-course-details .star-rating>span:before, .pricing-table.color-2 .header-pt, .pricing-table.color-2 .price-pt, .pricing-table.color-2 p, .pricing-table.color-2 ul li:before, .community h3, .community:hover .community-logo i, .color-2 .action .action-block i, .item-instructor.bg-color-2:hover .info-box .social-link, .product .star-rating>span:before, .footer-latest .course-date>* , .tabs-box a:nth-child(2n).active { color: #<span>cws_theme_color_middle_helper#</span>; } </div> <style id="cws-cp-1"></style> <style id="cws-cp-2"></style> <style id="cws-cp-3"></style>')


		jQuery('#tuner-switcher').on('click', function()
		{
			jQuery('#tuner').toggleClass('tuner-visible');
		});

		jQuery('.color-picker').each( function(){
			var el = jQuery(this);
			var def_color = el.data( 'color' );
			var id = el.attr('id');
			var matches = /color-(\d+)/.exec( id );
			if ( matches != null ){
				var index = matches[1];
				var tuner_id = 'tuner-style-' + index;
				var style_id = 'cws-cp-' + index;
				var tuner_el = jQuery( '#' + tuner_id );
				var style_el = jQuery( '#' + style_id );
				if ( tuner_el.length && style_el.length ){
					
					el.ColorPicker({
						color: def_color,
						onShow: function(colpkr)
						{
							jQuery(colpkr).fadeIn(300);
							return false;
						},
						onHide: function(colpkr)
						{
							jQuery(colpkr).fadeOut(300);
							return false;
						},
						onChange: function (hsb, hex, rgb) {
							el.css('background-color', '#' + hex);
							tuner_el.find('span').text(hex);
							tuner_el.find('span.darknest').text(cws_Hex2RGBwithdark(hex,1.14));
							style_el.text(tuner_el.text());
						}
					});
				}

			}
		});
		$("html").addClass("t-pattern-1");
		jQuery('#tuner').on('click', '.patterns li', function()
		{
			jQuery(".tuner .patterns li").removeClass('active');
			jQuery(this).addClass("active");
			var body_el, body_cls, matches, old_pattern, new_pattern_index, new_pattern;
			body_el = jQuery('html');
			body_cls = body_el.attr('class');
			matches = /t-pattern-(\d+)/.exec( body_cls );
			if ( matches != null ){
				old_pattern = matches[0];
				body_el.removeClass(old_pattern);
			}
			new_pattern_index = jQuery(this).data('pattern');
			new_pattern = "t-pattern-" + new_pattern_index;
			body_el.addClass(new_pattern);
		});
		jQuery('#tuner').on('click', '.page-style', function() {
			$('.tuner .page-style').removeClass('active');
			$(this).addClass("active");
			if ( $(this).hasClass("boxed") ) {
				$("body").addClass("boxed");
			} else {
				$("body").removeClass("boxed");
			}
			width_sticky ();
		})
	}
});
function width_sticky () {
	if ( $("body").hasClass("boxed") ) {
		var width_body = $("body").innerWidth();
		$("body.boxed .sticky-menu").css({"width":width_body+"px"});
	} else {
		$("body .sticky-menu").css({"width":"100%","left":"0"});
	}
}
function cws_Hex2RGBwithdark(hex,coef_color) {

  var coef_color = coef_color == undefined ? 1 : coef_color;
  var hex = hex.replace("#", "");

  var color = '';

  if (hex.length == 3) {
   color = Math.round(hexdec(hex.substr(0,1))/coef_color)+',';
   color = color + Math.round(hexdec(hex.substr(1,1))/coef_color)+',';
   color = color + Math.round(hexdec(hex.substr(2,1))/coef_color);
  }else if(hex.length == 6){
   color = Math.round(hexdec(hex.substr(0,2))/coef_color)+',';
   color = color + Math.round(hexdec(hex.substr(2,2))/coef_color)+',';
   color = color + Math.round(hexdec(hex.substr(4,2))/coef_color);
  }
  return color;
 }
 function hexdec(hex_string) {
  hex_string = (hex_string + '')
  .replace(/[^a-f0-9]/gi, '');
  return parseInt(hex_string, 16);
 }