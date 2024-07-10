<?php

require __DIR__.'/vendor/autoload.php';

$ignition = \Confetti\Ignition\Ignition::setUp();

$ignition->setDebug(true);

throw new \Exception('Whoops! Something went wrong.');
