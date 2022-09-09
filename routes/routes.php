<?php
use Pecee\SimpleRouter\SimpleRouter as Router;

Router::get('/', function() {
    $page = array(
        "space" => "frontpage",
        "subtitle" => "Jetzt Initiative unterschreiben!"
    );
    include __DIR__ . "/../templates/home.php";
});

Router::get('/initiative', function() {
    $page = array(
        "space" => "page",
        "subtitle" => "Jetzt Initiative unterschreiben!"
    );
    include __DIR__ . "/../templates/initiative/initiative.php";
});

Router::get('/initiative-1', function() {
    $page = array(
        "space" => "page",
        "subtitle" => "Jetzt Initiative unterschreiben!"
    );
    include __DIR__ . "/../templates/initiative/initiative-1.php";
});


Router::get('/fahne', function() {
    $page = array(
        "space" => "page",
        "subtitle" => "Jetzt kostenlos Fahne bestellen!"
    );
    include __DIR__ . "/../templates/fahne/fahne.php";
});

Router::get('/fahne-1', function() {
    $page = array(
        "space" => "page",
        "subtitle" => "Jetzt kostenlos Fahne bestellen!"
    );
    include __DIR__ . "/../templates/fahne/fahne-1.php";
});

Router::get('/fahne-2', function() {
    $page = array(
        "space" => "page",
        "subtitle" => "Jetzt kostenlos Fahne bestellen!"
    );
    include __DIR__ . "/../templates/fahne/fahne-2.php";
});


Router::get('/spenden', function() {
    $page = array(
        "space" => "page",
        "subtitle" => "Mietexplosion stoppen - Jetzt spenden!"
    );
    include __DIR__ . "/../templates/spenden.php";
});

Router::get('/datenschutz', function() {
    $page = array(
        "space" => "page",
        "subtitle" => "Mietexplosion stoppen - Datenschutz"
    );
    include __DIR__ . "/../templates/datenschutz/datenschutz.php";
});

Router::get('/datenschutz/impressum', function() {
    $page = array(
        "space" => "page",
        "subtitle" => "Mietexplosion stoppen - Impressum"
    );
    include __DIR__ . "/../templates/datenschutz/impressum.php";
});



// SHARE ROUTES

Router::get('/weiterleiten', function() {
    $page = array(
        "space" => "share",
        "subtitle" => "Jetzt teilen!"
    );

    $params = array(
        "url" => urlencode("https://mietexplosion-stoppen.ch/initiative#mitmachen"),
        "text" => urlencode("Die Mieten im Kanton Zürich sind in den letzten 20 Jahren um fast 50% gestiegen. Darum habe ich soeben die neue Initiative für mehr bezahlbare Wohnungen unterschrieben. Machst Du auch mit? www.mietexplosion-stoppen.ch/initiative#mitmachen\nMerci!"),
        "type" => "WA"
    );
    include __DIR__ . "/../interfaces/shareInterface.php";
});


Router::get('/teilen', function() {
    $page = array(
        "space" => "share",
        "subtitle" => "Jetzt teilen!"
    );

    $params = array(
        "url" => urlencode("https://mietexplosion-stoppen.ch/initiative#mitmachen"),
        "text" => urlencode("Die Mieten im Kanton Zürich sind in den letzten 20 Jahren um fast 50% gestiegen. Darum habe ich soeben die neue Initiative für mehr bezahlbare Wohnungen unterschrieben. Machst Du auch mit? www.mietexplosion-stoppen.ch/initiative#mitmachen\nMerci!"),
        "type" => "tele"
    );
    include __DIR__ . "/../interfaces/shareInterface.php";
});

Router::get('/fahne-weiterleiten', function() {
    $page = array(
        "space" => "share",
        "subtitle" => "Jetzt teilen!"
    );

    $params = array(
        "url" => urlencode("https://mietexplosion-stoppen.ch/fahne"),
        "text" => urlencode("Die Mieten im Kanton Zürich sind in den letzten 20 Jahren um fast 50% gestiegen. Bestellst Du auch kostenlos eine Fahne, um zu zeigen, dass es endlich mehr bezahlbare Wohnungen braucht? www.mietexplosion-stoppen.ch/fahne\nMerci!"),
        "type" => "WA"
    );
    include __DIR__ . "/../interfaces/shareInterface.php";
});

Router::get('/fahne-teilen', function() {
    $page = array(
        "space" => "share",
        "subtitle" => "Jetzt teilen!"
    );

    $params = array(
        "url" => urlencode("https://mietexplosion-stoppen.ch/fahne"),
        "text" => urlencode("Die Mieten im Kanton Zürich sind in den letzten 20 Jahren um fast 50% gestiegen. Bestellst Du auch kostenlos eine Fahne, um zu zeigen, dass es endlich mehr bezahlbare Wohnungen braucht? www.mietexplosion-stoppen.ch/fahne\nMerci!"),
        "type" => "tele"
    );
    include __DIR__ . "/../interfaces/shareInterface.php";
});