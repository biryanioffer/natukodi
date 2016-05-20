<?php include 'app/views/includes/head.php';?>
<title>Offerciti | Home</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Offerciti offline discounts" />
	<meta name="keywords" content="Offers, discounts" />
	<meta name="author" content="www.offerciti.com" />
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
	<script type="text/javascript"> 
         var map;
         var marker;
         var myLatlng = new google.maps.LatLng(17.4833,78.4167);
         var geocoder = new google.maps.Geocoder();
         var infowindow = new google.maps.InfoWindow();
         function initialize(){
         var mapOptions = {
         zoom: 18,
         center: myLatlng,
         mapTypeId: google.maps.MapTypeId.ROADMAP
         };
         
         map = new google.maps.Map(document.getElementById("googleMap"), mapOptions);
         
         marker = new google.maps.Marker({
         map: map,
         position: myLatlng,
         draggable: true 
         }); 
         
         geocoder.geocode({'latLng': myLatlng }, function(results, status) {
         if (status == google.maps.GeocoderStatus.OK) {
         if (results[0]) {
         $('#latitude,#longitude').show();
         $('#address').val(results[0].formatted_address);
         $('#latitude').val(marker.getPosition().lat());
         $('#longitude').val(marker.getPosition().lng());
         infowindow.setContent(results[0].formatted_address);
         infowindow.open(map, marker);
         }
         }
         });
         
         google.maps.event.addListener(marker, 'dragend', function() {
         
         geocoder.geocode({'latLng': marker.getPosition()}, function(results, status) {
         if (status == google.maps.GeocoderStatus.OK) {
         if (results[0]) {
         $('#address').val(results[0].formatted_address);
         $('#latitude').val(marker.getPosition().lat());
         $('#longitude').val(marker.getPosition().lng());
         infowindow.setContent(results[0].formatted_address);
         infowindow.open(map, marker);
         }
         }
         });
         });
         
         }
         google.maps.event.addDomListener(window, 'load', initialize);
      </script>
    
      <script>
         $(document).ready(function(){
             $('[data-toggle="tooltip"]').tooltip();   
         });
      </script>
	 
	
	 
</head>

