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
  <script src="js/script.js"></script>
  <script src="assets/EXPT-3/script.js"></script>
  <script src="js/lab-section.js"></script>
  <script src="https://apis.google.com/js/platform.js" async defer></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.4/MathJax.js?config=default'></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>
<body> 
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark" id="nav_bar">
          <div class="container-fluid">
            <div href="#" class="navbar-brand">
              <img src="src\nav-logo.png" width="70" alt="" class="d-inline-block align-middle">
              <a class="text font-weight-bold" id="items-1" href="#">eV LAB</a>
              <a class="text-uppercase font-weight-bold" id="items" href="index.php#about-us">ABOUT US</a>
            </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                  <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav navbar-float" id="nav-items">
              <li class="nav-item" id="nav-home"><a class="nav-link" href="index.php">HOME</a></li> 
              <li class="nav-item" id="nav-labs"><a class="nav-link" href="be.php">eV&nbsp;LABS</a></li>
    
              <?php
                if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true){
                  // echo "Welcome, $_SESSION[name] - <a href='logout.php'>LOGOUT</a>";\
                  echo "<li class='nav-item' id='nav-log'><a class='nav-link profile_btn' href='profile.php'>PROFILE</a></li>
                  <li class='nav-item' id='nav-sign'><a class='nav-link logout_btn' href='logout.php'>LOGOUT</a></li>";
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
    <div class="exp-bg" style="overflow:hidden;">
        <h1 class="exp-heading">Familiarization with electrical components and equipments.</h1>
    </div>

    <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
        <div class="offcanvas-body">
            <div class="off-canvas-close">
                <button id="close-btn" type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="btn-group-vertical" id="theory-btn1">
                    <button class="btn btn-secondary" id="side-btn" onclick="exp_intro_body()">INTRODUCTION</button>
                    <button class="btn btn-secondary" id="side-btn" onclick="exp_ob_body()">OBJECTIVE</button>
                    <button class="btn btn-secondary" id="side-btn" onclick="exp_app_body()">APPARATUS</button>
                    <button class="btn btn-secondary" id="side-btn" onclick="exp_pre_body()">PRE-LAB</button>
                    <button class="btn btn-secondary" id="side-btn" onclick="exp_theory_body()">THEORY</button>
                    <button class="btn btn-secondary" id="side-btn" onclick="exp_pr_body()">PROCEDURE</button>
                    <button class="btn btn-secondary" id="side-btn"onclick="exp_sim_body()">SIMULATOR</button>
                    <button class="btn btn-secondary" id="side-btn" onclick="exp_post_body()">POST-LAB</button>
                    <button class="btn btn-secondary" id="side-btn"onclick="exp_vd_body()">VIDEO LECTURE</button>
                    <button class="btn btn-secondary" id="side-btn" onclick="exp_load_body()">DOWNLOAD</button>
            </div>
        </div>
    </div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-2" id="theory-cont" style="overflow:hidden;">
            <div id="toolbox" class="justify-content-center">
                <div class="btn-group-vertical" id="theory-btn">
                        <button class="btn btn-secondary" id="side-btn" onclick="exp_intro_body()">INTRODUCTION</button>
                        <button class="btn btn-secondary" id="side-btn" onclick="exp_ob_body()">OBJECTIVE</button>
                        <button class="btn btn-secondary" id="side-btn" onclick="exp_app_body()">APPARATUS</button>
                        <button class="btn btn-secondary" id="side-btn" onclick="exp_pre_body()">PRE-LAB</button>
                        <button class="btn btn-secondary" id="side-btn" onclick="exp_theory_body()">THEORY</button>
                        <button class="btn btn-secondary" id="side-btn" onclick="exp_pr_body()">PROCEDURE</button>
                        <button class="btn btn-secondary" id="side-btn"onclick="exp_sim_body()">SIMULATOR</button>
                        <button class="btn btn-secondary" id="side-btn" onclick="exp_post_body()">POST-LAB</button>
                        <button class="btn btn-secondary" id="side-btn"onclick="exp_vd_body()">VIDEO LECTURE</button>
                        <button class="btn btn-secondary" id="side-btn" onclick="exp_load_body()">DOWNLOAD</button>
                </div>
            </div>
        </div>
        <div class="col-lg-9" id="side-cont">
            <div class="hidden-btn1"><span class="material-symbols-outlined" id="hidden-btn" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
                menu
                </span>
            </div>
<!-----------INTRODUCTION--------------->            
<div id="diagram">
    <!-- <h4 class="exp-head">INTRODUCTION</h4>
    <hr> -->
    <div class = "container-fluid">
        <div class = "row row-height">
          <div class = "col left1">
            <!-- Superposition theorem is a fundamental principle in electrical 
            engineering that states that the response (current or voltage) of a 
            linear circuit to multiple input sources can be determined by adding
            up the individual responses to each source acting alone. This means that 
            the total response is equal to the sum of the responses due to each individual
            source, while all other sources are turned off. The theorem is based on the principle 
            of linearity, which holds that the behavior of a circuit is proportional to the applied input. 
            The superposition theorem is a powerful tool for analyzing complex circuits, as it simplifies the
            analysis by breaking down a complex circuit into smaller, more manageable parts. -->
        </div>
        </div>
    </div>
</div>
<!----------------------OBJECTIVE----------------------->            
            <div id="diagram1">
                <h4 class="exp-head">OBJECTIVE</h4>
                <hr>
                <div class = "container-fluid">
                    <div class = "row row-height">
                      <div class = "col left2" style="text-align:justify">
                        To familiarize with different electrical components and equipments.
                      </div>
                    </div>
                </div>
            </div>
<!--------------------APPARATUS----------------------->            
            <div id="diagram2">
            </div>
<!-----------PRE-LAB--------------->            
            <div id="diagram3">
            </div>
<!-----------THEORY--------------->            
            <div id="diagram4">
                <h4 class="exp-head">THEORY</h4>
                <hr>
                <div class = "container-fluid">
                    <div class = "row row-height">
                      <div class = "col left5" style="text-align:justify">
<!----------------RESISTOR----------------------->
                        <div>
                            <h2>RESISTOR</h2>
                            <p>A resistor is an electronic component that is used to impede the flow of electrical 
                            current in a circuit.Resistors are used to control the amount of current that flows 
                            through a circuit, to limit voltage, to divide voltage, to reduce current noise, and 
                            to create voltage drops.A resistor has a specific value of resistance, which is measured 
                            in ohms (Ω).Resistors come in different types, including fixed resistors, variable resistors 
                            (potentiometers), and thermistors, which are resistors that change their resistance with temperature. 
                            Resistors are commonly found in many electronic devices, such as power supplies, amplifiers, and computers.
                            </p>
                        </div>
                        <br>
<!----------------AMMETER----------------------->                        
                        <div>
                          <h2>AMMETER</h2>
                          <p>An ammeter is an electrical measuring instrument used to measure the flow of electric 
                            current in a circuit. It is connected in series with the circuit, so the current flows 
                            through the ammeter and its internal resistance, and the instrument provides a reading of 
                            the current flow.They are used to measure the amount of current flowing through a circuit, 
                            which is expressed in units of amperes (A) or milliamperes (mA). Ammeters can be analog or 
                            digital, with digital ammeters being more common in modern electronic applications.Ammeters 
                            are an important tool for circuit analysis and troubleshooting, allowing engineers and technicians 
                            to identify problems such as short circuits or excessive current draw.
                           </p>
                        </div>
                        <br>
<!----------------VOLTMETER----------------------->                        
                        <div>
                          <h2>VOLTMETER</h2>
                          <p>A voltmeter is an electrical measuring instrument used to measure the voltage, or electric 
                            potential difference, between two points in an electric circuit.They are used to measure the 
                            voltage across a component, such as a resistor, capacitor, or diode. The unit of voltage is volts 
                            (V) or millivolts (mV).hey are commonly used in electrical and electronics testing and in various 
                            applications such as power supplies, batteries, and automotive systems.Using a voltmeter in conjunction 
                            with an ammeter, engineers and technicians can analyze circuit performance and identify problems such as 
                            voltage drops or excessive current draw. Voltmeters are an important tool for circuit analysis and troubleshooting.
                          </p>
                        </div>
<!----------------WATTMETER----------------------->                        
                        <div>
                          <h2>WATTMETER</h2>
                          <p>
                            A wattmeter is an electrical measuring instrument used to measure the electrical power in a circuit. It is used to 
                            measure the product of the voltage and current in an electrical circuit, which is expressed in units of watts (W) or 
                            kilowatts (kW).Wattmeters are used to measure the power consumed by an electrical load, such as a light bulb or an 
                            electric motor. They can also be used to measure the power produced by a generator or other power source.Wattmeters are 
                            important tools for engineers and technicians to measure and analyze the performance of electrical circuits, and to identify 
                            problems such as excessive power consumption or power loss.
                          </p>
                        </div>
                        <br>
<!-----------------------DC POWER SUPPLY--------------------->                        
                        <div>
                          <h2>DC POWER SUPPLY</h2>
                          <p>
                            A DC power supply is an electronic device that provides a constant and stable output voltage or current in a direct current 
                            (DC) electrical circuit. It is used to power and operate various electronic devices and components, such as transistors, 
                            integrated circuits, and other electronic systems.They are commonly used in electronic testing and development, as well as 
                            in various applications such as battery charging, electroplating, and welding.DC power supplies are an essential tool for 
                            engineers and technicians working with electronics, as they provide a reliable and stable source of power for testing and 
                            operating electronic systems.
                          </p>
                        </div>
<!-----------------------CONNECTING WIRES--------------------->  
                        <div>
                            <h2>CONNECTING WIRES</h2>
                            <p>In the context of electrical and electronic systems, wires are conductive cables or strands of metal that are used to 
                                carry and transmit electrical signals or power between different components, devices, or systems. Wires are typically 
                                made of copper or aluminum, which are excellent conductors of electricity.Wires can be used for a variety of applications, 
                                such as connecting electronic components on a printed circuit board, transmitting power to a motor or other load, or carrying 
                                audio or video signals between devices.Wires are an essential component of most electrical and electronic systems, and proper 
                                selection and installation is important for ensuring safe and reliable operation of the system.
                            </p>
                        </div>                      
                        <br>
                      </div>
                    </div>
                </div>
            </div>
<!-----------PROCEDURE--------------->            
            <div id="diagram5">
                
            </div>
<!-----------------SIMULATOR----------------->            
            <div id="diagram6">
            </div>
<!-----------POST-LAB--------------->            
            <div id="diagram7">
            </div>
<!-----------VIDEO-LECTURE--------------->            
            <div id="diagram8">
            </div>

        </div>
    </div>
</div>
</body>
</html>