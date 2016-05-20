<?php include ('app/views/includes/head.php');?>
<title>Offerciti | Advertiser Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Offerciti offline discounts" />
	<meta name="keywords" content="Offers, discounts" />
	<meta name="author" content="www.offerciti.com" />
	
	 
	
	 
</head>

<body>	
<div class="container-fluid">
 <header>
            <!-- top nav section -->
            <section class="top-sec-nav">
             <?php include ('app/views/includes/top-nav.php');?>
				
            </section>
            
         </header>
			<!-- END .header -->
<div class="login-main-wrap animated fadeInDown" data-animate="fadeInDown">
            <!-- login starts -->
            <div id="loginbox" style="margin-top:50px;" class="mainbox advertiser-login col-md-4 col-md-offset-4 col-sm-8 col-sm-offset-2">
               <div class="panel panel-info" id="loginform-panel" >
                  <div class="panel-heading">
                     <div class="panel-title">Login</div>
                  </div>
                  <div style="padding-top:30px" class="panel-body" >
                     <!-- select advertiser starts -->
                     <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                           <div class="panel-heading">
                              <h6 class="panel-title">
                                 Advertiser
                              </h6>
                           </div>
                           <div id="collapse1" class="panel-collapse collapse in">
                              <div class="panel-body">
                                 <form id="freeadvertiserloginform" class="form-horizontal" role="form">
                                    <div style="margin-bottom: 25px" class="input-group">
                                       <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                       <input id="login-username" type="email" class="form-control" name="username" value="" placeholder="Enter your Email Address">                                        
                                    </div>
                                    <div style="margin-bottom: 25px" class="input-group">
                                       <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                       <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                                    </div>
                                    <div class="input-group">
                                       <span class="input-blue checkbox">
                                       <input type="checkbox" id="checkbox1" />
                                       <label for="checkbox1" >Remember Me</label>
                                       </span>
                                    </div>
                                    <div class="forgot-pwd"><a href="#" id="forgot-freeadvertiser-credentials">Forgot username / password?</a></div>
                                    <div style="margin-top:10px" class="form-group">
                                       <!-- Button -->
                                       <div class="col-sm-12 controls user-login-btn-wrap">
                                          <a id="btn-login" href="../offer/postad.php" class="btn btn-theme">Login  </a>                                     
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <div class="col-md-12 control">
                                          <div class="dont-ac">
                                             Don't have an account! 
                                             <a href="registration.php" id="create-ac-btn">
                                             Sign Up Here
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- select advertiser ends -->
                     <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                  </div>
               </div>
               <div class="panel panel-info" id="forgot-credentials-form-panel" >
                  <div class="panel-heading">
                     <div class="panel-title">Forgot  password / User Name</div>
                  </div>
                  <div style="padding-top:30px" class="panel-body" >
                     <p>Please enter your email id below. We will send you a link to reset your password.</p>
                     <form id="forgot-credentials-form" class="form-horizontal" role="form">
                        <div class="input-group">
                           <span class="input-blue radio">
                           <input type="radio" id="username" name="radio-group">
                           <label for="username">User Name</label>
                           </span>
                        </div>
                        <div class="input-group">
                           <span class="input-blue radio">
                           <input type="radio" id="password" name="radio-group">
                           <label for="password">Password</label>
                           </span>
                        </div>
                        <div class="form-group forgot-cre">
                           <label for="contact-email" class="col-xs-3 control-label">*Email</label>
                           <div class="col-xs-9">
                              <input type="email" class="form-control" id="contact-email" placeholder="Enter Email">
                           </div>
                        </div>
                        <div  class="form-group">
                           <!-- Button -->
                           <div class="col-xs-12 controls">                                     
                              <button id="forgot-credentials-submit" type="submit" class="btn btn-info">Send email</button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>

</div>

<!-- footer starts -->
         
<?php include ('app/views/includes/footer.php'); ?>
   
