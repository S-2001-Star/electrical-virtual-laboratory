<?php
  require('connection.php');
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">
  <title>ELECTRICAL VLAB</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css'>
  <link rel="stylesheet" href="src/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js'></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script  src="js/script.js"></script>
  <script src="https://apis.google.com/js/platform.js" async defer></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>
<!------------NAVBAR----------------->
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark" id="nav_bar">
      <div class="container-fluid">
        <div href="#" class="navbar-brand">
          <img src="src\nav-logo.png" width="70" alt="" class="d-inline-block align-middle">
          <a class="text font-weight-bold" id="items-1" href="#">eV LAB</a>
          <a class="text-uppercase font-weight-bold" id="items" href="#about-us">ABOUT US</a>
        </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
              <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav navbar-float" id="nav-items">
          <li class="nav-item" id="nav-home"><a class="nav-link" href="index.php">HOME</a></li> 
          <li class="nav-item" id="nav-labs"><a class="nav-link" href="#evlabs">eV&nbsp;LABS</a></li>

          <?php
            if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true){
              // echo "Welcome, $_SESSION[name] - <a href='logout.php'>LOGOUT</a>";\
              echo "<li class='nav-item dropdown'>
              <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown2' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
              Dropdown
              </a>
              <div class='dropdown-menu' aria-labelledby='navbarDropdown2'>
                <a class='dropdown-item' href='#'>Action</a>
                <a class='dropdown-item' href='#'>Another action</a>
                <div class='dropdown-divider'></div>
                <a class='dropdown-item' href='#'>Something else here</a>
              </div>
            </li>";
            }
            else{
              echo "<li class='nav-item' id='nav-log'><a class='nav-link' id='cust_btn'>LOG&nbsp;IN</a></li>
              <li class='nav-item' id='nav-sign'><a class='nav-link' id='cust_btn1'>SIGN&nbsp;UP</a></li>";
            }
          ?>
          <script src="js\login_register.js"></script>
          <!-- <li class="nav-item" id="nav-log"><a class="nav-link" id="cust_btn">LOG&nbsp;IN</a></li>
          <li class="nav-item" id="nav-sign"><a class="nav-link" id="cust_btn1">SIGN&nbsp;UP</a></li> -->
        </ul>


        <!-- <div class="dropdown">
          <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
            Log In
          </a>
        
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </div> -->
      </div>
      </div>
    </nav>
  </header>
<!---------------LOGIN SECTION------------->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
       <h2 class="login-head">LOGIN</h2><br>
      <form id="form_design" action="login_register.php" method="post">
        <div class="container-fluid">
          <div class="form-floating" id="place1">
            <input type="text" placeholder="name@example.com" name="email_contno" class="form-control" id="floatingInput">
            <label for="floatingInput" id="label-id">Email address/Contact Number</label>
          </div>
        </div>
        <div class="container-fluid">
          <div class="form-floating" id="place1">
            <input type="password" placeholder="Password" name="password" class="form-control" id="floatingPassword">
            <label for="floatingPassword" id="label-id">Password</label>
          </div>
        </div>

        <!-- <div class="container-fluid" id="go-captcha">
           <form id="google_captcha" action="?" method="POST">
             <div class="g-recaptcha" id="google_captcha_1" data-sitekey="your_site_key"></div>
           </form>
           <br>
        </div> -->

        <div class="container-fluid">
          <button class="gradient" id="gradient_submit" type="submit" name="login" value="submit">LOGIN</button><br>
        </div>

        <!-- <div id="go-captcha">
        <div class="container-fluid">
          <div class="col">
            <div class="g-signin2" id="google_login" data-onsuccess="onSignIn"></div>
          </div>
        </div>
        </div> -->
          <a class="pass-font" href="forgot_password.html"> Forgot Password ?</a>
          <div>
            <p>Don't have an account ? <a class="pass-font" id="cust_btn1">Create account</a></p>
          </div>
         <div><br></div>
      </form>
     </div>
   </div>
  </div>
