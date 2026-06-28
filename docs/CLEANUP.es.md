# Limpieza y Reinicio (Eliminar Código de Demostración)

Parina Framework incluye una aplicación de demostración completa (módulos, rutas, pruebas, base de datos) para mostrar sus características.

Para eliminar todos los archivos de demostración y restablecer el framework a un estado limpio y vacío, ejecuta:

```bash
php bin/cleanup.php
```

### Lo que hace este script:
1. **Elimina Módulos**: Borra los directorios `src/Modules/Admin/` y `src/Modules/Private/`.
2. **Elimina Handlers de Demostración Públicos**: Borra `LoginFormHandler.php`, `LoginCheckHandler.php`, `AboutHandler.php` y `AutoPurchaseHandler.php` dentro de `src/Modules/Public/`.
3. **Elimina Vistas de Demostración**: Borra `about.php` y `login.php` en `src/Modules/Public/Views/`.
4. **Elimina Pruebas de Demostración**: Borra las suites de pruebas en `tests/Handlers/` asociadas con los handlers eliminados.
5. **Elimina la Base de Datos**: Borra el archivo de base de datos SQLite local `src/Db/app.sqlite`.
6. **Restablece las Rutas**: Sobrescribe `config/routes.php` para contener únicamente `/` y `/setup`, y limpia `routes.csv` dejando solo el encabezado.

### Automatización (Omitir confirmación)
Para omitir el mensaje de confirmación:
```bash
php bin/cleanup.php --force
```
