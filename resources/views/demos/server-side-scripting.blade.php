<!DOCTYPE html>
<html>

<head>
  <title>Dynamic Content with PHP</title>
</head>

<body>
  <img src="{{ asset('images/server_side_scripting.jpeg') }}" alt="Snippet" height=900px">

  <h1>Dynamic Content Example</h1>

  <?php
  $currentDate = date('Y-m-d H:i:s');
  $visitorIP = $_SERVER['REMOTE_ADDR'];
  $randomNumber = rand(1, 100);
  ?>

  <p>Current Date and Time: <?php echo $currentDate; ?></p>
  <p>Your IP Address: <?php echo $visitorIP; ?></p>
  <p>Random Number: <?php echo $randomNumber; ?></p>

</body>

</html>
