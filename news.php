<!DOCTYPE html>
<html lang="sk">

<head>
    <?php include "head.php" ?>
    <title>Aktuálne - Nôdľa</title>
    <style>
      .infonum{
        font-size: 40px;
        text-align: center;
      }
    </style>
</head>

<body>


    <?php include "navbar.php" ?>

    <!-- let the content begin -->
    <div class="container first">
      <h1>Aktuálne</h1>
      Tu nájdete všetky aktuálne informácie o šifrovačke.
      <hr>
      <?php
        include "db_config.php";
        $link = mysqli_connect($db_host,$db_user,$db_password)  or die("failed to connect to server !!");
        mysqli_set_charset($link, "utf8");
        mysqli_select_db($link,"nodla");

        $counter = mysqli_query($link, "SELECT COUNT(*) AS id FROM teams WHERE attend=1");
        $num = mysqli_fetch_array($counter);
        $num_teams = $num["id"];
        include "competition_vars.php";
        $days_to_start = floor(($competitionstart - time())/86400);
        $days_to_register = floor(($registrationend - time())/86400);
        echo <<<EOT
        <div class = "col-md-3">
            <div class="alert alert-success">Prihlásených je už<br><div class="infonum">$num_teams z $capacity</div>tímov.</div>
            <div class="alert alert-warning">Registrácia končí o<br><div class="infonum">$days_to_register</div>dní.</div>
            <div class="alert alert-success">Nôdľa začína o<br><div class="infonum">$days_to_start</div>dní.</div>
        </div>
EOT;

        $date_format = "d. m. Y H:i";
        echo '<div class="col-md-9"><h2>Novinky</h2>';

        $result = mysqli_query($link, "SELECT * FROM news ORDER BY id DESC");
        if (!$result) {
          die("Query to show fields from table failed");
        }
        while($row = mysqli_fetch_assoc($result))
        {

          $fdate = date($date_format, strtotime($row["timestamp"]));
          $mes = nl2br($row["message"]);
          echo <<<EOT

          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">\032<span style="float:right;">$fdate</span></h3>
            </div>
              <div class="panel-body">
                $mes
              </div>
          </div>
EOT;
        }

        echo '<hr><h2>Najnovšie príspevky vo <a href="forum.php">fóre</a></h2>';
        $result = mysqli_query($link, "SELECT * FROM forum ORDER BY id DESC LIMIT 3");
        if (!$result) {
          die("Query to show fields from table failed");
        }
        while($row = mysqli_fetch_assoc($result))
        {
          $org = "";
          if($row["org"] == 1){
            $org = '<span class="label label-primary">org</span>';
          }
          $fdate = date($date_format, strtotime($row["timestamp"]));
          $mes = nl2br($row["message"]);
          $name = $row["name"];
          echo <<<EOT

          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">$name $org <span style="float:right;">$fdate</span></h3>
            </div>
              <div class="panel-body">
                $mes
              </div>
          </div>
EOT;
        }

        echo '</div>';

        ?>


    </div>


    <?php include "footer.php" ?>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
