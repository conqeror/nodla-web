<!DOCTYPE html>
<html lang="sk">

<head>
    <?php include "head.php" ?>
</head>

<body>


    <?php include "navbar.php" ?>

    <!-- let the content begin -->
    <?php
    $org=0;
    if(isset($_GET['org'])){
      $org=1;
    }
    echo <<<EOT
    <div class="container first">
      <h1> Fórum </h1>
      Ak máš nejaké otázky, toto je správne miesto, kde ich môžeš položiť.<br>
      Tiež si tu môžeš zohnať chýbajúcich členov do tímu alebo kľudne nám len niečo pekné odkázať.
      <hr>
      <form class="form-horizontal" id="send_message" role="form" action="send_forummessage.php" method="POST">

        <div class="form-group">
            <label for="name" class="col-sm-1">Meno</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" name="name" id="name" placeholder="Človek (tím)">
            </div>
        </div>


        <div class="form-group">
          <label for="message" class="col-sm-1">Správa</label>
          <div class="col-sm-6">
            <textarea class="form-control" rows="5" name="message" id="message" required></textarea>
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-offset-1 col-sm-11">
              <input type="hidden" name="org" id="org" value=$org>
              <button type="submit" class="btn btn-warning" name="submit" id="submit">Submit</button>
          </div>
        </div>
      </form>

      <hr>
EOT;
      $date_format = "d. m. Y H:i";
      include "db_config.php";
      $link = mysqli_connect($db_host,$db_user,$db_password)  or die("failed to connect to server !!");
      mysqli_select_db($link,"nodla");
      mysqli_set_charset($link, "utf8");

      $result = mysqli_query($link, "SELECT * FROM forum ORDER BY id DESC");
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

      ?>
    <!-- TODO: pagination -->

    </div>


    <?php include "footer.php" ?>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
