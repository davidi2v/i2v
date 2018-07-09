<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>The Invent2Vision Team | Carlos Landazuri</title>
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
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Services<span class="caret"></span></a>
              <?php
          			// if ($conn = mysqli_connect('localhost', 'root', 'root', 'Invent2Vision')):
                //
          			// 	//run the query
          			// 	 $sql ="SELECT * FROM services";
                //
          			// 	 $result = mysqli_query($conn, $sql);
                //
          			// 	 //loop the results
          			// 	 while ($row = mysqli_fetch_assoc($result)):

          		 ?>
               <ul class="dropdown-menu">
                 <li><a href="services.php?id=1">Product Development</a></li>
                 <li><a href="services.php?id=2">Manufacturing</a></li>
                 <li><a href="services.php?id=3">Marketing</a></li>
                 <li><a href="services.php?id=4">Fulfillment</a></li>
                 <li><a href="services.php?id=5">Financial Management</a></li>
                 <li><a href="services.php?id=6">Business Development</a></li>
               </ul>
              <?php
              // 	endwhile;
              // endif;
              ?>
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
    <div class="container member">
        <div class="divHeader">
          <h1>Carlos Landazuri</h1>
          <h3>Chief Executive Officer</h3>
        </div>
        <p class="text">
          Invent2Vision CEO and founder Carlos Landazuri has been developing new businesses internationally for more than 15 years, his vision and catalyst has been an innate instinct since long before he opened the doors of his first business many years ago.
          <br><br>
          Mr. Landazuri has a vast knowledge of engineering products for the construction sector which has prepared him for his latest endeavor Invent2Vision.
          <br><br>
          The Invent2Vision company structure is the real-world version of Shark Tank, minus the cruel comments of their élite business panel not to mention eliminating the hot lights of a soundstage that create an overwhelming and almost unapproachable quest for professional support.
          <br><br>
          Mr. Landazuri is very accessible to all of his employees, and he has always been known to mentor people from start to finish, helping others to reach the goals that they desire is his personal aspiration, so Invent2Vision is a very natural business course for him to not only be interested in but to thrive in as he has with every business opportunity he has touched.
          <br><br>
          Most persons who have achieved the level of personal success as he has in business usually diversify and plan to monopolize for continued personal gain, but this Class Act Entrepreneur wants to change lives by supporting brilliant ideas and helping people to find their own successes.
          <br><br>
          It will be many people's missions and interest to watch this dynamic innovative gentleman's story.</p>
    </div>
</section>

<?php
include('footer.php');
?>