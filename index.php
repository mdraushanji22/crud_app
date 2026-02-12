<?php include('header.php') ?>
<?php include('dbconn.php') ?>
<div class="box1">
    <h2>ALL STUDENTS</h2>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">ADD STUDENTS</button>
</div>

<table class=" table table-striped table-hover table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Age</th>
            <th>Update</th>
            <th>Delete</th>

        </tr>
    </thead>
    <tbody>
        <?php
        // Read data
        $sql = "SELECT * FROM students";
        $result = mysqli_query($dbconnection, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {

        ?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['first_name'] ?></td>
                    <td><?php echo $row['last_name'] ?></td>
                    <td><?php echo $row['age'] ?></td>
                    <td><a href="update.php?id=<?php echo $row['id'] ?>" class="btn btn-success">Update</a></td>
                    <td><a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger btn-sm"
                            onclick="return confirm('Are you sure you want to delete this record?');">
                            Delete</a></td>

                </tr>
        <?php
            }
        }
        ?>
    </tbody>
</table>
<br>
<br>
<?php
if (isset($_GET['message'])) {
    echo "<h6>" . $_GET['message'] . "</h6>";
}
?>
<?php
if (isset($_GET['insert_msg'])) {
    echo "<h5 class='h-green'>" . $_GET['insert_msg'] . "</h5>";
}
?>
<?php
if (isset($_GET['update_msg'])) {
    echo "<h5 class='h-green1'>" . $_GET['update_msg'] . "</h5>";
}
?>
<?php
if (isset($_GET['delete_msg'])) {
    echo "<h5 class='h-red'>" . $_GET['delete_msg'] . "</h5>";
}
?>


<form action="insert_data.php" method="post">
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ADD STUDENT</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="f_name">First Name</label>
                        <input type="text" name="f_name" class="form-control" placeholder="Enter First Name">
                    </div>
                    <div class="form-group">
                        <label for="l_name">Last Name</label>
                        <input type="text" name="l_name" class="form-control" placeholder="Enter Last Name">
                    </div>
                    <div class="form-group">
                        <label for="age">Age</label>
                        <input type="text" name="age" class="form-control" placeholder="Enter Your Age">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <input type="submit" name="add_data" value="ADD" class="btn btn-success">
                </div>
            </div>
        </div>
    </div>
</form>

<?php include('footer.php') ?>