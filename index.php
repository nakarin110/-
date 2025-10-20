<?php
session_start(); 
require __DIR__ . '/AltoRouter-master/AltoRouter.php';
$router = new AltoRouter();

$router->map('GET', '/', function() {
    include 'layouts/navbar.php';
    include 'pages/home.php';
});

$router->map('GET', '/home', function() {
    include 'layouts/navbar.php';
    include 'pages/home.php';
});

$match = $router->match();
if ($match && is_callable($match['target'])) {
    call_user_func_array($match['target'], $match['params']);
} else {
    header("Location: /");
    exit;
}
