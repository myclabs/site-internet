<?php
$demo = false;
$contact = false;
foreach ($_POST as $key => $value) {
    $_POST[$key] = htmlentities($value);
}
if (isset($_POST['demo-email'])) {
    $headers ='Content-Type: text/plain; charset="utf-8"'."\n"; // ici on envoie le mail au format texte encodé en UTF-8
    $headers .='Content-Transfer-Encoding: 8bit'."\n"; // ici on précise qu'il y a des caractères accentués

    $to = "contact@myc-sense.com, emmanuel.risler@myc-sense.com, irene.kryze@myc-sense.com, benjamin.bertin@myc-sense.com";
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
    if (filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
        $body = $_POST['contact-text'];

        $email['mcs']['address'] = "contact@myc-sense.com, emmanuel.risler@myc-sense.com, irene.kryze@myc-sense.com";
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
            . "Nous reprendrons contact avec vous dans les meilleurs délais.";
        $email['user']['headers'] = $headers.'From: My C-Sense <contact@myc-sense.com>'."\n".'Reply-To: My C-Sense <contact@myc-sense.com>';
        // Envoi
        mail($email['mcs']['address'], $email['mcs']['subject'], $email['mcs']['body'], $email['mcs']['headers']);
        mail($email['user']['address'], $email['user']['subject'], $email['user']['body'], $email['user']['headers']);
        $contact = true;
    }
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8] -->
<html>
<!-- <![endif] -->
<head>
    <meta charset="utf-8" />
    <!-- %meta{:content => "IE=edge,chrome=1", "http-equiv" => "X-UA-Compatible"} -->
    <title>My C-Sense | Solutions Web de collecte, traitement et analyse de données</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/favicon.ico">
    <link href="stylesheets/bootstrap.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="stylesheets/responsive.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="stylesheets/font-awesome.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="stylesheets/theme.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="stylesheets/myc-sense.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="stylesheets/fonts.css" media="screen" rel="stylesheet" type="text/css" />
</head>
<body class="theme-pattern-tiny-grid">
    <!-- Page Header -->
    <header id="masthead">
      <nav class="navbar navbar-fixed-top">
        <div class="navbar-inner">
          <div class="container">
            <a class="btn btn-navbar" data-target=".nav-collapse" data-toggle="collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </a>
            <h1 class="brand">
              <a href="index.html">
                <img src="images/logo.png">
              </a>
            </h1>
            <div class="nav-collapse collapse">
              <ul class="nav pull-right">
                <!-- <li class="active"><a href="index.html">Accueil</a></li>
                <li class=""><a href="collecte.html">Collecte</a></li>
                <li class=""><a href="reporting.html">Reporting</a></li> -->
                <li class=""><a class="link-contact" href="#contact">Contact</a></li>
                <li class=""><button class="btn btn-primary btn-normal link-demo" href="#demo">Démonstration en ligne</button></li>
                <li class=""><a href="en" class="langLink"> English</a></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
    </header>
    <!-- Main Content -->
    <div id="content" role="main">
