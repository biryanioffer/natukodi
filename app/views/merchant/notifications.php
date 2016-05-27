<?php include 'app/views/includes/head.php'; ?>
<title>Offerciti | Store Notifications</title>
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
                                            <a id="" href="offer_post" class="btn btn-theme btn-theme-block"><span
                                                    class="glyphicon glyphicon-bullhorn"></span>Post Ad </a>
                                        </div>
                                        <div class="col-sm-2">
                                            <a id="" href="merchant_change_password"
                                               class="btn btn-theme btn-theme-block"><span
                                                    class="glyphicon glyphicon-lock"></span>Change Password</a>
                                        </div>
                                        <div class="col-sm-2">
                                            <a id="" href="#" class="btn btn-theme-dark btn-theme-dark"><span
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
            <!-- notifications starts -->
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="panel-title">Notifications</div>
                </div>
                <div class="panel-body">
                    <div class="row my-package-inner">
                        <table class="table table-hover table-responsive">
                            <thead>
                            <tr>
                                <th>SNo</th>
                                <th>Sender</th>
                                <th>Subject</th>
                                <th>Description</th>
                                <th>Date</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Offerciti.com</td>
                                <td>Post Free Ads expires</td>
                                <td width="60%">Your Post Free Ads Expries on 02-01-2016. Your Post Free Ads Expries on
                                    02-01-2016. Your Post Free Ads Expries on 02-01-2016. Your Post Free Ads Expries on
                                    02-01-2016
                                </td>
                                <td>20-01-2016</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Offerciti.com</td>
                                <td>Post Free Ads expires</td>
                                <td>Your Post Free Ads Expries on 02-01-2016</td>
                                <td>20-01-2016</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Offerciti.com</td>
                                <td>Post Free Ads expires</td>
                                <td>Your Post Free Ads Expries on 02-01-2016</td>
                                <td>20-01-2016</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- notification ends -->
        </div>
    </div>
    <?php include 'app/views/includes/footer.php' ?>


</div>
