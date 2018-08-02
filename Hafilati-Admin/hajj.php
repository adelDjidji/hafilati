<?php

require 'head.html';

?>
    <div class="se-pre-con"></div>
    <div class="wrapper">
        <!-- Sidebar Holder -->
        <?php
require 'navside.html';
        ?>
          <div id="content">
          <!-- top-bar -->
          <nav class="navbar navbar-default mb-xl-5 mb-4">
              <div class="container-fluid">

                  <div class="navbar-header">
                      <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                          <i class="fas fa-bars"></i>
                      </button>
                  </div>
                  <!-- Search-from -->
                  <form action="#" method="post" class="form-inline mx-auto search-form col-lg-10">
                      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" required="">
                      <button class="btn btn-style my-2 my-sm-0" type="submit">Search</button>
                  </form>
                  <!--// Search-from -->
                  <ul class="top-icons-agileits-w3layouts float-right">
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                              aria-expanded="false">
                              <i class="far fa-bell"></i>
                              <span class="badge">4</span>
                          </a>
                          <div class="dropdown-menu top-grid-scroll drop-1">
                              <h3 class="sub-title-w3-agileits">User notifications</h3>
                              <a href="#" class="dropdown-item mt-3">
                                  <div class="notif-img-agileinfo">
                                      <img src="images/clone.jpg" class="img-fluid" alt="Responsive image">
                                  </div>
                                  <div class="notif-content-wthree">
                                      <p class="paragraph-agileits-w3layouts py-2">
                                          <span class="text-diff">John Doe</span> Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
                                      <h6>4 mins ago</h6>
                                  </div>
                              </a>
                              <a href="#" class="dropdown-item mt-3">
                                  <div class="notif-img-agileinfo">
                                      <img src="images/clone.jpg" class="img-fluid" alt="Responsive image">
                                  </div>
                                  <div class="notif-content-wthree">
                                      <p class="paragraph-agileits-w3layouts py-2">
                                          <span class="text-diff">Diana</span> Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
                                      <h6>6 mins ago</h6>
                                  </div>
                              </a>
                              <a href="#" class="dropdown-item mt-3">
                                  <div class="notif-img-agileinfo">
                                      <img src="images/clone.jpg" class="img-fluid" alt="Responsive image">
                                  </div>
                                  <div class="notif-content-wthree">
                                      <p class="paragraph-agileits-w3layouts py-2">
                                          <span class="text-diff">Steffie</span> Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
                                      <h6>12 mins ago</h6>
                                  </div>
                              </a>
                              <a href="#" class="dropdown-item mt-3">
                                  <div class="notif-img-agileinfo">
                                      <img src="images/clone.jpg" class="img-fluid" alt="Responsive image">
                                  </div>
                                  <div class="notif-content-wthree">
                                      <p class="paragraph-agileits-w3layouts py-2">
                                          <span class="text-diff">Jack</span> Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
                                      <h6>1 days ago</h6>
                                  </div>
                              </a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#">view all notifications</a>
                          </div>
                      </li>
                      <li class="nav-item dropdown mx-3">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true"
                              aria-expanded="false">
                              <i class="fas fa-spinner"></i>
                          </a>
                          <div class="dropdown-menu top-grid-scroll drop-2">
                              <h3 class="sub-title-w3-agileits">Shortcuts</h3>
                              <a href="#" class="dropdown-item mt-3">
                                  <h4>
                                      <i class="fas fa-chart-pie mr-3"></i>Sed feugiat</h4>
                              </a>
                              <a href="#" class="dropdown-item mt-3">
                                  <h4>
                                      <i class="fab fa-connectdevelop mr-3"></i>Aliquam sed</h4>
                              </a>
                              <a href="#" class="dropdown-item mt-3">
                                  <h4>
                                      <i class="fas fa-tasks mr-3"></i>Lorem ipsum</h4>
                              </a>
                              <a href="#" class="dropdown-item mt-3">
                                  <h4>
                                      <i class="fab fa-superpowers mr-3"></i>Cras rutrum</h4>
                              </a>
                          </div>
                      </li>
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true"
                              aria-expanded="false">
                              <i class="far fa-user"></i>
                          </a>
                          <div class="dropdown-menu drop-3">
                              <div class="profile d-flex mr-o">
                                  <div class="profile-l align-self-center">
                                      <img src="images/profile.jpg" class="img-fluid mb-3" alt="Responsive image">
                                  </div>
                                  <div class="profile-r align-self-center">
                                      <h3 class="sub-title-w3-agileits">Will Smith</h3>
                                      <a href="mailto:info@example.com">info@example.com</a>
                                  </div>
                              </div>
                              <a href="#" class="dropdown-item mt-3">
                                  <h4>
                                      <i class="far fa-user mr-3"></i>My Profile</h4>
                              </a>
                              <a href="#" class="dropdown-item mt-3">
                                  <h4>
                                      <i class="fas fa-link mr-3"></i>Activity</h4>
                              </a>
                              <a href="#" class="dropdown-item mt-3">
                                  <h4>
                                      <i class="far fa-envelope mr-3"></i>Messages</h4>
                              </a>
                              <a href="#" class="dropdown-item mt-3">
                                  <h4>
                                      <i class="far fa-question-circle mr-3"></i>Faq</h4>
                              </a>
                              <a href="#" class="dropdown-item mt-3">
                                  <h4>
                                      <i class="far fa-thumbs-up mr-3"></i>Support</h4>
                              </a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="login.html">Logout</a>
                          </div>
                      </li>
                  </ul>
              </div>
          </nav>
          <!--// top-bar -->
          <div class="container-fluid">
              <div class="row">
                  
                  
              <div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4">Client information</h4>
                    <div class="row validform">
                        <div class="col-md-4 order-md-2 mb-4 validform1">
                           
                            

                            
                        </div>
                        <div class="col-md-8 order-md-1 validform2">
                            <h4 class="mb-3">Personal information : </h4>
                            <form  action="#" method="post" class="needs-validation" novalidate="">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="firstName">First name</label>
                                        <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                                        <div class="invalid-feedback">
                                            Valid first name is required.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="lastName">Last name</label>
                                        <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                                        <div class="invalid-feedback">
                                            Valid last name is required.
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="username">Username</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">@</span>
                                        </div>
                                        <input type="text" class="form-control" id="username" placeholder="Username" required="">
                                        <div class="invalid-feedback" style="width: 100%;">
                                            Your username is required.
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="email">Email
                                        <span class="text-muted">(Optional)</span>
                                    </label>
                                    <input type="email" class="form-control" id="email" placeholder="you@example.com">
                                    <div class="invalid-feedback">
                                        Please enter a valid email address for shipping updates.
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control" id="address" placeholder="1234 Main St" required="">
                                    <div class="invalid-feedback">
                                        Please enter your shipping address.
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="address2">Passport number_format
                                        <span class="text-muted">*</span>
                                    </label>
                                    <input type="number" id="passport" class="form-control" id="address2" placeholder="passport number">
                                </div>

                                <div class="row">
                                    <div class="col-md-5 mb-3">
                                        <label for="country">Country</label>
                                        <select class="custom-select d-block w-100" id="country" required="">
                                            <option value="">Choose...</option>
                                            <option>United States</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please select a valid country.
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="state">State</label>
                                        <select class="custom-select d-block w-100" id="state" required="">
                                            <option value="">Choose...</option>
                                            <option>California</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please provide a valid state.
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="zip">Zip</label>
                                        <input type="text" class="form-control" id="zip" placeholder="" required="">
                                        <div class="invalid-feedback">
                                            Zip code required.
                                        </div>
                                    </div>
                                </div>
                                <hr class="mb-4">
                                

                               
                                <button class="btn btn-primary btn-lg btn-block error-w3l-btn" type="submit">Submit</button>
                                <button id="generate" class="btn btn-primary btn-lg btn-block error-w3l-btn" type="button">generate QR code</button>
                            </form>
                            <div id="qrcode" style="width:100px; height:100px; margin-top:15px;"></div>
                        </div>
                    </div>
                </div>



              </div>
          </div>


    
      
  
      </div>
  </div>

  <div id="qrcode"></div>

    <!-- Required common Js -->
    <script src='js/jquery-2.2.3.min.js'></script>
    <!-- //Required common Js -->
    
    <!-- loading-gif Js -->
    <script src="js/modernizr.js"></script>
    <script>
        //paste this code under head tag or in a seperate js file.
        // Wait for window load
        $(window).load(function () {
            // Animate loader off screen
            $(".se-pre-con").fadeOut("slow");;
        });
    </script>
    <!--// loading-gif Js -->


    <script type="text/javascript" src="js/qrcode.min.js"></script>
    

