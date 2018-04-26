<!DOCTYPE html>
<html lang="sk">

<head>
    <?php include "head.php" ?>
    <title>Editovať tím - Nôdľa</title>
</head>

<body>


    <?php include "navbar.php" ?>

    <!-- let the content begin -->
    <?php

    include "db_config.php";
    $pdo = new PDO($db_host, $db_user, $db_password);
    $accessstring = $_GET['as'];
    $stmt = $pdo->prepare("SELECT * FROM teams WHERE accessstring = ?");
    $stmt->execute(array($accessstring));
    if (!$stmt) {
      die("Neplatný link!");
    }
    $team = $stmt->fetchObject();
    echo '<div class="first"></div>';
    if(isset($_GET['edited'])){
      echo '<div class="alert alert-success container" role="alert"><span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span> Úspešne si editoval údaje o tíme!</div>';
    }

    $checked = "";
    if($team->attend == 1){
      $checked = "checked";
    }

    echo <<<EOT
    <div class="container">
      Tu môžeš editovať údaje o svojom tíme.
      <hr/>
    </div>
    <div class="container">
    <form class="form-horizontal" id="form_update" role="form" action="update_teamdata.php" method="POST">
    <input type="hidden" name="id" value="$team->id">
    <input type="hidden" name="as" value="$accessstring">
    <legend>Info o tíme</legend>

    <div class="form-group">
    <label for="teamname" class="col-sm-2">Názov tímu</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" name="teamname" id="teamname" required value="$team->teamname">
    </div>
    </div>

    <div class="form-group">
        <label for="email" class="col-sm-2">e-mail</label>
        <div class="col-sm-4">
        	<input type="email" class="form-control" name="email" id="email" required value="$team->email">
        </div>
        <label for="phone" class="col-sm-1">tel. číslo</label>
        <div class="col-sm-2">
        	<input type="tel" class="form-control" name="phone" id="phone" required value="$team->phone">
        </div>
    </div>

    <legend>1. člen</legend>

    <div class="form-group">
        <label for="player1" class="col-sm-2">Meno</label>
        <div class="col-sm-4">
        	<input type="text" class="form-control" name="player1" id="player1" required value="$team->name1">
        </div>
        <label for="age1" class="col-sm-1">Vek</label>
        <div class="col-sm-2">
        	<input type="number" class="form-control" name="age1" id="age1" value="$team->age1">
        </div>
    </div>

    <legend>2. člen</legend>

    <div class="form-group">
        <label for="player2" class="col-sm-2">Meno</label>
        <div class="col-sm-4">
        	<input type="text" class="form-control" name="player2" id="player2" required value="$team->name2">
        </div>
        <label for="age2" class="col-sm-1">Vek</label>
        <div class="col-sm-2">
        	<input type="number" class="form-control" name="age2" id="age2" value="$team->age2">
        </div>
    </div>

    <legend>3. člen</legend>

    <div class="form-group">
        <label for="player3" class="col-sm-2">Meno</label>
        <div class="col-sm-4">
        	<input type="text" class="form-control" name="player3" id="player3" required value="$team->name3">
        </div>
        <label for="age3" class="col-sm-1">Vek</label>
        <div class="col-sm-2">
        	<input type="number" class="form-control" name="age3" id="age3" value="$team->age3">
        </div>
    </div>

    <legend>4. člen</legend>

    <div class="form-group">
        <label for="player4" class="col-sm-2">Meno</label>
        <div class="col-sm-4">
        	<input type="text" class="form-control" name="player4" id="player4" required value="$team->name4">
        </div>
        <label for="age4" class="col-sm-1">Vek</label>
        <div class="col-sm-2">
        	<input type="number" class="form-control" name="age4" id="age4" value="$team->age4">
        </div>
    </div>

    <hr>
    <div class="form-group">
      <label for="special" class="col-sm-2">Máte nejaké špeciálne požiadavky na stravu?</label>
      <div class="col-sm-6">
        <textarea class="form-control custom-control" name="special" id="special" rows="4" style="resize:none">$team->special</textarea>
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
        <div class="col-sm-10 col-sm-offset-2">
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
