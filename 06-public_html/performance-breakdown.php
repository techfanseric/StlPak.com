<?php
// 精确的性能分析 - 找出慢的环节
header('Content-Type: text/plain');

echo "=== 精确性能分析 - 找出慢的环节 ===\n\n";

// 启用查询日志和计时
define('SAVEQUERIES', true);
define('WP_DEBUG', true);

require_once('./wp-load.php');

global $wpdb;

$home_id = 4452;

// 1. 测试原生 PHP 函数性能
echo "1. 基础 PHP 函数性能测试:\n";

$iterations = 10000;

// array_key_exists 测试
$start = microtime(true);
for ($i = 0; $i < $iterations; $i++) {
    $test = ['key' => 'value'];
    array_key_exists('key', $test);
}
$array_key_time = (microtime(true) - $start) * 1000;

// isset 测试
$start = microtime(true);
for ($i = 0; $i < $iterations; $i++) {
    $test = ['key' => 'value'];
    isset($test['key']);
}
$isset_time = (microtime(true) - $start) * 1000;

echo "   array_key_exists x{$iterations}: " . round($array_key_time, 2) . " ms\n";
echo "   isset x{$iterations}: " . round($isset_time, 2) . " ms\n\n";

// 2. 测试数据库连接和基础查询
echo "2. 数据库基础性能:\n";

// 纯 SQL 查询（不通过 WordPress）
$mysqli = new mysqli('db', 'u577823813_b75Zt', '1Tf2Ixcrve', 'u577823813_7HMer');

// 测试连接时间
$start = microtime(true);
$mysqli2 = new mysqli('db', 'u577823813_b75Zt', '1Tf2Ixcrve', 'u577823813_7HMer');
$connect_time = (microtime(true) - $start) * 1000;
echo "   数据库连接: " . round($connect_time, 2) . " ms\n";

// 测试简单查询
$start = microtime(true);
$result = $mysqli->query("SELECT 1");
$simple_query_time = (microtime(true) - $start) * 1000;
echo "   简单查询 (SELECT 1): " . round($simple_query_time, 2) . " ms\n\n";

// 3. 分解 get_post_meta 的执行
echo "3. get_post_meta() 分解测试:\n";

// 步骤 1: 执行原始 SQL
$start = microtime(true);
$wpdb->queries = [];
$raw_result = $wpdb->get_results($wpdb->prepare(
    "SELECT meta_key, meta_value FROM wp_postmeta WHERE post_id = %d",
    $home_id
));
$sql_time = (microtime(true) - $start) * 1000;
$query_count = count($wpdb->queries);

echo "   - 原始 SQL 查询: " . round($sql_time, 2) . " ms\n";
echo "   - 返回记录数: " . count($raw_result) . "\n";
echo "   - 产生的查询数: {$query_count}\n";

// 步骤 2: 处理结果
$start = microtime(true);
$processed_meta = [];
foreach ($raw_result as $row) {
    $key = $row->meta_key;
    $value = $row->meta_value;

    // 反序列化
    if (is_serialized($value)) {
        $value = unserialize($value);
    }

    // 组织数据结构
    if (!isset($processed_meta[$key])) {
        $processed_meta[$key] = [];
    }
    $processed_meta[$key][] = $value;
}
$process_time = (microtime(true) - $start) * 1000;

echo "   - 数据处理时间: " . round($process_time, 2) . " ms\n\n";

// 4. 测试 WordPress get_post_meta
echo "4. WordPress get_post_meta() 完整测试:\n";

// 第一次调用（缓存未命中）
wp_cache_flush();
$start = microtime(true);
$wpdb->queries = [];
$meta1 = get_post_meta($home_id);
$meta1_time = (microtime(true) - $start) * 1000;
$meta1_queries = count($wpdb->queries);

echo "   - 第一次调用: " . round($meta1_time, 2) . " ms ({$meta1_queries} 个查询)\n";

// 第二次调用（缓存命中）
$start = microtime(true);
$wpdb->queries = [];
$meta2 = get_post_meta($home_id);
$meta2_time = (microtime(true) - $start) * 1000;
$meta2_queries = count($wpdb->queries);

