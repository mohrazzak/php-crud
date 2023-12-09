<?php

$router->get('/', 'index.php')->only('auth');


$router->get('/product', 'products/show.php')->only('auth');;
$router->delete('/delete', 'products/destroy.php')->only('auth');;
$router->get('/edit', 'products/edit.php')->only('auth');;
$router->patch('/edit', 'products/update.php')->only('auth');;

$router->get('/create', 'products/create.php')->only('auth');;
$router->post('/create', 'products/store.php')->only('auth');;

$router->get('/signup', 'registration/create.php')->only('guest');
$router->post('/signup', 'registration/store.php')->only('guest');

$router->get('/login', 'session/create.php')->only('guest');;
$router->post('/login', 'session/store.php')->only('guest');;
$router->delete('/logout', 'session/destroy.php')->only('auth');;

