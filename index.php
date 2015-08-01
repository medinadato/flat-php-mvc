<?php

// global libraries
require_once 'vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$request = Request::createFromGlobals();

// router
$uri = $request->getPathInfo();

if ('/' == $uri) {
	$response = list_action();
} elseif ('/show' == $uri && isset($_GET['id'])) {
	$response = show_action($_GET['id']);
} else {
	$html =  '<html><body>Page not found</body></html>';
        $response = new Response($html, Response::HTTP_NOT_FOUND);
}

$response->send();