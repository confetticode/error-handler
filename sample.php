<?php

require __DIR__.'/vendor/autoload.php';

$ignition = \Confetti\Ignition\Ignition::setUp();

throw new \Exception('Whoops! Something went wrong.');
