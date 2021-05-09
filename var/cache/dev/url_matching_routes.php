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
        '/admin/categorie' => [[['_route' => 'admin_categorie_index', '_controller' => 'App\\Controller\\Admin\\CategorieController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/categorie/new' => [[['_route' => 'admin_categorie_new', '_controller' => 'App\\Controller\\Admin\\CategorieController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/competences/categories' => [[['_route' => 'admin_competences_categories_index', '_controller' => 'App\\Controller\\Admin\\CompetencesCategoriesController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/competences/categories/new' => [[['_route' => 'admin_competences_categories_new', '_controller' => 'App\\Controller\\Admin\\CompetencesCategoriesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/competences' => [[['_route' => 'admin_competences_index', '_controller' => 'App\\Controller\\Admin\\CompetencesController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/competences/new' => [[['_route' => 'admin_competences_new', '_controller' => 'App\\Controller\\Admin\\CompetencesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/experience' => [[['_route' => 'admin_experience_index', '_controller' => 'App\\Controller\\Admin\\ExperienceController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/experience/new' => [[['_route' => 'admin_experience_new', '_controller' => 'App\\Controller\\Admin\\ExperienceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/parcours/new' => [[['_route' => 'admin_parcours_new', '_controller' => 'App\\Controller\\Admin\\ParcoursController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/presentation' => [[['_route' => 'admin_presentation_index', '_controller' => 'App\\Controller\\Admin\\PresentationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/presentation/new' => [[['_route' => 'admin_presentation_new', '_controller' => 'App\\Controller\\Admin\\PresentationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/produits' => [[['_route' => 'admin_produits_index', '_controller' => 'App\\Controller\\Admin\\ProduitsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/produits/new' => [[['_route' => 'admin_produits_new', '_controller' => 'App\\Controller\\Admin\\ProduitsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/realisations' => [[['_route' => 'admin_realisation_index', '_controller' => 'App\\Controller\\Admin\\RealisationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/realisations/new' => [[['_route' => 'admin_realisation_new', '_controller' => 'App\\Controller\\Admin\\RealisationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/experience' => [[['_route' => 'experience', '_controller' => 'App\\Controller\\ExperienceController::index'], null, ['GET' => 0], null, true, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/parcours' => [[['_route' => 'admin_parcours_index', '_controller' => 'App\\Controller\\ParcoursController::index'], null, ['GET' => 0], null, true, false, null]],
        '/presentation' => [[['_route' => 'presentation', '_controller' => 'App\\Controller\\PresentationController::show'], null, ['GET' => 0], null, true, false, null]],
        '/realisations' => [[['_route' => 'realisation', '_controller' => 'App\\Controller\\RealisationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/api/http/checkDns' => [[['_route' => 'api_dnsChecker', '_controller' => 'App\\Http\\Api\\Controller\\DnsController::checkDns'], null, ['POST' => 0], null, false, false, null]],
        '/api/http/utils/lang/get' => [[['_route' => 'api_Lang_get', '_controller' => 'App\\Http\\Api\\Controller\\LangController::getCurrentLang'], null, ['POST' => 0], null, false, false, null]],
        '/api/http/utils/lang/set' => [[['_route' => 'api_Lang_set', '_controller' => 'App\\Http\\Api\\Controller\\LangController::setCurrentLang'], null, ['POST' => 0], null, false, false, null]],
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
                .'|/admin/(?'
                    .'|c(?'
                        .'|ategorie/([^/]++)(?'
                            .'|/edit(*:208)'
                            .'|(*:216)'
                        .')'
                        .'|ompetences/(?'
                            .'|categories/([^/]++)(?'
                                .'|/edit(*:266)'
                                .'|(*:274)'
                            .')'
                            .'|([^/]++)(?'
                                .'|/edit(*:299)'
                                .'|(*:307)'
                            .')'
                        .')'
                    .')'
                    .'|experience/([^/]++)(?'
                        .'|/edit(*:345)'
                        .'|(*:353)'
                    .')'
                    .'|p(?'
                        .'|arcours/([^/]++)(?'
                            .'|/edit(*:390)'
                            .'|(*:398)'
                        .')'
                        .'|r(?'
                            .'|esentation/([^/]++)(?'
                                .'|/edit(*:438)'
                                .'|(*:446)'
                            .')'
                            .'|oduits/([^/]++)(?'
                                .'|/edit(*:478)'
                                .'|(*:486)'
                            .')'
                        .')'
                    .')'
                    .'|realisations/([^/]++)(?'
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
        208 => [[['_route' => 'admin_categorie_edit', '_controller' => 'App\\Controller\\Admin\\CategorieController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        216 => [[['_route' => 'admin_categorie_delete', '_controller' => 'App\\Controller\\Admin\\CategorieController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        266 => [[['_route' => 'admin_competences_categories_edit', '_controller' => 'App\\Controller\\Admin\\CompetencesCategoriesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        274 => [[['_route' => 'admin_competences_categories_delete', '_controller' => 'App\\Controller\\Admin\\CompetencesCategoriesController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        299 => [[['_route' => 'admin_competences_edit', '_controller' => 'App\\Controller\\Admin\\CompetencesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        307 => [[['_route' => 'admin_competences_delete', '_controller' => 'App\\Controller\\Admin\\CompetencesController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        345 => [[['_route' => 'admin_experience_edit', '_controller' => 'App\\Controller\\Admin\\ExperienceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        353 => [[['_route' => 'admin_experience_delete', '_controller' => 'App\\Controller\\Admin\\ExperienceController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        390 => [[['_route' => 'admin_parcours_edit', '_controller' => 'App\\Controller\\Admin\\ParcoursController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        398 => [[['_route' => 'admin_parcours_delete', '_controller' => 'App\\Controller\\Admin\\ParcoursController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        438 => [[['_route' => 'admin_presentation_edit', '_controller' => 'App\\Controller\\Admin\\PresentationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        446 => [[['_route' => 'admin_presentation_delete', '_controller' => 'App\\Controller\\Admin\\PresentationController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        478 => [[['_route' => 'admin_produits_edit', '_controller' => 'App\\Controller\\Admin\\ProduitsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        486 => [[['_route' => 'admin_produits_delete', '_controller' => 'App\\Controller\\Admin\\ProduitsController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        526 => [[['_route' => 'admin_realisation_edit', '_controller' => 'App\\Controller\\Admin\\RealisationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        534 => [
            [['_route' => 'admin_realisation_delete', '_controller' => 'App\\Controller\\Admin\\RealisationController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
