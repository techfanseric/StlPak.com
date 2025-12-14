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
							<p class="text-secondary">
								Professional food packaging manufacturer supporting partner customization, 8 years of manufacturing excellence, serving renowned global brands.
							</p>
						</div>

						<div class="footer-section">
							<h3>Products</h3>
							<ul class="footer-links">
								<li><a href="<?php echo home_url('/'); ?>egg-packaging">Egg Packaging</a></li>
								<li><a href="<?php echo home_url('/'); ?>bakery-packaging">Bakery Packaging</a></li>
								<li><a href="<?php echo home_url('/'); ?>fruit-packaging">Fruit Packaging</a></li>
								<li><a href="<?php echo home_url('/'); ?>products">All Products</a></li>
							</ul>
						</div>

						<div class="footer-section">
							<h3>Partnership</h3>
							<ul class="footer-links">
								<li><a href="<?php echo home_url('/'); ?>dealer/become-dealer">Become Partner</a></li>
								<li><a href="<?php echo home_url('/'); ?>dealer/dealer-policy">Partnership Benefits</a></li>
								<li><a href="<?php echo home_url('/'); ?>dealer/success-cases">Success Stories</a></li>
								<li><a href="<?php echo home_url('/'); ?>dealer">Partner Program</a></li>
							</ul>
						</div>

						<div class="footer-section">
							<h3>Global Contact</h3>
							<ul class="footer-links">
								<li>Global: +1-855-888-7888</li>
								<li>Email: global@stlpak.com</li>
								<li>Shanghai Office: Qingpu District</li>
								<li>Factory: Yangzhou Economic Zone</li>
							</ul>
						</div>
					</div>

					<div class="footer-bottom">
						<p>© 2025 StlPak. All rights reserved. | Global Food Packaging Manufacturer</p>
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
