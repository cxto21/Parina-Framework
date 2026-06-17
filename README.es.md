# Parina Framework
### *Altiplano Edition: Menos es más. El web framework para pensar claro.*

Parina es un micro–framework para aplicaciones web escrito en PHP moderno.
No intenta hacerlo todo. No trae magia. No oculta decisiones.

Su objetivo es simple:

> **Dar solo las piezas esenciales para que cada desarrollador construya el resto con claridad.**

## 🌄 Filosofía

Parina propone lo contrario al exceso:

- **Una entrada única (Front Controller)**
- **Un router explícito**
- **Un kernel simple que despacha**
- **Handlers como unidades mínimas de acción**
- **Vistas livianas**
- **Responses claras**
- **Infraestructura opcional**

Cuando hay menos, **se ve mejor**.

## 🧱 Arquitectura

Parina se compone de elementos desacoplados:

```
Handler           → contrato único
Router            → mapa URL → handler
Kernel            → ejecuta el flujo
Response          → representación de la salida
View              → helper para plantillas PHP
Session           → control explícito de sesión
```

Additional infrastructure (like database access) lives outside the core.

## 🚀 Minimum Example

```php
// public/index.php
use Parina\Core\Router;
use Parina\Core\Kernel;

require 'vendor/autoload.php';

$router = new Router();

// Rutas públicas
$router->add('GET', '/', Parina\Modules\Public\HomeHandler::class);

$kernel = new Kernel($router);
$kernel->run();
```

## 🏠 Handler

```php
namespace Parina\Modules\Public;

use Parina\Core\View;
use Parina\Core\Interfaces\Handler;
use Parina\Core\Interfaces\Response;
use Parina\Core\Responses\HtmlResponse;

class HomeHandler implements Handler
{
    public function handle(Request $request): Response
    {
        $content = View::renderWithLayout("Public/Views/home", "default", ['title' => 'Parina']);
        return (new HtmlResponse($content, 200));
    }
}
```

## 🖼 Vista

```php
<!-- Modules/Public/Views/home.php -->
<h1><?= $title ?></h1>
<p>Bienvenido a Parina Framework.</p>
```

## 🧪 Tests incluidos

Parina está desarrollado con PHPUnit y pensado para coverage completo.

```
tests/
 ├── KernelTest.php
 ├── RouterTest.php
 ├── HandlerTest.php
 └── Handlers/FakeHandler.php
```

## 🔒 Seguridad

Incluye protección opcional mediante:

- CSRF tokens
- Same-Origin defense
- Middlewares aplicables al kernel

## 🗄 Infraestructura (opcional)

En `Infrastructure/Db.php` se ofrece una capa simple para:

- conectar
- preparar queries
- ejecutar comandos

## 🧘 Por qué Parina Framework

Porque programar no es juntar librerías.  
Programar es **pensar claro**.

Parina Framework existe para recordarnos que:

> **Una aplicación web no necesita complicarse para ser potente.**

## 🏃 Ejecutar el servidor

Parina Framework funciona con el servidor embebido de PHP.  
Para ponerlo a correr, solo ejecuta:

```bash
php -S localhost:8000 -t public
```

## 📦 Instalación

Pronto en Packagist.

## 🪶 Licencia

MIT.