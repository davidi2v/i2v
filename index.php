<?php
$feedback =''; //empty until there is feedback.
if (isset($_POST['lName']))
{
	/*-------------------------------------
	| Initialize Variables
	-------------------------------------*/
	$to = "davidjuarez1411@gmail.com";
	$subject = "Invent2Vision Contact Form";
	$fName = $_POST['fName'];
	$lName = $_POST['lName'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];
	/*-------------------------------------
	| Validation
	-------------------------------------*/
	if ($fName == '' || $lName == '' || $email == '' || $phone == '' || $message == '')
	{
		$feedback = 'Fill out all the fields';
	}
	else
	{
		/*-------------------------------------
		| Compose
		-------------------------------------*/
		$body = '
			Hi! My name is ' . $fName . ' ' . $lName . ' and my message is, <br><br>
			' . $message . '<br>
			Sincerely,<br>
			' . $lName . '<br>
			P.S. Oh yeah, my email is ' . $email . '. Also, you can call me at' . $phone . '.';
		/*-------------------------------------
		| Make it look like a real email
		-------------------------------------*/
		$headers = "From: davidjuarez1411@gmail.com" . "\r\n";
		$headers .= "Reply-To: ". strip_tags($_POST['req-email']) . "\r\n";
		// $headers .= "CC: susan@example.com\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		/*-------------------------------------
		| Send the email
		-------------------------------------*/
		if (!mail($to, $subject, $body, $headers))
		{
			$feedback = 'I apologize! We were unable to send from our hosted server. Please contact me directly <a href="mailto:davidjuarez1411@gmail.com">here</a>.';
		}
		else
		{
			$feedback = 'Message Sent from our servers. Let\'s hope it gets through the mail servers!';
		}
	}
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Invent2Vision | Homepage</title>
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
            <li class="active"><a href="index.php">Home</a></li>
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
                 <li><a href="services/product-development.php">Product Development</a></li>
                 <li><a href="services/manufacturing.php">Manufacturing</a></li>
                 <li><a href="services/marketing.php">Marketing</a></li>
                 <li><a href="services/fulfillment.php">Fulfillment</a></li>
                 <li><a href="services/financial-management.php">Financial Management</a></li>
                 <li><a href="services/business-development.php">Business Development</a></li>
               </ul>
              <?php
              // 	endwhile;
              // endif;
              ?>
            </li>
            <li><a id="contactHome" href="#form">Contact Us</a></li>
          </ul>
        </div>
      </div>
    </nav>
  <main>
    <section>
      <div>
        <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
            <li data-target="#myCarousel" data-slide-to="5"></li>
            <li data-target="#myCarousel" data-slide-to="6"></li>
            <li data-target="#myCarousel" data-slide-to="7"></li>
            <li data-target="#myCarousel" data-slide-to="8"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner">

            <div class="item active">
              <img src="img/png/edison.png" alt="Thomas Alva Edison" style="width:100%;">
              <div class="carousel-caption">
                <h3>Thomas Alva Edison</h3>
                <p>I invented the phonograph, the motion picture camera, and the light bulb.</p>
                <p>How will you make your mark on history?</p>
                <a class="c2A" href="#form">Change the World!</a>
              </div>
            </div>

            <div class="item">
              <img src="img/png/askins.png" alt="Barbara Askins" style="width:100%;">
              <div class="carousel-caption">
                <h3>Barbara Askins</h3>
                <p>I invented a method to enhance underexposed photographic negatives used extensively by NASA and the medical industry.</p>
                <p>What will your picture be in the history books?</p>
                <a class="c2A" href="#form">Change the World!</a>
              </div>
            </div>

            <div class="item">
              <img src="img/png/wrights.png" alt="Orville & Wilbur Wright" style="width:100%;">
              <div class="carousel-caption">
                <h3>Orville & Wilbur Wright</h3>
                <p>We invented the airplane.</p>
                <p>To what heights will your invention take us?</p>
                <a class="c2A" href="#form">Change the World!</a>
              </div>
            </div>

            <div class="item">
              <img src="img/png/hopper.png" alt="Grace Hopper" style="width:100%;">
              <div class="carousel-caption">
                <h3>Grace Hopper</h3>
                <p>I invented the first Compiler for computer software.</p>
                <p>What's your program?</p>
                <a class="c2A" href="#form">Change the World!</a>
              </div>
            </div>

            <div class="item">
              <img src="img/png/tesla.png" alt="Nikola Tesla" style="width:100%;">
              <div class="carousel-caption">
                <h3>Nikola Tesla</h3>
                <p>I invented A/C power, the foundation of our modern power grid.</p>
                <p>How will you power innovation?</p>
                <a class="c2A" href="#form">Change the World!</a>
              </div>
            </div>

            <div class="item">
              <img src="img/png/davinci.png" alt="Leonardo DaVinci" style="width:100%;">
              <div class="carousel-caption">
                <h3>Leonardo DaVinci</h3>
                <p>I invented the parachute, armored car, machine gun, and a precursor to the helicopter.</p>
                <p>What will be your masterpiece?</p>
                <a class="c2A" href="#form">Change the World!</a>
              </div>
            </div>

            <div class="item">
              <img src="img/png/lamarr.png" alt="Hedy Lamarr" style="width:100%;">
              <div class="carousel-caption">
                <h3>Hedy Lamarr</h3>
                <p>I invented a torpedo guidance system which could not be jammed by enemy combatants, a technology which is now used in Wi-Fi, CDMA, and Bluetooth systems.</p>
                <p>How will you make your mark on history?</p>
                <a class="c2A" href="#form">Change the World!</a>
              </div>
            </div>

            <div class="item">
              <img src="img/png/grahambell.png" alt="Alexander Graham Bell" style="width:100%;">
              <div class="carousel-caption">
                <h3>Alexander Graham Bell</h3>
                <p>I invented the Telephone.</p>
                <p>Can you hear me now?</p>
                <a class="c2A" href="#form">Change the World!</a>
              </div>
            </div>

            <div class="item">
              <img src="img/png/hazenANDbrown.png" alt="Elizabeth Lee Hazen & Rachel Fuller Brown" style="width:100%;">
              <div class="carousel-caption">
                <h3>Elizabeth Lee Hazen & Rachel Fuller Brown</h3>
                <p>We invented Nystatin, the first effective anti-fulngal medication.</p>
                <p>How will you make the world a better place?</p>
                <a class="c2A" href="#form">Change the World!</a>
              </div>
            </div>

          </div>

          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </section>
    <section>
      <div class="socialMediaDiv">
        <div class="container socialMedia">
          <div class="row">
            <div class="col-sm-3 col-xs-6 logos">
              <a href="https://www.facebook.com/invent2vision/" target="_blank"><i class="fab fa-facebook-square"></i></a>
            </div>
            <div class="col-sm-3 col-xs-6 logos">
              <a href="https://www.instagram.com/invent2vision/?hl=en" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
            <div class="col-sm-3 col-xs-6 logos">
              <a href="https://twitter.com/invent2vision" target="_blank"><i class="fab fa-twitter"></i></a>
            </div>
            <div class="col-sm-3 col-xs-6 logos">
            <a href="https://www.youtube.com/channel/UCO1mnBQVn2htaLr_nuBnH4Q" target="_blank"><i class="fab fa-youtube"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container mission">
        <div class="innerDiv">
          <h1>I<span class="i2vRed">2</span>V MISSION</h1>
          <h3>Our mission is to help the world by helping others make their dreams come true.</h3>
          <blockquote>
            <p>Let us help you to develop your products marketing and service policies, programs and systems to best support the strategic direction and alignment with your goals. We are able to make sure the best outcome possible with poignant messaging your target audience will respond to.</p>
            <p>Our team will develop your brand from start to finish, manage pricing structures, provide leadership support for all areas of design and media management, development of joint ventures, affiliations and partnership arrangements.</p>
            <p>The team will oversee and direct market research, competitor analysis, customer service and retention processes along with sales initiatives.</p>
            <p>We are a group of strategic thinkers and know with our vast knowledge of Project Management and Financial Management we can get your project launched the way you dreamed of!</p>
            <span>Jessica Manuel O'Neal, CFO</span>
          </blockquote>
        </div>
      </div>
    </section>
    <section>
      <div class="container services">
        <h1 style="padding-bottom: 25px;" class="text-center">OUR SERVICES</h1>
        <div class="row">
          <div class="col-sm-4 serviceDiv">
            <img src="img/gif/productDevelopment.gif" alt="Product Development">
            <h3>Product Development</h3>
            <p>From concept to reality we can bring your vision to life. Every project we review starts with a concept or prototype which we use to research and develop into...</p>
            <a href="services/product-development.php">Read More</a>
          </div>
          <div class="col-sm-4 serviceDiv">
            <img src="img/gif/manufacturing.gif" alt="Manufacturing">
            <h3>Manufacturing</h3>
            <p>We are able to provide everything from prototype to production, with full-service manufacturing for a wide array of industries. We are...</p>
            <a href="services/manufacturing.php">Read More</a>
          </div>
          <div class="col-sm-4 serviceDiv">
            <img src="img/gif/marketing.gif" alt="Marketing">
            <h3>Marketing</h3>
            <p>Let us help you develop your products marketing and service policies, programs and systems, to best support the strategic direction and...</p>
            <a href="services/marketing.php">Read More</a>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4 serviceDiv">
            <img src="img/gif/fulfillment.gif" alt="Fulfillment">
            <h3>Fulfillment</h3>
            <p>I2V can execute all your fulfillment needs. We handle drop shipments direct from the manufacturing plant, individual packages delivered from...</p>
            <a href="services/fulfillment.php">Read More</a>
          </div>
          <div class="col-sm-4 serviceDiv">
            <img src="img/gif/financialManagement.gif" alt="Financial Management">
            <h3>Financial Management</h3>
            <p>The Financial team can maximize the return on financial assets by establishing and enforcing financial policies, procedures, controls, and...</p>
            <a href="services/financial-management.php">Read More</a>
          </div>
          <div class="col-sm-4 serviceDiv">
            <img src="img/gif/businessDevelopment.gif" alt="Business Development">
            <h3>Business Development</h3>
            <p>We can advise and assist with the setup of the following business needs; trademark, patent, copyrights, corporate identification, business relationship...</p>
            <a href="services/business-development.php">Read More</a>
          </div>
        </div>
      </div
    </section>
    <section>
      <div class="featInventor parallax desktop">
        <div class="container inventorBlock">
          <img class="star" id="inventor" src="img/png/miguelAvila.png" alt="Miguel Avila">
          <div class="innerContent">
            <h3>Featured Inventor</h3>
            <h2>Miguel Avila</h2>
            <h3>Inventor of Perslice</h3>
            <p>"When I was little, my father gave me a book called "How things work" and there began my fascination to create and know how everything works. When I see a generator on the street, or listen to the radio, or lights on the street, I would immediately get my book and plunge into the pages to see how everything I had seen worked."</p>
            <p>- Miguel Avila</p>
            <a href="https://www.persliceusa.com" target="_blank"><i class="fas fa-th"></i> Check out Miguel's Perslice</a>
          </div>
        </div>
      </div>
      <div class="featInventor mobile">
        <div class="container inventorBlock">
          <img class="star" id="inventor" src="img/png/miguelAvila.png" alt="Miguel Avila">
          <div class="innerContent">
            <h3>Featured Inventor</h3>
            <h2>Miguel Avila</h2>
            <h3>Inventor of Perslice</h3>
            <p>"When I was little, my father gave me a book called "How things work" and there began my fascination to create and know how everything works. When I see a generator on the street, or listen to the radio, or lights on the street, I would immediately get my book and plunge into the pages to see how everything I had seen worked."</p>
            <p>- Miguel Avila</p>
            <img id="invention" src="img/jpg/perslice.jpeg" alt="Perslice Packaging">
            <a href="https://www.persliceusa.com" target="_blank"><i class="fas fa-th"></i> Check out Miguel's Perslice</a>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container theTeam">
        <div class="divHeader">
          <h1>THE TEAM</h1>
          <h3>THE VISIONARIES BEHIND I<span>2</span>V</h3>
        </div>
        <div class="row">
            <div class="col-sm-4 col-sm-12 teamDiv">
              <div class="team">
              <h3 class="name">Carlos Landazuri</h3>
              <p class="title">Chief Executive Officer</p>
              <p class="descr">Invent2Vision CEO and founder Carlos Landazuri has been developing new...</p>
              <a href="team/carlos-landazuri.php">Read More</a>
            </div>
          </div>
            <div class="col-sm-4 col-sm-12 teamDiv">
              <div class="team">
              <h3 class="name">Jessica Manuel O'Neal</h3>
              <p class="title">Chief Financial Officer</p>
              <p class="descr">Jessica Manuel-O’Neal serves as the CFO of Invent2Vision. She attended Pacific...</p>
              <a href="team/jessica-manuel.php">Read More</a>
            </div>
          </div>
            <div class="col-sm-4 col-sm-12 teamDiv">
              <div class="team">
              <h3 class="name">Shelley Scott-Mahoney</h3>
              <p class="title">Chief Marketing Officer</p>
              <p class="descr">As the Chief Marketing Officer for Invent2Vision, Shelley is constantly searching...</p>
              <a href="team/shelley-mahoney.php">Read More</a>
            </div>
          </div>
        </div>
        <div class="row row2">
          <div class="col-sm-3 col-sm-12 teamDiv">
            <div class="team">
              <h3 class="name">Griselda Leandro-Macias</h3>
              <p class="title">Executive Administrative Assistant</p>
              <p class="descr">Griselda Leandro is the Executive Administrative Assistant at Invent2Vision. She...</p>
              <a href="team/griselda-leandro.php">Read More</a>
            </div>
          </div>
          <div class="col-sm-3 col-sm-12 teamDiv">
            <div class="team">
              <h3 class="name">Cory Harris</h3>
              <p class="title">Music Director & Social Media Management</p>
              <p class="descr">Cory Harris is the Social Media manager for Invent2Vision. As...</p>
              <a href="team/cory-harris.php">Read More</a>
            </div>
          </div>
          <div class="col-sm-3 col-sm-12 teamDiv">
          <div class="team">
            <h3 class="name">Jessica "Scratch" Lee</h3>
            <p class="title">Graphic Designer</p>
            <p class="descr">Jessica Le is one of the Graphic Designers at Invent2Vision. Everyone calls her...</p>
            <a href="team/jessica-le.php">Read More</a>
          </div>
          </div>
          <div class="col-sm-3 col-sm-12 teamDiv">
            <div class="team">
              <h3 class="name">David Juarez</h3>
              <p class="title">Web &amp; Graphic Designer</p>
              <p class="descr">David Juarez is Invent2Vision's Web & Graphic Designer. He graduated from Mt Sierra...</p>
              <a href="team/david-juarez.php">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div id="form" class="container form">
        <div class="divHeader text-center">
          <h1>HAVE ANY QUESTIONS?</h1>
          <h3>CONTACT US TODAY AND WE WILL RESPOND AS SOON AS POSSIBLE!</h3>
        </div>
        <?php if (!empty($feedback)) : ?>
  			<div class="alert alert-info emailAlert" id ="alert">
  				<?php echo $feedback; ?>
  			</div>
  		<?php endif; ?>
      <form method="post" action="#alert" id="contact" class="form-horizontal  text-left">
        <div class="form-group text-left">
          <label for="fName">First Name:</label>
          <input name="fName" type="text" class="form-control" id="fName" placeholder= "First name">
        </div>
        <div class="form-group text-left">
          <label for="lName">Last Name:</label>
          <input name="lName" type="text" class="form-control" id="lName" placeholder= "Last name">
        </div>
        <div class="form-group text-left">
          <label for="email">Email:</label>
          <input name="email" type="email" class="form-control" id="email" placeholder= "example@email.com">
        </div>
        <div class="form-group text-left">
          <label for="phone">Phone Number:</label>
          <input name="phone" type="text" class="form-control" id="phone" placeholder= "What is your phone number?">
        </div>
        <div class="form-group text-left">
          <label for="message">Message:</label>
          <textarea class="form-control" rows="4" cols="50" id="message" name="message" style="width:100%" placeholder= "Type message here..." ></textarea>
        </div>
        <input id="submitButton" type="submit" value="Submit" name="submit">
      </form>
      </div>
    </section>
    <!-- <section>
		<div class="contact" id="contactMe">
			<h1 class="text-center">Contact me</h1>
			<form method="post" action="#alert" id="contact" class="form-horizontal  text-left">
				<div class="form-group text-left">
					<label for="name">Name:</label>
					<input name="name" type="name" class="form-control" id="name" placeholder= "Who will I be communicating with?">
				</div>
				<div class="form-group text-left">
					<label for="email">Email:</label>
					<input name="email" type="email" class="form-control" id="email" placeholder= "What is your email?">
				</div>
				<div class="form-group text-left">
					<label for="subject">Subject:</label>
					<input name="subject" type="text" class="form-control" id="subject" placeholder= "What is your email about?">
				</div>
				<div class="form-group text-left">
					<label for="message">Message:</label>
					<textarea class="form-control" rows="4" cols="50" id="message" name="message" style="width:100%" placeholder= "Type message here..." ></textarea>
				</div>
				<input id="submitButton" type="submit" value="Submit" name="submit">
			</form>
		</div>
    </section> -->
  </main>
  <footer>
  <div class="container">
    <div class="col-lg-3">
    <h3>Our Site</h3>
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="#form">Contact Us</a></li>
      <li><a href="terms.php">Terms and Conditions</a></li>
      <li><a href="privacy.php">Privacy Policy</a></li>
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
  <script src="js/script.js"></script>
</html>