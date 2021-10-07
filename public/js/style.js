var styleSets = function styleSets() {
    var vh = window.innerHeight * 0.01;
    var vw = window.innerWidth * 0.01;
    document.documentElement.style.setProperty("--vh", `${vh}px`);
    document.documentElement.style.setProperty("--vw", `${vw}px`);

    if (window.innerWidth > 1920) {
        var lcpad = (window.innerWidth - 1728) / 2;
    }
    else {
        var lcpad = 5 * vw;
    }
    document.documentElement.style.setProperty("--lcpad", `${lcpad}px`);    
    
    if (window.innerWidth > 650) {
        var scpad = (window.innerWidth - 585) / 2;
    }
    else {
        var scpad = 5 * vw;
    }
    document.documentElement.style.setProperty("--scpad", `${scpad}px`);    
    
    if (window.innerWidth > 834) {
        var mcpad = (window.innerWidth - 793) / 2;
    }
    else {
        var mcpad = 2.5 * vw;
    }
    document.documentElement.style.setProperty("--mcpad", `${mcpad}px`);    
    
    document.documentElement.style.setProperty("--navHeight", `${$("#nav-bar-cont").height()}px`);    
}

window.addEventListener("load", styleSets, false);
$(document).ready(styleSets);
window.addEventListener("resize", styleSets, false);


var setMenuitem = function setMenuitem() {
    $(`.menu-item[href="${window.location.pathname}"]`).addClass("current-item")
}
window.addEventListener("DOMContentLoaded", setMenuitem, false);

function hasWebP() {
    var rv = $.Deferred();
    var img = new Image();
    img.onload = function() { rv.resolve(); };
    img.onerror = function() { rv.reject(); };
    img.src = 'http://www.gstatic.com/webp/gallery/1.webp';
    return rv.promise();
}

hasWebP().then(function() {
}, function() {
    console.log("I don't support WebP")
});