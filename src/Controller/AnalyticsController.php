<?php

namespace Symfonicat\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/m/analytics/main')]
final class AnalyticsController extends AbstractModuleController
{
    #[Route('', name: 'symfonicat_module_analytics', methods: ['POST'])]
    public function index(): Response
    {
        return $this->module(new JsonResponse([
            'working' => true,
        ]));
    }
}
