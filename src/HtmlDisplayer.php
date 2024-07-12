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

use Symfony\Component\HttpFoundation\Request;
use Throwable;

class HtmlDisplayer implements DisplayerInterface
{
    /**
     * @inheritdoc
     */
    public function render(Throwable $e, Request $request): string
    {
        $data = [
            'title' => Helper::getHttpStatusCode($e),
            'statusCode' => Helper::getHttpStatusCode($e),
            'statusText' => Helper::getHttpStatusText($e),
        ];

        ob_start();

        $viewFile = __DIR__ . '/../resources/views/html/error.php';

        extract($data);

        include $viewFile;

        return ob_get_clean();
    }
}
