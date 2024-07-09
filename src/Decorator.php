<?php

namespace ConfettiCode\ErrorHandler;

use ReflectionClass;
use Throwable;

class Decorator
{
    public function __construct(private Throwable $e)
    {
        //
    }

    public function getTitle(): string
    {
        return 'Whoops! Something went wrong';
    }

    public function getStatusCode(): int
    {
        return 500;
    }

    public function getStatusText(): string
    {
        return 'Internal Server Error';
    }

    public function getClassFullName(): string
    {
        return get_class($this->e);
    }

    public function getClassShortName(): string
    {
        $reflect = new ReflectionClass($this->e);
        return $reflect->getShortName();
    }

    public function getMessage(): string
    {
        return $this->e->getMessage();
    }

    public function getRequestLine(): string
    {
        return 'GET /sample.php';
    }

    public function getRuntimeLine(): string
    {
        return 'PHP ' . PHP_VERSION;
    }

    /**
     * @return Frame[]
     */
    public function getStackFrames()
    {
        return array_map(function (array $trace) {
            return new Frame($trace);
        }, $this->e->getTrace());
    }
}
