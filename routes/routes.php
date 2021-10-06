<?php
use Pecee\SimpleRouter\SimpleRouter as Router;

Router::get('/', function() {
    $page = array(
        "space" => "frontpage",
        "subtitle" => "So stoppen wir die Mietexplosion in Zürich"
    );
    include __DIR__ . "/../templates/home.php";
});

Router::get('/initiative', function() {
    $page = array(
        "space" => "page",
        "subtitle" => "Jetzt Wohn-Offensive unterstützen!"
    );
    include __DIR__ . "/../templates/initiative/initiative.php";
});

Router::get('/initiative-1', function() {
    $page = array(
        "space" => "page",
        "subtitle" => "Jetzt Wohn-Offensive unterstützen!"
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