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
