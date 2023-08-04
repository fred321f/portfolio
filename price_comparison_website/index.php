<!-- https://www.simply.com/dk/support/536820/HaqFK7C2rnO308pfbyTZXU59/ -->

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-CDGTR4ZVSB"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-CDGTR4ZVSB');
    </script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta charset="utf-8">

    <meta name="keywords" content="Streaming, Billige abonnementer, Billig telefoni, billig fastnet telefoni, billig mobiltelefoni, mobiltelefoni, fastnettelefoni, telefoni familiepakker, internet, telefoni månedsabonnement, abonnement til telefon, abonnement, 3g, 4g, 5g, fri tale, taletidskort">
    <meta name="description" content="Du betaler måske for meget for dit mobilabonnement, og vi kan hjælpe dig med at spare penge. Brug vores værktøj til at finde det bedste og det billigste abonnement til dig, din familie eller dine bekendte.">

    <title> Billige abonnementer | DenGodeGuide</title>
    <!-- INDLÆS BOOTSTRAP -->
    <link rel="stylesheet" href="/Stylesheets/bootstrap-5.0.2-dist/css/bootstrap.css">
    <script type="text/javascript" src="/Stylesheets/bootstrap-5.0.2-dist/js/bootstrap.js">

    </script>

    <script src="https://kit.fontawesome.com/530dcce2f6.js" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- fullPage indlæses -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/4.0.9/fullpage.min.js" integrity="sha512-JSVRnP8UFs0ieN/cvP9v4vmW1CotIaEKKN7W+4JaKNrllZolTv2aJfVGn4BFdfZ1jRZxgTAAaXWdlZbEm9iwFA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/4.0.9/fullpage.css" integrity="sha512-zDKgq9gDZL1N3buxzFPZjHwqDOFsgTyhR0aJtXLFTIjEFovumXMaVeF6iBUZ/Rc4Mb0IqRrhqAY+RY7OCUBo6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>

  <body>
    <!-- PHP-kode, som behandler formularens data. -->
    <?php

      // Variabler for hver input-felt defineres som tomme, så de kan sættes til noget andet af brugeren.
      $prisErr = $gbErr = $taletidErr = "";
      $pris = $gb = $taletid = "";

      // Der tjekkes for tomme felter
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["pris"])) {
          $prisErr = "Udfyld dette felt!";
        } else {
          // Hvis felterne ikke er tomme, accepteres brugerens input
          $pris = $_POST['pris'];
        }

        // Hvis GB-feltet er tomt, betyder det fri data. Derfor tjekkes der ikke efter dette.
        if ($_POST['gb']) {
          $gb = $_POST['gb'];
        }

        // Hvis Taletid-feltet er tomt, betyder det fri tale. Derfor tjekkes der ikke efter dette.
        if ($_POST['taletid']) {
          $taletid = $_POST['taletid'];
        }
      }
    ?>




    <div class="container" >

      <?php require 'nav.php'; ?>

      <br>

      <!-- Main-section -->
      <section id="main">

        <div class="row">
          <div class="col">

          </div>
          <div class="col-9 text-center">
            <h3 id="test" class="display-4">Velkommen til vores Pristjek-værktøj.</h3>
          </div>
          <div class="col">

          </div>
        </div>


      <div class="row">
        <div class="col">
        </div>

        <div class="col-12 text-left">
          <p class="lead">Udfyld venligst formularen nedenfor, for at komme i gang. Når du har trykket på knappen "Tjek prisen!", vil du blive foreslået nogle tilbud som bedre kan svare sig.</p>
        </div>

        <div class="col">
        </div>
      </div>
    </div>


  <svg id="wave" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 100" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(248, 249, 250, 1)" offset="0%"></stop><stop stop-color="rgba(248, 249, 250, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,0L60,15C120,30,240,60,360,71.7C480,83,600,77,720,70C840,63,960,57,1080,58.3C1200,60,1320,70,1440,76.7C1560,83,1680,87,1800,75C1920,63,2040,37,2160,33.3C2280,30,2400,50,2520,56.7C2640,63,2760,57,2880,55C3000,53,3120,57,3240,61.7C3360,67,3480,73,3600,76.7C3720,80,3840,80,3960,66.7C4080,53,4200,27,4320,20C4440,13,4560,27,4680,26.7C4800,27,4920,13,5040,11.7C5160,10,5280,20,5400,30C5520,40,5640,50,5760,55C5880,60,6000,60,6120,58.3C6240,57,6360,53,6480,46.7C6600,40,6720,30,6840,35C6960,40,7080,60,7200,63.3C7320,67,7440,53,7560,40C7680,27,7800,13,7920,20C8040,27,8160,53,8280,61.7C8400,70,8520,60,8580,55L8640,50L8640,100L8580,100C8520,100,8400,100,8280,100C8160,100,8040,100,7920,100C7800,100,7680,100,7560,100C7440,100,7320,100,7200,100C7080,100,6960,100,6840,100C6720,100,6600,100,6480,100C6360,100,6240,100,6120,100C6000,100,5880,100,5760,100C5640,100,5520,100,5400,100C5280,100,5160,100,5040,100C4920,100,4800,100,4680,100C4560,100,4440,100,4320,100C4200,100,4080,100,3960,100C3840,100,3720,100,3600,100C3480,100,3360,100,3240,100C3120,100,3000,100,2880,100C2760,100,2640,100,2520,100C2400,100,2280,100,2160,100C2040,100,1920,100,1800,100C1680,100,1560,100,1440,100C1320,100,1200,100,1080,100C960,100,840,100,720,100C600,100,480,100,360,100C240,100,120,100,60,100L0,100Z"></path></svg>



  <div class="bg-light p-5 rounded-lg">
    <div class="container">
      <h1 class="display-5">Udfyld her</h1>
      <p class="lead">Bare rolig - vi hverken beholder eller videregiver ikke dine data!</p>
      <hr class="my-4">
      <!-- Formular: -->
      <form id="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="pris" class="form-label"><i class="fa-solid fa-money-bill-1-wave"></i> Pris*</label>
        <input class="form-control" type="number" name="pris" value="<?php echo $pris; ?>">
        <?php echo $prisErr; ?>
        <div class="form-text" id="passwordHelpBlock">
          Her angives hvor meget du betaler om måneden.
        </div>

        <br>

        <label class="form-label" for="gb"><i class="fa-solid fa-database"></i> Data</label>
        <input class="form-control" type="number" name="gb" value="<?php echo $gb; ?>">
        <?php echo $gbErr; ?>
        <div class="form-text" id="passwordHelpBlock">
          Her angives hvor mange gigagyte data du har til rådighed hver måned.
        </div>

        <br>

        <label for="taletid" class="form-label"><i class="fa-solid fa-comments-dollar"></i> Taletid</label>
        <input class="form-control" type="number" name="taletid" value="<?php echo $taletid; ?>">
        <?php echo $taletidErr; ?>
        <div class="form-text" id="passwordHelpBlock">
          Her angives hvor mange timer taletid du har til rådighed hver måned.
        </div>

        <br>

        <input class="btn btn-primary btn-lg" type="submit" name="submit" value="Tjek prisen!">

      </form>

      <br>

      <?php
        if (isset($_POST['submit']) && !empty($_POST['pris'])) {
          echo "<h2>Dine data:</h2>";
          echo "Du betaler " . $pris . " kr. om måneden for " . $gb . " GB data og " . $taletid . " timers taletid.<br>";

      ?>

      <br>
      <div class="row">


      <?php

          require 'pristjek_connect.php';

          $stmt = $conn->prepare("SELECT udbyder, pris, gb, taletid, url, beskrivelse, farve, bg_farve FROM abbo WHERE pris <= '{$pris}'");
          $stmt->execute();

          $abbonementer = $stmt->fetchAll();

          foreach($abbonementer as $abbo){

      ?>

      <div class="col-3">

        <!-- Hvis-statement i "style"-tag bestemmer farvetemaet af abbonementets card, alt efter hvem udbyderen er. -->
        <div class="card mb-4" style="width: 18rem; color: #<?php echo $abbo['farve']; ?>; background-color: #<?php echo $abbo['bg_farve']; ?>;">
          <div class="card-body">
            <h5 class="card-title"><b><?php echo $abbo['udbyder']; ?></b></h5>

            <h6 class="card-subtitle mb-2 text-muted"></h6>
            <!-- En beskrivelse af abbonementet. Maks 94 tegn! -->
            <p class="card-text"><?php echo $abbo['beskrivelse']; ?></p>

            <a href="<?php echo $abbo['url']; ?>" class="card-link" style="color: #<?php echo $abbo['farve']; ?>;">Køb nu!</a>

          </div>
        </div>
      </div>

      <?php
        }
      ?>
    </div>


<!--
      <script type="text/javascript">
        // Hvad sker der vha. jQuery, når formularen sendes:
        $("#form").submit(function(event) {
          $("#main").fadeOut(1000, function(){
            $("#resultat").fadeIn(1000);
          });
          event.preventDefault();
        });
      </script>
-->

      <?php

        } elseif (!isset($_POST['submit']) || empty($_POST['pris'])) {
          // Hvis felterne er tomme, vises der en besked om, at alle felter undtagen taletid skal  udfyldes.
          echo "Alle felter markeret med * skal udfyldes!";
        }

      ?>
    </div>
  </div>

