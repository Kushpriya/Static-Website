<?php
//create the database called -> foods
//database ko field ->id(int)PK,AI,,name(varchar) ,created at timestamp,updated at timestamp
//Insert 4 rows
//phpinfo();
// echo "<pre>";
// var_dump($conn);
// echo "</pre>";

echo "connection success ";
echo"<br>";

require "./connect.php";
//fetching
$sql = "select * from momo";
$result = mysqli_query($conn, $sql);
$rows = mysqli_fetch_all($result, MYSQLI_BOTH);

// echo"<pre>";
// var_dump($result);
// echo "</pre>";
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
      <form action="add-momo.php" method="post">
        <input type="text" name="momo">
        <button type="submit">Add 🛒</button>
      </form>
    </section>

</body>
</html>



<ul>
    <?php
    foreach ($rows as $value) 
    {
        //var_dump($value);
        echo "<li>{$value['name']}</li>";
    }
    ?>
</ul>