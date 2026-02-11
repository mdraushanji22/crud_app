<?php

include('dbconn.php');

if (isset($_POST['add_data'])) {

    $fname = $_POST['f_name'];
    $lname = $_POST['l_name'];
    $age   = $_POST['age'];

    if ($fname == "" || empty($fname)) {

        header('location:index.php?message=You need to fill first name');
        exit();
    } else {

        $query = "INSERT INTO students (first_name, last_name, age)
                  VALUES ('$fname', '$lname', '$age')";

        $result = mysqli_query($dbconnection, $query);

        if (!$result) {
            die("Database Failed: " . mysqli_error($dbconnection));
        } else {
            header('location:index.php?insert_msg=Student data added successfully');
            exit();
        }
    }
}
