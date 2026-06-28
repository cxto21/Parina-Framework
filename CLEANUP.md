# Cleanup and Reset (Eject Demo Code)

Parina Framework comes with a complete demo application (modules, routes, tests, database) to showcase features.

To remove all demo files and reset the framework to a fresh, empty state, run:

```bash
php bin/cleanup.php
```

### What this script does:
1. **Removes Modules**: Deletes `src/Modules/Admin/` and `src/Modules/Private/` directories.
2. **Removes Public Demo Handlers**: Deletes `LoginFormHandler.php`, `LoginCheckHandler.php`, `AboutHandler.php`, and `AutoPurchaseHandler.php` inside `src/Modules/Public/`.
3. **Removes Demo Views**: Deletes `about.php` and `login.php` in `src/Modules/Public/Views/`.
4. **Removes Demo Tests**: Deletes test suites in `tests/Handlers/` associated with the removed handlers.
5. **Removes Database**: Deletes the local SQLite database file `src/Db/app.sqlite`.
6. **Resets Routes**: Overwrites `config/routes.php` to contain only `/` and `/setup`, and resets `routes.csv` to leave only the header.

### Automation (Skip confirmation)
To skip the confirmation prompt:
```bash
php bin/cleanup.php --force
```
