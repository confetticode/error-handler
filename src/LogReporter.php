<?php

declare(strict_types=1);

/*
 * This file is part of the ConfettiCode project.
 *
 * (c) ConfettiCode
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ConfettiCode\ErrorHandler;

use Psr\Log\LoggerInterface;
use Throwable;

class LogReporter implements ReporterInterface
{
    public function __construct(private LoggerInterface $logger)
    {
    }

    public function report(Throwable $e): void
    {
        if ($e instanceof DeprecationException) {
            $this->logger->warning($e->getMessage(), ['exception' => $e]);

            return;
        }
        $this->logger->error($e->getMessage(), ['exception' => $e]);
    }
}
