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
          <li class="nav-item" id="nav-labs"><a class="nav-link" href="#evlabs">eV&nbsp;LABS</a></li>

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
        <h1 class="exp-heading">Verification of Superposition Theorem</h1>
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
    <h4 class="exp-head">INTRODUCTION</h4>
    <hr>
    <div class = "container-fluid">
        <div class = "row row-height">
          <div class = "col left1">
            Superposition theorem is a fundamental principle in electrical 
            engineering that states that the response (current or voltage) of a 
            linear circuit to multiple input sources can be determined by adding
            up the individual responses to each source acting alone. This means that 
            the total response is equal to the sum of the responses due to each individual
            source, while all other sources are turned off. The theorem is based on the principle 
            of linearity, which holds that the behavior of a circuit is proportional to the applied input. 
            The superposition theorem is a powerful tool for analyzing complex circuits, as it simplifies the
            analysis by breaking down a complex circuit into smaller, more manageable parts.
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
                        To verify Superposition Theorem
                      </div>
                    </div>
                </div>
            </div>
<!--------------------APPARATUS----------------------->            
            <div id="diagram2">
              <h4 class="exp-head">APPARATUS REQUIRED</h4>
              <hr>
              <div id="table-mob" class = "container-fluid">
                  <div class = "row row-height">
                    <div class = "col left3" style="text-align:justify">
                      <table>
                          <tr>
                              <th>SL.NO</th>
                              <th>EQUIPMENTS</th>
                              <th>RANGE</th>
                              <th>QUANTITY</th>
                          </tr>
                          <tr>
                              <td>1</td>
                              <td>Resistor</td>
                              <td></td>
                              <td>4</td>
                          </tr>
                          <tr>
                              <td>2</td>
                              <td>DC Power Supply</td>
                              <td>(0-30)V</td>
                              <td></td>
                          </tr>
                          <tr>
                              <td>3</td>
                              <td>Voltmeter</td>
                              <td>(0-600)V</td>
                              <td>1</td>
                          </tr>
                          <tr>
                              <td>4</td>
                              <td>Ammeter</td>
                              <td>(0-10A)</td>
                              <td>1</td>
                          </tr>
                      </table>
                    </div>
                  </div>
              </div>
            </div>
<!-----------PRE-LAB--------------->            
            <div id="diagram3">
                <h4 class="exp-head">PRE-LAB</h4>
                <hr>
                <div class = "container-fluid">
                    <div class = "row row-height">
                      <div class = "col left4"style="text-align:justify">
                        <p>Read the lab over and answer the following questions. <b>(Refer to theory for circuit diagrams)</p>
                        <ol>
                            <li>The output of the circuits in Figures 1.1, 2.1 and 3.1 is predicted in equations 1.1, 1.2, 1.3, 2.1, 2.2, 2.3, 3.1, 3.2, 3.3 respectively.</li>
                            <ul>
                                <li>Calculate the value of current through R<sub>4</sub> in Figure 1.1 in the same format or students can use any circuit analysis method.</li>
                                <li>Calculate the value of current through R<sub>4</sub> in Figure 2.1 in the same format or students can use any circuit analysis method.</li>
                                <li>Calculate the value of current through R<sub>4</sub> in Figure 3.1 in the same format or students can use any circuit analysis method.</li>
                            </ul>
                        </ol>
                      </div>
                    </div>
                </div>
            </div>
<!-----------THEORY--------------->            
            <div id="diagram4">
                <h4 class="exp-head">THEORY</h4>
                <hr>
                <div class = "container-fluid">
                    <div class = "row row-height">
                      <div class = "col left5" style="text-align:justify">
                        <h1>Superposition Theorem :</h1>
                        <p>According to superposition theorem, in any linear bilateral multisource network, the current through and voltages across any branch can be determined by taking algebric sum of values calculated by selecting one source at a time and replacing other active sources by their internal resistances.</p>
                        <h3>Steps to solve :</h3>
                        <ol>
                            <li>Identify the branch and quantity to be calculated along with the presence of more than one active source.</li>
                            <li>Consider any one active source and replace the other sources by their internal resistances. Calculate the required electrical quantity for that particular source.</li>
                            <li>Repeat the last two steps for all active source.</li>
                            <li>The required electrical quantity for all the sources functioning together will equal the algebraic sum of all these individual values.</li>
                        </ol>
                        <br>
