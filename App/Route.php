<?php

namespace App;

use MF\Init\Bootstrap;

class Route extends Bootstrap {

    protected function initRoutes(){
        $routes['home'] = array(
            'route' => '/',
            'controller' => 'indexController',
            'action' => 'index'
        );
        $routes['cadastrarPerfil'] = array(
            'route' => '/cadastrarPerfil',
            'controller' => 'indexController',
            'action' => 'cadastrarPerfil'
        );

        $this->setRoutes($routes);
    }
    
}
?>