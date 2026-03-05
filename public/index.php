<?php
require_once __DIR__.'/../vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$request  = Request::createFromGlobals();
$response = new Response();

$rotas = [
    '/hello' => __DIR__.'/../pages/hello.php',
    '/bye'   => __DIR__.'/../pages/bye.php',
];

$caminho = $request->getPathInfo();

if (isset($rotas[$caminho])) {
    require $rotas[$caminho];
} else {
    $response->setStatusCode(404);
    $response->setContent('<h1>404 - Página não encontrada</h1>');
}

$response->send();