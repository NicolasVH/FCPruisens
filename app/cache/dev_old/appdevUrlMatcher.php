<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        // _welcome
        if ($pathinfo === '/welcome') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // fcp_site_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fcp_site_homepage')), array (  '_controller' => 'FcpSiteBundle:Default:index',));
        }

        // site
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'site');
            }

            return array (  '_controller' => 'Fcp\\SiteBundle\\Controller\\HomeController::IndexAction',  '_route' => 'site',);
        }

        // logout
        if ($pathinfo === '/logout') {
            return array('_route' => 'logout');
        }

        if (0 === strpos($pathinfo, '/spelers')) {
            // player_index
            if (rtrim($pathinfo, '/') === '/spelers') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'player_index');
                }

                return array (  '_controller' => 'Fcp\\SiteBundle\\Controller\\PlayerController::IndexAction',  '_route' => 'player_index',);
            }

            // player_profile
            if (preg_match('#^/spelers/(?P<slug>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'player_profile');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'player_profile')), array (  '_controller' => 'Fcp\\SiteBundle\\Controller\\PlayerController::ProfileAction',));
            }

        }

        // fixture_show
        if (0 === strpos($pathinfo, '/wedstrijden') && preg_match('#^/wedstrijden/(?P<id>[^/]++)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'fixture_show');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fixture_show')), array (  '_controller' => 'Fcp\\SiteBundle\\Controller\\FixtureController::ShowAction',));
        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/clubs')) {
                // admin_club
                if (rtrim($pathinfo, '/') === '/admin/clubs') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_club');
                    }

                    return array (  '_controller' => 'Fcp\\SiteBundle\\Controller\\ClubController::AdminAction',  '_route' => 'admin_club',);
                }

                // admin_club_create
                if (rtrim($pathinfo, '/') === '/admin/clubs/aanmaken') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_club_create');
                    }

                    return array (  '_controller' => 'Fcp\\SiteBundle\\Controller\\ClubController::CreateAction',  '_route' => 'admin_club_create',);
                }

                // admin_club_edit
                if (0 === strpos($pathinfo, '/admin/clubs/bewerken') && preg_match('#^/admin/clubs/bewerken/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_club_edit')), array (  '_controller' => 'Fcp\\SiteBundle\\Controller\\ClubController::EditAction',));
                }

                // admin_club_delete
                if ($pathinfo === '/admin/clubs/verwijder') {
                    return array (  '_controller' => 'Fcp\\SiteBundle\\Controller\\ClubController::DeleteAction',  '_route' => 'admin_club_delete',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/spelers')) {
                // admin_player
                if (rtrim($pathinfo, '/') === '/admin/spelers') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_player');
                    }

                    return array (  '_controller' => 'Fcp\\SiteBundle\\Controller\\PlayerController::AdminAction',  '_route' => 'admin_player',);
                }

                // admin_player_create
                if (rtrim($pathinfo, '/') === '/admin/spelers/aanmaken') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_player_create');
                    }

                    return array (  '_controller' => 'Fcp\\SiteBundle\\Controller\\PlayerController::CreateAction',  '_route' => 'admin_player_create',);
                }

                // admin_player_edit
                if (0 === strpos($pathinfo, '/admin/spelers/bewerken') && preg_match('#^/admin/spelers/bewerken/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_player_edit')), array (  '_controller' => 'Fcp\\SiteBundle\\Controller\\PlayerController::EditAction',));
                }

                // admin_player_delete
                if ($pathinfo === '/admin/spelers/verwijder') {
                    return array (  '_controller' => 'Fcp\\SiteBundle\\Controller\\PlayerController::DeleteAction',  '_route' => 'admin_player_delete',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/competities')) {
                // admin_competition
                if (rtrim($pathinfo, '/') === '/admin/competities') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_competition');
                    }

                    return array (  '_controller' => 'Fcp\\SiteBundle\\Controller\\CompetitionController::AdminAction',  '_route' => 'admin_competition',);
                }

                // admin_competition_create
                if (rtrim($pathinfo, '/') === '/admin/competities/aanmaken') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_competition_create');
                    }

                    return array (  '_controller' => 'Fcp\\SiteBundle\\Controller\\CompetitionController::CreateAction',  '_route' => 'admin_competition_create',);
                }

                // admin_competition_edit
                if (0 === strpos($pathinfo, '/admin/competities/bewerken') && preg_match('#^/admin/competities/bewerken/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_competition_edit')), array (  '_controller' => 'Fcp\\SiteBundle\\Controller\\CompetitionController::EditAction',));
                }

                // admin_competition_delete
                if ($pathinfo === '/admin/competities/verwijder') {
                    return array (  '_controller' => 'Fcp\\SiteBundle\\Controller\\CompetitionController::DeleteAction',  '_route' => 'admin_competition_delete',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/wedstrijden')) {
                // admin_fixture
                if (rtrim($pathinfo, '/') === '/admin/wedstrijden') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_fixture');
                    }

                    return array (  '_controller' => 'Fcp\\SiteBundle\\Controller\\FixtureController::AdminAction',  '_route' => 'admin_fixture',);
                }

                // admin_fixture_create
                if (rtrim($pathinfo, '/') === '/admin/wedstrijden/aanmaken') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_fixture_create');
                    }

                    return array (  '_controller' => 'Fcp\\SiteBundle\\Controller\\FixtureController::CreateAction',  '_route' => 'admin_fixture_create',);
                }

                // admin_fixture_edit
                if (0 === strpos($pathinfo, '/admin/wedstrijden/bewerken') && preg_match('#^/admin/wedstrijden/bewerken/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_fixture_edit')), array (  '_controller' => 'Fcp\\SiteBundle\\Controller\\FixtureController::EditAction',));
                }

                // admin_fixture_delete
                if ($pathinfo === '/admin/wedstrijden/verwijder') {
                    return array (  '_controller' => 'Fcp\\SiteBundle\\Controller\\FixtureController::DeleteAction',  '_route' => 'admin_fixture_delete',);
                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
