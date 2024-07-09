<?php

namespace ConfettiCode\ErrorHandler;

class Helper
{
    /**
     * Get the style tag for the error page.
     *
     * @return string
     */
    public static function styleTag(): string
    {
        $css = implode('', array_map(function (string $file) {
            return file_get_contents($file);
        }, [
            __DIR__ . '/../dist/tailwind.css',
            __DIR__ . '/../dist/hljs.min.css',
        ]));
        return "<style>$css</style>";
    }

    /**
     * Get the script tag for the error page.
     *
     * @return string
     */
    public static function scriptTag(): string
    {
        $content = implode('', array_map(function (string $file) {
            return file_get_contents($file);
        }, [
            __DIR__ . '/../dist/alpine.min.js',
            __DIR__ . '/../dist/highlight.min.js',
            __DIR__ . '/../dist/highlightjs-line-numbers.min.js',
        ]));
        return "<script>$content</script>";
    }
}