<section class="section alt" id="promo">
    <div class="container">
        <div class="row-fluid">
            <h1 class="pull-center" style="margin-bottom: 20px; margin-top: 20px;">Ouvrez un nouvel horizon à vos collectes de données</h1>
            <h3 class="pull-center" style="margin-bottom: 30px;">
                My C-Tool, l’application cloud agile et accessible à tous, transforme<br>
                votre expérience de collecte, traitement et analyse de données
            </h3>
            <div class="row-fluid">
                <div class="span6">
                    <div class="well">
                        <p>Rapport <abbr title="Responsabilité Sociale et Environnementale">RSE</abbr> ou développement durable, bilan de <abbr title="Gaz à Effet de Serre">GES</abbr> (gaz à effet de serre), management de <abbr title="Gaz à Effet de Serre">GES</abbr>, conduite du changement, suivi d’une démarche d’amélioration, évaluation de projets, réalisation d’une étude face à une nouvelle contrainte réglementaire... et mille autres possibilités d’application</p>
                        <p><strong>My C-Tool s’adapte à votre objectif</strong></p>
                    </div>
                    <div class="well">
                        <p>Grande entreprise, PME, fédération professionnelle, collectivité, établissement public, bureau d’études, cabinet de conseil</p>
                        <p><strong>My C-Tool s’adapte à votre structure</strong></p>
                    </div>
					<!-- <h3>Démonstration en ligne</h3>
					<div class="row-fluid">
					<div class="span8">
                    <form id="demo" action="#contact" method="post">
                        <div class="input-append">
                            <input type="text" name="demo-email" placeholder="Email" class="span9">
                            <button class="btn btn-primary">S'inscrire</button>
                        </div>
                    </form>
					</div>
					<div class="span4">
						<button class="btn link-contact">Contactez-nous</button>
					</div>
					</div> -->
                </div>
                <div class="span5 pull-right">
                    <img alt="My C-Tool : collecte et reporting. En toute simplicité." class="pull-right" src="images/dessin-myc-tool-vertical.png" />
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section tour-page">
    <article>
    <div class="container">
        <div class="row-fluid">
            <div class="span6">
                <div class="carousel slide" id="carouselCollecte">
                    <!-- Carousel items -->
                    <div class="carousel-inner">
                        <div class="active item">
                            <div class="row-fluid">
                                <img alt="My C-Tool : formulaire de collecte" class="pull-right" src="images/collecte-orga-exemple.png"/>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row-fluid">
                                <img alt="My C-Tool : formulaire de collecte" class="pull-right" src="images/captures/collecte-deplacements.png"/>
                                <!-- <div class="carousel-caption">
                                    <p>Collectez tout type d'information au travers de simples formulaires</p>
                                </div> -->
                            </div>
                        </div>
                        <div class="item">
                            <div class="row-fluid">
                                <img alt="My C-Tool : formulaire de collecte" class="pull-right" src="images/captures/collecte-energie.png"/>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row-fluid">
                                <img alt="My C-Tool : formulaire de collecte" class="pull-right" src="images/captures/collecte-foret-des-ardets.png"/>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row-fluid">
                                <img alt="My C-Tool : commentaires" class="pull-right" src="images/captures/collecte-commentaires.png"/>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row-fluid">
                                <img alt="My C-Tool : suivi d'une collecte" class="pull-right" src="images/captures/collecte-suivi.png"/>
                            </div>
                        </div>
                    </div>
                    <!-- Carousel nav -->
                    <a class="carousel-control left" data-slide="prev" href="#carouselCollecte">&lsaquo;</a>
                    <a class="carousel-control right" data-slide="next" href="#carouselCollecte">&rsaquo;</a>
                </div>
            </div>
            <div class="span6">
                <h2>
                    Donnez tout son potentiel à la collecte, et toute leur valeur aux données sources
                </h2>
                
                <p>Créez facilement les formulaires et leurs aides en ligne</p>
                <p>Structurez l’organisation et les autorisations</p>
                <p>Distribuez les tâches de contribution</p>
                <p>Suivez l’avancement et relancez les contributeurs</p>
                <p>Dialoguez avec les contributeurs</p>
                <p>Exportez les saisies sous Excel</p>
                <p>Et trouvez bien plus encore : documents joints, auditabilité, interface anglais/français, efficacité pour répéter ou adapter la collecte...</p>
                <!-- <a href="collecte.html" class="btn">En savoir plus sur la collecte &raquo;</a> -->
            </div>
        </div>
    </div>