<script type="text/javascript">
var qrcode = new QRCode(document.getElementById("qrcode"), {
	width : 100,
	height : 100
});

function makeCode () {		
	var elText = document.getElementById("passport");
	
	if (!elText.value) {
		alert("Input a text");
		elText.focus();
		return;
	}
	
	qrcode.makeCode(elText.value);
}


$('#generate').click(function(){

    makeCode();
});
 
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });

            
        });
    </script>
    <!--// Sidebar-nav Js -->

    <!-- Graph -->
   
    <!-- Bar-chart -->
    <script src="js/rumcaJS.js"></script>
    <script src="js/example.js"></script>
    <!--// Bar-chart -->
    <!-- Calender -->
    <script src="js/moment.min.js"></script>
    <script src="js/pignose.calender.js"></script>
   
    <!--// Calender -->

    <!-- profile-widget-dropdown js-->
    <script src="js/script.js"></script>
    <!--// profile-widget-dropdown js-->

    <!-- Count-down -->
    <script src="js/simplyCountdown.js"></script>
    <link href="css/simplyCountdown.css" rel='stylesheet' type='text/css' />
    <script>
        var d = new Date();
        simplyCountdown('simply-countdown-custom', {
            year: d.getFullYear(),
            month: d.getMonth() + 2,
            day: 25
        });
    </script>
    <!--// Count-down -->

    <!-- pie-chart -->
    <script src='js/amcharts.js'></script>
   
    <!--// pie-chart -->

    <!-- dropdown nav -->
    <script>
        $(document).ready(function () {
            $(".dropdown").hover(
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- //dropdown nav -->

    <!-- Js for bootstrap working-->
    <script src="js/bootstrap.min.js"></script>
    <!-- //Js for bootstrap working -->
   
</body>

</html>