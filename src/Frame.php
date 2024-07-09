<?php

namespace ConfettiCode\ErrorHandler;

class Frame
{
    protected string $file;
    protected int $line;
    protected string $action;

    public function __construct(array $trace)
    {
        $this->file = $trace['file'];
        $this->line = $trace['line'];

        if (isset($trace['class'])) {
            if ($trace['type'] === '->') {
                $this->action = sprintf('Object(%s)->%s()', $trace['class'], $trace['function']);
            } else {
                $this->action = sprintf('%s::%s()', $trace['class'], $trace['function']);
            }
        } else {
            $this->action = $trace['function'];
        }
    }

    public function getFile(): string
    {
        return $this->file;
    }

    public function getLine(): int
    {
        return $this->line;
    }

    public function getAction(): string
    {
        return $this->action;
    }

    public function getCodeSnippet(): string
    {
        $contents = file($this->file) ?: [];

        $start = max($this->line - 6, 0);

        $length = 8 * 2 + 1;

        return implode('', array_slice($contents, $start, $length));
    }

    public function getStartLine(): int
    {
        return max($this->getLine() - 5, 1);
    }

    public function getEndLine(): int
    {
        return $this->getStartLine() + (8 * 2 + 1);
    }
}
