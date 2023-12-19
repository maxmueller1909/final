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
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/kontakt' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::contactAction'], null, null, null, false, false, null]],
        '/callback' => [[['_route' => 'callback', '_controller' => 'App\\Controller\\ContactController::callbackAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home_homepage', '_controller' => 'App\\Controller\\DefaultController::indexAction'], null, null, null, false, false, null]],
        '/philosophie' => [[['_route' => 'home_philosophy', '_controller' => 'App\\Controller\\DefaultController::philosophyAction'], null, null, null, false, false, null]],
        '/neurochirurgie-allgemeines' => [[['_route' => 'home_neurochirurgie', '_controller' => 'App\\Controller\\DefaultController::neurochirurgieAction'], null, null, null, false, false, null]],
        '/notfall' => [[['_route' => 'home_emergency', '_controller' => 'App\\Controller\\DefaultController::emergencyAction'], null, null, null, false, false, null]],
        '/impressum' => [[['_route' => 'home_imprint', '_controller' => 'App\\Controller\\DefaultController::imprintAction'], null, null, null, false, false, null]],
        '/datenschutz' => [[['_route' => 'home_protection', '_controller' => 'App\\Controller\\DefaultController::protectionAction'], null, null, null, false, false, null]],
        '/praxis' => [[['_route' => 'practice_practice', '_controller' => 'App\\Controller\\PracticeController::practiceAction'], null, null, null, false, false, null]],
        '/team' => [[['_route' => 'practice_team', '_controller' => 'App\\Controller\\PracticeController::teamAction'], null, null, null, false, false, null]],
        '/leistungen' => [[['_route' => 'service', '_controller' => 'App\\Controller\\ServiceController::indexAction'], null, null, null, false, false, null]],
        '/diagnostik' => [[['_route' => 'service_diagnostik', '_controller' => 'App\\Controller\\ServiceController::diagnostikAction'], null, null, null, false, false, null]],
        '/konservative-therapie' => [[['_route' => 'service_konservativetherapie', '_controller' => 'App\\Controller\\ServiceController::konservativAction'], null, null, null, false, false, null]],
        '/konservative-therapie/stosswellentherapie' => [[['_route' => 'service_stosswellentherapie', '_controller' => 'App\\Controller\\ServiceController::stosswellenAction'], null, null, null, false, false, null]],
        '/minimalinvasive-therapie' => [[['_route' => 'service_minimalinvasivetherapie', '_controller' => 'App\\Controller\\ServiceController::minimalAction'], null, null, null, false, false, null]],
        '/operative-therapie' => [[['_route' => 'service_operativetherapie', '_controller' => 'App\\Controller\\ServiceController::operativAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/blog/([^/]++)(*:216)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        216 => [
            [['_route' => 'home_blog_post', '_controller' => 'App\\Controller\\DefaultController::blogAction'], ['post'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
