<?php
$demo = false;
$contact = false;
if (isset($_POST['demo-email'])) {
    $headers ='Content-Type: text/plain; charset="utf-8"'."\n"; // ici on envoie le mail au format texte encodé en UTF-8
    $headers .='Content-Transfer-Encoding: 8bit'."\n"; // ici on précise qu'il y a des caractères accentués

    $to = "contact@myc-sense.com";
    $subject  = "Demande d'inscription de la part de " . $_POST['demo-email'];
    $body = "Demande d'inscription de la part de " . $_POST['demo-email'];
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
    $email['mcs']['subject']  = "Demande d'informations de la part de ".$userEmail;
    $email['mcs']['body'] = $body;
    $email['mcs']['headers'] = $headers.'From: '.$userEmail."\n".'Reply-To: '.$userEmail;

    $email['user']['address'] = $userEmail;
    $email['user']['subject'] = "Votre message pour My C-Sense";
    $email['user']['body'] = "Les informations suivantes ont été transmises sur la page de contact du site www.myc-sense.com.\n\n".$body;
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

    <link rel="shortcut icon" href="favicon.ico">
</head>

<body>

    <section class="introduction" role="main">
        <div class="hero-unit">

            <div class="navbar">
                <div class="navbar-inner">
                    <div class="container">
                        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>

                        <div class="nav-collapse collapse">
                            <ul class="nav pull-right">
                                <li class="active"><a href=""><i class="icon-cloud"></i> My C-Sense</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="span12">
                        <header>
                            <hgroup>
                                <h1>
                                    My C-Tool
                                    <small>Solution Web de reporting extra-financier</small>
                                </h1>

                                <h2>
                                    Reporting développement durable,
                                    <abbr title="Bilan Gaz à Effet de Serre (réglementaire)">BGES</abbr>,
                                    bilan carbone, énergie, eau, déchets,
                                    <abbr title="Qualité, Hygiène, Sécurité, Environnement">QHSE</abbr>,
                                    <abbr title="Responsabilité Sociale et Environnementale">RSE</abbr>
                                    <br/><small>My C-Tool s'adapte à votre besoin.</small>
                                </h2>

                                <h2>
                                    Grande entreprise, PME, fédération de métier, collectivité,
                                    établissement public
                                    <br/><small>My C-Tool s'adapte à votre structure.</small>
                                </h2>

                                <h2>
                                    Exercice comptable, projet, événement, produit, service, procédé
                                    <br/><small>My C-Tool s'adapte à votre périmètre de suivi.</small>
                                </h2>
                            </hgroup>

                        </header>
                    </div>
                    <!-- <div class="span5">
                        <img src="img/logo.png" alt="Hero Image">
                    </div> -->
                </div>
                <?php if ($demo) : ?>
                    <div class="row">
                        <div class="span12">
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                Votre demande d'inscription pour la démo en ligne a été envoyée.
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <div class="row">
                    <div class="span8">
                        <form action="" method="post">
                            <div class="input-append" style="display: auto">
                                <input type="text" name="demo-email" placeholder="Email" style="width:60%;">
                                <button type="submit" class="btn btn-primary" style="width:40%;">
                                    Démo en ligne (s'inscrire)
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="span4">
                        <a href="#contact" class="more-infos btn btn-block btn-info">Plus d'informations</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container features">
            <div class="row">
                <div class="span4">
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
                <div class="span4">
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
                <div class="span4">
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
            </div>

            <div class="row">
                <div class="span4">
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
                <div class="span4">
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
                <div class="span4">
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
    </section>

    <!--
    <section class="separator">
        <div class="container">
            <div class="row">
                <div class="span8">
                    <div id="myCarousel" class="carousel slide"> -->
                        <!-- Carousel items -->
                        <!--<div class="carousel-inner">
                            <div class="active item">
                                <img src="captures/1.png">
                                <div class="carousel-caption">
                                    <h4>Third Thumbnail label</h4>
                                    <p>Super feature</p>
                                </div>
                            </div>
                            <div class="item">
                                <img src="captures/2.png">
                                <div class="carousel-caption">
                                    <h4>Third Thumbnail label</h4>
                                    <p>Super feature</p>
                                </div>
                            </div>
                            <div class="item">
                                <img src="captures/3.png">
                                <div class="carousel-caption">
                                    <h4>Third Thumbnail label</h4>
                                    <p>Super feature</p>
                                </div>
                            </div>
                        </div> -->
                        <!-- Carousel nav --> <!--
                        <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                        <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
                    </div>
                </div>
                <div class="span4">
                    <div class="trust-explainer">
                        <h2>CollabOApp is an awesome solution to team environments.</h2>

                        <p>All setups come with unlimited version control, storage in the cloud, live chat, real-time
                            updates, marked-up feedback forms and more. Try our integrated test labs for some fun and
                            measurable team collaboration experiments.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    -->

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

            <?php if ($contact) : ?>
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    Votre message a bien été envoyé. Merci.
                </div>
            <?php endif; ?>

            <form id="contact" action="#contact" method="post">
                <fieldset>
                    <label>Email</label>
                    <input name="contact-email" type="text" placeholder="Email" class="input-block-level">
                    <label>Message</label>
                    <textarea name="contact-text" class="input-block-level" rows="5"></textarea>
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

</body>
</html>