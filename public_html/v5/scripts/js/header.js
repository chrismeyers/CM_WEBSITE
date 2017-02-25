/* 
    Document   : header.js
    Created on : June 13, 2016
    Author     : Chris Meyers
    Description:
        Handles the functionality of the dynamic header.
*/

function selectSectionTitle(section) {
    var newSection = section || "about";
    $('.sectionTitle-' + translateToHash(section)).css('border-bottom', 'solid 5px #5bb75b');
    $('.sectionTitle-' + translateToHash(section)).css('box-sizing', 'border-box');
}

function deselectAllSectionTitles() {
    for(var section in sectionTranslations) {
        $('.sectionTitle-' + section).css('border-bottom', '');
        $('.sectionTitle-' + section).css('box-sizing', '');
    }
}