</div>
<!------------SIGN UP SECTION------------------->
<div class="modal fade" id="myModal1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <h2 class="login-head">SIGN UP</h2><br>
        <form id="form_design" action="login_register.php" method="post">
          <div class="container-fluid">
            <div class="form-floating" id="place1">
              <input type="name" placeholder="Name" name="name" class="form-control" id="floatingName" required>
              <label for="floatingName" id="label-id">Name</label>
            </div>
          </div>
          <div class="container-fluid">
            <div class="form-floating" id="place1">
              <input type="name" placeholder="University/Institute name" name="inst_name" class="form-control" id="floatingInstitute" required>
              <label for="floatingInstitute" id="label-id">University/Institute name</label>
            </div>
          </div>
          <div class="container-fluid">
            <div class="form-floating" id="place1">
              <input type="text" placeholder="Registration number" name="inst_regdno" class="form-control" id="floatingRegistration" required>
              <label for="floatingRegistration" id="label-id">University/Institute Registration number</label>
            </div>
          </div>  
          <div class="container-fluid">
            <div class="form-floating" id="place1">
              <input type="number" placeholder="Contact Number" name="cont_no" class="form-control" id="floatingContact" required>
              <label for="floatingContact" id="label-id">Contact Number</label>
            </div>
          </div>
          <div class="container-fluid">
            <div class="form-floating" id="place1">
              <input type="email" placeholder="name@example.com" name="email" class="form-control" id="floatingEmail" required>
              <label for="floatingEmail" id="label-id">Email address</label>
            </div>
          </div> 
          <div class="container-fluid">
            <div class="form-check" id="rd-form">
              <label class="form-check-label" id="rd-btn1" for="flexRadioDefault1">
                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" value="Male">
              Male
              </label>
              <label class="form-check-label" id="rd-btn2" for="flexRadioDefault2">
                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" value="Female">
              Female
              </label>
              <label class="form-check-label" id="rd-btn3" for="flexRadioDefault3">
                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault3" value="Others">
              Others
              </label>
            </div>
          </div>
          <div class="container-fluid">
            <div class="form-floating" id="place1">
              <input type="text" placeholder="Branch/Stream" name="branch_stream" class="form-control" id="floatingBranch" required>
              <label for="floatingBranch" id="label-id">Branch/Stream</label>
            </div>
          </div>
          <div class="container-fluid">  
            <div class="form-floating" id="place1">
              <input type="password"  placeholder="Password" name="password" class="form-control" aria-describedby="passwordHelpInline" id="floatingPass" required>
              <label for="floatingPass" id="label-id">Password</label>
            </div>
          </div> 
          <!-- <div class="container-fluid"> 
            <div class="form-floating" id="place1">
              <input type="password" placeholder="Confirm Password" class="form-control" id="floatingConfirm" required>
              <label for="floatingConfirm" id="label-id">Confirm Password</label>
            </div>
         </div> -->
         <div class="container-fluid">
           <button class="gradient" id="gradient_submit" type="submit" name="register" value="submit">SIGN UP</button><br>
         </div>
          <a class="pass-font" href="forgot_password.html"> Sign up with Google</a>
         <div><br></div>
         <!-- <div id="g_id_onload"
         data-client_id="YOUR_GOOGLE_CLIENT_ID"
         data-login_uri="https://your.domain/your_login_endpoint"
         data-auto_prompt="false">
      </div>
      <div class="g_id_signin">
      </div> -->
       </form>
      </div>
    </div>
  </div>
</div>
<script  src="js/lightbox.js"></script>

<!---------------BANNER------------->  
<div id="banner">
  <div class="text-bg">
    <h2 class='pop-out'>ELECTRICAL VIRTUAL LAB</h2>
  </div>
