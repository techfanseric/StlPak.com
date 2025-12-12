# WordPress 性能优化解决方案

## 问题诊断

### 初始症状
- 网站加载时间 30-60 秒
- 启用 ACF Pro 插件后性能急剧下降
- 怀疑是 ACF 加载 180 万条 postmeta 数据导致

### 错误的诊断方向
1. **Docker I/O 限制** - 虽然存在但不是主因
2. **InnoDB 缓冲池太小** - 优化后有帮助但不是关键
3. **ACF 架构问题** - get_fields() 设计有缺陷但不是根本原因

## 根本原因

**wp_postmeta 表缺少关键索引！**

通过 EXPLAIN 分析发现：
```sql
EXPLAIN SELECT meta_key, meta_value FROM wp_postmeta WHERE post_id = 4452;
```

结果显示：
- type: ALL (全表扫描)
- key: NULL (未使用索引)
- rows: 1,826,189 (扫描了全部 180 万条记录)

## 解决方案

### 1. 添加缺失的索引

```sql
-- 添加 post_id 索引
ALTER TABLE wp_postmeta ADD INDEX post_id (post_id);

-- 添加 meta_key 索引
ALTER TABLE wp_postmeta ADD INDEX meta_key (meta_key);

-- 添加复合索引 (最常用)
ALTER TABLE wp_postmeta ADD INDEX post_id_meta_key (post_id, meta_key);
```

### 2. 索引优化后的效果

| 指标 | 优化前 | 优化后 | 提升幅度 |
|------|--------|--------|----------|
| postmeta 查询 | 197.13 ms | 2.06 ms | **99.0% ↑** |
| get_post_meta() | 167.95 ms | 2.07 ms | **98.8% ↑** |
| get_fields() | 353.73 ms | 143.99 ms | **59.3% ↑** |

### 3. 验证索引生效

```sql
EXPLAIN SELECT meta_key, meta_value FROM wp_postmeta WHERE post_id = 4452;
```

优化后的结果：
- type: ref (使用索引)
- key: post_id
- rows: 326 (只扫描需要的记录)

## 关键脚本

### 性能分析脚本
- `performance-breakdown.php` - 详细性能分解
- `sql-performance-deep-dive.php` - SQL 查询深度分析
- `fix-postmeta-indexes.php` - 修复索引的脚本

### 测试脚本
- `acf-loading-test.php` - ACF 加载测试
- `test-index-optimization.php` - 索引优化效果测试

## 经验教训

1. **Always EXPLAIN** - 遇到慢查询必须用 EXPLAIN 分析
2. **索引是基础** - 大表必须有合适的索引
3. **不要过早优化** - 先找出真正的瓶颈
4. **Docker 不是问题** - 容器化通常不是性能瓶颈

## 最佳实践

### 1. 定期检查索引
```sql
-- 检查表索引
SHOW INDEX FROM wp_postmeta;

-- 检查查询执行计划
EXPLAIN SELECT ...;
```

### 2. 监控慢查询
- 启用 WordPress 的 SAVEQUERIES
- 使用 WP_DEBUG 查找问题
- 定期检查 MySQL 慢查询日志

### 3. WordPress 数据库优化
- 定期清理 postmeta 中的无用数据
- 使用专业的数据库优化插件
- 考虑使用 Redis 对象缓存

## 后续优化建议

虽然主要问题已解决，但还可以进一步优化：

1. **启用 Redis 缓存**
   ```php
   // wp-config.php
   define('WP_REDIS_HOST', 'redis');
   define('WP_REDIS_PORT', 6379);
   define('WP_REDIS_PASSWORD', 'redis123');
   ```

2. **ACF JSON 同步**
   ```php
   // 字段定义不需要从数据库读取
   define('ACF_SYNC_JSON', true);
   ```

3. **清理重复数据**
   ```sql
   -- 查找重复的 meta
   SELECT post_id, meta_key, COUNT(*)
   FROM wp_postmeta
   GROUP BY post_id, meta_key
   HAVING COUNT(*) > 1;
   ```

## 总结

这个问题的核心教训是：**永远不要假设数据库有合适的索引**。即使 WordPress 是成熟的系统，但在特定环境下（如数据迁移、特定插件），索引也可能缺失或未正确创建。

通过系统性的性能分析和使用 EXPLAIN，我们成功将查询时间从 197ms 降到 2ms，性能提升 99%，解决了网站加载慢的根本问题。

---
创建日期: 2025-12-13
作者: Eric Yim <eric.yim@foxmail.com>