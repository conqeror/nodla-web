<!DOCTYPE html>
<html lang="sk">

<head>
    <?php include "head.php" ?>
</head>

<body>


    <?php include "navbar.php" ?>

    <!-- let the content begin -->
    <?php

    include "db_config.php";
    $link = mysqli_connect($db_host,$db_user,$db_password)  or die("failed to connect to server !!");
    mysqli_select_db($link,"nodla");
    $accessstring = $_GET['as'];
    $query = "SELECT * FROM teams WHERE accessstring = \"" . $accessstring . "\"";
    $result = mysqli_query($link, $query);
    if (!$result) {
      die("Neplatný link!");
    }
    $team = mysqli_fetch_row($result);
    echo '<div class="first"></div>';
    if($_GET['edited'] == 1){
      echo '<div class="alert alert-success container" role="alert">Úspešne si editoval údaje o tíme!</div>';
    }

    $checked = "";
    if($team[14] == 1){
      $checked = "checked";
    }

    echo <<<EOT
    <div class="container">
      Tu môžeš editovať údaje o svojom tíme.
      <hr/>
    </div>
    <div class="container">
    <form class="form-horizontal" id="form_update" role="form" action="update_teamdata.php" method="POST">
    <input type="hidden" name="id" value="$team[0]">
    <input type="hidden" name="as" value="$accessstring">
    <legend>Info o tíme</legend>

    <div class="form-group">
    <label for="teamname" class="col-sm-2">Názov tímu</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="teamname" id="teamname" value="{$team[2]}">
    </div>
    </div>

    <div class="form-group">
        <label for="email" class="col-sm-1">e-mail</label>
        <div class="col-sm-4">
        	<input type="email" class="form-control" name="email" id="email" value="$team[3]">
        </div>
        <label for="phone" class="col-sm-1">tel. číslo</label>
        <div class="col-sm-2">
        	<input type="tel" class="form-control" name="phone" id="phone" value="$team[4]">
        </div>
    </div>

    <legend>1. člen</legend>

    <div class="form-group">
        <label for="player1" class="col-sm-1">Meno</label>
        <div class="col-sm-4">
        	<input type="text" class="form-control" name="player1" id="player1" value="$team[5]">
        </div>
        <label for="age1" class="col-sm-1">Vek</label>
        <div class="col-sm-1">
        	<input type="number" class="form-control" name="age1" id="age1" value="$team[6]">
        </div>
    </div>

    <legend>2. člen</legend>

    <div class="form-group">
        <label for="player2" class="col-sm-1">Meno</label>
        <div class="col-sm-4">
        	<input type="text" class="form-control" name="player2" id="player2" value="$team[7]">
        </div>
        <label for="age2" class="col-sm-1">Vek</label>
        <div class="col-sm-1">
        	<input type="number" class="form-control" name="age2" id="age2" value="$team[8]">
        </div>
    </div>

    <legend>3. člen</legend>

    <div class="form-group">
        <label for="player3" class="col-sm-1">Meno</label>
        <div class="col-sm-4">
        	<input type="text" class="form-control" name="player3" id="player3" value="$team[9]">
        </div>
        <label for="age3" class="col-sm-1">Vek</label>
        <div class="col-sm-1">
        	<input type="number" class="form-control" name="age3" id="age3" value="$team[10]">
        </div>
    </div>

    <legend>4. člen</legend>

    <div class="form-group">
        <label for="player4" class="col-sm-1">Meno</label>
        <div class="col-sm-4">
        	<input type="text" class="form-control" name="player4" id="player4" value="$team[11]">
        </div>
        <label for="age4" class="col-sm-1">Vek</label>
        <div class="col-sm-1">
        	<input type="number" class="form-control" name="age4" id="age4" value="$team[12]">
        </div>
    </div>
    <div class="form-group">
        <label for="attend" class="col-sm-3">Chcem sa zúčastniť Nôdle</label>
        <div class="col-sm-3">
          <input type="hidden" name="attend" id="attend" value=0>
        	<input type="checkbox" name="attend" id="attend" value=1 $checked>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-11">
            <button type="submit" class="btn btn-warning" name="submit" id="submit">Odoslať</button>
        </div>
    </div>
    </form>
    </div>
EOT;

    ?>

    <?php include "footer.php" ?>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