</div>
<!-------------NOTICE------------->
<div class="scrolling-notice">
  <div class="move" id="cssmarquee">
    <span class="lab-notice">LAB&nbsp;NOTICE</span>
  <div class="notice">WELCOME TO ELECTRICAL VIRTUAL LAB</div>
  <div class="notice">Aliquam consequat varius consequat.</div>
  <div class="notice">Fusce dapibus turpis vel nisi malesuada sollicitudin.</div>
  <div class="notice">Pellentesque auctor molestie orci ut blandit.</div>
</div>
</div>
<!------------------ABOUT US------------------->
<div class="about" id="about-us">
  <h1 class="display-3"><b>ABOUT US</b></h1>
</div>
<p class="about-content">
  An electrical virtual lab, also known as an online electrical laboratory, is a digital simulation of an electrical 
  laboratory that allows electrical engineers and technicians to perform experiments, simulations, and tests in a virtual 
  environment. It provides a platform for studying and analyzing electrical systems and components without the need for 
  physical equipment.
<br>
<br>
  One of the key benefits of the electrical virtual lab is that it offers flexibility and accessibility. Engineers and
   technicians can access the virtual lab from anywhere, at any time, providing them with the opportunity to perform 
   experiments and simulations outside of regular working hours. The virtual lab also eliminates the need for expensive 
   equipment and laboratory space, making it a cost-effective solution for engineers and students who need to study and 
   experiment with electrical systems.
</p>
<!---------------LAB SECTION------------------->
<div id="evlabs">
<section class="datashow" id="lab-section-1">
  <div class="container-fluid">
    <div class="row">
      <div class="col animateMe" data-animation="fadeInLeft" id="lab-container">
        <div class="lab-1" id="lab-id">
          <p class="lab-class-be" id="lab_label-1"><a id="be-lab" href="be.php">BASIC ELECTRICAL LAB</a></p>
        </div>
      </div>
      <div class="col animateMe" data-animation="fadeInRight">
        <p class="py-3" id="lab1">
          An electrical laboratory is a specialized workspace where electrical engineers and technicians can 
          perform experiments, develop new technologies, and test electrical systems and components. This type 
          of laboratory is equipped with various tools, instruments, and equipment that are specifically designed 
          for measuring, analyzing, and testing electrical systems.
        </p>
      </div>
    </div>
  </div>
</section>

<section class="datashow" id="lab-section-2">
  <div class="container-fluid">
    <div class="row">
      <div class="col animateMe" data-animation="fadeInLeft">
        <p class="py-3" id="lab2">Lorem ipsum dolor sit amet consectetur adipisicing 
          elit. Voluptate, ducimus saepe doloremque reiciendis explicabo enim 
          molestias perspiciatis velit possimus. Quae magnam modi id doloribus 
          ab velit inventore accusantium ea? Debitis? Rem Lorem ipsum dolor sit amet consectetur adipisicing 
          elit. Voluptate, ducimus saepe doloremque reiciendis explicabo enim 
          molestias perspiciatis velit possimus. Quae magnam modi id doloribus 
          ab velit inventore accusantium ea? Debitis? Rem Voluptate, ducimus saepe doloremque reiciendis explicabo enim 
          molestias perspiciatis velit possimus. Quae magnam modi id doloribus 
          ab velit inventore accusantium ea? Debitis? Rem</p>
      </div>
      <div class="col animateMe" data-animation="fadeInRight" id="lab-container">
        <div class="lab-2">
          <p class="lab-class-nt" id="lab_label-2">NETWORK THEORY</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="datashow" id="lab-section-3">
  <div class="container-fluid">
    <div class="row">
      <div class="col animateMe" data-animation="fadeInLeft" id="lab-container">
        <div class="lab-3" id="lab-id">
          <p class="lab-class-em1" id="lab_label-3">ELECTRICAL MACHINES-I</p>
        </div>
      </div>
      <div class="col animateMe" data-animation="fadeInRight">
        <p class="py-3" id="lab3">Lorem ipsum dolor sit amet consectetur adipisicing 
          elit. Voluptate, ducimus saepe doloremque reiciendis explicabo enim 
          molestias perspiciatis velit possimus. Quae magnam modi id doloribus 
          ab velit inventore accusantium ea? Debitis? Rem Lorem ipsum dolor sit amet consectetur adipisicing 
          elit. Voluptate, ducimus saepe doloremque reiciendis explicabo enim 
          molestias perspiciatis velit possimus. Quae magnam modi id doloribus 
          ab velit inventore accusantium ea? Debitis? Rem Voluptate, ducimus saepe doloremque reiciendis explicabo enim 
          molestias perspiciatis velit possimus. Quae magnam modi id doloribus 
          ab velit inventore accusantium ea? Debitis? Rem</p>
      </div>
    </div>
  </div>
