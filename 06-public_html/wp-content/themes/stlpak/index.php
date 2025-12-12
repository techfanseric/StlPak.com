<?php
/**
 * 主模板文件
 *
 * 这是WordPress主题中最通用的模板文件，也是主题必需的两个文件之一（另一个是style.css）。
 * 当没有更具体的模板文件匹配查询时，它用于显示页面。
 * 例如，当不存在home.php文件时，它会组合显示首页。
 *
 * @package StlPak
 */

get_header(); ?>

<div class="container">
    <div class="site-main">
        <?php if (have_posts()) : ?>

            <?php if (is_home() && !is_front_page()) : ?>
                <header class="page-header">
                    <h1 class="page-title"><?php single_post_title(); ?></h1>
                </header>
            <?php endif; ?>

            <?php
            // 开始循环
            while (have_posts()) :
                the_post();
                ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <?php
                        if (is_singular()) :
                            the_title('<h1 class="entry-title">', '</h1>');
                        else :
                            the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
                        endif;
                        ?>

                        <div class="entry-meta">
                            <?php
                            // 作者和发布时间
                            printf(
                                '<span class="posted-on">发布于 <time datetime="%s">%s</time></span> <span class="byline">作者 <span class="author vcard"><a href="%s">%s</a></span></span>',
                                esc_attr(get_the_date(DATE_W3C)),
                                esc_html(get_the_date()),
                                esc_url(get_author_posts_url(get_the_author_meta('ID'))),
                                esc_html(get_the_author())
                            );
                            ?>
                        </div>
                    </header>

                    <?php if (has_post_thumbnail()) : ?>
                        <div class="post-thumbnail">
                            <?php the_post_thumbnail('large'); ?>
                        </div>
                    <?php endif; ?>

                    <div class="entry-content">
                        <?php
                        if (is_singular()) {
                            the_content(
                                sprintf(
                                    wp_kses(
                                        __('继续阅读 %s <span class="meta-nav">&rarr;</span>', 'stlpak'),
                                        array('span' => array('class' => array()))
                                    ),
                                    get_the_title()
                                )
                            );

                            wp_link_pages(
                                array(
                                    'before' => '<div class="page-links">' . __('页面：', 'stlpak'),
                                    'after'  => '</div>',
                                )
                            );
                        } else {
                            the_excerpt();
                            ?>
                            <a href="<?php echo esc_url(get_permalink()); ?>" class="read-more">
                                <?php _e('阅读全文 &rarr;', 'stlpak'); ?>
                            </a>
                            <?php
                        }
                        ?>
                    </div>

                    <footer class="entry-footer">
                        <div class="entry-meta">
                            <?php
                            // 分类和标签
                            if ('post' === get_post_type()) {
                                $categories_list = get_the_category_list(esc_html__(', ', 'stlpak'));
                                if ($categories_list) {
                                    printf(
                                        '<span class="cat-links">' . __('分类：%s', 'stlpak') . '</span>',
                                        $categories_list
                                    );
                                }

                                $tags_list = get_the_tag_list('', esc_html_x(', ', '用逗号分隔的标签列表', 'stlpak'));
                                if ($tags_list) {
                                    printf(
                                        '<span class="tags-links">' . __('标签：%s', 'stlpak') . '</span>',
                                        $tags_list
                                    );
                                }
                            }
                            ?>

                            <?php if (!is_singular()) : ?>
                                <span class="comments-link">
                                    <?php
                                    comments_popup_link(
                                        __('暂无评论', 'stlpak'),
                                        __('1 条评论', 'stlpak'),
                                        __('% 条评论', 'stlpak')
                                    );
                                    ?>
                                </span>
                            <?php endif; ?>
                        </div>
                    </footer>
                </article>

                <?php
                // 如果是单篇文章，显示评论模板
                if (is_singular() && (comments_open() || get_comments_number())) :
                    comments_template();
                endif;
                ?>

            <?php endwhile; ?>

            <?php
            // 分页导航
            the_posts_pagination(
                array(
                    'mid_size'  => 2,
                    'prev_text' => __('&laquo; 上一页', 'stlpak'),
                    'next_text' => __('下一页 &raquo;', 'stlpak'),
                )
            );
            ?>

        <?php else : ?>

            <section class="no-results not-found">
                <header class="page-header">
                    <h1 class="page-title"><?php _e('未找到内容', 'stlpak'); ?></h1>
                </header>

                <div class="page-content">
                    <?php if (is_home() && current_user_can('publish_posts')) : ?>
                        <p>
                            <?php
                            printf(
                                wp_kses(
                                    __('准备好发布你的第一篇文章了吗？ <a href="%1$s">开始撰写</a>。', 'stlpak'),
                                    array('a' => array('href' => array()))
                                ),
                                esc_url(admin_url('post-new.php'))
                            );
                            ?>
                        </p>

                    <?php elseif (is_search()) : ?>
                        <p><?php _e('抱歉，没有找到与你的搜索匹配的内容。请尝试使用其他关键词。', 'stlpak'); ?></p>
                        <?php get_search_form(); ?>

                    <?php else : ?>
                        <p><?php _e('看起来这里没有找到任何内容。或许可以尝试使用下面的搜索功能？', 'stlpak'); ?></p>
                        <?php get_search_form(); ?>
                    <?php endif; ?>
                </div>
            </section>

        <?php endif; ?>
    </div>

    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>