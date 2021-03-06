<?php
// Application middleware

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

//Validar duracion de la sesion y regenerar los id para evitar ataques session fixation:
$app->add(function($request, $response, $next) {
    $SESSION_TIMEOUT = 1200;
    if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > SESSION_TIMEOUT)) {
        // last request was more than 30 minutes ago
        session_unset();     // unset $_SESSION variable for the run-time 
        session_destroy();   // destroy session data in storage
    }
    $_SESSION['LAST_ACTIVITY'] = time();

    if (!isset($_SESSION['CREATED'])) {
        $_SESSION['CREATED'] = time();
    } else if (time() - $_SESSION['CREATED'] > SESSION_TIMEOUT) {
        // session started more than 30 minutes ago
        session_regenerate_id(true);    // change session ID for the current session and invalidate old session ID
        $_SESSION['CREATED'] = time();  // update creation time
    }
    
    return $next($request, $response);
});