<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Home</title>
</head>

<body>
  <div class="container">
    <h1 class="text-center">Table Data</h1>
    <div class="mb-3 row">
      <?php
        include('view.php');
      ?>
    </div>

    <h1 class="text-center">Add data</h1>
    <form action="add.php" method="get">
      <div class="row">
        <div class="col mb-3">
          <label class="form-label" for="firstName">First name:</label>
          <input class="form-control" type="text" name="firstName" id="firstName" />
        </div>

        <div class="col mb-3">
          <label class="form-label" for="lastName">Last name:</label>
          <input class="form-control" type="text" name="lastName" id="lastName" />
        </div>

        <div class="col mb-3">
          <label class="form-label" for="age">Age:</label>
          <input class="form-control" type="text" name="age" id="age" />
        </div>

        <div class="col mb-3 d-flex justify-content-around align-items-end">
          <button class="btn-primary w-75 h-50" type="submit">Submit</button>
          <button class="btn-secondary w-75 h-50" type="reset">Clear</button>
        </div>
      </div>
    </form>

    <h1 class="text-center">Delete data by Id</h1>
    <form action="delete.php" method="get">
      <div class="row">
        <div class="col-7 mb-3">
          <label class="form-label" for="id">Id:</label>
          <input class="form-control" type="number" name="id" id="id" />
        </div>

        <div class="col mb-3 d-flex justify-content-around align-items-end">
          <button class="btn-primary w-75 h-50" type="submit">Submit</button>
          <button class="btn-secondary w-75 h-50" type="reset">Clear</button>
        </div>
      </div>
    </form>

    <h1 class="text-center">Edit Age by Id</h1>
    <form action="edit.php" method="get">
      <div class="row">
        <div class="col mb-3">
          <label class="form-label" for="idEdit">Id:</label>
          <input class="form-control" type="number" name="idEdit" id="idEdit" />
        </div>

        <div class="col mb-3">
          <label class="form-label" for="age">Age:</label>
          <input class="form-control" type="number" name="age" id="age" />
        </div>
      </div>
      <div class="row">
        <div class="col mb-3 d-flex justify-content-around">
          <button class="btn-primary w-75" type="submit">Submit</button>
          <button class="btn-secondary w-75" type="reset">Clear</button>
        </div>
      </div>



    </form>
  </div>
</body>

</html>