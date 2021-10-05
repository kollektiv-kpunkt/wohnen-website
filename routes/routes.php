<?php
use Pecee\SimpleRouter\SimpleRouter as Router;

Router::get('/', function() {
    $page = array(
        "space" => "frontpage",
        "subtitle" => "- Immohaie stoppen!"
    );
    include __DIR__ . "/../templates/home.php";
});

Router::get('/fahne', function() {
    $page = array(
        "space" => "page",
        "subtitle" => "- Fahne bestellen"
    );
    include __DIR__ . "/../templates/fahne.php";
});