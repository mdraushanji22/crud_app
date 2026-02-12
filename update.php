<?php include('header.php') ?>
<?php include('dbconn.php') ?>

<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "select * from `students` where `id`='$id'";
    $result = mysqli_query($dbconnection, $query);

    if (!$result) {
        die("query failed" . mysqli_error($dbconnection));
    } else {
        $row = mysqli_fetch_assoc($result);
    }
}

?>
<?php
if (isset($_POST['update_data'])) {

    if (isset($_GET['new_id'])) {
        $newid = $_GET['new_id'];
    }

    $fname = $_POST['f_name'];
    $lname = $_POST['l_name'];
    $age   = $_POST['age'];

    $query = "update `students` set 
    `first_name`='$fname',`last_name`='$lname',`age`='$age' where `id`='$newid'";

    $result = mysqli_query($dbconnection, $query);

    if (!$result) {
        die("Update failed" . mysqli_error($dbconnection));
    } else {
        header('location:index.php?update_msg=You have updated successfully data');
    }
}

?>

<form action="update.php?new_id=<?php echo $id; ?>" method="post">
    <div class="form-group">
        <label for="f_name">First Name</label>
        <input type="text" name="f_name" class="form-control" value="<?php echo $row['first_name']; ?>">
    </div>
    <div class="form-group">
        <label for="l_name">Last Name</label>
        <input type="text" name="l_name" class="form-control" value="<?php echo $row['last_name']; ?>">
    </div>
    <div class="form-group">
        <label for="age">Age</label>
        <input type="text" name="age" class="form-control" value="<?php echo $row['age']; ?>">
    </div>
    <br>
    <input type="submit" name="update_data" value="UPDATE" class="btn btn-success">
</form>
<?php include('footer.php') ?>