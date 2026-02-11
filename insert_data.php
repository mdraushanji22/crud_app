<?php
if (isset($_POST['add_data'])) {

    $fname = $_POST['f_name'];
    $lname = $_POST['l_name'];
    $age = $_POST['age'];

    if ($fname == "" || empty($fname)) {
        header('location:index.php?message=You need to fill first name');
    }
}
