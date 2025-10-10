# StlPak 线框原型设计规范

## 设计理念

### 核心原则
- **极简主义**: 去除所有装饰性元素，专注功能与结构
- **内容优先**: 设计服务于内容展示，而非视觉效果
- **易于修改**: 代码结构简洁，为后续修改预留空间
- **架构导向**: 重点体现网站信息架构和用户流程

### 设计目标
- 快速建立StlPak网站的完整页面框架
- 体现经销商导向的内容策略
- 为后续视觉设计和开发提供清晰指引
- 确保所有页面和功能模块完整覆盖

## 视觉设计规范

### 颜色方案
采用单一灰色调系统，避免色彩干扰：

```css
/* 主色调系统 */
--bg-primary: #f5f5f5;      /* 主背景色 - 浅灰 */
--bg-secondary: #ffffff;     /* 内容背景色 - 白色 */
--bg-tertiary: #fafafa;      /* 次要背景色 - 极浅灰 */

/* 文字颜色 */
--text-primary: #333333;     /* 主文字色 - 深灰 */
--text-secondary: #666666;   /* 次要文字色 - 中灰 */
--text-tertiary: #999999;    /* 辅助文字色 - 浅灰 */
--text-inverse: #ffffff;     /* 反白文字色 */

/* 边框和分割线 */
--border-primary: #e0e0e0;   /* 主边框色 - 中灰 */
--border-secondary: #eeeeee;  /* 次要边框色 - 浅灰 */
--border-light: #f5f5f5;     /* 轻边框色 - 极浅灰 */

/* 链接和交互 */
--link-color: #666666;       /* 链接颜色 - 中灰 */
--link-hover: #333333;       /* 链接悬停 - 深灰 */
--active-bg: #f0f0f0;        /* 激活背景 - 浅灰 */

/* 状态色彩 */
--success-bg: #f8f9fa;       /* 成功背景 - 极浅灰 */
--warning-bg: #fff8e1;       /* 警告背景 - 极浅黄灰 */
--error-bg: #ffebee;         /* 错误背景 - 极浅红灰 */
```

### 字体规范
```css
/* 字体族 */
--font-family-primary: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
--font-family-mono: "SFMono-Regular", Consolas, "Liberation Mono", Menlo, monospace;

/* 字体大小 */
--font-size-xs: 12px;        /* 极小文字 */
--font-size-sm: 14px;        /* 小文字 */
--font-size-base: 16px;      /* 基础文字 */
--font-size-lg: 18px;        /* 大文字 */
--font-size-xl: 20px;        /* 标题文字 */
--font-size-xxl: 24px;       /* 大标题 */
--font-size-xxxl: 32px;      /* 主标题 */

/* 行高 */
--line-height-tight: 1.25;   /* 紧凑行高 */
--line-height-normal: 1.5;   /* 正常行高 */
--line-height-relaxed: 1.75; /* 宽松行高 */

/* 字重 */
--font-weight-normal: 400;   /* 正常字重 */
--font-weight-medium: 500;   /* 中等字重 */
--font-weight-semibold: 600; /* 半粗体 */
--font-weight-bold: 700;     /* 粗体 */
```

### 间距系统
```css
/* 基础间距单位 */
--spacing-xs: 4px;           /* 极小间距 */
--spacing-sm: 8px;           /* 小间距 */
--spacing-md: 16px;          /* 中等间距 */
--spacing-lg: 24px;          /* 大间距 */
--spacing-xl: 32px;          /* 超大间距 */
--spacing-xxl: 48px;         /* 极大间距 */
--spacing-xxxl: 64px;        /* 最大间距 */

/* 组件间距 */
--component-margin-sm: 16px;  /* 小组件边距 */
--component-margin-md: 24px;  /* 中组件边距 */
--component-margin-lg: 32px;  /* 大组件边距 */

/* 页面布局 */
--page-padding-sm: 16px;     /* 小页面边距 */
--page-padding-md: 24px;     /* 中页面边距 */
--page-padding-lg: 32px;     /* 大页面边距 */
```

### 圆角和阴影
```css
/* 圆角 */
--border-radius-sm: 2px;     /* 小圆角 */
--border-radius-md: 4px;     /* 中圆角 */
--border-radius-lg: 8px;     /* 大圆角 */
--border-radius-xl: 12px;    /* 超大圆角 */

/* 阴影 - 极简风格，减少视觉干扰 */
--shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);      /* 小阴影 */
--shadow-md: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06); /* 中阴影 */
--shadow-lg: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06); /* 大阴影 */
```

## 布局设计规范

### 网格系统
```css
/* 容器最大宽度 */
--container-sm: 640px;       /* 小容器 */
--container-md: 768px;       /* 中容器 */
--container-lg: 1024px;      /* 大容器 */
--container-xl: 1280px;      /* 超大容器 */

/* 列间距 */
--grid-gap-sm: 16px;         /* 小网格间距 */
--grid-gap-md: 24px;         /* 中网格间距 */
--grid-gap-lg: 32px;         /* 大网格间距 */
```

### 断点系统
```css
/* 响应式断点 */
--breakpoint-sm: 640px;      /* 小屏幕 */
--breakpoint-md: 768px;      /* 平板 */
--breakpoint-lg: 1024px;     /* 笔记本 */
--breakpoint-xl: 1280px;     /* 桌面 */
```

