<?php include 'app/views/includes/head.php'; ?>
<title>Offerciti | Results</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Offerciti offline discounts"/>
<meta name="keywords" content="Offers, discounts"/>
<meta name="author" content="www.offerciti.com"/>


<script>
    $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>


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
                                            <a id="" href="merchant_profile" class="btn btn-theme btn-theme-block"><span
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
                                            <a id="" href="#" class="btn btn-theme-dark btn-theme-dark"><span
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
                <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
            </div>
            <!-- Support starts -->
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="panel-title">Post an advertisement</div>
                </div>
                <div class="panel-body">
                    <form id="signupform" class="form-horizontal" role="form">
                        <div id="signupalert" style="display:none" class="alert alert-danger">
                            <p>Error:</p>
                            <span></span>
                        </div>
                        <fieldset class="post-free-advertiser-biz-info" id="post-free-advertiser-biz-info">
                            <div class="post-advertise-info">

                                <div class="form-group">
                                    <label for="offer-title" for="pin-code" class="col-md-4 control-label">Offer
                                        Title</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" data-toggle="tooltip"
                                               data-placement="bottom"
                                               title="Enter your Offer Title  EX: Flat 30% on Summer SALE or Upto 60% on Designer Sarees"
                                               id="offer-title" placeholder="Offer Title">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="abt-offer" for="pin-code" class="col-md-4 control-label">*About Your
                                        Offer</label>
                                    <div class="col-md-6">
                                        <textarea class="form-control" rows="3" id="abt-offer" data-toggle="tooltip"
                                                  data-placement="bottom"
                                                  title="Ex: 30% offer on sarees, formal shirts, Jeans, kids frogs">Describe about your offer</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="offer-start-date" class="col-md-4 control-label">*Offer Start
                                        Date</label>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="*Offer Start Date" id="start-date"
                                               class="form-control date-pic">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="offer-end-date" class="col-md-4 control-label">*Offer End Date</label>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="*Offer End Date" id="end-date"
                                               class="form-control date-pic">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="state" for="pin-code" class="col-md-4 control-label">*Select Offers
                                        Category</label>
                                    <div class="col-md-6">
                                        <select class="customOptions">
                                            <option value="">Select with icons</option>
                                            <option value="babycare">Baby care & Toys</option>
                                            <option value="bicycles">Bicycles</option>
                                            <option value="books">Books</option>
                                            <option value="clothing">Clothing</option>
                                            <option value="fancy">Fancy & Fashion</option>
                                            <option value="footwear">Foot wear</option>
                                            <option value="furniture">Furniture</option>
                                            <option value="furnishing">Furnishing</option>
                                            <option value="homeappliances">Home Appliances</option>
                                            <option value="luggage">Luggage & Baggage</option>
                                            <option value="sunglasses">Sun Glasses</option>
                                            <option value="watches">Watches & Clocks</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="select-offers-sub-category">
                                    <div class="form-group col-xs-12 select-ofr-lbl">
                                        <label for="offer-title" class="control-label">*select Offers Sub
                                            Category</label>
                                    </div>
                                    <section class="select-offers-sub-category-wrap">
                                        <div class="accordion">
                                            <h2><a href="#">Men</a></h2>
                                            <div class="inner act-sect">
                                                <div class="section-inputs">
                                          <span class="input-blue checkbox">
                                          <input type="checkbox" id="checkbox1"/>
                                          <label for="checkbox1">Shirts<span class="ofr-perc-lbl">30%</span></label>
                                          </span>
                                          <span class="input-blue checkbox">
                                          <input type="checkbox" id="checkbox2"/>
                                          <label for="checkbox2">TShirts</label>
                                          </span>
                                          <span class="input-blue checkbox">
                                          <input type="checkbox" id="checkbox3"/>
                                          <label for="checkbox3">Jeans<span class="ofr-perc-lbl">30%</span></label>
                                          </span>
                                          <span class="input-blue checkbox">
                                          <input type="checkbox" id="checkbox4"/>
                                          <label for="checkbox4">Trousers</label>
                                          </span>
                                          <span class="input-blue checkbox">
                                          <input type="checkbox" id="checkbox5"/>
                                          <label for="checkbox5">Suites</label>
                                          </span>
                                          <span class="input-blue checkbox">
                                          <input type="checkbox" id="checkbox6"/>
                                          <label for="checkbox6">Formals</label>
                                          </span>
                                                </div>
                                            </div>
                                            <h2><a href="#">Women</a></h2>
                                            <div class="inner">
                                                <div class="section-inputs">
                                          <span class="input-blue checkbox">
                                          <input type="checkbox" id="checkbox1w"/>
                                          <label for="checkbox1w">Checkbox 1</label>
                                          </span>
                                          <span class="input-blue checkbox">
                                          <input type="checkbox" id="checkbox2"/>
                                          <label for="checkbox2w">Checkbox 2</label>
                                          </span>
                                          <span class="input-blue checkbox">
                                          <input type="checkbox" id="checkbox3w"/>
                                          <label for="checkbox3w">Checkbox 3</label>
                                          </span>
                                          <span class="input-blue checkbox">
                                          <input type="checkbox" id="checkbox4w"/>
                                          <label for="checkbox4w">Checkbox 1</label>
                                          </span>
                                          <span class="input-blue checkbox">
                                          <input type="checkbox" id="checkbox5w"/>
                                          <label for="checkbox5w">Checkbox 2</label>
                                          </span>
                                          <span class="input-blue checkbox">
                                          <input type="checkbox" id="checkbox6w"/>
                                          <label for="checkbox6w">Checkbox 3</label>
                                          </span>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <div class="select-offer">
                                    <div class="row">
                                        <div class="form-group col-xs-12 select-ofr-lbl">
                                            <label for="offer-title" for="pin-code" class="control-label">*select
                                                Offer</label>
                                        </div>
                                        <div class="row">

                                            <div class="col-xs-3">
											<span class="input-blue radio">
											<input type="radio" id="flat-rd" class="flat-rd" name="radio-group"/>
											<label for="flat-rd">Flat</label>
											</span>
                                                <div class="flat-metrics">
												<span class="flat-metrics-inr">
													<input type="text" class="form-control sel-ofr-tf"
                                                           data-toggle="tooltip" data-placement="bottom" title="10"
                                                           id="offer-title" placeholder="10">
												</span>
												<span class="flat-metrics-inr">
													<select id="sel1" class="selectpicker sel-ofr-pkr"
                                                            data-live-search="true" title="% Off">
                                                        <option>Rs. Off</option>
                                                        <option>% Off</option>
                                                    </select>
												</span>
                                                </div>
                                            </div>
                                            <div class="col-xs-3">
											<span class="input-blue radio">
											<input type="radio" id="upto-rd" class="upto-rd" name="radio-group"/>
											<label for="upto-rd">Upto</label>
											</span>
                                                <div class="upto-metrics">
												<span class="flat-metrics-inr">
													<input type="text" class="form-control sel-ofr-tf"
                                                           data-toggle="tooltip" data-placement="bottom" title="10"
                                                           id="offer-title" placeholder="10">
												</span>
												<span class="flat-metrics-inr">
													<select id="sel1" class="selectpicker sel-ofr-pkr"
                                                            data-live-search="true" title="% Off">
                                                        <option>Rs. Off</option>
                                                        <option>% Off</option>
                                                    </select>
												</span>
                                                </div>
                                            </div>
                                            <div class="col-xs-3">
											<span class="input-blue radio">
											<input type="radio" id="cashbk-rd" class="cashbk-rd" name="radio-group"/>
											<label for="cashbk-rd">Cashback</label>
											</span>
                                                <div class="cashbk-metrics">
												<span class="flat-metrics-inr">
													<input type="text" class="form-control sel-ofr-tf"
                                                           data-toggle="tooltip" data-placement="bottom" title="10"
                                                           id="offer-title" placeholder="10">
												</span>
												<span class="flat-metrics-inr">
													<select id="sel1" class="selectpicker sel-ofr-pkr"
                                                            data-live-search="true" title="% Off">
                                                        <option>Rs. Off</option>
                                                        <option>% Off</option>
                                                    </select>
												</span>
                                                </div>
                                            </div>

                                            <div class="col-xs-3">
											<span class="input-blue radio">
											<input type="radio" id="buyofr-rd" class="buyofr-rd" name="radio-group"/>
											<label for="buyofr-rd">Buy</label>
											</span>
                                                <div class="buyofr-metrics">
                                                    <div class="form-inline">
                                                        <select id="sel1" class="selectpicker" data-live-search="true"
                                                                title="Buy 1">
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                        </select>
                                                        <select id="buy" class="selectpicker" data-live-search="true"
                                                                title="Get 1">
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>

                                    </div>
                                </div>
                                <div class="form-inline gallery-images">
                                    <label for="branding-img" class="col-md-4 control-label">*Social Media image</label>
                                    <div class="col-md-7">
                                 <span>
                                    <div class="upload-img-preview">&nbsp;
                                    </div>
                                    <input type="file" id="branding-img" class="btn-sm btn btn-primary"
                                           data-toggle="tooltip" data-placement="bottom" title="" name="img"
                                           data-original-title="Upload Store or Service image EX: Banner image / Logo / Product picture / Business title image">
                                 </span>
                                    </div>
                                </div>
                                <div class="form-inline gallery-images">
                                    <label for="branding-img" class="col-md-4 control-label">*Gallery images</label>
                                    <div class="col-md-7">
                                 <span>
                                    <div class="upload-img-preview">&nbsp;
                                    </div>
                                    <input type="file" id="branding-img" class="btn-sm btn btn-primary"
                                           data-toggle="tooltip" data-placement="bottom" title="" name="img"
                                           data-original-title="Upload Store or Service image EX: Banner image / Logo / Product picture / Business title image">
                                 </span>
                                 <span>
                                    <div class="upload-img-preview">&nbsp;
                                    </div>
                                    <input type="file" id="branding-img" class="btn-sm btn btn-primary"
                                           data-toggle="tooltip" data-placement="bottom" title="" name="img"
                                           data-original-title="Upload Store or Service image EX: Banner image / Logo / Product picture / Business title image">
                                 </span>
                                 <span>
                                    <div class="upload-img-preview">&nbsp;
                                    </div>
                                    <input type="file" id="branding-img" class="btn-sm btn btn-primary"
                                           data-toggle="tooltip" data-placement="bottom" title="" name="img"
                                           data-original-title="Upload Store or Service image EX: Banner image / Logo / Product picture / Business title image">
                                 </span>
                                 <span>
                                    <div class="upload-img-preview">&nbsp;
                                    </div>
                                    <input type="file" id="branding-img" class="btn-sm btn btn-primary"
                                           data-toggle="tooltip" data-placement="bottom" title="" name="img"
                                           data-original-title="Upload Store or Service image EX: Banner image / Logo / Product picture / Business title image">
                                 </span>
                                 <span>
                                    <div class="upload-img-preview">&nbsp;
                                    </div>
                                    <input type="file" id="branding-img" class="btn-sm btn btn-primary"
                                           data-toggle="tooltip" data-placement="bottom" title="" name="img"
                                           data-original-title="Upload Store or Service image EX: Banner image / Logo / Product picture / Business title image">
                                 </span>
                                 <span>
                                    <div class="upload-img-preview">&nbsp;
                                    </div>
                                    <input type="file" id="branding-img" class="btn-sm btn btn-primary"
                                           data-toggle="tooltip" data-placement="bottom" title="" name="img"
                                           data-original-title="Upload Store or Service image EX: Banner image / Logo / Product picture / Business title image">
                                 </span>
                                 <span>
                                    <div class="upload-img-preview">&nbsp;
                                    </div>
                                    <input type="file" id="branding-img" class="btn-sm btn btn-primary"
                                           data-toggle="tooltip" data-placement="bottom" title="" name="img"
                                           data-original-title="Upload Store or Service image EX: Banner image / Logo / Product picture / Business title image">
                                 </span>
                                 <span>
                                    <div class="upload-img-preview">&nbsp;
                                    </div>
                                    <input type="file" id="branding-img" class="btn-sm btn btn-primary"
                                           data-toggle="tooltip" data-placement="bottom" title="" name="img"
                                           data-original-title="Upload Store or Service image EX: Banner image / Logo / Product picture / Business title image">
                                 </span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="city" class="col-md-4 control-label">Select store locations / stores
                                        where you want to advertise your post&nbsp;<span class="badge">5</span> </label>
                                    <div class="col-md-6">
                                        <select id="maxOption2" class="selectpicker  form-control" multiple
                                                data-live-search="true" data-max-options="50">
                                            <option>Chandana Brothers - AmeerPet</option>
                                            <option>Chandana Brothers - BHEL</option>
                                            <option>Chandana Brothers -Chandanagar</option>
                                            <option>Chandana Brothers -Miyapur</option>
                                            <option>Chandana Brothers -AmeerPet</option>
                                            <option>Chandana Brothers -BHEL</option>
                                            <option>Chandana Brothers -Chandanagar</option>
                                            <option>Chandana Brothers -Miyapur</option>
                                            <option>Chandana Brothers -AmeerPet</option>
                                            <option>Chandana Brothers -BHEL</option>
                                            <option>Chandana Brothers -Chandanagar</option>
                                            <option>Chandana Brothers -Miyapur</option>
                                            <option>Chandana Brothers -AmeerPet</option>
                                            <option>Chandana Brothers -BHEL</option>
                                            <option>Chandana Brothers -Chandanagar</option>
                                            <option>Chandana Brothers -Miyapur</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <!-- Button -->
                                    <div class="col-md-offset-4 col-md-8">

                                        <button id="ad-submit" type="submit" class="btn btn-theme submit_but_class"><i
                                                class="icon-hand-right"></i>Preview
                                        </button>
                                    </div>
                                </div>

                            </div>


                            <!-- ad post location ends -->
                </div>
                </fieldset>
                </form>
            </div>
            <!-- Support ends -->
        </div>
    </div>

    <?php include 'app/views/includes/footer.php' ?>

</div>
