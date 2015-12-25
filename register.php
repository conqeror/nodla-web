<!DOCTYPE html>
<html lang="sk">

<head>
    <?php include "head.php" ?>
</head>

<body>


    <?php include "navbar.php" ?>

    <!-- let the content begin -->

    <div class="container first">
      Tu sa môžeš prihlásiť!
      <hr/>
    </div>
    <div class="container">
    <form class="form-horizontal" id="form_members" role="form" action="send_teamdata.php" method="POST">
    <legend>Info o tíme</legend>

    <div class="form-group">
    <label for="teamname" class="col-sm-2">Názov tímu</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="teamname" id="teamname" placeholder="Ešte sa dohodneme">
    </div>
    </div>

    <div class="form-group">
        <label for="email" class="col-sm-1">e-mail</label>
        <div class="col-sm-4">
        	<input type="email" class="form-control" name="email" id="email" placeholder="sifrovacka@nodla.sk">
        </div>
        <label for="phone" class="col-sm-1">tel. číslo</label>
        <div class="col-sm-2">
        	<input type="tel" class="form-control" name="phone" id="phone" placeholder="0908 123 456">
        </div>
    </div>

    <legend>1. člen</legend>

    <div class="form-group">
        <label for="player1" class="col-sm-1">Meno</label>
        <div class="col-sm-4">
        	<input type="text" class="form-control" name="player1" id="player1">
        </div>
        <label for="age1" class="col-sm-1">Vek</label>
        <div class="col-sm-1">
        	<input type="number" class="form-control" name="age1" id="age1">
        </div>
    </div>

    <legend>2. člen</legend>

    <div class="form-group">
        <label for="player2" class="col-sm-1">Meno</label>
        <div class="col-sm-4">
        	<input type="text" class="form-control" name="player2" id="player2">
        </div>
        <label for="age2" class="col-sm-1">Vek</label>
        <div class="col-sm-1">
        	<input type="number" class="form-control" name="age2" id="age2">
        </div>
    </div>

    <legend>3. člen</legend>

    <div class="form-group">
        <label for="player3" class="col-sm-1">Meno</label>
        <div class="col-sm-4">
        	<input type="text" class="form-control" name="player3" id="player3">
        </div>
        <label for="age3" class="col-sm-1">Vek</label>
        <div class="col-sm-1">
        	<input type="number" class="form-control" name="age3" id="age3">
        </div>
    </div>

    <legend>4. člen</legend>

    <div class="form-group">
        <label for="player4" class="col-sm-1">Meno</label>
        <div class="col-sm-4">
        	<input type="text" class="form-control" name="player4" id="player4">
        </div>
        <label for="age4" class="col-sm-1">Vek</label>
        <div class="col-sm-1">
        	<input type="number" class="form-control" name="age4" id="age4">
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-1 col-sm-11">
            <button type="submit" class="btn btn-warning" name="submit" id="submit">Submit</button>
        </div>
    </div>
    </form>
    </div>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
