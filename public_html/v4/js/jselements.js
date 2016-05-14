var mobileCutoffWidth;
var about = document.getElementById('about-me');
var resume = document.getElementById('my-resume');
var builds = document.getElementById('my-builds');
var projects = document.getElementById('my-projects');
var contact = document.getElementById('contact-me');
var specificPage = window.location.hash;

var promptHistory = new Array();
var promptHistoryLocation = 0;

$(document).ready(function() {
    $(".fancybox").fancybox({
        openEffect  : 'none',
        closeEffect : 'none'
    });

    // Reads hash from url and changes page, defaults to about.
    if(specificPage === null || specificPage === ''){
        showSection('about-me');
    }
    else{
        showSection(translateHash(specificPage.substr(1)));
    }
});

// Handles browser back and forward.
window.onhashchange = function(){
    showSection(translateHash(window.location.hash.substr(1)));
};

// Displays new section.
function showSection(section){
    var toShow = document.getElementById(section);
    hideAll();
    toShow.style.display = 'block';
    topOfPage();
}

function hideAll(){
    about.style.display = 'none';
    resume.style.display = 'none';
    builds.style.display = 'none';
    projects.style.display = 'none';
    contact.style.display = 'none';
}

function deleteCookie(name){
    document.cookie = name + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
}

function topOfPage(){
    window.scrollTo(0, 0);
}

function translateHash(value){
    switch(value){
        case("about"):
            return "about-me";
        case("resume"):
            return "my-resume";
        case("builds"):
            return "my-builds";
        case("projects"):
            return "my-projects";
        case("contact"):
            return "contact-me";
        default:
            return "about-me";
    }
}

$(function() {
    // Click menu
    $(document).each(function() {
        $(this).click(function(event) {
            var currentID = event.target.id;

            if(currentID === "menu-click" || currentID === "menu-toggle"){
                //toggles menu on button click
                $('#menu-click').siblings('#menu-items').slideToggle("fast");
            }
            else{
                //closes menu when clicked anywhere other than button
                $("#menu-click").siblings('#menu-items').slideUp("fast");
            }
        });
    });

    // Document scope key events
    $(document).keyup(function(event) {
        var currentKey = event.keyCode;

        //closes menu when esc is pressed
        if(currentKey === 27){
            $("#menu-click").siblings('#menu-items').slideUp("fast");
        }

        // toggles prompt on ~
        if(currentKey === 192){
            if(getComputedStyle(document.getElementById('prompt-div')).getPropertyValue("display") === "none"){
                // Show prompt box.
                $('#prompt-div').css('display', 'flex');
                movePromptCursorToEnd();
            }
            else{
                // Hide prompt box.
                $('#prompt-div').css('display', 'none');
            }
        }
    });

    // Prompt scope key events (when prompt is in focus)
    $("#prompt").keyup(function(event){
        var currentKey = event.keyCode;

        // enter - send command
        if(currentKey == 13){
            processPromptInput($("#prompt").val());
            promptHistoryLocation = 0;
        }

        // up arrow - cycle through history
        if(currentKey === 38){
            if(promptHistory.length !== 0){
                if(promptHistoryLocation < promptHistory.length){
                    promptHistoryLocation++;
                    $("#prompt").val(promptHistory[promptHistory.length - promptHistoryLocation]);
                }
                else{
                    movePromptCursorToEnd();
                }
            }
        }

        // down arrow - cycle through history
        if(currentKey === 40){
            if(promptHistory.length !== 0 && promptHistoryLocation > 0){
                promptHistoryLocation--;
                $("#prompt").val(promptHistory[promptHistory.length - promptHistoryLocation]);   
            }
        }
    });

    $("#prompt").keypress(function(event){
        // prevent backtick's in prompt
        if(event.charCode === 96){
            return false;
        }
    });
});

// Shrinks header on scroll down.
$(function(){
  $('#bannerBar').data('size','big');
});

$(window).resize(function() {
    determineScrollLocation();
});

$(window).scroll(function() {
    determineScrollLocation();
});

//Hover menu
function showMenuHover(){
    document.getElementById('menu-items').style.display = 'block';
}
function hideMenuHover(){
    document.getElementById('menu-items').style.display = 'none';
}

function showProjectString(type, proj){
    if($(window).width() > mobileCutoffWidth) { // Don't show string on mobile.
        document.getElementById('slide-' + type + '-' + proj).style.display = 'inline-block';
    }
}

function hideProjectString(type, proj){
    if($(window).width() > mobileCutoffWidth) { // Don't show string on mobile.
        document.getElementById('slide-' + type + '-' + proj).style.display = 'none';
    }
}

function determineScrollLocation() {
    if(hasScrollBar()){
        mobileCutoffWidth = 789;
    }
    else{
        mobileCutoffWidth = 806;
    }

    if ($(window).scrollTop() > 0) {
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

function processPromptInput(input){
    var sanitizedInput = input.toLowerCase();
    var parts = sanitizedInput.split(' ');

    $("#prompt").val('');
    promptHistory.push(input);

    switch(parts[0]){
        case "cd": {
            switch(parts[1]){
                case "resume":
                  showSection('my-resume'); break;
                case "builds":
                  showSection('my-builds'); break;
                case "projects":
                    showSection('my-projects'); break;
                case "contact":
                    showSection('contact-me'); break;
                default:
                    showSection('about-me'); break;
            }
            break;
        }
        case "history": {
            window.alert(promptHistory);
            break;
        }
        case "echo": {
            window.alert(input.substring(input.indexOf(' ') + 1));
            break;
        }
        default:
            break;
    }
}

function movePromptCursorToEnd(){
    var promptTextbox = document.getElementById("prompt");
    var promptLength = promptTextbox.value.length;

    promptTextbox.focus();
    promptTextbox.setSelectionRange(promptLength, promptLength);
}