<!----------------TEST SYSTEM-1----------------------->                        
                        <div>
                          <h1>Test System-1</h1>
                          <br>
                          <h5><b>Superposition Theorem with two independent voltage source :-</b></h5>
                          <br>
                          <p>Computing current across R<sub>4</sub>, denoted by I.</p>
                          <div class="container-fluid">
                            <div class="row" style="justify-content: center;">
                              <img class="img-fluid" id="exp-3-img" src="assets\EXPT-3\fig(1).png">
                            </div>
                          </div>
                          <br>
                          <br>
                          <p style="text-align: center;">[Fig.1.1: Main circuit Diagram]</p>
                          <br>
                          <br>
                          <p><b>Step 1:</b> compute I from the main circuit by any circuit analysis method.</p>
                          <div class="container-fluid">
                            <div class="row" style="justify-content: center;">
                              <img class="img-fluid" id="exp-3-img" src="assets\EXPT-3\fig(2).png">
                            </div>
                          </div>
                          <br>
                          <p style="text-align: center;">[Fig.1.2: circuit dig. With ammeter]</p>
                          <br>
                          <span style="font-size: 1rem;">
                              <p style="float:right;">(1.1)</p>
                              $$ {I\ =\ \frac{V_{s1-V_{s2}}}{R_4}} $$                             
                          </span>
                          <br>
                          <br>
                          <p><b>Step 2:</b> compute I<sub>1</sub>,when V<sub>s1</sub>is short circuited and V<sub>s2</sub> is acting alone. </p>
                          <br>
                          <span style="font-size: 1rem;">
                              <p style="float:right;">(1.2)</p>
                                $$ {I_1 = \frac{0-V_{s2}}{R_4}= \frac{{-V}_{s2}}{R_4}} $$                             
                            </span>                            
                          <br>
                          <div class="container-fluid">
                            <div class="row" style="justify-content: center;">
                              <img class="img-fluid" id="exp-3-img" src="assets\EXPT-3\fig(3).png">
                            </div>
                          </div>
                          <br>
                          <br>
                          <p style="text-align: center;">[Fig.1.3: Circuit diagram with V<sub>s1</sub> short circuited]</p>
                          <br>
                          <br>
                          <p><b>Step 3:</b> Compute I<sub>2</sub> , when V<sub>s2</sub> is short circuited and V<sub>s1</sub> is acting alone.</p>
                          <div class="container-fluid">
                            <div class="row" style="justify-content: center;">
                              <img class="img-fluid" id="exp-3-img" src="assets\EXPT-3\fig(4).png">
                            </div>
                          </div>
                          <br>
                          <br>
                          <p style="text-align: center;">[Fig.1.4: Circuit diagram with V<sub>s2</sub> is short circuited]</p>
                          <br>
                          <span style="font-size: 1rem;">
                            <p style="float:right;">(1.3)</p>
                            $$ {I_2=\frac{\ V_{s1}-0}{R_4} = \frac{V_{s1}}{R_4}} $$
                          </span>
                          <br>
                          <br>
                          <p><b>Step 4:</b> As per superposition theorem,</p>
                          <br>
                          <span style="font-size: 1rem;">
                            $$ {I\ =\ I_1+I_2} $$                             
                          </span>
                          <br>
                        </div>
