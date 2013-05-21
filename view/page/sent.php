<?php
/**
 * Created by JetBrains PhpStorm.
 * User: erisler
 * Date: 20/05/13
 * Time: 00:08
 * To change this template use File | Settings | File Templates.
 */


?>
<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    Votre message a bien été envoyé, merci pour votre intérêt. Un message de confirmation vous a été envoyé à
    l'adresse&nbsp;: <?=$userEmail?> (attention le délai avant réception peut être de quelques minutes).
    Nous vous recontacterons à cette même adresse dans les meilleurs délais.
</div>
<?php
// Body
$body = "Adresse e-mail : ".$userEmail."\n\n"
    ."- Je souhaite en savoir davantage (infomations complémentaires, démonstration, …) : ";
if (isset($_POST['more_info'])) {
    $body .= 'oui.';
} else {
    $body .= 'non.';
}
$body .= "\n"."- Je suis intéressé par la possibilité d'utiliser My C-Tool en tant que client final : ";
if (isset($_POST['final_user'])) {
    $body .= 'oui.';
} else {
    $body .= 'non.';
}
$body .= "\n"."- Dans le cadre de mes activités (bureau d'études, conseil, …), je suis intéressé par la possibilité
d'intégrer My C-Tool à mon offre commerciale en tant que partenaire : ";
if (isset($_POST['partner_user'])) {
    $body .= 'oui.';
} else {
    $body .= 'non.';
}
if (isset($_POST['name']) && $_POST['name'] != '') {
    $body .= "\n\n"."Prénom, nom : ".$_POST['name'];
}
if (isset($_POST['message']) && $_POST['message'] != '') {
    $body .= "\n\n"."------------- Début du message -------------\n\n".$_POST['message']
   ."\n\n"."------------- Fin du message -------------";
}
$headers ='Content-Type: text/plain; charset="utf-8"'."\n"; // ici on envoie le mail au format texte encodé en UTF-8
$headers .='Content-Transfer-Encoding: 8bit'."\n"; // ici on précise qu'il y a des caractères accentués

$email['mcs']['address'] = "contact@myc-sense.com";
$email['mcs']['subject']  = "Demande d'informations de la part de ".$userEmail;
$email['mcs']['body'] = $body;
$email['mcs']['headers'] = $headers.'From: '.$userEmail."\n".'Reply-To: '.$userEmail;

$email['user']['address'] = $userEmail;
$email['user']['subject'] = "Votre message pour My C-Sense";
$email['user']['body'] = "Les informations suivantes ont été transmises sur la page de contact du site www.myc-sense.com.\n\n".$body;
$email['user']['headers'] = $headers.'From: My C-Sense <contact@myc-sense.com>'."\n".'Reply-To: My C-Sense <contact@myc-sense.com>';
// print_r($email);
// Envoi
mail($email['mcs']['address'], $email['mcs']['subject'], $email['mcs']['body'], $email['mcs']['headers']);
mail($email['user']['address'], $email['user']['subject'], $email['user']['body'], $email['user']['headers']);
