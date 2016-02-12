<!DOCTYPE html>
<html lang="sk">

<head>
    <?php include "head.php" ?>
    <title>Registrácia - Nôdľa</title>
</head>

<body>


    <?php include "navbar.php" ?>
    <?php include "competition_vars.php" ?>

    <!-- let the content begin -->
    <?php
    include "db_config.php";
    $link = mysqli_connect($db_host,$db_user,$db_password)  or die("failed to connect to server !!");
    mysqli_select_db($link,"nodla");
    $counter = mysqli_query($link, "SELECT COUNT(*) AS id FROM teams WHERE attend=1");
    $num = mysqli_fetch_array($counter);
    $num_teams = $num["id"];
    $full_capacity_message = "";
    $disabled = "";
    if($num_teams == $capacity){
      $full_capacity_message = '<div class="alert alert-danger container" role="alert"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span> Bohužiaľ, kapacita tohtoročnej Nôdle už bola vyčerpaná. Budeme radi, keď prídeš budúci rok :-)</div>';
      $disabled = "disabled";
    }

    echo <<<EOT

    <div class="container first">
      <h1>Registrácia</h1>
      $full_capacity_message
      <p>
      Tu môžeš prihlásiť svoj tím na Nôdľu.<br>
      Nezabudni si najprv prečítať <a href="rules.php">pravidlá</a>!
      </p>
      <hr/>
    </div>
    <div class="container">
    <form class="form-horizontal" id="form_members" role="form" action="send_teamdata.php" method="POST">
    <legend>Info o tíme</legend>

    <div class="form-group">
    <label for="teamname" class="col-sm-2">Názov tímu</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" name="teamname" id="teamname" required placeholder="Ešte sa dohodneme">
    </div>
    </div>

    <div class="form-group">
        <label for="email" class="col-sm-offset-1 col-sm-1">e-mail</label>
        <div class="col-sm-4">
        	<input type="email" class="form-control" name="email" id="email" required placeholder="sifrovacka@nodla.sk">
        </div>
        <label for="phone" class="col-sm-1">tel. číslo</label>
        <div class="col-sm-2">
        	<input type="tel" class="form-control" name="phone" id="phone" required placeholder="0908 123 456">
        </div>
    </div>

    <legend>1. člen</legend>

    <div class="form-group">
        <label for="player1" class="col-sm-offset-1 col-sm-1">Meno</label>
        <div class="col-sm-4">
        	<input type="text" class="form-control" name="player1" required id="player1">
        </div>
        <label for="age1" class="col-sm-1">Vek</label>
        <div class="col-sm-2">
        	<input type="number" class="form-control" name="age1" id="age1">
        </div>
    </div>

    <legend>2. člen</legend>

    <div class="form-group">
        <label for="player2" class="col-sm-offset-1 col-sm-1">Meno</label>
        <div class="col-sm-4">
        	<input type="text" class="form-control" name="player2" required id="player2">
        </div>
        <label for="age2" class="col-sm-1">Vek</label>
        <div class="col-sm-2">
        	<input type="number" class="form-control" name="age2" id="age2">
        </div>
    </div>

    <legend>3. člen</legend>

    <div class="form-group">
        <label for="player3" class="col-sm-offset-1 col-sm-1">Meno</label>
        <div class="col-sm-4">
        	<input type="text" class="form-control" name="player3" id="player3">
        </div>
        <label for="age3" class="col-sm-1">Vek</label>
        <div class="col-sm-2">
        	<input type="number" class="form-control" name="age3" id="age3">
        </div>
    </div>

    <legend>4. člen</legend>

    <div class="form-group">
        <label for="player4" class="col-sm-offset-1 col-sm-1">Meno</label>
        <div class="col-sm-4">
        	<input type="text" class="form-control" name="player4"id="player4">
        </div>
        <label for="age4" class="col-sm-1">Vek</label>
        <div class="col-sm-2">
        	<input type="number" class="form-control" name="age4" id="age4">
        </div>
    </div>
    <hr>
    <div class="form-group">
      <label for="special" class="col-sm-2">Máte nejaké špeciálne požiadavky na stravu?</label>
      <div class="col-sm-7">
        <textarea class="form-control" rows="5" name="special" id="special"></textarea>
      </div>
    </div>
    <hr>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-11">
              <div class="g-recaptcha" data-sitekey="6Ldy4BMTAAAAAAlutft4j_Li-5uU14MbETE_nbxQ"></div>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-11">
            <button type="submit" class="btn btn-warning" name="submit" id="submit" $disabled>Odoslať</button>
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
