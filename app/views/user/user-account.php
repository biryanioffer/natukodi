<?php include 'app/views/includes/head.php';?>
<title>Offerciti | Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Offerciti offline discounts" />
	<meta name="keywords" content="Offers, discounts" />
	<meta name="author" content="www.offerciti.com" />
	<script>
	
/*user account */

	$(document).ready(function(){
	$(".user-profile-edit").hide();
	$(".user-password-edit").hide();
	$("#user-profile-edit-btn").click(function(){
	$("#user-profile-view").hide();
	$("#user-profile-edit").show();
	});
	
	
	$("#user-password-change-btn").click(function(){
	$("#user-profile-view").hide();
	$("#user-profile-edit").hide();
	$(".user-password-edit").show();
	});
	
	$(".btn-cancel").click(function(){
	$(".user-password-edit").hide();
	$("#user-profile-edit").hide();
	$("#user-profile-view").show();
	});
	
	
	
	
});
	</script>
	
	 
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
  <div  style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 animated fadeInDown" data-animate="fadeInDown">
            <div class="panel panel-info">
               <div class="panel-heading">
                  <div class="panel-title">My Account</div>
               </div>
               <div class="panel-body" >
                  <form id="user-profile-view" class="form-horizontal user-profile-view" role="form">
                     <div class="form-group">
                        <label class="col-md-4 control-label">First Name </label>
                        <label  class="col-md-6 control-label lbl-view">Subbu ped</label>
                     </div>
                     
                     <div class="form-group">
                        <label for="create-user-name" class="col-md-4 control-label">*Email</label>
                        <label  class="col-md-6 control-label lbl-view">subbu.ped@gmail.com</label>
                     </div>
                     <div class="form-group">
                        <label for="phone-number" class="col-md-4 control-label">Phone Number</label>
                        <label  class="col-md-6 control-label lbl-view">9963798988</label>
                     </div>
                     <div class="form-group">
                        <label  class="col-md-4 control-label">Gender</label>
                        <label  class="col-md-6 control-label lbl-view">Male</label>															   
                     </div>
                     <div class="form-group">
                        <label for="dob" class="col-md-4 control-label">Date of Birth</label>
                        <label  class="col-md-6 control-label lbl-view">Feb/02/1981</label>
                     </div>
                    
                     <div class="form-group">
                        <label for="area" class="col-md-4 control-label">Area</label>
                        <label  class="col-md-6 control-label lbl-view">KPHB</label>
                     </div>
                     <div class="form-group">
                        <label for="city" class="col-md-4 control-label">City</label>
                        <label  class="col-md-6 control-label lbl-view">Hyderabad</label>
                     </div>
                     <div class="form-group">
                        <label for="state" class="col-md-4 control-label">State</label>
                        <label  class="col-md-6 control-label lbl-view">Andhra Pradesh</label>
                     </div>
                    
                     <div class="form-group acupdate-btn-cont">
                        <!-- Button -->                                        
                        <div class="col-md-4 profile-btn">
                           <button  id="user-profile-edit-btn" type="button" class="btn btn-theme">Edit Profile</button>
                        </div>
						<div class="col-md-8 chpwd-btn">
                           <button  id="user-password-change-btn" type="button" class="btn btn-theme-dark">Change Password</button>
                        </div>
                     </div>
                  </form>
                  <!-- user form edit starts -->
                  <form id="user-profile-edit" class="form-horizontal user-profile-edit" role="form">
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
                        <label for="phone-number" class="col-md-4 control-label">*Phone Number</label>
                        <div class="col-md-6">
                           <input type="text" class="form-control" id="phone-number" placeholder="Enter Phone Number">
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
						
                     
                     <div class="form-group">
                        <!-- Button -->                                        
                        <div class="col-md-offset-4 col-md-8">
                           <button id="btn-signup" type="submit" class="btn btn-theme">Update Profile</button>
                           <button id="btn-cancel" type="button" class="btn btn-theme-dark btn-cancel">Cancel</button>
                        </div>
                     </div>
                  </form>
                  <!-- user form edit end -->
				  
				  <!-- Edit Password start -->
				  
				  <form id="user-password-edit" class="form-horizontal user-password-edit" role="form">
                     <div id="signupalert" style="display:none" class="alert alert-danger">
                        <p>Error:</p>
                        <span></span>
                     </div>
					  <div class="form-group">
                        <label for="Current-password" class="col-md-4 control-label">*Current Password</label>
                        <div class="col-md-6">
                           <input type="password" class="form-control" id="Current-password">
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="first-name" class="col-md-4 control-label">*Password</label>
                        <div class="col-md-6">
                           <input type="password" class="form-control" id="password">
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="last-name" class="col-md-4 control-label">*Retype Password</label>
                        <div class="col-md-6">
                           <input type="password" class="form-control" id="last-name">
                        </div>
                     </div>
					 <div class="col-md-offset-4 col-md-8">											
                              <button id="signup-verification-pop-btn" type="button" class="btn btn-theme"><i class="icon-hand-right"></i>Save</button>
							  <button id="btn-cancel" type="button" class="btn btn-theme-dark btn-cancel">Cancel</button>
                     </div>
					 
				  </form>
				  
				  
				  
				  <!-- Edit Password end -->
				  
				  
				  
               </div>
            </div>
         </div>

</div>

<!-- footer starts -->
         
<?php include 'app/views/includes/footer.php' ?>
   
