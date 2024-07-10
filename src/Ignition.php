<?php declare(strict_types=1);

namespace Confetti\Ignition;

use ErrorException;
use Exception;
use Spatie\Ignition\Ignition as IgnitionHandler;
use Symfony\Component\ErrorHandler\Error\FatalError;
use Symfony\Component\HttpFoundation\Response;
use Throwable;

class Ignition
{
    /**
     * Reserved memory so that errors can be displayed properly on memory exhaustion.
     *
     * @var string|null
     */
    public static ?string $reservedMemory;

    /**
     * The debug mode.
     */
    protected bool $debug = false;

    public function __construct()
    {
        if (!isset(self::$reservedMemory)) {
            static::$reservedMemory = str_repeat('x', 32768);
        }
    }

    /**
     * Set up the error, exception and shutdown handlers.
     */
    public static function setUp(): static
    {
        error_reporting(E_ALL);

        $ignition = new Ignition();

        set_error_handler([$ignition, 'handleError']);

        set_exception_handler([$ignition, 'handleException']);

        register_shutdown_function([$ignition, 'handleShutdown']);

        return $ignition;
    }

    /**
     * Report PHP deprecations, or convert PHP errors to ErrorException instances.
     *
     * @throws ErrorException
     */
    public function handleError(int $level, string $message, string $file = '', int $line = 0): void
    {
        if ($this->isDeprecation($level)) {
            $this->handleDeprecationError($message, $file, $line, $level);
        } elseif (error_reporting() & $level) {
            throw new ErrorException($message, 0, $level, $file, $line);
        }
    }

    /**
     * Determine if the error level is a deprecation.
     */
    protected function isDeprecation(int $level): bool
    {
        return in_array($level, [E_DEPRECATED, E_USER_DEPRECATED], true);
    }

    /**
     * Reports a deprecation to the "deprecations" logger.
     */
    public function handleDeprecationError(string $message, string $file, int $line, int $level = E_DEPRECATED): void
    {
        // TODO: To implement later.
    }

    /**
     * Handle an uncaught exception from the application.
     *
     * Note: Most exceptions can be handled via the try / catch block in
     * the HTTP and Console kernels. But, fatal error exceptions must
     * be handled differently since they are not normal exceptions.
     */
    public function handleException(Throwable $e): void
    {
        static::$reservedMemory = null;

        try {
            $this->reportException($e);
        } catch (Exception) {
            $exceptionHandlerFailed = true;
        }

        if ($this->runningInConsole()) {
            $this->renderForConsole($e);

            if ($exceptionHandlerFailed ?? false) {
                exit(1);
            }
        } else {
            $this->renderHttpResponse($e);
        }
    }

    protected function reportException(Throwable $e): void
    {
        // TODO: To implement later.
    }

    protected function runningInConsole(): bool
    {
        return in_array(PHP_SAPI, ['cli', 'phpdbg'], true);
    }

    protected function renderForConsole(Throwable $e): void
    {
        // TODO: To implement later.
    }

    protected function renderHttpResponse(Throwable $e): void
    {
        $this->render($e)->send();
    }

    /**
     * Handle the PHP shutdown event.
     */
    public function handleShutdown(): void
    {
        static::$reservedMemory = null;

        if (! is_null($error = error_get_last()) && $this->isFatal($error['type'])) {
            $this->handleException($this->fatalErrorFromPhpError($error, 0));
        }
    }

    /**
     * Determine if the error type is fatal.
     */
    protected function isFatal(int $type): bool
    {
        return in_array($type, [E_COMPILE_ERROR, E_CORE_ERROR, E_ERROR, E_PARSE], true);
    }

    /**
     * Create a new fatal error instance from an error array.
     */
    protected function fatalErrorFromPhpError(array $error, ?int $traceOffset = null): FatalError
    {
        return new FatalError($error['message'], 0, $error, $traceOffset);
    }

    public function render(\Throwable $e): Response
    {
        $statusCode = is_callable([$e, 'getStatusCode']) ? $e->getStatusCode() : 500;
        $statusText = is_callable([$e, 'getStatusText']) ? $e->getStatusText() : 'Internal Server Error';

        if ($this->debug) {
            $handler = new IgnitionHandler;

            ob_start();
            $handler->handleException($e);
            $content = ob_get_clean();
            ob_end_clean();
        } else {
            $content = $statusText;
        }

        return new Response($content, $statusCode);
    }

    public function setDebug(bool $debug): self
    {
        $this->debug = $debug;

        return $this;
    }

    public function isDebug(): bool
    {
        return $this->debug;
    }
}
