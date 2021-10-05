<?php
include __DIR__ . "/partials/header.php";
?>

<div class="pageheroine">
    <img src="/img/heroines/fahne.jpg" alt="Heroine Bild" class="heroine-img">
    <div class="heroine-overlay"></div>
</div>

<div class="paper-container mdcont">
    <div class="paper">
        <h2 class="paper-title">Initiative für eine Wohn-Offensive unterstützen</h2>
        <p class="lead">Wir müssen gemeinsam dafür sorgen, dass nicht bald halb Zürich den Immobilienkonzernen gehört. Mit unserer neuen Initiative fordern wir: Mehr bezahlbare Wohnungen, weniger Immobilienkonzerne!</p>
        <div class="testimonial">
            <img src="/img/personen/jacqueline_badran.jpeg" alt="Jacqueline Badran" class="testimonial-img">
            <div class="testimonial-quote-outer">
                <p class="testimonial-quote">
                    «Wegen den Immobilienkonzernen haben sich die Mieten fast verdoppelt. Unterstütze jetzt unsere Initiative!»
                </p>
                <p class="testimonial-description">
                    <b style="color: var(--red)">Jacqueline Badran</b><br>
                    Nationalrätin SP Kanton Zürich
                </p>
            </div>
        </div>
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
include __DIR__ . "/partials/footer.php";
?>