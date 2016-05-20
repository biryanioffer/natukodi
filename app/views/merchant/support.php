<?php include 'app/views/includes/head.php';?>
<title>Offerciti | Store Notifications</title>
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
                                       <a id="" href="branches.php" class="btn btn-theme btn-theme-block"><span class="glyphicon glyphicon-home"></span>Branches</a>
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
                                       <a id="" href="support.php" class="btn btn-theme-dark btn-theme-dark"><span class="glyphicon glyphicon-envelope"></span>Support</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
               </div>
               <!-- Support starts -->
               <div class="panel panel-info">
                  <div class="panel-heading">
                     <div class="panel-title">Support</div>
                  </div>
                  <div class="panel-body">
                     <form role="form">
                        <div class="form-group">
                           <label for="store-subject">Subject:</label>
                           <input type="text" class="form-control" id="store-subject">
                        </div>
                        <div class="form-group">
                           <label for="store-desc">Description:</label>
                           <textarea class="form-control" rows="5" id="store-desc"></textarea>
                        </div>
                        <button type="submit" class="btn btn-info">Submit</button>
                     </form>
                  </div>
               </div>
               <!-- Support ends -->
            </div>
         </div>
	<?php include 'app/views/includes/footer.php' ?>

	
  
</div>