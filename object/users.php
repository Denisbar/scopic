<?php
// Users
    
class Users{
 
    // database connection and table name
    private $conn;
    private $table_name = "users";
 
    // object properties
    public $id;
    public $username;
    public $first_name;
    public $last_name;
    public $email;
    public $password;
 
    public function __construct($db){
        $this->conn = $db;
    
    }
 
    // create user
    function create(){
 
        $query = "INSERT INTO
                    " . $this->table_name . "
                SET
                    username = :username, password = :password, first_name = :first_name, last_name = :last_name, email = :email";

 
        $stmt = $this->conn->prepare($query);
            if(empty($stmt))echo "foo";


        $stmt->bindParam("username", $this->username);
        $stmt->bindParam("password", $this->password);
        $stmt->bindParam("first_name", $this->first_name);
        $stmt->bindParam("last_name", $this->last_name);
        $stmt->bindParam("email", $this->email);
        
    
    if(!$stmt->execute()){
        echo "foo";
    }
 
}

function readAll($page, $from_record_num, $records_per_page){
 
    $query = "SELECT
                id, username, password, first_name, last_name, email
            FROM
                " . $this->table_name . "
            ORDER BY
                id ASC
            LIMIT
                {$from_record_num}, {$records_per_page}";
 
    $stmt = $this->conn->prepare( $query );
    $stmt->execute();
 
    return $stmt;
}

// paging user 
public function countAll(){
 
    $query = "SELECT id FROM " . $this->table_name . "";
 
    $stmt = $this->conn->prepare( $query );
    $stmt->execute();
 
    $num = $stmt->rowCount();
 
    return $num;
}

function readOne(){
 
    $query = "SELECT
                username, password, first_name, last_name, email
            FROM
                " . $this->table_name . "
            WHERE
                id = ?
            LIMIT
                0,1";
 
    $stmt = $this->conn->prepare( $query );
    $stmt->bindParam(1, $this->id);
    $stmt->execute();
 
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
 
    $this->username = $row['username'];
    $this->password = $row['password'];
    $this->first_name = $row['first_name'];
    $this->last_name = $row['last_name'];
    $this->email = $row['email'];
}

function update(){
 
    $query = "UPDATE
                " . $this->table_name . "
            SET
                username = :username,
                password = :password,
                first_name = :first_name,
                last_name  = :last_name,
                email = :email
            WHERE
                id = :id";
 
    $stmt = $this->conn->prepare($query);
 
    $stmt->bindParam(':username', $this->username);
    $stmt->bindParam(':password', $this->password);
    $stmt->bindParam(':first_name', $this->first_name);
    $stmt->bindParam(':last_name', $this->last_name);
    $stmt->bindParam(':email', $this->email);
    $stmt->bindParam(':id', $this->id);
 
    // execute the query
    if($stmt->execute()){
        return true;
    }else{
        return false;
    }
}

// delete the user
function delete($getID){

    $query = "DELETE FROM " . $this->table_name . " WHERE id = :id";
 
    $stmt = $this->conn->prepare($query);
    $stmt->bindParam('id', $getID , PDO::PARAM_INT);

    if($stmt->execute()){
        return true;
    }else{
        return false;
    }
}

}

//$objuser = new Users();
//echo $objuser->create();