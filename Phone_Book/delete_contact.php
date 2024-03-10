<?php
var_dump($_POST['id']);
require 'connect.php';
var_dump($_POST['id']);
$id = $_POST['id'];
$Adsql = "DELETE FROM contacts WHERE ID='{$id}'";
mysqli_query($conn, $Adsql);
echo "done";
header('Location: /');
?>