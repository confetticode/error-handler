<?php

require __DIR__.'/../vendor/autoload.php';

require __DIR__.'/ClassOne.php';
require __DIR__.'/ClassThree.php';
require __DIR__.'/ClassTwo.php';

$errors = new \ConfettiCode\ErrorHandler\ErrorHandler();

$errors->setReporter((function () {
    $logger = new \Monolog\Logger('testing');

    $logger->setHandlers([
        new \Monolog\Handler\StreamHandler(__DIR__.'/log.txt'),
    ]);

    return new \ConfettiCode\ErrorHandler\SimpleReporter($logger);
})());

$errors->setDisplayer((function () {
    $request = \Symfony\Component\HttpFoundation\Request::createFromGlobals();

    $type = $request->query->getString('type');

    if ($type === 'symfony') {
        return new \ConfettiCode\ErrorHandler\SymfonyDisplayer;
    }

    if ($type === 'ignition') {
        return new \ConfettiCode\ErrorHandler\IgnitionDisplayer;
    }

    return new \ConfettiCode\ErrorHandler\HtmlDisplayer;
})());

$errors->register();

trigger_error('This is a deprecated example.', E_USER_DEPRECATED);

try {
    throw new \RuntimeException('Test error reported manually.');
} catch (\Exception $ex) {
    $errors->report($ex);
}

(new ClassOne)->actionOne();