<!----------------TEST SYSTEM-2----------------------->                        
                        <div>
                          <h1>Test System-2</h1>
                          <br>
                          <h5><b>Superposition Theorem with independent voltage source and independent current source :-</b></h5>
                          <br>
                          <div class="container-fluid">
                            <div class="row" style="justify-content: center;">
                              <img class="img-fluid" id="exp-3-img" src="assets\EXPT-3\fig(5).png">
                            </div>
                          </div>
                          <br>
                          <br>
                          <p style="text-align: center;">[Fig. 2.1: Main Circuit]</p>
                          <br>
                          <br>
                          <p><b>Step 1:</b> Compute I from main circuit, by any circuit analysis method.</p>
                          <div class="container-fluid">
                            <div class="row" style="justify-content: center;">
                              <img class="img-fluid" id="exp-3-img" src="assets\EXPT-3\fig(6).png">
                            </div>
                          </div>
                          <br>
                          <br>
                          <p style="text-align: center;">[Fig.2.2: circuit diagram with ammeter]</p>
                          <br>
                          <span style="font-size: 1rem;">
                            <p style="float:right;">(2.1)</p>
                            $$ {I=\ \frac{\left(V_{s1}-I_{s1}R_2\right)R_1-\left(R_1+\ R_2\right)(I_{s2}R_3)}{\left(R_1+R_2\right)\left(R_1+R_3+R_4\right)-\ {R_1}^2}} $$
                          </span>
                          <br>
                          <br>
                          <p><b>Step 2:</b>  Compute I<sub>1</sub> ,when V<sub>s1</sub> is short circuited and I<sub>s1</sub> is acting alone.</p>
                          <div class="container-fluid">
                            <div class="row" style="justify-content: center;">
                              <img class="img-fluid" id="exp-3-img" src="assets\EXPT-3\fig(7).png">
                            </div>
                          </div>
                          <br>
                          <br>
                          <p style="text-align: center;">[Fig.2.3: circuit diagram with V<sub>s1</sub> short circuited]</p>
                          <br>
                          <span style="font-size: 1rem;">
                            <p style="float:right;">(2.2)</p>
                            $$ {I_1=\ \frac{-I_{s1}R_1R_2-\left(R_1+\ R_2\right)(I_{s2}R_3)}{\left(R_1+R_2\right)\left(R_1+R_3+R_4\right)-\ {R_1}^2}} $$                   
                          </span>
                          <br>
                          <br>
                          <p><b>Step 3:</b>  Compute I<sub>2</sub> is open circuited and V<sub>s1</sub> is acting alone.</p>
                          <div class="container-fluid">
                            <div class="row" style="justify-content: center;">
                              <img class="img-fluid" id="exp-3-img" src="assets\EXPT-3\fig(8).png">
                            </div>
                          </div>
                          <br>
                          <br> 
                          <p style="text-align: center;">[Fig.2.4: circuit diagram with I<sub>s1</sub> open circuited]</p>
                          <br>
                          <span style="font-size: 1rem;">
                            <p style="float:right;">(2.3)</p>
                            $$ {I_2= \frac{V_{s1}R_1}{\left(R_1+R_2\right)\left(R_1+R_3+R_4\right)-{R_1}^2}} $$                          
                          </span>
                          <br>
                          <br>
                          <p><b>Step 4:</b>As per superposition theorem,</p>
                          <span style="font-size: 1rem;">
                            $$ {I\ =\ I_1+I_2} $$                             
                          </span>
                          <br>
                        </div>
