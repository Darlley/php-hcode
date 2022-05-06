<?php 

require_once("vendor/autoload.php");

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();

$app->get('/', function() {
    echo "<h1>Darlley</h1>";
});

$app->get('/category/:category', function($category){
    echo "<h2>$category</h2>
    <ul>
        <li>Subcategoria 1</li>
        <li>Subcategoria 2</li>
        <li>Subcategoria 3</li>
    </ul>";
});

$app->get('/hello/:name', function ($name) {
    echo "Hello, $name";
});
$app->run();