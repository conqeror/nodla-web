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
        $pdo = new PDO($db_host, $db_user, $db_password);
        $num_teams = $pdo->query("SELECT COUNT(*) AS id FROM teams WHERE attend=1")->fetchColumn();

        include "competition_vars.php";
        $days_to_start = floor(($competition_start - time())/86400);
        $days_to_register = floor(($registration_end - time())/86400);
        $alertregister = "alert-success";
        $alertstart = "alert-success";
        $alertcap = "alert-success";
        if($days_to_register <= 7){
          $alertregister = "alert-warning";
        }
        if($days_to_register <= 3){
          $alertregister = "alert-danger";
        }
        if($days_to_start <= 7){
          $alertstart = "alert-warning";
        }
        if($days_to_start <= 3){
          $alertstart = "alert-danger";
        }
        if($num_teams > 0.7*$capacity){
          $alertcap = "alert-warning";
        }
        if($num_teams > 0.9*$capacity){
          $alertcap = "alert-danger";
        }
        echo <<<EOT
        <div class = "col-md-3">
            <div class="alert $alertcap">Prihlásených je už<br><div class="infonum">$num_teams z $capacity</div>tímov.</div>
            <div class="alert $alertregister">Registrácia končí o<br><div class="infonum">$days_to_register</div>dní.</div>
            <div class="alert $alertstart">Nôdľa začína o<br><div class="infonum">$days_to_start</div>dní.</div>
        </div>
EOT;

        $date_format = "d. m. Y H:i";
        echo '<div class="col-md-9"><h2>Novinky</h2>';

        $result = $pdo->query("SELECT * FROM news ORDER BY id DESC");
        if (!$result) {
          die("Query to show fields from table failed");
        }
        foreach($result as $row)
        {

          $fdate = date($date_format, strtotime($row["timestamp"]));
          $mes = nl2br($row["message"]);
          echo <<<EOT

          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">&nbsp<span style="float:right;">$fdate</span></h3>
            </div>
              <div class="panel-body">
                $mes
              </div>
          </div>
EOT;
        }

        echo '<hr><h2>Najnovšie príspevky vo <a href="forum.php">fóre</a></h2>';
        $result = $pdo->query("SELECT * FROM forum ORDER BY id DESC LIMIT 3");
        if (!$result) {
          die("Query to show fields from table failed");
        }
        foreach($result as $row)
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
