<?php

$router->get('/login', [
    'as'   => 'get_login_page',
    'uses' => 'Controller@showLoginPage',
    'domain' => 'admin.'. parse_url(\Config::get('app.url'))['host'],
]);

$router->get('/login-user', [
    'as'   => 'login_user',
    'uses' => 'Controller@showUserLoginPage'
]);

$router->post('/login-user-form', [
    'as'   => 'login_user_form',
    'uses' => 'Controller@loginUser'
]);

$router->post('/logout', [
    'as'   => 'logout',
    'uses' => 'Controller@logoutUser'
]);