
<?php
include('dbconn.php');

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $query = "DELETE FROM students WHERE id = '$id'";

    $result = mysqli_query($dbconnection, $query);

    if (!$result) {
        die("Delete failed: " . mysqli_error($dbconnection));
    } else {
        header("Location: index.php?delete_msg=Data deleted successfully");
        exit();
    }
}
?>


