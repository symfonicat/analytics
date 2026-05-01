<?php

namespace Symfonicat\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/m/symfonicat/analytics')]
final class AnalyticsController extends AbstractModuleController
{
    #[Route('/main', name: 'module_symfonicat_analytics_main', methods: ['POST'])]
    public function index(): Response
    {
        return $this->module(new JsonResponse([
            'working' => true,
        ]));
    }
}