### 导航设计
- **主导航**: 顶部水平导航，清晰的产品分类和经销商专区入口
- **面包屑**: 页面层级导航，显示当前位置
- **页脚导航**: 网站地图和重要链接集合

### 内容层级
```
信息层级:
H1 - 页面主标题 (32px, 粗体)
H2 - 章节标题 (24px, 半粗体)
H3 - 小节标题 (20px, 半粗体)
H4 - 列表标题 (18px, 中等字重)
Body - 正文内容 (16px, 正常字重)
Small - 辅助文字 (14px, 正常字重)
```

## 组件设计规范

### 按钮组件
```css
/* 主要按钮 - 灰色调 */
.btn-primary {
  background: var(--text-primary);
  color: var(--text-inverse);
  border: 1px solid var(--text-primary);
}

/* 次要按钮 - 线框样式 */
.btn-secondary {
  background: transparent;
  color: var(--text-primary);
  border: 1px solid var(--border-primary);
}

/* 链接按钮 */
.btn-link {
  background: transparent;
  color: var(--link-color);
  border: none;
  text-decoration: underline;
}
```

### 表单组件
```css
/* 输入框 */
.form-input {
  background: var(--bg-secondary);
  border: 1px solid var(--border-primary);
  color: var(--text-primary);
}

/* 输入框聚焦状态 */
.form-input:focus {
  border-color: var(--text-primary);
  outline: none;
  box-shadow: 0 0 0 2px rgba(51, 51, 51, 0.1);
}
```

### 卡片组件
```css
/* 基础卡片 */
.card {
  background: var(--bg-secondary);
  border: 1px solid var(--border-primary);
  border-radius: var(--border-radius-md);
}

/* 卡片标题 */
.card-title {
  font-size: var(--font-size-lg);
  font-weight: var(--font-weight-semibold);
  color: var(--text-primary);
}
```

### 导航组件
```css
/* 主导航 */
.nav-primary {
  background: var(--bg-secondary);
  border-bottom: 1px solid var(--border-primary);
}

/* 导航链接 */
.nav-link {
  color: var(--text-secondary);
  text-decoration: none;
}

.nav-link:hover {
  color: var(--text-primary);
}
```

## 页面结构规范

### 标准页面结构
```html
<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>页面标题 - StlPak食品包装制造商</title>
</head>
<body>
  <header class="header">
    <!-- 导航栏 -->
  </header>

  <main class="main">
    <!-- 页面内容 -->
  </main>

  <footer class="footer">
    <!-- 页脚信息 -->
  </footer>
</body>
</html>
```

### 内容模块规范
```html
<!-- 标准内容模块 -->
<section class="section">
  <div class="container">
    <header class="section-header">
      <h2 class="section-title">模块标题</h2>
      <p class="section-subtitle">模块副标题</p>
    </header>

    <div class="section-content">
      <!-- 模块内容 -->
    </div>
  </div>
</section>
```

## 文件命名规范

### HTML文件命名
- **首页**: `index.html`
- **产品页面**: `products/[category].html`
- **经销商专区**: `dealer/[page-name].html`
- **关于我们**: `about.html`
- **联系我们**: `contact.html`

### CSS文件命名
- **主样式**: `assets/css/wireframe.css`
- **组件样式**: `assets/css/components.css`
- **布局样式**: `assets/css/layout.css`

### 图片文件命名
- **占位图**: `assets/images/placeholder/[size]x[height].png`
- **图标**: `assets/images/icons/[icon-name].svg`

## 代码规范

### HTML规范
- 使用语义化HTML5标签
- 属性值使用双引号
- 缩进使用2个空格
- 标签和属性小写

### CSS规范
- 类名使用kebab-case
- CSS变量使用camelCase
- 选择器嵌套不超过3层
- 避免使用!important

### JavaScript规范
- 变量使用camelCase
- 函数使用动词开头
- 避免全局变量
- 使用现代ES6+语法

## 质量检查清单

### 代码质量
- [ ] HTML结构语义化
- [ ] CSS命名规范统一
- [ ] 代码缩进正确
- [ ] 注释完整清晰

### 功能完整性
- [ ] 所有链接可点击
- [ ] 表单可提交
- [ ] 导航正常工作
- [ ] 响应式布局正确

### 用户体验
- [ ] 页面加载快速
- [ ] 导航逻辑清晰
- [ ] 信息层级合理
- [ ] 交互反馈明确

### 浏览器兼容性
- [ ] Chrome兼容
- [ ] Firefox兼容
- [ ] Safari兼容
- [ ] Edge兼容
- [ ] 移动端兼容

## 实施检查点

### 每个页面完成时检查
1. **页面结构**: HTML结构完整正确
2. **样式应用**: CSS样式正确应用
3. **内容完整性**: 所有内容模块完成
4. **链接正确**: 内部链接正确有效
5. **响应式**: 不同屏幕尺寸显示正常

### 整体项目完成时检查
1. **导航一致性**: 全站导航风格一致
2. **样式一致性**: 全站样式风格统一
3. **功能完整性**: 所有功能正常工作
4. **用户体验**: 整体用户体验流畅
5. **性能优化**: 页面加载速度优化

---

*规范制定时间: 2025-10-10*
*规范版本: v1.0*
*适用项目: StlPak线框原型设计*