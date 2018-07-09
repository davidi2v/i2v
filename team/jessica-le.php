<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>The Invent2Vision Team | Jessica "Scratch" Le</title>
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
          <h1>Jessica "Scratch" Le</h1>
          <h3>Music Director &amp; <br>Social Media Management</h3>
        </div>
        <p class="text">
          Jessica Le is one of the Graphic Designers at Invent2Vision. Everyone calls her Scratch so we do not confuse her with the other Jessica, you know, the main one. She has always been interested in the arts, especially if it involves making anything from “scratch”, hence the nickname.
          <br><br>
          Scratch grew up already having an interest in choosing art as her career path. Having gained knowledge of the fundamentals of arts, silk screening, and a bit of web designing. She attended college at California State University of Los Angeles and graduated with a Bachelor of Arts in Graphic Design & Visual Communication in 2013. She started her career as a Graphic/Web Designer and Photographer for a company working on their websites, handing their social media accounts, editing photos, and taking product photography before moving onto where she is at now at Invent2Vision.
          <br><br>
          Currently, she works on various projects that include designing packaging, logo design, content, printed marketing, brand development, product photography, and doing what she can to gain additional knowledge through self-teaching and learning from her peers and team members.
          <br><br>
          Her knowledge is diverse and includes; the use of most of Adobe Creative Cloud such as Photoshop, Illustrator, Dreamweaver, and InDesign, as well as having her hand in pretty much anything creative that spans from a bunch of traditional media to digital media. Honestly if it involves making something, she probably has tried it before or at least had her hand in it once.
          <br><br>
          In her free time, she creates artwork, edits videos, creates content for YouTube, she is an avid gamer, loves music and singing, is busy updating her websites and social media, streaming live art, adores gaming on twitch.tv, staying active by going to the gym or any other relatable active things, and pretty much anything geeky like watching anime.
          <br><br>
          Scratch’s main goal is to be a well-rounded and generally be an interesting person. Scratch hopes to someday open her world of creativity to others by adding smiles to their black, gray, or white world by giving them meaning to every moment with a splash of color in between.
        </p>
    </div>
</section>

<?php
include('footer.php');
?>