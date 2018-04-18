<?php

set_include_path(get_include_path() . PATH_SEPARATOR . '/lib');


///include('PageError.php');
include('php-router.php');

$router = new Router;


$dispatcher = new Dispatcher;
$dispatcher->setSuffix('Controller');
$dispatcher->setClassPath('controllers');

//Set up your default route:
$route = new Route('/');
$route->setMapClass('default')->setMapMethod('index');
$router->addRoute( 'default', $route );

$route = new Route('/products/');
$route->setMapClass('products')->setMapMethod('index');
$router->addRoute( 'products', $route );

$route = new Route('/apie_mus/');
$route->setMapClass('apie_mus')->setMapMethod('index');
$router->addRoute( 'apie_mus', $route );

$route = new Route('/audiniai/');
$route->setMapClass('audiniai')->setMapMethod('index');
$router->addRoute( 'audiniai', $route );

$route = new Route('/gallery/');
$route->setMapClass('gallery')->setMapMethod('index');
$router->addRoute( 'gallery', $route );

$route = new Route('/kontaktai/');
$route->setMapClass('kontaktai')->setMapMethod('index');
$router->addRoute( 'kontaktai', $route );

$route = new Route('/produse/');
$route->setMapClass('produse')->setMapMethod('view');
$router->addRoute( 'produse', $route );

$route = new Route('/produse/:id/');
$route->setMapClass('produse')->setMapMethod('view')->addDynamicElement( ':id', ':id' );
$router->addRoute( 'produse', $route );



$route = new Route('/profile/in');
$route->setMapClass('profile')->setMapMethod('in');
$router->addRoute( 'profile/in', $route );

$route = new Route('/profile/recovery');
$route->setMapClass('profile')->setMapMethod('recovery');
$router->addRoute( 'profile/recovery', $route );

$route = new Route('/news/list/');
$route->setMapClass('news')->setMapMethod('all');
$router->addRoute( 'news/list', $route );

//An example 'orders' route that might be set up
$route = new Route( '/news/view/:id' );
$route->setMapClass( 'news' )->setMapMethod( 'view' )->addDynamicElement( ':id', ':id' );
$router->addRoute( 'news', $route );

$url = urldecode($_SERVER['REQUEST_URI']);

try {
    $found_route = $router->findRoute($url);
    $dispatcher->dispatch( $found_route );
} catch ( RouteNotFoundException $e ) {
    echo 'Страница не найдена';
    exit;
} catch ( badClassNameException $e ) {
    echo 'Страница не найдена #1';
    exit;
} catch ( classFileNotFoundException $e ) {
    echo 'Страница не найдена #2';
    exit;
} catch ( classNameNotFoundException $e ) {
    echo 'Страница не найдена #3';
    exit;
} catch ( classMethodNotFoundException $e ) {
    echo 'Страница не найдена #4';
    exit;
} catch ( classNotSpecifiedException $e ) {
    echo 'Страница не найдена #5';
    exit;
} catch ( methodNotSpecifiedException $e ) {
    echo 'Страница не найдена #6';
    exit;
}


$class = $found_route->getMapClass();
$method = $found_route->getMapMethod();

$dir = EventDir();

require_once('view/header.php');

if ( $dir ) {

  $ClassDir = EventDir('view/' . $class) ; 

  if ( $ClassDir ) {
    
        $ViewFile = 'view/' . $class . '/'.  $method . '.php';

        if ( !is_file ( $ViewFile ) )  { 
            $Text = '<pre> Тестовая страница изменить ее можно в директории view/' . $class . '/' . $method . '.php </pre>'; 
            file_put_contents($ViewFile, $Text);
        }

        require_once($ViewFile);
  }

}

require_once('view/footer.php');


function EventDir ( $dir='view' ){
  if ( !is_dir ( $dir ) )  {
    return mkdir ( $dir );
  }
  return 1;

}




?>