</article>
<article>
    <div class="container">
        <div class="row-fluid">
            <div class="span6">
                <h2>
                    Transformez la collecte en outil de reporting et management
                </h2>
                <p>Activez ce module au moment où vous le souhaitez
                <p>Analysez les données en temps réel et à n’importe quel niveau de l’organisation</p>
                <p>Partagez les analyses avec les utilisateurs selon leurs autorisations</p>
                <p>Suivez tous types d’indicateurs et autant que souhaité</p>
                <p>Choisissez d’agréger simplement les données saisies, ou définissez des traitements intermédiaires plus ou moins complexes, faisant intervenir des référentiels officiels et/ou internes</p>
                <p>Et trouvez bien plus encore : auditabilité, interface anglais/français, exports...</p>
                <!-- <a href="reporting.html" class="btn">En savoir plus sur le reporting &raquo;</a> -->
            </div>
            <div class="span6">
                <div class="carousel slide" id="carouselReporting">
                    <!-- Carousel items -->
                    <div class="carousel-inner">
                        <div class="active item">
                            <div class="row-fluid">
                                <img alt="My C-Tool : module d'analyse" class="pull-right" src="images/captures/reporting-ratio.png"/>
                                <!-- <div class="carousel-caption">
                                    <p>Automatisez vos calculs et analysez vos résultats à tout moment</p>
                                </div> -->
                            </div>
                        </div>
                        <div class="item">
                            <div class="row-fluid">
                                <img alt="My C-Tool : module d'analyse" class="pull-right" src="images/captures/reporting-capacity.png"/>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row-fluid">
                                <img alt="My C-Tool : détail d'un calcul" class="pull-right" src="images/captures/reporting-calcul-zoom.png"/>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row-fluid">
                                <img alt="My C-Tool : paramètres de calcul" class="pull-right" src="images/captures/reporting-parametres.png"/>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row-fluid">
                                <img alt="My C-Tool : module d'analyse" class="pull-right" src="images/captures/reporting-camenbert.png"/>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row-fluid">
                                <img alt="My C-Tool : module d'analyse" class="pull-right" src="images/captures/reporting-investment.png"/>
                            </div>
                        </div>
                    </div>
                    <!-- Carousel nav -->
                    <a class="carousel-control left" data-slide="prev" href="#carouselReporting">&lsaquo;</a>
                    <a class="carousel-control right" data-slide="next" href="#carouselReporting">&rsaquo;</a>
                </div>
            </div>
        </div>
    </div>
    </article>
    <article>
    <div class="container">
    <!-- <div class="page-header">
        <h1>Pourquoi choisir My C-Tool ?</h1>
    </div> -->
    <div class="row-fluid">
        <div class="span12">
            <div class="row-fluid">
                <div class="span4">
                    <div class="feature">
                        <h3>
                            <i class="icon-user icon-small"></i>
                            Simple
                        </h3>
                        <p>
                            Accès par navigateur sans installation préalable, interfaces de saisie et d'analyse intuitives,
                            aides en ligne personnalisées, dialogue contributeur/ coordinateur via les commentaires.
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
                            analyses et rapports ad hoc en quelques clics, disponibles à tous les niveaux souhaités
                            de votre organisation. Toutes les données sont exportables sous Excel.
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
                            rien n’est figé. Démarrez au plus simple et enrichissez/adaptez la solution en fonction de vos besoins et retours d’expérience.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span4">
                    <div class="feature">
                        <h3>
                            <i class="icon-cogs icon-large"></i>
                            Ouvert
                        </h3>
                        <p>
                            Avec My C-Tool, vous choisissez soit de nous confier la configuration,
                            soit de prendre la main et de réaliser la configuration vous-mêmes en totalité ou en partie.
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
                            documents justificatifs, traces des actions utilisateur et des valeurs saisies :
                            avec My C-Tool, les résultats issus de vos collectes deviennent 100% auditables.
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
    </div>
    </div>
    </article>
    <article>
        <div class="container">
            <h3>Clients</h3>
            <ul class="thumbnails">
                <li class="span2">
                    <div class="thumbnail client">
                        <img src="images/references/bollore_logistics.png" alt="Bolloré logistics" title="Bolloré logistics">
                    </div>
                </li>
                <li class="span2">
                    <div class="thumbnail client">
                        <img src="images/references/ffs.png" alt="Fédération Française des Spiritueux"
                                title="Fédération Française des Spiritueux">
                    </div>
                </li>
                <li class="span2">
                    <div class="thumbnail client">
                        <img src="images/references/ffva.png" alt="Fédération Française des Vins d’Apéritif"
                                title="Fédération Française des Vins d’Apéritif">
                    </div>
                </li>
                <li class="span2">
                    <div class="thumbnail client">
                        <img src="images/references/le_guide_vs.png" alt="Le Guide Vins & Spiritueux"
                                title="Le Guide Vins & Spiritueux">
                    </div>
                </li>
                <li class="span2">
                    <div class="thumbnail client">
                        <img src="images/references/umvin.png" alt="Union des Maisons & Marques de Vins"
                                    title="Union des Maisons & Marques de Vins">
                    </div>
                </li>
                <li class="span2">
                    <div class="thumbnail client">
                        <img src="images/references/anmsm.png" alt="Association Nationale des Maires des Stations de Montagne"
                                    title="Association Nationale des Maires des Stations de Montagne">
                    </div>
                </li>
            </ul>
            <h3>Soutiens / partenaires institutionnels</h3>
            <ul class="thumbnails">
                <li class="span2">
                    <div class="thumbnail client">
                        <img src="images/institutionnel/oseo.png" alt="OSÉO" Title="OSÉO">
                    </div>
                </li>
                <li class="span2">
                    <div class="thumbnail client">
                        <img src="images/institutionnel/jeune-entreprise-innovante.png" alt="Jeune Entreprise Innovante" Title="Jeune Entreprise Innovante">
                    </div>
                </li>
                <li class="span2">
                    <div class="thumbnail client">
                        <img src="images/institutionnel/liris.png" alt="Laboratoire LIRIS de l'Université de Lyon"
                             title="Laboratoire LIRIS de l'Université de Lyon">
                    </div>
                </li>
                <li class="span2">
                    <div class="thumbnail client">
                        <img src="images/institutionnel/insa-lyon.png" alt="INSA de Lyon" title="INSA de Lyon">
                    </div>
                </li>
            </ul>
        </div>
        </article>
    <article>
    <div class="container">
    <div class="row-fluid">
      <h3>Contactez-nous</h3>
        <p>Vous pouvez nous contacter directement à l'adresse&nbsp;:
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
                <input id="contact-email" name="contact-email" type="email" class="input-block-level" required>
                <label for="contact-text">Message</label>
                <textarea id="contact-text" name="contact-text" class="input-block-level" rows="5"></textarea>
                <button type="submit" class="btn">Envoyer</button>
            </fieldset>
        </form>
    </div>
    </div>
        </article>
        <article>
            <div class="container">
            <div class="row-fluid">
                <div class="span12">
                    <?php if ($demo) : ?>
                        <div class="row-fluid">
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
					<h3>Démonstration en ligne</h3>
                    <form id="demo" action="#contact" method="post">
                        <div class="input-append">
                            <input type="text" name="demo-email" placeholder="Email" class="span4">
                            <button class="btn btn-primary">S'inscrire</button>
                        </div>
                    </form>
                </div>
            </div>
            </div>
        </article>
    </section>
    </div>
    <!-- Page Footer -->
    <footer class="section" id="footer" role="contentinfo">
      <div class="container">
        <div class="row-fluid">
          <div class="span4">
            <address>
                <i class="icon-map-marker"></i>
                <strong>My C-Sense</strong>
                <br>13 avenue Albert Einstein
                <br>69100 Villeurbanne
            </address>
          </div>
          <div class="span4">
            <p class="pull-center"><br><br>&copy; 2013 My C-Sense</p>
          </div>
        </div>
      </div>
    </footer>
    <script src="javascripts/jquery.min.js" type="text/javascript"></script>
    <script src="javascripts/bootstrap.min.js" type="text/javascript"></script>
    <script src="javascripts/script.js" type="text/javascript"></script>
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
