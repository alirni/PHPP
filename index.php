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

  <script type="text/javascript" src="vendor/jquery/jquery.min.js"></script>
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
    <div class="main col-md-8">
      <div class="content">
        <div class="mycollapse">
          <?php
            $str = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae in aut dolorum aliquid rerum ea. Deleniti minima odio expedita at voluptatem, nam eius rem fugiat laborum pariatur quod modi eligendi. Ab quidem eligendi, a rerum aliquid temporibus nisi. Cumque sit eligendi rem, nisi odit at dolor, ab pariatur vero, optio illo dolore ducimus. Optio, expedita! Voluptas fugit dolorum natus, suscipit, possimus nam et dolor fugiat enim atque aspernatur facere facilis consequatur obcaecati voluptatibus quae provident ipsum beatae quibusdam itaque harum. Possimus culpa architecto aliquam quam. Ad, perspiciatis corporis tempora sint quibusdam autem labore consequatur quae totam harum magni, ducimus explicabo.";
            $strArr = str_split($str);

            for ($i = 0; $i < count($strArr); $i++) {
              echo $strArr[$i];
            }
            echo "</br>";
            echo '<div id="content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero commodi quam corrupti vitae atque ullam facilis et voluptate voluptatem. Iste dolore porro ipsam, quidem quibusdam magni minus fuga numquam, illum laborum, voluptatum officia? Excepturi ab modi blanditiis, architecto porro dolores ut consectetur sed delectus minus animi corporis doloremque labore illum ipsum officiis aspernatur velit odit numquam nihil dolorem veniam officia quos. Rem illo incidunt aspernatur rerum repellat omnis quasi cupiditate nisi ipsum? Laborum est tempore nulla ducimus doloremque totam quod minus repellendus architecto officia harum adipisci, distinctio porro modi voluptatem debitis voluptate praesentium vero expedita eaque error non sapiente possimus odio? Consequuntur nulla deserunt dolorem beatae libero. Qui exercitationem delectus consectetur dicta eveniet. Accusamus iusto quaerat neque excepturi rerum fugiat beatae quidem sed adipisci exercitationem quod, veritatis, sapiente tempora reprehenderit. Laboriosam atque voluptates exercitationem a ipsa alias labore dolorem minus voluptatibus animi dignissimos soluta et vero possimus nemo magnam assumenda, perspiciatis sint? Quia iste quasi cumque minus quidem, at, dolorem qui rerum in impedit, nemo quos dolor vitae soluta similique quo molestias. Alias explicabo animi deleniti quidem beatae harum dignissimos rerum doloribus soluta voluptatibus tenetur esse itaque, reiciendis optio totam qui ullam non! Magni, inventore, expedita corporis officiis quisquam dolore magnam perferendis minima ut, corrupti deserunt consectetur rerum quis omnis maiores. Iste in laboriosam accusamus repellendus? Distinctio rem exercitationem, eveniet asperiores hic, cum ut dicta, sunt repudiandae perferendis numquam eum harum dolorum consectetur ducimus maxime accusamus? Beatae dolorem veritatis perferendis similique numquam pariatur iusto reprehenderit veniam nemo aperiam, eius labore aut? Cupiditate ipsa est officia laudantium ad temporibus nisi, blanditiis ducimus architecto quos repudiandae numquam porro iste consectetur! Ullam veniam quos non. Explicabo molestiae excepturi animi neque, et sapiente modi reprehenderit quam dicta. Saepe nulla enim repellat beatae rem sapiente at, provident molestiae expedita exercitationem pariatur consequatur mollitia eius quidem maiores facere temporibus dolorum laudantium. Ratione placeat sapiente dolore consequatur fugiat cumque eaque inventore. Non necessitatibus perspiciatis dolorem ipsam, harum minus laborum quisquam asperiores, fuga voluptatem voluptatum sit reiciendis adipisci ducimus sequi distinctio commodi cum earum ullam expedita. Accusamus autem quo perferendis quaerat maiores amet sint, earum cum deserunt eaque beatae magni explicabo a voluptates perspiciatis corporis temporibus dolores modi nesciunt omnis, culpa facilis sed impedit quibusdam. Ea, ullam magni. Neque enim eligendi, facilis iusto animi officia dolorum! Quibusdam quam corporis perspiciatis qui ab unde, provident excepturi sint rerum expedita ducimus maiores, quasi, voluptates veniam odit. Error pariatur voluptate magnam, optio exercitationem incidunt enim ut culpa odit quisquam, dignissimos nisi nesciunt tenetur ipsam atque iusto veritatis cum tempora. Praesentium reprehenderit unde accusantium iure dicta vitae odio ullam exercitationem ratione, perspiciatis neque, corrupti ad quaerat doloribus amet quasi pariatur hic voluptatem aperiam nostrum deleniti, similique esse nihil. Expedita vero reprehenderit recusandae quaerat, ratione architecto nihil non accusantium atque esse id hic! Temporibus, error! Error natus quam quia amet non officia omnis qui consequuntur modi molestias eligendi beatae ratione ab eum mollitia deserunt animi accusantium, maxime rem quisquam nihil iste optio aspernatur fugit! Facere odit, aperiam tenetur impedit culpa placeat aspernatur error?</div>';
            echo '<button id="showMore" type="button" class="btn-primary">Show More</button>';
          ?>
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
          <div>
            <input class="btn-primary search-btn" type="submit" value="Search"/>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!--Footer-->
  <footer class="footer-copyright">
    <a href="https://github.com/alirni"> Ali Ramezani </a> © <?php echo date("Y"); ?> all rights reserved :)
  </footer>

  <script>
    $("#content").hide();

    $(document).ready(function(){
      $("#showMore").click(function(){
        $("#content").toggle();
      });
    });
  </script>
</body>

</html>
