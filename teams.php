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
      echo '<div class="alert alert-success container" role="alert">Úspešne si prihlásil svoj tím!</div>';
    }
    ?>
    <div class="table-responsive container">
      <table class="table table-hover">
        <thead>
          <tr>
            <th class="col-md-3">Názov tímu</th>
            <th class="col-md-11">Členovia</th>
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
      echo "<tr>";

      echo "<td>$row[2]</td>";

      $members = "";
      for($i=5; $i <= 10; $i += 2){
        $members .= $row[$i];
        $members .= " (" . $row[$i+1] . "), ";
      }
      $members .= $row[11];
      $members .= " (" . $row[12] . ")";
      echo "<td>$members</td>";
      echo "</tr>\n";
    }

    ?>
        </tbody>
      </table>
    </div>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
