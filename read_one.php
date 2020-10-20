<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');

// include database and object files
include_once 'config/dbconfig.php';
include_once 'objects/contact.php';

// get database connection
$database = new Database();
$db = $database->getConnection();

// prepare contact object
$contact = new contact($db);

// set ID property of record to read
$contact->id = isset($_GET['id']) ? $_GET['id'] : die();

// read the details of contact to be edited
$contact->readOne();

if($contact->name!=null){
    // create array
    $contact_arr = array(
        "id" =>  $contact->id,
        "name" => $contact->name,
        "email" => $contact->email,
        "phone_number" => $contact->phone_number,
        "address" => $contact->address,

    );

    // set response code - 200 OK
    http_response_code(200);

    // make it json format
    echo json_encode($contact_arr);
}

else{
    // set response code - 404 Not found
    http_response_code(404);

    // tell the user contact does not exist
    echo json_encode(array("message" => "contact does not exist."));
}
?>