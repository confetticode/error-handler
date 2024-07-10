<?php

namespace Confetti\Ignition\Displayers;

use Confetti\Ignition\DisplayerInterface;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class Displayer implements DisplayerInterface
{
    /**
     * @inheritdoc
     */
    public function render(\Throwable $e, Request $request): Response
    {
        return new Response('Whoops! Something went wrong.', static::parseStatusCode($e, $request));
    }

    public static function parseStatusCode($e, Request $request): int
    {
        return is_callable([$e, 'getStatusCode']) ? $e->getStatusCode() : 500;
    }
}
