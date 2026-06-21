<?php

namespace Parina\Modules\Public;

use Parina\Core\Interfaces\Handler;
use Parina\Core\Request;
use Parina\Core\Interfaces\Response;
use Parina\Core\Responses\HtmlResponse;

/**
 * Description: Comprar auto
 */
class AutoPurchaseHandler implements Handler
{
    public function handle(Request $request): Response
    {
        return new HtmlResponse("<h1>Comprar auto</h1>");
    }
}