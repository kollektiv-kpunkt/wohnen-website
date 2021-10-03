<?php
include __DIR__ . "/partials/header.php";
?>

<section class="home-section">
    <div class="section-heroine section1">
        <div class="section-title-cont">
            <h1>Darum kämpft die SP für mehr bezahlbare Wohnungen</h1>
        </div>
        <div class="section-heroine-overlay"></div>
        <img src="/img/sections/1.jpg" class="section-heroine-bg">
    </div>

    <div class="section-text-cont smcont">
        <p>Wohnen in Zürich wird immer teurer. Im Vergleich mit vor 20 Jahren haben sich die Mieten fast verdoppelt. Wohnungen für 5'700 CHF an der Europaallee zeigen, in welche Richtung sich der Wohnungsmarkt bewegt. Geht diese Entwicklung ungebremst weiter, ist Zürich irgendwann nur noch für die Banken- und Software-Elite bezahlbar.</p>
        <h4 class="charttitle">Die Mieten in Zürich haben sich fast verdoppelt:</h4>
        <div class="chart" id="chart1"></div>
        <p class="chartlabel">Quelle: Index Angebotsmieten Stadt Zürich Wüst und Partner</p>
    </div>

</section>

<section class="home-section">
    <div class="section-heroine section2">
        <div class="section-title-cont">
            <h1>Warum werden die Wohnungen immer teurer?</h1>
        </div>
        <div class="section-heroine-overlay"></div>
        <img src="/img/sections/2.jpg" class="section-heroine-bg">
    </div>

    <div class="section-text-cont smcont">
        <p>Dass die Wohnungsmieten in den letzten Jahren immer teurer wurden, ist kein Zufall. Immer mehr Immobilienkonzerne und institutionelle Anleger kaufen in Zürich Land und Wohnungen auf. So bringen sie einen immer grösseren Anteil der Wohnungen unter ihre Kontrolle und bereichern sich auf Kosten der Bevölkerung.</p>
        <h4 class="charttitle">Immobilienkonzerne besitzen immer mehr Wohnungen</h4>
        <div class="chart" id="chart2"></div>
        <p class="chartlabel">Dargestellt ist der Anteil verschiedener Eigentumsarten indexiert am Bestand 2010. <span style="color: var(--red)">In rot der Anteil der öffentlichen Hand und Genossenschaften<span style="color: #1f1f8f"> und in blau Kapital- und andere private Gesellschaften.</span></p>
    </div>

</section>


<section class="home-section">
    <div class="section-heroine section3">
        <div class="section-title-cont">
            <h1>Wer profitiert?</h1>
        </div>
        <div class="section-heroine-overlay"></div>
        <img src="/img/sections/3.jpg" class="section-heroine-bg">
    </div>

    <div class="section-text-cont smcont">
        <p>Das Auspressen des Zürcher Wohnungsmarktes zahlt sich aus: Die Aktienkurse der Immobilienfirmen Allreal, PSP, mobimo und SPS sind trotz Finanzkrise kräftig gestiegen. Die Zürcher Mieterinnen und Mieter zahlen die Boni der Manager und die Dividenden der Aktionäre.</p>
        <h4 class="charttitle">Die Aktienkurse der grossen Immokonzerne steigen unermüdlich:</h4>
        <div class="chart" id="chart3"></div>
        <p class="chartlabel">Aktienkurse von <span style="color: #1f1f8f">Allreal</span>, <span style="color: red">PSP</span>, <span style="color: purple">SPS</span> und <span style="color: green">mobimo</span> indexiert am Stand vom August 2015.<br>
        Quelle: SWX SIX Swiss Exchange</p>
    </div>

</section>

<section class="home-section">
    <div class="section-heroine section4">
        <div class="section-title-cont">
            <h1>FDP und SVP kämpfen im Nationalrat für noch höhere Mieten</h1>
        </div>
        <div class="section-heroine-overlay"></div>
        <img src="/img/sections/3.jpg" class="section-heroine-bg">
    </div>

    <div class="section-text-cont smcont">
        <p>Die rechtskonservativen Parteien wollen ihren Freunden in den Verwaltungsräten der Immobilienkonzerne noch höhere Renditen zuschaufeln: Auf ihre Forderungen berät das Parlament nun verschiedene Gesetzesänderungen, die die Rechte der Mieter*innen weiter einschränken und noch obszönere Mieten erlauben.</p>
    </div>

</section>

<script src="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>
<script src="/lib/chartist/plugins/chartist-plugin-tooltip.js"></script>
<script src="/js/apps/charts.js"></script>

<?php
include __DIR__ . "/partials/footer.php";
?>