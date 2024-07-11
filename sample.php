<?php

require __DIR__.'/vendor/autoload.php';

$errors = new \Confetti\ErrorHandler\ErrorHandler();

$errors->setDisplayer(
    new \Confetti\ErrorHandler\IgnitionDisplayer
);

$errors->register();

new UndefinedClass;
