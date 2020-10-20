<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET");

// include database and object files
include_once 'config/dbconfig.php';
include_once 'objects/contact.php';

// instantiate database and product object
$database = new Database();
$db = $database->getConnection();

// initialize object
$contact = new Contact($db);



// query contacts
$stmt = $contact->read();
$num = $stmt->rowCount();

// check if more than 0 record found
if($num>0 && $_SERVER['REQUEST_METHOD'] === 'GET'){

    // contacts array
    $contacts_arr=array();
    $contacts_arr["contacts"]=array();

    // retrieve our table contents
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        // extract row
        // this will make $row['name'] to
        // just $name only
        extract($row);

        $contacts_item=array(
            "id" => $id,
            "name" => $name,
            "email" => $email,
            "phone_number" => $phone_number,
            "address" => $address,
        );

        array_push($contacts_arr["contacts"], $contacts_item);
    }

    // set response code to 200 OK
    http_response_code(200);

    // show contacts data in json format
    echo json_encode($contacts_arr);
}
else if($_SERVER['REQUEST_METHOD'] !== 'GET'){

    // set response code to 400 Bad Request
    http_response_code(400);


    echo json_encode(
        array("message" => "Bad request type.")
    );
}
else{
    // set response code to 404 Not found
    http_response_code(404);

    // tell the user no contact found
    echo json_encode(
        array("message" => "Contacts not found")
    );
}

