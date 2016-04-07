<!DOCTYPE html>
<html lang="sk">

<head>
    <?php include "head.php" ?>
</head>

<body>


    <?php include "navbar.php" ?>

    <!-- let the content begin -->
    <div class="container">
    <h1>Šifry</h1>
    <?php
    for($i = 0; $i <= 11; $i++){
    $riesenie = file_get_contents("sifry/$i/text.txt", FILE_USE_INCLUDE_PATH);
    echo <<<EOT
    <div class="panel-group" id="accordion$i" role="tablist" aria-multiselectable="true">
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="heading$i">
          <h4 class="panel-title">
            <a role="button" data-toggle="collapse" data-parent="#accordion$i" href="#cipher$i" aria-expanded="false" aria-controls="cipher$i">
              Šifra $i
            </a>
          </h4>
        </div>
        <div id="cipher$i" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading$i">
          <div class="panel-body">
            <a class="btn btn-primary" role="button" href="sifry/$i/zadanie.pdf" aria-expanded="false" aria-controls="collapseExample">
              Zadanie v pdf
            </a>
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#solution$i" aria-expanded="false" aria-controls="solution$i">
              Riešenie
            </button>
            <div class="collapse" id="solution$i">
              <div class="well">
                $riesenie
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

EOT;
    }
    ?>
  </div>

    <?php include "footer.php" ?>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
