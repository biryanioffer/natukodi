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
                            <div id="collapse1" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <a id="" href="#" class="btn btn-theme-dark btn-theme-dark"><span
                                                    class="glyphicon glyphicon-user"></span>My Profile </a>
                                        </div>
                                        <div class="col-sm-2">
                                            <a id="" href="#" class="btn btn-theme btn-theme-block"><span
                                                    class="glyphicon glyphicon-lock"></span>Change Password</a>
                                        </div>
                                        <div class="col-sm-2">
                                            <a id="" href="#" class="btn btn-theme btn-theme-block"><span
                                                    class="glyphicon glyphicon-bell"></span>My Wishlist</a>
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
                                                <li><a href="#tab1" data-toggle="tab">Personal Details</a></li>

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
                                                <label for="email" class="col-md-4 control-label">*Your Name</label>
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
                                        </div>
                                    </div>

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
