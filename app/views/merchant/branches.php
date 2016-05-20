<?php include 'app/views/includes/head.php';?>
<title>Offerciti | Store Branches</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Offerciti offline discounts" />
	<meta name="keywords" content="Offers, discounts" />
	<meta name="author" content="www.offerciti.com" />

	
      
	
	 
</head>

<body>	
<div class="container-fluid vendor-dshbrd">
<!-- sms overlay starts -->
     

   <header>
            <!-- top nav section -->
            <section class="top-sec-nav">
             <?php include 'app/views/includes/top-nav.php';?>  
				
            </section>
            <!-- top nav section ends -->
           
         </header>
		 
		 <div class="store-ac-main-wrap animated fadeIn" data-animate="fadeIn">
            <!-- waiting page starts -->
            <div id="store-ac-wrap-inner" style="margin-top:50px;" class="mainbox  col-md-10 col-md-offset-1">

               <div class="panel panel-info" >
                  <div class="panel-heading">
                     <div class="panel-title">My Account</div>
                  </div>
                  <div style="padding-top:30px" class="panel-body" >
                     <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                           <div class="panel-heading">
                              <h6 class="panel-title">
                                 Chandana Brothers
                              </h6>
                           </div>
                           <div id="collapse1" class="panel-collapse collapse in">
                              <div class="panel-body">
                                  <div class="row">
                                    <div class="col-sm-2">										
                                       <a id="" href="profile.php" class="btn btn-theme btn-theme-block"><span class="glyphicon glyphicon-user"></span>Profile </a>
                                    </div>
                                    <div class="col-sm-2">
                                       <a id="" href="posts.php" class="btn btn-theme btn-theme-block"><span class="glyphicon glyphicon-tag"></span>Manage Ads</a>
                                    </div>
                                    <div class="col-sm-2">
                                       <a id="" href="wallet.php" class="btn btn-theme btn-theme-block"><span class="glyphicon glyphicon-briefcase"></span>Wallet</a>
                                    </div>
                                    <div class="col-sm-2">
                                       <a id="" href="branches.php" class="btn btn-theme-dark btn-theme-dark"><span class="glyphicon glyphicon-home"></span>Branches</a>
                                    </div>
                                    <div class="col-sm-2">
                                       <a id="" href="../offer/postad.php" class="btn btn-theme btn-theme-block"><span class="glyphicon glyphicon-bullhorn"></span>Post Ad </a>
                                    </div>
                                    <div class="col-sm-2">
                                       <a id="" href="changePassword.php" class="btn btn-theme btn-theme-block"><span class="glyphicon glyphicon-lock"></span>Change Password</a>
                                    </div>
                                    <div class="col-sm-2">
                                       <a id="" href="notifications.php" class="btn btn-theme btn-theme-block"><span class="glyphicon glyphicon-bell"></span>Notifications</a>
                                    </div>
                                    <div class="col-sm-2">
                                       <a id="" href="support.php" class="btn btn-theme btn-theme-block"><span class="glyphicon glyphicon-envelope"></span>Support</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     
                     </div>
                  </div>
                  <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
               </div>
			      <div class="panel panel-info branches-inner-wrap">
                           <div class="panel-heading">
                              <div class="panel-title">Store / Branches
                                 <a href="#" class="btn btn-default btn-sm" style="float:right;">
                                 <span class="glyphicon glyphicon-flag"></span>Create New Branch
                                 </a>
                              </div>
                           </div>
                           <div class="panel-body">
						   
						   <div class="branch-wrap">
				  <div class="form-group">
                        <label for="new-loc-name" class="col-md-4 control-label">Store / Branch Name</label>
                        <div class="col-md-6">								
                           <input type="text" class="form-control" data-toggle="tooltip" data-placement="bottom" title="" id="new-loc-title" placeholder="Chandana Brothers (Koti)" data-original-title="">																
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
                        <label for="email" class="col-md-4 control-label">*Email Id</label>
                        <div class="col-md-6">
                           <input type="text" class="form-control" id="email" placeholder="Email Id">
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="land-phone-number" class="col-md-4 control-label">*Land Phone Number</label>
                        <div class="col-md-6">
                           <input type="text" class="form-control" id="land-phone-number" placeholder="Land Phone Number">
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="Address" class="col-md-4 control-label">*Address</label>
                        <div class="col-md-6">
                           <input type="text" class="form-control" id="Address1"  placeholder="Ex: Sri Taruni Stores">
                        </div>
                     </div>
					 <div class="form-group">
                        <label for="Address" class="col-md-4 control-label">&nbsp;</label>
                        <div class="col-md-6">
                           <input type="text" class="form-control" id="Address2"  placeholder="Ex: Opposite Image Hospital">
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
                        <label for="city" class="col-md-4 control-label">*City/Town</label>
                        <div class="col-md-6">
                           <select class="selectpicker" data-live-search="true"   title="City/Town">
                              <option>Hyderabad</option>
                              <option>Warangal</option>
                           </select>
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="state" class="col-md-4 control-label">*State</label>
                        <div class="col-md-6">
                           <input type="text" class="form-control" id="state"  placeholder="State">
                        </div>
                     </div>
                     
                     
                     <div class="form-group">
                        <label for="pin-code" class="col-md-4 control-label">Landmark</label>
                        <div class="col-md-6">
                           <input type="text" class="form-control" id="pin-code" placeholder="Landmark">
                        </div>
                     </div>
                     
                     
                     <div class="form-group">
                        <label for="mapped-address" class="col-md-4 control-label">Mapped Address</label>
                        <div class="col-md-6">
                           <textarea class="form-control" rows="3" id="mapped-address" disabled="">Chandana brothers, koti, Hyderabad, Telangana - 500041</textarea>
                        </div>
                     </div>
                     <div class="form-group">
                        <div class=" map-cont update-existed-store-loc-wrap">
                           <div id="googleMap" class="update-existed-store-loc">
                              <img src="../assets/images/adpost-loc.jpg">
                           </div>
                        </div>
                     </div>
					 <div class="form-group store-cta">
                        <a href="#" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Save">
                        <span class="glyphicon glyphicon-save"></span>Save
                        </a>
                        <a href="#" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Cancel">
                        <span class="glyphicon glyphicon-ban-circle"></span>Cancel
                        </a>
                     </div>
                     
                  
               </div>
						   
						   
					<div class="store-view-tbl">	   
                              <table class="table table-hover table-responsive">
                                 <thead>
                                    <tr>
                                       <th>SNo</th>
                                       <th>Contact Person</th>
                                       <th>Address</th>
                                       <th>Contact No</th>
                                       <th>Email id</th>
                                       <th>
                                          &nbsp;
                                       </th>
                                       <th>
                                          &nbsp;								 
                                       </th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>1</td>
                                       <td>Ravi annam</td>
                                       <td>Chandana brothers, koti, Hyderabad, Telangana - 500041</td>
                                       <td>9963798999</td>
                                       <td>ravi.annam@chandanabrothers.com</td>
                                       <td>
                                          <a href="#" class="btn btn-warning btn-sm store-existed-loc-edit-btn"  data-target="#myModala" rel="tooltip"  data-toggle="modal" data-placement="bottom" title="" data-original-title="Edit Store / Branches">
                                          <span class="glyphicon glyphicon-edit"></span>
                                          </a>	
                                       </td>
                                       <td>
                                          <a href="#" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Delete Store / Branches">
                                          <span class="glyphicon glyphicon-trash"></span>
                                          </a>								 
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>2</td>
                                       <td>Kiran sikakolli</td>
                                       <td>Chandana brothers, ameerpet, Hyderabad, Telangana - 500041</td>
                                       <td>9963798959</td>
                                       <td>ravi.annam@chandanabrothers.com</td>
                                       <td>
                                          <a href="#" class="btn btn-warning btn-sm store-existed-loc-edit-btn"  data-target="#myModala" rel="tooltip"  data-toggle="modal" data-placement="bottom" title="" data-original-title="Edit Store / Branches">
                                          <span class="glyphicon glyphicon-edit"></span>
                                          </a>	
                                       </td>
                                       <td>
                                          <a href="#" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Delete Store / Branches">
                                          <span class="glyphicon glyphicon-trash"></span>
                                          </a>								 
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
							  </div>
                              <!--
                                 -->	 
                           </div>
                        </div>
            </div>
         </div>
	<?php include 'app/views/includes/footer.php' ?>	

	
  
</div>
