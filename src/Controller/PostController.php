<?php

namespace BlogMVC\Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

class PostController {

    /**
     * Home page controller.
     *
     * @param Application $app Silex application
     */
    public function indexAction(Application $app) {
        return 'Hello world';
    }
    
}
