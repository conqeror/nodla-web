<!DOCTYPE html>
<html lang="sk">

<head>

    <?php include "head.php" ?>
    <title>Šifrovačka Nôdľa</title>
    <!-- Custom CSS -->
    <link href="css/one-page-wonder.css" rel="stylesheet">

</head>

<body>

    <?php include "navbar.php" ?>

    <!-- Full Width Image Header -->
    <header class="header-image">
        <div class="headline">
            <div class="container">
                <h1>Nôdľa</h1>
                <h2>jediná zimná šifrovačka na Slovensku</h2>
            </div>
        </div>
    </header>

    <!-- Page Content -->
    <div class="container">
      <div style="padding-top:20px; padding-bottom:20px;"><h2 style="text-align:center;">už 20. februára v Bratislave a okolí</h2></div>
      <hr class="featurette-divider">

      <!-- First Featurette -->
      <div class="featurette" id="about">
          <a href="img/jedlo1.JPG" data-lightbox="index-img" data-title="Palacinka"><img class="featurette-image img-circle img-responsive pull-right" alt="Palacinky" src="img/jedlo.jpg"></a>
          <h2 class="featurette-heading">Šifrovačka,
              <span class="text-muted">z ktorej neodídete hladní.</span>
          </h2>
          <p class="lead">Organizátori tejto šifrovačky majú šifrovačov tak radi, že ich zatiaľ každý rok
          na aspoň jednom stanovišti kŕmili teplým jedlom. Bude tomu tak aj tento rok? Na aké špeciality
          sa môžete tešiť?
          </p>
      </div>

      <hr class="featurette-divider">

      <!-- Second Featurette -->
      <div class="featurette" id="services">
          <a href="img/sneh1.jpg" data-lightbox="index-img" data-title="Brodenie sa snehom"><img class="featurette-image img-circle img-responsive pull-left" alt="Cesta v snehu" src="img/sneh.jpg"></a>
          <h2 class="featurette-heading">Šifrovačka,
              <span class="text-muted" data-toggle="tooltip" data-placement="top" title="Tak asi nie, sorry."><strike>kde sa budete brodiť snehom</strike>.</span>
          </h2>
          <p class="lead">Štatistika za posledné tri ročníky: dvakrát sneh a raz blato. Môžme len dúfať, že tento rok sa počasie vydarí.
          Veď čo je lepšie ako šifrovačka v polmetrovom snehu?
          </p>
      </div>

      <hr class="featurette-divider">

      <!-- Third Featurette -->
      <div class="featurette" id="contact">
          <a href="img/sviecka1.jpg" data-lightbox="index-img" data-title="Prsteň s cínom"><img class="featurette-image img-circle img-responsive pull-right" alt="Cinovy prsten" src="img/sviecka.jpg"></a>
          <h2 class="featurette-heading">Šifrovačka,
              <span class="text-muted">na ktorej vám šifrovacie pomôcky nebudú stačiť.</span>
          </h2>
          <p class="lead">Myslíte si, že sa stačí naučiť základné šifrovacie princípy a potom bude Nôdľa pre vás
          prechádzka ružovou záhradou? Tak na to zabudnite! V minulých ročníkoch ste si mohli vyskúšať tavenie cínu,
          čítanie polystyrénového harddisku a kopu ďalších netradičných aktivít.
          </p>
      </div>

      <hr class="featurette-divider">

      <div class="featurette" id="begin">
        <a class="btn btn-success btn-lg col-sm-offset-3" href="register.php" data-toggle="tooltip" data-placement="bottom" title="Mám tím a viem do čoho idem!">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Chcem sa prihlásiť!
        </a>
        <a class="btn btn-warning btn-lg col-sm-offset-1" href="about.php" data-toggle="tooltip" data-placement="bottom" title="O čo sa tu vlastne jedná?">
            <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Chcem zistiť viac!
        </a>
      </div>

        <!-- Footer -->

        <hr class="featurette-divider">
    </div>

    <?php include "footer.php" ?>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/lightbox.js"></script>
    <script>
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })
    </script>

</body>

</html>
