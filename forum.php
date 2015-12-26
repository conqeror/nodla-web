<!DOCTYPE html>
<html lang="sk">

<head>
    <?php include "head.php" ?>
</head>

<body>


    <?php include "navbar.php" ?>

    <!-- let the content begin -->

    <div class="container first">
      <h1> Fórum </h1>
      Ak máš nejaké otázky, toto je správne miesto, kde ich môžeš položiť.<br>
      Tiež si tu môžeš zohnať chýbajúcich členov do tímu alebo kľudne nám len niečo pekné odkázať.
      <hr>
      <form class="form-horizontal" id="form_members" role="form" action="send_forummessage.php" method="POST">

        <div class="form-group">
            <label for="name" class="col-sm-1">Meno</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" name="name" id="name" placeholder="Človek (tím)">
            </div>
        </div>


        <div class="form-group">
          <label for="message" class="col-sm-1">Správa</label>
          <div class="col-sm-6">
            <textarea class="form-control" rows="5" name="message" id="message"></textarea>
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-offset-1 col-sm-11">
              <button type="submit" class="btn btn-warning" name="submit" id="submit">Submit</button>
          </div>
        </div>
      </form>

      <hr>

      <?php
      $date_format = "d. m. Y H:i";
      include "db_config.php";
      $link = mysqli_connect($db_host,$db_user,$db_password)  or die("failed to connect to server !!");
      mysqli_select_db($link,"nodla");

      $result = mysqli_query($link, "SELECT * FROM forum ORDER BY id DESC");
      if (!$result) {
        die("Query to show fields from table failed");
      }
      while($row = mysqli_fetch_row($result))
      {
        $org = "";
        if($row[4] == 1){
          $org = '<span class="label label-primary">org</span>';
        }
        $fdate = date($date_format, strtotime($row[1]));
        $mes = nl2br($row[3]);
        echo <<<EOT

        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">$row[2] $org <span style="float:right;">$fdate</span></h3>
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
