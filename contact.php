<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="this is a PHP Lesson Project" />
  <meta name="author" content="ali ramezani" />

  <title>Ali Ramezani</title>

  <!-- Bootstrap Core CSS -->
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css" />

  <!-- Custom Fonts -->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
  <link href="vendor/font/droid-naskh.css" rel="stylesheet" type="text/css" />

  <!-- Custom CSS -->
  <link href="css/main.css" rel="stylesheet" />
</head>

<body id="page-top" class="background">
  <!-- Nav -->
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">
          <?php
            if ($_POST) {
              echo $username;
            }
            else {
              echo $_COOKIE['userLogin'];
            }
          ?>
        </a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="search.php">Search</a></li>
        <li><a href="contact.php">Contact Me</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="show-ip">
          <?php
            echo $_SERVER['SERVER_ADDR'];
          ?>
        </li>
        <li class="show-date">
          <?php
            include_once 'vendor/jdf.php';
            $date = jdate("l، j F Y، H:i:s A");
            echo $date;
          ?>
        </li>
        <li><a href="login.php"><span class="glyphicon glyphicon-user"></span> Sign Out</a></li>
      </ul>
    </div>
  </nav>

  <div class="container-fluid">
    <div class="main col-md-12">
      <div class="content contact">
        <div>
          PHP Lesson Project
        </div>
        <div>
          Master: <a href="http://www.hhosseini.net/">Mr. Hosseini</a>
        </div>
        <div>
          Ali Ramezani
        </div>
      </div>
    </div>
  </div>

  <!--Footer-->
  <footer class="footer-copyright">
    <a href="https://github.com/alirni"> Ali Ramezani </a> © <?php echo date("Y"); ?> all rights reserved :)
  </footer>
</body>

</html>
