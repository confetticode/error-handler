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

namespace Tests\ConfettiCode\ErrorHandler;

use ConfettiCode\ErrorHandler\ErrorHandler;
use ConfettiCode\ErrorHandler\HtmlDisplayer;
use PHPUnit\Framework\TestCase;

class ErrorHandlerTest extends TestCase
{
    public function test_it_sets_reserved_memory(): void
    {
        self::assertNull(ErrorHandler::$reservedMemory);

        new ErrorHandler();

        self::assertNotNull(ErrorHandler::$reservedMemory);
    }

    public function test_it_sets_html_displayer_by_default(): void
    {
        $errors = new ErrorHandler();

        self::assertInstanceOf(HtmlDisplayer::class, $errors->getDisplayer());
    }
}
