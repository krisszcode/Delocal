<?php

// fetching the id from the url
$uri = $_SERVER["REQUEST_URI"];
$uriArray = explode('/', $uri);

if($uriArray[1]=== 'contacts' && count($uriArray) === 3)
{
    $id = $uriArray[2];
}

// using the Front Controller design pattern
switch ($_SERVER['REQUEST_URI']) {
    case '/contacts':
        include 'contacts.php';
        break;
    case '/update':
        include 'update.php';
        break;
    case '/contacts/'.$id.'':
        $_GET['id'] = $id;
        include 'read_one.php';
        break;
    case '/create':
        include 'create.php';
        break;
    default:
        include '404.php';
        break;
}