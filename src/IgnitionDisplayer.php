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

use Spatie\ErrorSolutions\Solutions\SolutionTransformer;
use Spatie\FlareClient\Context\RequestContextProvider;
use Spatie\FlareClient\Report;
use Spatie\Ignition\Config\IgnitionConfig;
use Spatie\Ignition\ErrorPage\ErrorPageViewModel;
use Spatie\Ignition\ErrorPage\Renderer;
use Spatie\Ignition\Ignition;
use Symfony\Component\HttpFoundation\Request;
use Throwable;

class IgnitionDisplayer implements DisplayerInterface
{
    /**
     * @inheritdoc
     */
    public function render(Throwable $e, ?Request $request = null): string
    {
        $report = Report::createForThrowable($e, new RequestContextProvider($request));

        $viewModel = new ErrorPageViewModel(
            $e,
            IgnitionConfig::loadFromConfigFile(),
            $report,
            [],
            SolutionTransformer::class,
            '',
            '',
        );

        return (new Renderer())->renderAsString(['viewModel' => $viewModel], Ignition::viewPath('errorPage'));
    }
}
