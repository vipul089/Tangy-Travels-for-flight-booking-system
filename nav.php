<?php
  session_start();
  require_once 'config.php';
  error_reporting(0);
  ?>
    <header class="site-navbar py-1" role="banner">

      <div class="container">
        <div class="row align-items-center">
			
           <img src="images/T4.png" alt="Image" class="img-fluid">
          <div class="col-6 col-xl-2">
			 
            <h1 class="mb-0"><a href="index.html" class="text-black h2 mb-0">Tangy Travels</a></h1>
          </div>
          <div class="col-10 col-md-8 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right text-lg-center" role="navigation">

              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                <li>
                  <a href="Home.php">Home</a>
                </li>
				  <li><a href="destination.php">Destinations</a></li>
   
               
                <li><a href="Flight.php">Flight</a></li>
                <li><a href="blog.php">Blog</a></li>
                 <li><a href="about.php">About</a></li>
                <li><a href="feedback.php">Feedback</a></li>
				 
              <?php

        if(isset($_SESSION['valid'])!=true){
          ?>
          
          <li><a href="signin.php">Sign In</a></li>
          <li><a href="signup.php">Sign Up</a></li>
         
          
        
        <?php
        }
        else{
          ?>
          <ul>
          <li><a href="#">Profile</a></li>
          <li><a href="signout.php">Logout</a></li>
          </ul>
          <?php
        }
        ?>
        </ul>
            </nav>
          </div>
             <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>


        </div>
      </div>
      
    </header>