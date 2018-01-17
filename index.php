<?php
  // if(!isset($_COOKIE['userLogin'])) {
  //   header('Location: login.php');
  //   // setcookie('userLogin', $username, time() + 3600);
  // }

  $con = mysqli_connect("localhost", "root", "110110@", "phpproject");

  $username = $_POST['username'];
  $password = $_POST['password'];

  $qSelect = "SELECT * FROM user WHERE username=". "'". $username. "'". " AND password=$password";

  $result = mysqli_query($con, $qSelect);

  if(!$result || mysqli_num_rows($result) <= 0) {
    header('Location: login.php');
  }

  if(!isset($_COOKIE['userLogin'])) {
    // header('Location: login.php');
    setcookie('userLogin', $username, time() + 3600);
  }
  else {
    // setcookie('userLogin', $username, time() + 3600);
  }
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
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
  <!-- <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet"> -->

  <!-- Custom CSS -->
  <link href="css/main.css" rel="stylesheet" />
</head>

<body id="page-top background">
  <!-- Nav -->
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">WebSiteName</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Page 1</a></li>
        <li><a href="#">Page 2</a></li>
        <li><a href="#">Page 3</a></li>
      </ul>
    </div>
  </nav>


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
