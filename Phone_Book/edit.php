<?php
require 'connect.php';
echo "{$_POST['fi']}";
$editQuery = "UPDATE contacts
SET first_name = '{$_POST['fi']}', middle_name = '{$_POST['mi']}', last_name = '{$_POST['la']}', phone_number = '{$_POST['nu']}'
WHERE ID = '{$_POST['i']}'";
mysqli_query($conn,$editQuery);
header('Location: /');
// echo "edited";
?>