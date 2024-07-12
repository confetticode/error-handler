<?php

namespace ConfettiCode\ErrorHandler;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Throwable;

interface DisplayerInterface
{
    /**
     * Render a response for the given throwable instance and request.
     */
    public function render(Throwable $e, Request $request): Response;

//    public function display(\Throwable $e, Request $request): void;
}
