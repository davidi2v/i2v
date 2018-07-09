<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>The Invent2Vision Team | Shelley Scott-Mahoney</title>
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
          <h1>Shelley Scott-Mahoney</h1>
          <h3>Chief Marketing Officer</h3>
        </div>
        <p class="text">
          As the Chief Marketing Officer for Invent2Vision, Shelley is constantly searching for cutting-edge and exceptional ways to interact with consumers. Her days are filled with reviewing new ideas and systems to bring to the public, as well as, developing digital marketing strategies, she is an information junkie, research whiz, she loves finding new ways to communicate through technology and branding, she earned the moniker as an avid and exceptionally sporting negotiator, as well as, a project management tour de force.
          <br><br>
          Shelley earned a Bachelor's Degree in Business Management from UCLA, and a Project Management Certificate, she is now in the process of studying Intellectual Property Law and Practices coursework to better support I2V with Trademark, Patent, Copyright, and Best Practices.
          <br><br>
          Prior to finding her passion in Business Management and Development, she had dreamt of a career as a fashion and interior design so she attended the very best institutions to help her meet this goal. She completed courses at FIDM, LATTC, and SMC, where she studied Interior Design, Fashion Design and completed coursework in Textile Design and Color Theory.
          <br><br>
          Before embarking on her journey with I2V Shelley had been the Co-owner and Senior Designer for Maison Magique a residential investment and renovation design firm, she was responsible for purchasing properties for renovation and resale, along with, management of company and clients projects.
          <br><br>
          She and her former husband had previously owned two Art Galleries, one based in Los Angeles California and had served exclusively private art collectors, the other gallery housed a smaller collection available for public access and had been located in Paris France.
          <br><br>
          During Social Media Marketing infancy, Shelley had co-founded a full-service marketing firm which provides services for Universal Music Group and its partners. She has also held a position as the Chief Operations Officer for a multi-divisional direct response company, she was contracted as the Senior Vice President of Marketing for one of the largest global music distribution companies, and had also served as the Senior Project Manager for a Los Angeles based Telecom and Technology company.
        </p>
    </div>
</section>

<?php
include('footer.php');
?>