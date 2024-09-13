<?php

// Func
function Abort($code = 404) {
	http_response_code($code);
	
	require "views/$code.php";
	die();
}
function routeToController($uri, $routes) {
	if (array_key_exists($uri, $routes)) {
		require $routes[$uri];	
	} else {
		Abort();
	}
}

// Decl
$uri = parse_url($_SERVER["REQUEST_URI"])['path'];

$routes = [
	'/' => 'controllers/home.php',
	'/about' => 'controllers/about.php',
	'/contact' => 'controllers/contact.php',
];

// Init
routeToController($uri, $routes);