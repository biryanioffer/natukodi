<?php include 'app/views/includes/head.php'; ?>
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
<script src="https://maps.googleapis.com/maps/api/js?sensor=false&libraries=places"></script>
			<script type="text/javascript">
function initialize() {
    var input = document.getElementById('searchTextField');
    var options = {componentRestrictions: {country: 'in'}};
                 
    new google.maps.places.Autocomplete(input, options);
}
             
google.maps.event.addDomListener(window, 'load', initialize);
</script>
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
                                   <?php echo $result[0]->first_name ?> <?php echo $result[0]->last_name ?>
                                </h6>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <a id="" href="profile" class="btn btn-theme-dark btn-theme-dark"><span
                                                    class="glyphicon glyphicon-user"></span>Profile </a>
                                        </div>

                                        <div class="col-sm-2">
                                            <a id="" href="user_change_password"
                                               class="btn btn-theme btn-theme-block"><span
                                                    class="glyphicon glyphicon-lock"></span>Change Password</a>
                                        </div>
                                        <div class="col-sm-2">
                                            <a id="" href="favourites" class="btn btn-theme btn-theme-block"><span
                                                    class="glyphicon glyphicon-heart"></span>Favourites </a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
            </div>
            <!-- user change password starts -->
            <div class="mainbox">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <div class="panel-title">Profile</div>
                    </div>
                    <div class="panel-body">
                        <form id="signupform" class="form-horizontal" role="form" action="<?php echo base_url() ?>index.php/console/profile" method="post">
                            <div id="profilealert" style="display:none" class="alert alert-danger">
                                <p>Error:</p>
                                <span></span>
                            </div>
                            <div class="form-group">
                                <label for="first-name" class="col-md-4 control-label">*First Name </label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="first-name" disabled
                                           placeholder="<?php echo $result[0]->first_name ?>" value="<?php echo $result[0]->first_name ?>" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="last-name" class="col-md-4 control-label">*Last Name</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="last-name" disabled
                                           placeholder="Pedagadi" value="<?php echo $result[0]->last_name ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="create-user-name" class="col-md-4 control-label">*Email</label>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" id="create-user-name" disabled
                                           placeholder="subbu.ped@gmail.com" value="<?php echo $result[0]->email ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="phone-number" class="col-md-4 control-label">*Phone Number</label>
                                <div class="col-md-6">
                                    <input type="text" name="phone" class="form-control" id="phone-number" placeholder="9963798988" value="<?php echo $result[0]->contact_number ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">*Gender</label>
                                <div class="col-md-2">
							<span class="input-blue radio">
							   <input type="radio" id="Male" <?php if($result[0]->gender=='M') { ?>checked <?php } ?> value="M"  name="gender">
							   <label for="Male">Male</label>
							</span>
                                </div>
                                <div class="col-md-3">
                          <span class="input-blue radio">
							   <input type="radio" id="Female" <?php if($result[0]->gender=='F') { ?>checked <?php } ?> value="F"  name="gender">
							   <label for="Female">Female</label>
							</span>

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="dob" class="col-md-4 control-label">*Date of Birth</label>
                                <div class="col-md-4">
                                    <input type="text" name="dob" class="form-control date-pic" id="dob" value="<?php echo $result[0]->dob; ?>"   placeholder="02/02/1981">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="pin-code" class="col-md-4 control-label">*Location / Address</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="searchTextField" 									value="<?php echo $result[0]->area." ,".$result[0]->city.",".$result[0]->state; ?>"
                                           placeholder="Ex: JNTU, KPHB, Hyderabad, Telangana" name="landmark">
                                </div>
                            </div>
                            <div class="form-group">
                                <!-- Button -->
                                <div class="col-md-offset-4 col-md-8">
                                    <!-- <a href="thank_you" id="btn-signup" type="submit" class="btn btn-info"><i
                                            class="icon-hand-right"></i>Update</a> -->
											 <button id="forgot-credentials-submit" type="submit" class="btn btn-theme-dark">Update
                                    
                                </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- user change password ends -->
        </div>
    </div>
    <?php include 'app/views/includes/footer.php' ?>


</div>
