<?php
include __DIR__ . "/partials/header.php";
?>

<div class="pageheroine">
    <div class="heroine-img" style="background-image:url('/img/heroines/initiative.jpg')"></div>
    <div class="heroine-overlay"></div>
</div>

<div class="paper-container mdcont">
    <div class="paper">
        <h2 class="paper-title">Danke für Ihre Spende!</h2>

        <div id="donation-widget"></div>

        <script src="https://tamaro.raisenow.com/sp-zuerich/latest/widget.js"></script>
        <script>
        window.rnw.tamaro.runWidget('#donation-widget', {
            language: 'de',
            testMode: false,
            debug: false,
            purposes: ['p1'],
            purposeDetails: {
                p1: {
                    stored_campaign_id: 30147621,
                },
            },
            translations: {
                de: {
                    purposes: {
                        p1: 'SP Zürich',
                    },
                },
            },
            paymentFormPrefill: {
                stored_customer_email_permission: true,
                stored_customer_donation_receipt: true,
                stored_customer_country: 'CH',
                stored_sxt_address_source: '1008',
                //stored_hidden_parameter: 'myValue',
            },
        })
        </script>

        <style>
            :root {
                --tamaro-primary-color: var(--red);
                --tamaro-primary-color__hover: var(--white);
                --tamaro-primary-bg-color: var(--white);
                --tamaro-border-color: var(--black);
                --tamaro-bg-color: white;
            }
        </style>
        
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