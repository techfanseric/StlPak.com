<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>
			<?php astra_content_bottom(); ?>

			</div> <!-- ast-container -->

		</div><!-- #content -->

		<?php astra_content_after(); ?>

		<?php astra_footer_before(); ?>

		<!-- Custom Footer -->
		<div id="footer-container">
			<!-- Background Canvas -->
			<canvas id="footer-particles-canvas"></canvas>
			<footer class="footer">
				<div class="container">
					<div class="footer-content">
						<div class="footer-section">
							<h3 class="brand-title">
								<img src="<?php echo esc_url( home_url( '/wp-content/uploads/2025/08/cropped-LOGO-4-768x716.png' ) ); ?>" alt="STLPAK Logo" class="footer-logo">
								<span class="brand-text">
									<span class="brand-text-stl">Stl</span><span class="brand-text-pak">Pak</span>
								</span>
							</h3>
							<p class="footer-description">
								Professional food packaging manufacturer supporting partner customization, 8 years of manufacturing excellence.
							</p>
						</div>

						<div class="footer-section">
							<h3>Products</h3>
							<ul class="footer-links">
								<li><a href="<?php echo home_url('/'); ?>egg-packaging">Egg Packaging</a></li>
								<li><a href="<?php echo home_url('/'); ?>bakery-packaging">Bakery Packaging</a></li>
								<li><a href="<?php echo home_url('/'); ?>salad-packaging-containers">Salad Bowls</a></li>
								<li><a href="<?php echo home_url('/'); ?>cpet-hot-food-tray">Food Trays</a></li>
							</ul>
						</div>

						<div class="footer-section">
							<h3>Company</h3>
							<ul class="footer-links">
								<li><a href="<?php echo home_url('/'); ?>about-us">About Us</a></li>
								<li><a href="<?php echo home_url('/'); ?>partners">Partners</a></li>
								<li><a href="<?php echo home_url('/'); ?>dealer/become-dealer">Become a Partner</a></li>
								<li><a href="<?php echo home_url('/'); ?>resources">Resources</a></li>
							</ul>
						</div>

						<div class="footer-section">
							<h3>Social</h3>
							<div class="social-links-grid">
								<div class="social-links-row">
									<a href="#" class="social-link" aria-label="LinkedIn">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="social-svg">
											<path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
											<rect width="4" height="12" x="2" y="9"></rect>
											<circle cx="4" cy="4" r="2"></circle>
										</svg>
									</a>
									<a href="#" class="social-link" aria-label="Twitter">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="social-svg">
											<path d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z"></path>
										</svg>
									</a>
									<a href="#" class="social-link" aria-label="Facebook">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="social-svg">
											<path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
										</svg>
									</a>
								</div>
								<div class="social-links-row">
									<a href="#" class="social-link" aria-label="YouTube">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="social-svg">
											<path d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17"></path>
											<path d="m10 15 5-3-5-3z"></path>
										</svg>
									</a>
									<a href="#" class="social-link" aria-label="TikTok">
										<svg t="1765733598089" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="4801" width="200" height="200"><path d="M674.764 71H522.82c-17.656 0-31.976 14.3-32 31.957l-0.224 191.763-0.085 107.867-0.03 78.478 0.013 63.71 0.063 56.37 0.066 26.084 0.076 17.474 0.086 11.507 0.038 3.284c0.255 18.709-7.551 40.943-21.282 57.7-15.392 18.783-36.534 29.344-63.064 29.344-26.469 0-47.761-10.51-63.462-29.081-13.612-16.1-21.56-37.15-21.56-53.438 0-26.858 10.858-52.472 35.784-71.308 16.225-12.262 41.74-18.015 88.143-18.015 17.673 0 32-14.327 32-32V408.29c0-17.073-13.405-31.14-30.459-31.963-137.67-6.64-237.052 44.319-292.144 151.768-42.032 81.976-44.05 187.049-3.681 271.38 21.718 45.37 54.774 83.124 97.709 109.78C294.98 937.923 351.253 953 415.939 953c63.693 0 117.08-14.723 160.317-42.517 37.408-24.047 65.886-56.952 86.394-96.37 16.045-30.837 26.471-64.128 32.421-98.132l0.198-1.138a397.608 397.608 0 0 0 1.75-11.11l0.303-2.16 0.288-2.137 0.138-1.06 0.264-2.103c0.043-0.349 0.086-0.696 0.127-1.043l0.243-2.068 0.228-2.043 0.11-1.013 0.206-2.006 0.193-1.981 0.18-1.955 0.084-0.968 0.16-1.915 0.074-0.947 0.14-1.874 0.126-1.845 0.06-0.913 0.107-1.802 0.096-1.774 0.083-1.743 0.072-1.713 0.06-1.683 0.049-1.65 0.037-1.62 0.027-1.586 0.01-0.78 0.01-1.537V436.948l0.36 0.19a551.585 551.585 0 0 0 8.793 4.528l2.484 1.242a500.45 500.45 0 0 0 6.154 3.006l2.44 1.162c27.173 12.852 52.008 21.432 74.645 25.692l3.48 0.651 3.401 0.628 4.412 0.803 4.275 0.763 3.116 0.545 3.04 0.523 2.965 0.5 2.89 0.478 2.816 0.456 1.836 0.29 1.804 0.281 2.646 0.402 2.575 0.38 1.676 0.24 1.646 0.23 1.614 0.22 1.583 0.21 1.552 0.2 1.522 0.19 2.226 0.266 1.446 0.164 2.113 0.228 1.372 0.14 1.343 0.128 1.96 0.175 1.27 0.103 1.241 0.094 1.213 0.083 1.185 0.073 1.157 0.063 1.129 0.052 1.1 0.043 0.541 0.017 1.06 0.027c0.35 0.008 0.694 0.013 1.034 0.017l1.006 0.007 0.98-0.003 0.479-0.006 0.94-0.019 0.913-0.029 0.888-0.039c0.291-0.015 0.578-0.031 0.861-0.05l0.837-0.06c16.647-1.31 29.487-15.202 29.487-31.9V312.146c0-16.192-12.095-29.833-28.171-31.77-30.145-3.633-55.732-10.43-76.802-20.217-20.11-9.341-42.178-23.92-58.997-40.624l-0.608-0.608c-19.594-19.664-30.227-40.278-30.645-61.316l-0.011-0.81 0.015-1.168 0.017-5.857-0.034-46.82C706.74 85.3 692.42 71 674.764 71z m-119.987 64h88.021l-0.015 20.092-0.001 0.05c-0.012 0.39-0.018 0.784-0.018 1.18 0 40.855 18.67 77.338 50.165 108.62 22.512 22.36 50.698 40.98 77.137 53.26l1.184 0.547c19.776 9.056 41.844 15.926 66.186 20.672l0.564 0.109v75.711l-1.424-0.223-1.828-0.292-2.82-0.46-2.915-0.486-3.008-0.512-2.057-0.356-3.163-0.556-3.256-0.581-3.35-0.609-3.441-0.634-3.535-0.66c-30.47-5.734-69.776-23.26-117.17-52.839l-2.941-1.845-1.48-0.934c-21.305-13.49-49.117 1.82-49.117 27.037v277.767c0 0.396-0.002 0.797-0.005 1.205l-0.014 1.24-0.01 0.632-0.028 1.291-0.038 1.324-0.047 1.357-0.058 1.39-0.069 1.42-0.079 1.45-0.043 0.738-0.095 1.496-0.052 0.76-0.112 1.54-0.123 1.57-0.135 1.596-0.146 1.624-0.16 1.65-0.17 1.677-0.184 1.702-0.196 1.727-0.209 1.751c-0.035 0.294-0.072 0.59-0.109 0.885l-0.229 1.786-0.119 0.902-0.249 1.82-0.262 1.842-0.136 0.93-0.284 1.873-0.147 0.944-0.305 1.904-0.319 1.924c-0.109 0.644-0.22 1.291-0.334 1.942-4.891 27.953-13.392 55.096-26.153 79.623-15.6 29.983-36.73 54.397-64.227 72.073C509.06 877.596 467.706 889 415.939 889c-101.496 0-171.98-43.76-207.116-117.157-31.682-66.185-30.067-150.24 2.905-214.547l1.3-2.503c38.854-73.85 103.389-111.876 197.836-114.86l2.516-0.069v71.834l-1.008 0.07c-40.927 2.915-70.044 11.99-93.72 29.882-22.673 17.134-38.934 38.337-49.056 62.218-8.318 19.622-12.141 40.232-12.141 60.151 0 31.65 13.45 67.274 36.685 94.758 27.518 32.549 66.442 51.76 112.336 51.76 46.227 0 85.32-19.527 112.567-52.78 23.044-28.122 35.974-64.572 35.783-98.12l-0.07-6.721-0.075-11.468-0.08-20.698-0.061-29.102-0.056-68.204-0.003-14.804 0.014-76.446 0.076-111.548 0.206-185.646z" p-id="4802"></path></svg>
									</a>
								</div>
							</div>
						</div>
					</div>

					<div class="footer-bottom">
						<div class="footer-bottom-content">
							<p class="copyright">© 2025 StlPak. All rights reserved.</p>
							<div class="footer-links-bottom">
								<a href="#">Terms</a>
								<span>·</span>
								<a href="#">Cookies</a>
								<span>·</span>
								<a href="#">Sitemap</a>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>
		<!-- End Custom Footer -->

		<?php astra_footer(); ?>
		<?php astra_footer_after(); ?>

	</div><!-- #page -->

	<?php astra_body_bottom(); ?>

	<?php wp_footer(); ?>
	
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/slick.js"></script>
	<script>
		jQuery(document).ready(function(){
			//Responsive Table
			jQuery('table').each(function(){
			    jQuery(this).wrap('<div class="tableScroll">');
			});
		});
		//div Scroll
		jQuery(document).ready(function() {
			if (jQuery(".divScroll")[0]){
				var stickyTop = jQuery('.divScroll').offset().top;
				jQuery(window).scroll(function() {
					var windowTop = jQuery(window).scrollTop();
					if (stickyTop < windowTop && jQuery(".articleSection, .single .content-area, #content").height() - 100 + jQuery(".articleSection, .single .content-area, #content").offset().top - jQuery(".divScroll").height() > windowTop) {
						jQuery('.divScroll').addClass('side-fixed');
					} else {
						jQuery('.divScroll').removeClass('side-fixed');
					}
				});
			}	
		});
		//Scroll Link
		jQuery(document).ready(function() {
			if (jQuery(".pc5ScrollSection")[0]){
				var stickyTop = jQuery('.pc5ScrollSection').offset().top;
				jQuery(window).scroll(function() {
					var windowTop = jQuery(window).scrollTop();
					if (stickyTop < windowTop && jQuery(".pc5Wrapper").height() - 100 + jQuery(".pc5Wrapper").offset().top - jQuery(".pc5ScrollSection").height() > windowTop) {
						jQuery('.pc5ScrollSection').addClass('fixed');
					} else {
						jQuery('.pc5ScrollSection').removeClass('fixed');
					}
				});
			}	
		});
 	    		// Product SideMenu
		jQuery('#menu-product-sidebar-menu > li.menu-item-has-children:first-child').addClass('active');
		jQuery('#menu-product-sidebar-menu > li.menu-item-has-children:first-child > a').next().slideDown();
		jQuery('#menu-product-sidebar-menu > li.menu-item-has-children > a').on('click', function(e){
			//e.preventDefault();
			jQuery('#menu-product-sidebar-menu > li.menu-item-has-children > ul.sub-menu').slideUp();
			//console.log(jQuery(this).parent());
			var thisVal = jQuery(this).parent();
			if (!thisVal.hasClass('active')) {
				jQuery(this).next().slideDown();
				jQuery('#menu-product-sidebar-menu > li.menu-item-has-children').removeClass('active');
				thisVal.addClass('active');
			} else {
				thisVal.removeClass('active');
				jQuery(this).next().slideUp();
			}
			return false;
		});
      	//Tabs
	    jQuery('ul.tabs li').click(function(){
			var tab_id = jQuery(this).attr('data-tab');

			jQuery('ul.tabs li').removeClass('current');
			jQuery('.tab-content').removeClass('current');

			jQuery(this).addClass('current');
			jQuery("#"+tab_id).addClass('current');
		});
		jQuery('ul.tabs2 li').click(function(){
			var tab_id = jQuery(this).attr('data-tab');

			jQuery('ul.tabs2 li').removeClass('current');
			jQuery('.tab-content2').removeClass('current');

			jQuery(this).addClass('current');
			jQuery("#"+tab_id).addClass('current');
		});
		// 1 Columns - Product Slider
		jQuery('.img1Slider').slick({
		  dots: true,
		  infinite: true,
		  speed: 300,
		  slidesToShow: 1,
		  slidesToScroll: 1,
		  arrows: false,
		  autoplay: true,
		  autoplaySpeed: 3000,
		});
	 	// 3 Columns - Product Slider
		jQuery('.img3Slider, .hp12s10Slider, .hp12s11Slider').slick({
		  dots: false,
		  infinite: true,
		  speed: 300,
		  slidesToShow: 3,
		  slidesToScroll: 1,
		  arrows: true,
		  autoplay: true,
		  autoplaySpeed: 3000,
		  responsive: [{
               breakpoint: 992,
               settings: {
                   slidesToShow: 2
               }
           },{
              breakpoint: 768,
              settings: {
                  slidesToShow: 1
              }
          }]
		});
		// 4 Columns - Product Slider
		jQuery('.img4Slider').slick({
		  dots: false,
		  infinite: true,
		  speed: 300,
		  slidesToShow: 4,
		  slidesToScroll: 1,
		  arrows: true,
		  autoplay: true,
		  autoplaySpeed: 3000,
		  responsive: [{
               breakpoint: 1200,
               settings: {
                   slidesToShow: 3
               }
           },{
               breakpoint: 768,
               settings: {
                   slidesToShow: 2
               }
           },{
              breakpoint: 480,
              settings: {
                  slidesToShow: 1
              }
          }]
		});
		// 6 Columns - Product Slider
		jQuery('.img6Slider').slick({
		  slidesToShow: 6,
		  slidesToScroll: 1,
		  arrows: true,
		  fade: false,
		  responsive: [{
				breakpoint: 1200,
				settings: {
					slidesToShow: 6
				}
			},{
				breakpoint: 992,
				settings: {
					slidesToShow: 5
				}
			},{
				breakpoint: 768,
				settings: {
					slidesToShow: 4
				}
			},{
				breakpoint: 480,
				settings: {
					slidesToShow: 2
				}
			}]
		});
	    // Product Details Slider
		jQuery('.detailProductSlider').slick({
		  slidesToShow: 1,
		  slidesToScroll: 1,
		  arrows: false,
		  fade: false,
		  autoplay: true,
		  autoplaySpeed: 3000,
		  asNavFor: '.productSliderPager'
		});
		jQuery('.productSliderPager').slick({
		  slidesToShow: 4,
		  slidesToScroll: 1,
		  asNavFor: '.detailProductSlider',
		  dots: false,
		  arrows: true,
		  centerMode: false,
		  focusOnSelect: true,
		  vertical: false,
		  responsive: [{
			              breakpoint: 992,
			              settings: {
			                  slidesToShow: 3
			              }
			          },
		     		  {
		                   breakpoint: 768,
		                   settings: {
		                       slidesToShow: 3
		                   }
		               },
		              {
		                  breakpoint: 480,
		                  settings: {
		                      slidesToShow: 2
		                  }
		              }]
		});
		// Timeline Slider
		jQuery('.timelineSlider').slick({
		  dots: false,
		  infinite: true,
		  speed: 300,
		  slidesToShow: 4,
		  slidesToScroll: 1,
		  arrows: true,
		  autoplay: true,
		  autoplaySpeed: 3000,
		  responsive: [{
               breakpoint: 992,
               settings: {
                   slidesToShow: 3
               }
           },{
               breakpoint: 768,
               settings: {
                   slidesToShow: 2
               }
           },{
              breakpoint: 480,
              settings: {
                  slidesToShow: 1
              }
          }]
		});
		// Product Category 3 - Product Slider
		jQuery('.pc3ProductSlider').slick({
		  dots: true,
		  infinite: false,
		  speed: 300,
		  slidesToShow: 3,
		  slidesToScroll: 3,
		  arrows: true,
		  autoplay: true,
		  autoplaySpeed: 3000,
		  responsive: [{
               breakpoint: 992,
               settings: {
                   slidesToShow: 2,
				   slidesToScroll: 2
               }
           },
          {
              breakpoint: 768,
              settings: {
                  slidesToShow: 1,
				  slidesToScroll: 1
              }
          }]
		});
		// PC3 Timeline Slider
		jQuery('.pc3TestimonialSlider').slick({
		  dots: true,
		  infinite: true,
		  speed: 300,
		  slidesToShow: 1,
		  slidesToScroll: 1,
		  arrows: true,
		  autoplay: true,
		  autoplaySpeed: 3000
		});
		// home 8 Slider
		jQuery('.hp8s10Slider').slick({
		  dots: true,
		  infinite: true,
		  speed: 300,
		  slidesToShow: 3,
		  slidesToScroll: 1,
		  arrows: false,
		  autoplay: true,
		  autoplaySpeed: 3000,
		  responsive: [{
               breakpoint: 992,
               settings: {
                   slidesToShow: 2
               }
           },{
              breakpoint: 768,
              settings: {
                  slidesToShow: 1
              }
          }]
		});
		// Product Cateogry 6 - Product Slider
		jQuery('.wus1Slider').slick({
		  dots: true,
		  infinite: true,
		  speed: 300,
		  slidesToShow: 6,
		  slidesToScroll: 3,
		  arrows: false,
		  autoplay: true,
		  autoplaySpeed: 3000,
		  responsive: [{
               breakpoint: 1200,
               settings: {
                   slidesToShow: 5,
				   slidesToScroll: 3,
               }
           },{
               breakpoint: 992,
               settings: {
                   slidesToShow: 4,
				   slidesToScroll: 2,
               }
           },{
               breakpoint: 768,
               settings: {
                   slidesToShow: 3,
				   slidesToScroll: 3,
               }
           },{
              breakpoint: 480,
              settings: {
                  slidesToShow: 2,
				  slidesToScroll: 2,
              }
          }]
		});
				//jQuery Counter Animation
		jQuery('.about2SecTitle').each(function () {
			jQuery(this).prop('Counter',0).animate({
				Counter: jQuery(this).text()
			}, {
				duration: 4000,
				easing: 'swing',
				step: function (now) {
					jQuery(this).text(Math.ceil(now));
				}
			});
		});
				//PD7 - Readmore
		jQuery(document).ready(function () {
			jQuery(".readMoreText").slideUp();
			jQuery(".readmoreBtn").on("click", function () {
				var txt = jQuery(".readMoreText").is(':visible') ? 'Read More' : 'Read Less';
				jQuery(".readmoreBtn").text(txt).toggleClass('read-more');
				jQuery(".readMoreText").slideToggle();
			});
		});
		// Hp7 Testimonial Slider
		jQuery('.hp9Testimonials').slick({
		  dots: false,
		  infinite: true,
		  speed: 300,
		  slidesToShow: 3,
		  slidesToScroll: 1,
		  arrows: true,
		  autoplay: true,
		  autoplaySpeed: 3000,
		  responsive: [{
               breakpoint: 992,
               settings: {
                   slidesToShow: 2,
				   slidesToScroll: 2
               }
           },
          {
              breakpoint: 768,
              settings: {
                  slidesToShow: 1,
				  slidesToScroll: 1
              }
          }]
		});
		// Home 11 Brand Slider
		jQuery('.hp11s1Brands').slick({
		  dots: false,
		  infinite: true,
		  speed: 300,
		  slidesToShow: 12,
		  slidesToScroll: 1,
		  arrows: false,
		  autoplay: true,
		  autoplaySpeed: 3000,
		  responsive: [{
               breakpoint: 1340,
               settings: {
                   slidesToShow: 9,
               }
           },{
               breakpoint: 1200,
               settings: {
                   slidesToShow: 7,
               }
           },{
              breakpoint: 992,
              settings: {
                  slidesToShow: 6,
              }
          },{
              breakpoint: 768,
              settings: {
                  slidesToShow: 4,
              }
          },{
              breakpoint: 480,
              settings: {
                  slidesToShow: 3,
              }
          }]
		});
		// Home 12/ Home 13 - Slider
		jQuery('.hp12s7Slider, .hp13s3Slider').slick({
		  dots: false,
		  infinite: true,
		  speed: 300,
		  slidesToShow: 1,
		  slidesToScroll: 1,
		  arrows: true,
		  autoplay: true,
		  autoplaySpeed: 3000,
		});
		// Home 16 - Product Slider
		jQuery('.hp16s9Brands').slick({
		  dots: false,
		  infinite: true,
		  speed: 300,
		  slidesToShow: 4,
		  slidesToScroll: 1,
		  arrows: false,
		  autoplay: true,
		  autoplaySpeed: 3000,
		  responsive: [{
               breakpoint: 1200,
               settings: {
                   slidesToShow: 3
               }
           },{
               breakpoint: 768,
               settings: {
                   slidesToShow: 2
               }
           },{
              breakpoint: 480,
              settings: {
                  slidesToShow: 1
              }
          }]
		});
		//forcefull scroll
		jQuery(document).ready(function() {
			jQuery('a[href*=\\#]').on('click', function(e){
				e.preventDefault();
				jQuery('html, body').animate({
					scrollTop : jQuery(this.hash).offset().top - 150
				}, 1);
			});
		});

		// Global Contact Form Handler
		jQuery(document).ready(function() {
			jQuery('#globalContactForm').on('submit', function(e) {
				e.preventDefault();

				// Basic form validation
				var name = jQuery('input[name="name"]').val();
				var email = jQuery('input[name="email"]').val();
				var product = jQuery('select[name="product"]').val();

				if (!name || !email || !product) {
					alert('Please fill in all required fields.');
					return;
				}

				// Show loading state
				var submitBtn = jQuery(this).find('.btn-submit');
				var originalText = submitBtn.text();
				submitBtn.prop('disabled', true).text('Sending...');

				// Here you would typically send the form data to your server
				// For now, we'll just simulate a submission
				setTimeout(function() {
					alert('Thank you for your inquiry! We will contact you within 24 hours.');
					// Reset form
					jQuery('#globalContactForm')[0].reset();
					submitBtn.prop('disabled', false).text(originalText);
				}, 1500);
			});
		});

		// 3D Box Structure Particle Effect
		jQuery(document).ready(function() {
			const canvas = document.getElementById('footer-particles-canvas');
			if (!canvas) return;

			const ctx = canvas.getContext('2d');
			const boxes = [];
			const maxBoxes = 15;
			let time = 0;

			// Set canvas size
			function resizeCanvas() {
				const container = document.getElementById('footer-container');
				canvas.width = container.offsetWidth;
				canvas.height = container.offsetHeight;
				initBoxes();
			}

			// 3D Box class
			class Box3D {
				constructor(index) {
					this.index = index;
					this.reset();
				}

				reset() {
					// Distribute boxes across the entire canvas
					// Use random distribution with minimum spacing
					const margin = 100;
					const minDistance = 150;

					let attempts = 0;
					let validPosition = false;

					while (!validPosition && attempts < 100) {
						// Random position across entire canvas
						this.x = margin + Math.random() * (canvas.width - margin * 2);
						this.y = margin + Math.random() * (canvas.height - margin * 2);
						this.z = Math.random() * 100 - 50;

						// Check minimum distance from other boxes
						validPosition = true;
						for (let other of boxes) {
							if (other && other !== this) {
								const dx = this.x - other.x;
								const dy = this.y - other.y;
								const distance = Math.sqrt(dx * dx + dy * dy);
								if (distance < minDistance) {
									validPosition = false;
									break;
								}
							}
						}
						attempts++;
					}

					// Varied box sizes
					this.size = 15 + Math.random() * 25;
					this.height = this.size * (0.6 + Math.random() * 0.6);
					this.depth = this.size * (0.6 + Math.random() * 0.6);

					// Animation properties
					this.rotationX = Math.random() * Math.PI * 2;
					this.rotationY = Math.random() * Math.PI * 2;
					this.rotationZ = Math.random() * Math.PI * 2;

					// Varied rotation speeds for organic feel
					this.rotationSpeedX = (Math.random() - 0.5) * 0.0015;
					this.rotationSpeedY = (Math.random() - 0.5) * 0.0025;
					this.rotationSpeedZ = (Math.random() - 0.5) * 0.0008;

					// Varied opacity - increased visibility
					this.opacity = 0.08 + Math.random() * 0.12;
					this.floatPhase = Math.random() * Math.PI * 2;
					this.floatSpeed = 0.0003 + Math.random() * 0.0007;
				}

				update() {
					// Gentle rotation
					this.rotationX += this.rotationSpeedX;
					this.rotationY += this.rotationSpeedY;
					this.rotationZ += this.rotationSpeedZ;

					// Floating motion
					this.floatPhase += this.floatSpeed;
					const floatOffset = Math.sin(this.floatPhase) * 10;

					// Pulsing opacity
					this.currentOpacity = this.opacity * (0.7 + Math.sin(time * 0.001 + this.index) * 0.3);
				}

				getVertices() {
					// Calculate 3D vertices of the box
					const s = this.size / 2;
					const h = this.height / 2;
					const d = this.depth / 2;

					const vertices = [
						// Front face
						[-s, -h, d], [s, -h, d], [s, h, d], [-s, h, d],
						// Back face
						[-s, -h, -d], [s, -h, -d], [s, h, -d], [-s, h, -d]
					];

					// Apply rotations
					return vertices.map(vertex => {
						let [x, y, z] = vertex;

						// Add floating effect to z
						z += Math.sin(this.floatPhase) * 5;

						// Rotate around X axis
						let tempY = y * Math.cos(this.rotationX) - z * Math.sin(this.rotationX);
						let tempZ = y * Math.sin(this.rotationX) + z * Math.cos(this.rotationX);
						y = tempY;
						z = tempZ;

						// Rotate around Y axis
						let tempX = x * Math.cos(this.rotationY) + z * Math.sin(this.rotationY);
						tempZ = -x * Math.sin(this.rotationY) + z * Math.cos(this.rotationY);
						x = tempX;
						z = tempZ;

						// Rotate around Z axis
						tempX = x * Math.cos(this.rotationZ) - y * Math.sin(this.rotationZ);
						tempY = x * Math.sin(this.rotationZ) + y * Math.cos(this.rotationZ);
						x = tempX;
						y = tempY;

						// Project to 2D
						const scale = 1 / (1 + z / 500);
						const projX = this.x + x * scale;
						const projY = this.y + y * scale;

						return [projX, projY, z, scale];
					});
				}

				draw() {
					const vertices = this.getVertices();

					// Draw box edges
					const edges = [
						// Front face
						[0, 1], [1, 2], [2, 3], [3, 0],
						// Back face
						[4, 5], [5, 6], [6, 7], [7, 4],
						// Connecting edges
						[0, 4], [1, 5], [2, 6], [3, 7]
					];

					ctx.save();

					// Edge opacity
					const edgeOpacity = this.currentOpacity * 0.9;

					// Set stroke style once before drawing all edges
					ctx.strokeStyle = `rgba(220, 220, 220, ${edgeOpacity})`;

					// Draw all edges with consistent styling
					edges.forEach(([start, end]) => {
						const [x1, y1, z1, scale1] = vertices[start];
						const [x2, y2, z2, scale2] = vertices[end];
						const avgZ = (z1 + z2) / 2;
						const avgScale = (scale1 + scale2) / 2;

						// Adjust line width based on depth
						ctx.lineWidth = Math.max(0.4, 0.5 * avgScale);

						// Start new path for each edge
						ctx.beginPath();
						ctx.moveTo(x1, y1);
						ctx.lineTo(x2, y2);
						ctx.stroke();
					});

					ctx.restore();
				}
			}

			// Initialize boxes
			function initBoxes() {
				boxes.length = 0;
				for (let i = 0; i < maxBoxes; i++) {
					boxes.push(new Box3D(i));
				}
			}

			// Animation loop
			function animate() {
				// Clear canvas and fill with background color
				ctx.clearRect(0, 0, canvas.width, canvas.height);
				ctx.fillStyle = '#1D1F21'; // Same as background
				ctx.fillRect(0, 0, canvas.width, canvas.height);

				time += 0.016;

				// Update and draw boxes
				boxes.forEach(box => {
					box.update();
					box.draw();
				});

				requestAnimationFrame(animate);
			}

			// Mouse interaction
			jQuery('#footer-container').on('mousemove', function(e) {
				const rect = canvas.getBoundingClientRect();
				const mouseX = e.clientX - rect.left;
				const mouseY = e.clientY - rect.top;

				boxes.forEach(box => {
					const dx = box.x - mouseX;
					const dy = box.y - mouseY;
					const distance = Math.sqrt(dx * dx + dy * dy);

					if (distance < 150) {
						const influence = (150 - distance) / 150;
						box.rotationSpeedX = influence * 0.005;
						box.rotationSpeedY = influence * 0.008;
						// More subtle opacity increase
						box.opacity = Math.min(0.1, box.opacity + influence * 0.03);
					} else {
						box.rotationSpeedX *= 0.95;
						box.rotationSpeedY *= 0.95;
					}
				});
			});

			// Initialize
			resizeCanvas();
			animate();

			// Handle resize
			window.addEventListener('resize', resizeCanvas);
		});

			</script>
</body>
</html>
