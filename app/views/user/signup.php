<?php include 'app/views/includes/head.php'; ?>
<title>Offerciti | Signup</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Offerciti offline discounts"/>
<meta name="keywords" content="Offers, discounts"/>
<meta name="author" content="www.offerciti.com"/>

</head>

<body>
<div class="container-fluid">
    <header>
        <!-- top nav section -->
        <section class="top-sec-nav">
            <?php include 'app/views/includes/top-nav.php'; ?>

        </section>
    </header>
    <!-- END .header -->
    <!-- user signup starts -->
    <div id="signupbox" style="margin-top:50px"
         class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 visitor-form-wrap animated fadeInDown"
         data-animate="fadeInDown">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title">Sign Up</div>
            </div>
            <div class="panel-body" id="first_section">
                <form id="userSignUpForm" class="form-horizontal" role="form" method="POST"
                      action="<?php echo base_url() ?>console/user_save">
                    <div id="signupalert" style="display:none" class="alert alert-danger">
                        <p>Error:</p>
                        <span></span>
                    </div>
                    <div class="form-group">
                        <label for="user_title" class="col-md-4 control-label">Title</label>
                        <div class="col-md-6">
                            <select id="user_title" name="user_title" required class="selectpicker"
                                    data-live-search="true">
                                <option value="MR.">MR.</option>
                                <option value="Mrs.">Mrs.</option>
                                <option value="Miss.">Miss</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="first-name" class="col-md-4 control-label">*First Name </label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="first_name" name="first_name" required
                                   placeholder="Enter First Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="last-name" class="col-md-4 control-label">*Last Name</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="last_name" name="last_name" required
                                   placeholder="Enter Last Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="create-user-name" class="col-md-4 control-label">*Email</label>
                        <div class="col-md-6">
                            <input type="email" class="form-control" id="email" name="email" required
                                   placeholder="Enter Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="create-password" class="col-md-4 control-label">*Password</label>
                        <div class="col-md-6">
                            <input type="password" class="form-control" name="password" id="password" required
                                   placeholder="Create Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Retype-password" class="col-md-4 control-label">*Retype Password</label>
                        <div class="col-md-6">
                            <input type="password" class="form-control" name="cpassword" id="cpassword" required
                                   placeholder="Retype Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="phone-number" class="col-md-4 control-label">*Phone Number</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="contact_number" id="contact_number" required
                                   placeholder="Enter Phone Number">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">*Gender</label>
                        <div class="col-md-2">
							<span class="input-blue radio">
							   <input type="radio" id="Male" value="M" name="gender" checked>
							   <label for="Male">Male</label>
							</span>
                        </div>
                        <div class="col-md-3">
                          <span class="input-blue radio">
							   <input type="radio" id="Female" value="F" name="gender">
							   <label for="Female">Female</label>
							</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="dob" class="col-md-4 control-label">*Date of Birth</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control date-pic" id="dob" required name="dob"
                                   placeholder="Date of Birth">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pin-code" class="col-md-4 control-label">*Location / Address</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="pin-code"
                                   placeholder="Ex: JNTU, KPHB, Hyderabad, Telangana">
                        </div>
                    </div>
                    <!--
                                     <div class="form-group">
                                        <label for="area" class="col-md-4 control-label">*Area/Location</label>
                                        <div class="col-md-6">
                                           <select id="area" name="area" class="selectpicker" data-live-search="true" required    title="Area/Location">
                                              <option value="AmeerPet">AmeerPet</option>
                                              <option value="Kukatapally">Kukatapally</option>
                                              <option value="GachiBowli">GachiBowli</option>
                                              <option value="Lingampally">Lingampally</option>
                                           </select>
                                        </div>
                                     </div>
                                       <div class="form-group">
                                        <label for="city" class="col-md-4 control-label">*City</label>
                                        <div class="col-md-6">
                                           <select id="city" name="city" class="selectpicker" required  data-live-search="true" title="City">
                                              <option value="Hyderabad">Hyderabad</option>
                                              <option value="Hyderabad">Hyderabad</option>
                                              <option value="Hyderabad">Hyderabad</option>
                                              <option value="Hyderabad">Hyderabad</option>
                                           </select>
                                        </div>
                                     </div>
                                      <div class="form-group">
                                        <label for="state" class="col-md-4 control-label">*State</label>
                                        <div class="col-md-6">
                                           <input  name="state" type="text" class="form-control" id="state" required   placeholder="State">
                                        </div>
                                     </div>
                                     <div class="form-group">
                                        <label for="pin-code" class="col-md-4 control-label">*Location / Address</label>
                                        <div class="col-md-6">
                                           <input type="text" class="form-control" id="landmark" name="landmark" required  placeholder="Landmark">
                                        </div>
                                     </div>
                                     <div class="form-group">
                                        <label for="pin-code" class="col-md-4 control-label">Zip Code</label>
                                        <div class="col-md-6">
                                           <input type="text" class="form-control" id="zip_code" name="zip_code" required  placeholder="Zip Code">
                                     -->
                    <div class="form-group">
                        <!-- Button -->
                        <div class="col-md-offset-4 col-md-8">
                            <input type="submit" id="signup" name="signup" value="Sign Up" class="btn btn-info">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- user signup ends -->
