<?php

namespace App;

use MF\INIT\Boostrap;

class Route extends Boostrap {

    protected function initRoutes(){
        
        $routes['home'] = array(
            
            'route' => '/',
            'controller' => 'indexController',
            'action' => 'index'
        );

        $routes['sobre_nos'] = array(
            
            'route' => '/sobre_nos',
            'controller' => 'indexController',
            'action' => 'sobreNos'
        );

        $this->setRoutes($routes);
    }

    

    
}



?>