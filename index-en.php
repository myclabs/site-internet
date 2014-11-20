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
    $body = "Un utilisateur a déposé une demande d'inscription à une démonstration sur le site www.myc-sense.com/en.\n\n".
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
        $email['mcs']['body'] = "Un utilisateur a déposé une demande d'informations sur le site www.myc-sense.com/en.\n\n"
            ."Adresse e-mail indiquée : ".$userEmail."\n\n"
            ."---------- Début du message ----------\n\n".$body."\n\n"."---------- Fin du message ----------";
        $email['mcs']['headers'] = $headers.'From: '.$userEmail."\n".'Reply-To: '.$userEmail;

        $email['user']['address'] = $userEmail;
        $email['user']['subject'] = "Your message to My C-Sense";
        $email['user']['body'] = "The following informations has been sent to My C-Sense.\n\n"
            ."Email : ".$userEmail."\n\n"
            ."---------- Message begin ----------\n\n".$body."\n\n"."---------- Message End ----------\n\n"
            . "We will get back to you as soon as possible.";
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
                <li class=""><button class="btn btn-primary btn-normal link-demo" href="#demo">On-line demo</button></li>
                <li class=""><a href="fr" class="langLink"> Français</a></li>
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
            <h1 class="pull-center" style="margin-bottom: 20px; margin-top: 20px;">Open up a new horizon to your data collection</h1>
            <h3 class="pull-center" style="margin-bottom: 30px;">
                My C-Tool, the affordable and agile cloud application, transforms your experience of data collection, processing and analysis
            </h3>
            <div class="row-fluid">
                <div class="span6">
                    <div class="well">
                        <p> <abbr title="Corporate Social Responsibility">CSR</abbr> or sustainable development reporting,
                            <abbr title="GreenHouse Gas">GHG</abbr> assessment, <abbr title="GreenHouse Gas">GHG</abbr> management, change management,
                            improvement process follow-up, projects evaluation, ad hoc study to confront
                            a new regulatory constraint... an a thousand of additional possibilities</p>
                        <p><strong>My C-Tool adapts to your focus</strong></p>
                    </div>
                    <div class="well">
                        <p>Large company, SME, professional federation, collectivity, public facility, engineering office, consulting firm</p>
                        <p><strong>My C-Tool adapts to your organization</strong></p>
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
                    <img alt="My C-Tool: Open up a new horizon to your data collection" class="pull-right" src="images/dessin-myc-tool-vertical.png" />
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
                                <img alt="My C-Tool: data collection form" class="pull-right" src="images/collecte-orga-exemple.png"/>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row-fluid">
                                <img alt="My C-Tool: data collection form" class="pull-right" src="images/captures/collecte-deplacements.png"/>
                                <!-- <div class="carousel-caption">
                                    <p>Collectez tout type d'information au travers de simples formulaires</p>
                                </div> -->
                            </div>
                        </div>
                        <div class="item">
                            <div class="row-fluid">
                                <img alt="My C-Tool: data collection form" class="pull-right" src="images/captures/collecte-energie.png"/>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row-fluid">
                                <img alt="My C-Tool: data collection form" class="pull-right" src="images/captures/collecte-foret-des-ardets.png"/>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row-fluid">
                                <img alt="My C-Tool: data collection form" class="pull-right" src="images/captures/collecte-commentaires.png"/>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row-fluid">
                                <img alt="My C-Tool: data collection form" class="pull-right" src="images/captures/collecte-suivi.png"/>
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
                    Give all its potential to the data collection, and all their value to the source data
                </h2>

                <p>Easily set up the forms along with their on-line help</p>
                <p>Build the organization and the authorizations structure</p>
                <p>Follow-up progress and keep the contributors motivated</p>
                <p>Share comments with the contributors</p>
                <p>Download the data into an Excel spreadsheet</p>
                <p>And find still much more: documents attachments, auditability, English/French interface, easiness to repeat or adapt the data collection...</p>

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
                    Transform the data collection into a powerful reporting and management tool
                </h2>

                <p>Activate this module anytime you want</p>
                <p>Perform real-time analysis of data at any organizational level</p>
                <p>Share the analyses with the users depending on their authorizations</p>
                <p>Follow all types of indicators and as much as you need</p>
                <p>Choose to simply aggregate the collected data, or add a processing layer as elaborate as you need, based on official and/or internal reference data</p>
                <p>And find still much more: auditability, English/French interface, data downloads...</p>

                <!-- <a href="reporting.html" class="btn">En savoir plus sur le reporting &raquo;</a> -->
            </div>
            <div class="span6">
                <div class="carousel slide" id="carouselReporting">
                    <!-- Carousel items -->
                    <div class="carousel-inner">
                        <div class="active item">
                            <div class="row-fluid">
                                <img alt="My C-Tool: analysis module" class="pull-right" src="images/captures/reporting-ratio.png"/>
                                <!-- <div class="carousel-caption">
                                    <p>Automatisez vos calculs et analysez vos résultats à tout moment</p>
                                </div> -->
                            </div>
                        </div>
                        <div class="item">
                            <div class="row-fluid">
                                <img alt="My C-Tool: analysis module" class="pull-right" src="images/captures/reporting-capacity.png"/>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row-fluid">
                                <img alt="My C-Tool: calculation details" class="pull-right" src="images/captures/reporting-calcul-zoom.png"/>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row-fluid">
                                <img alt="My C-Tool: calculation parameters" class="pull-right" src="images/captures/reporting-parametres.png"/>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row-fluid">
                                <img alt="My C-Tool: analysis module" class="pull-right" src="images/captures/reporting-camenbert.png"/>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row-fluid">
                                <img alt="My C-Tool: analysis module" class="pull-right" src="images/captures/reporting-investment.png"/>
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
                            Connection via internet browser without preliminary installation, intuitive interfaces for input and analysis,
                            custom on-line help, comments sharing between contributor and coordinator
                        </p>
                    </div>
                </div>
                <div class="span4">
                    <div class="feature">
                        <h3>
                            <i class="icon-bolt icon-large"></i>
                            Powerful
                        </h3>
                        <p>
                            English/French interface, distributed contributions, follow-up of the data collection,
                            ad hoc reporting in a few clicks available at all the suitable levels of your organization.
                            All the data can be downloaded to Excel.
                        </p>
                    </div>
                </div>
                <div class="span4">
                    <div class="feature">
                        <h3>
                            <i class="icon-random icon-large"></i>
                            Adaptable
                        </h3>
                        <p>
                            Indicators, organizational structure, analysis axes, data collection forms, reference data: everything
                            in My C-Tool can be continuously adapted.  Start as simple as possible and enhance your solution with
                            features as your needs mature and as you gain feedback from your users.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span4">
                    <div class="feature">
                        <h3>
                            <i class="icon-cogs icon-large"></i>
                            Open
                        </h3>
                        <p>
                            You can either have us configure My C-Tool for you, or choose to configure it yourself partly or completely.
                        </p>
                    </div>
                </div>
                <div class="span4">
                    <div class="feature">
                        <h3>
                            <i class="icon-eye-open icon-large"></i>
                            Clear
                        </h3>
                        <p>
                            Details of data calculations, value and source of used reference data, handling of supporting documents,
                            log of user actions and log of input data updates. The results you obtain via My C-Tool are 100% auditable.
                        </p>
                    </div>
                </div>
                <div class="span4">
                    <div class="feature">
                        <h3>
                            <i class="icon-shopping-cart icon-large"></i>
                            Affordable
                        </h3>
                        <p>
                            Optimized deployment and configuration costs as well as involvement in the open source
                            software allow us to offer you the best price for our solutions.
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
            <h3>Our customers</h3>
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
            <h3>Our institutional supports / partners</h3>
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
                        <img src="images/institutionnel/insa-lyon.svg" alt="INSA de Lyon" title="INSA de Lyon">
                    </div>
                </li>
            </ul>
        </div>
    </article>
    <article>
        <div class="container">
            <div class="row-fluid">
                <div class="span3">
                    <a href="http://carbondb.org/" target="_blank"><img src="images/carbondb/carbonDB-logo.svg" alt="CarbonDB" title="CarbonDB"></a>
                </div>
                <div class="span9">
                    <p><a href="http://carbondb.org/" target="_blank">CarbonDB</a> is a Life Cycle Assessment (LCA)
                        database centered on greenhouse gas and energy impacts developed by My C-Sense. Its main features are:</p>
                    <ul>
                        <li><strong>Open acces</strong>: anybody can freely access data.</li>
                        <li><strong>Open (semantic) language</strong>: source data are expressed in an open knowledge representation language.</li>
                        <li><strong>Open data</strong>: anybody can download source data, use them or edit them for
                            its own purpose.</li>
                        <li><strong>Open collaboration</strong>: anybody can comment existing issues on data,
                            submit new issues, or submit an improved version of source data.</li>
                        <li><strong>Non-redundancy</strong>: most of data (elementary flows) are calculated from a minimal subset of source data.</li>
                        <li><strong>Transparency, intelligibility, graphical interfaces</strong>: all source data
                            should be based on publicly available references, particular emphasis is placed on accessibility, intelligibility, pedagogy.</li>
                        <li><strong>Open source</strong>: underlying software is open source.</li>
                    </ul>
                </div>
            </div>
        </div>
    </article>
    <article>
    <div class="container">
    <div class="row-fluid">
      <h3>Contact-us</h3>
        <p>You can send us an email to
            <script>
                // protected email script by Joe Maller
                // JavaScripts available at http://www.joemaller.com
                // this script is free to use and distribute
                // but please credit me and/or link to my site
                emailE='myc-sense.com';
                emailE=('contact' + '@' + emailE);
                document.write('<a href="mailto:' + emailE + '">' + emailE + '</a>');
            </script>
            or use the following form.</p>
        <?php if ($contact) : ?>
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                Your message has been sent successfully, thanks for your interest. A confirmation email has been sent to
                <strong><?=$userEmail?></strong>.
                We will get back to you as soon as possible.
            </div>
        <?php endif; ?>
        <form id="contact" action="#contact" method="post">
            <fieldset>
                <label for="contact-email">Email</label>
                <input id="contact-email" name="contact-email" type="email" class="input-block-level" required>
                <label for="contact-text">Message</label>
                <textarea id="contact-text" name="contact-text" class="input-block-level" rows="5"></textarea>
                <button type="submit" class="btn">Send</button>
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
                                    Your on-line demonstration request has been send, thanks for your interest in our tool.
                                    We will contact you as soon as possible on
                                    <strong><?=$_POST['demo-email']?></strong>.
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
					<h3>On-line demo</h3>
                    <form id="demo" action="#contact" method="post">
                        <div class="input-append">
                            <input type="text" name="demo-email" placeholder="Email" class="span4">
                            <button class="btn btn-primary">Subscribe</button>
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
