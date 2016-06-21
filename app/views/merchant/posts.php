<title>Offerciti | Store Manage Ads</title>
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
                                            <a id="" href="merchant_profile" class="btn btn-theme btn-theme-block"><span
                                                    class="glyphicon glyphicon-user"></span>Profile </a>
                                        </div>
                                        <div class="col-sm-2">
                                            <a id="" href="#" class="btn btn-theme-dark btn-theme-dark"><span
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
            <!-- storemanage ads starts -->
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="panel-title">Manage Ads</div>
                </div>
                <div class="panel-body">
                    <!-- manage ads filters stats -->
                    <div class="row">
                        <div class="col-sm-3">
                            <input type="text" placeholder="Ads From Date" id="start-date"
                                   class="form-control date-pic hasDatepicker">
                        </div>
                        <div class="col-sm-3">
                            <input type="text" placeholder="Ads To Date" id="end-date"
                                   class="form-control date-pic hasDatepicker">
                        </div>
                        <div class="col-sm-2" style="padding: 0px;">
                            <select class="select">
                                <option>Status</option>
                                <option>Active</option>
                                <option>Approved</option>
                                <option>Deleted</option>
                                <option>Expired</option>
                                <option>Pending</option>
                                <option>Rejected</option>
                            </select>
                        </div>
                        <div class="col-sm-4" style="padding-right: 0px;">
                            <div class="ad-search-cont">
                                <input type="text" class="form-control" id="search"
                                       placeholder="Search Offer Code / category / location">
                                <button class="btn btn-success btn-sm"><span class="glyphicon glyphicon-search"></span>
                                </button>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- manage ads filters ends -->
                    <div class="row my-package-inner">
                        <table class="table table-hover table-responsive myads-tble">
                            <thead>
                            <tr>
                                <th>SNo</th>
                                <th>Offer Code</th>
                                <th>Category</th>
                                <th class="loc-wd">Location</th>
                                <th>Validity</th>
                                <th>Status</th>
                                <th>Last Updated</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>OFR_201510_0022</td>
                                <td>Clothing</td>
                                <td>BHEL, Koti, Lingampally, BHEL, Koti, Lingampally, BHEL, Koti, Lingampally</td>
                                <td>
                                    <ul class="features">
                                        <li><span class="val-start-date">01-01-2016</span> to <span
                                                class="val-expire-date">01-07-2016</span></li>
                                    </ul>
                                </td>
                                <td>Pending</td>
                                <td>01-10-2015</td>
                                <td>
                                    <button class="btn btn-default btn-sm stats-btn" data-toggle="tooltip"
                                            data-placement="bottom" title="Statistics">
                                        <span class="glyphicon glyphicon-equalizer"></span>
                                    </button>
                                    <button class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="bottom"
                                            title="View">
                                        <span class="glyphicon glyphicon-eye-open"></span>
                                    </button>
                                    <button class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="bottom"
                                            title="Edit">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </button>
                                    <button class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="bottom"
                                            title="Duplicate">
                                        <span class="glyphicon glyphicon-duplicate"></span>
                                    </button>
                                    <button class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="bottom"
                                            title="Delete">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </button>
                                </td>
                            </tr>
                            <tr class="ad-stats-wrap-row" style="display: none;">
                                <td colspan="8">
                                    <!-- stats start -->
                                    <div class="row my-package-inner ad-stats-wrap">
                                        <table class="table table-hover table-responsive myads-tble ad-stats-tbl">
                                            <thead>
                                            <tr>
                                                <th>SMS</th>
                                                <th>Likes</th>
                                                <th>Rating</th>
                                                <th>Views</th>
                                                <th><img
                                                        src="<?php echo site_url('app/assets/images/social/Facebook.png'); ?>">
                                                </th>
                                                <th><img
                                                        src="<?php echo site_url('app/assets/images/social/Twitter.png'); ?>">
                                                </th>
                                                <th><img
                                                        src="<?php echo site_url('app/assets/images/social/Google+.png'); ?>">
                                                </th>
                                                <th><img
                                                        src="<?php echo site_url('app/assets/images/social/Email.png'); ?>">
                                                </th>
                                                <th><img
                                                        src="<?php echo site_url('app/assets/images/social/whatsapp.png'); ?>">
                                                </th>
                                                <th><img
                                                        src="<?php echo site_url('app/assets/images/social/sms.png'); ?>">
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>100</td>
                                                <td>10</td>
                                                <td>3.5/5</td>
                                                <td>100</td>
                                                <td>1</td>
                                                <td>10</td>
                                                <td>10</td>
                                                <td>15</td>
                                                <td>110</td>
                                                <td>1</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- stats ends -->
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>OFR_201510_0022</td>
                                <td>Jewellery</td>
                                <td>BHEL, Koti, Lingampally</td>
                                <td>
                                    <ul class="features">
                                        <li><span class="val-start-date">01-01-2016</span> to <span
                                                class="val-expire-date">01-07-2016</span></li>
                                    </ul>
                                </td>
                                <td>Active</td>
                                <td>01-10-2015</td>
                                <td>
                                    <button class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="bottom"
                                            title="Statistics">
                                        <span class="glyphicon glyphicon-equalizer"></span>
                                    </button>
                                    <button class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="bottom"
                                            title="View">
                                        <span class="glyphicon glyphicon-eye-open"></span>
                                    </button>
                                    <button class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="bottom"
                                            title="Edit">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </button>
                                    <button class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="bottom"
                                            title="Duplicate">
                                        <span class="glyphicon glyphicon-duplicate"></span>
                                    </button>
                                    <button class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="bottom"
                                            title="Delete">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>