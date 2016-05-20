<?php include 'includes/head.php';?>
<title>Offerciti | Results</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Offerciti offline discounts" />
	<meta name="keywords" content="Offers, discounts" />
	<meta name="author" content="www.offerciti.com" />

	<script>
         $(function () {
         
             $("#range").ionRangeSlider({
                 hide_min_max: true,
                 keyboard: true,
                 min: 0,
                 max: 100,
                 from: 0,
                 to: 100,
                 type: 'double',
                 step: 1,
         postfix: " %",
                 grid: true
             });
         
         });
      </script>
    
      <script>
         $(document).ready(function(){
             $('[data-toggle="tooltip"]').tooltip();   
         });
      </script>
	 
	
	 
</head>

<body>	
<div class="container-fluid results">
<!-- sms overlay starts -->
      <div id="overlay">
         <a href="#" class="close">&times;</a>
         <form class="form-stl" role="form">
            <div class="form-group">
               <h4>SEND <span class="pophd">SMS</span></h4>
               <label for="mob-no">Mobile NO:</label>
               <input type="text" class="form-control" id="mob-no" placeholder="Enter Mobile No *" maxlength="10" required="1" value="">
               <br>              
               <button type="button" class="btn btn-primary btn-block">Submit</button>
            </div>
         </form>
      </div>
      <div id="mask" onclick="document.location='#';"></div>
      <!-- the only javascript -->
      <!-- sms overlay ends -->


   <header>
            <!-- top nav section -->
            <section class="top-sec-nav">
             <?php include 'includes/top-nav.php';?>  
				
            </section>
            <!-- top nav section ends -->
            <!-- top  nav categories starts -->
            <?php include 'includes/search.php'; ?>
			
            <!-- top nav categories ends -->
         </header>
  
  <div class="row resutls-cont">
  <div class="row">
	<ul id="breadcrumb-res" class="col-md-12 breadcrumb-res breadcrumb">
               <li>
                  <a href="#" class="crumb">
                  <span>Clothing</span>	<span class="crumb-child">
                  <span class="brd-crmb-del-cont"><span class="brd-crmb-del">X</span>Men														
					  <span class="crumb-child-inner">
						  <span>Tshirts</span>					  
						  <span class="brd-crmb-del">X</span>					   
					  </span>
                  </span>
                  </span></a>
               </li>
               <li>
                  <a href="#" class="crumb">
                  <span>Hyderabad</span>	
				  <span class="crumb-child">
					  <span class="brd-crmb-del-cont">
						<span class="brd-crmb-del">X</span>Ameerpet												
					 </span>
                   </span>
				    <span class="crumb-child">
					  <span class="brd-crmb-del-cont">
						<span class="brd-crmb-del">X</span>BHEL												
					 </span>
                   </span>
				    <span class="crumb-child">
					  <span class="brd-crmb-del-cont">
						<span class="brd-crmb-del">X</span>Somajiguda												
					 </span>
                   </span>
				  </a>
               </li>
                 
            </ul>
			
  </div>
	<div id="left-nav" class="col-md-3">
			  <h7 class="filterby-lbl">Filter By :</h7>
			  <form id="oc-filter" class="form-prd-srch">
				 <h6 id="category-filter" class="category-hd">Category</h6>
				 <div id="sel-category-filter" class="scroll-pane sel-category-filter" style="overflow: hidden; padding: 0px; width: 227px;">
					
				 <div class="jspContainer" style="width: 227px; height: 54px;"><div class="jspPane" style="padding: 0px; top: 0px; left: 0px; width: 227px;"><div class="accordion">
					   <h2><a href="#.">Men</a></h2>
					   <div class="inner act-sect" style="display: none;">
						  <div class="section-inputs">
							 <span class="input-blue checkbox">
							 <input type="checkbox" id="checkbox1">
							 <label for="checkbox1">Shirts</label>
							 </span>
							 <span class="input-blue checkbox">
							 <input type="checkbox" id="checkbox2">
							 <label for="checkbox2">Casual Shirts</label>
							 </span>
							 <span class="input-blue checkbox">
							 <input type="checkbox" id="checkbox3">
							 <label for="checkbox3">Formal Shirts</label>
							 </span>
							 <span class="input-blue checkbox">
							 <input type="checkbox" id="checkbox4">
							 <label for="checkbox4">Trousers</label>
							 </span>
							 <span class="input-blue checkbox">
							 <input type="checkbox" id="checkbox5">
							 <label for="checkbox5">Jeans</label>
							 </span>
							 <span class="input-blue checkbox">
							 <input type="checkbox" id="checkbox6">
							 <label for="checkbox6">Formal Trousers</label>
							 </span>
						  </div>
					   </div>
					   <h2><a href="#.">Women</a></h2>
					   <div class="inner" style="display: none;">
						  <div class="section-inputs">
							 <span class="input-blue checkbox">
							 <input type="checkbox" id="checkbox1w">
							 <label for="checkbox1w">Sarees</label>
							 </span>
							 <span class="input-blue checkbox">
							 <input type="checkbox" id="checkbox2">
							 <label for="checkbox2w">Handloom Sarees</label>
							 </span>
							 <span class="input-blue checkbox">
							 <input type="checkbox" id="checkbox3w">
							 <label for="checkbox3w">Pattu Sarees</label>
							 </span>
							 <span class="input-blue checkbox">
							 <input type="checkbox" id="checkbox4w">
							 <label for="checkbox4w">Chudidars</label>
							 </span>
							 <span class="input-blue checkbox">
							 <input type="checkbox" id="checkbox5w">
							 <label for="checkbox5w">Jeans</label>
							 </span>
							 <span class="input-blue checkbox">
							 <input type="checkbox" id="checkbox6w">
							 <label for="checkbox6w">Tshirts</label>
							 </span>
						  </div>
					   </div>
					</div></div></div></div>
				 <div class="area-fltr-wrap">
					<select id="maxOption2" class="selectpicker  form-control" multiple data-live-search="true" data-max-options="3" title="Area">
					   <option>AmeerPet</option>
					   <option>BHEL</option>
					   <option>Chandanagar</option>
					   <option>Miyapur</option>
					   <option>AmeerPet</option>
					   <option>BHEL</option>
					   <option>Chandanagar</option>
					   <option>Miyapur</option>
					   <option>AmeerPet</option>
					   <option>BHEL</option>
					   <option>Chandanagar</option>
					   <option>Miyapur</option>
					   <option>AmeerPet</option>
					   <option>BHEL</option>
					   <option>Chandanagar</option>
					   <option>Miyapur</option>
					</select>
				 </div>
				 <h6 id="offers-filter" class="category-hd">Offer</h6>
				 <div class="list-group">
					 <div class="section-inputs offers-label-cont">								 
							  <span class="input-blue radio">
								  <input type="radio" id="Flat" name="radio-group-offer">
								  <label for="Flat">Flat</label>
							  </span>
							  <span class="input-blue radio">
								  <input type="radio" id="Upto" name="radio-group-offer">
								  <label for="Upto">Upto</label>
							  </span>
							   <span class="input-blue radio">
								  <input type="radio" id="Cashback" name="radio-group-offer">
								  <label for="Cashback">Cashback</label>
							  </span>
							<span class="input-blue radio">
								  <input type="radio" id="Exchange" name="radio-group-offer">
								  <label for="Exchange">Exchange</label>
							  </span>
							<span class="input-blue radio">
								  <input type="radio" id="spoffers" name="radio-group-offer">
								  <label for="spoffers">Special Offers</label>
							  </span>								  
						   </div>
					<div class="offer-percent-slider">
					   <div>
						  <input type="text" id="range" value="" name="range" />
					   </div>
					</div>
					<div id="" class="offer-percent-slider" style="border-top: 1px dotted #4A4847; padding-top: 10px;">
					   <div class="section-inputs">
						  <span class="input-blue checkbox">
							  <input type="checkbox" id="buy1get1">
							  <label for="buy1get1">Buy 1 Get 1</label>
						  </span>
						  <span class="input-blue checkbox">
							  <input type="checkbox" id="buy1get2">
							  <label for="buy1get2">Buy 1 Get 2</label>
						  </span>
						  <span class="input-blue checkbox">
							  <input type="checkbox" id="buy1get3">
							  <label for="buy1get3">Buy 1 Get 3</label>
						  </span>
					   </div>
					</div>
				 </div>
			  </form>
		   </div>
	
	<div id="right-nav" class="col-md-9">
                  <!-- resutls starts -->
                  <!-- resutls section-wise-start -->
                  <div class="res-wrap rec-partner">
                     
                     <div class="row">
                        <!-- vendor section  starts -->
                        <div class="col-md-2 vendor-card">
                           <div class="thumbnail">
                              <div class="caption">
                                 <h4>FLAT <span>55%</span></h4>
                                 <p>SOUTH INDIA SHOPPING MALL</p>
                              </div>
                              <img src="../assets/images/vendor-assets/chandana.jpg" alt="Chandana Brothers" title="Chandana Brothers">
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
                     <div class="row store-feat">
                        <div class="col-md-2 rating-feat-wrap">
                           <ul class="list-inline">
                              <li>
                                 <div id="1430988296136" class="rating-wrap">
                                    <a href="#" class="starRating" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="10 persons">
                                    <input id="rating5" type="radio" name="rating" value="5">
                                    <label for="rating5">5</label>
                                    <input id="rating4" type="radio" name="rating" value="4">
                                    <label for="rating4">4</label>
                                    <input id="rating3" type="radio" name="rating" value="3" checked>
                                    <label for="rating3">3</label>
                                    <input id="rating2" type="radio" name="rating" value="2">
                                    <label for="rating2">2</label>
                                    <input id="rating1" type="radio" name="rating" value="1">
                                    <label for="rating1">1</label>						   
                                    </a><b class="rating-info">4.5 / 5</b>
                                 </div>
                              </li>
                           </ul>
                        </div>
                        
                        <div class="col-md-10 rating-feat-wrap store-feat-more-wrap">
                           <ul class="list-inline">

                              <li>
                                 <div class="vendor-lbl share-btn"><span class="btn-social btn-outline" data-toggle="tooltip" data-placement="bottom" title="Share"><i class="fa fa-fw fa-share-alt"></i></span></div>
                              </li>
                              <li>
                                 <div class="vendor-lbl"><span class="btn-social btn-outline" data-toggle="tooltip" data-placement="bottom" title="Shortlist"><i class="fa fa-fw fa-list"></i></span></div>
                              </li>
                              <li>
                                 <div class="vendor-lbl"><span class="btn-social btn-outline" data-toggle="tooltip" data-placement="bottom" title="Favourite"><i class="fa fa-fw fa-heart"></i></span></div>
                              </li>
                              <li>
                                 <div class="vendor-lbl"><span class="btn-social btn-outline" data-toggle="tooltip" data-placement="bottom" title="Like"><i class="fa fa-fw fa-thumbs-up"></i></span><b class="like-info">555</b></div>
                              </li>
                              <li>
                                 <div class="vendor-lbl"><a href="offer-details.php" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="bottom" title="More Information">More</a></div>
                              </li>
                           </ul>
                           <ul class="share-buttons">
                              <li><a href="https://www.facebook.com/sharer/sharer.php?u=&t=" title="Share on Facebook" target="_blank"><img src="../assets/images/social/Facebook.png"></a></li>
                              <li><a href="https://twitter.com/intent/tweet?source=&text=:%20" target="_blank" title="Tweet"><img src="../assets/images/social/Twitter.png"></a></li>
                              <li><a href="https://plus.google.com/share?url=" target="_blank" title="Share on Google+"><img src="../assets/images/social/Google+.png"></a></li>
                              <li><a href="mailto:?subject=&body=:%20" target="_blank" title="Email"><img src="../assets/images/social/Email.png"></a></li>
                              <li><a href="whatsapp://send?text=The text to share!" data-action="share/whatsapp/share"><img src="../assets/images/social/whatsapp.png"></a></li>
                              <li><a href="#overlay" id="open-overlay"><img src="../assets/images/social/sms.png"></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <!-- resutls section-wise-ends -->
				  
				  
				  <!-- resutls section-wise-start -->
                  <div class="res-wrap rec-partner">
                     
                     <div class="row">
                        <!-- vendor section  starts -->
                        <div class="col-md-2 vendor-card">
                           <div class="thumbnail">
                              <div class="caption">
                                 <h4>FLAT <span>55%</span></h4>
                                 <p>RS Brothers</p>
                              </div>
                              <img src="../assets/images/vendor-assets/rsbrothers.jpg" alt="Chandana Brothers" title="Chandana Brothers">
                           </div>
                        </div>
                        <div class="col-md-10 vendor-info-wrap">
                           <ul class="list-inline">
                              <li>
                                 <h5 class="vendor-name blue">RS Brothers</h5>
                              </li>
                              <li>
                                 <div class="vendor-lbl"><span class="btn-social btn-outline"><i class="fa fa-fw fa-tags"></i></span></div>
                                 <div class="vendor-txt">Flat                                         
                                    <span>55%</span>Wedding Sarees
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
								 <i class="location-lbl fa fa-fw fa-thumb-tack"></i><b class="location-lbl">BHEL</b>									
								 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="row store-feat">
                        <div class="col-md-2 rating-feat-wrap">
                           <ul class="list-inline">
                              <li>
                                 <div id="1430988296136" class="rating-wrap">
                                    <a href="#" class="starRating" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="10 persons">
                                    <input id="rating5" type="radio" name="rating" value="5">
                                    <label for="rating5">5</label>
                                    <input id="rating4" type="radio" name="rating" value="4">
                                    <label for="rating4">4</label>
                                    <input id="rating3" type="radio" name="rating" value="3" checked>
                                    <label for="rating3">3</label>
                                    <input id="rating2" type="radio" name="rating" value="2">
                                    <label for="rating2">2</label>
                                    <input id="rating1" type="radio" name="rating" value="1">
                                    <label for="rating1">1</label>						   
                                    </a><b class="rating-info">4.5 / 5</b>
                                 </div>
                              </li>
                           </ul>
                        </div>
                        
                        <div class="col-md-10 rating-feat-wrap store-feat-more-wrap">
                           <ul class="list-inline">
                              <li>
                                 <div class="vendor-lbl share-btn"><span class="btn-social btn-outline" data-toggle="tooltip" data-placement="bottom" title="Share"><i class="fa fa-fw fa-share-alt"></i></span></div>
                              </li>
                              <li>
                                 <div class="vendor-lbl"><span class="btn-social btn-outline" data-toggle="tooltip" data-placement="bottom" title="Shortlist"><i class="fa fa-fw fa-list"></i></span></div>
                              </li>
                              <li>
                                 <div class="vendor-lbl"><span class="btn-social btn-outline" data-toggle="tooltip" data-placement="bottom" title="Favourite"><i class="fa fa-fw fa-heart"></i></span></div>
                              </li>
                              <li>
                                 <div class="vendor-lbl"><span class="btn-social btn-outline" data-toggle="tooltip" data-placement="bottom" title="Like"><i class="fa fa-fw fa-thumbs-up"></i></span><b class="like-info">555</b></div>
                              </li>
                              <li>
                                 <div class="vendor-lbl"><a href="offer-details.php" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="bottom" title="More Information">More</a></div>
                              </li>
                           </ul>
                           
                        </div>
                     </div>
                  </div>
                  <!-- resutls section-wise-ends -->
				  
				  
				  
				  <!-- resutls section-wise-start -->
                  <div class="res-wrap rec-partner">
                     
                     <div class="row">
                        <!-- vendor section  starts -->
                        <div class="col-md-2 vendor-card">
                           <div class="thumbnail">
                              <div class="caption">
                                 <h4>FLAT <span>45%</span></h4>
                                 <p>Nalli Silks</p>
                              </div>
                              <img src="../assets/images/vendor-assets/nallisilks.jpg" alt="Nalli Silks" title="Nalli Silks">
                           </div>
                        </div>
                        <div class="col-md-10 vendor-info-wrap">
                           <ul class="list-inline">
                              <li>
                                 <h5 class="vendor-name blue">Nalli Silks</h5>
                              </li>
                              <li>
                                 <div class="vendor-lbl"><span class="btn-social btn-outline"><i class="fa fa-fw fa-tags"></i></span></div>
                                 <div class="vendor-txt">Flat                                         
                                    <span>45%</span> Pattu Sarees 
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
                     <div class="row store-feat">
                        <div class="col-md-2 rating-feat-wrap">
                           <ul class="list-inline">
                              <li>
                                 <div id="1430988296136" class="rating-wrap">
                                    <a href="#" class="starRating" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="10 persons">
                                    <input id="rating5" type="radio" name="rating" value="5">
                                    <label for="rating5">5</label>
                                    <input id="rating4" type="radio" name="rating" value="4">
                                    <label for="rating4">4</label>
                                    <input id="rating3" type="radio" name="rating" value="3" checked>
                                    <label for="rating3">3</label>
                                    <input id="rating2" type="radio" name="rating" value="2">
                                    <label for="rating2">2</label>
                                    <input id="rating1" type="radio" name="rating" value="1">
                                    <label for="rating1">1</label>						   
                                    </a><b class="rating-info">4.5 / 5</b>
                                 </div>
                              </li>
                           </ul>
                        </div>
                        
                        <div class="col-md-10 rating-feat-wrap store-feat-more-wrap">
                           <ul class="list-inline">
                              <li>
                                 <div class="vendor-lbl share-btn"><span class="btn-social btn-outline" data-toggle="tooltip" data-placement="bottom" title="Share"><i class="fa fa-fw fa-share-alt"></i></span></div>
                              </li>
                              <li>
                                 <div class="vendor-lbl"><span class="btn-social btn-outline" data-toggle="tooltip" data-placement="bottom" title="Shortlist"><i class="fa fa-fw fa-list"></i></span></div>
                              </li>
                              <li>
                                 <div class="vendor-lbl"><span class="btn-social btn-outline" data-toggle="tooltip" data-placement="bottom" title="Favourite"><i class="fa fa-fw fa-heart"></i></span></div>
                              </li>
                              <li>
                                 <div class="vendor-lbl"><span class="btn-social btn-outline" data-toggle="tooltip" data-placement="bottom" title="Like"><i class="fa fa-fw fa-thumbs-up"></i></span><b class="like-info">555</b></div>
                              </li>
                              <li>
                                 <div class="vendor-lbl"><a href="offer-details.php" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="bottom" title="More Information">More</a></div>
                              </li>
                           </ul>
                           
                        </div>
                     </div>
                  </div>
                  <!-- resutls section-wise-ends -->
				  
				  
				  
				  <!-- resutls section-wise-start -->
                  <div class="res-wrap freelisting">
                     
                     <div class="row">
                        <!-- vendor section  starts -->
                        <div class="col-md-2 vendor-card">
                           <div class="thumbnail">
                              <div class="caption">
                                 <h4>Upto <span>35%</span></h4>
                                 <p>Zari Sarees</p>
                              </div>
                              <img src="../assets/images/vendor-assets/zari.jpg" alt="Zari Sarees" title="Zari Sarees">
                           </div>
                        </div>
                        <div class="col-md-10 vendor-info-wrap">
                           <ul class="list-inline">
                              <li>
                                 <h5 class="vendor-name blue">Chandana Brothers</h5>
                              </li>
                              <li>
                                 <div class="vendor-lbl"><span class="btn-social btn-outline"><i class="fa fa-fw fa-tags"></i></span></div>
                                 <div class="vendor-txt">Upto                                         
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
								 <i class="location-lbl fa fa-fw fa-thumb-tack"></i><b class="location-lbl">SOMAJIGUDA</b>									
								 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="row store-feat">
                        <div class="col-md-2 rating-feat-wrap">
                           <ul class="list-inline">
                              <li>
                                 <div id="1430988296136" class="rating-wrap">
                                    <a href="#" class="starRating" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="10 persons">
                                    <input id="rating5" type="radio" name="rating" value="5">
                                    <label for="rating5">5</label>
                                    <input id="rating4" type="radio" name="rating" value="4">
                                    <label for="rating4">4</label>
                                    <input id="rating3" type="radio" name="rating" value="3" checked>
                                    <label for="rating3">3</label>
                                    <input id="rating2" type="radio" name="rating" value="2">
                                    <label for="rating2">2</label>
                                    <input id="rating1" type="radio" name="rating" value="1">
                                    <label for="rating1">1</label>						   
                                    </a><b class="rating-info">4.5 / 5</b>
                                 </div>
                              </li>
                           </ul>
                        </div>
                        
                        <div class="col-md-10 rating-feat-wrap store-feat-more-wrap">
                           <ul class="list-inline">
                              <li>
                                 <div class="vendor-lbl share-btn"><span class="btn-social btn-outline" data-toggle="tooltip" data-placement="bottom" title="Share"><i class="fa fa-fw fa-share-alt"></i></span></div>
                              </li>
                              <li>
                                 <div class="vendor-lbl"><span class="btn-social btn-outline" data-toggle="tooltip" data-placement="bottom" title="Shortlist"><i class="fa fa-fw fa-list"></i></span></div>
                              </li>
                              <li>
                                 <div class="vendor-lbl"><span class="btn-social btn-outline" data-toggle="tooltip" data-placement="bottom" title="Favourite"><i class="fa fa-fw fa-heart"></i></span></div>
                              </li>
                              <li>
                                 <div class="vendor-lbl"><span class="btn-social btn-outline" data-toggle="tooltip" data-placement="bottom" title="Like"><i class="fa fa-fw fa-thumbs-up"></i></span><b class="like-info">555</b></div>
                              </li>
                              <li>
                                 <div class="vendor-lbl"><a href="offer-details.php" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="bottom" title="More Information">More</a></div>
                              </li>
                           </ul>
                           
                        </div>
                     </div>
                  </div>
                  <!-- resutls section-wise-ends -->
				  
				  
				  
				  
				  
               </div>
  
  
</div>
