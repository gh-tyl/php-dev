<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>
    <div class="container">
      <div class="row justify-content-center align-items-center g-2">
        <div class="col">
          <div class="mb-3">
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
              <label for="fname" class="form-label">fname</label>
              <input type="text" class="form-control" name="fname" id="" aria-describedby="helpId" placeholder="">
              <label for="lname" class="form-label">lname</label>
              <input type="text" class="form-control" name="lname" id="" aria-describedby="helpId" placeholder="">
              <div class="mb-3">
                <label for="" class="form-label">City</label>
                <select class="form-select form-select-lg" name="gender" id="">
                  <option selected value="">Select one</option>
                  <option value="F">Female</option>
                  <option value="M">Male</option>
                  <option value="N">None-Binary</option>
                </select>
              </div>
              <div class="form-label">
                <input name="" id="" class="btn btn-primary" type="submit" value="Button">
              </div>
            </form>
          </div>
          <?php
          if (isset($_GET['fname'])) {
            echo "<h3>" . $_GET['fname'] . "</h3>";
          }
          if (isset($_GET['lname'])) {
            echo "<h3>" . $_GET['lname'] . "</h3>";
          }
          if (isset($_GET['gender'])) {
            echo "<h3>" . $_GET['gender'] . "</h3>";
          }
          // echo "<h3>" . $_SERVER['PHP_SELF'] . "</h3>";
          // echo "<h3>" . $_SERVER['SERVER_NAME'] . "</h3>";
          // echo "<h3>" . $_SERVER['HTTP_HOST'] . "</h3>";
          // echo "<h3>" . $_SERVER['HTTP_USER_AGENT'] . "</h3>";
          // echo "<h3>" . $_SERVER['REQUEST_METHOD'] . "</h3>";
          // echo "<h3>" . $_SERVER['REMOTE_ADDRESS'] . "</h3>";
          if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            echo ("<h3>POST</h3>");
            echo "<h3>" . $_POST['fname'] . "</h3>";
          }

          ?>
        </div>
      </div>
    </div>

  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>