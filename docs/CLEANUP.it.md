# Pulizia e Ripristino (Rimozione del Codice di Demo)

Parina Framework viene fornito con un'applicazione demo completa (moduli, rotte, test, database) per mostrare le sue funzionalità.

Per rimuovere tutti i file demo e ripristinare il framework a uno stato pulito e vuoto, esegui:

```bash
php bin/cleanup.php
```

### Cosa fa questo script:
1. **Rimuove i Moduli**: Elimina le directory `src/Modules/Admin/` e `src/Modules/Private/`.
2. **Rimuove gli Handler Demo Pubblici**: Elimina `LoginFormHandler.php`, `LoginCheckHandler.php`, `AboutHandler.php` e `AutoPurchaseHandler.php` all'interno di `src/Modules/Public/`.
3. **Rimuove le View Demo**: Elimina `about.php` e `login.php` in `src/Modules/Public/Views/`.
4. **Rimuove i Test Demo**: Elimina le suite di test in `tests/Handlers/` associate agli handler rimossi.
5. **Rimuove il Database**: Elimina il file database SQLite locale `src/Db/app.sqlite`.
6. **Ripristina le Rotte**: Sovrascrive `config/routes.php` per contenere solo `/` e `/setup`.

### Automazione (Ignora la conferma)
Per saltare la richiesta di conferma:
```bash
php bin/cleanup.php --force
```
