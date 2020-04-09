<?php

use Slim\App;

$app->get('/', function ($request, $response) {
    return $this->view->render($response, 'home.twig');
})->setName('home');

$app->get('/client', function ($request, $response) {
    return $this->view->render($response, 'client.twig');
})->setName('client');

$app->get('/service', function ($request, $response) {
    return $this->view->render($response, 'service.twig');
})->setName('service');

$app->get('/devis', function ($request, $response) {
    return $this->view->render($response, 'devis.twig');
})->setName('devis');

$app->get('/facture', function ($request, $response) {
    return $this->view->render($response, 'facture.twig');
})->setName('facture');

$app->get('/outil', function ($request, $response) {
    return $this->view->render($response, 'outil.twig');
})->setName('outil');
/**
 * Liste des modules
 */
