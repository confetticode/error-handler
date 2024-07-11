<?php

namespace Tests\Confetti\ErrorHandler;

use Confetti\ErrorHandler\ErrorHandler;
use Confetti\ErrorHandler\SymfonyDisplayer;
use PHPUnit\Framework\TestCase;

class ErrorHandlerTest extends TestCase
{
    public function test_it_sets_reserved_memory(): void
    {
        self::assertNull(ErrorHandler::$reservedMemory);

        new ErrorHandler;

        self::assertNotNull(ErrorHandler::$reservedMemory);
    }

    public function test_it_sets_symfony_displayer_by_default(): void
    {
        $errors = new ErrorHandler();

        self::assertInstanceOf(SymfonyDisplayer::class, $errors->getDisplayer());
    }
}
