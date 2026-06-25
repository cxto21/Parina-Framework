# Parina Framework
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/nelsonrojasn/Parina-Framework/badges/quality-score.png?b=main)](https://scrutinizer-ci.com/g/nelsonrojasn/Parina-Framework/?branch=main)
[![Build Status](https://scrutinizer-ci.com/g/nelsonrojasn/Parina-Framework/badges/build.png?b=main)](https://scrutinizer-ci.com/g/nelsonrojasn/Parina-Framework/build-status/main)

### *Altiplano Edition: Less is more. The web framework for clear thinking.*

---

## What is Parina?

Parina is a minimal micro-framework for modern PHP applications. It provides just enough structure to build applications with clarity, control, and peak performance.

---

## Philosophy

**Clarity over abstraction. Control over convenience.**

Parina focuses on:
* **Explicit design:** No magic, no hidden lifecycles.
* **Minimal overhead:** Every byte and millisecond counts.
* **Predictable flow:** What you see is exactly what executes.

---

## Architecture in 10 Lines

1. A request enters through a front controller.
2. It goes through the middleware pipeline.
3. Middleware can block or pass.
4. It reaches the registered handler.
5. Handler executes core logic.
6. Returns a standard response.
7. No heavy magic.
8. No hidden framework lifecycles.
9. No unnecessary abstractions.
10. Just clear, linear execution.

---

## Request Lifecycle

[ Request ] ──> [ Middleware ] ──> [ Handler ] ──> [ Response ]


### Middleware Model
Each middleware layer follows a simple binary rule:
* **Returns `Response`** → Stop execution and emit.
* **Returns `null`** → Continue to the next layer.

---

## Security

Security is first-class and lives exactly where it belongs: in the middleware pipeline.

* Rate limiting
* Request size validation
* CSRF protection
* Same-origin policy (CORS)
* Authentication (Basic / JWT)
* Authorization (ACL)

---

## Performance

Designed for minimal overhead and microsecond-accuracy:

* **~0.0007 seconds** per request execution.
* **~0.05 MB** RAM footprint.
* Fully Opcache friendly.

---

## Example

```php
use Parina\Router;
use Parina\Kernel;

$router = new Router();
$router->add('GET', '/', HomeHandler::class);

$kernel = new Kernel($router);
$kernel->run();
```

## Minimal Handler Example
```php

namespace Parina\Modules\Public;

use Parina\Core\Interfaces\Handler;
use Parina\Core\Interfaces\Response;
use Parina\Core\Request;
use Parina\Core\Responses\HtmlResponse;

class HomeHandler implements Handler
{
    public function handle(Request $request): Response
    {
        return (new HtmlResponse("Hello world", 200));
    }
}

```

## Why Parina Exists

Most complexity in software is accidental. Parina asks:

What is the smallest structure that still works correctly, securely, and fast?

Parina is not minimal by limitation. It is minimal by intention. It removes everything you do not actually need.

## Deployment & Installation

Production Deployment: For directory layout, permissions, and production tips, see DEPLOY.md.

## Installation: 

Packagist Soon.

## 🪶 License

MIT License.