</div>

<!-- footer starts -->

<?php include 'app/views/includes/footer.php' ?>

<style>
    .error {
        border: 1px solid red !important;
    }
</style>
<script>
    function isValidEmailAddress(emailAddress) {
        var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
        return pattern.test(emailAddress);
    }
    ;

    jQuery("#email").blur(function () {
        jQuery(this).removeClass('error')
    });

    jQuery("#password").blur(function () {
        jQuery(this).removeClass('error')
    });

    jQuery("#first_name").blur(function () {
        jQuery(this).removeClass('error')
    });

    jQuery("#last_name").blur(function () {
        jQuery(this).removeClass('error')
    });
    jQuery("#location").blur(function () {
        jQuery(this).removeClass('error')
    });
    jQuery("#company").blur(function () {
        jQuery(this).removeClass('error')
    });
    jQuery("#contact_no").blur(function () {
        jQuery(this).removeClass('error')
    });

    jQuery(document).ready(function ($) {

        $(document).on('click', '#myCheckbox0', function () {
            //alert("ven")
            if ($(this).hasClass("checkboxArea")) {
                $("#terms_error").show();
                $("#myCheckbox0").addClass('error');
            }
            else {
                $("#terms_error").hide();
                $("#myCheckbox0").removeClass('error');
            }
        })

        $(document).on('click', '#register', function () {
            ///
            var first_block_error = 0;
            var sec_block_error = 0;
            var third_block_error = 0;

            var email = $("#email").val();
            var password = $("#password").val();
            var cpassword = $("#cpassword").val();

            var first_name = $("#first_name").val();
            var last_name = $("#last_name").val();
            var storename = $("#storename").val();
            var location = $("#location").val();

            var contact_number = $("#contact_number").val();

            var company = $("#company").val();

            if (email == '' || !isValidEmailAddress(email)) {
                first_block_error = 1;
                $("#email").addClass('error');
            }
            else {
                $("#email").removeClass('error');
            }

            if (password == '') {
                first_block_error = 1;
                $("#password").addClass('error');
            }
            else {
                $("#password").removeClass('error');
            }

            if (cpassword == '') {
                first_block_error = 1;
                $("#cpassword").addClass('error');
            }
            else {
                $("#cpassword").removeClass('error');
            }
            if (password != '' && cpassword != '') {
                if (cpassword != password) {
                    first_block_error = 1;
                    $("#email_error").show();
                    $("#cpassword").addClass('error');
                    $("#password").addClass('error');
                    $("#email_error_txt").text("Password and Confirm Password should be same");
                }
                else {
                    $("#email_error").hide();
                    $("#email_error_txt").text("");
                    $("#cpassword").removeClass('error');
                    $("#password").removeClass('error');
                }
            }

            if (first_name == '') {
                first_block_error = 1;
                $("#first_name").addClass('error');
            }
            else {
                $("#first_name").removeClass('error');
            }

            if (last_name == '') {
                first_block_error = 1;
                $("#last_name").addClass('error');
            }
            else {
                $("#last_name").removeClass('error');
            }

            if (contact_number == '') {
                first_block_error = 1;
                $("#contact_number").addClass('error');
            }
            else {
                $("#contact_number").removeClass('error');
            }

            var terms = 0;

            if (first_block_error == 1) {
                $('html, body').animate({
                    scrollTop: $("#first_section").offset().top
                }, 1000);
            }

            if (first_block_error == 0) {
                $("#actionbtn").html("Processing... Please wait...");
                $("#freg").ajaxForm({
                    success: function (res) {
                        console.log(res)
                        if (res == 1) {
                            $("#email").addClass('error');
                            $("#email_error_txt").html('Email ID already exists. Please choose another one.');
                            $("#email_error").show();
                            $("#actionbtn").html('<input type="button" id="register" value="Sign Up">');
                            $('html, body').animate({
                                scrollTop: $("#first_section").offset().top
                            }, 1000);
                        }
                        else if (res == 3) {
                            $("#email").addClass('error');
                            $("#email_error_txt").html('Username  already exists. Please choose another one.');
                            $("#email_error").show();
                            $("#actionbtn").html('<input type="button" id="register" value="Sign Up">');
                            $('html, body').animate({
                                scrollTop: $("#first_section").offset().top
                            }, 1000);
                        }

                        else if (res == 2) {
                            $("#signupbox").html("Something went wrong. please try again after some time.");
                        }
                        else {
                            $("#signupbox").html(res);
                        }
                    }

                }).submit();
            }
            ///
        })

    })
</script>


   
