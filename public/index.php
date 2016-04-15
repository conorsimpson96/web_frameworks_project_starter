<?php
use Itb\MainController;

// do out basic setup
// ------------
require_once __DIR__ . '/../app/setup.php';

// use our static controller() method...
$app->get('/',      \Itb\Utility::controller('Itb', 'main/index'));
$app->get('/members', \Itb\Utility::controller('Itb', 'main/members'));
$app->get('/projects', \Itb\Utility::controller('Itb', 'main/projects'));
$app->get('/publications', \Itb\Utility::controller('Itb', 'main/publications'));

// 404 - Page not found
$app->error(function (\Exception $e, $code) use ($app) {
    switch ($code) {
        case 404:
            $message = 'The requested page could not be found.';
            return \Itb\MainController::error404($app, $message);

        default:
            $message = 'We are sorry, but something went terribly wrong.';
            return \Itb\MainController::error404($app, $message);
    }
});

// run Silex front controller
// ------------
$app->run();
