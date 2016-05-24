<?php include 'app/views/includes/head.php';?>
<title>Offerciti | Favourites</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Offerciti offline discounts" />
	<meta name="keywords" content="Offers, discounts" />
	<meta name="author" content="www.offerciti.com" />

	<script>
	
	$( document ).ready(function() {
	$("[rel='tooltip']").tooltip();    
	$('.thumbnail').hover(
	function(){
	$(this).find('.caption').slideDown(250); //.fadeIn(250)
	},
	function(){
	$(this).find('.caption').slideUp(250); //.fadeOut(205)
	}
	);	
	});
	
	</script>
	 
</head>

<body>	
<div class="container-fluid vendor-dshbrd">

     

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
                                 Subbu Pedagadi
                              </h6>
                           </div>
                           <div id="collapse1" class="panel-collapse collapse in">
                              <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-2">										
                                       <a id="" href="profile" class="btn btn-theme btn-theme-block"><span class="glyphicon glyphicon-user"></span>Profile </a>
                                    </div>
                                    
                                    <div class="col-sm-2">
                                       <a id="" href="user_change_password" class="btn btn-theme btn-theme-block"><span class="glyphicon glyphicon-lock"></span>Change Password</a>
                                    </div>
									
									<div class="col-sm-2">
                                       <a id="" href="favourites" class="btn btn-theme-dark btn-theme-dark"><span class="glyphicon glyphicon-heart"></span>Favourites</a>
                                    </div>
                                    
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
               </div>
               <!-- user Favourite offers starts -->
               <div  class="mainbox">
            <div class="panel panel-info">
                  <div class="panel-heading">
                     <div class="panel-title">Favourites</div>
                  </div>
                  <div class="panel-body">
                     <div class="res-wrap rec-partner">
                        <div class="row">
                        <!-- vendor section  starts -->
						
                        <div class="col-md-2 vendor-card">
                           <div class="thumbnail">
                              <div class="caption">
                                 <h4>FLAT <span>55%</span></h4>
                                 <p>SOUTH INDIA SHOPPING MALL</p>
                              </div>
                              <img src="<?php echo site_url('app/assets/images/vendor-assets/chandana.jpg');?>" alt="Chandana Brothers" title="Chandana Brothers">
                           </div>
                        </div>
                        <div class="col-md-10 vendor-info-wrap">
                           <ul class="list-inline">
                              <li>
                                 <h5 class="vendor-name blue">Chandana Brothers</h5>
                              </li>
                              <li>
                                 <div class="vendor-lbl"><span class="btn-social btn-outline"><i class="fa fa-fw fa-tags"></i></span></div>
                                 <div class="vendor-txt">Flat                                         
                                    <span>55%</span> discount on all products 
                                 </div>
                              </li>
                              <li>
                                 <div class="vendor-lbl"><span class="btn-social btn-outline"><i class="fa fa-fw fa-calendar"></i></span></div>
                                 <div class="vendor-lbl">End Date : </div>
                                 <div class="vendor-txt">Aug 15</div>
                              </li>
                              <li>
                                 <div class="vendor-lbl"><span class="btn-social btn-outline"><i class="fa fa-fw fa-map-marker"></i></span></div>
                                 <div class="vendor-txt store-adrs">Plot No:17-20 Sy no: 166/p,Near bus stop, Kukatpalli Village, Hyderabad</div>
                              </li>
                              <li>
                                 <div class="vendor-lbl"><span class="btn-social btn-outline"><i class="fa fa-fw fa-phone"></i></span></div>
                                 <div class="vendor-txt">040 23054025
								 <i class="location-lbl fa fa-fw fa-thumb-tack"></i><b class="location-lbl">Ameerpet</b>									
								 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
					 </div>
						<div class="res-wrap rec-partner">
                        <div class="row">
                        <!-- vendor section  starts -->
						
                        <div class="col-md-2 vendor-card">
                           <div class="thumbnail">
                              <div class="caption">
                                 <h4>FLAT <span>55%</span></h4>
                                 <p>SOUTH INDIA SHOPPING MALL</p>
                              </div>
                              <img src="<?php echo site_url('app/assets/images/vendor-assets/chandana.jpg');?>" alt="Chandana Brothers" title="Chandana Brothers">
                           </div>
                        </div>
                        <div class="col-md-10 vendor-info-wrap">
                           <ul class="list-inline">
                              <li>
                                 <h5 class="vendor-name blue">Chandana Brothers</h5>
                              </li>
                              <li>
                                 <div class="vendor-lbl"><span class="btn-social btn-outline"><i class="fa fa-fw fa-tags"></i></span></div>
                                 <div class="vendor-txt">Flat                                         
                                    <span>55%</span> discount on all products 
                                 </div>
                              </li>
                              <li>
                                 <div class="vendor-lbl"><span class="btn-social btn-outline"><i class="fa fa-fw fa-calendar"></i></span></div>
                                 <div class="vendor-lbl">End Date : </div>
                                 <div class="vendor-txt">Aug 15</div>
                              </li>
                              <li>
                                 <div class="vendor-lbl"><span class="btn-social btn-outline"><i class="fa fa-fw fa-map-marker"></i></span></div>
                                 <div class="vendor-txt store-adrs">Plot No:17-20 Sy no: 166/p,Near bus stop, Kukatpalli Village, Hyderabad</div>
                              </li>
                              <li>
                                 <div class="vendor-lbl"><span class="btn-social btn-outline"><i class="fa fa-fw fa-phone"></i></span></div>
                                 <div class="vendor-txt">040 23054025
								 <i class="location-lbl fa fa-fw fa-thumb-tack"></i><b class="location-lbl">Ameerpet</b>									
								 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
					 </div>
						
                        </div>
                        
                    
                  </div>
               </div>
         </div>
               <!-- user Favourite offers ends -->
            </div>
         </div>
	<?php include 'app/views/includes/footer.php' ?>

	
  
</div>
