/* 
    Document   : header.js
    Created on : Feb 25, 2017
    Author     : Chris Meyers
    Description:
        Handles the functionality of the header.
*/

var header = function() {
    var colorSelectedMenuItem = function(section) {
        // The section name comes in as the raw id and must be sanitized.
        var sanitizedSection = jselements.translateToHash(section);
        $('#sectionTitle-' + sanitizedSection).css('color', '#5bb75b');
    }

    var resetColorOfMenuItems = function() {
        for(var section in jselements.getSectionTranslations()) {
            $('#sectionTitle-' + section).css('color', '#000000');
        }
    }

    return {
        colorSelectedMenuItem : colorSelectedMenuItem,
        resetColorOfMenuItems : resetColorOfMenuItems
    }
}();
