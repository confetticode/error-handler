<?php

namespace ConfettiCode\ErrorHandler;

use Symfony\Component\HttpFoundation\Request;
use Throwable;

interface DisplayerInterface
{
    /**
     * Render content as a string for the given throwable and request.
     */
    public function render(Throwable $e, Request $request): string;

//    public function display(\Throwable $e, Request $request): void;
}
