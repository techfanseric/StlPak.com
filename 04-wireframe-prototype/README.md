# StlPak 网站线框原型设计项目

## 项目概述
基于02-策略和03-实施文件夹的内容，创建StlPak网站的完整线框原型。专注于排版和网站架构策划，采用极简灰色设计风格，为后续常修改做好准备。

## 设计原则
- **极简主义**: 不带任何效果图设计，以简单为原则
- **架构导向**: 主要体现排版、网站架构的策划效果
- **易于修改**: 样式、代码越简单越好，为后续修改做准备
- **灰色调**: 采用单一的灰色、浅雅的灰调或更简单的方式
- **完整性**: 必须把整个网站的所有页面框架都搭建出来

## 文件夹结构
```
04-wireframe-prototype/
├── planning/                 # 设计计划和进度管理
│   ├── prototype-design-plan.md
│   ├── progress-tracker.md
│   └── design-guidelines.md
├── assets/                   # 静态资源
│   ├── css/
│   │   └── wireframe.css
│   ├── js/
│   │   └── navigation.js
│   └── images/
│       └── placeholder/
├── pages/                    # HTML页面
│   ├── index.html            # 首页
│   ├── products/             # 产品页面
│   ├── dealer/               # 经销商专区
│   ├── about.html            # 关于我们
│   ├── contact.html          # 联系我们
│   └── components/           # 共用组件
└── styles/                   # 样式文件
    ├── base.css
    ├── layout.css
    └── components.css
```

## 核心页面架构

### 1. 首页 (index.html)
- 导航栏：优化后的产品分类和经销商专区
- 价值主张横幅：经销商导向的核心信息
- 核心优势展示：4大经销商优势
- 热门产品展示：按搜索量排序的产品
- 成功案例预览：经销商合作案例
- 联系咨询入口：多种联系方式

### 2. 产品页面 (products/)
- 蛋类包装系列 (egg-packaging.html)
- 烘焙包装系列 (bakery-packaging.html)
- 水果包装系列 (fruit-packaging.html)
- 产品详情页模板 (product-detail.html)

### 3. 经销商专区 (dealer/)
- 经销商专区首页 (index.html)
- 成为经销商 (become-dealer.html)
- 经销商政策 (dealer-policy.html)
- 成功案例 (success-cases.html)

### 4. 辅助页面
- 关于我们 (about.html)
- 联系我们 (contact.html)

## 设计风格指南

### 颜色方案
- 主背景: #f5f5f5 (浅灰)
- 内容背景: #ffffff (白色)
- 文字颜色: #333333 (深灰)
- 边框颜色: #e0e0e0 (中灰)
- 链接颜色: #666666 (灰)
- 链接悬停: #333333 (深灰)

### 字体
- 字体族: system-ui, -apple-system, sans-serif
- 基础字号: 16px
- 行高: 1.6

### 间距
- 基础间距单位: 8px
- 组件间距: 16px, 24px, 32px
- 页面边距: 24px

## 实施阶段

### 第一阶段：基础框架
1. 建立CSS样式系统
2. 创建页面模板
3. 实现导航组件

### 第二阶段：核心页面
1. 首页线框原型
2. 产品分类页面
3. 经销商专区

### 第三阶段：完善细节
1. 辅助页面
2. 响应式调整
3. 交互细节

## 技术要求
- 纯HTML + CSS，最小化JavaScript
- 响应式设计，支持移动端
- 语义化HTML标签
- 简洁的CSS类名
- 模块化组件设计

## 质量标准
- 所有页面可正常访问
- 链接导航正确
- 布局在不同屏幕尺寸下正常
- 代码结构清晰，易于维护
- 符合Web标准

---

*项目开始时间: 2025-10-10*
*预计完成时间: 当日内完成全部页面框架*