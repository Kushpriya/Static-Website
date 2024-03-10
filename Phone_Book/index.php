<?php
require './connect.php';
$sqlQuery = 'select * from contacts';
$phone_data = mysqli_query($conn,$sqlQuery);
$result = mysqli_fetch_all($phone_data,MYSQLI_ASSOC);
// var_dump($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="add_contact.php" method="post">
        <input type='text' name='first-name' placeholder='Enter First Name'>
        <br>
        <br>

        <input type='text' name='middle-name' placeholder='Middle Name'>
        <br>
        <br>

        <input type='text' name='last-name' placeholder='Last Name'>
        <br>
        <br>

        <input type='text' name='phone' placeholder='Phone Number'>

        <br>
        <br>

        <button type="submit">Add</button>
    
    <div>
        <ul>
            <?php
            foreach ($result as $d) {
                echo "<li>{$d['first_name']} {$d['last_name']} {$d['phone_number']}</li>
                <form action='delete_contact.php' method='post'>
                <input type='hidden' name='id' value={$d['id']}>
                <button type='submit'>Delete</button>
                </form>
            <form action='edit_contact.php' method='post'>
                <input type='hidden' name='id' value={$d['id']}>
                <input type='hidden' name='first' value={$d['first_name']}>
                <input type='hidden' name='mid' value={$d['middle_name']}>
                <input type='hidden' name='last' value={$d['last_name']}>
                <input type='hidden' name='number' value={$d['phone_number']}>
                <button type='submit'>Edit</button>
            </form>";
            }
            
            ?>
            
        </ul>
    </div>
</body>
</html>