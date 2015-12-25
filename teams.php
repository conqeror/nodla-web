<!DOCTYPE html>
<html lang="sk">

<head>
    <?php include "head.php" ?>
</head>

<body>


    <?php include "navbar.php" ?>

    <!-- let the content begin -->
    <div class="first"></div>

    <?php
    if($_GET['registered'] == 1){
      echo '<div class="alert alert-success container" role="alert"> <span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span> Úspešne si prihlásil svoj tím!</div>';
      echo '<div class="alert alert-warning container" role="alert"> <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> Na e-mail zadaný pri registrácií ti prišla správa s linkom na editovanie tímu a taktiež s informáciami o platbe.</div>';
    }
    ?>
    <div class="table-responsive container">
      <table class="table table-hover">
        <thead>
          <tr>
            <th class="col-md-1">ID</th>
            <th class="col-md-2">Názov tímu</th>
            <th class="col-md-6">Členovia</th>
            <th class="col-md-1">Platba</th>
          </tr>
        </thead>
        <tbody>

    <?php
    include "db_config.php";
    $link = mysqli_connect($db_host,$db_user,$db_password)  or die("failed to connect to server !!");
    mysqli_select_db($link,"nodla");

    $result = mysqli_query($link, "SELECT * FROM teams");
    if (!$result) {
      die("Query to show fields from table failed");
    }
    while($row = mysqli_fetch_row($result))
    {
      if($row[14] == 1){
      echo "<tr>";
      echo "<td>$row[0]</td>";
      echo "<td>$row[2]</td>";

      $members = "";
      for($i=5; $i <= 10; $i += 2){
        $members .= $row[$i];
        $members .= " (" . $row[$i+1] . "), ";
      }
      $members .= $row[11];
      $members .= " (" . $row[12] . ")";
      echo "<td>$members</td><td>";
      if($row[13] == 0){
        echo '<a class="text-danger">NIE</a>';
      }
      if($row[13] == 1){
        echo '<a class="text-success">ÁNO</a>';
      }
      if($row[13] == 2){
        echo '<a class="text-warning">na štarte</a>';
      }

      echo "</td></tr>\n";
      }
    }

    ?>
        </tbody>
      </table>
    </div>

    <?php include "footer.php" ?>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
