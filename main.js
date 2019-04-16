//Creates an array of every link on the page
var aTag = document.getElementsByTagName("a");
var highlight = false;


function addHoverClass (element) {
    element.classList.add("hoverNavLink");
}

function checkLinkID(link) {
    if (link.id == "homeNavLink" || link.id == "programmingNavLink" || link.id == "contentCreationNavLink" 
        || link.id == "fitnessNavLink" || link.id == "eventCoordinationNavLink" || link.id == "contactNavLink")
    {
        return true;
    }
    else {
        return false;
    }
}

function checkForHighlight (link) {
    var isNavLink = checkLinkID(link);
    isNavLink==true?highlight=true:highlight=false;
    return highlight;
}

function hightlight (link) {
    if(checkForHighlight(link) == true) {
        addHoverClass(link);
    }
}

$(document).ready(function() {
    for(i=0; i < aTag.length; i++){
        aTag[i].addEventListener("mouseover", hightlight(aTag[i]));
    }
});
