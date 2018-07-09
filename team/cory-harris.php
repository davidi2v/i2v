<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>The Invent2Vision Team | Cory Harris</title>
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
          <h1>Cory Harris</h1>
          <h3>Music Director &amp; <br>Social Media Management</h3>
        </div>
        <p class="text">
          Cory Harris is the Social Media manager for Invent2Vision. As the Music Director, he also writes and produces the jingles for each I2V product. Clearly a talented wordsmith, he continues to build his own lane. Along with his digital marketing skills, Cory writes catchy jingles that standout from all the other clutter, thus creating a strong brand voice while delivering an addictive tune people will be humming subconsciously throughout their day.
          <br><br>
          Cory’s passion for music is what makes him stand out. At the early age of 7, he decided that he wanted to pursue music as a career. By the time he turned 11, he was already writing rhymes. Due to his parents break up, he began to use writing as an escape from reality. "I loved rap music because that’s what my dad was into," says Cory "and when he moved out I felt that if I rapped too, it would eventually bring us closer." At 12 years old, he recorded his first song professionally titled “What’s Up Now.” Since then he’s released 4 mixtapes and 1 EP. Cory attended the Art Institute of Los Angeles to pursue his passion and hone his craft by advancing his technical skills while becoming more well-rounded as he entered the business world of music and marketing.
          <br><br>
          As the social media manager for I2V, Cory makes each product stand out in its own way. He creates content to post daily and studies analytics to help improve interactions with potential customers. From inspirational quotes to videos showing how to use the products, Cory teams up with Scratch to get the job done! There are several different social media platforms and each one takes a different approach. Its Cory’s job to find out what works. What are people talking about? What keeps people interested? How to gain followers? Etc... He uses programs like Photoshop and Final Cut Pro to create content that’ll keep followers tuned in.
          <br><br>
          Cory’s commitment is undeniable, and his personal goals are motivational. His objective is to hit more than 100,000 followers for each brand that I2V produces by continually being resourceful and developing his digital marketing knowledge. He also loves and will continue to touch people's minds and hearts with his addictive jingles that make people smile. He has a plan, now watch him bring that vision into reality.
        </p>
    </div>
</section>

<?php
include('footer.php');
?>