<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = array(
            '/animais' => array(array(array('_route' => 'listar_animais', '_controller' => 'App\\Controller\\AnimaisController::index'), null, null, null, false, null)),
            '/animais/cadastrar' => array(array(array('_route' => 'cadastrar_animal', '_controller' => 'App\\Controller\\AnimaisController::create'), null, null, null, false, null)),
            '/clientes' => array(array(array('_route' => 'listar_clientes', '_controller' => 'App\\Controller\\ClientesController::index'), null, null, null, false, null)),
            '/cliente/cadastrar' => array(array(array('_route' => 'cadastrar_cliente', '_controller' => 'App\\Controller\\ClientesController::create'), null, null, null, false, null)),
            '/' => array(array(array('_route' => 'default', '_controller' => 'App\\Controller\\DefaultController::index'), null, null, null, false, null)),
            '/_profiler' => array(array(array('_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'), null, null, null, true, null)),
            '/_profiler/search' => array(array(array('_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'), null, null, null, false, null)),
            '/_profiler/search_bar' => array(array(array('_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'), null, null, null, false, null)),
            '/_profiler/phpinfo' => array(array(array('_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'), null, null, null, false, null)),
            '/_profiler/open' => array(array(array('_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'), null, null, null, false, null)),
        );
        $this->regexpList = array(
            0 => '{^(?'
                    .'|/animais/visualizar/([^/]++)(*:35)'
                    .'|/cliente/visualizar/([^/]++)(*:70)'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:108)'
                        .'|wdt/([^/]++)(*:128)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:174)'
                                .'|router(*:188)'
                                .'|exception(?'
                                    .'|(*:208)'
                                    .'|\\.css(*:221)'
                                .')'
                            .')'
                            .'|(*:231)'
                        .')'
                    .')'
                .')(?:/?)$}sDu',
        );
        $this->dynamicRoutes = array(
            35 => array(array(array('_route' => 'visualizar_animal', '_controller' => 'App\\Controller\\AnimaisController::view'), array('id'), null, null, false, null)),
            70 => array(array(array('_route' => 'visualizar_cliente', '_controller' => 'App\\Controller\\ClientesController::view'), array('id'), null, null, false, null)),
            108 => array(array(array('_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code', '_format'), null, null, false, null)),
            128 => array(array(array('_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'), array('token'), null, null, false, null)),
            174 => array(array(array('_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array('token'), null, null, false, null)),
            188 => array(array(array('_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'), array('token'), null, null, false, null)),
            208 => array(array(array('_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'), array('token'), null, null, false, null)),
            221 => array(array(array('_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'), array('token'), null, null, false, null)),
            231 => array(array(array('_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'), array('token'), null, null, false, null)),
        );
    }
}
