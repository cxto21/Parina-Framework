# Bereinigung und Zurücksetzen (Demo-Code entfernen)

Das Parina Framework wird mit einer vollständigen Demo-Anwendung (Module, Routen, Tests, Datenbank) geliefert, um die Funktionen zu zeigen.

Um alle Demo-Dateien zu entfernen und das Framework in einen sauberen, leeren Zustand zurückzusetzen, führen Sie folgenden Befehl aus:

```bash
php bin/cleanup.php
```

### Was dieses Skript tut:
1. **Entfernt Module**: Löscht die Verzeichnisse `src/Modules/Admin/` und `src/Modules/Private/`.
2. **Entfernt öffentliche Demo-Handler**: Löscht `LoginFormHandler.php`, `LoginCheckHandler.php`, `AboutHandler.php` und `AutoPurchaseHandler.php` in `src/Modules/Public/`.
3. **Entfernt Demo-Views**: Löscht `about.php` und `login.php` in `src/Modules/Public/Views/`.
4. **Entfernt Demo-Tests**: Löscht die Testsuiten in `tests/Handlers/`, die den entfernten Handlern zugeordnet sind.
5. **Entfernt die Datenbank**: Löscht die lokale SQLite-Datenbankdatei `src/Db/app.sqlite`.
6. **Setzt Routen zurück**: Überschreibt `config/routes.php`, sodass sie nur `/` und `/setup` enthält.

### Automatisierung (Bestätigung überspringen)
Um die Bestätigungsaufforderung zu überspringen:
```bash
php bin/cleanup.php --force
```
