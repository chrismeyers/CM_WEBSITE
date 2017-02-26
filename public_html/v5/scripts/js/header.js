/* 
    Document   : header.js
    Created on : Feb 25, 2017
    Author     : Chris Meyers
    Description:
        Handles the functionality of the header.
*/

function colorSelectedMenuItem(section) {
    // The section name comes in as the raw id and must be sanitized.
    var sanitizedSection = translateToHash(section);
    $('#sectionTitle-' + sanitizedSection).css('color', '#5bb75b');
}

function resetColorOfMenuItems() {
    for(var section in sectionTranslations) {
        $('#sectionTitle-' + section).css('color', '#000000');
    }
}
