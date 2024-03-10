<?php
// to get the connection string
require "./connect.php";

// get the value from the FORM
$data = $_POST['momo'];

// Insert the value to the database
mysqli_query($conn, "insert into momo (name) values ('$data')");

// Now redirect back to the index.php file
header('Location: /');