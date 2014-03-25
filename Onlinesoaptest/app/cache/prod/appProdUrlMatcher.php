<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // onlinesoaptest_home_page
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'onlinesoaptest_home_page');
            }

            return array (  '_controller' => 'Websites\\OnlinesoaptestBundle\\Controller\\DefaultController::homeAction',  'title' => 'onlinesoaptest',  '_route' => 'onlinesoaptest_home_page',);
        }

        // onlinesoaptest_ajax_page
        if ($pathinfo === '/ajax') {
            return array (  '_controller' => 'Websites\\OnlinesoaptestBundle\\Controller\\DefaultController::ajaxAction',  'title' => 'onlinesoaptest',  '_route' => 'onlinesoaptest_ajax_page',);
        }

        if (0 === strpos($pathinfo, '/photos')) {
            // onlinesoaptest_photos_page
            if (preg_match('#^/photos/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'onlinesoaptest_photos_page')), array (  '_controller' => 'Websites\\OnlinesoaptestBundle\\Controller\\DefaultController::photosAction',  'title' => 'onlinesoaptest:photo',));
            }

            // onlinesoaptest_thumbnails_page
            if ($pathinfo === '/photos') {
                return array (  '_controller' => 'Websites\\OnlinesoaptestBundle\\Controller\\DefaultController::thumbnailsAction',  'title' => 'onlinesoaptest:photos',  '_route' => 'onlinesoaptest_thumbnails_page',);
            }

        }

        // onlinesoaptest_about_page
        if ($pathinfo === '/about') {
            return array (  '_controller' => 'Websites\\OnlinesoaptestBundle\\Controller\\DefaultController::aboutAction',  'title' => 'onlinesoaptest::about',  '_route' => 'onlinesoaptest_about_page',);
        }

        // onlinesoaptest_blog_page
        if ($pathinfo === '/blog') {
            return array (  '_controller' => 'Websites\\OnlinesoaptestBundle\\Controller\\DefaultController::blogAction',  'title' => 'onlinesoaptest::blog',  '_route' => 'onlinesoaptest_blog_page',);
        }

        // onlinesoaptest_contact_page
        if ($pathinfo === '/contact') {
            return array (  '_controller' => 'Websites\\OnlinesoaptestBundle\\Controller\\DefaultController::contactAction',  'title' => 'onlinesoaptest::contact',  '_route' => 'onlinesoaptest_contact_page',);
        }

        // onlinesoaptest_sendemail_page
        if ($pathinfo === '/sendemail') {
            return array (  '_controller' => 'Websites\\OnlinesoaptestBundle\\Controller\\DefaultController::sendemailAction',  'title' => 'onlinesoaptest::Send Email',  '_route' => 'onlinesoaptest_sendemail_page',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
