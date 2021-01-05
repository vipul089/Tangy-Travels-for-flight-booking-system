<?php
include("config.php");
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Feedback</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    <?php
	include("nav.php");
	?>
   

    <div class="site-blocks-cover inner-page-cover" style="background-image: url(images/hero_bg_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">

            <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
              <h1 class="text-white font-weight-light">Get In Touch</h1>
              
            </div>
          </div>
        </div>
      </div>  


    
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-7 mb-5">

          

            <form action=""  method="GET" class="p-5 bg-white">
             

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="fname">First Name</label>
					 <input type="text" id="fname" value="" name="fname" class="form-control" placeholder="First Name">
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="lname">Last Name</label>
                  <input type="text" id="lname"  value="" name="lname" class="form-control"
						 placeholder="Last Name">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label> 
                  <input type="email" id="email"  value="" name="email" class="form-control"
						 placeholder="Email">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="subject">Subject</label> 
                  <input type="text" id="sub"  value="" name="sub" class="form-control"
						 placeholder="Subject">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">Message</label> 
                  <textarea  type="text" id="note"  value="" name="note" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..."></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" name="submit" value="Send Message" class="btn btn-primary py-2 px-4 text-white">
                </div>
              </div>

  
            </form>
			  <?php
	if($_GET['submit'])
	{
	    $fname = $_GET['fname'];
		$lname = $_GET['lname'];
		$email = $_GET['email'];
		$sub = $_GET['sub'];
		$note = $_GET['note'];
		if($fname!="" && $lname!="" && $email!="" && $sub!="" && $note!="")
          {       
	        	$query ="insert into contect values('$fname','$lname','$email','$sub','$note')";
	            $data= mysqli_query($conn, $query);
			    if($data)
			     {
				     echo" <p> <font color=black size='6pt'><b>Your Message Has Been Send</b></font>";
			     }
		  }
		    else
		     {
		         echo" <p> <font color=black size='6pt'><b>All fields are required</b></font>";
		
		     }
	}
?>
          </div>
          <div class="col-md-5">
            
            <div class="p-4 mb-3 bg-white">


              <p class="mb-0 font-weight-bold">Phone</p>
              <p class="mb-4"><a href="#">7668844924 & 8077125652</a></p>

              <p class="mb-0 font-weight-bold">Email Address</p>
              <p class="mb-0"><a href="#">tangytravel@gmail.com</a></p>

            </div>
            
            <div class="p-4 mb-3 bg-white">
              <img src="images/hero_bg_1.jpg" alt="Image" class="img-fluid mb-4 rounded">
           
              <p>Travel can be done by foot, bicycle, automobile, train, boat, bus, airplane, ship or other means, with or without luggage, and can be one way or round trip. Travel can also include relatively short stays between successive movements.</p>
            
            </div>

          </div>
        </div>
      </div>
    </div>

    
    <br/>
	  <?php
	  include("footer.php");
	  ?>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>