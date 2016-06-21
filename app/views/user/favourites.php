<title>Offerciti | Favourites</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Offerciti offline discounts"/>
<meta name="keywords" content="Offers, discounts"/>
<meta name="author" content="www.offerciti.com"/>
<script>
    $(document).ready(function () {
        $("[rel='tooltip']").tooltip();
        $('.thumbnail').hover(
            function () {
                $(this).find('.caption').slideDown(250); //.fadeIn(250)
            },
            function () {
                $(this).find('.caption').slideUp(250); //.fadeOut(205)
            }
        );
    });

    $(function () {
        $("#tabs").tabs();
    });

</script>
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
        <div id="store-ac-wrap-inner" class="mainbox  col-md-10 col-md-offset-1 user-fav-main">
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
                                               class="btn btn-theme btn-theme-block"><span
                                                    class="glyphicon glyphicon-lock"></span>Change Password</a>
                                        </div>
                                        <div class="col-sm-2">
                                            <a id="" href="favourites" class="btn btn-theme-dark btn-theme-dark"><span
                                                    class="glyphicon glyphicon-heart"></span>Favourites</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
            </div>
            <!-- user Favourite offers starts -->
            <div class="mainbox">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <div class="panel-title">Favourites</div>
                    </div>
                    <div class="panel-body">
                        <div id="tabs" class="user-fav-cont">
                            <ul>
                                <li class="active"><a href="#user-Offers">Offers&nbsp;<span class="badge">2</span></a>
                                </li>
                                <li><a href="#user-Stores">Stores&nbsp;<span class="badge">4</span></a></li>
                            </ul>
                            <div id="user-Offers" class="user-offers">
                                <div class="res-wrap rec-partner">
                                    <div class="row">
                                        <!-- vendor section  starts -->
                                        <div class="col-md-2 vendor-card">
                                            <div class="thumbnail">
                                                <div class="caption">
                                                    <h4>FLAT <span>55%</span></h4>
                                                    <p>SOUTH INDIA SHOPPING MALL</p>
                                                </div>
                                                <img
                                                    src="<?php echo site_url('app/assets/images/vendor-assets/chandana.jpg'); ?>"
                                                    alt="Chandana Brothers" title="Chandana Brothers">
                                            </div>
                                        </div>
                                        <div class="col-md-10 vendor-info-wrap">
                                            <ul class="list-inline">
                                                <li>
                                                    <h5 class="vendor-name blue">Chandana Brothers</h5>
                                                </li>
                                                <li>
                                                    <div class="vendor-lbl"><span class="btn-social btn-outline"><i
                                                                class="fa fa-fw fa-tags"></i></span></div>
                                                    <div class="vendor-txt">Flat
                                                        <span>55%</span> discount on all products
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="vendor-lbl"><span class="btn-social btn-outline"><i
                                                                class="fa fa-fw fa-calendar"></i></span></div>
                                                    <div class="vendor-lbl">End Date :</div>
                                                    <div class="vendor-txt">Aug 15</div>
                                                </li>
                                                <li>
                                                    <div class="vendor-lbl"><span class="btn-social btn-outline"><i
                                                                class="fa fa-fw fa-map-marker"></i></span></div>
                                                    <div class="vendor-txt store-adrs">Plot No:17-20 Sy no: 166/p,Near
                                                        bus stop, Kukatpalli Village, Hyderabad
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="vendor-lbl"><span class="btn-social btn-outline"><i
                                                                class="fa fa-fw fa-phone"></i></span></div>
                                                    <div class="vendor-txt">040 23054025
                                                        <i class="location-lbl fa fa-fw fa-thumb-tack"></i><b
                                                            class="location-lbl">Ameerpet</b>
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
                                                        <a href="#" class="starRating" data-toggle="tooltip"
                                                           data-placement="bottom" title=""
                                                           data-original-title="10 persons">
                                                            <input id="rating5" type="radio" name="rating" value="5">
                                                            <label for="rating5">5</label>
                                                            <input id="rating4" type="radio" name="rating" value="4">
                                                            <label for="rating4">4</label>
                                                            <input id="rating3" type="radio" name="rating" value="3"
                                                                   checked>
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
                                                    <div class="vendor-lbl share-btn"><span
                                                            class="btn-social btn-outline" data-toggle="tooltip"
                                                            data-placement="bottom" title="Share"><i
                                                                class="fa fa-fw fa-share-alt"></i></span></div>
                                                </li>
                                                <li>
                                                    <div class="vendor-lbl"><span class="btn-social btn-outline"
                                                                                  data-toggle="tooltip"
                                                                                  data-placement="bottom"
                                                                                  title="Shortlist"><i
                                                                class="fa fa-fw fa-list"></i></span></div>
                                                </li>
                                                <li>
                                                    <div class="vendor-lbl"><span class="btn-social btn-outline"
                                                                                  data-toggle="tooltip"
                                                                                  data-placement="bottom"
                                                                                  title="Favourite"><i
                                                                class="fa fa-fw fa-heart"></i></span></div>
                                                </li>
                                                <li>
                                                    <div class="vendor-lbl"><span class="btn-social btn-outline"
                                                                                  data-toggle="tooltip"
                                                                                  data-placement="bottom"
                                                                                  title="Like"><i
                                                                class="fa fa-fw fa-thumbs-up"></i></span><b
                                                            class="like-info">555</b></div>
                                                </li>
                                                <li>
                                                    <div class="vendor-lbl"><a href="more_details"
                                                                               class="btn btn-primary btn-xs"
                                                                               data-toggle="tooltip"
                                                                               data-placement="bottom"
                                                                               title="More Information">More</a></div>
                                                </li>
                                            </ul>
                                            <ul class="share-buttons animated bounceInDown" data-animate="bounceInDown">
                                                <li><a href="https://www.facebook.com/sharer/sharer.php?u=&t="
                                                       title="Share on Facebook" target="_blank"><img
                                                            src="<?php echo site_url('app/assets/images/social/Facebook.png'); ?>"></a>
                                                </li>
                                                <li><a href="https://twitter.com/intent/tweet?source=&text=:%20"
                                                       target="_blank" title="Tweet"><img
                                                            src="<?php echo site_url('app/assets/images/social/Twitter.png'); ?>"></a>
                                                </li>
                                                <li><a href="https://plus.google.com/share?url=" target="_blank"
                                                       title="Share on Google+"><img
                                                            src="<?php echo site_url('app/assets/images/social/Google+.png'); ?>"></a>
                                                </li>
                                                <li><a href="mailto:?subject=&body=:%20" target="_blank"
                                                       title="Email"><img
                                                            src="<?php echo site_url('app/assets/images/social/Email.png'); ?>"></a>
                                                </li>
                                                <li><a href="whatsapp://send?text=The text to share!"
                                                       data-action="share/whatsapp/share"><img
                                                            src="<?php echo site_url('app/assets/images/social/whatsapp.png'); ?>"></a>
                                                </li>
                                                <li><a href="#overlay" id="open-overlay"><img
                                                            src="<?php echo site_url('app/assets/images/social/sms.png'); ?>"></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="res-wrap rec-partner">
                                    <div class="row">
                                        <!-- vendor section  starts -->
                                        <div class="col-md-2 vendor-card">
                                            <div class="thumbnail">
                                                <div class="caption">
                                                    <h4>FLAT <span>55%</span></h4>
                                                    <p>SOUTH INDIA SHOPPING MALL</p>
                                                </div>
                                                <img
                                                    src="<?php echo site_url('app/assets/images/vendor-assets/chandana.jpg'); ?>"
                                                    alt="Chandana Brothers" title="Chandana Brothers">
                                            </div>
                                        </div>
                                        <div class="col-md-10 vendor-info-wrap">
                                            <ul class="list-inline">
                                                <li>
                                                    <h5 class="vendor-name blue">Chandana Brothers</h5>
                                                </li>
                                                <li>
                                                    <div class="vendor-lbl"><span class="btn-social btn-outline"><i
                                                                class="fa fa-fw fa-tags"></i></span></div>
                                                    <div class="vendor-txt">Flat
                                                        <span>55%</span> discount on all products
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="vendor-lbl"><span class="btn-social btn-outline"><i
                                                                class="fa fa-fw fa-calendar"></i></span></div>
                                                    <div class="vendor-lbl">End Date :</div>
                                                    <div class="vendor-txt">Aug 15</div>
                                                </li>
                                                <li>
                                                    <div class="vendor-lbl"><span class="btn-social btn-outline"><i
                                                                class="fa fa-fw fa-map-marker"></i></span></div>
                                                    <div class="vendor-txt store-adrs">Plot No:17-20 Sy no: 166/p,Near
                                                        bus stop, Kukatpalli Village, Hyderabad
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="vendor-lbl"><span class="btn-social btn-outline"><i
                                                                class="fa fa-fw fa-phone"></i></span></div>
                                                    <div class="vendor-txt">040 23054025
                                                        <i class="location-lbl fa fa-fw fa-thumb-tack"></i><b
                                                            class="location-lbl">Ameerpet</b>
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
                                                        <a href="#" class="starRating" data-toggle="tooltip"
                                                           data-placement="bottom" title=""
                                                           data-original-title="10 persons">
                                                            <input id="rating5" type="radio" name="rating" value="5">
                                                            <label for="rating5">5</label>
                                                            <input id="rating4" type="radio" name="rating" value="4">
                                                            <label for="rating4">4</label>
                                                            <input id="rating3" type="radio" name="rating" value="3"
                                                                   checked>
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
                                                    <div class="vendor-lbl share-btn"><span
                                                            class="btn-social btn-outline" data-toggle="tooltip"
                                                            data-placement="bottom" title="Share"><i
                                                                class="fa fa-fw fa-share-alt"></i></span></div>
                                                </li>
                                                <li>
                                                    <div class="vendor-lbl"><span class="btn-social btn-outline"
                                                                                  data-toggle="tooltip"
                                                                                  data-placement="bottom"
                                                                                  title="Shortlist"><i
                                                                class="fa fa-fw fa-list"></i></span></div>
                                                </li>
                                                <li>
                                                    <div class="vendor-lbl"><span class="btn-social btn-outline"
                                                                                  data-toggle="tooltip"
                                                                                  data-placement="bottom"
                                                                                  title="Favourite"><i
                                                                class="fa fa-fw fa-heart"></i></span></div>
                                                </li>
                                                <li>
                                                    <div class="vendor-lbl"><span class="btn-social btn-outline"
                                                                                  data-toggle="tooltip"
                                                                                  data-placement="bottom"
                                                                                  title="Like"><i
                                                                class="fa fa-fw fa-thumbs-up"></i></span><b
                                                            class="like-info">555</b></div>
                                                </li>
                                                <li>
                                                    <div class="vendor-lbl"><a href="more_details"
                                                                               class="btn btn-primary btn-xs"
                                                                               data-toggle="tooltip"
                                                                               data-placement="bottom"
                                                                               title="More Information">More</a></div>
                                                </li>
                                            </ul>
                                            <ul class="share-buttons animated bounceInDown" data-animate="bounceInDown">
                                                <li><a href="https://www.facebook.com/sharer/sharer.php?u=&t="
                                                       title="Share on Facebook" target="_blank"><img
                                                            src="<?php echo site_url('app/assets/images/social/Facebook.png'); ?>"></a>
                                                </li>
                                                <li><a href="https://twitter.com/intent/tweet?source=&text=:%20"
                                                       target="_blank" title="Tweet"><img
                                                            src="<?php echo site_url('app/assets/images/social/Twitter.png'); ?>"></a>
                                                </li>
                                                <li><a href="https://plus.google.com/share?url=" target="_blank"
                                                       title="Share on Google+"><img
                                                            src="<?php echo site_url('app/assets/images/social/Google+.png'); ?>"></a>
                                                </li>
                                                <li><a href="mailto:?subject=&body=:%20" target="_blank"
                                                       title="Email"><img
                                                            src="<?php echo site_url('app/assets/images/social/Email.png'); ?>"></a>
                                                </li>
                                                <li><a href="whatsapp://send?text=The text to share!"
                                                       data-action="share/whatsapp/share"><img
                                                            src="<?php echo site_url('app/assets/images/social/whatsapp.png'); ?>"></a>
                                                </li>
                                                <li><a href="#overlay" id="open-overlay"><img
                                                            src="<?php echo site_url('app/assets/images/social/sms.png'); ?>"></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="user-Stores" class="user-stores">
                                <div class="row">
                                    <div class="col-xs-6 col-md-4 fav-store-ad-list">
                                        <span class="glyphicon glyphicon-remove user-fav-store-delete"></span>
                                        <div class="res-wrap">
                                            <div class="row">
                                                <!-- vendor section  starts -->
                                                <div class="col-md-2 vendor-card">
                                                    <div class="thumbnail">
                                                        <img
                                                            src="<?php echo site_url('app/assets/images/vendor-assets/chandana.jpg'); ?>"
                                                            alt="Chandana Brothers" title="Chandana Brothers">
                                                    </div>
                                                </div>
                                                <div class="col-md-10 vendor-info-wrap">
                                                    <ul class="list-inline">
                                                        <li>
                                                            <h5 class="vendor-name blue">Chandana Brothers</h5>
                                                        </li>
                                                        <li>
                                                            <h5 class="vendor-name blue">Clothing</h5>
                                                        </li>
                                                        <li>
                                                            <div class="vendor-txt">
                                                                <i class="location-lbl fa fa-fw fa-thumb-tack"></i><b
                                                                    class="location-lbl">Ameerpet</b>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-md-4 fav-store-ad-list">
                                        <div class="res-wrap">
                                            <span class="glyphicon glyphicon-remove user-fav-store-delete"></span>
                                            <div class="row">
                                                <!-- vendor section  starts -->
                                                <div class="col-md-2 vendor-card">
                                                    <div class="thumbnail">
                                                        <img
                                                            src="<?php echo site_url('app/assets/images/vendor-assets/chandana.jpg'); ?>"
                                                            alt="Chandana Brothers" title="Chandana Brothers">
                                                    </div>
                                                </div>
                                                <div class="col-md-10 vendor-info-wrap">
                                                    <ul class="list-inline">
                                                        <li>
                                                            <h5 class="vendor-name blue">SOUTH INDIA SHOPPING MALL</h5>
                                                        </li>
                                                        <li>
                                                            <h5 class="vendor-name blue">Clothing</h5>
                                                        </li>
                                                        <li>
                                                            <div class="vendor-txt">
                                                                <i class="location-lbl fa fa-fw fa-thumb-tack"></i><b
                                                                    class="location-lbl">Ameerpet</b>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-md-4 fav-store-ad-list">
                                        <div class="res-wrap">
                                            <span class="glyphicon glyphicon-remove user-fav-store-delete"></span>
                                            <div class="row">
                                                <!-- vendor section  starts -->
                                                <div class="col-md-2 vendor-card">
                                                    <div class="thumbnail">
                                                        <img
                                                            src="<?php echo site_url('app/assets/images/vendor-assets/chandana.jpg'); ?>"
                                                            alt="Chandana Brothers" title="Chandana Brothers">
                                                    </div>
                                                </div>
                                                <div class="col-md-10 vendor-info-wrap">
                                                    <ul class="list-inline">
                                                        <li>
                                                            <h5 class="vendor-name blue">Kalyan Jewllers</h5>
                                                        </li>
                                                        <li>
                                                            <h5 class="vendor-name blue">Jewllery</h5>
                                                        </li>
                                                        <li>
                                                            <div class="vendor-txt">
                                                                <i class="location-lbl fa fa-fw fa-thumb-tack"></i><b
                                                                    class="location-lbl">Somajiguda</b>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- user Favourite offers ends -->
    </div>
</div>
