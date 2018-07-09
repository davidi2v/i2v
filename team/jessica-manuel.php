<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>The Invent2Vision Team | Jessica Manuel O'neal</title>
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
          <h1>Jessica Manuel O'neal</h1>
          <h3>Chief Financial Officer</h3>
        </div>
        <p class="text">
          Jessica Manuel-O’Neal serves as the CFO of Invent2Vision. She attended Pacific Coast College to study Journalism. While studying, she worked in a small business and got hands on experience in office administration. Finding work as a writer proved difficult, and her work experience only seemed to open doors for her to work in the accounting field. She started working for a woman owned garment manufacturing company, and her employer quickly became her mentor. She decided to go back to school at LASWC and receive her certification in Business Administration/Bookkeeping.
          <br><br>
          She went on to work for Ernst & Young as an internal auditor. When E&Y merged with Leventhal, her department was relocated to Houston, TX. She decided to stay in California, and Joined Herbalife International. She was promoted within the organization three times. She started in Royalty Overrides, and left as the Sr. Legal Accounts Coordinator, working directly with all active Vice Presidents in each division. She was certified in all Microsoft products and joined the I.M.P.A.C.T team, as the accounting liaison. Her responsibilities included research and analysis used by the IT department to implement the new operating system used worldwide. She received her Database Structure Certification, and when she left Herbalife, started working with some of the top Direct Response Marketers in the industry.
          <br><br>
          As the accounting manager working directly with the CFO, she handled all scopes of accounting. She eventually focused her skills on forensic data analysis creating tools that helped with decision making.
          <br><br>
          Jessica has served in several results driven positions. Most recently, Jessica served for ten years in the capacity of Corporate Controller. She focused on structure, reorganization, and expansion. She was instrumental in helping organizations grow their revenues four-fold within a short span of time. Overall Jessica has amassed over 25 years of experience, and coupled with her leadership and team building skills, she is the most qualified person to lead this team to success. She has an intricate ability to select the most qualified leaders, develop new talent, and give hands on motivation. Her commitment to each product and idea is unmatched, and her determination to make them come to fruition, creates an environment for everyone to succeed.</p>
    </div>
</section>

<?php
include('footer.php');
?>