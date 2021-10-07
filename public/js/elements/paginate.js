
var setSections = function setSections() {
    var sections = []
    $(".home-section").each(function( index ) {
        var section = {
            "ID" : $(this).attr("id"),
            "start" : Math.floor($(this).offset().top - ($(this).height() * 0.5)),
            "end" :  Math.ceil($(this).offset().top + $(this).height() - ($(this).height() * 0.5))
        }
        sections.push(section)
    });

    localStorage.setItem("sections", JSON.stringify(sections))
}

var selectSection = function selectSection() {
    var sections = JSON.parse(localStorage.getItem("sections"))
    var scrollPosition = $(document).scrollTop()
    var currentSection = sections.find(e => e.start <= scrollPosition && e.end >= scrollPosition)
    if (currentSection.ID !== localStorage.getItem("currentSection")) {
        $(".section-link.current").removeClass("current")
        $(`.section-link[href="#${currentSection.ID}"]`).addClass("current")
        setTimeout(() => {
            $(`#${currentSection.ID} .section-container`).addClass("active")
        }, 250);
        localStorage.setItem("currentSection", currentSection.ID)
    }
}

window.addEventListener("load", selectSection, false)
window.addEventListener("scroll", selectSection, false)

window.addEventListener("DOMContentLoaded", setSections, false)
window.addEventListener("load", setSections, false)
window.addEventListener("resize", setSections, false)
window.addEventListener("scroll", setSections, false)