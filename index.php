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
    setcookie('userLogin', $username, time()+6800);
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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />

  <!-- Custom Fonts -->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
  <!-- <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet"> -->

  <!-- Custom CSS -->
  <link href="css/main.css" rel="stylesheet" />
</head>

<body id="page-top" class="background">
  <!-- Nav -->
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Ali Ramezani</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="search.php">Search</a></li>
        <li><a href="contact.php">Contact Me</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login.php"><span class="glyphicon glyphicon-user"></span> Sign Out</a></li>
      </ul>
    </div>
  </nav>

  <!-- Bootstrap core JavaScript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
