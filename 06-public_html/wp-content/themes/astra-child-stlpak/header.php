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
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">StlPak</a>
          </div>

          <button class="mobile-menu-toggle" id="mobile-menu-toggle">
            <span>Menu</span>
          </button>

          <ul class="nav-menu" id="nav-menu">
            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nav-link">Home</a></li>

            <li class="dropdown">
              <a href="#" class="nav-link dropdown-toggle">Products</a>
              <div class="dropdown-menu">
                <div class="container">
                  <ul class="dropdown-list">
                    <li class="dropdown-category">
                      <h4 class="category-title">By Product Type</h4>
                      <div class="category-items">
                        <a href="<?php echo esc_url( home_url( '/products/egg-packaging' ) ); ?>" class="dropdown-item with-image">
                          <div class="item-image"></div>
                          <span class="item-text">Egg Packaging</span>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/products' ) ); ?>" class="dropdown-item with-image">
                          <div class="item-image"></div>
                          <span class="item-text">Cake Containers</span>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/products' ) ); ?>" class="dropdown-item with-image">
                          <div class="item-image"></div>
                          <span class="item-text">Clamshell Packaging</span>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/products' ) ); ?>" class="dropdown-item with-image">
                          <div class="item-image"></div>
                          <span class="item-text">Cookie Containers</span>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/products' ) ); ?>" class="dropdown-item with-image">
                          <div class="item-image"></div>
                          <span class="item-text">Salad Containers</span>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/products' ) ); ?>" class="dropdown-item with-image">
                          <div class="item-image"></div>
                          <span class="item-text">Blueberry Packaging</span>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/products' ) ); ?>" class="dropdown-item with-image">
                          <div class="item-image"></div>
                          <span class="item-text">Strawberry Packaging</span>
                        </a>
                      </div>
                    </li>
                    <li class="dropdown-category">
                      <h4 class="category-title">By Application</h4>
                      <div class="category-items">
                        <a href="<?php echo esc_url( home_url( '/products' ) ); ?>" class="dropdown-item with-image">
                          <div class="item-image"></div>
                          <span class="item-text">Supermarket Retail</span>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/products' ) ); ?>" class="dropdown-item with-image">
                          <div class="item-image"></div>
                          <span class="item-text">Fresh E-commerce</span>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/products' ) ); ?>" class="dropdown-item with-image">
                          <div class="item-image"></div>
                          <span class="item-text">Gift Packaging</span>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/products' ) ); ?>" class="dropdown-item with-image">
                          <div class="item-image"></div>
                          <span class="item-text">Farmers' Market</span>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/products' ) ); ?>" class="dropdown-item with-image">
                          <div class="item-image"></div>
                          <span class="item-text">Food Service</span>
                        </a>
                      </div>
                    </li>
                    <li class="dropdown-category">
                      <h4 class="category-title">By Material</h4>
                      <div class="category-items">
                        <a href="<?php echo esc_url( home_url( '/products' ) ); ?>" class="dropdown-item with-image">
                          <div class="item-image"></div>
                          <span class="item-text">PET Transparent</span>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/products' ) ); ?>" class="dropdown-item with-image">
                          <div class="item-image"></div>
                          <span class="item-text">PP Colored</span>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/products' ) ); ?>" class="dropdown-item with-image">
                          <div class="item-image"></div>
                          <span class="item-text">Paper Packaging</span>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/products' ) ); ?>" class="dropdown-item with-image">
                          <div class="item-image"></div>
                          <span class="item-text">Composite Materials</span>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/products' ) ); ?>" class="dropdown-item with-image">
                          <div class="item-image"></div>
                          <span class="item-text">Recyclable Plastic</span>
                        </a>
                      </div>
                    </li>
                    <li><a href="<?php echo esc_url( home_url( '/products' ) ); ?>" class="dropdown-item">View All Products</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/products' ) ); ?>" class="dropdown-item">Custom Design Service</a></li>
                  </ul>
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
		
