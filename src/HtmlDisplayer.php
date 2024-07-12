<?php

namespace ConfettiCode\ErrorHandler;

use Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Throwable;

class HtmlDisplayer implements DisplayerInterface
{
    /**
     * @inheritdoc
     */
    public function render(Throwable $e, Request $request): Response
    {
        $statusCode = Helper::getHttpStatusCode($e);
        $headers = Helper::getHttpHeaders($e);

        $renderer = new HtmlErrorRenderer(false);

        $content = $renderer->render($e)->getAsString();

        return new Response($content, $statusCode, $headers);
    }
}
