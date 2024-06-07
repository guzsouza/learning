<?php

    declare(strict_types= 1);

    // Obtém a URI solicitada
    $requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    // Roteamento básico
    if ($requestUri == '/startPoint' || $requestUri == '/') {
        require_once 'initPage.php';
    } elseif ($requestUri == '/helloworld') {
        require_once 'helloWorld.php';
    }

