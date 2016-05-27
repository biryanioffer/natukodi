<?php include('app/views/includes/head.php'); ?>
<title>Offerciti | Change Password</title>
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
            <?php include('app/views/includes/top-nav.php'); ?>

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
                                                    class="glyphicon glyphicon-briefcase"></span>Packages</a>
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
                                            <a id="" href="#" class="btn btn-theme-dark btn-theme-dark"><span
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
                    <div class="panel-title">Change Password</div>
                </div>
                <div class="panel-body">
                    <form id="" class="form-horizontal user-password-edit" role="form" method="POST" style="">
                        <div id="signupalert" style="display:none" class="alert alert-danger">
                            <p>Error:</p>
                            <span></span>
                        </div>
                        <div class="form-group">
                            <label for="first-name" class="col-md-4 control-label">*Current Password</label>
                            <div class="col-md-6">
                                <input type="password" class="form-control required password" id="current_password"
                                       name="current_password" value="" minlength="5" maxlength="15">
                                <span style="color:red;" id="current_password_div"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="first-name" class="col-md-4 control-label">*New Password</label>
                            <div class="col-md-6">
                                <input type="password" class="form-control required password" id="new_password"
                                       name="new_password" value="" minlength="5" maxlength="15">
                                <span style="color:red;" id="new_password_div"></span>
                                <span style="color:red;" id="new_password__com_div"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="last-name" class="col-md-4 control-label">*Retype New Password</label>
                            <div class="col-md-6">
                                <input type="password" class="form-control required password" id="c_new_password"
                                       name="c_new_password" value="" minlength="5" maxlength="15"
                                       equalto="#new_password">
                                <span style="color:red;" id="c_new_password_div"></span>
                            </div>
                        </div>
                        <div class="col-md-offset-4 col-md-8">
                            <button id="signup-verification-pop-btn" type="submit"
                                    class="btn btn-theme change_pass_btn"><i class="icon-hand-right"></i>Save
                            </button>
                            <button id="btn-cancel" type="button" class="btn btn-theme-dark btn-cancel">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Support ends -->
        </div>
    </div>
    <?php include('app/views/includes/footer.php'); ?>


</div>
