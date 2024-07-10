<?php

namespace Confetti\Ignition\Displayers;

use Confetti\Ignition\DisplayerInterface;
use Spatie\ErrorSolutions\Solutions\SolutionTransformer;
use Spatie\FlareClient\Context\RequestContextProvider;
use Spatie\FlareClient\Report;
use Spatie\Ignition\Config\IgnitionConfig;
use Spatie\Ignition\ErrorPage\ErrorPageViewModel;
use Spatie\Ignition\ErrorPage\Renderer;
use Spatie\Ignition\Ignition;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class SpatieDisplayer implements DisplayerInterface
{
    /**
     * @inheritdoc
     */
    public function render(\Throwable $e, Request $request): Response
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

        $content = (new Renderer())->renderAsString(['viewModel' => $viewModel], Ignition::viewPath('errorPage'));

        return new Response($content, Displayer::parseStatusCode($e, $request));
    }
}
