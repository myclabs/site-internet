<?php
$demo = false;
$contact = false;
foreach ($_POST as $key => $value) {
    $_POST[$key] = htmlentities($value);
}
if (isset($_POST['demo-email'])) {
    $headers ='Content-Type: text/plain; charset="utf-8"'."\n"; // ici on envoie le mail au format texte encodé en UTF-8
    $headers .='Content-Transfer-Encoding: 8bit'."\n"; // ici on précise qu'il y a des caractères accentués

    $to = "contact@myc-sense.com";
    $subject  = "Demande d'inscription à une démonstration de la part de : ".$_POST['demo-email'];
    $body = "Un utilisateur a déposé une demande d'inscription à une démonstration sur le site www.myc-sense.com.\n\n".
        "Adresse e-mail indiquée : " . $_POST['demo-email'];
    $headers = $headers.'From: '.$_POST['demo-email']."\n".'Reply-To: '.$_POST['demo-email'];
    // Envoi
    mail($to, $subject, $body, $headers);
    $demo = true;
}
if (isset($_POST['contact-email'])) {
    $headers ='Content-Type: text/plain; charset="utf-8"'."\n"; // ici on envoie le mail au format texte encodé en UTF-8
    $headers .='Content-Transfer-Encoding: 8bit'."\n"; // ici on précise qu'il y a des caractères accentués

    $userEmail = $_POST['contact-email'];
    $body = $_POST['contact-text'];

    $email['mcs']['address'] = "contact@myc-sense.com";
    $email['mcs']['subject']  = "Demande d'informations de la part de : ".$userEmail;
    $email['mcs']['body'] = "Un utilisateur a déposé une demande d'informations sur le site www.myc-sense.com.\n\n"
        ."Adresse e-mail indiquée : ".$userEmail."\n\n"
        ."---------- Début du message ----------\n\n".$body."\n\n"."---------- Fin du message ----------";
    $email['mcs']['headers'] = $headers.'From: '.$userEmail."\n".'Reply-To: '.$userEmail;

    $email['user']['address'] = $userEmail;
    $email['user']['subject'] = "Votre message pour My C-Sense";
    $email['user']['body'] = "Les informations suivantes ont été transmises sur la page de contact du site www.myc-sense.com.\n\n"
        ."Adresse e-mail : ".$userEmail."\n\n"
        ."---------- Début du message ----------\n\n".$body."\n\n"."---------- Fin du message ----------\n\n"
        . "Nous espérons que vous êtes bien à l'origine de cette demande et reprendrons contact avec vous dans les meilleurs délais.";
    $email['user']['headers'] = $headers.'From: My C-Sense <contact@myc-sense.com>'."\n".'Reply-To: My C-Sense <contact@myc-sense.com>';
    // Envoi
    mail($email['mcs']['address'], $email['mcs']['subject'], $email['mcs']['body'], $email['mcs']['headers']);
    mail($email['user']['address'], $email['user']['subject'], $email['user']['body'], $email['user']['headers']);
    $contact = true;
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>My C-Sense | Solutions Web de reporting extra-financier</title>

    <!-- Le styles -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,400,300,700'
          rel='stylesheet' type='text/css'>
    <link href="css/core.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <script src="js/libs/modernizr-2.6.1.min.js"></script>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <link rel="shortcut icon" href="imgCustom/favicon.ico">
</head>

<body class="tour-page">
    <div class="hero-unit">

        <?php
        $page = 'collecte';
        include 'menu.php';
        ?>

        <div class="row">
            <header>
                <h1>
                My C-Tool::collecte<br/>
                <small>Gagnez en efficacité sur votre collecte d'informations !</small>
                </h1>
            </header>
        </div>

    </div>
    <section class="separator">

        <article>
            <div class="container">
                <div class="row">
                    <div class="span8">
                        <h2><!-- <small>My C-Tool::Collecte</small> -->Solution Web de collecte d'informations décentralisée</h2>
                        <p>Vous définissez les informations à analyser, vos contributeurs saisissent les données, vous les récupérez au format Excel !</p>
                        <h3>Avec My C-Tool::collecte :</h3>
                        <ul>
							<li>Simplifiez votre processus de collecte</li>
							<li>Conservez vos données sources sur le cloud</li>
							<li>Faites évoluer votre collecte à tout moment</li>
                        </ul>
                    </div>
                    <div class="span4">
                        <img alt="" src="imgCustom/dessin-collecte.png">
                    </div>
                </div>
            </div>
        </article>

        <article>
            <div class="container">
                <div class="row">
                    <div class="span6">
                        <img alt="" src="imgCustom/collecte-orga.png" id="imageOrga">
                    </div>
                    <div class="span6">
                        <h2><!-- <small>My C-Tool::Collecte</small> -->Modèle d'organisation libre</h2>
                        <p>Structurez votre collecte en modélisant la structure organisationnelle de l'activité à analyser.</p>
                        <p>Définissez librement les informations à collecter à tout niveau de l'organisation.</p>
                        <p>Choisissez les contributeurs qui saisiront les données.</p>
                    </div>
                </div>
            </div>
        </article>

        <article>
            <div class="container">
                <div class="row">
                    <div class="span4">
                        <h2><!-- <small>My C-Tool::Collecte</small> -->Formulaires à la carte</h2>
                        <p>Utilisez des formulaires standards ou créez des formulaires adaptés aux besoins de votre collecte.</p>
                        <h3>Vous pouvez :</h3>
                        <ul>
                            <li>Définir les questions posés</li>
                            <li>Définir les aides en lignes</li>
                            <li>Définir les interactions entre les questions</li>
                            <li>Et bien plus encore...</li>
                        </ul>
                    </div>
                    <div class="span8">
                        <img alt="" src="imgCustom/configuration-formulaire.png" style="border: 1px solid #C4C4C4;">
                    </div>
                </div>
            </div>
        </article>

        <article>
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <h2>Suivi et export</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="span4">
                        <img alt="" src="imgCustom/collecte-suivi.png">
                        <p>Suivez l'avancement de la collecte en temps réel.</p>                        
                    </div>
                    <div class="span4">
                        <img alt="" src="imgCustom/collecte-echange.png">
                        <p>Communiquez avec vos contributeurs et partagez des documents.</p>
                    </div>
                    <div class="span4">
                        <img alt="" src="imgCustom/collecte-export-excel.png">
                        <p>Exportez, à tout moment, les informations collectées au format Excel.</p>
                    </div>
                </div>
            </div>
        </article>

        <article>
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <h2>My C-Tool::reporting</h2>
                        <h3>Pour automatiser votre processus d'analyse et de reporting</h3>
                        <a href="reporting.php">En savoir plus sur My C-Tool::reporting &raquo;</a>
                    </div>
                </div>
            </div>
        </article>

    </section>

    <section class="separator">
        <div class="container">
            <div class="row">
                <div class="span8">
                    <h2>Démonstration en ligne</h2>
                    <p>Inscrivez-vous pour obtenir accès à une version de démonstration de My C-Tool::collecte</p>
                </div>
            </div>
            <div class="row">
                <div class="span6">
                    <form action="#" method="post">
                        <div class="input-append" style="display: auto">
                            <input type="text" name="demo-email" placeholder="Email" style="width:60%;">
                            <button type="submit" class="btn btn-primary" style="width:40%;">
                                S'inscrire
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">

            <h2>
                <small>Plus d'informations</small>
                Contactez-nous
            </h2>
            <p style="a:hover {text-decoration: underline;} ">Vous pouvez nous contacter directement à l'adresse&nbsp;:
                <script>
                    // protected email script by Joe Maller
                    // JavaScripts available at http://www.joemaller.com
                    // this script is free to use and distribute
                    // but please credit me and/or link to my site
                    emailE='myc-sense.com';
                    emailE=('contact' + '@' + emailE);
                    document.write('<a href="mailto:' + emailE + '">' + emailE + '</a>');
                </script>
                ou utiliser le formulaire ci-dessous.</p>
            <?php if ($contact) : ?>
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    Votre message a bien été envoyé, merci pour votre intérêt. Un e-mail de confirmation vous a été envoyé à
                    l'adresse e-mail indiquée&nbsp;: <strong><?=$userEmail?></strong> (attention le délai avant réception peut être de quelques minutes).
                    Nous vous recontacterons à cette même adresse dans les meilleurs délais.
                </div>
            <?php endif; ?>

            <form id="contact" action="#contact" method="post">
                <fieldset>
                    <label for="contact-email">Adresse e-mail</label>
                    <input id="contact-email" name="contact-email" type="text" class="input-block-level">
                    <label for="contact-text">Message</label>
                    <textarea id="contact-text" name="contact-text" class="input-block-level" rows="5"></textarea>
                    <button type="submit" class="btn">Envoyer</button>
                </fieldset>
            </form>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div class="footer-col-2">
                        <address>
                            <i class="icon-map-marker"></i>
                            <strong>My C-Sense</strong>
                            <br>13 avenue Albert Einstein
                            <br>69100 Villeurbanne
                        </address>
                    </div>
                </div>
            </div>
        </div>

        <div class="colophon">
            <div class="container">
                <div class="row">
                    <p class="pull-left">&copy; 2013 My C-Sense</p>
                </div>
            </div>
        </div>
    </footer>


    <script src="js/libs/jquery-1.8.0.min.js"></script>
    <script src="js/libs/bootstrap.min.js"></script>
    <script src="js/libs/jquery.placeholder.min.js"></script>
    <script src="js/app.js"></script>

    <script>
        $(".more-infos").click(function(e) {
            $('html, body').animate({
                scrollTop: $("form#contact").offset().top
            }, 1000, function() {
                $("form#contact input").first().focus();
            });
        });
setInterval(function() {
var img = $("#imageOrga").attr("src");
$("#imageOrga").fadeOut('fast', function() {
if ($("#imageOrga").attr("src")=="imgCustom/collecte-orga.png")
    $("#imageOrga").attr("src","imgCustom/collecte-orga-variante.png");
  else
    $("#imageOrga").attr("src","imgCustom/collecte-orga.png");
$("#imageOrga").fadeIn();

});
}, 8000);
        
    </script>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-23818673-2', 'myc-sense.com');
        ga('send', 'pageview');
    </script>

</body>
</html>
