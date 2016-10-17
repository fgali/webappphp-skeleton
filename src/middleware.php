<?php
// Application middleware

//
$app->add(function($request, $response, $next) {
    /*$uri = $request->getUri();
    $api = 'no';
    if(strpos($uri->getPath(), 'api') >= 0){
        $_SESSION["API"] = true;
    }*/
    //var_dump($_SESSION["API"]);
    return $next($request, $response);
});

//Validar Session
$app->add(function ($request, $response, callable $next) {
    $uri = $request->getUri();
    $path = $uri->getPath();
    
    if ($path != 'login' && isset($_SESSION['logged']) == false) {
        $URL = (string)$uri."ric/public/login";
        return $response->withRedirect($this->router->pathFor('login'), 301);
    }
    
    if ($path == 'login' && isset($_SESSION['logged']) == true) {
        $URL = (string)$uri->getBaseUrl();
        return $response->withRedirect($this->router->pathFor('home'), 301);
    }

    /*if ($path == 'signOut' && isset($_SESSION['logged']) == false) {
        $URL = (string)$uri."ric/public/login";
        return $response->withRedirect($URL, 301);
    }*/


    return $next($request, $response);
});
//Rutes Mayusculas y minusculas
$app->add(function ($request, $response, callable $next) {
    $path = $request->getUri()->getPath();
    $basePath = $request->getUri()->getBasePath();
    $uri = $request->getUri()->withPath(strtolower($path));
    $newreq = $request->withUri($uri);
    $response = $next($newreq,$response);

    return $response;
});