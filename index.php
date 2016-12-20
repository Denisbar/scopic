<?php
// include database and object files
include_once 'config/database.php';
include_once 'object/users.php';
$page_title = "View Users";
include_once "header.php";



echo "<div class='right-button-margin'>";
    echo "<a href='create_user.php' class='btn btn-default pull-right'>Create User</a>";
echo "</div>";

// page given in URL parameter, default page is one
$page = isset($_GET['page']) ? $_GET['page'] : 1;

// set number of records per page
$records_per_page = 10;
$from_record_num = ($records_per_page * $page) - $records_per_page;

$database = new Database();
$db = $database->getConnection();

$user = new Users($db);

// query user
$stmt = $user->readAll($page, $from_record_num, $records_per_page);
$num = $stmt->rowCount();

// display the user if there are any
if($num>0){



    echo "<table class = 'table table-hover table-responsive table-bordered'>";
        echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>User Name</th>";
            echo "<th>Password</th>";
            echo "<th>First Name</th>";
            echo "<th>Last Name</th>";
            echo "<th>Email</th>";
        echo "</tr>";

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){

            extract($row);

            echo "<tr>";
                echo "<td>{$id}</td>";
                echo "<td>{$username}</td>";
                echo "<td>{$password}</td>";
                echo "<td>{$first_name}</td>";
                echo "<td>{$last_name}</td>";
                echo "<td>{$email}</td>";
                echo "<td>";

                echo "</td>";

                echo "<td>";

                echo "<a href='update_users.php?id={$id}' class='btn btn-default left-margin'>Edit</a>";
                echo "<a href='delete_user.php?id={$id}' class='btn btn-default delete-object'>Delete</a>";
                echo "</td>";

            echo "</tr>";

        }

    echo "</table>";

    // paging buttons
}

// tell the user there are no Users
else{
    echo "<div>No users found.</div>";
}

echo "<td>";
    // edit and delete button is here
    echo "<a href='update_users.php?id={$id}' class='btn btn-default left-margin'>Edit</a>";
    echo "<a href='delete_user.php?id={$id}' class='btn btn-default delete-object'>Delete</a>";
echo "</td>";
include_once 'paging_users.php';
?>

<!--<script>-->
<!--$(document).on('click', '.delete-object', function(){-->
<!---->
<!--    var id = $(this).attr('delete-id');-->
<!--    var q = confirm("Are you sure?");-->
<!---->
<!--    if (q == true){-->
<!---->
<!--        $.post('delete_user.php', {-->
<!--            object_id: id-->
<!--        }, function(data){-->
<!--            location.reload();-->
<!--        }).fail(function() {-->
<!--            alert('Unable to delete.');-->
<!--        });-->
<!---->
<!--    }-->
<!---->
<!--    return false;-->
<!--});-->
<!--</script>-->
<?php
include_once "footer.php";
?>
