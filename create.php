<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// get database connection
include_once 'config/dbconfig.php';

// instantiate contact object
include_once 'objects/contact.php';

$database = new Database();
$db = $database->getConnection();

$contact = new Contact($db);

// get posted data
$data = json_decode(file_get_contents("php://input"));

// make sure data is not empty
if(
    !empty($data->name) &&
    !empty($data->email) &&
    !empty($data->phone_number) &&
    !empty($data->address) &&  $_SERVER['REQUEST_METHOD'] === 'POST'
){

    // set contact property values
    $contact->name = $data->name;
    $contact->email = $data->email;
    $contact->phone_number = $data->phone_number;
    $contact->address = $data->address;

    // create the contact
    if( $contact->create()){

        // set response code - 201 created
        http_response_code(201);

        echo json_encode(array("message" => "contact was created."));
    }

    else{

        // set response code - 503 service unavailable
        http_response_code(503);

        echo json_encode(array("message" => "Unable to create contact."));
    }
}
elseif( $_SERVER['REQUEST_METHOD'] !== 'POST'){
    http_response_code(400);

    echo json_encode(array("message" => "Bad request type."));
}
else{

    http_response_code(503);

    echo json_encode(array("message" => "Data is incomplete."));
}
?>