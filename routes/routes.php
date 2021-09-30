<?php
use Pecee\SimpleRouter\SimpleRouter as Router;

Router::get('/', function() {
    $page = array(
        "space" => "frontpage",
        "subtitle" => "- Immohaie stoppen!"
    );
    include __DIR__ . "/../templates/home.php";
});