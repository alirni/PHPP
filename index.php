<?php
  if ($_POST) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $con = mysqli_connect("localhost", "root", "110110@", "phpproject");
    $qSelect = "SELECT * FROM user WHERE username=". "'". $username. "'". " AND password=$password";
    $result = mysqli_query($con, $qSelect);

    if(!$result || mysqli_num_rows($result) <= 0) {
      header('Location: login.php');
    }
    else {
      setcookie('userLogin', $username, time()+ 3600);
    }
  }

  if(!isset($_COOKIE['userLogin'])) {
    header('Location: login.php');
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
    <div class="main col-md-8">
      <div class="content">
        <div class="mycollapse">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, voluptate. Quia dicta harum fugit, facilis consequatur iure, doloribus quisquam officia veritatis voluptatum enim numquam magni consectetur eveniet aliquam odit exercitationem vel illo dolor animi debitis reiciendis ut porro. Quisquam ex quidem quia optio fuga. Nobis, iure. Id a repellat quo?</p>
          <p>Facilis accusamus quo omnis aliquid. Perferendis illum atque earum officia eaque minima commodi voluptate praesentium tempore, odio quo aliquid maiores quasi explicabo blanditiis quaerat magni quia vero. Iusto ex unde nihil architecto distinctio consequatur quidem veritatis aperiam maiores accusamus suscipit soluta, sunt eveniet ullam neque laboriosam! Consequatur nam unde mollitia.</p>
          <p>Exercitationem magnam rem sequi voluptatibus ab velit repudiandae magni dignissimos eligendi iste eaque maxime, doloribus quasi quas enim eius, architecto explicabo minima natus facilis id aut? Dolorum quis voluptates natus, veniam praesentium sit, voluptate illo debitis fugit ea, repudiandae a totam quo. Explicabo nesciunt delectus minus, alias nulla architecto voluptas!</p>
          <p>Commodi, tenetur aliquam harum inventore iure optio quisquam nesciunt illo facilis impedit sint vel! Odit voluptates molestiae impedit. Maxime incidunt facilis ea sunt cum harum id corrupti dolor sed sapiente, vitae necessitatibus pariatur. Soluta iusto voluptates esse rerum placeat cum vero blanditiis culpa reprehenderit sequi illum itaque, ratione error iste!</p>
          <p>Quibusdam, eveniet. Suscipit magnam architecto impedit commodi dolorum illum, reiciendis rerum quasi, recusandae tenetur cum quas omnis quibusdam hic enim quaerat quisquam iure, vitae sint neque? Enim minus soluta obcaecati possimus, vel voluptas in neque exercitationem alias sunt quidem eius dicta, cumque reiciendis ipsum facere adipisci mollitia culpa praesentium blanditiis!</p>
          <p>Eveniet consequatur placeat recusandae libero voluptatem beatae quod at repellendus quis facere, itaque dolores animi praesentium? Eaque cupiditate eius debitis dolorum enim, unde natus doloremque labore expedita illo tempora nemo accusamus rerum, porro mollitia totam eum, a iste nam architecto odio beatae dignissimos tenetur? Quaerat nemo expedita voluptates? Voluptas, enim.</p>
          <p>Saepe alias magni, voluptate dolores, doloribus aliquam, amet ipsum beatae cum quidem odit distinctio dicta harum laborum explicabo tempore ab eaque nisi animi sit vitae! Provident voluptate quis repellendus consequuntur accusantium tenetur doloremque quisquam recusandae? Veritatis blanditiis, laborum reiciendis tenetur nam, ab enim illum, voluptatum possimus odio esse deleniti iure?</p>
          <p>Assumenda quos consequatur culpa dicta quo debitis laborum, iste suscipit, velit totam fugiat enim magni molestiae dolorem repellendus blanditiis provident? Perspiciatis adipisci dolore sapiente accusantium eum, in iusto quae harum. Cum voluptate pariatur dolorum beatae quisquam aliquam quos dignissimos, amet id blanditiis nihil ab iste? Vitae asperiores illo eligendi molestias?</p>
          <p>Labore repudiandae id iste debitis sint fugiat itaque quas voluptas impedit recusandae ad repellendus enim natus explicabo quaerat, iusto, nihil perspiciatis! Accusantium distinctio incidunt quaerat eaque libero, cupiditate quia illum aliquam in nam. Odio, officiis aperiam consequatur nemo veritatis facere beatae a aliquam ratione tempore voluptate nulla enim expedita ea?</p>
          <p>Repellendus officiis beatae vel odio suscipit dolor accusantium ex, tenetur, assumenda, harum facere? Obcaecati voluptatibus sint odio neque repellat reiciendis. Voluptates pariatur quas eos deleniti odit molestiae eveniet dolorem vitae temporibus at, repudiandae laboriosam, quia nemo amet reiciendis consequuntur, fuga recusandae! Cum nihil, sunt autem sed deserunt modi officia ut.</p>
          <p>Incidunt excepturi amet iusto fuga, harum sequi? Quidem tempora harum maxime reprehenderit doloribus deleniti autem. Omnis aperiam eaque, soluta deserunt odio cupiditate deleniti voluptatem debitis explicabo in beatae quidem nobis quibusdam provident quas fuga inventore eum suscipit consequatur dolores eius impedit quos a. Officiis accusamus dolore nostrum quaerat repellat delectus!</p>
          <p>Magni fugiat quasi eos repudiandae, vitae saepe laborum facilis explicabo cum sequi? Expedita excepturi pariatur tenetur aliquid vel in obcaecati reprehenderit totam consequuntur ratione? Tenetur ullam nesciunt tempora cupiditate consequatur. Nihil obcaecati totam maxime voluptates iusto vel, commodi temporibus quas accusantium assumenda eos dolores voluptas, harum quisquam officiis odit in.</p>
          <p>Perferendis id maiores aliquid, omnis corrupti vitae consequatur, a perspiciatis quaerat quia cumque placeat dolorem ducimus non soluta error quae nemo, eos illo voluptates quisquam odit debitis magni quas! Modi esse omnis fugiat similique nesciunt, nam beatae eligendi! Debitis distinctio facilis quas libero cupiditate tempore accusantium adipisci dolorum. Minus, placeat?</p>
          <p>Optio quibusdam veniam velit voluptates laborum quod dolorem, inventore tenetur beatae. Ipsa consequuntur veritatis maiores, impedit maxime dolore molestias similique soluta excepturi deserunt! Quo quaerat nobis harum libero beatae quia earum corrupti sapiente illum voluptates vel maxime, pariatur consequatur atque facilis tempore maiores nihil numquam sequi quos neque veritatis dicta.</p>
          <p>Quod voluptate magnam praesentium ut impedit sequi tempora architecto nostrum voluptatem doloremque. Dolor doloremque mollitia error eum delectus. Facere provident, cum reiciendis quidem odio a ea fugiat vero commodi, omnis illum odit quisquam quis qui minima tempora soluta inventore, esse voluptate ducimus quas. Temporibus vero reiciendis iusto! Molestiae, eveniet asperiores.</p>
        </div>
      </div>
    </div>
    <div class="slidebar col-md-4">
      <div class="content">
        <form action="search.php" method="post">
          <textarea class="search-text" name="search" id=""></textarea>
          <div class="col-md-6 search-box">
            <input type="text" placeholder="search key" class="text-input" name="searchkey">
          </div>
          <div class="col-md-6 search-box">
            <input type="color" name="color">
          </div>
          <div class="">
            <input class="btn-primary search-btn" type="submit" value="Search"/>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!--Footer-->
  <footer class="footer-copyright">
    <a href="https://github.com/alirni"> Ali Ramezani </a> © <?php echo date("Y"); ?> all rights reserved
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
