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

use Symfony\Component\HttpFoundation\Response;
use Throwable;

class Helper
{
    public static function getHttpStatusCode(Throwable $e): int
    {
        return \is_callable([$e, 'getStatusCode']) ? $e->getStatusCode() : Response::HTTP_INTERNAL_SERVER_ERROR;
    }

    public static function getHttpHeaders(Throwable $e): array
    {
        return \is_callable([$e, 'getHeaders']) ? $e->getHeaders() : [];
    }

    public static function getHttpStatusText(Throwable $e): string
    {
        return Response::$statusTexts[static::getHttpStatusCode($e)] ?? Response::$statusTexts[Response::HTTP_INTERNAL_SERVER_ERROR];
    }
}
