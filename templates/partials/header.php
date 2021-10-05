<?php
global $config;
?>
<!DOCTYPE html>
<html lang="<?= $config["lang"] ?>" class="<?= $page["space"] ?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Explodierende Mieten<?= $page["subtitle"] ?></title>

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