<!----------------TEST SYSTEM-3----------------------->                        
                        <div>
                          <h1>Test System-3</h1>
                          <br>
                          <h5><b>Superposition theorem with two Independent Current Sources :-</b></h5>
                          <br>
                          <div class="container-fluid">
                            <div class="row" style="justify-content: center;">
                              <img class="img-fluid" id="exp-3-img" src="assets\EXPT-3\fig(9).png">
                            </div>
                          </div>
                          <br>
                          <br>
                          <p style="text-align: center;">[Fig.3.1: Main Circuit]</p>
                          <br>
                          <br>
                          <p><b>Step 1:</b> Computation of I from main circuit, by connecting ammeter in series with R<sub>4</sub></p>
                          <div class="container-fluid">
                            <div class="row" style="justify-content: center;">
                              <img class="img-fluid" id="exp-3-img" src="assets\EXPT-3\fig(10).png">
                            </div>
                          </div>
                          <br>
                          <br>
                          <p style="text-align: center;">[Fig 3.2: circuit diagram with ammeter]</p>
                          <br>
                          <span style="font-size: 1rem;">
                            <p style="float:right;">(3.1)</p>
                            $$ {I= \frac{I_{s1}R_1-I_{s2}R_3}{R_1+R_3+R_4}} $$          
                          </span>
                          <br>
                          <br>
                          <p><b>Step 2:</b> Compute I<sub>1</sub>, when I<sub>s1</sub> is open circuited and I<sub>s2</sub> is acting alone.</p>
                          <div class="container-fluid">
                            <div class="row" style="justify-content: center;">
                              <img class="img-fluid" id="exp-3-img" src="assets\EXPT-3\fig(11).png">
                            </div>
                          </div>
                          <br>
                          <br>
                          <p style="text-align: center;">[Fig.3.3: Circuit diagram with I<sub>s1</sub> open circuited]</p>
                          <br>
                          <span style="font-size: 1rem;">
                            <p style="float:right;">(3.2)</p>
                            $$ {I_1=\frac{-I_{s2}R_3}{R_1+R_3+R_4}} $$       
                          </span>
                          <br>
                          <br>
                          <p><b>Step 3: </b>Compute I<sub>2</sub>, when I<sub>s2</sub> is open circuited and I<sub>s2</sub> is acting alone</p>
                          <div class="container-fluid">
                            <div class="row" style="justify-content: center;">
                              <img class="img-fluid" id="exp-3-img" src="assets\EXPT-3\fig(12).png">
                            </div>
                          </div>
                          <br>
                          <br>
                          <p style="text-align:center;">[Fig.3.4: Circuit diagram with I<sub>s2</sub> open circuited]</p>
                          <br>
                          <span style="font-size: 1rem;">
                            <p style="float:right;">(3.3)</p>
                            $$ {I_2=\frac{I_{s1}R_1}{R_1+R_3+R_4}} $$          
                          </span>
                          <br>
                          <br>
                          <p><b>Step 4:</b> As per superposition theorem,</p>
                          <span style="font-size: 1rem;">
                            $$ {I\ =\ I_1+I_2} $$                             
                          </span>
                        </div>
                        <br>
<!-----------------------NOTE--------------------->                        
                        <div class="note">
                          <h2>Note :</h2>
                          <p>A <span style="color:red;">linear circuit</span> is that whose output is linearly related (or directly proportional) to its input.</p>
                          <p>A <span style="color:red;">bilateral circuit</span> is that which exhibits its properties equally in either direction.</p>
                          <p>A <span style="color:red;">short circuit</span> is a circuit element with resistance approaching zero.</p>
                          <p>An <span style="color:red;">open circuit</span> is a current element with resistance approaching infinity.</p>
                        </div>
                        <br>
                        <br>
                      </div>
                    </div>
                </div>
            </div>
<!-----------PROCEDURE--------------->            
            <div id="diagram5">
                <h4 class="exp-head">PROCEDURE</h4>
                <hr>
                <div class = "container-fluid">
                    <div class = "row row-height">
                      <div class = "col left6" style="text-align:justify">
                        <ul>
                            <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corporis, totam perferendis consectetur nemo asperiores qui esse expedita, distinctio ut officia nesciunt dolorem veritatis nisi quos magni, dicta libero velit quae.</li>
                            
                            <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corporis, totam perferendis consectetur nemo asperiores qui esse expedita, distinctio ut officia nesciunt dolorem veritatis nisi quos magni, dicta libero velit quae.</li>

                            <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corporis, totam perferendis consectetur nemo asperiores qui esse expedita, distinctio ut officia nesciunt dolorem veritatis nisi quos magni, dicta libero velit quae.</li>

                            <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corporis, totam perferendis consectetur nemo asperiores qui esse expedita, distinctio ut officia nesciunt dolorem veritatis nisi quos magni, dicta libero velit quae.</li>

                            <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corporis, totam perferendis consectetur nemo asperiores qui esse expedita, distinctio ut officia nesciunt dolorem veritatis nisi quos magni, dicta libero velit quae.</li>
                        </ul>
                      </div>
                    </div>
                </div>
            </div>
