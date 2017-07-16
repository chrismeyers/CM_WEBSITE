/* 
    Document   : header.js
    Created on : Feb 25, 2017
    Author     : Chris Meyers
    Description:
        Handles the functionality of the header.
*/

var header = function() {
    var colorSelectedMenuItem = function(section) {
        $('.sectionTitle-' + section).css('color', '#5bb75b');
    }

    var resetColorOfMenuItems = function() {
        $.each(jselements.getPageFlow(), function(i, section) {
            $('.sectionTitle-' + section).css('color', '#000000');
        });
    }

    return {
        colorSelectedMenuItem : colorSelectedMenuItem,
        resetColorOfMenuItems : resetColorOfMenuItems
    }
}();
