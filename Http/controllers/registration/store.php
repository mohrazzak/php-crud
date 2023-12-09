<?php

use Core\App;
use Core\Authenticator;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$username = $_POST['username'];
$password = $_POST['password'];
$name = $_POST['name'];

$errors = [];

if (!Validator::string($name,2,36)) {
    $errors['name'] = 'Please provide a valid name.';
}

if (!Validator::username($username)) {
   $errors['username'] = 'Please provide a valid username.';
}

if (!Validator::string($password, 7, 255)) {
    $errors['password'] = 'Please provide a password of at least seven characters.';
}

if (! empty($errors)) {
    return view('registration/create.view.php', [
        'errors' => $errors
    ]);
}

$user = $db->query('select * from users where username = :username', [
    'username' => $username
])->find();

if ($user) {
    header('location: /');
    exit();
} else {
    $db->query('INSERT INTO users(name,username, password) VALUES(:name,:username, :password)', [
        'name' => $name,
        'username' => $username,
        'password' => password_hash($password, PASSWORD_BCRYPT)
    ]);

    (new Authenticator)->login(['username' => $username, 'name'=>$name]);

    header('location: /');
    exit();
}
