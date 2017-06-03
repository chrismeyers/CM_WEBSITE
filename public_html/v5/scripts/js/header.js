/* 
    Document   : header.js
    Created on : Feb 25, 2017
    Author     : Chris Meyers
    Description:
        Handles the functionality of the header.
*/

var header = function() {
    var fancyboxLock = false;
    var arrowsExtended = false;

    var colorSelectedMenuItem = function(hash) {
        $('.sectionTitle-' + hash).css('color', '#5bb75b');
    }

    var resetColorOfMenuItems = function() {
        $.each(jselements.getSectionTranslations(), function(i, section) {
            $('.sectionTitle-' + section["hash"]).css('color', '#000000');
        });
    }

    var setArrowNav = function () {
        var currentPage = jselements.getCurrentSection().attr("id");
        var pageFlow = jselements.getSectionTranslations();

        var index = -1;
        $.each(pageFlow, function(i, value) {
            if(value["id"] === currentPage) {
                index = i;
                return false; // break loop
            }
        });

        if(index >= 0) {
            setLeftButtonDisplay(true);
            setRightButtonDisplay(true);

            if(index == 0) {
                // First section, hide the left button.
                setLeftButtonDisplay(false);
                $("#move-right").attr("href", "#" + pageFlow[index + 1]["hash"]);
            }
            else if(index == pageFlow.length - 1) {
                // Last section, hide the right button.
                setRightButtonDisplay(false);
                $("#move-left").attr("href", "#" + pageFlow[index - 1]["hash"]);
            }
            else {
                $("#move-left").attr("href", "#" + pageFlow[index - 1]["hash"]);
                $("#move-right").attr("href", "#" + pageFlow[index + 1]["hash"]);
            }
        }
    }

    var setLeftButtonDisplay = function(state) {
        (state == true) ? $("#move-left").show() : $("#move-left").hide();
    }

    var setRightButtonDisplay = function(state) {
        (state == true) ? $("#move-right").show() : $("#move-right").hide();
    }

    // Prevent sections from changing via left and right arrow keys when fancybox is open.
    var lock = function() {
        fancyboxLock = true;
    }

    var unlock = function() {
        fancyboxLock = false;
    }

    var locked = function() {
        return fancyboxLock;
    }

    var moveNavArrows = function() {
        if($(window).scrollTop() > 1) {
            if(!arrowsExtended) {
                $("#move-left").animate({"left": "-55px"});
                $("#move-left").animate({"top": "0px"});

                $("#move-right").animate({"right": "-55px"});
                $("#move-right").animate({"top": "0px"});

                arrowsExtended = true;
            }
        }
        else {
            $("#move-left").animate({"top": "72px"});
            $("#move-left").animate({"left": "0px"});

            $("#move-right").animate({"top": "72px"});
            $("#move-right").animate({"right": "0px"});

            arrowsExtended = false;
        }
    }

    return {
        colorSelectedMenuItem : colorSelectedMenuItem,
        resetColorOfMenuItems : resetColorOfMenuItems,
        setArrowNav : setArrowNav,
        lock : lock,
        unlock : unlock,
        locked : locked,
        moveNavArrows : moveNavArrows
    }
}();
