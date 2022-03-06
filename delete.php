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
      $id = $_GET['id'];

      $query = "DELETE FROM $tableName WHERE id = $id";

      if (mysqli_query($conn, $query)) {
        echo "<h1 class='text-center'>Record deleted successfully</h1>";
      } else {
        echo "<h1 class='text-center'>Error deleting record: " . mysqli_error($conn) . "</h1>";
      }

      mysqli_close($conn);

      echo "</br>";
      echo "<h1 class='text-center'>Redirecting to home page</h1>";
      header('Refresh: 2; URL=index.php');

    ?>
  </div>
</body>

</html>