<?php
/**
 * The header for Astra Theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?><!DOCTYPE html>
<?php astra_html_before(); ?>
<html <?php language_attributes(); ?>>
<head>
<?php astra_head_top(); ?>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/slick.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/responsive.css">

<?php remove_action('wp_head', 'rel_canonical'); ?>
<?php wp_head(); ?>
<?php astra_head_bottom(); ?>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-263185550-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-263185550-1');
</script>
</head>

<body <?php astra_schema_body(); ?> <?php body_class(); ?>>
<!-- 暂时不显示侧边栏 -->
<!-- <div style="display: none;"><?php echo do_shortcode('[ca-sidebar id="2218"]'); ?></div> -->
<div class="hidden">
	<div id="contactPopUpForm">
		<div class="quickQuote">
			<div class="qqTitleWrapper"><div class="quickQuoteTitle">Send Your Inquiry Today</div></div>
			<?php echo do_shortcode('[fluentform id="1"]'); ?>
		</div>
	</div>
</div>
<?php astra_body_top(); ?>
<?php wp_body_open(); ?>
<div 
	<?php
	echo astra_attr(
		'site',
		array(
			'id'    => 'page',
			'class' => 'hfeed site',
		)
	);
	?>
>
	<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html( astra_default_strings( 'string-header-skip-link', false ) ); ?></a>
	
	<?php astra_header_before(); ?>

    <header class="header">
      <div class="container">
        <nav class="navbar">
          <div class="logo">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
              <img src="<?php echo esc_url( home_url( '/wp-content/uploads/2025/08/cropped-LOGO-4-768x716.png' ) ); ?>" alt="STLPAK Logo" class="logo-image">
              <span class="logo-text">
              <span class="logo-text-stl">Stl</span><span class="logo-text-pak">Pak</span>
            </span>
            </a>
          </div>

          <button class="mobile-menu-toggle" id="mobile-menu-toggle">
            <span>Menu</span>
          </button>

          <ul class="nav-menu" id="nav-menu">
            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nav-link">Home</a></li>

            <li class="dropdown">
              <a href="#" class="nav-link dropdown-toggle">Products</a>
              <div class="dropdown-menu">
                <div class="dropdown-content">
                  <div class="dropdown-main">
                    <div class="dropdown-section">
                      <div class="section-header">
                        <h3 class="section-title">By Product Type</h3>
                      </div>
                      <div class="product-cards-grid">
                        <a href="<?php echo esc_url( home_url( '/clear-egg-carton' ) ); ?>" class="product-card">
                          <div class="card-image">
                            <img src="/wp-content/uploads/2024/05/6-16.png" alt="Egg Packaging" loading="lazy">
                            <div class="card-overlay">
                              <p class="overlay-desc">Secure egg cartons and trays</p>
                            </div>
                          </div>
                          <div class="card-title">Egg Packaging</div>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/clear-pastry-container' ) ); ?>" class="product-card">
                          <div class="card-image">
                            <img src="/wp-content/uploads/2024/05/4-23.png" alt="Cake Containers" loading="lazy">
                            <div class="card-overlay">
                              <p class="overlay-desc">Display and transport solutions</p>
                            </div>
                          </div>
                          <div class="card-title">Pastry Containers</div>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/salad-packaging-containers' ) ); ?>" class="product-card">
                          <div class="card-image">
                            <img src="/wp-content/uploads/2024/05/2-26.png" alt="Clamshell Packaging" loading="lazy">
                            <div class="card-overlay">
                              <p class="overlay-desc">Tamper-evident containers</p>
                            </div>
                          </div>
                          <div class="card-title">Clamshell Packaging</div>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/blueberry-punnet' ) ); ?>" class="product-card">
                          <div class="card-image">
                            <img src="/wp-content/uploads/2024/05/1-24.png" alt="Blueberry Packaging" loading="lazy">
                            <div class="card-overlay">
                              <p class="overlay-desc">Freshness sealing options</p>
                            </div>
                          </div>
                          <div class="card-title">Blueberry Packaging</div>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/salad-packaging-containers' ) ); ?>" class="product-card">
                          <div class="card-image">
                            <img src="/wp-content/uploads/2024/05/3-23.png" alt="Salad Containers" loading="lazy">
                            <div class="card-overlay">
                              <p class="overlay-desc">Clear food-safe bowls</p>
                            </div>
                          </div>
                          <div class="card-title">Salad Bowls</div>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/cpet-hot-food-tray' ) ); ?>" class="product-card">
                          <div class="card-image">
                            <img src="/wp-content/uploads/2024/05/5-19.png" alt="Food Tray" loading="lazy">
                            <div class="card-overlay">
                              <p class="overlay-desc">High temperature resistant trays</p>
                            </div>
                          </div>
                          <div class="card-title">Food Trays</div>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/kraft-bowl' ) ); ?>" class="product-card">
                          <div class="card-image">
                            <img src="/wp-content/uploads/2024/05/7-10.png" alt="Paper Packaging" loading="lazy">
                            <div class="card-overlay">
                              <p class="overlay-desc">Eco-friendly paper containers</p>
                            </div>
                          </div>
                          <div class="card-title">Paper Packaging</div>
                        </a>
                      </div>
                    </div>

                    <div class="dropdown-section">
                      <div class="section-header">
                        <h3 class="section-title">By Application</h3>
                      </div>
                      <div class="section-grid">
                        <a href="<?php echo esc_url( home_url( '/products' ) ); ?>" class="product-item">
                          <div class="product-icon"></div>
                          <img class="product-image" src="/wp-content/uploads/2025/12/supermarket_retail_pack@1x.png" alt="Supermarket Retail" loading="lazy">
                          <div class="product-info">
                            <div>
                              <h4>Supermarket Retail</h4>
                              <p>Retail-ready packaging solutions</p>
                            </div>
                          </div>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/products' ) ); ?>" class="product-item">
                          <div class="product-icon"></div>
                          <img class="product-image" src="/wp-content/uploads/2025/12/fresh_ecommerce_pack@1x.png" alt="Fresh E-commerce" loading="lazy">
                          <div class="product-info">
                            <div>
                              <h4>Fresh E-commerce</h4>
                              <p>Direct-to-consumer packaging</p>
                            </div>
                          </div>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/products' ) ); ?>" class="product-item">
                          <div class="product-icon"></div>
                          <img class="product-image" src="/wp-content/uploads/2025/12/gift_packaging_opt@1x.png" alt="Gift Packaging" loading="lazy">
                          <div class="product-info">
                            <div>
                              <h4>Gift Packaging</h4>
                              <p>Premium presentation options</p>
                            </div>
                          </div>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/products' ) ); ?>" class="product-item">
                          <div class="product-icon"></div>
                          <img class="product-image" src="/wp-content/uploads/2025/12/farmers_market_pack@1x.png" alt="Farmers' Market" loading="lazy">
                          <div class="product-info">
                            <div>
                              <h4>Farmers' Market</h4>
                              <p>Local fresh produce packaging</p>
                            </div>
                          </div>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/products' ) ); ?>" class="product-item">
                          <div class="product-icon"></div>
                          <img class="product-image" src="/wp-content/uploads/2025/12/food_service_containers@1x.png" alt="Food Service" loading="lazy">
                          <div class="product-info">
                            <div>
                              <h4>Food Service</h4>
                              <p>Professional grade containers</p>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>

                    <div class="dropdown-section">
                      <div class="section-header">
                        <h3 class="section-title">By Material</h3>
                      </div>
                      <div class="material-list">
                        <a href="<?php echo esc_url( home_url( '/products' ) ); ?>" class="material-item">
                          <span class="material-color pet"></span>
                          <div class="material-info">
                            <h4>PET Transparent</h4>
                            <span class="material-desc">Crystal clear, durable</span>
                          </div>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/products' ) ); ?>" class="material-item">
                          <span class="material-color pp"></span>
                          <div class="material-info">
                            <h4>PP Colored</h4>
                            <span class="material-desc">Vibrant, food-safe</span>
                          </div>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/products' ) ); ?>" class="material-item">
                          <span class="material-color paper"></span>
                          <div class="material-info">
                            <h4>Paper Packaging</h4>
                            <span class="material-desc">Eco-friendly options</span>
                          </div>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/products' ) ); ?>" class="material-item">
                          <span class="material-color composite"></span>
                          <div class="material-info">
                            <h4>Composite Materials</h4>
                            <span class="material-desc">Multi-layer solutions</span>
                          </div>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/products' ) ); ?>" class="material-item">
                          <span class="material-color recyclable"></span>
                          <div class="material-info">
                            <h4>Recyclable Plastic</h4>
                            <span class="material-desc">Sustainable packaging choice</span>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>

                  <div class="dropdown-sidebar">
                    <div class="sidebar-section featured">
                      <h3 class="sidebar-title">Quick Links</h3>
                      <a href="<?php echo esc_url( home_url( '/products' ) ); ?>" class="sidebar-item primary">
                        <span class="item-icon">
                          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="3" y="3" width="7" height="7"/>
                            <rect x="14" y="3" width="7" height="7"/>
                            <rect x="14" y="14" width="7" height="7"/>
                            <rect x="3" y="14" width="7" height="7"/>
                          </svg>
                        </span>
                        <span class="item-text">View All Products</span>
                        <span class="item-arrow">→</span>
                      </a>
                      <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="sidebar-item secondary">
                        <span class="item-icon">
                          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 2L2 7l10 5 10-5-10-5z"/>
                            <path d="M2 17l10 5 10-5"/>
                            <path d="M2 12l10 5 10-5"/>
                          </svg>
                        </span>
                        <span class="item-text">Custom Design Service</span>
                        <span class="item-arrow">→</span>
                      </a>
                    </div>

                    <div class="sidebar-section cta">
                      <div class="cta-content">
                        <h4>Need Help?</h4>
                        <p>Our packaging experts are ready to assist you</p>
                        <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="cta-button">Contact Expert</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>

            <li><a href="<?php echo esc_url( home_url( '/partners' ) ); ?>" class="nav-link">Partners</a></li>
            <li><a href="<?php echo esc_url( home_url( '/resources' ) ); ?>" class="nav-link">Resources</a></li>
            <li><a href="<?php echo esc_url( home_url( '/about-us' ) ); ?>" class="nav-link">About Us</a></li>
            <li><a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="nav-link">Contact</a></li>
          </ul>

          <div class="nav-actions md-hidden">
            <div class="language-selector">
              <div class="gt_switcher notranslate">
                <div class="gt_option">
                  <a href="#" title="Arabic" class="nturl" data-gt-lang="ar">
                    <img width="24" height="24" alt="ar" data-gt-lazy-src="/wp-content/plugins/gtranslate/flags/24/ar.png" src="/wp-content/plugins/gtranslate/flags/24/ar.png"> Arabic
                  </a>
                  <a href="#" title="Chinese (Simplified)" class="nturl" data-gt-lang="zh-CN">
                    <img width="24" height="24" alt="zh-CN" data-gt-lazy-src="/wp-content/plugins/gtranslate/flags/24/zh-CN.png" src="/wp-content/plugins/gtranslate/flags/24/zh-CN.png"> Chinese (Simplified)
                  </a>
                  <a href="#" title="Dutch" class="nturl" data-gt-lang="nl">
                    <img width="24" height="24" alt="nl" data-gt-lazy-src="/wp-content/plugins/gtranslate/flags/24/nl.png" src="/wp-content/plugins/gtranslate/flags/24/nl.png"> Dutch
                  </a>
                  <a href="#" title="English" class="nturl gt_current" data-gt-lang="en">
                    <img width="24" height="24" alt="en" data-gt-lazy-src="/wp-content/plugins/gtranslate/flags/24/en-ca.png" src="/wp-content/plugins/gtranslate/flags/24/en-ca.png"> English
                  </a>
                  <a href="#" title="French" class="nturl" data-gt-lang="fr">
                    <img width="24" height="24" alt="fr" data-gt-lazy-src="/wp-content/plugins/gtranslate/flags/24/fr-qc.png" src="/wp-content/plugins/gtranslate/flags/24/fr-qc.png"> French
                  </a>
                  <a href="#" title="German" class="nturl" data-gt-lang="de">
                    <img width="24" height="24" alt="de" data-gt-lazy-src="/wp-content/plugins/gtranslate/flags/24/de.png" src="/wp-content/plugins/gtranslate/flags/24/de.png"> German
                  </a>
                  <a href="#" title="Italian" class="nturl" data-gt-lang="it">
                    <img width="24" height="24" alt="it" data-gt-lazy-src="/wp-content/plugins/gtranslate/flags/24/it.png" src="/wp-content/plugins/gtranslate/flags/24/it.png"> Italian
                  </a>
                  <a href="#" title="Portuguese" class="nturl" data-gt-lang="pt">
                    <img width="24" height="24" alt="pt" data-gt-lazy-src="/wp-content/plugins/gtranslate/flags/24/pt-br.png" src="/wp-content/plugins/gtranslate/flags/24/pt-br.png"> Portuguese
                  </a>
                  <a href="#" title="Russian" class="nturl" data-gt-lang="ru">
                    <img width="24" height="24" alt="ru" data-gt-lazy-src="/wp-content/plugins/gtranslate/flags/24/ru.png" src="/wp-content/plugins/gtranslate/flags/24/ru.png"> Russian
                  </a>
                  <a href="#" title="Spanish" class="nturl" data-gt-lang="es">
                    <img width="24" height="24" alt="es" data-gt-lazy-src="/wp-content/plugins/gtranslate/flags/24/es-co.png" src="/wp-content/plugins/gtranslate/flags/24/es-co.png"> Spanish
                  </a>
                </div>
                <div class="gt_selected">
                  <a href="#" class="open">
                    <img src="/wp-content/plugins/gtranslate/flags/24/en-ca.png" height="24" width="24" alt="en"> English
                  </a>
                </div>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
	
	<?php astra_header_after(); ?>
	
	<?php astra_content_before(); ?>

	<div id="content" class="site-content">

		<div class="ast-container">

		<?php astra_content_top(); ?>
		
