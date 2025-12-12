<?php
/**
 * 侧边栏模板
 *
 * @package StlPak
 */

if (!is_active_sidebar('sidebar-1')) {
    return;
}
?>

<aside class="widget-area">
    <?php dynamic_sidebar('sidebar-1'); ?>
</aside>