/*
 *  Document   : readyLogin.js
 *  Author     : pixelcave
 *  Description: Custom javascript code used in Login page
 */

var Validation = function() {

    return {
        init: function() {
            /*
             *  Jquery Validation, Check out more examples and documentation at https://github.com/jzaefferer/jquery-validation
             */
            /* common validations for all input forms - Initialize Validation */
            $('#oc-form').validate({
                errorClass: 'help-block animation-slideUp', // You can change the animation class for a different entrance animation - check animations page
                errorElement: 'div',
                errorPlacement: function(error, e) {
                    e.parents('.form-group > div').append(error);
                },
                highlight: function(e) {
                    $(e).closest('.form-group').removeClass('has-success has-error').addClass('has-error');
                    $(e).closest('.help-block').remove();
                },
                success: function(e) {
                    e.closest('.form-group').removeClass('has-success has-error');
                    e.closest('.help-block').remove();
                },
                rules: {
                    'first_name': {
                        required: true,
                        minlength: 3
                    },
                    'last_name': {
                        required: true,
                        minlength: 3
                    },
                    'category-name': {
                        required: true,
                        minlength: 5
                    },
                    'username': {
                        required: true,
                        minlength: 3
                    },
                    'email': {
                        required: true,
                        email: true
                    },
                    'password': {
                        required: true,
                        minlength: 5
                    },
                    'confirm-password': {
                        required: true,
                        equalTo: '#password'
                    },
                    'suggestions': {
                        required: true,
                        minlength: 5
                    },
                    'skill': {
                        required: true
                    },
                    'website': {
                        required: true,
                        url: true
                    },
                    'digits': {
                        required: true,
                        digits: true
                    },
                    'number': {
                        required: true,
                        number: true
                    },
                    'range': {
                        required: true,
                        range: [1, 5]
                    },
                    'terms': {
                        required: true
                    },
                    googleLocation: {
                        required: true
                    }
                },
                messages: {
                    first_name: 'Please enter your first name',
                    last_name: 'Please enter your last name',
                    'category-name': {
                        required: 'Please provide new category name',
                        minlength: 'Category name must be at least 5 characters long'
                    },
                    'username': {
                        required: 'Please enter a username',
                        minlength: 'Your username must consist of at least 3 characters'
                    },
                    'email': 'Please enter a valid email address',
                    'password': {
                        required: 'Please provide a password',
                        minlength: 'Your password must be at least 5 characters long'
                    },
                    'confirm-password': {
                        required: 'Please provide a password',
                        minlength: 'Your password must be at least 5 characters long',
                        equalTo: 'Please enter the same password as above'
                    },
                    'suggestions': 'What can we do to become better?',
                    'skill': 'Please select a skill!',
                    'website': 'Please enter your website!',
                    'digits': 'Please enter only digits!',
                    'number': 'Please enter a number!',
                    'range': 'Please enter a number between 1 and 5!',
                    'terms': 'You must agree to the service terms!',
                    'googleLocation': 'Please enter a Address / location'
                }
            });
        }
    };
}();