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
        '/experience' => [[['_route' => 'realisation_index', '_controller' => 'App\\Controller\\ExperienceController::index'], null, ['GET' => 0], null, true, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/presentation' => [[['_route' => 'presentation', '_controller' => 'App\\Controller\\PresentationController::show'], null, ['GET' => 0], null, true, false, null]],
        '/api/http/checkDns' => [[['_route' => 'api_dnsChecker', '_controller' => 'App\\Http\\Api\\Controller\\DnsController::checkDns'], null, ['POST' => 0], null, false, false, null]],
        '/api/http/utils/lang/get' => [[['_route' => 'api_Lang_get', '_controller' => 'App\\Http\\Api\\Controller\\LangController::getCurrentLang'], null, ['POST' => 0], null, false, false, null]],
        '/api/http/utils/lang/set' => [[['_route' => 'api_Lang_set', '_controller' => 'App\\Http\\Api\\Controller\\LangController::setCurrentLang'], null, ['POST' => 0], null, false, false, null]],
        '/api/http/utils/ajax' => [[['_route' => 'api_ajax_request', '_controller' => 'App\\Http\\Api\\Controller\\Utils::ajaxAction'], null, null, null, false, false, null]],
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
                .'|/([^/]++)/admin/(?'
                    .'|c(?'
                        .'|ategorie(?'
                            .'|(*:203)'
                            .'|/(?'
                                .'|new(*:218)'
                                .'|([^/]++)(?'
                                    .'|(*:237)'
                                    .'|/edit(*:250)'
                                    .'|(*:258)'
                                .')'
                            .')'
                        .')'
                        .'|ompetences(?'
                            .'|/(?'
                                .'|categories(?'
                                    .'|(*:299)'
                                    .'|/(?'
                                        .'|new(*:314)'
                                        .'|([^/]++)(?'
                                            .'|(*:333)'
                                            .'|/edit(*:346)'
                                            .'|(*:354)'
                                        .')'
                                    .')'
                                .')'
                                .'|new(*:368)'
                                .'|([^/]++)(?'
                                    .'|(*:387)'
                                    .'|/edit(*:400)'
                                    .'|(*:408)'
                                .')'
                            .')'
                            .'|(*:418)'
                        .')'
                    .')'
                    .'|experience(?'
                        .'|(*:441)'
                        .'|/(?'
                            .'|new(*:456)'
                            .'|([^/]++)(?'
                                .'|(*:475)'
                                .'|/edit(*:488)'
                                .'|(*:496)'
                            .')'
                            .'|new(*:508)'
                            .'|([^/]++)(?'
                                .'|/edit(*:532)'
                                .'|(*:540)'
                            .')'
                        .')'
                    .')'
                    .'|p(?'
                        .'|arcours(?'
                            .'|(*:565)'
                            .'|/(?'
                                .'|new(*:580)'
                                .'|([^/]++)(?'
                                    .'|/edit(*:604)'
                                    .'|(*:612)'
                                .')'
                            .')'
                        .')'
                        .'|r(?'
                            .'|esentation(?'
                                .'|(*:640)'
                                .'|/(?'
                                    .'|new(*:655)'
                                    .'|([^/]++)(?'
                                        .'|(*:674)'
                                        .'|/edit(*:687)'
                                        .'|(*:695)'
                                    .')'
                                .')'
                            .')'
                            .'|oduits(?'
                                .'|(*:715)'
                                .'|/(?'
                                    .'|new(*:730)'
                                    .'|([^/]++)(?'
                                        .'|/edit(*:754)'
                                        .'|(*:762)'
                                    .')'
                                .')'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/experience/([^/]++)(*:796)'
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
        203 => [[['_route' => 'categorie_index', '_controller' => 'App\\Controller\\Admin\\CategorieController::index'], ['lang'], ['GET' => 0], null, true, false, null]],
        218 => [[['_route' => 'categorie_new', '_controller' => 'App\\Controller\\Admin\\CategorieController::new'], ['lang'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        237 => [[['_route' => 'categorie_show', '_controller' => 'App\\Controller\\Admin\\CategorieController::show'], ['lang', 'id'], ['GET' => 0], null, false, true, null]],
        250 => [[['_route' => 'categorie_edit', '_controller' => 'App\\Controller\\Admin\\CategorieController::edit'], ['lang', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        258 => [[['_route' => 'categorie_delete', '_controller' => 'App\\Controller\\Admin\\CategorieController::delete'], ['lang', 'id'], ['DELETE' => 0], null, false, true, null]],
        299 => [[['_route' => 'competences_categories_index', '_controller' => 'App\\Controller\\Admin\\CompetencesCategoriesController::index'], ['lang'], ['GET' => 0], null, true, false, null]],
        314 => [[['_route' => 'competences_categories_new', '_controller' => 'App\\Controller\\Admin\\CompetencesCategoriesController::new'], ['lang'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        333 => [[['_route' => 'competences_categories_show', '_controller' => 'App\\Controller\\Admin\\CompetencesCategoriesController::show'], ['lang', 'id'], ['GET' => 0], null, false, true, null]],
        346 => [[['_route' => 'competences_categories_edit', '_controller' => 'App\\Controller\\Admin\\CompetencesCategoriesController::edit'], ['lang', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        354 => [[['_route' => 'competences_categories_delete', '_controller' => 'App\\Controller\\Admin\\CompetencesCategoriesController::delete'], ['lang', 'id'], ['DELETE' => 0], null, false, true, null]],
        368 => [[['_route' => 'competences_new', '_controller' => 'App\\Controller\\Admin\\CompetencesController::new'], ['lang'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        387 => [[['_route' => 'competences_show', '_controller' => 'App\\Controller\\Admin\\CompetencesController::show'], ['lang', 'id'], ['GET' => 0], null, false, true, null]],
        400 => [[['_route' => 'competences_edit', '_controller' => 'App\\Controller\\Admin\\CompetencesController::edit'], ['lang', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        408 => [[['_route' => 'competences_delete', '_controller' => 'App\\Controller\\Admin\\CompetencesController::delete'], ['lang', 'id'], ['DELETE' => 0], null, false, true, null]],
        418 => [[['_route' => 'competences_index', '_controller' => 'App\\Controller\\Admin\\CompetencesController::index'], ['lang'], ['GET' => 0], null, true, false, null]],
        441 => [[['_route' => 'experience_index', '_controller' => 'App\\Controller\\Admin\\ExperienceController::index'], ['lang'], ['GET' => 0], null, true, false, null]],
        456 => [[['_route' => 'experience_new', '_controller' => 'App\\Controller\\Admin\\ExperienceController::new'], ['lang'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        475 => [[['_route' => 'experience_show', '_controller' => 'App\\Controller\\Admin\\ExperienceController::show'], ['lang', 'id'], ['GET' => 0], null, false, true, null]],
        488 => [[['_route' => 'experience_edit', '_controller' => 'App\\Controller\\Admin\\ExperienceController::edit'], ['lang', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        496 => [[['_route' => 'experience_delete', '_controller' => 'App\\Controller\\Admin\\ExperienceController::delete'], ['lang', 'id'], ['DELETE' => 0], null, false, true, null]],
        508 => [[['_route' => 'realisation_new', '_controller' => 'App\\Controller\\Admin\\RealisationController::new'], ['lang'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        532 => [[['_route' => 'realisation_edit', '_controller' => 'App\\Controller\\Admin\\RealisationController::edit'], ['lang', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        540 => [[['_route' => 'realisation_delete', '_controller' => 'App\\Controller\\Admin\\RealisationController::delete'], ['lang', 'id'], ['DELETE' => 0], null, false, true, null]],
        565 => [[['_route' => 'parcours_index', '_controller' => 'App\\Controller\\Admin\\ParcoursController::index'], ['lang'], ['GET' => 0], null, true, false, null]],
        580 => [[['_route' => 'parcours_new', '_controller' => 'App\\Controller\\Admin\\ParcoursController::new'], ['lang'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        604 => [[['_route' => 'parcours_edit', '_controller' => 'App\\Controller\\Admin\\ParcoursController::edit'], ['lang', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        612 => [[['_route' => 'parcours_delete', '_controller' => 'App\\Controller\\Admin\\ParcoursController::delete'], ['lang', 'id'], ['DELETE' => 0], null, false, true, null]],
        640 => [[['_route' => 'presentation_index', '_controller' => 'App\\Controller\\Admin\\PresentationController::index'], ['lang'], ['GET' => 0], null, true, false, null]],
        655 => [[['_route' => 'presentation_new', '_controller' => 'App\\Controller\\Admin\\PresentationController::new'], ['lang'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        674 => [[['_route' => 'presentation_show', '_controller' => 'App\\Controller\\Admin\\PresentationController::show'], ['lang', 'id'], ['GET' => 0], null, false, true, null]],
        687 => [[['_route' => 'presentation_edit', '_controller' => 'App\\Controller\\Admin\\PresentationController::edit'], ['lang', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        695 => [[['_route' => 'presentation_delete', '_controller' => 'App\\Controller\\Admin\\PresentationController::delete'], ['lang', 'id'], ['DELETE' => 0], null, false, true, null]],
        715 => [[['_route' => 'produits_index', '_controller' => 'App\\Controller\\Admin\\ProduitsController::index'], ['lang'], ['GET' => 0], null, true, false, null]],
        730 => [[['_route' => 'produits_new', '_controller' => 'App\\Controller\\Admin\\ProduitsController::new'], ['lang'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        754 => [[['_route' => 'produits_edit', '_controller' => 'App\\Controller\\Admin\\ProduitsController::edit'], ['lang', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        762 => [[['_route' => 'produits_delete', '_controller' => 'App\\Controller\\Admin\\ProduitsController::delete'], ['lang', 'id'], ['DELETE' => 0], null, false, true, null]],
        796 => [
            [['_route' => 'realisation_show', '_controller' => 'App\\Controller\\ExperienceController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
