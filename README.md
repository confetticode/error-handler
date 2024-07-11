# A great unified error handler for PHP

```php
<?php

require __DIR__.'/vendor/autoload.php';

$handler = new \Confetti\ErrorHandler\ErrorHandler();

$handler->setDisplayer(
    new \Confetti\ErrorHandler\IgnitionDisplayer
);

$handler->register();

new UndefinedClass;
```
