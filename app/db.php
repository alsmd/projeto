<?php
declare(strict_types=1);

use DI\Container;
use Illuminate\Database\Capsule\Manager as Capsule;
return function (Container $container) {
    // Db Injection
    $container->set('db',function($c){
        $capsule = new Capsule;
        $capsule->addConnection($c->get('settings')['db']);
        // Make this Capsule instance available globally via static methods... (optional)
        $capsule->setAsGlobal();

        // Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
        $capsule->bootEloquent();
        return $capsule;
    });
};