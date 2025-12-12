<?php
/**
 * 主题功能文件
 *
 * @package StlPak
 */

if (!defined('_S_VERSION')) {
    // 替换主题版本号
    define('_S_VERSION', '1.0.0');
}

/**
 * 设置主题默认值并注册对各种WordPress功能的支持
 */
function stlpak_setup() {
    // 添加默认的RSS feed链接
    add_theme_support('automatic-feed-links');

    // 标题标签支持
    add_theme_support('title-tag');

    // 启用文章缩略图
    add_theme_support('post-thumbnails');

    // 注册导航菜单
    register_nav_menus(
        array(
            'main-menu' => __('主导航菜单', 'stlpak'),
            'footer-menu' => __('底部菜单', 'stlpak'),
        )
    );

    // HTML5语义标记
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );

    // 添加主题对WooCommerce的支持
    add_theme_support('woocommerce');

    // 添加自定义背景支持
    add_theme_support(
        'custom-background',
        apply_filters(
            'stlpak_custom_background_args',
            array(
                'default-color' => 'ffffff',
                'default-image' => '',
            )
        )
    );

    // 添加自定义logo支持
    add_theme_support(
        'custom-logo',
        array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        )
    );

    // 添加编辑器样式
    add_theme_support('editor-styles');
    add_editor_style('editor-style.css');
}
add_action('after_setup_theme', 'stlpak_setup');

/**
 * 设置内容宽度
 */
function stlpak_content_width() {
    $GLOBALS['content_width'] = apply_filters('stlpak_content_width', 1200);
}
add_action('after_setup_theme', 'stlpak_content_width', 0);

/**
 * 注册小工具区域
 */
function stlpak_widgets_init() {
    register_sidebar(
        array(
            'name'          => __('侧边栏', 'stlpak'),
            'id'            => 'sidebar-1',
            'description'   => __('在文章和页面侧边显示的小工具', 'stlpak'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );

    register_sidebar(
        array(
            'name'          => __('底部区域1', 'stlpak'),
            'id'            => 'footer-1',
            'description'   => __('底部第一列小工具区域', 'stlpak'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );

    register_sidebar(
        array(
            'name'          => __('底部区域2', 'stlpak'),
            'id'            => 'footer-2',
            'description'   => __('底部第二列小工具区域', 'stlpak'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );

    register_sidebar(
        array(
            'name'          => __('底部区域3', 'stlpak'),
            'id'            => 'footer-3',
            'description'   => __('底部第三列小工具区域', 'stlpak'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
}
add_action('widgets_init', 'stlpak_widgets_init');

/**
 * 注册样式表和脚本
 */
function stlpak_scripts() {
    // 主样式表
    wp_enqueue_style('stlpak-style', get_stylesheet_uri(), array(), _S_VERSION);

    // 字体图标库
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css', array(), '6.0.0');

    // 响应式导航脚本
    wp_enqueue_script('stlpak-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

    // 主题主要脚本
    wp_enqueue_script('stlpak-script', get_template_directory_uri() . '/js/main.js', array('jquery'), _S_VERSION, true);

    // 评论回复脚本
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'stlpak_scripts');

/**
 * 实现后备菜单
 */
function stlpak_fallback_menu() {
    if (current_theme_supports('menus')) {
        echo '<ul class="nav-menu">';
        echo '<li><a href="' . esc_url(home_url('/')) . '">首页</a></li>';
        echo '<li><a href="#products">产品</a></li>';
        echo '<li><a href="#values">为什么选择我们</a></li>';
        echo '<li><a href="#resources">资源</a></li>';
        echo '<li><a href="#contact">联系我们</a></li>';
        echo '</ul>';
    }
}

/**
 * 添加自定义字体大小到编辑器
 */
function stlpak_editor_font_sizes() {
    add_theme_support(
        'editor-font-sizes',
        array(
            array(
                'name'      => __('小号', 'stlpak'),
                'shortName' => __('S', 'stlpak'),
                'size'      => 14,
                'slug'      => 'small'
            ),
            array(
                'name'      => __('常规', 'stlpak'),
                'shortName' => __('M', 'stlpak'),
                'size'      => 16,
                'slug'      => 'normal'
            ),
            array(
                'name'      => __('大号', 'stlpak'),
                'shortName' => __('L', 'stlpak'),
                'size'      => 18,
                'slug'      => 'large'
            ),
            array(
                'name'      => __('特大号', 'stlpak'),
                'shortName' => __('XL', 'stlpak'),
                'size'      => 24,
                'slug'      => 'extra-large'
            )
        )
    );
}
add_action('after_setup_theme', 'stlpak_editor_font_sizes');

/**
 * 自定义摘要长度
 */
function stlpak_excerpt_length($length) {
    return 50;
}
add_filter('excerpt_length', 'stlpak_excerpt_length');

/**
 * 自定义摘要末尾显示
 */
function stlpak_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'stlpak_excerpt_more');

/**
 * 自定义logo类
 */
function stlpak_custom_logo_classes($html) {
    $html = str_replace('custom-logo', 'custom-logo logo-image', $html);
    return $html;
}
add_filter('get_custom_logo', 'stlpak_custom_logo_classes');

/**
 * 添加主题自定义器选项
 */
function stlpak_customize_register($wp_customize) {
    // 主题颜色设置
    $wp_customize->add_section('stlpak_colors', array(
        'title'    => __('主题颜色', 'stlpak'),
        'priority' => 30,
    ));

    $wp_customize->add_setting('primary_color', array(
        'default'           => '#015EBD',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'primary_color', array(
        'label'    => __('主色调', 'stlpak'),
        'section'  => 'stlpak_colors',
        'settings' => 'primary_color',
    )));

    // 社交媒体链接
    $wp_customize->add_section('stlpak_social', array(
        'title'    => __('社交媒体', 'stlpak'),
        'priority' => 35,
    ));

    $social_links = array(
        'facebook'  => __('Facebook', 'stlpak'),
        'twitter'   => __('Twitter', 'stlpak'),
        'instagram' => __('Instagram', 'stlpak'),
        'linkedin'  => __('LinkedIn', 'stlpak'),
    );

    foreach ($social_links as $key => $label) {
        $wp_customize->add_setting($key . '_url', array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        ));

        $wp_customize->add_control($key . '_url', array(
            'label'    => $label,
            'section'  => 'stlpak_social',
            'settings' => $key . '_url',
            'type'     => 'url',
        ));
    }
}
add_action('customize_register', 'stlpak_customize_register');

/**
 * 输出自定义CSS到头部
 */
function stlpak_customizer_css() {
    $primary_color = get_theme_mod('primary_color', '#015EBD');
    ?>
    <style type="text/css">
        :root {
            --primary-color: <?php echo esc_attr($primary_color); ?>;
        }

        a {
            color: var(--primary-color);
        }

        .site-title a,
        .main-navigation a:hover,
        .entry-title a:hover,
        .widget a:hover {
            color: var(--primary-color);
        }

        .widget-title {
            border-color: var(--primary-color);
        }

        button,
        input[type="submit"] {
            background-color: var(--primary-color);
        }
    </style>
    <?php
}
add_action('wp_head', 'stlpak_customizer_css');