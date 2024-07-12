<?php

declare(strict_types=1);

/*
 * This file is part of the ConfettiCode project.
 *
 * (c) ConfettiCode
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

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
