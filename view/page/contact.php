<?php
/**
 * Created by JetBrains PhpStorm.
 * User: erisler
 * Date: 19/05/13
 * Time: 09:25
 * To change this template use File | Settings | File Templates.
 */
?>
<header class="subhead">
    <div class="container">
        <h1>Contact</h1>
    </div>
</header>
<div class="container">
    <div class="alert">Vous pouvez nous contacter directement par e-mail à l'adresse&nbsp;:
        <script type="text/javascript">
            <!--
            // protected email script by Joe Maller
            // JavaScripts available at http://www.joemaller.com
            // this script is free to use and distribute
            // but please credit me and/or link to my site

            emailE='myc-sense.com'
            emailE=('contact' + '@' + emailE)
            document.write('<A href="mailto:' + emailE + '">' + emailE + '</a>')
            //-->
        </script>
        ou utiliser le formulaire ci-dessous.</div>
    <?php
    foreach ($_POST as $key => $value) {
        $_POST[$key] = htmlentities($value);
    }
    // print_r($_POST);
    if (isset($_POST['liame'])) {
        $userEmail = $_POST['liame'];
        include_once('./view/page/sent.php');

    } else {
        $userEmail = '';
    }
    if (isset($_POST['more_info'])) {
        $more_info = 'checked="checked"';
    }
    else {
        $more_info = '';
    }
    if (isset($_POST['final_user'])) {
        $final_user = 'checked="checked"';
    }
    else {
        $final_user = '';
    }
    if (isset($_POST['partner_user'])) {
        $partner_user = 'checked="checked"';
    }
    else {
        $partner_user = '';
    }
    if (isset($_POST['name'])) {
        $name = $_POST['name'];
    }
    else {
        $name = '';
    }
    if (isset($_POST['message'])) {
        $message = $_POST['message'];
    }
    else {
        $message = '';
    }
    ?>
    <form class="form-horizontal" action="./index.php?page=contact" method="post" style="margin-top: 30px">
        <fieldset>
            <div class="control-group">
                <label class="control-label" for="liame">Adresse e-mail</label>
                <div class="controls">
                    <input id="liame" class="span6" type="email" name="liame" required="true" value="<?=$userEmail?>">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Objet(s) (facultatif)</label>
                <div class="controls">
                     <label class="checkbox">
                        <input type="checkbox" name="more_info" <?=$more_info?>>
                         Je souhaite en savoir davantage (infomations complémentaires,
                        démonstration, …).
                    </label>
                    <label class="checkbox">
                        <input type="checkbox" name="final_user" <?=$final_user?>> Je suis intéressé par la possibilité d'utiliser My C-Tool en tant
                        que client final.
                    </label>
                    <label class="checkbox">
                        <input type="checkbox" name="partner_user" <?=$partner_user?>> Dans le cadre de mes activités (bureau d'études, conseil, …),
                        je suis intéressé par la possibilité d'intégrer My C-Tool à mon offre commerciale en tant que
                        partenaire.
                    </label>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="name">Prénom, nom (facultatif)</label>
                <div class="controls">
                    <input id="name" class="span6" type="text" name="name" value="<?=$name?>">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="msg">Message (facultatif)</label>
                <div class="controls">
                    <textarea id="msg" class="span6" rows="6" name="message"><?=$message?></textarea>
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <input class="btn btn-info" type="submit" value="Envoyer">
                </div>
            </div>
        </fieldset>
    </form>
</div>