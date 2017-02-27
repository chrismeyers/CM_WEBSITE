/* 
    Document   : callbacks.js
    Created on : Feb 25, 2017
    Author     : Chris Meyers
    Description:
        Handles all Javascript callbacks.
*/

$(document).ready(function() {
    $(".fancybox").fancybox({
        openEffect  : 'none',
        closeEffect : 'none'
    });

    handlePageNav();
});

// Handles browser back and forward.
window.onhashchange = function() {
    handlePageNav();
};

$(function() {
    // Click menu
    $(document).each(function() {
        $(this).click(function(event) {
            var currentID = event.target.id;

            if(currentID === "menu-click" || currentID === "menu-toggle") {
                //toggles menu on button click
                $('#menu-click').siblings('#menu-items').slideToggle("fast");
            }
            else {
                //closes menu when clicked anywhere other than button
                $("#menu-click").siblings('#menu-items').slideUp("fast");
            }
        });
    });

    // Document scope key events
    $(document).keyup(function(event) {
        var currentKey = event.keyCode;

        //closes menu when esc is pressed
        if(currentKey === 27) {
            $("#menu-click").siblings('#menu-items').slideUp("fast");
        }

        // toggles prompt on ~
        if(currentKey === 192) {
            handlePromptDisplay();
        }
    });

    // Prompt scope key events (when prompt is in focus)
    $("#prompt").keyup(function(event) {
        var currentKey = event.keyCode;

        switch(currentKey) {
            case 13: { // enter - send command
                processPromptInput($("#prompt").val());
                promptHistoryLocation = 0;
                break;
            }
            case 38: { // up arrow - cycle through history
                if(promptHistory.length !== 0){
                    if(promptHistoryLocation < promptHistory.length) {
                        promptHistoryLocation++;
                        $("#prompt").val(promptHistory[promptHistory.length - promptHistoryLocation]);
                    }
                    else {
                        movePromptCursorToEnd();
                    }
                }
                break;
            }
            case 40: { // down arrow - cycle through history
                if(promptHistory.length !== 0 && promptHistoryLocation > 0) {
                    promptHistoryLocation--;
                    $("#prompt").val(promptHistory[promptHistory.length - promptHistoryLocation]);   
                }
                break;
            }
            default:
                break;
        }
    });

    $("#prompt").keypress(function(event) {
        // prevent backtick's in prompt
        if(event.charCode === 96) {
            return false;
        }
    });
});

function handlePageNav() {
    // Reads hash from url and changes page, defaults to about.
    var specificPage = window.location.hash;

    if(specificPage === null || specificPage === '') {
        showSection('about-me');
    }
    else {
        showSection(sectionTranslations[specificPage.substr(1)]);
    }
}
