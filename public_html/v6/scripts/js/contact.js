/* 
    Document   : contact.js
    Created on : Aug 16, 2017
    Author     : Chris Meyers
    Description:
        Handles contact form validation.
*/

var contact = function() {
    $("#send-contact-form").click(function() {
        var name = $("#name-input").val();
        var email1 = $("#email1-input").val();
        var email2 = $("#email2-input").val();

        var errorHTML = "";
        if(name === "") {
            errorHTML += "<img class='contact-link-image' src='images/icons/alert.svg'><div class='contact-alert-text'> Name required.</div>";
        }
        if(!validateEmail(email1)) {
            errorHTML += "<img class='contact-link-image' src='images/icons/alert.svg'><div class='contact-alert-text'> Email Address format is incorrect.</div>";
        }
        if(email1 !== email2) {
            errorHTML += "<img class='contact-link-image' src='images/icons/alert.svg'><div class='contact-alert-text'> Email Addresses don't match.</div>";
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
    });

    var validateEmail = function(email) {
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
    }

    return {

    }
}();
