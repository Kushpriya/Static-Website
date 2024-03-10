<?php
require 'connect.php';
$id = $_POST['id'];
$first = $_POST['first'];
$mid = $_POST['mid'];
$last = $_POST['last'];
$number = $_POST['number'];
//header('Location: /');
echo "$id";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
    <?php
    echo "<form action='edit.php' method='post'>
    <input type='hidden' name='i' value='{$id}'>
    <input type='text' name='fi' value='{$first}'>
    <input type='text' name='mi' value='{$mid}'>
    <input type='text' name='la' value='{$last}'>
    <input type='text' name='nu' value='{$number}'>
    <button type=submit>Edit</button>
    </form>";
    ?>
</body>
</html>