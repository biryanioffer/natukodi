<?php error_reporting(0); ?>
<nav class="row nav-top">
    <div class="web-menu-wrap">
        <a href="#" id="fav">
            <span>&nbsp;</span>Favourites
        </a>
        <a href="#" id="saved">
            <span>&nbsp;</span>Shortlist
        </a>
        <div class="dropdown user-login-cont">
            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Merchant Login / Sign
                Up
                <span class="caret"></span></button>
            <ul class="dropdown-menu">
                <li><a href="merchant_login">Login / Sign Up</a></li>
                <li><a href="posts">My Account</a></li>
                <li><a href="merchant_login">Logout</a></li>
            </ul>
        </div>
        <div class="dropdown user-login-cont"> 
		<?php if($_SESSION['email']!='' && $_SESSION['Login']==1){?>
			<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">My Account
                <span class="caret"></span></button>
            <ul class="dropdown-menu">
                <li><a href="profile">My Account</a></li>
                <li><a href="logout">Logout</a></li>
            </ul>

			<?php } else{ ?>
			 <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Login / Sign Up
                <span class="caret"></span></button>
            <ul class="dropdown-menu">
                <li><a href="login">Login / Sign Up</a></li>
                
            </ul>
			<?php }?>
        </div>
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
             