<!-----------------SIMULATOR----------------->            
            <div id="diagram6">
                <h4 class="exp-head">SIMULATOR</h4>
                <hr>
                <div class = "container-fluid">
                    <div class = "row row-height">
                      <div class = "col left7">
                        <h4>TEST SYSTEM-1</h4>
                        <p>Verification of Superposition Theorem using two independent voltage sources 
                          <br>
                          <a href="https://elitesurya4.github.io/EXPERIMENT-3/EXPERIMENT%203(a)/index.html" target="_blank"><button class="btn btn-primary">CLICK HERE</button></a>
                        </p>
                        <h4>TEST SYSTEM-2</h4>
                        <p>Verification of Superposition Theorem using one independent voltage source and one independent current source 
                          <br>
                          <a href="https://elitesurya4.github.io/EXPERIMENT-3/EXPERIMENT%203(b)/index.html" target="_blank"><button class="btn btn-primary">CLICK HERE</button></a>
                        </p>
                        <h4>TEST SYSTEM-3</h4>
                        <p>Verification of Superposition Theorem using two independent current sources 
                          <br>
                          <a href="https://elitesurya4.github.io/EXPERIMENT-3/EXPERIMENT%203(c)/index.html" target="_blank"><button class="btn btn-primary">CLICK HERE</button></a>
                        </p>
                </div>
                </div>
                </div>
            </div>
