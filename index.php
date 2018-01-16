<?php
  $con = mysqli_connect("localhost", "root", "110110@", "phpproject");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="this is a PHP Lesson Project" />
  <meta name="author" content="ali ramezani" />

  <title>Ali Ramezani</title>

  <!-- Bootstrap Core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Custom Fonts -->
  <!-- <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"> -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
  <!-- <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet"> -->

  <!-- Custom CSS -->
  <link href="css/main.css" rel="stylesheet" />

</head>

<body id="page-top">
  <!-- Header -->
  <header class="masthead d-flex">
    <?php
      $username = $_POST['username'];
      $password = $_POST['password'];

      $qSelect = "SELECT * FROM user WHERE username=". "'". $username. "'". " AND password=$password";

      $result = mysqli_query($con, $qSelect);
    ?>
    <div class="container text-center my-auto">
      <?php
        if(!$result || mysqli_num_rows($result) <= 0) {
          echo "result: ". $result;
          echo "errooooor";
        }
        else {
          echo "true";
        }
      ?>
    </div>
  </header>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/stylish-portfolio.min.js"></script>

</body>

</html>
