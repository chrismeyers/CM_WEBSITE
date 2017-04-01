/* 
    Document   : jselements.js
    Created on : Feb 25, 2017
    Author     : Chris Meyers
    Description:
        General Javascript functionality.
*/

var jselements = function() {
    var sectionTranslations = {};
    var currentSection;

    var init = function() {
        currentSection = document.getElementById('about-me');

        sectionTranslations["about"] = "about-me";
        sectionTranslations["resume"] = "my-resume";
        sectionTranslations["builds"] = "my-builds";
        sectionTranslations["projects"] = "my-projects";
        sectionTranslations["contact"] = "contact-me";

        colorIncorrectInputs();
    }

    var showSection = function(section) {
        var toShow = document.getElementById(section);

        hideAll();
        toShow.style.display = 'block';

        header.resetColorOfMenuItems();
        header.colorSelectedMenuItem(section);

        topOfPage();
        currentSection = toShow;
    }

    var hideAll = function() {
        document.getElementById('about-me').style.display = 'none';
        document.getElementById('my-resume').style.display = 'none';
        document.getElementById('my-builds').style.display = 'none';
        document.getElementById('my-projects').style.display = 'none';
        document.getElementById('contact-me').style.display = 'none';
    }

    var deleteCookie = function(name) {
        document.cookie = name + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
    }

    var topOfPage = function() {
        window.scrollTo(0, 0);
    }

    var translateToHash = function(value) {
        if(value.substring(0, 3) === "my-") {
            return value.substring(3);
        }
        else if(value.substring(value.length - 3) === "-me") {
            return value.substring(0, value.length - 3);
        }
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

    var handlePageNav = function() {
        // Reads the hash from the url and changes the page, defaults to about.
        var specificPage = window.location.hash;

        if(specificPage === null || specificPage === '') {
            showSection('about-me');
        }
        else {
            showSection(sectionTranslations[specificPage.substr(1)]);
        }
    }

    var getSectionTranslations = function() {
        return sectionTranslations;
    }

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
    });

    $("#reset-contact-form").on("click", function() {
        deleteCookie('PHPSESSID');
        window.location = "index.php#contact";
    });

    return {
        init : init,
        handlePageNav : handlePageNav,
        translateToHash : translateToHash,
        isIdShown : isIdShown,
        showSection : showSection,
        getSectionTranslations : getSectionTranslations
    }
}();

jselements.init();
