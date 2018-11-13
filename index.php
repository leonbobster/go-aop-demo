<?php

include __DIR__ . '/vendor/autoload.php'; // use composer
require_once __DIR__ . '/AppAspectKernel.php';

// Initialize an application aspect container
$applicationAspectKernel = AppAspectKernel::getInstance();
$applicationAspectKernel->init([
        'debug'        => true, // use 'false' for production mode
        'appDir'       => __DIR__, // Application root directory
        'cacheDir'     => __DIR__ . '/cache', // Cache directory
        // Include paths restricts the directories where aspects should be applied, or empty for all source files
        'includePaths' => [
                __DIR__ . '/src/Controller'
        ]
]);

$controller = new Controller\FooController();
$controller->actionBar();


