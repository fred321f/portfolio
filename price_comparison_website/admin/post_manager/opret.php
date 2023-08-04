<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Opret opslag</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta charset="utf-8">
    <title>Pristjek | Bedstepris.nu</title>
    <!-- INDLÆS BOOTSTRAP -->
    <link rel="stylesheet" href="/Stylesheets/bootstrap-5.0.2-dist/css/bootstrap.css">

    <script src="https://kit.fontawesome.com/530dcce2f6.js" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- fullPage indlæses -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/4.0.9/fullpage.min.js" integrity="sha512-JSVRnP8UFs0ieN/cvP9v4vmW1CotIaEKKN7W+4JaKNrllZolTv2aJfVGn4BFdfZ1jRZxgTAAaXWdlZbEm9iwFA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/4.0.9/fullpage.css" integrity="sha512-zDKgq9gDZL1N3buxzFPZjHwqDOFsgTyhR0aJtXLFTIjEFovumXMaVeF6iBUZ/Rc4Mb0IqRrhqAY+RY7OCUBo6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  </head>

  <body>

    <?php


      session_start();

      // Check if the user is logged in, if not then redirect him to login page
      if(!isset($_SESSION["loggedin"])){
        header("location: index.php");
        exit;
      }
    ?>


    <div class="wrapper">

      <form class="form-group" action="opret_action.php" method="post">

        <p>Udbyder:</p>
        <input type="text" name="udbyder">

        <p>Pris fra:</p>
        <input type="number" name="pris">

        <p>Data:</p>
        <input type="number" name="gb">

        <p>Taletid:</p>
        <input type="number" name="taletid">

        <p>URL</p>
        <input type="url" name="url" value="">

        <p>Beskrivelse (Maks 94 tegn)</p>
        <input type="text" name="Beskrivelse" value="">

        <hr>
        <p>Tekst-farve:</p>
        <input type="text" name="farve">

        <p>Baggrundsfarve:</p>
        <input type="text" name="bg_farve">

        <br>
        <br>

        <input type="submit" class="btn btn-primary" name="submit" value="Opret!">
      </form>

    </div>

  </body>

</html>
