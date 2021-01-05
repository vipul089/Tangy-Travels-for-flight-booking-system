<?php
include('config.php');

error_reporting(0);


$query = "Select * from flight where from='$from' or to='$to'";
$data = mysqli_query($conn, $query);
$result = mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Flight</title>
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
    
    
	  <style>
		 
		  .ta{
			  width: 90%;
			  background-color: skyblue;
			  line-height: 100px;
			  align-content: center;
		  }
	  </style>
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
    
    
	 <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-7 mb-5">
         <p> <font color=black size='6pt'><b>Search Flights</b></font>
         

            <form action="" method="POST" class="p-5 bg-white">
              

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="from">From</label>
                  <input type="text" id="from" value="" name="from" class="form-control" placeholder="">
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="to">To</label>
                  <input type="text" id="to" value="" name="to" class="form-control" placeholder="">
                </div>
              </div>

             
                <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" name="submit" value="Search" class="btn btn-primary py-2 px-4 text-white">
                </div>
              </div>
			  </form>

  </div>
			  
      
            
              <div class="col-md-5">
           <div class="p-4 mb-3 bg-white">
              <img src="images/hero_bg_1.jpg" alt="Image" class="img-fluid mb-4 rounded">
        
             
            
          

          </div>
			   </div>
        </div>
      </div>
	  
	  
	  <center>
	  
		  <table border="0" class="ta" align="center">
  <tr>
    <th width="10%" style="color: black; font-size: 16pt; font: oblique;">Airlines</th>
    <th width="10%" style="color: black; font-size: 16pt; font: bold;">From</th>
    <th width="10%" style="color: black; font-size: 16pt; font: bold;">To</th>
	<th width="10%" style="color: black; font-size: 16pt; font: bold;">Adults</th>
	<th width="10%" style="color: black; font-size: 16pt; font: bold;">Type</th>
    <th width="10%" style="color: black; font-size: 16pt; font: bold;">Dep Time</th>
    <th width="10%" style="color: black; font-size: 16pt; font: bold;">Date</th>
    <th width="10%" style="color: black; font-size: 16pt; font: bold;">Duration</th>
    <th width="10%" style="color: black; font-size: 16pt; font: bold;">Price</th>
    <th width="10%" style="color: black; font-size: 16pt; font: bold;"></th>
		  </tr></table>
		  
<?php
if(isset($_POST['submit']))
{
	$from = $_POST['from'];
	$to = $_POST['to'];
	$query = "SELECT * FROM flight WHERE dep_st = '$from' && arr_st = '$to' ";
	$data = mysqli_query($conn, $query);
	$total = mysqli_num_rows($data);
	if($total!=0)
	{
		while($result = mysqli_fetch_assoc($data))
		{
			echo "<table class='ta' width='100%' border='0'>
			<tr>
				<th width='10%'>".$result['air_name']."</th>
				<th width='10%'>".$result['dep_st']."</th>
				<th width='10%'>".$result['arr_st']."</th>
				<th width='10%'>".$result['nop']."</th>
				<th width='10%'>".$result['type']."</th>
				<th width='10%'>".$result['dep_time']."</th>
				<th width='10%'>".$result['date']."</th>
				<th width='10%'>".$result['dur_time']."</th>
				<th width='10%'>".$result['hop']."</th>
				<th width='10%'>" ?><a href="booking.php"><?php echo "Book Now</a> </th>
				</tr><br/>";
		}
	}
	else
	{
		echo "<p> <font color=green size='6pt'><b> <center> No Record Found </b></font></p>";
	}
}		
		
	

?> 
		  </table>
	  </center>
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
    </div>
	</body>
    </html>