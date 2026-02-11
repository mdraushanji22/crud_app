<?php
define("HOSTNAME", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");
define("DATABASE", "crud_operation");

$dbconnection = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);

if (!$dbconnection) {
    die("Database failed");
}
