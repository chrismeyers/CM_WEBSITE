/* 
    Document   : jselements.js
    Created on : Feb 25, 2017
    Author     : Chris Meyers
    Description:
        General Javascript functionality.
*/

var jselements = function() {
    var currentSection = null;
    var pageFlow = ["about", "resume", "builds", "projects", "contact"];
    var sectionIndex = 0;

    var showSection = function(section) {
        var toShow = $("[data-section-name='" + section + "']");

        hideAll();
        determineSectionIndex();
        toShow.show();

        header.resetColorOfMenuItems();
        header.colorSelectedMenuItem(section);

        topOfPage();
        currentSection = toShow;
        header.setArrowNav();
    }

    var getCurrentSection = function() {
        return currentSection;
    }

    var hideAll = function() {
        $.each(pageFlow, function(i, section) {
            $("[data-section-name='" + section + "']").hide();
        });
    }

    var deleteCookie = function(name) {
        document.cookie = name + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
    }

    var topOfPage = function() {
        window.scrollTo(0, 0);
    }

    var isIdShown = function(id) {
       return (getComputedStyle(document.getElementById(id)).getPropertyValue("display") !== "none");
    }

    var colorIncorrectInputs = function() {
        var urlVal = window.location.search;
        if(urlVal  !== "") {
            // If there's a valid error code in the URL, get it and split it up.
            // Ex: ...?message=111#contact
            var nums = urlVal.substring(urlVal.indexOf("=") + 1);
            var parts = nums.split('');

            var inputsToColor = [];
            if(parts[0] === '1') {
                inputsToColor.push('#name-input');
            }
            if(parts[1] === '1') {
                inputsToColor.push('#email1-input');
            }
            if(parts[2] === '1') {
                inputsToColor.push('#email2-input');
            }

            for(var i = 0; i < inputsToColor.length ; i++) {
                $(inputsToColor[i]).css('border-color', 'red');
            }
        }
    }

    var determineSectionIndex = function() {
        var currentPage = window.location.hash;

        $.each(pageFlow, function(i, section) {
            if(section === currentPage.substring(1)) {
                sectionIndex = i;
                return false; // break loop
            }
        });
    }

    var getSectionIndex = function() {
        return sectionIndex;
    }

    var handlePageNav = function() {
        // Reads the hash from the url and changes the page, defaults to about.
        var specificPage = window.location.hash;

        if(specificPage === null || specificPage === '') {
            showSection(pageFlow[0]);
        }
        else {
            showSection(specificPage.substring(1));
        }
    }

    var getPageFlow = function() {
        return pageFlow;
    }

    // Handles browser back and forward.
    window.onhashchange = function() {
        handlePageNav();
    };

    $(window).scroll(function() {
        header.moveNavArrows();
    });

    // Click menu
    $(document).each(function() {
        $(this).click(function(event) {
            var currentID = event.target.id;

            if(currentID === "menu-click" || currentID === "menu-toggle") {
                // Toggles the menu upon clicking the menu button.
                $('#menu-click').siblings('#menu-items').slideToggle("fast");
            }
            else {
                // Closes the menu upon clicking anywhere other than the menu button.
                $("#menu-click").siblings('#menu-items').slideUp("fast");
            }
        });
    });

    // Document scope key events
    $(document).keyup(function(event) {
        var currentKey = event.keyCode;

        // Closes the menu when esc is pressed.
        if(currentKey === 27) {
            $("#menu-click").siblings('#menu-items').slideUp("fast");
        }

        // Toggles the prompt when ~ is pressed.
        if(currentKey === 192) {
            prompt.handlePromptDisplay();
        }

        // Left arrow - move left one section.
        if(currentKey === 37 && !header.locked()) {
            $("#move-left")[0].click();
        }

        // Right arrow - move right one section.
        if(currentKey === 39 && !header.locked()) {
            $("#move-right")[0].click();
        }
    });

    $("#reset-contact-form").click(function() {
        deleteCookie('PHPSESSID');
        window.location = "index.php#contact";
    });

    // Main
    $(document).ready(function() {
        $("[data-fancybox]").fancybox({
            afterLoad: function(instance, slide) {
                header.lock();
            },
            afterClose: function(instance, slide) {
                header.unlock();
            }
        });

        handlePageNav();
        colorIncorrectInputs();
    });

    return {
        handlePageNav : handlePageNav,
        isIdShown : isIdShown,
        showSection : showSection,
        getCurrentSection : getCurrentSection,
        getPageFlow : getPageFlow,
        getSectionIndex : getSectionIndex,
    }
}();
