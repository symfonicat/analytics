<?php

namespace Symfonicat\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/m/symfonicat/analytics')]
final class AnalyticsController extends AbstractModuleController
{
    public function __construct(
        \Symfonicat\Service\DomainService $domainService,
        \Symfonicat\Service\ModuleService $moduleService,
        \Symfonicat\Service\SubdomainService $subdomainService,
        \Symfonicat\Service\PathService $pathService,
        \Psr\Log\LoggerInterface $logger,
        ?\Symfony\Component\HttpFoundation\RequestStack $requestStack = null,
    ) {
        parent::__construct($domainService, $moduleService, $subdomainService, $pathService, $logger, $requestStack);
    }

    #[Route('/main', name: 'module_symfonicat_analytics_main', methods: ['POST'])]
    public function index(Request $request): Response
    {

        $moduleJson = $request->attributes->get('module_json');

        $output = print_r($moduleJson, true);
        $this->logger->info("module_json OUTPUT = $output");

        return $this->module(new JsonResponse([
            'working' => true,
        ]));
    }
}
