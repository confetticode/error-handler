<?php

namespace ConfettiCode\ErrorHandler;

use Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer;
use Symfony\Component\HttpFoundation\Request;
use Throwable;

class SymfonyDisplayer implements DisplayerInterface
{
    /**
     * @inheritdoc
     */
    public function render(Throwable $e, Request $request): string
    {
        $renderer = new HtmlErrorRenderer(true);

        return $renderer->render($e)->getAsString();
    }
}
