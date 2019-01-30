<?php

$router->get('/', function () use ($router) {
    return view('index');
});

$router->get('/trackr', function () use ($router) {
    return view('trackr');
});
