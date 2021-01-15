<?php

// fetching the id from the url
$uri = $_SERVER["REQUEST_URI"];
$uriArray = explode('/', $uri);
$id = NULL;

if($uriArray[1]=== 'contacts' && count($uriArray) === 3)
{
    $id = $uriArray[2];
}

// using the Front Controller design pattern
switch ($_SERVER['REQUEST_URI']) {
    case '/contacts':
        include './requests/contacts.php';
        break;
    case '/update':
        include './requests/update.php';
        break;
    case '/contacts/'.$id.'':
        $_GET['id'] = $id;
        include './requests/read_one.php';
        break;
    case '/create':
        include './requests/create.php';
        break;
    default:
        include './requests/404.php';
        break;
}