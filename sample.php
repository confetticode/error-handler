<?php

use ConfettiCode\ErrorHandler\Decorator;
use Illuminate\Container\Container;

require __DIR__.'/vendor/autoload.php';

class ExceptionRaiser
{
    public static function raise(): void
    {
        Container::getInstance()->make('unknown');
    }

}

function raise_exception(): void
{
    ExceptionRaiser::raise();
}

try {
    raise_exception();
} catch (Throwable $e) {
    $decorator = new Decorator($e);

    $decorator->getStackTrace();

    ob_start();
    require __DIR__.'/resources/views/error.php';
    $output = ob_get_contents();
    ob_end_flush();

    echo $output;
}
