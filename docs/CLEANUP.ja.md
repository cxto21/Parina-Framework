# クリーンアップとリセット（デモコードの削除）

Parina Framework には、機能を示すための完全なデモアプリケーション（モジュール、ルーティング、テスト、データベース）が付属しています。

すべてのデモファイルを削除し、フレームワークをクリーンな空の状態にリセットするには、以下を実行します：

```bash
php bin/cleanup.php
```

### このスクリプトが実行する処理：
1. **モジュールの削除**: `src/Modules/Admin/` および `src/Modules/Private/` ディレクトリを削除します。
2. **パブリックデモ Handler の削除**: `src/Modules/Public/` 内の `LoginFormHandler.php`、`LoginCheckHandler.php`、`AboutHandler.php`、`AutoPurchaseHandler.php` を削除します。
3. **デモ View の削除**: `src/Modules/Public/Views/` 内の `about.php`、`login.php` を削除します。
4. **デモテストの削除**: `tests/Handlers/` 内の、削除された Handler に関連するテストスイートを削除します。
5. **データベースの削除**: ローカルの SQLite データベースファイル `src/Db/app.sqlite` を削除します。
6. **ルーティングのリセット**: `config/routes.php` を上書きし、`/` と `/setup` のみを含めるようにします。

### 自動化（確認プロンプトのスキップ）
確認プロンプトをスキップするには：
```bash
php bin/cleanup.php --force
```
