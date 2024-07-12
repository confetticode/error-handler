<?php declare(strict_types=1);

namespace ConfettiCode\ErrorHandler;

use ErrorException;
use Exception;
use Symfony\Component\ErrorHandler\Error\FatalError;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Throwable;

class ErrorHandler
{
    /**
     * Reserved memory so that errors can be displayed properly on memory exhaustion.
     *
     * @var string|null
     */
    public static ?string $reservedMemory = null;

    protected DisplayerInterface $displayer;

    public function __construct(?DisplayerInterface $displayer = null)
    {
        if (!isset(self::$reservedMemory)) {
            static::$reservedMemory = str_repeat('x', 32768);
        }

        if (!$displayer) {
            $displayer = new HtmlDisplayer();
        }

        $this->displayer = $displayer;
    }

    public function getDisplayer(): DisplayerInterface
    {
        return $this->displayer;
    }

    public function setDisplayer(DisplayerInterface $displayer): self
    {
        $this->displayer = $displayer;

        return $this;
    }

    /**
     * Set up the error, exception and shutdown handlers.
     */
    public function register(): self
    {
        error_reporting(E_ALL);

        set_error_handler([$this, 'handleError']);

        set_exception_handler([$this, 'handleException']);

        register_shutdown_function([$this, 'handleShutdown']);

        return $this;
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

    public function render(\Throwable $e, ?Request $request = null): Response
    {
        $statusCode = Helper::getHttpStatusCode($e);
        $headers = Helper::getHttpHeaders($e);
        $content = $this->displayer->render($e, $request ?: Request::createFromGlobals());

        return new Response($content, $statusCode, $headers);
    }
}