</section>

<section class="datashow" id="lab-section-4">
  <div class="container-fluid">
    <div class="row">
      <div class="col animateMe" data-animation="fadeInLeft">
        <p class="py-3" id="lab4">Lorem ipsum dolor sit amet consectetur adipisicing 
          elit. Voluptate, ducimus saepe doloremque reiciendis explicabo enim 
          molestias perspiciatis velit possimus. Quae magnam modi id doloribus 
          ab velit inventore accusantium ea? Debitis? Rem Lorem ipsum dolor sit amet consectetur adipisicing 
          elit. Voluptate, ducimus saepe doloremque reiciendis explicabo enim 
          molestias perspiciatis velit possimus. Quae magnam modi id doloribus 
          ab velit inventore accusantium ea? Debitis? Rem Voluptate, ducimus saepe doloremque reiciendis explicabo enim 
          molestias perspiciatis velit possimus. Quae magnam modi id doloribus 
          ab velit inventore accusantium ea? Debitis? Rem</p>
      </div>
      <div class="col animateMe" data-animation="fadeInRight" id="lab-container">
        <div class="lab-4">
          <p class="lab-class-em2" id="lab_label-4">ELECTRICAL MACHINES-II</p>
        </div>
      </div>
    </div>
  </div>
</section>
</div>

<!--------------------LAB-SECTION(MOBILE SCREEN)--------------->
<!-- <div id="cards">
<div class="flexbox">
  <div class="lab-card" id="card-1">
    <a id="be-lab" href="be.html"><div class="flex-card fromLeft" id="card-title">BASIC ELECTRICAL LAB</div>
    <div class="card-line"></div>
    <div class="flex-card" id="card-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint soluta provident, corrupti rerum suscipit deleniti nulla modi dignissimos? Inventore itaque nulla adipisci, dolore natus officiis doloribus repellendus eligendi error quibusdam.</div>
    </a>
  </div>

  <div class="lab-card" id="card-2">
    <div class="flex-card fromLeft" id="card-title">NETWORK THEORY</div>
    <div class="card-line-1"></div>
    <div class="flex-card" id="card-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint soluta provident, corrupti rerum suscipit deleniti nulla modi dignissimos? Inventore itaque nulla adipisci, dolore natus officiis doloribus repellendus eligendi error quibusdam.</div>
  </div>

  <div class="lab-card" id="card-3">
    <div class="flex-card fromLeft" id="card-title">ELECTRICAL MACHINES-I</div>
    <div class="card-line"></div>
    <div class="flex-card" id="card-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint soluta provident, corrupti rerum suscipit deleniti nulla modi dignissimos? Inventore itaque nulla adipisci, dolore natus officiis doloribus repellendus eligendi error quibusdam.</div>
  </div>

  <div class="lab-card" id="card-4">
    <div class="flex-card fromLeft" id="card-title">ELECTRICAL MACHINES-II</div>
    <div class="card-line-1"></div>
    <div class="flex-card" id="card-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint soluta provident, corrupti rerum suscipit deleniti nulla modi dignissimos? Inventore itaque nulla adipisci, dolore natus officiis doloribus repellendus eligendi error quibusdam.</div>
  </div>
</div>
</div>
<br> -->

