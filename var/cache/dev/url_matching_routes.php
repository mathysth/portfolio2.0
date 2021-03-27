<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/competences/categories' => [[['_route' => 'competences_categories_index', '_controller' => 'App\\Controller\\Admin\\CompetencesCategoriesController::index'], null, ['GET' => 0], null, true, false, null]],
        '/competences/categories/new' => [[['_route' => 'competences_categories_new', '_controller' => 'App\\Controller\\Admin\\CompetencesCategoriesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/competences' => [[['_route' => 'competences_index', '_controller' => 'App\\Controller\\Admin\\CompetencesController::index'], null, ['GET' => 0], null, true, false, null]],
        '/competences/new' => [[['_route' => 'competences_new', '_controller' => 'App\\Controller\\Admin\\CompetencesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/categorie' => [[['_route' => 'categorie_index', '_controller' => 'App\\Controller\\CategorieController::index'], null, ['GET' => 0], null, true, false, null]],
        '/categorie/new' => [[['_route' => 'categorie_new', '_controller' => 'App\\Controller\\CategorieController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'home_redirect', '_controller' => 'App\\Controller\\HomeController::redirectToHomePage'], null, null, null, false, false, null]],
        '/parcours/new' => [[['_route' => 'parcours_new', '_controller' => 'App\\Controller\\ParcoursController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/produits/new' => [[['_route' => 'produits_new', '_controller' => 'App\\Controller\\ProduitsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/realisation/new' => [[['_route' => 'realisation_new', '_controller' => 'App\\Controller\\RealisationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/api/http/checkDns' => [[['_route' => 'api_dnsChecker', '_controller' => 'App\\Http\\Api\\Controller\\DnsController::checkDns'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/c(?'
                    .'|ompetences/(?'
                        .'|categories/([^/]++)(?'
                            .'|(*:210)'
                            .'|/edit(*:223)'
                            .'|(*:231)'
                        .')'
                        .'|([^/]++)(?'
                            .'|(*:251)'
                            .'|/edit(*:264)'
                            .'|(*:272)'
                        .')'
                    .')'
                    .'|ategorie/([^/]++)(?'
                        .'|(*:302)'
                        .'|/edit(*:315)'
                        .'|(*:323)'
                    .')'
                .')'
                .'|/([^/]++)(*:342)'
                .'|/p(?'
                    .'|arcours(?'
                        .'|(*:365)'
                        .'|/([^/]++)(?'
                            .'|(*:385)'
                            .'|/edit(*:398)'
                            .'|(*:406)'
                        .')'
                    .')'
                    .'|roduits(?'
                        .'|(*:426)'
                        .'|/([^/]++)(?'
                            .'|(*:446)'
                            .'|/edit(*:459)'
                            .'|(*:467)'
                        .')'
                    .')'
                .')'
                .'|/realisation(?'
                    .'|(*:493)'
                    .'|/([^/]++)(?'
                        .'|(*:513)'
                        .'|/edit(*:526)'
                        .'|(*:534)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        210 => [[['_route' => 'competences_categories_show', '_controller' => 'App\\Controller\\Admin\\CompetencesCategoriesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        223 => [[['_route' => 'competences_categories_edit', '_controller' => 'App\\Controller\\Admin\\CompetencesCategoriesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        231 => [[['_route' => 'competences_categories_delete', '_controller' => 'App\\Controller\\Admin\\CompetencesCategoriesController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        251 => [[['_route' => 'competences_show', '_controller' => 'App\\Controller\\Admin\\CompetencesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        264 => [[['_route' => 'competences_edit', '_controller' => 'App\\Controller\\Admin\\CompetencesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        272 => [[['_route' => 'competences_delete', '_controller' => 'App\\Controller\\Admin\\CompetencesController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        302 => [[['_route' => 'categorie_show', '_controller' => 'App\\Controller\\CategorieController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        315 => [[['_route' => 'categorie_edit', '_controller' => 'App\\Controller\\CategorieController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        323 => [[['_route' => 'categorie_delete', '_controller' => 'App\\Controller\\CategorieController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        342 => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], ['lang'], null, null, false, true, null]],
        365 => [[['_route' => 'parcours_index', '_controller' => 'App\\Controller\\ParcoursController::index'], [], ['GET' => 0], null, true, false, null]],
        385 => [[['_route' => 'parcours_show', '_controller' => 'App\\Controller\\ParcoursController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        398 => [[['_route' => 'parcours_edit', '_controller' => 'App\\Controller\\ParcoursController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        406 => [[['_route' => 'parcours_delete', '_controller' => 'App\\Controller\\ParcoursController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        426 => [[['_route' => 'produits_index', '_controller' => 'App\\Controller\\ProduitsController::index'], [], ['GET' => 0], null, true, false, null]],
        446 => [[['_route' => 'produits_show', '_controller' => 'App\\Controller\\ProduitsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        459 => [[['_route' => 'produits_edit', '_controller' => 'App\\Controller\\ProduitsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        467 => [[['_route' => 'produits_delete', '_controller' => 'App\\Controller\\ProduitsController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        493 => [[['_route' => 'realisation_index', '_controller' => 'App\\Controller\\RealisationController::index'], [], ['GET' => 0], null, true, false, null]],
        513 => [[['_route' => 'realisation_show', '_controller' => 'App\\Controller\\RealisationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        526 => [[['_route' => 'realisation_edit', '_controller' => 'App\\Controller\\RealisationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        534 => [
            [['_route' => 'realisation_delete', '_controller' => 'App\\Controller\\RealisationController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
