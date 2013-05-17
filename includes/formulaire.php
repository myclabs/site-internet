<?php
	echo '<p style = "color : red;">';
	if($_POST['nom'] && $_POST['entreprise'] && $_POST['activite'] && $_POST['fonction'] && $_POST['telephone'] && $_POST['email'] && $_POST['remarques']) {
		$nom = stripslashes($_POST['nom']);
		$entreprise	= stripslashes($_POST['entreprise']);
		$activite = stripslashes($_POST['activite']);
		$fonction = stripslashes($_POST['fonction']);
		$telephone	= stripslashes($_POST['telephone']);
		$remarques = stripslashes($_POST['remarques']);
		$email = stripslashes($_POST['email']);
		
		$objet = "Contact myc-sense";		
		$headers ='From: <'.$_POST['email'].'>'."\n";
		$headers .='Content-Type: text/plain; charset="iso-8859-1"'."\n";
		$headers .='Content-Transfer-Encoding: 8bit';
		
		$message = "Entreprise : ".$entreprise." <br />Activité : ".$activite." <br />Fonction : ".$fonction." <br />Telephone ".$telephone." <br />Mail : ".$email." <br />Remarques: ".$remarques;
		
		if(mail('contact@myc-sense.com', $objet , htmlentities($message), $headers)){
			echo 'Le message a bien été envoyé';
		}
		else{
          echo 'Le message n\'a pu être envoyé';
		}
	}
	else{
		echo'Veuillez remplir tous les champs.';
	}
	echo '</p>';
?>