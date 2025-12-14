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
		// Product Cateogry 6 - Product Slider
		jQuery('.pc6s5Slider').slick({
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
                   slidesToShow: 4,
				   slidesToScroll: 2,
               }
           },{
               breakpoint: 992,
               settings: {
                   slidesToShow: 3,
				   slidesToScroll: 3,
               }
           },{
               breakpoint: 768,
               settings: {
                   slidesToShow: 2,
				   slidesToScroll: 2,
               }
           },{
              breakpoint: 480,
              settings: {
                  slidesToShow: 1,
				  slidesToScroll: 1,
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

			</script>
	</body>
</html>
