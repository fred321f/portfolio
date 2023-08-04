<?php

  ob_start();

  // require '../../pristjek_connect.php';
  //
  // if(isset($_POST["submit"])) {
    // $udbyder = $_POST['udbyder'];
    // $pris = $_POST['pris'];
    // $gb = $_POST['gb'];
    // $farve = $_POST['farve'];
    // $bg_farve = $_POST['bg_farve'];
  //
  //   $sql = "INSERT INTO abbo (udbyder,pris,gb,farve,bg_farve) VALUES ('$udbyder','$pris','$gb','$farve','$bg_farve')";
  //
  //   if (mysqli_query($conn, $sql)) {
  //     echo "Indsat!";
  //   } else {
  //     echo "Der skete en fejl med behandlingen.";
  //   }
  //
  //   mysqli_close($conn);
  //
  // } else {
  //   echo "Der skete en fejl med indsættelsen.";
  // }



      $username = "root";
      $password = "Frederick01nielsen";

      try {
      $conn = new PDO("mysql:host=localhost;dbname=pristjek", $username,
          $password);
      // set the PDO error mode to exception
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      // prepare sql and bind parameters
          $stmt = $conn->prepare("INSERT INTO abbo (udbyder, pris, gb, url, beskrivelse, farve, bg_farve)
          VALUES (:udbyder, :pris, :gb, :url, :beskrivelse, :farve, :bg_farve)");

              $stmt->bindParam(':udbyder', $udbyder);
              $stmt->bindParam(':pris', $pris);
              $stmt->bindParam(':gb', $gb);
              $stmt->bindParam(':url', $url);
              $stmt->bindParam(':beskrivelse', $beskrivelse);
              $stmt->bindParam(':farve', $farve);
              $stmt->bindParam(':bg_farve', $bg_farve);


      // insert a row

          $udbyder = $_POST['udbyder'];
          $pris = $_POST['pris'];
          $gb = $_POST['gb'];
          $url = $_POST['url'];
          $farve = $_POST['farve'];
          $bg_farve = $_POST['bg_farve'];

          $stmt->execute();



      }
      catch(PDOException $e)
      {
          echo "Error: " . $e->getMessage();
      }
      $conn = null;


  ?>
