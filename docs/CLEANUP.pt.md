# Limpieza e Reinicialização (Remover Código de Demonstração)

Parina Framework vem com uma aplicação de demonstração completa (módulos, rotas, testes, banco de dados) para mostrar seus recursos.

Para remover todos os arquivos de demonstração e redefinir o framework para um estado limpo e vazio, execute:

```bash
php bin/cleanup.php
```

### O que este script faz:
1. **Remove Módulos**: Exclui os diretórios `src/Modules/Admin/` e `src/Modules/Private/`.
2. **Remove Handlers de Demonstração Públicos**: Exclui `LoginFormHandler.php`, `LoginCheckHandler.php`, `AboutHandler.php` e `AutoPurchaseHandler.php` dentro de `src/Modules/Public/`.
3. **Remove Views de Demonstração**: Exclui `about.php` e `login.php` em `src/Modules/Public/Views/`.
4. **Remove Testes de Demonstração**: Exclui as suítes de testes em `tests/Handlers/` associadas aos handlers removidos.
5. **Remove o Banco de Dados**: Exclui o arquivo de banco de dados SQLite local `src/Db/app.sqlite`.
6. **Redefine as Rotas**: Sobrescreve `config/routes.php` para conter apenas `/` e `/setup`.

### Automação (Ignorar confirmação)
Para ignorar a solicitação de confirmação:
```bash
php bin/cleanup.php --force
```
