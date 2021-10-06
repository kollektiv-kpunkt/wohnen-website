<?php
include __DIR__ . "/../partials/header.php";
?>

<div class="pageheroine">
    <div class="heroine-img" style="background-image:url('/img/heroines/fahne.jpg'); filter: none; background-position-x: 6%"></div>
</div>

<div class="paper-container mdcont">
    <div class="paper">
        <h2 class="paper-title">Jetzt kostenlos Fahne bestellen!</h2>
        <p class="lead">Wir wollen in ganz Zürich sichtbar machen, dass es mehr bezahlbare Wohnungen braucht. Bestelle jetzt kostenlos eine Fahne für den Balkon oder einen Kleber für die Trinkflasche:</p>

        <div data-prefill-inherit="1" data-paperform-id="dra0kwie" class="paperform-container"></div><script>(function() {var script = document.createElement('script'); script.src = "https://paperform.co/__embed.min.js"; document.body.appendChild(script); })()</script>
        
    </div>
</div>


<script>
$("<link/>", {
   rel: "stylesheet",
   type: "text/css",
   href: "/style/pages/page.css",
}).appendTo("head");
</script>
<?php
include __DIR__ . "/../partials/bottombar.php";
include __DIR__ . "/../partials/footer.php";
?>