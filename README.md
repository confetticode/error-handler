# A great unified error handler for PHP

## Installation

Install `confetticode/error-handler` as a Composer dependency in your project.

```php
composer require confetticode/error-handler
```

## Usage

Create a new instance of the `ErrorHandler` class. By default, `HtmlDisplayer` will be initialized. This will display an error html page with status code, message and short description.

```php
$errors = new \Confetti\ErrorHandler\ErrorHandler();
```

Register the `$errors` instance as the global error handler by doing some logic with `set_error_handler`, `set_exception_handler` and `register_shutdown_function`. Then, any uncaught errors/exceptions will be handled.

```php
$errors->register();
```

You can change displayer by calling the `setDisplayer` method.

```php
// Natively available.
$errors->setDisplayer(new \ConfetiCode\ErrorHandler\SymfonyDisplayer);

// To use IgnitionDisplayer, you have to install "spatie/ignition".
$errors->setDisplayer(new \ConfetiCode\ErrorHandler\IgnitionDisplayer);
```

Integrate with `monolog/monolog`, eg: writing logs into files.

```bash
composer require monolog/monolog
```

```php
$logger = new \Monolog\Logger('testing');

$logger->setHandlers([
    new \Monolog\Handler\StreamHandler(__DIR__.'/log.txt'),
]);

$reporter = new \ConfettiCode\ErrorHandler\LogReporter($logger);

$errors->setReporter($reporter);
```

You may try out [error.php](./sample/error.php) file for a quick overview.

## License

The `confetticode/error-handler` package is licensed under the [MIT license](./LICENSE.md).
