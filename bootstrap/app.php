<?php
/**
 * Created by PhpStorm.
 * User: Tolga
 * Date: 03/06/2019
 * Time: 18:37
 */
require_once __DIR__ . "/../vendor/autoload.php";

session_start();


$app = new \Slim\App([
    'settings' => [
        'displayErrorDetails'=>true
    ]
]);

$container = $app->getContainer();

$container['view'] = function ($container){
    $view = new \Slim\Views\Twig(__DIR__ . '/../ressources/views',[
        'cache' => false
    ]);


    $view->addExtension(new \Slim\Views\TwigExtension(
        $container->router,
        $container->request->getUri()
    ));

    return $view;
};

$container['notFoundHandler'] = function ($c) {
    return function ($request, $response) use ($c) {
        if($response->withStatus(404)){
            return $response->withRedirect('/page-introuvable');
        }

    };
};

$container['MailController'] = function ($container){
    return new \App\Controllers\MailController($container);
};



require_once __DIR__ . "/../app/routes.php";
