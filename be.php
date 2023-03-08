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
</head>
<body>
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
              echo "Welcome, $_SESSION[name] - <a href='logout.php'>LOGOUT</a>";
            }
            else{
              echo "<li class='nav-item' id='nav-log'><a class='nav-link' id='cust_btn'>LOG&nbsp;IN</a></li>
              <li class='nav-item' id='nav-sign'><a class='nav-link' id='cust_btn1'>SIGN&nbsp;UP</a></li>";
            }
          ?>

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
<!--------------------------BACKGROUND---------------------------------> 
<div id="lab-bg">
  <div class="bg">
  <div class="bg-container">
    <div class="lab">
      <h1 class='lab-title'>BASIC ELECTRICAL LAB</h1>
      <div class="exp-button">
        <button class="btn btn-primary ml-3" id="be-button" onclick="intro_body()">INTRODUCTION</button>
        <button class="btn btn-primary ml-5" id="be-button-1"onclick="object_body()">OBJECTIVE</button>
        <button class="btn btn-primary ml-3" id="be-button-2" onclick="list_body()">LIST OF EXPERIMENTS</button>
      </div>
<div id="lab-border" class="container-fluid">
  <div class="container-fluid" id="be-lab-box">
    <!----------INTRODUCTION------------->
          <div id="para">
            <h4 class="be-heading">INTRODUCTION</h4><br>
            <p class="h5">An electrical virtual laboratory is a specialized workspace where students can 
              perform experiments, develop new technologies, and test electrical systems and components. This type 
              of laboratory is equipped with various tools, instruments, and equipment that are specifically designed 
              for measuring, analyzing, and testing electrical systems.</p>
          </div>
    <!----------OBJECTIVE------------->
          <div id="para1" class="container">
            <h4 class="be-heading">OBJECTIVE</h4><br>
            <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui ratione fugit sit inventore explicabo commodi similique? Repellendus libero deserunt, nemo necessitatibus est quod quam dolorem nam optio odio? Rerum, laudantium?
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ea est placeat, alias magni incidunt excepturi hic similique in ab sunt corporis odio quidem dolores vel. Veniam voluptates molestiae accusantium veritatis.
            Quaerat doloremque repudiandae perspiciatis vel tempora. Quasi veritatis nobis dolore alias beatae nostrum voluptas eum repellendus quibusdam ipsam, culpa dolor itaque nisi sunt sequi non reiciendis quod quae aliquid repellat!</h5>
          </div>
    <!----------LIST OF EXPERIMENTS------------->
    <div id="para2">
      <h4 class="be-heading">LIST OF EXPERIMENTS</h4><br>
        <ul class="h5">
            <a href="equipments.html" id="exp-list"><li>Familiarization with electrical components and equipments.</li></a>
            <a href="#" id="exp-list"><li>Power and phase measurements in the three phase system by two wattmeter method.</li></a>
            <a href="superposition.html" id="exp-list"><li>Verification of Superposition Theorem</li></a>
            <a href="thevenin.html" id="exp-list"><li>Verification of Thevenin Theorem</li></a>
            <a href="#" id="exp-list"><li>Verification of Norton Theorem</li></a>
            <a href="#" id="exp-list"><li>Plotting of B-H curve of magnetic material and Calculation of hysterisis loss.</li></a>
            <a href="#" id="exp-list"><li>Series RLC circuit (Power measurement, Phasor Diagram)</li></a>
            <a href="#" id="exp-list"><li>OC and SC test of single-phase transformer.</li></a>
        </ul>
    </div>
  </div>
</div>
      <script src="js/lab-section.js"></script>
    </div>
  </div>
</div>
</div>
<br>  
<footer class="text-center text-lg-start" id="footer-section">
  <div class="container-fluid text-center pt-4 pb-0">
<section class="pt-0" id="internal-footer">
  <div class="row d-flex">
    <div class="col">
      <div class="">
        <p>©<a class="text-white" href="#">&nbsp;2023&nbsp;ELECTRICAL&nbsp;VIRTUAL&nbsp;LABORATORY</a> - All Rights Reserved<br><br></p>
      </div>
    </div>
  </div>
</section>
</footer> 
</body>
</html>