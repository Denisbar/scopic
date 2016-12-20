<?php


// check if value was posted
if(true){
 echo "foo";
    echo $_GET['id'];
    // include database and object file
    include_once 'C:\www\scopic\config\database.php';
    include_once 'C:\www\scopic\object\users.php';
    // get database connection
    $database = new Database();
    $db = $database->getConnection();
 
    // prepare user object
    $u = new Users($db);
 
    // set user id to be deleted
    $u->id = $_GET['id'];
    $q = $u->id;
 
    // delete user
    if($u->delete($q)){
        $a = $u->id;
        echo "Object was deleted.";
        //echo $_POST['id'];
    }
 
    // if unable to delete user
    else{
        echo "Unable to delete object.";
 
    }
}
?>