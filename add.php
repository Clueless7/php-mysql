<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Document</title>
</head>

<body>
  <div class="container">
    <?php

      require('dbcon.php');
      $firstName = $_GET['firstName'];
      $lastName = $_GET['lastName'];
      $age = $_GET['age'];

      $query = "INSERT INTO $tableName (firstname, lastname, age) VALUES ('$firstName', '$lastName', '$age')";

      if (mysqli_query($conn, $query)) {
        echo "<h1 class='text-center'>Added successfully</h1>";
      } else {
        echo "<h1 class='text-center'>Error: " . $query . "<br>" . mysqli_error($conn) . "</h1>";
      }

      mysqli_close($conn);

      echo "</br>";
      echo "<h1 class='text-center'>Redirecting to home page</h1>";
      header('Refresh: 2; URL=index.php');
    ?>
  </div>
</body>

</html>