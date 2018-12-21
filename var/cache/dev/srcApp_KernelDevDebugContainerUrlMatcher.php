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
            '/ola-mundo' => array(array(array('_route' => 'app_hello_world', '_controller' => 'App\\Controller\\HelloController::world'), null, null, null, false, null)),
            '/mostrar-mensagem' => array(array(array('_route' => 'app_hello_mensagem', '_controller' => 'App\\Controller\\HelloController::mensagem'), null, null, null, false, null)),
            '/cadastrar-produto' => array(array(array('_route' => 'app_hello_produto', '_controller' => 'App\\Controller\\HelloController::produto'), null, null, null, false, null)),
            '/formulario' => array(array(array('_route' => 'app_hello_formulario', '_controller' => 'App\\Controller\\HelloController::formulario'), null, null, null, false, null)),
            '/produto' => array(array(array('_route' => 'listar_produto', '_controller' => 'App\\Controller\\ProdutoController::index'), null, null, null, false, null)),
            '/produto/cadastrar' => array(array(array('_route' => 'cadastrar_produto', '_controller' => 'App\\Controller\\ProdutoController::create'), null, null, null, false, null)),
            '/_profiler' => array(array(array('_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'), null, null, null, true, null)),
            '/_profiler/search' => array(array(array('_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'), null, null, null, false, null)),
            '/_profiler/search_bar' => array(array(array('_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'), null, null, null, false, null)),
            '/_profiler/phpinfo' => array(array(array('_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'), null, null, null, false, null)),
            '/_profiler/open' => array(array(array('_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'), null, null, null, false, null)),
        );
        $this->regexpList = array(
            0 => '{^(?'
                    .'|/produto/(?'
                        .'|editar/([^/]++)(*:34)'
                        .'|apagar/([^/]++)(*:56)'
                        .'|visualizar/([^/]++)(*:82)'
                    .')'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:121)'
                        .'|wdt/([^/]++)(*:141)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:187)'
                                .'|router(*:201)'
                                .'|exception(?'
                                    .'|(*:221)'
                                    .'|\\.css(*:234)'
                                .')'
                            .')'
                            .'|(*:244)'
                        .')'
                    .')'
                .')(?:/?)$}sDu',
        );
        $this->dynamicRoutes = array(
            34 => array(array(array('_route' => 'editar_produto', '_controller' => 'App\\Controller\\ProdutoController::update'), array('id'), null, null, false, null)),
            56 => array(array(array('_route' => 'apagar_produto', '_controller' => 'App\\Controller\\ProdutoController::delete'), array('id'), null, null, false, null)),
            82 => array(array(array('_route' => 'visualizar_produto', '_controller' => 'App\\Controller\\ProdutoController::view'), array('id'), null, null, false, null)),
            121 => array(array(array('_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code', '_format'), null, null, false, null)),
            141 => array(array(array('_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'), array('token'), null, null, false, null)),
            187 => array(array(array('_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array('token'), null, null, false, null)),
            201 => array(array(array('_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'), array('token'), null, null, false, null)),
            221 => array(array(array('_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'), array('token'), null, null, false, null)),
            234 => array(array(array('_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'), array('token'), null, null, false, null)),
            244 => array(array(array('_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'), array('token'), null, null, false, null)),
        );
    }
}
