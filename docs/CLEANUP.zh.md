# 清理与重置（移除演示代码）

Parina Framework 附带了一个完整的演示应用程序（模块、路由、测试和数据库）以展示其功能。

若要移除所有演示文件并将框架重置为全新的空白状态，请运行：

```bash
php bin/cleanup.php
```

### 此脚本执行的操作：
1. **移除模块**：删除 `src/Modules/Admin/` 和 `src/Modules/Private/` 目录。
2. **移除公共演示 Handler**：删除 `src/Modules/Public/` 中的 `LoginFormHandler.php`、`LoginCheckHandler.php`、`AboutHandler.php` 和 `AutoPurchaseHandler.php`。
3. **移除演示 View**：删除 `src/Modules/Public/Views/` 中的 `about.php` 和 `login.php`。
4. **移除演示测试**：删除 `tests/Handlers/` 中与已移除 the Handler 相关的测试套件。
5. **移除数据库**：删除本地 SQLite 数据库文件 `src/Db/app.sqlite`。
6. **重置路由**：重写 `config/routes.php`，使其仅包含 `/` 和 `/setup`。

### 自动化（跳过确认）
若要跳过确认提示：
```bash
php bin/cleanup.php --force
```
