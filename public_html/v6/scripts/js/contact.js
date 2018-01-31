/* 
    Document   : contact.js
    Created on : Aug 16, 2017
    Author     : Chris Meyers
    Description:
        Handles contact form validation.
*/

var contact = function() {
    var possibleErrors = ["#name-input", "#email1-input", "#email2-input"];
    var contactRecaptcha = null;

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

        var recaptchaResponse = grecaptcha.getResponse(contactRecaptcha);
        if(recaptchaResponse === "") {
            errorHTML += "<img class='contact-link-image' src='images/icons/alert.svg'><div class='contact-alert-text'> Please prove you're not a robot by checking the reCAPTCHA box!</div>";
        }

        if(errorHTML === "") {
            $("#contact-form").submit();
        }
        else {
            $("#validation-errors").html(errorHTML);
        }
    });

    $("#reset-contact-form").click(function() {
        window.location = "/#contact";
        
        $("#validation-errors").html("");
        removeErrorClass();
        grecaptcha.reset(contactRecaptcha);
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

    var recaptchaContactOnLoad = function() {
        contactRecaptcha = grecaptcha.render("recaptcha-contact", {
            "sitekey": "6LepnzsUAAAAAKSz6HMOPeZCJMaugZFG2dS4tyUC"
        });
    }

    return {
        recaptchaContactOnLoad : recaptchaContactOnLoad
    }
}();
