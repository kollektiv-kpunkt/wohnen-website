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
}

window.addEventListener("load", styleSets, false);
$(document).ready(styleSets);
window.addEventListener("resize", styleSets, false);