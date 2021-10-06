<?php
global $config;
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$actual_uri = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'];
(isset($page["og"])) ? $og_url = $page["og"] : $og_url = "OG_fahne1.jpg";
?>
<!DOCTYPE html>
<html lang="<?= $config["lang"] ?>" class="<?= $page["space"] ?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="/img/favicon/safari-pinned-tab.svg" color="#c51e1e">
    <link rel="shortcut icon" href="/img/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#603cba">
    <meta name="msapplication-config" content="/img/favicon/browserconfig.xml">
    <meta name="theme-color" content="#c51e1e">


    <!-- Metatags -->
    <!-- Primary Meta Tags -->
    <title><?= $page["subtitle"] ?></title>
    <meta name="title" content="<?= $page["subtitle"] ?>">
    <meta name="description" content="Wohnen in Zürich wird immer teurer. Im Vergleich mit vor 20 Jahren haben sich die Mieten fast verdoppelt. Wohnungen für 5'700 CHF an der Europaallee zeigen, in welche Richtung sich der Wohnungsmarkt bewegt. Geht diese Entwicklung ungebremst weiter, ist Zürich irgendwann nur noch für die Banken- und Software-Elite bezahlbar.">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= $actual_link ?>">
    <meta property="og:title" content="<?= $page["subtitle"] ?>">
    <meta property="og:description" content="Wohnen in Zürich wird immer teurer. Im Vergleich mit vor 20 Jahren haben sich die Mieten fast verdoppelt. Wohnungen für 5'700 CHF an der Europaallee zeigen, in welche Richtung sich der Wohnungsmarkt bewegt. Geht diese Entwicklung ungebremst weiter, ist Zürich irgendwann nur noch für die Banken- und Software-Elite bezahlbar.">
    <meta property="og:image" content="<?= $actual_uri ?>/img/og/<?= $og_url ?>">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?= $actual_link ?>">
    <meta property="twitter:title" content="<?= $page["subtitle"] ?>">
    <meta property="twitter:description" content="Wohnen in Zürich wird immer teurer. Im Vergleich mit vor 20 Jahren haben sich die Mieten fast verdoppelt. Wohnungen für 5'700 CHF an der Europaallee zeigen, in welche Richtung sich der Wohnungsmarkt bewegt. Geht diese Entwicklung ungebremst weiter, ist Zürich irgendwann nur noch für die Banken- und Software-Elite bezahlbar.">
    <meta property="twitter:image" content="<?= $actual_uri ?>/img/og/<?= $og_url ?>">

    <!------- STYLE ------->


    <link rel="stylesheet" type="text/css" href="/style/style.css?ver=1.0" />
    
    <!------- SCRIPT ------->
    <!-- lib -->
    <script src="/lib/jquery/jquery-3.6.0.min.js"></script>

    <script src="/js/style.js"></script>
</head>
<body>

<nav id="nav-bar-cont">
    <div id="nav-bar-content">
        <a href="/" style="display: flex;">
            <img src="/img/logo-mob.svg" alt="Logo" id="logo-img">
        </a>
        <div id="nav-menu">
            <a class="menu-item" href="/">Die Mieten explodieren</a>
            <a class="menu-item" href="/initiative">Initiative</a>
            <a class="menu-item" href="/fahne">Fahne bestellen</a>
            <a class="menu-item" href="/spenden">Spenden</a>
        </div>
    </div>
    
    <div id="nav-bar-content-mob">
        <a href="/" style="display: flex;">
            <img src="/img/logo-mob.svg" alt="Logo" id="logo-img-mob">
        </a>
        <div id="mobnav-menubutton">
            <span>Menu</span>
            <div id="menu-tofuburger">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
</nav>
<div id="mobile-nav-menu">
    <a class="mobile-menu-item" href="/initiative">Initiative</a>
    <a class="mobile-menu-item" href="/fahne">Fahne bestellen</a>
    <a class="mobile-menu-item" href="/spenden">Spenden</a>
</div>

<div id="main-content">