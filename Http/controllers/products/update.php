<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

// find the corresponding note
$product = $db->query('select * from products where id = :id', [
    'id' => $_POST['id']
])->findOrFail();

// validate the form
$errors = [];

if (! Validator::string($_POST['title'], 1, 1000)) {
    $errors['title'] = 'A title of no more than 1,000 characters is required.';
}

if (! Validator::number($_POST['price'],1)) {
    $errors['price'] = 'A price of no less than $1 is required.';
}

// if no validation errors, update the record in the products database table.
if (count($errors)) {
    return view('products/edit.view.php', [
        'heading' => 'Edit Product',
        'errors' => $errors,
        'product' => $product
    ]);
}

$db->query('UPDATE products SET title = :title, price = :price WHERE id = :id', [
    'id'    => $_POST['id'],
    'title' => $_POST['title'],
    'price' => $_POST['price']
]);

$db->query('INSERT INTO notifications (title) VALUES (:title)', [
    'title' =>"Product \"{$_POST['title']}\" updated."
]);

// redirect the user
header('location: /');
die();
