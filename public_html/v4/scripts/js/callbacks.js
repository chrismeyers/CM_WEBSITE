/* 
    Document   : callbacks.js
    Created on : June 13, 2016
    Author     : Chris Meyers
    Description:
        Handles all Javascript callbacks.
*/

$(document).ready(function() {
    $(".fancybox").fancybox({
        openEffect  : 'none',
        closeEffect : 'none'
    });

    // Reads hash from url and changes page, defaults to about.
    if(specificPage === null || specificPage === '') {
        showSection('about-me');
    }
    else {
        showSection(sectionTranslations[specificPage.substr(1)]);
    }
});

// Handles browser back and forward.
window.onhashchange = function() {
    showSection(sectionTranslations[window.location.hash.substr(1)]);
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
            if(isIdShown('prompt-div')) {
                $('#prompt-div').css('display', 'none');
            }
            else {
                $('#prompt-div').css('display', 'flex');
                movePromptCursorToEnd();
            }
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

$(window).resize(function() {
    determineScrollLocation();
});

$(window).scroll(function() {
    determineScrollLocation();
});

// Shrinks header on scroll-down.
$(function() {
  $('#bannerBar').data('size','big');
});
