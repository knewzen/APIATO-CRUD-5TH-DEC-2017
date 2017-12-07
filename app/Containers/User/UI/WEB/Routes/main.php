<?php

$router->get('/user', [
    'as'   => 'get_user_home_page',
    'uses' => 'Controller@sayWelcome'
]);

$router->get('/register', [
    'as'   => 'register_user',
    'uses' => 'Controller@registerUser'
]);

$router->post('/saveuser', [
    'as'   => 'save_user',
    'uses' => 'Controller@saveUser'
]);