<?php

$router->get('/', function () use ($router) {
    return view('index');
});

$router->get('/trackr', function () use ($router) {
    return view('trackr');
});

$router->get('/clockinout', function () use ($router) {
    return view('clockinout');
});

$router->get('/gps', function () use ($router) {
    return view('test');
});

$router->get('/ww', function () use ($router) {
    return view('webworker');
});
