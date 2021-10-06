<?php
use Pecee\SimpleRouter\SimpleRouter as Router;

Router::get('/', function() {
    $page = array(
        "space" => "frontpage",
        "subtitle" => "- Immohaie stoppen!"
    );
    include __DIR__ . "/../templates/home.php";
});

Router::get('/initiative', function() {
    $page = array(
        "space" => "page",
        "subtitle" => "- Initiative unterstützen"
    );
    include __DIR__ . "/../templates/initiative/initiative.php";
});

Router::get('/initiative-1', function() {
    $page = array(
        "space" => "page",
        "subtitle" => "- Danke für Ihre Unterstützung!"
    );
    include __DIR__ . "/../templates/initiative/initiative-1.php";
});


Router::get('/fahne', function() {
    $page = array(
        "space" => "page",
        "subtitle" => "- Jetzt Fahne bestellen!"
    );
    include __DIR__ . "/../templates/fahne/fahne.php";
});

Router::get('/fahne-1', function() {
    $page = array(
        "space" => "page",
        "subtitle" => "- Jetzt Fahne bestellen!"
    );
    include __DIR__ . "/../templates/fahne/fahne-1.php";
});

Router::get('/fahne-2', function() {
    $page = array(
        "space" => "page",
        "subtitle" => "- Jetzt Fahne bestellen!"
    );
    include __DIR__ . "/../templates/fahne/fahne-2.php";
});


Router::get('/spenden', function() {
    $page = array(
        "space" => "page",
        "subtitle" => "- Jetzt spenden!"
    );
    include __DIR__ . "/../templates/spenden.php";
});