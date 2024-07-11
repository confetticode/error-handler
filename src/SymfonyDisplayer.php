<?php

namespace Confetti\ErrorHandler;

use Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Throwable;

class SymfonyDisplayer implements DisplayerInterface
{
    public function __construct(private bool $debug = false)
    {
        //
    }

    public function isDebug(): bool
    {
        return $this->debug;
    }

    public function setDebug(bool $debug): self
    {
        $this->debug = $debug;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function render(Throwable $e, Request $request): Response
    {
        $statusCode = Helper::getHttpStatusCode($e);
        $headers = Helper::getHttpHeaders($e);

        $renderer = new HtmlErrorRenderer($this->debug);

        $content = $renderer->render($e)->getAsString();

        return new Response($content, $statusCode, $headers);
    }
}
