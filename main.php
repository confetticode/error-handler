<?php

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

try {
    $container = new Illuminate\Container\Container();
    $container->make('foo');
} catch (\Throwable $e) {
    $flatten = \Symfony\Component\ErrorHandler\Exception\FlattenException::createFromThrowable($e);

    ob_start();
    require __DIR__.'/views/default.php';
    $output = ob_get_contents();
    ob_end_flush();

    echo $output;
}
