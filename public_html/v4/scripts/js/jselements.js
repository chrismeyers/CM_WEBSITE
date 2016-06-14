/* 
    Document   : jselements.js
    Created on : June 13, 2016
    Author     : Chris Meyers
    Description:
        General Javascript functionality.
*/

var mobileCutoffWidth, about, resume, builds, projects, contact, specificPage;
var promptHistory = new Array();
var sectionTranslations = {};

init();

function init() {
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

// Displays new section.
function showSection(section) {
    var toShow = document.getElementById(section);
    hideAll();
    toShow.style.display = 'block';

    deselectAllSectionTitles();
    selectSectionTitle(section);

    topOfPage();
}

function hideAll() {
    about.style.display    = 'none';
    resume.style.display   = 'none';
    builds.style.display   = 'none';
    projects.style.display = 'none';
    contact.style.display  = 'none';
}

function deleteCookie(name) {
    document.cookie = name + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
}

function topOfPage() {
    window.scrollTo(0, 0);
}

function translateToHash(value) {
    if(value.substring(0, 3) === "my-") {
        return value.substring(3);
    }
    else if(value.substring(value.length - 3) === "-me") {
        return value.substring(0, value.length - 3);
    }
}

function showProjectString(type, proj) {
    if($(window).width() > mobileCutoffWidth) { // Don't show string on mobile.
        document.getElementById('slide-' + type + '-' + proj).style.display = 'inline-block';
    }
}

function hideProjectString(type, proj) {
    if($(window).width() > mobileCutoffWidth) { // Don't show string on mobile.
        document.getElementById('slide-' + type + '-' + proj).style.display = 'none';
    }
}

function isIdShown(id) {
   return (getComputedStyle(document.getElementById(id)).getPropertyValue("display") !== "none");
}
