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
        '/admin/parcours' => [[['_route' => 'admin_parcours_index', '_controller' => 'App\\Controller\\Admin\\ParcoursController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/parcours/new' => [[['_route' => 'admin_parcours_new', '_controller' => 'App\\Controller\\Admin\\ParcoursController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/presentation' => [[['_route' => 'presentation_index', '_controller' => 'App\\Controller\\Admin\\PresentationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/presentation/new' => [[['_route' => 'presentation_new', '_controller' => 'App\\Controller\\Admin\\PresentationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/produits' => [[['_route' => 'produits_index', '_controller' => 'App\\Controller\\Admin\\ProduitsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/produits/new' => [[['_route' => 'produits_new', '_controller' => 'App\\Controller\\Admin\\ProduitsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/admin/(?'
                    .'|c(?'
                        .'|ategorie/([^/]++)(?'
                            .'|(*:203)'
                            .'|/edit(*:216)'
                            .'|(*:224)'
                        .')'
                        .'|ompetences/(?'
                            .'|categories/([^/]++)(?'
                                .'|(*:269)'
                                .'|/edit(*:282)'
                                .'|(*:290)'
                            .')'
                            .'|([^/]++)(?'
                                .'|(*:310)'
                                .'|/edit(*:323)'
                                .'|(*:331)'
                            .')'
                        .')'
                    .')'
                    .'|experience/(?'
                        .'|([^/]++)(?'
                            .'|(*:367)'
                            .'|/edit(*:380)'
                            .'|(*:388)'
                        .')'
                        .'|new(*:400)'
                        .'|([^/]++)(?'
                            .'|/edit(*:424)'
                            .'|(*:432)'
                        .')'
                    .')'
                    .'|p(?'
                        .'|arcours/([^/]++)(?'
                            .'|/edit(*:470)'
                            .'|(*:478)'
                        .')'
                        .'|r(?'
                            .'|esentation/([^/]++)(?'
                                .'|(*:513)'
                                .'|/edit(*:526)'
                                .'|(*:534)'
                            .')'
                            .'|oduits/([^/]++)(?'
                                .'|/edit(*:566)'
                                .'|(*:574)'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/experience/([^/]++)(*:606)'
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
        203 => [[['_route' => 'admin_categorie_show', '_controller' => 'App\\Controller\\Admin\\CategorieController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        216 => [[['_route' => 'admin_categorie_edit', '_controller' => 'App\\Controller\\Admin\\CategorieController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        224 => [[['_route' => 'admin_categorie_delete', '_controller' => 'App\\Controller\\Admin\\CategorieController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        269 => [[['_route' => 'admin_competences_categories_show', '_controller' => 'App\\Controller\\Admin\\CompetencesCategoriesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        282 => [[['_route' => 'admin_competences_categories_edit', '_controller' => 'App\\Controller\\Admin\\CompetencesCategoriesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        290 => [[['_route' => 'admin_competences_categories_delete', '_controller' => 'App\\Controller\\Admin\\CompetencesCategoriesController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        310 => [[['_route' => 'admin_competences_show', '_controller' => 'App\\Controller\\Admin\\CompetencesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        323 => [[['_route' => 'admin_competences_edit', '_controller' => 'App\\Controller\\Admin\\CompetencesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        331 => [[['_route' => 'admin_competences_delete', '_controller' => 'App\\Controller\\Admin\\CompetencesController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        367 => [[['_route' => 'admin_experience_show', '_controller' => 'App\\Controller\\Admin\\ExperienceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        380 => [[['_route' => 'admin_experience_edit', '_controller' => 'App\\Controller\\Admin\\ExperienceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        388 => [[['_route' => 'admin_experience_delete', '_controller' => 'App\\Controller\\Admin\\ExperienceController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        400 => [[['_route' => 'realisation_new', '_controller' => 'App\\Controller\\Admin\\RealisationController::new'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        424 => [[['_route' => 'realisation_edit', '_controller' => 'App\\Controller\\Admin\\RealisationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        432 => [[['_route' => 'realisation_delete', '_controller' => 'App\\Controller\\Admin\\RealisationController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        470 => [[['_route' => 'admin_parcours_edit', '_controller' => 'App\\Controller\\Admin\\ParcoursController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        478 => [[['_route' => 'admin_parcours_delete', '_controller' => 'App\\Controller\\Admin\\ParcoursController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        513 => [[['_route' => 'presentation_show', '_controller' => 'App\\Controller\\Admin\\PresentationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        526 => [[['_route' => 'presentation_edit', '_controller' => 'App\\Controller\\Admin\\PresentationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        534 => [[['_route' => 'presentation_delete', '_controller' => 'App\\Controller\\Admin\\PresentationController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        566 => [[['_route' => 'produits_edit', '_controller' => 'App\\Controller\\Admin\\ProduitsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        574 => [[['_route' => 'produits_delete', '_controller' => 'App\\Controller\\Admin\\ProduitsController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        606 => [
            [['_route' => 'realisation_show', '_controller' => 'App\\Controller\\ExperienceController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
