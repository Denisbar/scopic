<?php
$page_title = "Update User";
include_once "header.php";

echo "<div class='right-button-margin'>";
echo "<a href='index.php' class='btn btn-default pull-right'>View Users</a>";
echo "</div>";

// get ID of the user to be edited
$id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: missing ID.');
 
// include database and object files
include_once 'config/database.php';
include_once 'object/users.php';
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare user object
$user = new Users($db);
 
// set ID property of user to be edited
$user->id = $id;
 
// read the details of user to be edited
$user->readOne();
?>
<?php
// if the form was submitted
if($_POST){
 
    // set user property values
    $user->id = $_POST['id'];
    $user->name = $_POST['username'];
    $user->password = $_POST['password'];
    $user->first_name = $_POST['first_name'];
    $user->last_name = $_POST['last_name'];
    $user->email = $_POST['email'];
 
    // update the user
    if($user->update()){
        echo "<div class=\"alert alert-success alert-dismissable\">";
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>";
            echo "User was updated.";
        echo "</div>";
    }
 
    // if unable to update the user
    else{
        echo "<div class=\"alert alert-danger alert-dismissable\">";
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>";
            echo "Unable to update user_error().";
        echo "</div>";
    }
}
?>
<form action='update_users.php?id=<?php echo $id; ?>' method='post'>
 
    <table class='table table-hover table-responsive table-bordered'>
 
        <tr>
            <td>User Name</td>
            <td><input type='text' name='name' value='<?php echo $user->username; ?>' class='form-control' required></td>
        </tr>
 
        <tr>
            <td>Password</td>
            <td><input type='text' name='price' value='<?php echo $user->password; ?>' class='form-control' required></td>
        </tr>
 
        <tr>
            <td>First Name</td>
            <td><input type='text' name='price' value='<?php echo $user->first_name; ?>' class='form-control' required></td>
        </tr>
 
 
        <tr>
            <td>Last Name</td>
            <td><input type='text' name='price' value='<?php echo $user->last_name; ?>' class='form-control' required></td>
        </tr>
 
 		<tr>
            <td>Email</td>
            <td><input type='text' name='price' value='<?php echo $user->email; ?>' class='form-control' required></td>
        </tr>
 

        <tr>
            <td></td>
            <td>
                <input type="submit" class="btn btn-primary" value="Update">
            </td>
        </tr>
 
    </table>
</form>