<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';

require('../WappalyzerException.php');
require('../Wappalyzer.php');

$app = new \Slim\App;
$app->get('/', function (Request $request, Response $response) {
    $params = $request->getQueryParams();

    $wappalyzer = new Wappalyzer( $params['url'] );

    $response->withHeader('Content-type', 'application/json')->withJson(
        $wappalyzer->analyze()
    );

    return $response;
});

$app->run();