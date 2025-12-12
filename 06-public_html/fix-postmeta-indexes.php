<?php
// 修复 postmeta 表索引
header('Content-Type: text/plain');

echo "=== 修复 postmeta 表索引 ===\n\n";

$mysqli = new mysqli('db', 'u577823813_b75Zt', '1Tf2Ixcrve', 'u577823813_7HMer');

// 1. 检查当前索引
echo "1. 当前索引状态:\n";
$result = $mysqli->query("SHOW INDEX FROM wp_postmeta");
$current_indexes = [];
while ($row = $result->fetch_assoc()) {
    $key_name = $row['Key_name'];
    $column_name = $row['Column_name'];
    if (!isset($current_indexes[$key_name])) {
        $current_indexes[$key_name] = [];
    }
    $current_indexes[$key_name][] = $column_name;
}

foreach ($current_indexes as $key => $columns) {
    echo "   - {$key}: (" . implode(', ', $columns) . ")\n";
}

// 2. 检查是否有必要的索引
echo "\n2. 索引检查:\n";
$required_indexes = [
    'post_id' => ['post_id'],
    'meta_key' => ['meta_key'],
    'post_id_meta_key' => ['post_id', 'meta_key']
];

$missing_indexes = [];
foreach ($required_indexes as $index_name => $columns) {
    $found = false;
    foreach ($current_indexes as $current_key => $current_columns) {
        if ($current_columns === $columns) {
            echo "   ✓ {$index_name}: 已存在\n";
            $found = true;
            break;
        }
    }
    if (!$found) {
        echo "   ✗ {$index_name}: 缺失\n";
        $missing_indexes[$index_name] = $columns;
    }
}

// 3. 添加缺失的索引
if (!empty($missing_indexes)) {
    echo "\n3. 添加缺失的索引:\n";

    foreach ($missing_indexes as $index_name => $columns) {
        $columns_str = implode(', ', $columns);
        echo "   添加索引 {$index_name}...\n";

        // 先删除可能存在的同名索引
        $mysqli->query("DROP INDEX IF EXISTS {$index_name} ON wp_postmeta");

        // 创建新索引
        $sql = "ALTER TABLE wp_postmeta ADD INDEX {$index_name} ({$columns_str})";
        echo "   SQL: {$sql}\n";

        $start = microtime(true);
        $result = $mysqli->query($sql);
        $time = (microtime(true) - $start);

        if ($result) {
            echo "   ✓ 成功 (" . round($time, 2) . "s)\n";
        } else {
            echo "   ✗ 失败: " . $mysqli->error . "\n";
        }
    }
} else {
    echo "\n3. 所有必需的索引都已存在！\n";
}

// 4. 测试索引效果
echo "\n4. 测试索引效果:\n";
$home_id = 4452;

// 使用 EXPLAIN 检查
$result = $mysqli->query("EXPLAIN SELECT meta_key, meta_value FROM wp_postmeta WHERE post_id = $home_id");
echo "   EXPLAIN 结果:\n";
if ($result) {
    while ($row = $result->fetch_assoc()) {
        echo "     - 类型: {$row['type']}\n";
        echo "     - 使用的键: {$row['key']}\n";
        echo "     - 扫描行数: {$row['rows']}\n";
        echo "     - 额外信息: {$row['Extra']}\n";
    }
}

// 实际性能测试
echo "\n5. 性能对比测试:\n";

// 测试查询性能
$start = microtime(true);
$result = $mysqli->query("SELECT meta_key, meta_value FROM wp_postmeta WHERE post_id = $home_id");
$count = $result->num_rows;
$test_time = (microtime(true) - $start) * 1000;

echo "   查询时间: " . round($test_time, 2) . " ms\n";
echo "   返回记录: {$count} 条\n";

if ($test_time < 100) {
    echo "   ✓ 性能良好！\n";
} elseif ($test_time < 500) {
    echo "   ⚠️ 性能一般\n";
} else {
    echo "   ✗ 性能较差\n";
}

// 6. 建议的其他优化
echo "\n6. 其他优化建议:\n";

// 检查表是否有碎片
$result = $mysqli->query("SHOW TABLE STATUS LIKE 'wp_postmeta'");
if ($row = $result->fetch_assoc()) {
    $data_free = $row['Data_free'];
    if ($data_free > 0) {
        echo "   - 表有碎片 ({$data_free} bytes)\n";
        echo "   - 建议执行: OPTIMIZE TABLE wp_postmeta\n";
    } else {
        echo "   - 表无碎片\n";
    }
}

// 检查是否有重复数据
echo "\n7. 检查数据质量:\n";
$result = $mysqli->query("
    SELECT post_id, meta_key, COUNT(*) as cnt
    FROM wp_postmeta
    GROUP BY post_id, meta_key
    HAVING cnt > 1
    LIMIT 10
");
$duplicates = $result->num_rows;
if ($duplicates > 0) {
    echo "   - 发现 {$duplicates} 组重复的 (post_id, meta_key) 组合\n";
    echo "   - 这可能影响索引效率\n";
} else {
    echo "   - 无重复数据\n";
}

echo "\n=== 优化总结 ===\n";
echo "\n通过添加正确的索引，postmeta 查询性能应该能提升 10-100 倍。\n";
echo "从全表扫描（180万条记录）到索引查找，这是最大的性能提升点。\n";

?>