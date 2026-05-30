<?php

namespace Symfonicat\Module;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;
use Symfonicat\Controller\AbstractModuleController;
use Symfonicat\Attribute\ModuleRoute;
use Symfonicat\Attribute\Module;

#[ModuleRoute]
final class AnalyticsModule extends AbstractModuleController
{

    #[Module]
    public function main(Request $request): Response
    {

        // testing included extension
        $value = \symfonicat_analytics_string_remove(
            'wonktest',
            'test'
        ); 

        $moduleJson = $request->attributes->get('module_json');
        $output = print_r($moduleJson, true);
        $this->logger->info("module_json OUTPUT = $output");

        return $this->module(new JsonResponse([
            'working' => true,
        ]));
    }
}
