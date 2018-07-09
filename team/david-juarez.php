<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>The Invent2Vision Team | David Juarez</title>
    <link rel="stylesheet" href="../css/style.css">
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
          <a class="navbar-brand" href="/index.php"><img src="../img/png/i2v_logo.png" alt="Invent2Vision"></a>
        </div>
        <div class="collapse navbar-collapse navbar-right" id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="../index.php">Home</a></li>
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
                   <li><a href="../services/product-development.php">Product Development</a></li>
                  <li><a href="../services/manufacturing.php">Manufacturing</a></li>
                  <li><a href="../services/marketing.php">Marketing</a></li>
                  <li><a href="../services/fulfillment.php">Fulfillment</a></li>
                  <li><a href="../services/financial-management.php">Financial Management</a></li>
                  <li><a href="../services/business-development.php">Business Development</a></li>
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
          <h1>David Juarez</h1>
          <h3>Web &amp; Graphic Designer</h3>
        </div>
        <p class="text">
			  David Juarez is Invent2Vision's Web and Graphic Designer. He graduated from Mt Sierra College with a Bachelor’s degree in Media Arts & Graphic Design. After graduation, he continued to spread his creativity and design skills in the web world as a web designer. He enjoys the challenges that comes with the design and development of modern responsive web applications. He also loves the fact that since technology is always improving, there is always something new to learn.
			  <br><br>
  			Most of all, David enjoys the fact that he gets the opportunity to help design and redesign something new from scratch. Being able to create a web application that enables brands to reach out to their customer’s needs and seeing the reaction on their face when they see the final result is one of the best feeling to him.
			  <br><br>
  			If you see him pondering back and forth, or with an earphone on one ear sitting in front of a computer screen, it is most likely that he is on the verge of resolving a bug from his code! When David is not at the desk working on a project, you are most likely to find him sketching on a sketchbook, practicing his coding and programming skills by watching tutorials and building personal projects, or spending time with loved ones.
        </p>
    </div>
</section>
<footer>
<div class="container">
  <div class="col-lg-3">
  <h3>Our Site</h3>
  <ul>
    <li><a href="/index.php">Home</a></li>
    <li><a href="/index.php#form">Contact Us</a></li>
    <li><a href="/terms.php">Terms and Conditions</a></li>
    <li><a href="/privacy.php">Privacy Policy</a></li>
  </ul>
  </div>
  <div class="col-lg-3">
  <h3>Let's Connect!</h3>
  <ul>
    <li>+1 (866) 810-1066</li>
    <li>info@invent<span class="i2vRed">2</span>vision.com</li>
    <li>
    <ul class="sMediaList">
      <li><a href="https://www.facebook.com/invent2vision/" target="_blank"><i class="fab fa-facebook-square"></i></a></li>
      <li><a href="https://twitter.com/invent2vision" target="_blank"><i class="fab fa-twitter"></i></a></li>
      <li><a href="https://www.youtube.com/channel/UCO1mnBQVn2htaLr_nuBnH4Q" target="_blank"><i class="fab fa-youtube"></i></a></li>
      <li><a href="https://plus.google.com/u/4/103187553370973302372" target="_blank"><i class="fab fa-google-plus-square"></i></a></li>
      <li><a href="https://www.instagram.com/invent2vision/?hl=en" target="_blank"><i class="fab fa-instagram"></i></a></li>
    </ul>
    </li>
  </ul>
  </div>
  <div class="col-lg-5">
  <h3>Invent<span class="i2vRed">2</span>Vision</h3>
  <p>Invent<span class="i2vRed">2</span>Vision is a Southern California startup cooperative, comprised of talented professionals who provide a vast assortment of exceptional skills, cutting-edge creativity, masterful production techniques, and services.</p>
  <p>If you are looking for assistance with your invention ideas, professional assistance with your startup, support with a business setup or launch, or if you want to invest in the next great invention project, or maybe you would like to be apart of the I<span class="i2vRed">2</span>V team, all you have to do is contact us to schedule an appointment with a member of our I<span class="i2vRed">2</span>V team. We look forward to hearing from you!</p>
  </div>
</div>
<div class="container copyright">
  <p> &copy; <?php echo date("Y"); ?> Invent<span class="i2vRed">2</span>Vision</p>
  <div class="hideme">
  <a id="back-to-top" href="#"><i class="fas fa-angle-up"></i></a>
  </div>
</div>
</footer>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="../js/script.js"></script>
</html>