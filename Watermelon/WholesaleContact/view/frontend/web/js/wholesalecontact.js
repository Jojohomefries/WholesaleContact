define([
        "jquery",
        "validate"
    ],
    function($)
    {
        "use strict";
        console.log(" ====== wholesalecontact.js is loaded====== ");
        $(window).load(function()
        {
            $('.register').click(function(){
                console.log('validating');
                $(".wholesale-registration-form").validate({
                    rules: {
                        'geo[]': {required: true},
                        'decor[]': {required: true}
                    }
                });
            });
        });
        $(document).ready(function()
        {
            //your code goes here..
        });
    });