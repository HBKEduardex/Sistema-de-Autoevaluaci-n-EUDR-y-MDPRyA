<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin/compliance' => [[['_route' => 'app_compliance_index', '_controller' => 'App\\Modules\\Compliance\\ComplianceController::index'], null, null, null, true, false, null]],
        '/admin' => [[['_route' => 'app_dashboard', '_controller' => 'App\\Modules\\Dashboard\\DashboardController::index'], null, null, null, true, false, null]],
        '/' => [[['_route' => 'app_public_welcome', '_controller' => 'App\\Modules\\PublicUI\\SurveyController::welcome'], null, null, null, false, false, null]],
        '/survey/regulations' => [[['_route' => 'app_public_regulations', '_controller' => 'App\\Modules\\PublicUI\\SurveyController::regulations'], null, null, null, false, false, null]],
        '/survey/start' => [[['_route' => 'app_public_survey_start', '_controller' => 'App\\Modules\\PublicUI\\SurveyController::startSurvey'], null, null, null, false, false, null]],
        '/survey/contact' => [[['_route' => 'app_public_contact', '_controller' => 'App\\Modules\\PublicUI\\SurveyController::contact'], null, null, null, false, false, null]],
        '/survey/instructions' => [[['_route' => 'app_public_instructions', '_controller' => 'App\\Modules\\PublicUI\\SurveyController::instructions'], null, null, null, false, false, null]],
        '/survey/results' => [[['_route' => 'app_public_results', '_controller' => 'App\\Modules\\PublicUI\\SurveyController::results'], null, null, null, false, false, null]],
        '/survey/challenges' => [[['_route' => 'app_public_challenges', '_controller' => 'App\\Modules\\PublicUI\\SurveyController::challenges'], null, null, null, false, false, null]],
        '/survey/success' => [[['_route' => 'app_public_success', '_controller' => 'App\\Modules\\PublicUI\\SurveyController::success'], null, null, null, false, false, null]],
        '/survey/export-pdf' => [[['_route' => 'app_public_export_pdf', '_controller' => 'App\\Modules\\Reports\\PdfController::exportPdf'], null, null, null, false, false, null]],
        '/admin/risks' => [[['_route' => 'app_risks_index', '_controller' => 'App\\Modules\\Risks\\RiskController::index'], null, null, null, true, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/admin/compliance/evaluate/([^/]++)(*:77)'
                .'|/survey/wizard/([^/]++)(*:107)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        77 => [[['_route' => 'app_compliance_evaluate', '_controller' => 'App\\Modules\\Compliance\\ComplianceController::evaluate'], ['id'], null, null, false, true, null]],
        107 => [
            [['_route' => 'app_public_wizard', '_controller' => 'App\\Modules\\PublicUI\\SurveyController::wizard'], ['step'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