<!-- <div class="container">
  <div class="card">
    <div class="face face1">
      <div class="content">
        <i class="fab fa-windows"></i>
        <h3>Wimdows</h3>
      </div>
    </div>
    <div class="face face2">
      <div class="content">
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem libero voluptatem cum quibusdam est natus? Quisquam blanditiis consequatur optio eu m facere quam vitae sint tempore explicabo harum, qui, nemo ab!</p>
        <a href="#" type="button">Read More</a>
      </div>
    </div>
  </div>
</div> -->

<div class="container-fluid">
  <div class="row" style="justify-content: center;">
<div id="ph-card">
  <div class="card d-flex position-relative flex-column" id="card-1">
      <div class='imgContainer'>
          <h3>BASIC ELECTRICAL LAB</h3>
        </div>
      <div class="content">
        <p>
          An electrical laboratory is a specialized workspace where electrical engineers and technicians can 
          perform experiments, develop new technologies, and test electrical systems and components. This type 
          of laboratory is equipped with various tools, instruments, and equipment that are specifically designed 
          for measuring, analyzing, and testing electrical systems.
        </p>
          <div>
            <a href="be.html"><button class="btn btn-primary">Click Here</button></a>
          </div>
      </div>
  </div>
  <div class="card d-flex position-relative flex-column" id="card-2">
    <div class='imgContainer'>
        <h3>NETWORK THEORY</h3>
      </div>
    <div class="content">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget velit tristique, sollicitudin leo viverra, suscipit neque. Aliquam ut facilisis urna, in pretium nibh.  Morbi in leo in eros commodo volutpat ac sed dolor.</p>
        <div>
          <a href="#"><button class="btn btn-primary">Click Here</button></a>
        </div>
    </div>
  </div>
  <div class="card d-flex position-relative flex-column" id="card-3">
      <div class='imgContainer'>
        <h3>ELECTRICAL MACHINES-I</h3>  
      </div>
      <div class="content">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget velit tristique, sollicitudin leo viverra, suscipit neque. Aliquam ut facilisis urna, in pretium nibh.  Morbi in leo in eros commodo volutpat ac sed dolor.</p>
          <div>
            <a href="#"><button class="btn btn-primary">Click Here</button></a>
          </div>
      </div>
  </div>
    <div class="card d-flex position-relative flex-column" id="card-4">
      <div class='imgContainer'>
        <h3>ELECTRICAL MACHINES-II</h3>  
      </div>
      <div class="content">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget velit tristique, sollicitudin leo viverra, suscipit neque. Aliquam ut facilisis urna, in pretium nibh.  Morbi in leo in eros commodo volutpat ac sed dolor.</p>
          <div>
            <a href="#"><button class="btn btn-primary">Click Here</button></a>
          </div>
      </div>     
  </div>
