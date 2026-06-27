# Phiskhuwi ukat Wasitat Amtäwi (Demo Qillqa Chhaqtayaña)

Parina Framework ukanxa mä taqpach demo lurawimpi lurt'ataski (llikachanaka, thakhinaka, yant'anakampi, base de datos) lurawinakap uñacht'ayañataki.

Taqi demo qillqanaka chhaqtayañataki ukat llikacharu wasitat ch'usaq lurayañataki, aka kamachiy apayma:

```bash
php bin/cleanup.php
```

### Kuns aka qillqax lurayi:
1. **Llikachanaka Chhaqtayi**: `src/Modules/Admin/` ukat `src/Modules/Private/` thakhinak chhaqtayi.
2. **Lliw Runa Demo Handler-nak Chhaqtayi**: `LoginFormHandler.php`, `LoginCheckHandler.php`, `AboutHandler.php` ukat `AutoPurchaseHandler.php` qillqanak `src/Modules/Public/` ukhunki chhaqtayi.
3. **Demo View-nak Chhaqtayi**: `about.php` ukat `login.php` qillqanak `src/Modules/Public/Views/` ukhunki chhaqtayi.
4. **Demo Yant'anak Chhaqtayi**: Yant'anaka `tests/Handlers/` ukhunki chhaqtayi.
5. **Base de Datos Chhaqtayi**: SQLite database `src/Db/app.sqlite` qillqa chhaqtayi.
6. **Thakhinaka Wasitat Amtayi**: `config/routes.php` qillqa kutt'ayi sapa `/` ukat `/setup` amtampiki.

### Amtäwi jan mayt'ata (Confirmación jan churaña)
Mayt'awi thakhi pasayañataki:
```bash
php bin/cleanup.php --force
```
