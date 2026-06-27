# Limpieza y Reinicio (Demo qillqakuna pichay)

Parina Framework llikachapiqa huk hunt'asqa demo ruranam kachkan (modules, routes, tests, database-pas) rurayninkuna rikuchinapaq.

Tukuy demo p'anqakuna chhaqtachinapaq hinaspa Framework llikachata wasitat ch'usaqyachinapaq, kay kamachiyta apay:

```bash
php bin/cleanup.php
```

### Kay scriptpa rurayninqa:
1. **Modules chhaqtachin**: `src/Modules/Admin/` hinaspa `src/Modules/Private/` ukhukunata pichan.
2. **Public Demo Handlers pichan**: `LoginFormHandler.php`, `LoginCheckHandler.php`, `AboutHandler.php`, hinaspa `AutoPurchaseHandler.php` p'anqakunata `src/Modules/Public/` ukhumanta pichan.
3. **Demo Views pichan**: `about.php` hinaspa `login.php` p'anqakunata `src/Modules/Public/Views/` ukhumanta pichan.
4. **Demo Tests pichan**: `tests/Handlers/` ukhupi kaq pruebakunata pichan.
5. **Database pichan**: SQLite Database `src/Db/app.sqlite` p'anqata pichan.
6. **Routes wasitat allichan**: `config/routes.php` p'anqata qillqan, chaypi `/` hinaspa `/setup` routesllata saqispa.

### Uñachaynin sayachinapaq (Confirmación pasay)
Confirmación tapukuyta pasachinapaq:
```bash
php bin/cleanup.php --force
```
