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
        $routes['inscreverPerfil'] = array(
            'route' => '/inscreverPerfil',
            'controller' => 'indexController',
            'action' => 'inscreverPerfil'
        );
        $routes['registrarPerfil'] = array(
            'route' => '/registrarPerfil',
            'controller' => 'indexController',
            'action' => 'registrarPerfil'
        );

        $this->setRoutes($routes);
    }
    
}
?>