</div>
</div>
</div>
</div>
<!--------------------FOOTER SECTION--------------------------->
<footer class="text-center text-lg-start" id="footer-section">
  <div class="container p-4 pb-0">
    <section class="">
      <div class="row">
        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-0">
          <div class="clock">
            <div class="outer-face">
              <div class="marking marking-one"></div>
              <div class="marking marking-two"></div>
              <div class="marking marking-three"></div>
              <div class="marking marking-four"></div>
              <div class="inner-face"></div>
           </div>
           <div class="hand hour-hand"></div>
           <div class="hand min-hand"></div>
           <div class="hand second-hand"></div>
         </div>
         <script src="js/clock.js"></script>
        </div>

        <hr class="w-100 clearfix d-md-none" />

        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
          <h6 class="footer-heading">
            <b>Useful links</b>
          </h6>
          <p>
          <a class="links" href="https://gcekbpatna.ac.in/">GCEK</a>
          </p>
          <p>
            <a class="links" href="https://library.gcekbpatna.ac.in/">Central Library GCEK</a>
          </p>
          <p>
            <a class="links" href="">GCEK Student Attendance</a>
          </p>
          <p>
            <a class="links" href="">Virtual Lab Attendance</a>
          </p>
        </div>

        <hr class="w-100 clearfix d-md-none" />

        <div class="col-md-3 col-lg-1 col-xl-1 mx-auto mt-3">
          <h6 class="footer-heading">
            <b>ABOUT</b>
          </h6>
          <p>
            <a class="text" href="index.html">Home</a>
          </p>
          <p>
            <a class="text" href="#about-us">About US</a>
          </p>
          <p>
            <a class="text" href="#evlabs">EV Lab</a>
          </p>
          <p>
            <a class="text" href="#">Notice</a>
          </p>
        </div>

        <hr class="w-100 clearfix d-md-none" />

        <div class="col-md-3 col-lg-1 col-xl-1 mx-auto mt-3">
          <h6 class="footer-heading">
            <b>SUPPORT</b>
          </h6>
          <p>
            <a class="text"style="text-decoration:none" href="#">FAQ</a>
          </p>
          <p>
            <a class="text" href="#">Greviance</a>
          </p>
          <p>
            <a class="text" href="#">Feedback</a>
          </p>
          <p>
            <a class="text" href="#">Enquiry</a>
          </p>
        </div>

        <hr class="w-100 clearfix d-md-none" />

        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
          <h6 class="footer-heading">
            <b>LEGAL</b>
          </h6>
          <p>
            <a class="text"style="text-decoration:none" href="#">Terms & Conditions</a>
          </p>
          <p>
            <a class="text" href="#">Privacy Policy</a>
          </p>
          <p>
            <a class="text" href="#">Disclaimer</a>
          </p>
        </div>

        <hr class="w-100 clearfix d-md-none" />


        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
          <h6 class="footer-heading"><b>Contact</b></h6>
          <p><span class="material-symbols-outlined">
            location_on
            </span><a id="map-link" href="https://www.google.com/maps/place/W474%2BQG3+Government+College+of+Engineering,kalahandi(Autonomous),+Bandopala+Post-Risigaon,+Bhawanipatna,+Odisha+766002/@19.9144412,83.1062994,18z/data=!4m14!1m7!3m6!1s0x3a24ef3382020aa3:0x6720328dfbfd451a!2sW474%2BQG3+Government+College+of+Engineering,kalahandi(Autonomous),+Bandopala+Post-Risigaon,+Bhawanipatna,+Odisha+766002!8m2!3d19.9143817!4d83.1063048!16s%2Fm%2F0r4qnsk!3m5!1s0x3a24ef3382020aa3:0x6720328dfbfd451a!8m2!3d19.9143817!4d83.1063048!16s%2Fm%2F0r4qnsk">Government College of Engineering Kalahandi, Bhawanipatna</a></p>
          <p><i class="fas fa-envelope mr-3"></i><a class="mail" href="mailto:admin@electricalvlab.com"> admin@electricalvlab.com</a></p>
          <p><i class="fas fa-phone mr-3"></i> +91 1234567890</p>
        </div>
      </div>
    </section>

    <hr class="my-3">

    <section class="p-3 pt-0">
      <div class="row d-flex align-items-center">
        <div class="col-md-7 col-lg-8 text-center text-md-start">
          <div class="p-3">
            <p>©<a class="text-white" href="#">&nbsp;2023&nbsp;ELECTRICAL&nbsp;VIRTUAL&nbsp;LABORATORY</a> - All Rights Reserved<br><br>Developed by Electrical Virtual Lab Team (2019-2023 Batch)<br>Government College of Engineering Kalahandi, Bhawanipatna</p>
          </div>
        </div>
        <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
          <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button">
            <i class="fab fa-facebook-f"></i>
          </a>

          <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button">
            <i class="fab fa-twitter"></i>
          </a>

          <a class="btn btn-outline-light btn-floating m-1" class="text-white"role="button">
            <i class="fab fa-google"></i>
          </a>

          <a class="btn btn-outline-light btn-floating m-1" class="text-white"role="button">
            <i class="fab fa-youtube"></i>
          </a>          
        </div>
      </div>
    </section>
  </div>
</footer>
</body>
</html>