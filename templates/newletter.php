<?php
if (!isset($_GET["email"])) {
    header("Location: /");
    exit;
}
include __DIR__ . "/partials/header.php";
use GuzzleHttp\Client;
use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
$email = $_GET["email"];
$client = new Client();
$response = $client->request('POST', 'https://n8n.victorinus.ch/webhook/82104996-124c-4b39-b946-8d44c8cd88ab', [
    'form_params' => [
        'email' => $email,
    ]
]);


$log = new Logger('subscriber');
$log->pushHandler(new StreamHandler(__DIR__ . "/../logs/" . date("Y-m-d") . ".log", Level::Warning));
$log->warning("New subscriber: " . $email);
?>

<div class="pageheroine">
    <div class="heroine-img" style="background-image:url('/img/heroines/fahne.jpg'); filter: none;"></div>
</div>

<div class="paper-container mdcont">
    <div class="paper" style="text-align: center">
        <h2 class="paper-title">Danke für dein Interesse!</h2>
        <p class="lead">Wir haben dein Abonnement von unserem Newsletter hinterlegt und und du erhältst nun weiterhin Neuigkeiten zur Wohnpolitik und weiteren Themen der SP Zürich.</p>
    </div>
</div>


<script>
$("<link/>", {
   rel: "stylesheet",
   type: "text/css",
   href: "/style/pages/page.css",
}).appendTo("head");
</script>
<?php
include __DIR__ . "/partials/bottombar.php";
include __DIR__ . "/partials/footer.php";
?>