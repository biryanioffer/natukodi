<?php include ('app/views/includes/head.php');?>
<title>Offerciti | Advertiser Signup</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Offerciti offline discounts" />
	<meta name="keywords" content="Offers, discounts" />
	<meta name="author" content="www.offerciti.com" />
	
	 
	
	 
</head>

<body>	

      <form class="form-inline" role="form">
         <div class="modal fade signup-otp-pop" id="myModal" role="dialog">
            <div class="modal-dialog">
               <!-- Modal content-->
               <div class="modal-content">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                     <h4 class="modal-title">Enter Your Mobile No</h4>
                  </div>
                  <div class="modal-body">
                     <div class="">
                        <input type="text" class="form-control" id="phone-number" placeholder="Mobile Number">
                        <button type="button" class="btn btn-theme-dark">Send OTP</button>
                     </div>
                     <div class="">
                        <input type="text" class="form-control" id="mob-no" placeholder="*Enter Verification Code" maxlength="10" required="1" value="">	
                        <a href="merchant_thank_you" class="btn btn-theme">Signup</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </form>
	  
<div class="container-fluid">
 <header>
            <!-- top nav section -->
            <section class="top-sec-nav">
             <?php include ('app/views/includes/top-nav.php');?>
				
            </section>
            
         </header>
			<!-- END .header -->
<div id="signupbox" style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 visitor-form-wrap animated fadeInDown" data-animate="fadeInDown">
         <div class="panel panel-info">
            <div class="panel-heading">
               <div class="panel-title">Advertiser Sign Up
				<div class="already-registered"><a href="merchant_login" id="Advertiser-login">Already Registered?</a></div>
				</div>
            </div>
            <div class="panel-body" >
               <form id="signupform" class="form-horizontal" role="form">
                  <div id="signupalert" style="display:none" class="alert alert-danger">
                     <p>Error:</p>
                     <span></span>
                  </div>
                  <div>
				  <div class="form-group">
										<label for="email" class="col-md-4 control-label">*Store Name</label>
										<div class="col-md-6">
										   <input type="text" class="form-control" id="email" placeholder="First Name">
										</div>
										
                                 </div>
                     <div class="form-group">
										<label for="email" class="col-md-4 control-label">*Contact Person</label>
										<div class="col-md-3">
										   <input type="text" class="form-control" id="email" placeholder="First Name">
										</div>
										<div class="col-md-3">
										   <input type="text" class="form-control" id="email" placeholder="Last Name">
										</div>
                                 </div>
                                 <div class="form-group">
                                    <label for="create-user-name" class="col-md-4 control-label">*User Name</label>
                                    <div class="col-md-6">
                                       <input type="text" class="form-control" id="create-user-name" placeholder="User Name">
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label for="create-password" class="col-md-4 control-label">*Password</label>
                                    <div class="col-md-6">
                                       <input type="password" class="form-control" id="create-password" placeholder="Password">
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label for="Retype-password" class="col-md-4 control-label">*Retype Password</label>
                                    <div class="col-md-6">
                                       <input type="password" class="form-control" id="Retype-password" placeholder="Retype Password">
                                    </div>
                                 </div>
                               
                                 <div class="form-group">
                                    <label for="email" class="col-md-4 control-label">*Email Id</label>
                                    <div class="col-md-6">
                                       <input type="text" class="form-control" id="email" placeholder="Email Id">
                                    </div>
                                 </div>
								 
							
                     <div class="form-group">
                        <label for="area" class="col-md-4 control-label">*Area/Location</label>
                        <div class="col-md-6">
                           <select class="selectpicker" data-live-search="true"   title="Area/Location">
                              <option>AmeerPet</option>
                              <option>Kukatapally</option>
                              <option>GachiBowli</option>
                              <option>Lingampally</option>
                           </select>
                        </div>
                     </div>
					 	
                     <div class="form-group">
                        <label for="city" class="col-md-4 control-label">*City</label>
                        <div class="col-md-6">
                           <select class="selectpicker" data-live-search="true"   title="City">
                              <option>Hyderabd</option>
                              <option>Vijayawada</option>
                              <option>Warangal</option>
                              <option>Tirupati</option>
                           </select>
                        </div>
                     </div>
					  <div class="form-group">
                        <label for="state" class="col-md-4 control-label">*State</label>
                        <div class="col-md-6">
                           <select class="selectpicker" data-live-search="true"   title="State">
                              <option>Andhra Pradesh</option>
                              <option>Telangana</option>
							  <option>Karnataka</option>
							  <option>Tamilnadu</option>
                           </select>
                        </div>
                     </div>
						
                     <div class="col-md-offset-4 col-md-8">											
                        <button type="button" class="btn btn btn-theme" data-toggle="modal" data-target="#myModal">Next</button>
                     </div>
               </form>
               </div>
            </div>
         </div>
         
         
         
      </div>

</div>

<!-- footer starts -->
         
<?php include ('app/views/includes/footer.php') ?>
