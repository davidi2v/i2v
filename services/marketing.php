<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Marketing | Invent2Vision Services</title>
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
            <li><a href="/index.php">Home</a></li>
            <li class="dropdown active">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Services<span class="caret"></span></a>
              <ul class="dropdown-menu">
                 <li><a href="product-development.php">Product Development</a></li>
                 <li><a href="manufacturing.php">Manufacturing</a></li>
                 <li><a href="marketing.php">Marketing</a></li>
                 <li><a href="fulfillment.php">Fulfillment</a></li>
                 <li><a href="financial-management.php">Financial Management</a></li>
                 <li><a href="business-development.php">Business Development</a></li>
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
        <img src="../img/gif/marketing.gif">
        <h1>Marketing</h1>
        <p class="text">Let us help you develop your products marketing and service policies, programs and systems, to best support the strategic direction and alignment with your objectives. Our team is comprised of talented professionals who provide a vast assortment of exceptional skills, cutting-edge creativity, masterful production techniques, and services.</p>
    </div>
    <?php
    // endif;
    ?>
</section>
<footer>
<div class="container">
  <div class="col-lg-3">
  <h3>Our Site</h3>
  <ul>
    <li><a href="/index.php">Home</a></li>
    <li><a href="/index.php#form">Contact Us</a></li>
    <li><a href="%20pages/terms.html">Terms and Conditions</a></li>
    <li><a href="%20pages/privacy-policy.html">Privacy Policy</a></li>
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