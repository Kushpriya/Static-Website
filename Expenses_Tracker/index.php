
<?php
require "./connect.php";
$sql = "select * from categories";
$result = mysqli_query($conn, $sql);
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
//var_dump($rows);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section>
<form action="connect.php" method="post">
    <h1>Add new </h1>
        <label>Entry type:</label>
        <select>
            <option value=""></option>
    <?php

    foreach ($rows as $value) 
    {
        //echo "<li>{$value['label']}</li>";
    
        echo"<option name='cate'>{$value['label']}</option>";
    }
    ?>
</select>
        <br>
        <br>
        <label>Name:</label>
        <input type="text" name="name">
        <br>
        <br>
        <label>Amount:</label>
        <input type ="number" name="amount">
        <br>
        <br>
        <button type="submit">Add Expense</button>
 </form>
    </section>
    
</body>
</html>

</ul>