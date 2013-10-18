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

<body>

    <section class="introduction" role="main">
        <div class="hero-unit">

            <?php
            $page = 'home';
            include 'menu.php';
            ?>

            <div class="container">
                <header>
                    <hgroup>
                        <h1>
                            My C-Sense
                            <br/>
                            <small>Solutions web de collecte et de reporting extra-financier</small>
                        </h1>
                    </hgroup>
                </header>

                <div class="row-fluid products">
                    <div class="span6 product">
                        <h2>My C-Tool::collecte</h2>
                        <p class="tagline">
                            Gagnez en efficacité sur votre collecte d'informations !
                        </p>
                        <p>
                            <a href="collecte.php">En savoir plus &raquo;</a>
                        </p>
                    </div>
                    <div class="span6 product">
                        <h2>My C-Tool::reporting</h2>
                        <p class="tagline">
                            Automatisez votre processus d'analyse et de reporting !
                        </p>
                        <p>
                            <a href="reporting.php">En savoir plus &raquo;</a>
                        </p>
                    </div>
                </div>

                <?php if ($demo) : ?>
                    <div class="row">
                        <div class="span12">
                            <div class="alert alert-success" style="font-size: 14px; line-height: 24px; font-weight: normal;">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                Votre demande d'inscription pour une démonstration en ligne a bien été envoyée, merci
                                pour votre intérêt.
                                Nous vous recontacterons dans les meilleurs délais à l'adresse e-mail indiquée&nbsp;:
                                <strong><?=$_POST['demo-email']?></strong>.
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <div>
                    <strong>Démonstration en ligne.</strong>
                    Inscrivez-vous pour obtenir accès à une version de démonstration de My C-Tool
                </div>
                <div class="row">
                    <div class="span8">
                        <form action="#" method="post">
                            <div class="input-append" style="display: auto">
                                <input type="text" name="demo-email" placeholder="Email" style="width:60%;">
                                <button type="submit" class="btn btn-primary" style="width:40%;">
                                    S'inscrire
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="span4">
                        <a href="#contact" class="more-infos btn btn-block btn-info">Nous contacter</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container features">

            <h2>Pourquoi choisir les solutions My C-Tool ?</h2>

            <div class="row">
                <div class="span8">

                    <div class="row-fluid">
                        <div class="span6">
                            <div class="feature">
                                <h3>
                                    <i class="icon-user icon-large"></i>
                                    Simple
                                </h3>

                                <p>
                                    Accès par navigateur sans installation préalable, interfaces de saisie et d'analyse intuitives,
                                    aides en ligne personnalisées.
                                </p>
                            </div>
                        </div>
                        <div class="span6">
                            <div class="feature">
                                <h3>
                                    <i class="icon-bolt icon-large"></i>
                                    Puissant
                                </h3>

                                <p>
                                    Interface multilingue, collecte décentralisée, suivi de la collecte,
                                    imports/exports, analyses et rapports ad hoc en quelques clics, disponibles à tous les niveaux souhaités
                                    de votre organisation, mise en place et suivi d'un plan d'actions.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row-fluid">
                        <div class="span6">
                            <div class="feature">
                                <h3>
                                    <i class="icon-random icon-large"></i>
                                    Évolutif
                                </h3>

                                <p>
                                    Indicateurs, structure organisationnelle, axes d’analyses, formulaires de collecte, référentiels : dans My C-Tool
                                    rien n’est figé. Démarrez au plus simple et adaptez la solution aux évolutions de vos besoins et
                                    de la réglementation.
                                </p>
                            </div>
                        </div>
                        <div class="span6">
                            <div class="feature">
                                <h3>
                                    <i class="icon-cogs icon-large"></i>
                                    Ouvert
                                </h3>

                                <p>
                                    La configuration de notre solution est si simple qu’elle peut être
                                    confiée en totalité à nos partenaires (bureaux d’études) et/ou à nos clients. Avec My C-Tool, vous gardez
                                    la main.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row-fluid">
                        <div class="span6">
                            <div class="feature">
                                <h3>
                                    <i class="icon-eye-open icon-large"></i>
                                    Transparent
                                </h3>

                                <p>
                                    Détail des calculs effectués, valeurs et sources des paramètres utilisés,
                                    documents justificatifs, traces des actions utilisateur et des valeurs saisies : avec
                                    My C-Tool, votre reporting extra-financier devient 100% auditable.
                                </p>
                            </div>
                        </div>
                        <div class="span6">
                            <div class="feature">
                                <h3>
                                    <i class="icon-shopping-cart icon-large"></i>
                                    Économique
                                </h3>

                                <p>
                                    Coûts de déploiement et de configuration optimisés et implication dans le
                                    logiciel libre nous permettent de vous proposer nos solutions au meilleur prix.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="span4">
                    <img src="imgCustom/dessin-myc-tool.png" alt="Hero Image">
                </div>
            </div>
        </div>
    </section>


    <section class="separator">
        <div class="container">

            <h2>
                <small>Clients</small>
            </h2>

            <ul class="thumbnails">
                <li class="span2">
                    <div class="thumbnail client">
                        <img src="references/bollore_logistics.png" alt="Bolloré logistics" title="Bolloré logistics">
                    </div>
                </li>
                <li class="span2">
                    <div class="thumbnail client">
                        <img src="references/ffs.png" alt="Fédération Française des Spiritueux"
                                title="Fédération Française des Spiritueux">
                    </div>
                </li>
                <li class="span2">
                    <div class="thumbnail client">
                        <img src="references/ffva.png" alt="Fédération Française des Vins d’Apéritif"
                                title="Fédération Française des Vins d’Apéritif">
                    </div>
                </li>
                <li class="span2">
                    <div class="thumbnail client">
                        <img src="references/le_guide_vs.png" alt="Le Guide Vins & Spiritueux"
                                title="Le Guide Vins & Spiritueux">
                    </div>
                </li>
                <li class="span2">
                    <div class="thumbnail client">
                        <img src="references/umvin.png" alt="Union des Maisons & Marques de Vins"
                                    title="Union des Maisons & Marques de Vins">
                    </div>
                </li>
                <li class="span2">
                    <div class="thumbnail client">
                        <img src="references/anmsm.png" alt="Association Nationale des Maires des Stations de Montagne"
                                    title="Association Nationale des Maires des Stations de Montagne">
                    </div>
                </li>
            </ul>

            <h2>
                <small>Soutiens / partenaires institutionnels</small>
            </h2>

            <ul class="thumbnails">
                <li class="span2">
                    <div class="thumbnail client">
                        <img src="institutionnel/oseo.png" alt="OSÉO" Title="OSÉO">
                    </div>
                </li>
                <li class="span2">
                    <div class="thumbnail client">
                        <img src="institutionnel/jeune-entreprise-innovante.png" alt="Jeune Entreprise Innovante" Title="Jeune Entreprise Innovante">
                    </div>
                </li>
                <!-- <li class="span2">
                    <div class="thumbnail client">
                        <img src="institutionnel/cir.png" alt="Crédit Impôt Recherche">
                    </div>
                </li> -->
                <li class="span2">
                    <div class="thumbnail client">
                        <img src="institutionnel/liris.png" alt="Laboratoire LIRIS de l'Université de Lyon"
                             title="Laboratoire LIRIS de l'Université de Lyon">
                    </div>
                </li>
                <li class="span2">
                    <div class="thumbnail client">
                        <img src="institutionnel/insa-lyon.png" alt="INSA de Lyon" title="INSA de Lyon">
                    </div>
                </li>
            </ul>
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
