<?php
class Contact{

    // database connection and table name
    private $conn;
    private $table_name = "contact";

    // object properties
    public $id;
    public $name;
    public $email;
    public $phone_number;
    public $address;

    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }

    // read products

    function read(){

        // select all query
        $query = "SELECT * FROM ". $this->table_name ."";

        // prepare query statement
        $stmt = $this->conn->prepare($query);

        // execute query
        $stmt->execute();

        return $stmt;
    }

    // create product
    function create(){

        // query to insert record
        $query = "INSERT INTO
                    " . $this->table_name . "
                SET
                    name=:name, email=:email, phone_number=:phone_number, address=:address";

        // prepare query
        $stmt = $this->conn->prepare($query);

        // sanitize
        $this->name=htmlspecialchars(strip_tags($this->name));
        $this->email=htmlspecialchars(strip_tags($this->email));
        $this->phone_number=htmlspecialchars(strip_tags($this->phone_number));
        $this->address=htmlspecialchars(strip_tags($this->address));

        // bind values
        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":phone_number", $this->phone_number);
        $stmt->bindParam(":address", $this->address);

        // execute query
        if($stmt->execute()){
            return true;
        }

        return false;

    }


    function readOne(){

        // query to read single record
        $query = "SELECT
                    c.name, c.email,c.phone_number,c.address
                FROM
                    " . $this->table_name . " c
                WHERE
                    c.id = ?
                LIMIT
                    0,1";

        // prepare query statement
        $stmt = $this->conn->prepare( $query );

        // bind id of product to be updated
        $stmt->bindParam(1, $this->id);

        // execute query
        $stmt->execute();

        // get retrieved row
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        // set values to object properties
        $this->name = $row['name'];
        $this->email = $row['email'];
        $this->phone_number = $row['phone_number'];
        $this->address = $row['address'];
    }
}
?>