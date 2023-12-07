<!DOCTYPE html>
<html>

<head>
  <title>PHP Integration with HTML</title>
</head>

<body>
  <img src="{{ asset('images/easy_integration.jpeg') }}" alt="Snippet" height=900px">

  <h1>Welcome to Our Website</h1>

  <?php
  $username = 'John Doe';
  $userRole = 'Administrator';
  $userAge = 30;
  ?>

  <div>
    <p>Hello, <?php echo $username; ?>!</p>
    <p>Your role: <?php echo $userRole; ?></p>
    <p>Your age: <?php echo $userAge; ?></p>
  </div>

  <hr>

  <h2>Looping Example</h2>
  <ul>
    <?php
    $fruits = ['Apple', 'Banana', 'Orange', 'Grapes', 'Strawberry'];

    foreach ($fruits as $fruit) {
        echo "<li>$fruit</li>";
    }
    ?>
  </ul>

</body>

</html>
