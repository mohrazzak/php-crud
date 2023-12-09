<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);


$db = App::resolve(Database ::class);
$notifications = $db->query('SELECT * FROM notifications ORDER BY createdAt DESC LIMIT 5')->get();



view("products/create.view.php", [
    'heading' => 'Create Product',
    'errors' => [],
    'notifications'=>$notifications
]);