<!-----------POST-LAB--------------->            
            <div id="diagram7">
                <h4 class="exp-head">POST-LAB</h4>
                <hr>
                <div class = "container-fluid">
                    <div class = "row row-height">
                      <div class = "col left8" style="text-align:justify">
                          <ol style="font-weight: bold;">

                            <li>For superposition theorem, it is not required that only one independent source to be considered at a time, any number of independent sources may be considered simultaneously.</li>
                            <div id="options">
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="qs1" id="qs1_op1">
                                <label class="form-check-label" for="qs1_op1">
                                  True
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="qs1" id="qs1_op2">
                                <label class="form-check-label" for="qs1_op2">
                                  False
                                </label>
                              </div>
                            </div>
                            <div id="answer-area">
                              <div class="form-group blue-border-focus">
                                <textarea class="form-control" id="ans1" rows="5" readonly></textarea>
                              </div>
                            </div>
                            <li>The superposition theorem principle applies to power calculation.</li>
                            <div id="options">
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="qs2" id="qs2_op1">
                                <label class="form-check-label" for="qs2_op1">
                                  True
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="qs2" id="qs2_op2">
                                <label class="form-check-label" for="qs2_op2">
                                  False
                                </label>
                              </div>
                            </div>
                            <div id="answer-area">
                              <div class="form-group blue-border-focus">
                                <textarea class="form-control" id="ans2" rows="5" readonly></textarea>
                              </div>
                            </div>
                            <li>What is the major advantage of implementing this theorem ?</li>
                            <div id="answer-area">
                              <div class="form-group blue-border-focus">
                                <textarea class="form-control" id="text-area1" rows="5"></textarea>
                              </div>
                            </div>
                            <div id="answer-area">
                              <div class="form-group blue-border-focus">
                                <textarea class="form-control" id="ans3" rows="5"></textarea>
                              </div>
                            </div>
                            
                            <li>Using superposition theorem, find current I across 5Ω from the below figure</li>
                            <div class="container-fluid">
                              <div class="row" style="justify-content: center;">
                                <img class="img-fluid" id="exp-3-img" src="assets\EXPT-3\Qstn1Sp.png">
                              </div>
                            </div>
                            <div id="options">
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="qs4" id="qs4_op1">
                                <label class="form-check-label" for="qs4_op1">
                                  -0.65
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="qs4" id="qs4_op2">
                                <label class="form-check-label" for="qs4_op2">
                                  -0.625
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="qs4" id="qs4_op3">
                                <label class="form-check-label" for="qs4_op3">
                                  -0.256
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="qs4" id="qs4_op4">
                                <label class="form-check-label" for="qs4_op4">
                                  +0.652
                                </label>
                              </div>
                            </div>
                                <div class="container-fluid" id="ques_4_ans_div">
                                  <p class="h6" id="ques_4_div">Ans:</p>
                                  <br>
                                  <p class="h6" id="ques_4_div">Step 1 - Consider 5A current source alone and short-circuit by replacing 20V voltage source.</p>
                                  <div class="row" style="justify-content: center;">
                                    <img class="img-fluid" id="exp-3-img" src="assets\EXPT-3\SP qsn1a.png">
                                  </div>
                                  <br>
                                  <p class="h6" id="ques_4_div">Using current division rule,</p>
                                  <span style="font-size: 1rem;" id="ques_4_div">
                                    $$ {I_1=\ \frac{5\times3}{8}=\frac{15}{8}A} $$          
                                  </span>
                                  <p class="h6" id="ques_4_div">Step 2 - Consider 20V voltage source alone and short-circuit by replacing 50A current source.</p>
                                  <div class="row" style="justify-content: center;">
                                    <img class="img-fluid" id="exp-3-img" src="assets\EXPT-3\SP qsn1b.png">
                                  </div>
                                  <br>
                                  <p class="h6" id="ques_4_div">BY KVL,</p>
                                  <span style="font-size: 1rem;" id="ques_4_div">
                                    $$ {I_2=\frac{20}{8}A} $$          
                                  </span>
                                  <p class="h6" id="ques_4_div">According to direction assigned in the main circuit, the net current I across 5Ω is given by,</p>
                                  <span style="font-size: 1rem;" id="ques_4_div">
                                    $$ {I=I_1+\left(-I_2\right)=\frac{15}{8}+\frac{-20}{8}A=-0.625A} $$          
                                  </span>
                                </div>
                            <li>Why dependent sources are not killed ?</li>
                            <div id="answer-area">
                              <div class="form-group blue-border-focus">
                                <textarea class="form-control" id="text-area2" rows="5"></textarea>
                              </div>
                            </div>
                            <div id="answer-area">
                              <div class="form-group blue-border-focus">
                                <textarea class="form-control" id="ans5" rows="5" readonly></textarea>
                              </div>
                            </div>
                            <li>Use superposition theorem to calculate the voltage drop across the 3Ω resistor from the below circuit</li>
                            <div class="container-fluid">
                              <div class="row" style="justify-content: center;">
                                <img class="img-fluid" id="exp-3-img" src="assets\EXPT-3\Qstn2Sp.png">
                              </div>
                            </div>
                            <div id="options">
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="qs6" id="qs6_op1">
                                <label class="form-check-label" for="qs4_op1">
                                  16 V
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="qs6" id="qs6_op2">
                                <label class="form-check-label" for="qs4_op2">
                                  -16 V
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="qs6" id="qs6_op3">
                                <label class="form-check-label" for="qs4_op3">
                                  18 V
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="qs6" id="qs6_op4">
                                <label class="form-check-label" for="qs4_op4">
                                  -18 V
                                </label>
                              </div>
                            </div>
                            <div class="container-fluid" id="ques_6_ans_div">
                              <p class="h6" id="ques_6_div">Ans: </p>
                              <br>
                              <p class="h6" id="ques_6_div">Consider 20V source alone and open circuiting the other two current sources.</p>
                              <div class="container-fluid">
                                <div class="row" style="justify-content: center;">
                                  <img class="img-fluid" id="exp-3-img" src="assets\EXPT-3\SP qsn2a.png">
                                </div>
                              </div>
                              <div class="container-fluid">
                                <div class="row" style="justify-content: center;">
                                  <img class="img-fluid" id="exp-3-img" src="assets\EXPT-3\SP qsn2b.png">
                                </div>
                              </div>
                              <span style="font-size: 1rem;" id="ques_4_div">
                                $$ {V_{3 \Omega}=V_1=\frac{20 \times 3}{5}=12} $$          
                              </span>
                              <br>
                              <p class="h6" id="ques_6_div">Considering upper 15A sources alone, and short-circuiting and open-circuiting the voltage and current sources respectively.</p>
                              <div class="container-fluid">
                                <div class="row" style="justify-content: center;">
                                  <img class="img-fluid" id="exp-3-img" src="assets\EXPT-3\SP qsn2c.png">
                                </div>
                              </div>
                              <div class="container-fluid">
                                <div class="row" style="justify-content: center;">
                                  <img class="img-fluid" id="exp-3-img" src="assets\EXPT-3\SP qsn2d.png">
                                </div>
                              </div>
                              <span style="font-size: 1rem;" id="ques_4_div">
                                $$ {I_x=\frac{15\times2}{5}=6A} $$          
                              </span>
                                <br>
                              <div class="container-fluid">
                                <div class="col" style="display: flex; flex-direction: row;">
                                  <img class="img-fluid" id="exp-3-img" src="assets\EXPT-3\SP qsn2e.png">
                                  <img class="img-fluid" id="exp-3-img" src="assets\EXPT-3\SP qsn2f.png" style="margin-top: -1.5vw;">
                                </div>
                              </div>
                              <br>
                              <p class="h6" id="ques_6_div">So,$${V_{3 \Omega}=V_2=6 \times 2=12 \mathrm{~V}}$$ [Voltages in parallel are same]</p>
                              <p class="h6" id="ques_6_div">Consider lower 15A sources alone, and short-circuiting the other two sources respectively.</p>
                              <br>
                              <div class="container-fluid">
                                <div class="row" style="justify-content: center;">
                                  <img class="img-fluid" id="exp-3-img" src="assets\EXPT-3\SP qsn2g.png">
                                </div>
                              </div>
                              <div class="container-fluid">
                                <div class="row" style="justify-content: center;">
                                  <img class="img-fluid" id="exp-3-img" src="assets\EXPT-3\SP qsn2h.png">
                                </div>
                              </div>
                              <div class="container-fluid">
                                <div class="row" style="justify-content: center;">
                                  <img class="img-fluid" id="exp-3-img" src="assets\EXPT-3\SP qsn2i.png">
                                </div>
                              </div>
                              <span style="font-size: 1rem;" id="ques_4_div">
                                $$ {V_{3 \Omega}=V_3=\frac{-15 \times 2}{5}=-3 \times 2=-6 V} $$          
                              </span>
                              <p class="h6" id="ques_6_div">Now, to get the final answer we add up the voltages</p>
                              <span style="font-size: 1rem;" id="ques_4_div">
                                $$ {V_{3 \Omega}=V_1+V_2+V_3=12+12-6=18} $$          
                              </span>
                              <span style="font-size: 1rem;" id="ques_4_div">
                                $$ {V_{3 \Omega}=18 \mathrm{~V}} $$          
                              </span>
                            </div>
                            </div>
                          </ol>
                      </div>
                      <input class="btn btn-primary" type="submit" value="Submit" id="post-submit" onclick="postlabsubmit()">
                    </div>
                </div>
<!-----------VIDEO-LECTURE--------------->            
            <div id="diagram8">
                <h4 class="exp-head">VIDEO-LECTURE</h4>
                <hr>
                <div class = "container-fluid">
                    <div class = "row row-height">
                    </div>
                </div>
            </div>

<!------------DOMWNLOAD---------------------->
            <div id="diagram9">
              <h4 class="exp-head">DOWNLOAD</h4>
              <hr>
              <div class = "container-fluid">
                  <div class = "row row-height">
                    <p>To download the lab manual</p>
                    <a href="assets\EXPT-3\LAB - 3.pdf" type="button">Click Here</a>
                  </div>
              </div>
            </div>

        </div>
    </div>
</div>
</body>
</html>