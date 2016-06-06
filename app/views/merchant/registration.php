<?php include 'app/views/includes/head.php'; ?>
<title>Offerciti | Store Profile</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Offerciti offline discounts"/>
<meta name="keywords" content="Offers, discounts"/>
<meta name="author" content="www.offerciti.com"/>
</head>
<body>
   <div class="container-fluid vendor-dshbrd">
      <!-- sms overlay starts -->
      <header>
         <!-- top nav section -->
         <section class="top-sec-nav">
            <?php include 'app/views/includes/top-nav.php'; ?>
         </section>
         <!-- top nav section ends -->
      </header>
      <div class="store-ac-main-wrap animated fadeIn" data-animate="fadeIn">
         <!-- waiting page starts -->
         <div id="store-ac-wrap-inner" style="margin-top:50px;" class="mainbox  col-md-10 col-md-offset-1">
            <div class="panel panel-info">
               <div class="panel-heading">
                  <div class="panel-title">My Account</div>
               </div>
               <div style="padding-top:30px" class="panel-body">
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
                                    <a id="" href="#" class="btn btn-theme-dark btn-theme-dark"><span
                                       class="glyphicon glyphicon-user"></span>Profile </a>
                                 </div>
                                 <div class="col-sm-2">
                                    <a id="" href="posts" class="btn btn-theme btn-theme-block"><span
                                       class="glyphicon glyphicon-tag"></span>Manage Ads</a>
                                 </div>
                                 <div class="col-sm-2">
                                    <a id="" href="wallet" class="btn btn-theme btn-theme-block"><span
                                       class="glyphicon glyphicon-briefcase"></span>Wallet</a>
                                 </div>
                                 <div class="col-sm-2">
                                    <a id="" href="branches" class="btn btn-theme btn-theme-block"><span
                                       class="glyphicon glyphicon-home"></span>Branches</a>
                                 </div>
                                 <div class="col-sm-2">
                                    <a id="" href="offer_post" class="btn btn-theme btn-theme-block"><span
                                       class="glyphicon glyphicon-bullhorn"></span>Post Ad </a>
                                 </div>
                                 <div class="col-sm-2">
                                    <a id="" href="merchant_change_password"
                                       class="btn btn-theme btn-theme-block"><span
                                       class="glyphicon glyphicon-lock"></span>Change Password</a>
                                 </div>
                                 <div class="col-sm-2">
                                    <a id="" href="notifications" class="btn btn-theme btn-theme-block"><span
                                       class="glyphicon glyphicon-bell"></span>Notifications</a>
                                 </div>
                                 <div class="col-sm-2">
                                    <a id="" href="support" class="btn btn-theme btn-theme-block"><span
                                       class="glyphicon glyphicon-envelope"></span>Support</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- store profile starts -->
            <div class="panel panel-info">
               <div class="panel-heading">
                  <div class="panel-title">My Profile</div>
               </div>
               <div class="panel-body">
                  <form id="signupform" class="form-horizontal" role="form">
                     <div id="signupalert" style="display:none" class="alert alert-danger">
                        <p>Error:</p>
                        <span></span>
                     </div>
                     <section id="wizard">
                        <div id="rootwizard" class="ad-sign-form-container">
                           <div class="navbar">
                              <div class="navbar-inner">
                                 <div class="ad-sign-tabs-wrap">
                                    <ul>
                                       <li><a href="#tab1" data-toggle="tab">Basic Details</a></li>
                                       <li><a href="#tab2" data-toggle="tab">Business Details</a></li>
                                       <li><a href="#tab3" data-toggle="tab">Social Connect</a></li>
                                       <li><a href="#tab4" data-toggle="tab">Map</a></li>
                                       <li><a href="#tab5" data-toggle="tab">KYC</a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-content">
                              <div class="tab-pane" id="tab1">
                                 <div class="advertiser-signup-form">
                                    <div class="form-group">
                                       <label for="advetiserid" class="col-md-4 control-label">*Advertiser
                                       ID</label>
                                       <div class="col-md-6">
                                          <input type="text" class="form-control" id="advetiserid"
                                             placeholder="Advrt-12021522" disabled="disabled">
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label for="email" class="col-md-4 control-label">*Contact Person</label>
                                       <div class="col-md-3">
                                          <input type="text" class="form-control" id="email"
                                             placeholder="Subbu" disabled="disabled">
                                       </div>
                                       <div class="col-md-3">
                                          <input type="text" class="form-control" id="email" placeholder="ped"
                                             disabled="disabled">
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label for="create-user-name" class="col-md-4 control-label">*User
                                       Name</label>
                                       <div class="col-md-6">
                                          <input type="text" class="form-control" id="create-user-name"
                                             placeholder="subbuped123" disabled="disabled">
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label for="email" class="col-md-4 control-label">*Email Id</label>
                                       <div class="col-md-6">
                                          <input type="text" class="form-control" id="email"
                                             placeholder="Email Id" disabled="disabled">
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label for="mobileno" class="col-md-4 control-label">*Mobile No</label>
                                       <div class="col-md-6">
                                          <input type="text" class="form-control" id="mobileno"
                                             placeholder="Mobile No" disabled="disabled">
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label for="landlineNo" class="col-md-4 control-label">*Landline No</label>
                                       <div class="col-md-6">
                                          <input type="text" class="form-control" id="landlineNo"
                                             placeholder="Landline No" disabled="disabled">
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="tab-pane" id="tab2">
                                 <div class="form-group">
                                    <label for="storeName" for="pin-code" class="col-md-4 control-label">*Store
                                    Name</label>
                                    <div class="col-md-6">
                                       <input type="text" class="form-control" id="storeName"
                                          placeholder="Chandana Brothers" disabled="disabled">
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label for="branding-img" class="col-md-4 control-label">Store logo /
                                    image</label>
                                    <div class="col-md-6">
                                       <div class="upload-img-preview">&nbsp;
                                       </div>
                                       <input type="file" id="branding-img" class="btn-sm btn btn-primary"
                                          data-toggle="tooltip" data-placement="bottom" title="" name="img"
                                          data-original-title="Upload Store or Service image EX: Banner image / Logo / Product picture / Business title image">
                                    </div>
                                 </div>
                                 <div class="select-Biz-category">
                                    <div class="form-group col-xs-12 select-ofr-lbl">
                                       <label for="offer-title" class="control-label">*select Business
                                       Category</label>
                                    </div>
                                    <div class="select-Biz-category-wrap">
                                       <div class="form-inline">
                                          <div class="checkbox">
                                             <span class="input-blue checkbox">
                                             <input type="checkbox" id="checkbox5">
                                             <label for="checkbox5">Baby Care</label>
                                             </span>
                                          </div>
                                          <div class="checkbox">
                                             <span class="input-blue checkbox">
                                             <input type="checkbox" id="checkbox5">
                                             <label for="checkbox5">footwear</label>
                                             </span>
                                          </div>
                                          <div class="checkbox">
                                             <span class="input-blue checkbox">
                                             <input type="checkbox" id="checkbox5">
                                             <label for="checkbox5">Clothing</label>
                                             </span>
                                          </div>
                                          <div class="checkbox">
                                             <span class="input-blue checkbox">
                                             <input type="checkbox" id="checkbox5">
                                             <label for="checkbox5">Checkbox 2</label>
                                             </span>
                                          </div>
                                          <div class="checkbox">
                                             <span class="input-blue checkbox">
                                             <input type="checkbox" id="checkbox5">
                                             <label for="checkbox5">Books 2</label>
                                             </span>
                                          </div>
                                          <div class="checkbox">
                                             <span class="input-blue checkbox">
                                             <input type="checkbox" id="checkbox5">
                                             <label for="checkbox5">Books 2</label>
                                             </span>
                                          </div>
                                          <div class="checkbox">
                                             <span class="input-blue checkbox">
                                             <input type="checkbox" id="checkbox5">
                                             <label for="checkbox5">Books 2</label>
                                             </span>
                                          </div>
                                          <div class="checkbox">
                                             <span class="input-blue checkbox">
                                             <input type="checkbox" id="checkbox5">
                                             <label for="checkbox5">Books 2</label>
                                             </span>
                                          </div>
                                          <div class="checkbox">
                                             <span class="input-blue checkbox">
                                             <input type="checkbox" id="checkbox5">
                                             <label for="checkbox5">Books 2</label>
                                             </span>
                                          </div>
                                          <div class="checkbox">
                                             <span class="input-blue checkbox">
                                             <input type="checkbox" id="checkbox5">
                                             <label for="checkbox5">Books 2</label>
                                             </span>
                                          </div>
                                          <div class="checkbox">
                                             <span class="input-blue checkbox">
                                             <input type="checkbox" id="checkbox5">
                                             <label for="checkbox5">Books 2</label>
                                             </span>
                                          </div>
                                          <div class="checkbox">
                                             <span class="input-blue checkbox">
                                             <input type="checkbox" id="checkbox5">
                                             <label for="checkbox5">Books 2</label>
                                             </span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label for="abt-store" for="pin-code" class="col-md-4 control-label">About
                                    Your Store</label>
                                    <div class="col-md-6">
                                       <textarea class="form-control" rows="3" id="abt-store"
                                          data-toggle="tooltip" data-placement="bottom"
                                          title="South India Shopping Mall Established by veterans in the trade of textiles, garments having experience of about 30 years in the field, Mr.P.Venkateswarlu, Mr.S.Rajamouli, Mr.P.Satyanarayana , and Mr.T.Prasada Rao">Describe about your Business</textarea>
                                    </div>
                                 </div>
                              </div>
                              <div class="tab-pane" id="tab3">
                                 <div class="form-group fld-icon">
                                    <label for="website" class="col-md-4 control-label">Website URL<span
                                       class="common-icons"><i
                                       class="fa fa-fw fa fa-globe"></i></span></label>
                                    <div class="col-md-6">
                                       <input type="text" class="form-control" data-toggle="tooltip"
                                          data-placement="bottom" title="" id="website"
                                          placeholder="Website URL"
                                          data-original-title="Do you have website enter the URL Here EX: http://wwww.example.com">
                                    </div>
                                 </div>
                                 <div class="form-group fld-icon">
                                    <label for="fb" class="col-md-4 control-label">Facebook URL<span
                                       class="common-icons"><i class="fa fa-fw fa fa-facebook-square"></i></span></label>
                                    <div class="col-md-6">
                                       <input type="text" class="form-control" data-toggle="tooltip"
                                          data-placement="bottom" title="" id="fb"
                                          placeholder="Facebook URL"
                                          data-original-title="Do you have website enter the URL Here EX: http://wwww.example.com">
                                    </div>
                                 </div>
                                 <div class="form-group fld-icon">
                                    <label for="twitter" class="col-md-4 control-label">Twitter URL<span
                                       class="common-icons"><i
                                       class="fa fa-fw fa fa-twitter-square"></i></span></label>
                                    <div class="col-md-6">
                                       <input type="text" class="form-control" data-toggle="tooltip"
                                          data-placement="bottom" title="" id="twitter"
                                          placeholder="Twitter URL"
                                          data-original-title="Do you have website enter the URL Here EX: http://wwww.example.com">
                                    </div>
                                 </div>
                                 <div class="form-group fld-icon">
                                    <label for="gp" class="col-md-4 control-label">Google Plus URL<span
                                       class="common-icons"><i
                                       class="fa fa-fw fa fa-google-plus-square"></i></span></label>
                                    <div class="col-md-6">
                                       <input type="text" class="form-control" data-toggle="tooltip"
                                          data-placement="bottom" title="" id="gp"
                                          placeholder="Google Plus URL"
                                          data-original-title="Do you have website enter the URL Here EX: http://wwww.example.com">
                                    </div>
                                 </div>
                              </div>
                              <div class="tab-pane" id="tab4">
                                 <div class="form-group fld-icon">
                                    <label for="area" class="col-md-4 control-label">Area</label>
                                    <div class="col-md-6">
                                       <input type="text" class="form-control" id="area" placeholder="State"
                                          disabled="disabled">
                                    </div>
                                 </div>
                                 <div class="form-group fld-icon">
                                    <label for="City" class="col-md-4 control-label">City</label>
                                    <div class="col-md-6">
                                       <input type="text" class="form-control" id="City" placeholder="City"
                                          disabled="disabled">
                                    </div>
                                 </div>
                                 <div class="form-group fld-icon">
                                    <label for="State" class="col-md-4 control-label">State</label>
                                    <div class="col-md-6">
                                       <input type="text" class="form-control" id="State" placeholder="State"
                                          disabled="disabled">
                                    </div>
                                 </div>
                                 <div class="row" style="border:1px solid gray; height:500px">
                                    Google Map Comes Here and samples styles added here. When we develope need to keep google map.
                                 </div>
                              </div>
                              <div class="tab-pane" id="tab5">
                                 <div class="row store-reg-docs">
                                    <div class="store-reg-pan-cont well">
                                       <ul class="col-sm-12">
                                          <li>
                                             <h3>PAN Details</h3>
                                          </li>
                                          <li>PAN should be in the name of business (except in case of sole
                                             propreitorship)
                                          </li>
                                          <li>PAN image should be attested (signed and stamped) by authorized
                                             signatory of business
                                          </li>
                                       </ul>
                                       <div class="col-sm-6">
                                          <div class="form-group">
                                             <label for="pannumber-fld" class="col-md-4 control-label">*PAN
                                             Number</label>
                                             <div class="col-md-6">
                                                <input type="text" class="form-control" id="pannumber-fld"
                                                   placeholder="PAN Number" data-toggle="tooltip"
                                                   data-placement="bottom"
                                                   data-original-title="Please enter PAN Number">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-sm-6">
                                          <div class="form-group">
                                             <label for="branding-img" class="col-md-4 control-label">*Upload
                                             PAN Image</label>
                                             <div class="col-md-6">
                                                <div class="upload-img-preview">&nbsp;
                                                </div>
                                                <input type="file" id="branding-img"
                                                   class="btn-sm btn btn-primary" data-toggle="tooltip"
                                                   data-placement="bottom" title="" name="img"
                                                   data-original-title="Upload PAN image">
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="store-reg-bill-cont well">
                                       <ul class="col-sm-12">
                                          <li>
                                             <h3>Adress Proof</h3>
                                          </li>
                                          <li>Please upload address proof of registered business address.</li>
                                          <li>Address Proof Image should be attested (signed and stamped) by
                                             authorized signatory of business
                                          </li>
                                       </ul>
                                       <div class="col-sm-6">
                                          <div class="form-group">
                                             <label for="pannumber-fld" class="col-md-4 control-label">*Adress
                                             Proof</label>
                                             <div class="col-md-6">
                                                <select class="select">
                                                   <option value="">--Select--</option>
                                                   <option>Electricity Bill</option>
                                                   <option>Bank Statement</option>
                                                   <option>Rent Agreement</option>
                                                   <option>Certificate of Incorporation</option>
                                                   <option>Partnership Deed</option>
                                                   <option>Telephone Bill</option>
                                                </select>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-sm-6">
                                          <div class="form-group">
                                             <label for="branding-img" class="col-md-4 control-label">*Upload
                                             address proof</label>
                                             <div class="col-md-6">
                                                <div class="upload-img-preview">&nbsp;
                                                </div>
                                                <input type="file" id="branding-img"
                                                   class="btn-sm btn btn-primary" data-toggle="tooltip"
                                                   data-placement="bottom" title="" name="img"
                                                   data-original-title="Upload address proof Image">
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-offset-5">
                                    <button type="submit" class="btn btn btn-theme" data-toggle="modal"
                                       data-target="#myModal">Submit
                                    </button>
                                 </div>
                              </div>
                           </div>
                           <ul class="pager wizard">
                              <li class="previous first" style="display:none;"><a href="#">First</a></li>
                              <li class="previous"><a href="#">Previous</a></li>
                              <li class="next last" style="display:none;"><a href="#">Last</a></li>
                              <li class="next"><a href="#">Next</a></li>
                           </ul>
                        </div>
               </div>
            </div>
            </section>
            </form>
         </div>
      </div>
      <!-- store profile ends -->
   </div>
   <?php include 'app/views/includes/footer.php' ?>
   <script src="<?php echo site_url('app/assets/bootstrap/js/jquery.bootstrap.wizard.js'); ?>"></script>
   <script src="<?php echo site_url('app/assets/bootstrap/js/prettify.js'); ?>"></script>
   <script>
      $(document).ready(function () {
          $('#rootwizard').bootstrapWizard({
              onTabClick: function (tab, navigation, index) {
                  alert('on tab click disabled');
                  return false;
              }
          });
      });
   </script>
   </div>
