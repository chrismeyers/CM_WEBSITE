$(document).ready(function() {
    $(".fancybox").fancybox({
        openEffect	: 'none',
        closeEffect	: 'none'
    });
});
            
var about = document.getElementById('about-me');
var builds = document.getElementById('my-builds');
var projects = document.getElementById('my-projects');
var contact = document.getElementById('contact-me');
var specificPage = window.location.hash;

// Handles browser back and forward.
window.onhashchange = function(){
    showSection(translateHash(window.location.hash.substr(1)));
};

// Reads hash from url and changes page, defaults to about.
if(specificPage === null || specificPage === ''){
    showSection('about-me');
}
else{
    showSection(translateHash(specificPage.substr(1)));
}

// Displays new section.
function showSection(section){
    var toShow = document.getElementById(section);
    hideAll();
    toShow.style.display = 'block';
    topOfPage();
}

function hideAll(){
    about.style.display = 'none';
    builds.style.display = 'none';
    projects.style.display = 'none';
    contact.style.display = 'none';
}

function topOfPage(){
    window.scrollTo(0, 0);
}

function translateHash(value){
    switch(value){
        case("about"):
            return "about-me";
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

//Click menu
$(function() {
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

    $(document).keyup(function(event) {
        var currentKey = event.keyCode;

        //closes menu when esc is pressed
        if(currentKey === 27){
            $("#menu-click").siblings('#menu-items').slideUp("fast");
        }
    });
});

//Hover menu
function showMenuHover(){
    document.getElementById('menu-items').style.display = 'block';
}
function hideMenuHover(){
    document.getElementById('menu-items').style.display = 'none';
}

function showProjectString(type, proj){
    if($(window).width() > 789) { // Don't show string on mobile.
        document.getElementById('slide-' + type + '-' + proj).style.display = 'inline-block';
    }
}

function hideProjectString(type, proj){
    if($(window).width() > 789) { // Don't show string on mobile.
        document.getElementById('slide-' + type + '-' + proj).style.display = 'none';
    }
}

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

function determineScrollLocation() {
    if ($(window).scrollTop() > 0) {
        if($(window).width() <= 789) {
            setupMobile();
        }
        else if ($('#bannerBar').data('size') === 'big') { 
            setupSmall();
        }
    }
    else {
        if($(window).width() <= 789) {
            setupMobile();
        }
        else if ($('#bannerBar').data('size') === 'small') {
            setupBig();
        }
    }
}

function setupBig() {
    $('.banner-img img').css('display', 'none');

    $('#bannerBar').data('size', 'big');

    $('#bannerBar').stop().animate({
        height: '90px'
    }, 400);

    $('.sectionTitle-about, .sectionTitle-builds, .sectionTitle-projects, .sectionTitle-contact, #sectionTitle-menu, .banner-img').stop().animate({
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

    $('.sectionTitle-about, .sectionTitle-builds, .sectionTitle-projects, .sectionTitle-contact, #sectionTitle-menu, .banner-img').stop().animate({
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
