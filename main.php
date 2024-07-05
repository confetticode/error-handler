<?php

use Composer\Autoload\ClassLoader;
use Illuminate\Foundation\Bootstrap\HandleExceptions;
use Illuminate\Foundation\Exceptions\Renderer\Frame;
use Symfony\Component\ErrorHandler\Exception\FlattenException;

require __DIR__.'/vendor/autoload.php';

function error_handler_css(): string
{
    $contents = array_map(function ($fileAndAttributes) {
        [$filename, $attributes] = $fileAndAttributes;

        return '<style '.collect($attributes)->map(function ($value, $attribute) {
                return $attribute.'="'.$value.'"';
            })->implode(' ').'>'
            .file_get_contents(__DIR__ . '/dist/' . $filename)
            .'</style>';
    }, [
        ['styles.css', []],
        ['light-mode.css', ['data-theme' => 'light']],
        ['dark-mode.css', ['data-theme' => 'dark']],
    ]);

    return implode('', $contents);
}

function error_handler_js(): string
{
    return '<script>'
        .file_get_contents(__DIR__ . '/dist/scripts.js')
        .'</script>';
}

function error_handler_code($frame): string
{
    $contents = file($frame['file']) ?: [];

    $start = max($frame['line'] - 6, 0);

    $length = 8 * 2 + 1;

    return implode('', array_slice($contents, $start, $length));
}

try {
    $container = new Illuminate\Container\Container();
    $container->make('foo');
} catch (\Throwable $e) {
    $flatten = \Symfony\Component\ErrorHandler\Exception\FlattenException::createFromThrowable($e);

    $trace = $flatten->getTrace();

    $frames = [];

    foreach ($trace as $k => $v) {
        $action = 'unknown';
        if ($v['type'] = '->') {
            $action = $v['function'];
        }
        $frame = [
            'file' => $v['file'],
            'line' => $v['line'],
            'action' => $action,
            'code' => error_handler_code($v),
        ];

        $frames[] = $frame;
    }

    ob_start();
    require __DIR__.'/views/default.php';
    $output = ob_get_contents();
    ob_end_flush();

    echo $output;
}
