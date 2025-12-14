# STLPAK 主题代码清理计划

## 已确认事实
1. **实际首页使用的是 template-home10.php**（包含"Leading Food-Grade Packaging Manufacturer"）
2. **template-home.php 已经不再使用**（已注释掉所有代码）

## 可安全删除的文件和代码

### 1. template-home.php (完全可删除)
- 所有代码已注释，不再使用
- 保留作为备份或直接删除

### 2. 相关的CSS样式（以下样式只在废弃的模板中使用）

#### base.css 中可删除的样式：
- `.faqWrapper {padding-left: 0;}` (第74行)
- `.dblBtn a.commonBtn {margin: 0 10px;}` (第232行)
- `.sec6Box {padding: 20px 20px 0;}` (第238行)
- `.sec5Box {margin: 0 0 30px;}` (第239行)
- `.faqWrapper {margin: 0 auto;}` (第230行)
- `.dblBtn a.commonBtn {` (第565行)
- `.hp10FAQs .accordiaBox {padding: 0 15px;}` (第583行) - **注意：这个可能在使用**

#### home-base.css 中可删除的样式：
- `.h5productBox {` (第116行)

### 3. 需要保留的样式（在其他模板中使用）
- 所有 accordiaBox 相关样式（template-home10.php 第400行使用）
- videoImg 相关样式（多个产品页面使用）
- slick 和 homeSlider 相关样式（其他页面使用）

## 建议的操作步骤

### 第一步：删除 template-home.php
```bash
mv template-home.php template-home.php.deleted
```

### 第二步：清理 CSS（谨慎操作）
1. 备份要修改的CSS文件
2. 逐个删除确认无用的样式
3. 测试网站功能

### 第三步：优化 functions.php
考虑移除对已删除模板的CSS加载逻辑（如果确认那些模板都不再使用）

## 注意事项
1. 修改前必须备份
2. 逐个测试页面，特别是FAQ页面
3. 检查是否有其他页面使用这些样式
4. 考虑使用CSS检测工具（如PurgeCSS）进行精确清理