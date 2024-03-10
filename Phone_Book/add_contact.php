<?php
require 'connect.php';
$f_name = $_POST['first-name'];
$m_name = $_POST['middle-name'];
$l_name = $_POST['last-name'];
$phone = $_POST['phone'];
var_dump($f_name);
$Addsql = "insert into contacts (first_name,middle_name,last_name,phone_number) 
values ('$f_name','$m_name','$l_name','$phone')";
mysqli_query($conn, $Addsql);
echo "done";
header('Location: /');
?>