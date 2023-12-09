<?php

require base_path('vendor/autoload.php');
use Carbon\Carbon;
use Carbon\CarbonInterval;

$db = \Core\App::resolve(\Core\Database ::class);
$products = $db->query('select * from products')->get();
$notifications = $db->query('SELECT * FROM notifications ORDER BY createdAt DESC LIMIT 5')->get();

view("index.php", [
    'heading' => 'Home',
    'productsCount'=>1000,
    'products'=>$products,
    'notifications'=>$notifications

]);