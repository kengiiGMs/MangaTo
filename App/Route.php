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
        $routes['autenticar'] = array(
            'route' => '/autenticar',
            'controller' => 'AuthController',
            'action' => 'autenticar'
        );
        $routes['timeline'] = array(
            'route' => '/timeline',
            'controller' => 'AppController',
            'action' => 'timeline'
        );
        $routes['sair'] = array(
            'route' => '/sair',
            'controller' => 'AuthController',
            'action' => 'sair'
        );
        
         $routes['comentario'] = array(
            'route' => '/comentario',
            'controller' => 'AppController',
            'action' => 'comentario'
        );
        

        $this->setRoutes($routes);
    }
    
}
?>