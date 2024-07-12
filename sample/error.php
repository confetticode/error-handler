<?php

require __DIR__.'/../vendor/autoload.php';

require __DIR__.'/ClassOne.php';
require __DIR__.'/ClassThree.php';
require __DIR__.'/ClassTwo.php';

$errors = new \ConfettiCode\ErrorHandler\ErrorHandler();

$errors->setDisplayer(
    new \ConfettiCode\ErrorHandler\SymfonyDisplayer
);

$errors->setDisplayer(
    new \ConfettiCode\ErrorHandler\IgnitionDisplayer
);

$errors->register();

(new ClassOne)->actionOne();