echo "   - 第二次调用: " . round($meta2_time, 2) . " ms ({$meta2_queries} 个查询)\n";
echo "   - 缓存效果: " . round(($meta1_time - $meta2_time) / $meta1_time * 100, 1) . "%\n\n";

// 5. 分析 ACF get_fields 的具体步骤
echo "5. ACF get_fields() 详细分析:\n";

if (function_exists('get_fields')) {
    // 清空所有缓存和查询日志
    wp_cache_flush();
    $wpdb->queries = [];

    // 启用详细的执行追踪
    $start_total = microtime(true);

    echo "   执行步骤追踪:\n";

    // 步骤 A: 获取所有 meta 数据
    $step_a = microtime(true);
    $all_meta = get_post_meta($home_id);
    $step_a_time = (microtime(true) - $step_a) * 1000;
    echo "     A. get_post_meta(): " . round($step_a_time, 2) . " ms\n";

    // 步骤 B: 获取 ACF 字段定义
    $step_b = microtime(true);
    $field_groups = acf_get_field_groups(['post_id' => $home_id]);
    $step_b_time = (microtime(true) - $step_b) * 1000;
    echo "     B. 获取字段组: " . round($step_b_time, 2) . " ms\n";

    // 步骤 C: 过滤和处理字段
    $step_c = microtime(true);
    $filtered_fields = [];
    if ($field_groups) {
        foreach ($field_groups as $group) {
            $fields = acf_get_fields($group);
            if ($fields) {
                foreach ($fields as $field) {
                    $field_name = $field['name'];
                    if (isset($all_meta[$field_name])) {
                        $filtered_fields[$field_name] = $all_meta[$field_name][0];
                    }
                }
            }
        }
    }
    $step_c_time = (microtime(true) - $step_c) * 1000;
    echo "     C. 过滤字段: " . round($step_c_time, 2) . " ms\n";

    $total_time = (microtime(true) - $start_total) * 1000;
    echo "   总时间: " . round($total_time, 2) . " ms\n";
    echo "   最终字段数: " . count($filtered_fields) . "\n";

    // 显示 SQL 查询详情
    echo "\n   产生的 SQL 查询:\n";
    foreach ($wpdb->queries as $i => $query) {
        $sql = $query[0];
        $time = round($query[1] * 1000, 2);
        echo "     [查询 " . ($i + 1) . "] {$time}ms\n";

        if (strpos($sql, 'wp_postmeta') !== false) {
            echo "       → postmeta 查询\n";
        } elseif (strpos($sql, 'wp_posts') !== false) {
            echo "       → posts 查询\n";
        } elseif (strpos($sql, 'wp_options') !== false) {
            echo "       → options 查询\n";
        }
    }
} else {
    echo "   ACF 未加载\n";
}

// 6. 测试序列化/反序列化性能
echo "\n6. 序列化性能测试:\n";

$test_data = [];
for ($i = 0; $i < 1000; $i++) {
    $test_data["key_$i"] = str_repeat('x', 100);
}

$start = microtime(true);
$serialized = serialize($test_data);
$serialize_time = (microtime(true) - $start) * 1000;

$start = microtime(true);
$unserialized = unserialize($serialized);
$unserialize_time = (microtime(true) - $start) * 1000;

echo "   - 序列化 1000 项: " . round($serialize_time, 2) . " ms\n";
echo "   - 反序列化 1000 项: " . round($unserialize_time, 2) . " ms\n\n";

// 7. 性能瓶颈分析
echo "=== 性能瓶颈分析 ===\n\n";

echo "最耗时的操作:\n";
echo "1. 数据库查询 - 特别是 postmeta 表查询\n";
echo "2. 大量的数据处理 - 326 条记录的处理\n";
echo "3. ACF 字段组查询 - 需要查询数据库获取字段定义\n";
echo "4. 字段过滤和匹配 - 遍历所有字段进行匹配\n";

echo "\n根本原因:\n";
echo "- postmeta 表过大（180 万条记录）\n";
echo "- 缺乏有效的索引优化\n";
echo "- ACF 需要查询多个表来构建字段信息\n";
echo "- 缺乏缓存机制\n";

?>