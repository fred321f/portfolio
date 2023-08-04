<!-- Main-side -->

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dashboard</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta charset="utf-8">

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

    ob_start();
    

    // Check if the user is logged in, if not then redirect him to login page
    if(!isset($_SESSION["loggedin"])){
      header("location: index.php");
      exit;
    }
  ?>


    <br>
    <div class="container">

      <div class="row text-center">
        <div class="col">
          <a href="/admin/post_manager/opret.php">Opret opslag</a>
        </div>

        <div class="col">
        </div>

        <div class="col">
          <a href="logout.php">Log ud</a>
        </div>

      </div>

      <div class="row">
        <div class="col">

        </div>

        <div class="col">
          <h3 class="text-center">Velkommen til admin panelet.</h3>
        </div>

        <div class="col">

        </div>
      </div>

    </div>
  </body>
</html>
