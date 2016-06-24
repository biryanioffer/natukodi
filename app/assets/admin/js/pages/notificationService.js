/*
 *  Document   : uiProgress.js
 *  Author     : pixelcave
 *  Description: Custom javascript code used in Progress & Loading page
 */

var NotificationService = function () {

    // Get random number function from a given range
    var getRandomInt = function (min, max) {
        return Math.floor(Math.random() * (max - min + 1)) + min;
    };

    return {
        init: function () {
            /* Randomize progress bars width */
            var random = 0;


            /* Grawl Notifications with Bootstrap-growl plugin, check out more examples at http://ifightcrime.github.io/bootstrap-growl/ */
            //$('.btn-growl').on('click', function(){
            /*      $('#success_btn').on('click', function(){
             var growlType = $(this).data('growl');
             //  alert("sample error");

             $.bootstrapGrowl('<h4><strong>Notification</strong></h4> <p>Content..</p>', {
             type: growlType,
             delay: 3000,
             allow_dismiss: true,
             offset: {from: 'top', amount: 20}
             });

             $(this).prop('disabled', true);
             });*/
        },
        showMessage: function (_type, msg) {
            $.bootstrapGrowl('<h4><strong>Notification</strong></h4> <p>msg</p>', {
                type: _type,
                delay: 3000,
                allow_dismiss: true,
                offset: {from: 'top', amount: 20}
            });
        }
    };
}();