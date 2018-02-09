/* 
    Document   : header.js
    Created on : Feb 25, 2017
    Author     : Chris Meyers
    Description:
        Handles the functionality of the header.
*/

var header = function() {
    var open = false;

    var colorSelectedMenuItem = function(section) {
        $('.sectionTitle-' + section).css('color', '#5bb75b');
    }

    var resetColorOfMenuItems = function() {
        $.each(jselements.getPageFlow(), function(i, section) {
            $('.sectionTitle-' + section).css('color', '#000000');
        });
    }

    var hideHamburgerMenu = function() {
        open = false;

        $('#menu-items').slideUp("fast");
        $("#menu-click").removeClass("is-active");
        $(".overlay").hide();
    }

    var toggleHamburgerMenu = function() {
        open = !open;

        $("#menu-items").slideToggle("fast");
        $("#menu-click").toggleClass("is-active");
        open ? $(".overlay").show() : $(".overlay").hide();
    }

    return {
        colorSelectedMenuItem : colorSelectedMenuItem,
        resetColorOfMenuItems : resetColorOfMenuItems,
        hideHamburgerMenu : hideHamburgerMenu,
        toggleHamburgerMenu : toggleHamburgerMenu
    }
}();
