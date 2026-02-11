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
                </tr>
        <?php
            }
        }
        ?>

        <tr>
            <td>3</td>
            <td>Vikesh</td>
            <td>Kumar</td>
            <td>25</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Nabeel</td>
            <td>Khan</td>
            <td>7</td>
        </tr>
    </tbody>
</table>
<br>
<br>
<?php
if (isset($_GET['message'])) {
    echo "<h6>" . $_GET['message'] . "</h6>";
}
?>

<form action="insert_data.php" method="post">
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="f_name">First Name</label>
                        <input type="text" name="f_name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="l_name">Last Name</label>
                        <input type="text" name="l_name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="age">Age</label>
                        <input type="text" name="age" class="form-control">
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