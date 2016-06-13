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
            </div>
            <h2>Login</h2>
        </div>
        <!-- END Login Title -->

        <!-- Login Form -->
        <form id="oc-form" action="login" method="post" class="form-horizontal">
            <div class="form-group">
                <div class="col-xs-12">
                    <input type="text" id="username" name="username" class="form-control"
                           placeholder="Your username.." value="admin">
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-12">
                    <input type="password" id="password" name="password" class="form-control"
                           placeholder="Your password.." value="12345">
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

<?php include 'app/views/admin/common/footer.php' ?>

<!-- Load and execute javascript code used only in this page -->
<script src="<?php echo site_url('app/assets/admin/js/pages/validation.js') ?>"></script>
<script>$(function () {
        Validation.init();
    });</script>
</body>
</html>