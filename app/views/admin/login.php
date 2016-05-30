<div id="login-container">
    <!-- Login Header -->
    <h1 class="h2 text-light text-center push-top-bottom animation-slideDown">
        <img src="<?php echo site_url('app/assets/images/offerciti-logo.png'); ?>"> <strong>Admincon</strong>
    </h1>
    <!-- END Login Header -->

    <!-- Login Block -->
    <div class="block animation-fadeInQuickInv">
        <!-- Login Title -->
        <div class="block-title">
            <div class="block-options pull-right">
                <a href="page_ready_reminder.html" class="btn btn-effect-ripple btn-primary" data-toggle="tooltip"
                   data-placement="left" title="Forgot your password?"><i class="fa fa-exclamation-circle"></i></a>
                <a href="page_ready_register.html" class="btn btn-effect-ripple btn-primary" data-toggle="tooltip"
                   data-placement="left" title="Create new account"><i class="fa fa-plus"></i></a>
            </div>
            <h2>Login</h2>
        </div>
        <!-- END Login Title -->

        <!-- Login Form -->
        <form id="form-login" action="index.html" method="post" class="form-horizontal">
            <div class="form-group">
                <div class="col-xs-12">
                    <input type="text" id="login-email" name="login-email" class="form-control"
                           placeholder="Your email..">
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-12">
                    <input type="password" id="login-password" name="login-password" class="form-control"
                           placeholder="Your password..">
                </div>
            </div>
            <div class="form-group form-actions">
                <div class="col-xs-8">
                    <label class="csscheckbox csscheckbox-primary">
                        <input type="checkbox" id="login-remember-me" name="login-remember-me">
                        <span></span>
                    </label>
                    Remember Me?
                </div>
                <div class="col-xs-4 text-right">
                    <button type="submit" class="btn btn-effect-ripple btn-sm btn-primary"><i class="fa fa-check"></i>
                        Let's Go
                    </button>
                </div>
            </div>
        </form>
        <!-- END Login Form -->
    </div>
    <!-- END Login Block -->

</div>
<!-- END Login Container -->

<!-- Load and execute javascript code used only in this page -->
<script src="js/pages/readyLogin.js"></script>
<script>$(function () {
        ReadyLogin.init();
    });</script>
</body>
</html>