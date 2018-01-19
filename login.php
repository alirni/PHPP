<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="this is a PHP Lesson Project" />
  <meta name="author" content="ali ramezani" />

  <title>SIGN IN</title>

  <!-- Bootstrap Core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Custom Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />

  <!-- Custom CSS -->
  <link href="css/main.css" rel="stylesheet" />

</head>

<body id="page-top">
  <!-- Header -->
  <header class="masthead d-flex">
    <div class="container text-center my-auto">
      <h1 class="mb-1">Ali Ramezani</h1>
      <h3 class="mb-5">
        <em><a href="https://github.com/alirni/PHPP">PHP Lesson Project</a></em>
      </h3>
      <form action="index.php" method="post">
        <div class="login-container">
          <h2>SIGN IN TO YOUR ACCOUNT</h2>
          <div class="input-container">
            <input type="text" placeholder="username" class="email text-input" name="username">
            <!-- <div class="input-icon envelope-icon-acount"><span class="fontawesome-envelope scnd-font-color"></span></div> -->
          </div>
          <div class="input-container">
            <input type="password" placeholder="Password" class="password text-input" name="password">
            <!-- <div class="input-icon password-icon"><span class="fontawesome-lock scnd-font-color">aa</span></div> -->
          </div>
          <input class="btn btn-primary btn-xl js-scroll-trigger signin-btn" type="submit" value="SIGN IN"/>
        </div>
      </form>
    </div>
  </header>
</body>

</html>
