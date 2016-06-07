<?php 
include 'app/views/includes/head.php'; 
if(!isset($_SESSION['email'])){
	header("Location:login");
}else{
?>
<title>Offerciti | User Profile</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Offerciti offline discounts"/>
<meta name="keywords" content="Offers, discounts"/>
<meta name="author" content="www.offerciti.com"/>
</head>
<body>
<div class="container-fluid vendor-dshbrd">
  <header> 
    
    <!-- top nav section -->
    
    <section class="top-sec-nav">
      <?php include 'app/views/includes/top-nav.php'; ?>
    </section>
    
    <!-- top nav section ends --> 
    
  </header>
  <div class="store-ac-main-wrap animated fadeIn" data-animate="fadeIn">
    <div id="store-ac-wrap-inner" style="margin-top:50px;" class="mainbox  col-md-10 col-md-offset-1">
      <div class="panel panel-info">
        
         
      
      <!-- user change password starts -->
      
      <div class="mainbox">
        <div class="panel panel-info">
          <div class="panel-heading">
            <div class="panel-title">Reset Password</div>
          </div>
          <div class="panel-body">
            <form id="signupform" class="form-horizontal" role="form" action="<?php echo base_url() ?>index.php/console/user_new_password" method="post">
              <div id="signupalert" style="display:none" class="alert alert-danger">
                <p>Error:</p>
                <span></span> </div>
              <input type="hidden" name="email" value="<?php echo $_GET['email']; ?>">
              <div class="form-group">
                <label for="new_password" class="col-md-4 control-label">*New Password</label>
                <div class="col-md-6">
                  <input type="password" class="form-control required password" id="new_password"

                                           name="ncps" value=""  maxlength="15" name="ncps">
                </div>
              </div>
              <div class="form-group">
                <label for="c_new_password" class="col-md-4 control-label">*Retype New Password</label>
                <div class="col-md-6">
                  <input type="password" class="form-control required password" id="c_new_password"

                                           name="cncps" value="" maxlength="15"

                                           equalto="#new_password">
                </div>
              </div>
              <div class="col-md-offset-4 col-md-8">
                <button id="signup-verification-pop-btn" type="submit"

                                        class="btn btn-theme change_pass_btn"><i class="icon-hand-right"></i>Save </button>
                <button id="btn-cancel" type="button" class="btn btn-theme-dark btn-cancel">Cancel </button>
              </div>
            </form>
          </div>
        </div>
      </div>
      
      <!-- user change password ends --> 
      
    </div>
  </div>
  <?php } ?>
  <?php include 'app/views/includes/footer.php' ?>
</div>
