<?php
session_start();
$shopping_list = $_SESSION['manjan'];

?>

<!-- <?php

//$shopping_list = ["Buy beer 🍺", "Buy chicken 🍗","samosa"];

// echo "<pre>";
// var_dump($shopping_list);
// echo "</pre>";

?> -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Do the Shopping!</title>
</head>

<body>
  <main>
    <h1>Lets GOOOOO Shopping 🛒</h1>
    <!-- Form to submit -->
    <section>
      <form action="/add-to-cart.php" method="post">
        <input type="text" name="shopping">
        <button type="submit">Add to Cart 🛒</button>
      </form>
    </section>
    <section>
      <h4>Shopping list here 👇</h4>
      <ul>
      <?php
        foreach ($shopping_list as $value) {
          echo "<li>{$value}</li>";
        }
        ?>
      </ul>
    </section>
  </main>
</body>

</html>