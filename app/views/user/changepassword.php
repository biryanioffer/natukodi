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
                                    Subbu Pedagadi
                                </h6>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <a id="" href="profile" class="btn btn-theme btn-theme-block"><span
                                                    class="glyphicon glyphicon-user"></span>Profile </a>
                                        </div>

                                        <div class="col-sm-2">
                                            <a id="" href="user_change_password"
                                               class="btn btn-theme-dark btn-theme-dark"><span
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
                        <div class="panel-title">Change Password</div>
                    </div>
                    <div class="panel-body">
                        <form id="" class="form-horizontal user-password-edit" role="form" method="POST" style="">
                            <div id="signupalert" style="display:none" class="alert alert-danger">
                                <p>Error:</p>
                                <span></span>
                            </div>
                            <div class="form-group">
                                <label for="current_password" class="col-md-4 control-label">*Current Password</label>
                                <div class="col-md-6">
                                    <input type="password" class="form-control required password" id="current_password"
                                           name="current_password" value="" minlength="5" maxlength="15">

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="new_password" class="col-md-4 control-label">*New Password</label>
                                <div class="col-md-6">
                                    <input type="password" class="form-control required password" id="new_password"
                                           name="new_password" value="" minlength="5" maxlength="15">

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="c_new_password" class="col-md-4 control-label">*Retype New Password</label>
                                <div class="col-md-6">
                                    <input type="password" class="form-control required password" id="c_new_password"
                                           name="c_new_password" value="" minlength="5" maxlength="15"
                                           equalto="#new_password">

                                </div>
                            </div>
                            <div class="col-md-offset-4 col-md-8">
                                <button id="signup-verification-pop-btn" type="submit"
                                        class="btn btn-theme change_pass_btn"><i class="icon-hand-right"></i>Save
                                </button>
                                <button id="btn-cancel" type="button" class="btn btn-theme-dark btn-cancel">Cancel
                                </button>
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
