/* 
    Document   : header.js
    Created on : June 13, 2016
    Author     : Chris Meyers
    Description:
        Handles the functionality of the dynamic header.
*/

function selectSectionTitle(section) {
    $('.sectionTitle-' + translateToHash(section)).css('border-bottom', 'solid 5px #5bb75b');
    $('.sectionTitle-' + translateToHash(section)).css('box-sizing', 'border-box');
}

function deselectAllSectionTitles() {
    for(var section in sectionTranslations) {
        $('.sectionTitle-' + section).css('border-bottom', '');
        $('.sectionTitle-' + section).css('box-sizing', '');
    }
}

function determineScrollLocation() {
    if(hasScrollBar()) {
        mobileCutoffWidth = 789;
    }
    else {
        mobileCutoffWidth = 806;
    }

    if ($(window).scrollTop() > 1) {
        if($(window).width() <= mobileCutoffWidth) {
            setupMobile();
        }
        else if ($('#bannerBar').data('size') === 'big') { 
            setupSmall();
        }
    }
    else {
        if($(window).width() <= mobileCutoffWidth) {
            setupMobile();
        }
        else if ($('#bannerBar').data('size') === 'small') {
            setupBig();
        }
    }
}

// This function is taken from:
// https://tylercipriani.com/2014/07/12/crossbrowser-javascript-scrollbar-detection.html
function hasScrollBar(){
    // The Modern solution
    if(typeof window.innerWidth === 'number'){
        return window.innerWidth > document.documentElement.clientWidth;
    }

    // rootElem for quirksmode
    var rootElem = document.documentElement || document.body

    // Check overflow style property on body for fauxscrollbars
    var overflowStyle

    if(typeof rootElem.currentStyle !== 'undefined'){
        overflowStyle = rootElem.currentStyle.overflow
    }

    overflowStyle = overflowStyle || window.getComputedStyle(rootElem, '').overflow

    // Also need to check the Y axis overflow
    var overflowYStyle

    if(typeof rootElem.currentStyle !== 'undefined'){
        overflowYStyle = rootElem.currentStyle.overflowY
    }

    overflowYStyle = overflowYStyle || window.getComputedStyle(rootElem, '').overflowY

    var contentOverflows = rootElem.scrollHeight > rootElem.clientHeight
    var overflowShown    = /^(visible|auto)$/.test(overflowStyle) || /^(visible|auto)$/.test(overflowYStyle)
    var alwaysShowScroll = overflowStyle === 'scroll' || overflowYStyle === 'scroll'

    return (contentOverflows && overflowShown) || (alwaysShowScroll)
}

function setupBig() {
    $('.banner-img img').css('display', 'none');

    $('#bannerBar').data('size', 'big');

    $('#bannerBar').stop().animate({
        height: '90px'
    }, 400);

    $('.sectionTitle-about, .sectionTitle-resume, .sectionTitle-builds, .sectionTitle-projects, .sectionTitle-contact, #sectionTitle-menu, .banner-img').stop().animate({
        height: "90px"
    }, 400);

    $('.sectionTitle-txt').css('margin-top', 24);
    $('.sectionTitle-txt, .sectionTitle-txt-last').stop().animate({
        height: "50px"
    }, 400);

    $('#menu-toggle').css('margin-top', 20);
    $('#menu-items').css('top', '90px');

    $('.banner-img img').attr("src", "images/banner/v4/no-border/titlepic-v4-NObrackets.png");
    $('.banner-img img').attr('onmouseover', '');
    $('.banner-img img').attr('onmouseout', '');
    $('.banner-img img').css("margin-left", "0px");

    $('.banner-img img').attr('height', '90px');
    $('.banner-img img').attr('width', '550px');

    $('.banner-img img').fadeIn('fast');
}

function setupSmall() {
    $('.banner-img img').css('display', 'none');

    $('#bannerBar').data('size', 'small');

    $('#bannerBar').stop().animate({
        height: '60px'
    }, 400);

    $('.sectionTitle-about, .sectionTitle-resume, .sectionTitle-builds, .sectionTitle-projects, .sectionTitle-contact, #sectionTitle-menu, .banner-img').stop().animate({
        height: "60px"
    }, 400);

    $('.sectionTitle-txt').css('margin-top', 12);
    $('.sectionTitle-txt, .sectionTitle-txt-last').stop().animate({
        height: "50px"
    }, 400);

    $('#menu-toggle').css('margin-top', 6);
    $('#menu-items').css('top', '60px');

    $('.banner-img img').attr("src", "images/logos/cmlogocolor_nobackground_WHITE.png");
    $('.banner-img img').attr('onmouseover', 'this.src=\'images/logos/cmlogocolor_nobackground_GREEN.png\'');
    $('.banner-img img').attr('onmouseout', 'this.src=\'images/logos/cmlogocolor_nobackground_WHITE.png\'');
    $('.banner-img img').css("margin-left", "20px");

    // Maintains constant logo size when changing from mobile to mid size view.
    $('.banner-img img').attr('height', '60px');
    $('.banner-img img').attr('width', '60px');

    $('.banner-img img').fadeIn('fast');
}

function setupMobile() {
    if ($(document).scrollTop() > 0) {
        $('#bannerBar').data('size', 'big');
    }
    else {
        $('#bannerBar').data('size', 'small');
    }
    
    $('#bannerBar').css('height', '60px');

    $('.banner-img').css("height", "");
    $('.banner-img').css("width", "");

    $('#sectionTitle-menu').css('height', '60px');
    $('#sectionTitle-menu').css('margin-top', '0px');
    $('.sectionTitle-txt').css('margin-top', '');
    $('.sectionTitle-txt, .sectionTitle-txt-last').stop().animate({
        height: "50px"
    }, 400);

    $('#menu-toggle').css('margin-top', "14px");
    $('#menu-items').css('top', '60px');   
}