<body>	
<div class="container-fluid offer-details">
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
      <!-- sms overlay ends -->


   <header>
            <!-- top nav section -->
            <section class="top-sec-nav">
             <?php include 'app/views/includes/top-nav.php';?>
				
            </section>
            <!-- top nav section ends -->
         
         </header>
  
  <div id="advertiser-more-cont" class="advertiser-more-cont">
            <h3 class="store-hd">CHANDANA BROTHERS<a href="offers" class="btn btn-primary btn-xs">Back</a><a href="javascript:window.print()" target="_blank"><img src="<?php echo site_url('app/assets/images/print.png');?>"></a></h3>
            
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
                                 <div class="vendor-txt">040 23054025</div>
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
                                 <div class="vendor-lbl"><a href="#" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="bottom" title="More Information">Other locations</a></div>
                              </li>
                           </ul>
                           <ul class="share-buttons">
                              <li><a href="https://www.facebook.com/sharer/sharer.php?u=&t=" title="Share on Facebook" target="_blank"><img src="<?php echo site_url('app/assets/images/social/Facebook.png');?>"></a></li>
                              <li><a href="https://twitter.com/intent/tweet?source=&text=:%20" target="_blank" title="Tweet"><img src="<?php echo site_url('app/assets/images/social/Twitter.png');?>"></a></li>
                              <li><a href="https://plus.google.com/share?url=" target="_blank" title="Share on Google+"><img src="<?php echo site_url('app/assets/images/social/Google+.png');?>"></a></li>
                              <li><a href="mailto:?subject=&body=:%20" target="_blank" title="Email"><img src="<?php echo site_url('app/assets/images/social/Email.png');?>"></a></li>
                              <li><a href="whatsapp://send?text=The text to share!" data-action="share/whatsapp/share"><img src="<?php echo site_url('app/assets/images/social/whatsapp.png');?>"></a></li>
                              <li><a href="#overlay" id="open-overlay"><img src="<?php echo site_url('app/assets/images/social/sms.png');?>"></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <!-- resutls section-wise-ends -->
            <div class="row about-offer-cont">
               <div class="col-md-12">
                  <h5>About Offer</h5>
                  <p>This Offer is exclusively on women sarees which we are offering 50% offer. Stand out from the rest of the crowd wearing this green coloured saree from the house of Vishal. Made of chiffon, this saree is quite comfortable to wear. The subtle print makes this saree look even more beautiful. This saree measures 5.50 m and it comes with a 0.80 m blouse piece.			  
                  </p>
                  <p>The house of Vishal. Made of chiffon, this saree is quite comfortable to wear. The subtle print makes this saree look even more beautiful. This saree measures 5.50 m and it comes with a 0.80 m blouse piece.			  
                  </p>
                  <p>South india shopping mall rest of the crowd wearing this green coloured saree from the house of Vishal. Made of chiffon, this saree is quite comfortable to wear. The subtle print makes this saree look even more beautiful. This saree measures 5.50 m and it comes with a 0.80 m blouse piece.			  
                  </p>
                  <p>look even more beautiful. This saree measures 5.50 m and it comes with a 0.80 m blouse piece.</p>
               </div>
            </div>
            <div class="col-md-12 gallery-wrap">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal"  data-target="#image-gallery">
                           <figure>
                              <img class="img-responsive" src="<?php echo site_url('app/assets/images/store-gallery/1.jpg');?>">
                              <figcaption>
                                 <div>View</div>
                              </figcaption>
                           </figure>
                        </a>
                        <div class="product-info">
                           <div class="h4"><span class="brand"><label>Brand:</label><small>Rain &amp; Rainbow</small></span> <span class="model"><label>Model:</label><small>Brown Printed Cotton Anarkali</small></span></div>
                           <div class="price"><span class="prev-price"><span class="standard-price"><span>&#8377;</span><span>&nbsp;</span>1675</span> </span><span class="standard-price"><span>&#8377;</span><span>&nbsp;</span>1005</span> <span class="discount">(-40%)</span></div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal"  data-target="#image-gallery">
                           <figure>
                              <img class="img-responsive" src="<?php echo site_url('app/assets/images/store-gallery/14.jpg');?>">
                              <figcaption>
                                 <div>View</div>
                              </figcaption>
                           </figure>
                        </a>
                        <div class="product-info">
                           <div class="h4"><span class="brand"><label>Brand:</label><small>Rain &amp; Rainbow</small></span> <span class="model"><label>Model:</label><small>Brown Printed Cotton Anarkali</small></span></div>
                           <div class="price"><span class="prev-price"><span class="standard-price"><span>&#8377;</span><span>&nbsp;</span>1675</span> </span><span class="standard-price"><span>&#8377;</span><span>&nbsp;</span>1005</span> <span class="discount">(-40%)</span></div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal"  data-target="#image-gallery">
                           <figure>
                              <img class="img-responsive" src="<?php echo site_url('app/assets/images/store-gallery/1.jpg');?>">
                              <figcaption>
                                 <div>View</div>
                              </figcaption>
                           </figure>
                        </a>
                        <div class="product-info">
                           <div class="h4"><span class="brand"><label>Brand:</label><small>Rain &amp; Rainbow</small></span> <span class="model"><label>Model:</label><small>Brown Printed Cotton Anarkali</small></span></div>
                           <div class="price"><span class="prev-price"><span class="standard-price"><span>&#8377;</span><span>&nbsp;</span>1675</span> </span><span class="standard-price"><span>&#8377;</span><span>&nbsp;</span>1005</span> <span class="discount">(-40%)</span></div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal"  data-target="#image-gallery">
                           <figure>
                              <img class="img-responsive" src="<?php echo site_url('app/assets/images/store-gallery/1.jpg');?>">
                              <figcaption>
                                 <div>View</div>
                              </figcaption>
                           </figure>
                        </a>
                        <div class="product-info">
                           <div class="h4"><span class="brand"><label>Brand:</label><small>Rain &amp; Rainbow</small></span> <span class="model"><label>Model:</label><small>Brown Printed Cotton Anarkali</small></span></div>
                           <div class="price"><span class="prev-price"><span class="standard-price"><span>&#8377;</span><span>&nbsp;</span>1675</span> </span><span class="standard-price"><span>&#8377;</span><span>&nbsp;</span>1005</span> <span class="discount">(-40%)</span></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-12">
                     <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal"  data-target="#image-gallery">
                        <img class="img-responsive" src="<?php echo site_url('app/assets/images/store-gallery/07.jpg');?>">						
                        </a>
                        <div class="product-info">
                           <div class="h4"><span class="brand"><label>Brand:</label><small>Rain &amp; Rainbow</small></span> <span class="model"><label>Model:</label><small>Brown Printed Cotton Anarkali</small></span></div>
                           <div class="price"><span class="prev-price"><span class="standard-price"><span>&#8377;</span><span>&nbsp;</span>1675</span> </span><span class="standard-price"><span>&#8377;</span><span>&nbsp;</span>1005</span> <span class="discount">(-40%)</span></div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal"  data-target="#image-gallery">
                        <img class="img-responsive" src="<?php echo site_url('app/assets/images/store-gallery/15.jpg');?>">						
                        </a>
                        <div class="product-info">
                           <div class="h4"><span class="brand"><label>Brand:</label><small>Rain &amp; Rainbow</small></span> <span class="model"><label>Model:</label><small>Brown Printed Cotton Anarkali</small></span></div>
                           <div class="price"><span class="prev-price"><span class="standard-price"><span>&#8377;</span><span>&nbsp;</span>1675</span> </span><span class="standard-price"><span>&#8377;</span><span>&nbsp;</span>1005</span> <span class="discount">(-40%)</span></div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal"  data-target="#image-gallery">
                        <img class="img-responsive" src="<?php echo site_url('app/assets/images/store-gallery/07.jpg');?>">						
                        </a>
                        <div class="product-info">
                           <div class="h4"><span class="brand"><label>Brand:</label><small>Rain &amp; Rainbow</small></span> <span class="model"><label>Model:</label><small>Brown Printed Cotton Anarkali</small></span></div>
                           <div class="price"><span class="prev-price"><span class="standard-price"><span>&#8377;</span><span>&nbsp;</span>1675</span> </span><span class="standard-price"><span>&#8377;</span><span>&nbsp;</span>1005</span> <span class="discount">(-40%)</span></div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal"  data-target="#image-gallery">
                        <img class="img-responsive" src="<?php echo site_url('app/assets/images/store-gallery/15.jpg');?>">						
                        </a>
                        <div class="product-info">
                           <div class="h4"><span class="brand"><label>Brand:</label><small>Rain &amp; Rainbow</small></span> <span class="model"><label>Model:</label><small>Brown Printed Cotton Anarkali</small></span></div>
                           <div class="price"><span class="prev-price"><span class="standard-price"><span>&#8377;</span><span>&nbsp;</span>1675</span> </span><span class="standard-price"><span>&#8377;</span><span>&nbsp;</span>1005</span> <span class="discount">(-40%)</span></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="modal fade modal-pop" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">x</span><span class="sr-only">Close</span></button>                           
                        <div class="modal-body">
                           <div class="prod-img-wrap">
                              <img id="image-gallery-image" class="img-responsive" src="<?php echo site_url('app/assets/images/store-gallery/14.jpg');?>">
                           </div>
                           <div class="product-info product-info-pop">
                              <div class="h4"><span class="brand"><label>Brand:</label><small>Rain &amp; Rainbow</small></span> <span class="model"><label>Model:</label><small>Brown Printed Cotton Anarkali</small></span></div>
                              <div class="price"><span class="prev-price"><span class="standard-price"><span>&#x20b9;</span><span>&nbsp;</span>1675</span> </span><span class="standard-price"><span>&#x20b9;</span><span>&nbsp;</span>1005</span> <span class="discount">(-40%)</span></div>
                              <p>This is sample text.This is sample text.This is sample text.This is sample text. This is sample text. This is sample text.
                                 This is sample text.This is sample text.This is sample text.This is sample text. This is sample text. This is sample text.
                                 This is sample text.This is sample text.This is sample text.This is sample text. This is sample text. This is sample text.
                              </p>
                           </div>
                        </div>
                        <div class="modal-footer">
                           <div class="col-md-1 show-previous-image-cont">
                              <button type="button" class="btn btn-primary" id="show-previous-image"> &lt; </button>
                           </div>
                           <div class="col-md-1 show-next-image-cont">
                              <button type="button" id="show-next-image" class="btn btn-default"> &gt; </button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         
         <!-- Store Map Starts -->  
         <div id="" class="row post-cmn-main">
            <!-- map starts  -->
            <h3 class="store-hd">Take Me</h3>
            <div id="googleMap" style=""></div>
            <div class="row store-map-sec-main">
               <div class="col-sm-3 store-lbl">
                  <h6>Store</h6>
               </div>
               <div class="col-sm-9">
                  <div class="col-sm-8 store-address-txt">
                     <label class="control-label">SOUTH INDIA SHOPPING MALL, KPHB, Hyderabad</label>
                  </div>
                  <div class="col-sm-4">
                     <button type="button" class="btn btn-primary btn-block">Get Directions</button>
                  </div>
               </div>
            </div>
            <div>
               <div class="panel panel-default con-adv">
                  <div class="panel-body">
                     <div class="row store-map-sec-main">
                        <div class="col-sm-3 store-lbl">
                           <h6>Contact Advertiser</h6>
                        </div>
                        <div class="col-sm-9 map-info"><span class="vendor-lbl">Name :</span> <span class="vendor-txt">Mr. Aravind</span></div>
                     </div>
                     <div class="row">
                        <div class="col-sm-12">
                           <form class="form-advertiser" role="form">
                              <div class="form-group">
                                 <div class="cont-adv-fld-wrap">
                                    <div class="col-sm-4">
                                       <input type="text" class="form-control" id="your-name" placeholder="Your Name" required="1" value="">
                                    </div>
                                    <div class="col-sm-4">
                                       <input type="text" class="form-control" id="email" placeholder="Your E-mail" required="1" value="">
                                    </div>
                                    <div class="col-sm-4">
                                       <input type="text" class="form-control" id="phone-no" placeholder="Phone Number" required="1" value="">
                                    </div>
                                 </div>
                                 <div class="cont-adv-fld-wrap">
                                    <div class="col-sm-4">
                                       <input type="text" class="form-control required letterSpace" id="city" name="city" placeholder="City / Area" value="" maxlength="25" minlength="3">
                                    </div>
                                    <div class="col-sm-4">
                                       <textarea class="form-control" rows="3" id="comment"></textarea>
                                    </div>
                                    <div class="col-sm-4">
                                       <button type="button" class="btn btn-primary btn-block">Submit</button>
                                    </div>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
			 <div class="col-md-5 rating-feat-wrap store-ofc-wrap-main">
                           <div class="store-ofc-wrap">
                              <ul class="list-inline">
                                 <li>
                                    <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                                 </li>
                                 <li>
                                    <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                                 </li>
                                 <li>
                                    <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                                 </li>
                                 <li>
                                    <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                                 </li>
                                 <li>
                                    <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-dribbble"></i></a>
                                 </li>
                              </ul>
                           </div>
                        </div>
			
            <!-- map ends --> 
         </div>
         </div>
<?php include 'app/views/includes/footer.php' ?>