<?php

require_once __DIR__ . "/../vendor/matomo/matomo-php-tracker/MatomoTracker.php";

global $config;

$matomoSiteId = 24;                  // Site ID
$matomoUrl = "https://analytics.timothyoesch.ch/"; // Your matomo URL
$matomoToken = $config["matomoToken"];                  // Your authentication token

// Matomo object
$matomoTracker = new MatomoTracker((int)$matomoSiteId, $matomoUrl);
$matomoTracker->setTokenAuth($matomoToken);

$matomoTracker->doTrackEvent("Share", $params["type"], $_SERVER['REQUEST_URI']);

if ($params["type"] == "WA") {
    $link = "https://api.whatsapp.com/send?text={$params["text"]}";
} else if ($params["type"] == "tele") {
    $link = "https://t.me/share/url?url={$params["url"]}&text={$params["text"]}";
}

header("Location: {$link}");

?>