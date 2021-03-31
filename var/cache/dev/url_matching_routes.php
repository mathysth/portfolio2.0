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
                .'|/([^/]++)(?'
                    .'|/(?'
                        .'|admin/(?'
                            .'|c(?'
                                .'|ategorie(?'
                                    .'|(*:209)'
                                    .'|/(?'
                                        .'|new(*:224)'
                                        .'|([^/]++)(?'
                                            .'|(*:243)'
                                            .'|/edit(*:256)'
                                            .'|(*:264)'
                                        .')'
                                    .')'
                                .')'
                                .'|ompetences(?'
                                    .'|/(?'
                                        .'|categories(?'
                                            .'|(*:305)'
                                            .'|/(?'
                                                .'|new(*:320)'
                                                .'|([^/]++)(?'
                                                    .'|(*:339)'
                                                    .'|/edit(*:352)'
                                                    .'|(*:360)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|new(*:374)'
                                        .'|([^/]++)(?'
                                            .'|(*:393)'
                                            .'|/edit(*:406)'
                                            .'|(*:414)'
                                        .')'
                                    .')'
                                    .'|(*:424)'
                                .')'
                            .')'
                            .'|p(?'
                                .'|arcours(?'
                                    .'|(*:448)'
                                    .'|/(?'
                                        .'|new(*:463)'
                                        .'|([^/]++)(?'
                                            .'|/edit(*:487)'
                                            .'|(*:495)'
                                        .')'
                                    .')'
                                .')'
                                .'|r(?'
                                    .'|esentation(?'
                                        .'|(*:523)'
                                        .'|/(?'
                                            .'|new(*:538)'
                                            .'|([^/]++)(?'
                                                .'|(*:557)'
                                                .'|/edit(*:570)'
                                                .'|(*:578)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|oduits(?'
                                        .'|(*:598)'
                                        .'|/(?'
                                            .'|new(*:613)'
                                            .'|([^/]++)(?'
                                                .'|/edit(*:637)'
                                                .'|(*:645)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|realisation(?'
                                .'|(*:672)'
                                .'|/(?'
                                    .'|new(*:687)'
                                    .'|([^/]++)(?'
                                        .'|(*:706)'
                                        .'|/edit(*:719)'
                                        .'|(*:727)'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|presentation(*:751)'
                    .')'
                    .'|(*:760)'
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
        209 => [[['_route' => 'categorie_index', '_controller' => 'App\\Controller\\Admin\\CategorieController::index'], ['lang'], ['GET' => 0], null, true, false, null]],
        224 => [[['_route' => 'categorie_new', '_controller' => 'App\\Controller\\Admin\\CategorieController::new'], ['lang'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        243 => [[['_route' => 'categorie_show', '_controller' => 'App\\Controller\\Admin\\CategorieController::show'], ['lang', 'id'], ['GET' => 0], null, false, true, null]],
        256 => [[['_route' => 'categorie_edit', '_controller' => 'App\\Controller\\Admin\\CategorieController::edit'], ['lang', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        264 => [[['_route' => 'categorie_delete', '_controller' => 'App\\Controller\\Admin\\CategorieController::delete'], ['lang', 'id'], ['DELETE' => 0], null, false, true, null]],
        305 => [[['_route' => 'competences_categories_index', '_controller' => 'App\\Controller\\Admin\\CompetencesCategoriesController::index'], ['lang'], ['GET' => 0], null, true, false, null]],
        320 => [[['_route' => 'competences_categories_new', '_controller' => 'App\\Controller\\Admin\\CompetencesCategoriesController::new'], ['lang'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        339 => [[['_route' => 'competences_categories_show', '_controller' => 'App\\Controller\\Admin\\CompetencesCategoriesController::show'], ['lang', 'id'], ['GET' => 0], null, false, true, null]],
        352 => [[['_route' => 'competences_categories_edit', '_controller' => 'App\\Controller\\Admin\\CompetencesCategoriesController::edit'], ['lang', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        360 => [[['_route' => 'competences_categories_delete', '_controller' => 'App\\Controller\\Admin\\CompetencesCategoriesController::delete'], ['lang', 'id'], ['DELETE' => 0], null, false, true, null]],
        374 => [[['_route' => 'competences_new', '_controller' => 'App\\Controller\\Admin\\CompetencesController::new'], ['lang'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        393 => [[['_route' => 'competences_show', '_controller' => 'App\\Controller\\Admin\\CompetencesController::show'], ['lang', 'id'], ['GET' => 0], null, false, true, null]],
        406 => [[['_route' => 'competences_edit', '_controller' => 'App\\Controller\\Admin\\CompetencesController::edit'], ['lang', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        414 => [[['_route' => 'competences_delete', '_controller' => 'App\\Controller\\Admin\\CompetencesController::delete'], ['lang', 'id'], ['DELETE' => 0], null, false, true, null]],
        424 => [[['_route' => 'competences_index', '_controller' => 'App\\Controller\\Admin\\CompetencesController::index'], ['lang'], ['GET' => 0], null, true, false, null]],
        448 => [[['_route' => 'parcours_index', '_controller' => 'App\\Controller\\Admin\\ParcoursController::index'], ['lang'], ['GET' => 0], null, true, false, null]],
        463 => [[['_route' => 'parcours_new', '_controller' => 'App\\Controller\\Admin\\ParcoursController::new'], ['lang'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        487 => [[['_route' => 'parcours_edit', '_controller' => 'App\\Controller\\Admin\\ParcoursController::edit'], ['lang', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        495 => [[['_route' => 'parcours_delete', '_controller' => 'App\\Controller\\Admin\\ParcoursController::delete'], ['lang', 'id'], ['DELETE' => 0], null, false, true, null]],
        523 => [[['_route' => 'presentation_index', '_controller' => 'App\\Controller\\Admin\\PresentationController::index'], ['lang'], ['GET' => 0], null, true, false, null]],
        538 => [[['_route' => 'presentation_new', '_controller' => 'App\\Controller\\Admin\\PresentationController::new'], ['lang'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        557 => [[['_route' => 'presentation_show', '_controller' => 'App\\Controller\\Admin\\PresentationController::show'], ['lang', 'id'], ['GET' => 0], null, false, true, null]],
        570 => [[['_route' => 'presentation_edit', '_controller' => 'App\\Controller\\Admin\\PresentationController::edit'], ['lang', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        578 => [[['_route' => 'presentation_delete', '_controller' => 'App\\Controller\\Admin\\PresentationController::delete'], ['lang', 'id'], ['DELETE' => 0], null, false, true, null]],
        598 => [[['_route' => 'produits_index', '_controller' => 'App\\Controller\\Admin\\ProduitsController::index'], ['lang'], ['GET' => 0], null, true, false, null]],
        613 => [[['_route' => 'produits_new', '_controller' => 'App\\Controller\\Admin\\ProduitsController::new'], ['lang'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        637 => [[['_route' => 'produits_edit', '_controller' => 'App\\Controller\\Admin\\ProduitsController::edit'], ['lang', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        645 => [[['_route' => 'produits_delete', '_controller' => 'App\\Controller\\Admin\\ProduitsController::delete'], ['lang', 'id'], ['DELETE' => 0], null, false, true, null]],
        672 => [[['_route' => 'realisation_index', '_controller' => 'App\\Controller\\Admin\\RealisationController::index'], ['lang'], ['GET' => 0], null, true, false, null]],
        687 => [[['_route' => 'realisation_new', '_controller' => 'App\\Controller\\Admin\\RealisationController::new'], ['lang'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        706 => [[['_route' => 'realisation_show', '_controller' => 'App\\Controller\\Admin\\RealisationController::show'], ['lang', 'id'], ['GET' => 0], null, false, true, null]],
        719 => [[['_route' => 'realisation_edit', '_controller' => 'App\\Controller\\Admin\\RealisationController::edit'], ['lang', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        727 => [[['_route' => 'realisation_delete', '_controller' => 'App\\Controller\\Admin\\RealisationController::delete'], ['lang', 'id'], ['DELETE' => 0], null, false, true, null]],
        751 => [[['_route' => 'presentation', '_controller' => 'App\\Controller\\PresentationController::show'], ['lang'], ['GET' => 0], null, true, false, null]],
        760 => [
            [['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], ['lang'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
