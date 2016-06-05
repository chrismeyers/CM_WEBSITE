var mobileCutoffWidth, about, resume, builds, projects, contact, specificPage;
var promptHistory = new Array();
var sectionTranslations = {};

init();

function init(){
    about    = document.getElementById('about-me');
    resume   = document.getElementById('my-resume');
    builds   = document.getElementById('my-builds');
    projects = document.getElementById('my-projects');
    contact  = document.getElementById('contact-me');
    specificPage = window.location.hash;

    promptHistoryLocation = 0;

    sectionTranslations["about"]    = "about-me";
    sectionTranslations["resume"]   = "my-resume";
    sectionTranslations["builds"]   = "my-builds";
    sectionTranslations["projects"] = "my-projects";
    sectionTranslations["contact"]  = "contact-me";
}

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
        showSection(sectionTranslations[specificPage.substr(1)]);
    }
});

// Handles browser back and forward.
window.onhashchange = function(){
    showSection(sectionTranslations[window.location.hash.substr(1)]);
};

// Displays new section.
function showSection(section){
    var toShow = document.getElementById(section);
    hideAll();
    toShow.style.display = 'block';

    deselectAllSectionTitles();
    selectSectionTitle(section);

    topOfPage();
}

function hideAll(){
    about.style.display    = 'none';
    resume.style.display   = 'none';
    builds.style.display   = 'none';
    projects.style.display = 'none';
    contact.style.display  = 'none';
}

function deleteCookie(name){
    document.cookie = name + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
}

function topOfPage(){
    window.scrollTo(0, 0);
}

function translateToHash(value){
    if(value.substring(0, 3) === "my-"){
        return value.substring(3);
    }
    else if(value.substring(value.length - 3) === "-me"){
        return value.substring(0, value.length - 3);
    }
}

function selectSectionTitle(section){
    $('.sectionTitle-' + translateToHash(section)).css('border-bottom', 'solid 5px #5bb75b');
    $('.sectionTitle-' + translateToHash(section)).css('box-sizing', 'border-box');
}

function deselectAllSectionTitles(){
    for(var section in sectionTranslations){
        $('.sectionTitle-' + section).css('border-bottom', '');
        $('.sectionTitle-' + section).css('box-sizing', '');
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
            if(isIdShown('prompt-div')){
                $('#prompt-div').css('display', 'none');
            }
            else{
                $('#prompt-div').css('display', 'flex');
                movePromptCursorToEnd();
            }
        }
    });

    // Prompt scope key events (when prompt is in focus)
    $("#prompt").keyup(function(event){
        var currentKey = event.keyCode;

        switch(currentKey){
            case 13: { // enter - send command
                processPromptInput($("#prompt").val());
                promptHistoryLocation = 0;
                break;
            }
            case 38: { // up arrow - cycle through history
                if(promptHistory.length !== 0){
                    if(promptHistoryLocation < promptHistory.length){
                        promptHistoryLocation++;
                        $("#prompt").val(promptHistory[promptHistory.length - promptHistoryLocation]);
                    }
                    else{
                        movePromptCursorToEnd();
                    }
                }
                break;
            }
            case 40: { // down arrow - cycle through history
                if(promptHistory.length !== 0 && promptHistoryLocation > 0){
                    promptHistoryLocation--;
                    $("#prompt").val(promptHistory[promptHistory.length - promptHistoryLocation]);   
                }
                break;
            }
            default:
                break;
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
    var sanitizedInput = input.trim().toLowerCase().replace(/ +(?= )/g,'');
    if(sanitizedInput === ""){
        $("#prompt").val("");
        return;
    }

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
            showHistory(true);
            return;
        }
        case "echo": {
            window.alert(input.substring(input.indexOf(' ') + 1));
            break;
        }
        case "clear": {
            $('#prompt-textarea').empty();
            promptHistory = [];
            return;
        }
        case "close": {
            if(isIdShown('prompt-textarea')){
                hidePromptTextarea();
            }
            break;
        }
        case "help":
        case "?":
        case "man": {
            if(!isIdShown('prompt-textarea')){
                showPromptTextarea();
            }
            printHelpMessage();
            return;
        }
        default:
            return;
    }

    if(isIdShown('prompt-textarea')){
        showHistory(true);
    }
}

function movePromptCursorToEnd(){
    var promptTextbox = document.getElementById("prompt");
    var promptLength = promptTextbox.value.length;

    promptTextbox.focus();
    promptTextbox.setSelectionRange(promptLength, promptLength);
}

function showHistory(fromText){
    $('#prompt-textarea').empty();

    if(isIdShown('prompt-textarea') && !fromText){
        hidePromptTextarea();
    }
    else{
        //console.log("button press");
        showPromptTextarea();
    }

    for(i = 0; i < promptHistory.length; i++){
        //console.log(promptHistory[i]);
        $('#prompt-textarea').append(promptHistory[i]);
        if(i !== (promptHistory.length - 1)){
            $('#prompt-textarea').append("\n");
        }
    }
    //console.log("\n");
    $('#prompt-textarea').scrollTop($('#prompt-textarea')[0].scrollHeight);

    if(!fromText){
        movePromptCursorToEnd();
    }
}

function isIdShown(id){
   return (getComputedStyle(document.getElementById(id)).getPropertyValue("display") !== "none");
}

function showPromptTextarea(){
    $('#prompt-textarea').css('display', 'flex');
    $('#prompt-textarea-btn').html("&#9660;"); // down symbol
}

function hidePromptTextarea(){
    $('#prompt-textarea').css('display', 'none');
    $('#prompt-textarea-btn').html("&#9650;"); // up symbol
}

function printHelpMessage(){
    $('#prompt-textarea').empty();

    var msg = "===== Command Prompt Help =====                 \n";
    msg +=    "The following commands are available:           \n";
    msg +=    "  cd [section] - displays the specified section.\n";
    msg +=    "  history - displays the prompt textarea.       \n";
    msg +=    "  echo [text] - raises alert window with text.  \n";
    msg +=    "  clear - clears prompt textarea and history.   \n";
    msg +=    "  close - lowers the prompt textarea, if shown. \n";
    msg +=    "  help - displays this message.                 ";

    $('#prompt-textarea').append(msg);
    $('#prompt-textarea').scrollTop(0);
}
