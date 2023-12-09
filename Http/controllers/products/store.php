<?php

use Core\App;
use Core\Validator;
use Core\Database;

$db = App::resolve(Database::class);
$errors = [];

if (! Validator::string($_POST['title'], 1, 1000)) {
    $errors['title'] = 'A title of no more than 1,000 characters is required.';
}

if (! Validator::number($_POST['price'],1)) {
    $errors['price'] = 'A price of no less than $1 is required.';
}

if (! empty($errors)) {
    return view("products/create.view.php", [
        'heading' => 'Create product',
        'errors' => $errors
    ]);
}

$db->query('INSERT INTO products (title, price) VALUES (:title, :price)', [
    'title' => $_POST['title'],
    'price' => $_POST['price']
]);


$db->query('INSERT INTO notifications (title) VALUES (:title)', [
    'title' =>"Product \"{$_POST['title']}\" added."
]);


header('location: /');
die();
