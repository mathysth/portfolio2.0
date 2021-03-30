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
        '/parcours' => [[['_route' => 'parcours_index', '_controller' => 'App\\Controller\\Admin\\ParcoursController::index'], null, ['GET' => 0], null, true, false, null]],
        '/parcours/new' => [[['_route' => 'parcours_new', '_controller' => 'App\\Controller\\Admin\\ParcoursController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/realisation' => [[['_route' => 'realisation_index', '_controller' => 'App\\Controller\\Admin\\RealisationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/realisation/new' => [[['_route' => 'realisation_new', '_controller' => 'App\\Controller\\Admin\\RealisationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'home_redirect', '_controller' => 'App\\Controller\\HomeController::redirectToHomePage'], null, null, null, false, false, null]],
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
                .'|/([^/]++)/c(?'
                    .'|ategorie(?'
                        .'|(*:194)'
                        .'|/(?'
                            .'|new(*:209)'
                            .'|([^/]++)(?'
                                .'|(*:228)'
                                .'|/edit(*:241)'
                                .'|(*:249)'
                            .')'
                        .')'
                    .')'
                    .'|ompetences(?'
                        .'|/(?'
                            .'|categories(?'
                                .'|(*:290)'
                                .'|/(?'
                                    .'|new(*:305)'
                                    .'|([^/]++)(?'
                                        .'|(*:324)'
                                        .'|/edit(*:337)'
                                        .'|(*:345)'
                                    .')'
                                .')'
                            .')'
                            .'|new(*:359)'
                            .'|([^/]++)(?'
                                .'|(*:378)'
                                .'|/edit(*:391)'
                                .'|(*:399)'
                            .')'
                        .')'
                        .'|(*:409)'
                    .')'
                .')'
                .'|/parcours/([^/]++)(?'
                    .'|(*:440)'
                    .'|/edit(*:453)'
                    .'|(*:461)'
                .')'
                .'|/([^/]++)/pr(?'
                    .'|esentation(?'
                        .'|(*:498)'
                        .'|/(?'
                            .'|new(*:513)'
                            .'|([^/]++)(?'
                                .'|(*:532)'
                                .'|/edit(*:545)'
                                .'|(*:553)'
                            .')'
                        .')'
                    .')'
                    .'|oduits(?'
                        .'|(*:573)'
                        .'|/(?'
                            .'|new(*:588)'
                            .'|([^/]++)(?'
                                .'|/edit(*:612)'
                                .'|(*:620)'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/realisation/([^/]++)(?'
                    .'|(*:656)'
                    .'|/edit(*:669)'
                    .'|(*:677)'
                .')'
                .'|/([^/]++)(*:695)'
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
        194 => [[['_route' => 'categorie_index', '_controller' => 'App\\Controller\\Admin\\CategorieController::index'], ['lang'], ['GET' => 0], null, true, false, null]],
        209 => [[['_route' => 'categorie_new', '_controller' => 'App\\Controller\\Admin\\CategorieController::new'], ['lang'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        228 => [[['_route' => 'categorie_show', '_controller' => 'App\\Controller\\Admin\\CategorieController::show'], ['lang', 'id'], ['GET' => 0], null, false, true, null]],
        241 => [[['_route' => 'categorie_edit', '_controller' => 'App\\Controller\\Admin\\CategorieController::edit'], ['lang', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        249 => [[['_route' => 'categorie_delete', '_controller' => 'App\\Controller\\Admin\\CategorieController::delete'], ['lang', 'id'], ['DELETE' => 0], null, false, true, null]],
        290 => [[['_route' => 'competences_categories_index', '_controller' => 'App\\Controller\\Admin\\CompetencesCategoriesController::index'], ['lang'], ['GET' => 0], null, true, false, null]],
        305 => [[['_route' => 'competences_categories_new', '_controller' => 'App\\Controller\\Admin\\CompetencesCategoriesController::new'], ['lang'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        324 => [[['_route' => 'competences_categories_show', '_controller' => 'App\\Controller\\Admin\\CompetencesCategoriesController::show'], ['lang', 'id'], ['GET' => 0], null, false, true, null]],
        337 => [[['_route' => 'competences_categories_edit', '_controller' => 'App\\Controller\\Admin\\CompetencesCategoriesController::edit'], ['lang', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        345 => [[['_route' => 'competences_categories_delete', '_controller' => 'App\\Controller\\Admin\\CompetencesCategoriesController::delete'], ['lang', 'id'], ['DELETE' => 0], null, false, true, null]],
        359 => [[['_route' => 'competences_new', '_controller' => 'App\\Controller\\Admin\\CompetencesController::new'], ['lang'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        378 => [[['_route' => 'competences_show', '_controller' => 'App\\Controller\\Admin\\CompetencesController::show'], ['lang', 'id'], ['GET' => 0], null, false, true, null]],
        391 => [[['_route' => 'competences_edit', '_controller' => 'App\\Controller\\Admin\\CompetencesController::edit'], ['lang', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        399 => [[['_route' => 'competences_delete', '_controller' => 'App\\Controller\\Admin\\CompetencesController::delete'], ['lang', 'id'], ['DELETE' => 0], null, false, true, null]],
        409 => [[['_route' => 'competences_index', '_controller' => 'App\\Controller\\Admin\\CompetencesController::index'], ['lang'], ['GET' => 0], null, true, false, null]],
        440 => [[['_route' => 'parcours_show', '_controller' => 'App\\Controller\\Admin\\ParcoursController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        453 => [[['_route' => 'parcours_edit', '_controller' => 'App\\Controller\\Admin\\ParcoursController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        461 => [[['_route' => 'parcours_delete', '_controller' => 'App\\Controller\\Admin\\ParcoursController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        498 => [[['_route' => 'presentation_index', '_controller' => 'App\\Controller\\Admin\\PresentationController::index'], ['lang'], ['GET' => 0], null, true, false, null]],
        513 => [[['_route' => 'presentation_new', '_controller' => 'App\\Controller\\Admin\\PresentationController::new'], ['lang'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        532 => [[['_route' => 'presentation_show', '_controller' => 'App\\Controller\\Admin\\PresentationController::show'], ['lang', 'id'], ['GET' => 0], null, false, true, null]],
        545 => [[['_route' => 'presentation_edit', '_controller' => 'App\\Controller\\Admin\\PresentationController::edit'], ['lang', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        553 => [[['_route' => 'presentation_delete', '_controller' => 'App\\Controller\\Admin\\PresentationController::delete'], ['lang', 'id'], ['DELETE' => 0], null, false, true, null]],
        573 => [[['_route' => 'produits_index', '_controller' => 'App\\Controller\\Admin\\ProduitsController::index'], ['lang'], ['GET' => 0], null, true, false, null]],
        588 => [[['_route' => 'produits_new', '_controller' => 'App\\Controller\\Admin\\ProduitsController::new'], ['lang'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        612 => [[['_route' => 'produits_edit', '_controller' => 'App\\Controller\\Admin\\ProduitsController::edit'], ['lang', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        620 => [[['_route' => 'produits_delete', '_controller' => 'App\\Controller\\Admin\\ProduitsController::delete'], ['lang', 'id'], ['DELETE' => 0], null, false, true, null]],
        656 => [[['_route' => 'realisation_show', '_controller' => 'App\\Controller\\Admin\\RealisationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        669 => [[['_route' => 'realisation_edit', '_controller' => 'App\\Controller\\Admin\\RealisationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        677 => [[['_route' => 'realisation_delete', '_controller' => 'App\\Controller\\Admin\\RealisationController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        695 => [
            [['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], ['lang'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