</section>



  <!--
    <svg id="wave" style="transform:rotate(180deg); transition: 0.3s" viewBox="0 0 1440 110" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(248, 249, 250, 1)" offset="0%"></stop><stop stop-color="rgba(248, 249, 250, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,33L80,40.3C160,48,320,62,480,56.8C640,51,800,26,960,27.5C1120,29,1280,59,1440,75.2C1600,92,1760,95,1920,89.8C2080,84,2240,70,2400,58.7C2560,48,2720,40,2880,47.7C3040,55,3200,77,3360,78.8C3520,81,3680,62,3840,60.5C4000,59,4160,73,4320,66C4480,59,4640,29,4800,18.3C4960,7,5120,15,5280,14.7C5440,15,5600,7,5760,7.3C5920,7,6080,15,6240,31.2C6400,48,6560,73,6720,77C6880,81,7040,62,7200,53.2C7360,44,7520,44,7680,51.3C7840,59,8000,73,8160,80.7C8320,88,8480,88,8640,88C8800,88,8960,88,9120,84.3C9280,81,9440,73,9600,75.2C9760,77,9920,88,10080,80.7C10240,73,10400,48,10560,45.8C10720,44,10880,66,11040,62.3C11200,59,11360,29,11440,14.7L11520,0L11520,110L11440,110C11360,110,11200,110,11040,110C10880,110,10720,110,10560,110C10400,110,10240,110,10080,110C9920,110,9760,110,9600,110C9440,110,9280,110,9120,110C8960,110,8800,110,8640,110C8480,110,8320,110,8160,110C8000,110,7840,110,7680,110C7520,110,7360,110,7200,110C7040,110,6880,110,6720,110C6560,110,6400,110,6240,110C6080,110,5920,110,5760,110C5600,110,5440,110,5280,110C5120,110,4960,110,4800,110C4640,110,4480,110,4320,110C4160,110,4000,110,3840,110C3680,110,3520,110,3360,110C3200,110,3040,110,2880,110C2720,110,2560,110,2400,110C2240,110,2080,110,1920,110C1760,110,1600,110,1440,110C1280,110,1120,110,960,110C800,110,640,110,480,110C320,110,160,110,80,110L0,110Z"></path></svg>
  -->





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- INDLÆS JQUERY -->

    <script type="text/javascript">
    $(document).ready(function(){
      $("#resultat").hide();
      console.log("Klar til kamp!");



    });
    </script>
  </body>
</html>
