<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Fulfillment | Invent2Vision Services</title>
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.typekit.net/sdk7xdo.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
  </head>
  <body>
    <nav id="nav" class="navbar navbar-inverse navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><img src="img/png/i2v_logo.png" alt="Invent2Vision"></a>
        </div>
        <div class="collapse navbar-collapse navbar-right" id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li class="dropdown active">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Services<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="services.php?id=1">Product Development</a></li>
                <li><a href="services.php?id=2">Manufacturing</a></li>
                <li><a href="services.php?id=3">Marketing</a></li>
                <li><a href="services.php?id=4">Fulfillment</a></li>
                <li><a href="services.php?id=5">Financial Management</a></li>
                <li><a href="services.php?id=6">Business Development</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Contact Us<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="https://www.invent2vision.com/page/contact-us">General Information</a></li>
                <li><a href="https://www.invent2vision.com/page/submit-an-idea">Idea Submissions</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

<section>
        <?php
            // if ($conn = mysqli_connect('localhost', 'root', 'root', 'Invent2Vision')):
			//
			//
            //     if (isset($_GET['id'])) {$id = $_GET['id'];}
            //     //run the query
            //      $sql ="SELECT * FROM services WHERE id = " . $id;
			//
            //      $result = mysqli_query($conn, $sql);
			//
            //      $slide = mysqli_fetch_assoc($result);
         ?>
    <div class="container service">
        <img src="../img/gif/fulfillment.gif">
        <h1>Fulfillment</h1>
        <p class="text">I2V can execute all your fulfillment needs. We handle drop shipments direct from the manufacturing plant, individual packages delivered from warehouse, we review each order, hand-pick items, and pack with care. We do the work so you don’t have to.</p>
    </div>
    <?php
    // endif;
    ?>
</section>

<?php
include('footer.php');
?>