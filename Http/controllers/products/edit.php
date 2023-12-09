<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);


$product = $db->query('select * from products where id = :id', [
    'id' => $_GET['id']
])->findOrFail();
$notifications = $db->query('SELECT * FROM notifications ORDER BY createdAt DESC LIMIT 5')->get();




view("products/edit.view.php", [
    'heading' => 'Edit Product',
    'errors' => [],
    'product' => $product,
    'notifications'=>$notifications

]);