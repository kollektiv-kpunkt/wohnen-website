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
    <!-- lib -->
    <link rel="stylesheet" type="text/css" href="/lib/chartist/plugins/chartist-plugin-tooltip.css" />


    <link rel="stylesheet" type="text/css" href="/style/style.css?ver=1.0" />
    
    <!------- SCRIPT ------->
    <!-- lib -->
    <script src="/lib/jquery/jquery-3.6.0.min.js"></script>

    <script src="/js/style.js"></script>
</head>
<body>

<nav id="nav-bar-cont">
    <div id="nav-bar-content">
        <img src="/img/logo-mob.svg" alt="Logo" id="logo-img">
        <div id="nav-menu">
            <a class="menu-item current-item" href="/">Wohnen in Zürich</a>
            <a class="menu-item" href="/mitmachen">Mitmachen</a>
            <a class="menu-item" href="/spenden">Spenden</a>
        </div>
    </div>
    
    <div id="nav-bar-content-mob">
        <img src="/img/logo-mob.svg" alt="Logo" id="logo-img-mob">
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

<div id="main-content">