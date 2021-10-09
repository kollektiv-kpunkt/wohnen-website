<?php
include(__DIR__ . "/partials/header.php");
?>

<div id="share-container">
    <div id="share-content">
        <h1>Danke für deine Unterstützung!</h1>
        <p>Du wirst gleich weitergeleitet</p>
    </div>
    <div id="share-overlay"></div>
</div>


<script>

var sectionColors = [
    "#C51E1E",
    "#088043",
    "#00466D",
    "#7E0000",
    "#7a017b",
    "#008d91"
]

$("#share-container").css("--sectionColor", sectionColors[Math.floor(Math.random()*sectionColors.length)])

let i = 0
setInterval(() => {
    if (i < 3) {
        $("#share-content p").append(".")
    }
    i++
}, 1000);

<?php

if ($params["type"] == "WA") {
    $link = "https://api.whatsapp.com/send?text={$params["text"]}";
} else if ($params["type"] == "tele") {
    $link = "https://t.me/share/url?url={$params["url"]}&text={$params["text"]}";
}

?>


var redirectTimeout = setTimeout(() => {
    window.location.href="<?= $link ?>"
}, 4000);

document.addEventListener("keydown", function (event) {
    if (event.code === "Escape") {
        clearTimeout(redirectTimeout)
        console.log("Redirect cancelled")
    }
});

setTimeout(() => {
    _paq.push(['trackEvent', 'Share', '<?= $params["type"] ?>', '<?= $_SERVER["REQUEST_URI"] ?>']);
}, 3000);

</script>


<script>
$("<link/>", {
   rel: "stylesheet",
   type: "text/css",
   href: "/style/pages/share.css",
}).appendTo("head");
</script>
<?php
include(__DIR__ . "/partials/footer.php");
?>