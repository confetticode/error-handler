<?php

namespace ConfettiCode\ErrorHandler;

use Spatie\ErrorSolutions\Solutions\SolutionTransformer;
use Spatie\FlareClient\Context\RequestContextProvider;
use Spatie\FlareClient\Report;
use Spatie\Ignition\Config\IgnitionConfig;
use Spatie\Ignition\ErrorPage\ErrorPageViewModel;
use Spatie\Ignition\ErrorPage\Renderer;
use Spatie\Ignition\Ignition;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Throwable;

class IgnitionDisplayer implements DisplayerInterface
{
    /**
     * @inheritdoc
     */
    public function render(Throwable $e, Request $request): Response
    {
        $statusCode = Helper::getHttpStatusCode($e);
        $headers = Helper::getHttpHeaders($e);
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

        $content = (new Renderer())->renderAsString(['viewModel' => $viewModel], Ignition::viewPath('errorPage'));

        return new Response($content, $statusCode, $headers);
    }
}
