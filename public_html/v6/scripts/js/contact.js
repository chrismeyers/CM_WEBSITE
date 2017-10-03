/* 
    Document   : contact.js
    Created on : Aug 16, 2017
    Author     : Chris Meyers
    Description:
        Handles contact form validation.
*/

var contact = function() {
    var possibleErrors = ["#name-input", "#email1-input", "#email2-input"];

    $("#send-contact-form").click(function() {
        var name = $(possibleErrors[0]).val();
        var email1 = $(possibleErrors[1]).val();
        var email2 = $(possibleErrors[2]).val();

        removeErrorClass();

        var errorHTML = "";
        if(name === "") {
            errorHTML += "<img class='contact-link-image' src='images/icons/alert.svg'><div class='contact-alert-text'> Name required.</div>";
            $(possibleErrors[0]).addClass("inputbox-mod-error");
        }
        if(!validateEmail(email1)) {
            errorHTML += "<img class='contact-link-image' src='images/icons/alert.svg'><div class='contact-alert-text'> Email Address format is incorrect.</div>";
            $(possibleErrors[1]).addClass("inputbox-mod-error");
        }
        if(email1 !== email2) {
            errorHTML += "<img class='contact-link-image' src='images/icons/alert.svg'><div class='contact-alert-text'> Email Addresses don't match.</div>";
            $(possibleErrors[2]).addClass("inputbox-mod-error");
        }

        if(errorHTML === "") {
            $("#contact-form").submit();
        }
        else {
            $("#validation-errors").html(errorHTML);
        }
    });

    $("#reset-contact-form").click(function() {
        window.location = "index.php#contact";
        
        $("#validation-errors").html("");
        removeErrorClass();
    });

    var validateEmail = function(email) {
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
    }

    var removeErrorClass = function() {
        $.each(possibleErrors, function(i, field) {
            $(field).removeClass("inputbox-mod-error");
        });
    }

    return {

    }
}();
