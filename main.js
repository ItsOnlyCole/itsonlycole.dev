/*
    main.js
    Created by: Cole Hemp
    Last Modified: December 12th, 2018
*/

//Creates an array of every link on the page
var aTag = document.getElementsByTagName("a"); //Requirement 14: Use of DOM. 3/3
var highlight = false;


function addHoverClass (element) {
    element.classList.add("hoverNavLink");
}

function checkLinkID(link) {
    if (link.id == "homeNavLink" || link.id == "programmingNavLink" || link.id == "contentCreationNavLink" 
        || link.id == "fitnessNavLink" || link.id == "eventCoordinationNavLink" || link.id == "contactNavLink") //Requirement 10: The use of a logical operator
    {
        return true;
    }
    else {
        return false;
    }
}

function checkForHighlight (link) {
    var isNavLink = checkLinkID(link);
    isNavLink==true?highlight=true:highlight=false; //Requirement 9: The use of a ternary or conditional operator.
    return highlight;
}

function hightlight (link) {
    if(checkForHighlight(link) == true) {
        addHoverClass(link);
    }
}

$(document).ready(function() {
    for(i=0; i < aTag.length; i++){
        aTag[i].addEventListener("mouseover", hightlight(aTag[i]));  //Requirement 8: An example of changing the contents of a div when an event occurs
    }
});
