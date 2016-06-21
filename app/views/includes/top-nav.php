<?php error_reporting(0); ?>
<nav class="row nav-top">
    <div class="web-menu-wrap">
        <!-- 'Favourites' option visible to logged-in users or merchants only -->
        <?php
        if ($_SESSION['login']) {
            ?>
            <a href="#" id="fav">
                <span>&nbsp;</span>Favourites
            </a>
        <?php }
        ?>

        <!-- 'Shortlist' option visible to everyone -->
        <a href="#" id="saved">
            <span>&nbsp;</span>Shortlist
        </a>

        <!-- merchant login options-->
        <?php
        if (!$_SESSION['login'] || $_SESSION['isMerchant']) {
            //  Merchant login options available for non-logged-in users or logged-in merchants only
            ?>
            <div class="dropdown user-login-cont">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Merchant Login /
                    Sign
                    Up
                    <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <?php
                    if (!$_SESSION['login']) {
                        //  Show Login/Sign up option for non-logged-in users only
                        ?>
                        <li><a href="merchant_login">Login / Sign Up</a></li>
                        <?php
                    } else if ($_SESSION['isMerchant']) {
                        //  Show My Account and Logout options for logged-in merchants only
                        ?>
                        <li><a href="merchant_profile">My Account</a></li>
                        <li><a href="logout_merchant">Logout</a></li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
        <?php }
        ?>

        <!-- user login options-->
        <?php
        if (!$_SESSION['isMerchant']) {
            //  Don't show user Login options to logged-in merchants
            ?>
            <div class="dropdown user-login-cont">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Login / Sign Up
                    <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <?php
                    if (!$_SESSION['login']) {
                        //  Show Login/Sign up option to non-logged in users
                        ?>
                        <li><a href="login">Login / Sign Up</a></li>

                    <?php } else {
                        //  Show My Account and Logout options to logged in users
                        ?>
                        <li><a href="profile">My Account</a></li>
                        <li><a href="logout">Logout</a></li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
            <?php
        }
        ?>
    </div>
    <div class="mob-menu-wrap">
        <a id="mobile-menu" class="mobile-menu">
            <img src="<?php echo site_url('app/assets/images/mob-menu-off.png'); ?>">
        </a>
        <div class="list-group mobile-menu-list">
            <a href="#" class="list-group-item">Favourites</a>
            <a href="#" class="list-group-item">Shortlist</a>
            <a href="merchant_login" class="list-group-item">Post A Free Ad</a>
            <div class="dropdown user-login-cont">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Merchant Login /
                    Sign Up
                    <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="posts">My Account</a></li>
                    <li><a href="merchant_login">Logout</a></li>
                </ul>
            </div>
            <div class="dropdown user-login-cont">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Login / Sign Up
                    <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="profile">My Account</a></li>
                    <li><a href="login">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<h1 id="logo-wrap">
    <p>
        <a href="index">
            <img src="<?php echo site_url('app/assets/images/offerciti-logo.png'); ?>">
        </a>
        <a href="register" class="postafreead">
            <span class="a-btn-text">Post A Free Ad</span>
        </a>
    </p>
</h1>
             
