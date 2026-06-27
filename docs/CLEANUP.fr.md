# Nettoyage et Réinitialisation (Suppression du Code de Démo)

Parina Framework inclut une application de démonstration complète (modules, routes, tests, base de données) pour présenter ses fonctionnalités.

Pour supprimer tous les fichiers de démonstration et réinitialiser le framework à un état propre et vide, exécutez :

```bash
php bin/cleanup.php
```

### Ce que fait ce script :
1. **Supprime les Modules** : Supprime les répertoires `src/Modules/Admin/` et `src/Modules/Private/`.
2. **Supprime les Handlers de Démo Publics** : Supprime `LoginFormHandler.php`, `LoginCheckHandler.php`, `AboutHandler.php` et `AutoPurchaseHandler.php` dans `src/Modules/Public/`.
3. **Supprime les Vues de Démo** : Supprime `about.php` et `login.php` dans `src/Modules/Public/Views/`.
4. **Supprime les Tests de Démo** : Supprime les suites de tests dans `tests/Handlers/` associées aux handlers supprimés.
5. **Supprime la Base de Données** : Supprime le fichier de base de données SQLite local `src/Db/app.sqlite`.
6. **Réinitialise les Routes** : Réécrit `config/routes.php` pour ne contenir que `/` et `/setup`.

### Automatisation (Ignorer la confirmation)
Pour ignorer le message de confirmation :
```bash
php bin/cleanup.php --force
```
