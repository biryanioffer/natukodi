<?php include 'app/views/includes/head.php';?>
<title>Offerciti | Login</title>
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
             <?php include 'app/views/includes/top-nav.php';?>
				
            </section>
            
         </header>
			<!-- END .header -->
         <!-- user signup starts -->
         <div id="signupbox" style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 visitor-form-wrap animated fadeInDown" data-animate="fadeInDown">
            <div class="panel panel-info">
               <div class="panel-heading">
                  <div class="panel-title">Sign Up</div>
               </div>
               <div class="panel-body" >
                  <form id="signupform" class="form-horizontal" role="form">
                     <div id="signupalert" style="display:none" class="alert alert-danger">
                        <p>Error:</p>
                        <span></span>
                     </div>
                     <div class="form-group">
                        <label for="first-name" class="col-md-4 control-label">*First Name </label>
                        <div class="col-md-6">
                           <input type="text" class="form-control" id="first-name" placeholder="Enter First Name">
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="last-name" class="col-md-4 control-label">*Last Name</label>
                        <div class="col-md-6">
                           <input type="text" class="form-control" id="last-name" placeholder="Enter Last Name">
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="create-user-name" class="col-md-4 control-label">*Email</label>
                        <div class="col-md-6">
                           <input type="email" class="form-control" id="create-user-name" placeholder="Enter Email">
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="create-password" class="col-md-4 control-label">*Password</label>
                        <div class="col-md-6">
                           <input type="password" class="form-control" id="create-password" placeholder="Create Password">
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="Retype-password" class="col-md-4 control-label">*Retype Password</label>
                        <div class="col-md-6">
                           <input type="password" class="form-control" id="Retype-password" placeholder="Retype Password">
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="phone-number" class="col-md-4 control-label">*Phone Number</label>
                        <div class="col-md-6">
                           <input type="text" class="form-control" id="phone-number" placeholder="Enter Phone Number">
                        </div>
                     </div>
                     <div class="form-group">
                        <label  class="col-md-4 control-label">*Gender</label>
                        <div class="col-md-2">
							<span class="input-blue radio">
							   <input type="radio" id="Male" name="radio-group1">
							   <label for="Male">Male</label>
							</span>
                        </div>
                        <div class="col-md-3">
                          <span class="input-blue radio">
							   <input type="radio" id="Female" name="radio-group1">
							   <label for="Female">Female</label>
							</span>

                        </div>
                     </div>
                     <div class="form-group">
                        <label for="dob" class="col-md-4 control-label">*Date of Birth</label>
                        <div class="col-md-4">
                           <input type="text" class="form-control date-pic" id="dob" placeholder="Date of Birth">
                        </div>
                     </div>
                    
                     <div class="form-group">
                        <label for="pin-code" class="col-md-4 control-label">*Location / Address</label>
                        <div class="col-md-6">
                           <input type="text" class="form-control" id="pin-code" placeholder="Ex: JNTU, KPHB, Hyderabad, Telangana">
                        </div>
                     </div>
                     <div class="form-group">
                        <!-- Button -->                                        
                        <div class="col-md-offset-4 col-md-8">
                           <a href="thank_you" id="btn-signup" type="submit" class="btn btn-info"><i class="icon-hand-right"></i>Sign Up</a>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
         <!-- user signup ends -->

</div>

<!-- footer starts -->
         
<?php include 'app/views/includes/footer.php' ?>
   
