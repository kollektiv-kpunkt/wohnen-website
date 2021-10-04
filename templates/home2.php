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
        <div class="chart">
            <canvas id="chart1"></canvas>
        </div>
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
        <div class="chart">
            <canvas id="chart2"></canvas>
        </div>
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
        <div class="chart">
            <canvas id="chart3"></canvas>
        </div>
        <p class="chartlabel">Aktienkurse von <span style="color: #1f1f8f">Allreal</span>, <span style="color: red">PSP</span> und <span style="color: purple">mobimo</span> indexiert am Stand vom August 2010.<br>
        Quelle: SWX SIX Swiss Exchange</p>
    </div>

</section>

<section class="home-section">
    <div class="section-heroine section4">
        <div class="section-title-cont">
            <h1>FDP und SVP kämpfen im Nationalrat für noch höhere Mieten</h1>
        </div>
        <div class="section-heroine-overlay"></div>
        <img src="/img/sections/1.jpg" class="section-heroine-bg">
    </div>

    <div class="section-text-cont smcont">
        <p>Die rechtskonservativen Parteien wollen ihren Freunden in den Verwaltungsräten der Immobilienkonzerne noch höhere Renditen zuschaufeln: Auf ihre Forderungen berät das Parlament nun verschiedene Gesetzesänderungen, die die Rechte der Mieter*innen weiter einschränken und noch obszönere Mieten erlauben.</p>
        <div id="people-grid">
            <div class="person">
                <div class="person-img-container">
                    <img src="/img/personen/albert_leiser.jpg" alt="Albert Leiser">
                </div>
                <p class="person-content text_small">
                    <b>Albert Leiser (FDP)</b><br>
                    ehem. Verwaltungsrat von Allreal<br>
                    Vergütung: CHF 80'000
                </p>
            </div>
            <div class="person">
                <div class="person-img-container">
                    <img src="/img/personen/peter_spuhler.jpg" alt="Peter Spuhler">
                </div>
                <p class="person-content text_small">
                    <b>Peter Spuhler (SVP)</b><br>
                    Verwaltungsrat von Allreal<br>
                    Vergütung: CHF 80'000
                </p>
            </div>
            <div class="person">
                <div class="person-img-container">
                    <img src="/img/personen/georges_theiler.jpg" alt="Albert Leiser">
                </div>
                <p class="person-content text_small">
                    <b>Georges Theiler (FDP)</b><br>
                    ehem. Verwaltungsratspräsident von mobimo<br>
                    Vergütung: CHF 361’000
                </p>
            </div>
        </div>
    </div>

</section>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="/js/apps/charts.js"></script>

<?php
include __DIR__ . "/partials/footer.php";
?>