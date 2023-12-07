<!DOCTYPE html>
<html>

<head>
  <title>Simple PHP Example</title>
</head>

<body>
  <img src="{{ asset('images/web_centric_snippet.jpg') }}" alt="Snippet" height=900px">

  <h1>Welcome to My Website</h1>

  <?php
  $products = [['name' => 'Product 1', 'price' => 19.99], ['name' => 'Product 2', 'price' => 29.99], ['name' => 'Product 3', 'price' => 39.99]];
  ?>

  <h2>Products:</h2>
  <ul>
    <?php foreach ($products as $product): ?>
    <li><?php echo $product['name']; ?> - $<?php echo $product['price']; ?></li>
    <?php endforeach; ?>
  </ul>

  <?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $name = $_POST['name'];
      $email = $_POST['email'];
      echo "<p>Received form submission with Name: $name and Email: $email</p>";
  }
  ?>

  <h2>Submit Form:</h2>
  <form method="POST" action="">
    <label for="name">Name:</label>
    <input type="text" name="name" required><br><br>
    <label for="email">Email:</label>
    <input type="email" name="email" required><br><br>
    <input type="submit" value="Submit">
  </form>

</body>

</html>
