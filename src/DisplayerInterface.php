<?php

namespace Confetti\Ignition;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

interface DisplayerInterface
{
    /**
     * Render a response for the given throwable instance.
     */
    public function render(\Throwable $e, Request $request): Response;

//    public function display(\Throwable $e, Request $request): void;
}
