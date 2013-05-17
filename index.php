<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
<head>
	<title>My C-Sense</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link rel="stylesheet" media="screen" type="text/css" title="Design" href="style.css" />
	<link rel="stylesheet" media="screen" type="text/css" title="Design" href="accueil.css" />
</head>
<body>
<div class="corps">
	<div class="header">
		<img src="images/headerBackground.jpg" alt="Logo Myc-Sense" id="logo"/>
	</div>
	
	
	<?php
	//Inclusion du menu
	include('includes/menu.php');
	
	//Inclusion de la page souhaitée
	if(! isset($_GET['page'])) {
		echo '<div class = "accueil">';
		include('includes/accueil.php');
	}
	else {
		echo '<div class = "contenu">';
		switch($_GET['page']) {
			case 'produitsEtServices' : include('includes/produitsEtServices.php');
				break;
				
			case 'objectifs' : include('includes/objectifs.php');
				break;
				
			case 'references' : include('includes/references.php');
				break;
				
			case 'quiSommesNous' : include('includes/quiSommeNous.php');
				break;
				
			case 'contact' : include('includes/contact.php');
				break;
				
			case 'mentionsLegales' : include('includes/mentionslegales.php');
				break;
				
			default :
				echo "Page inexistante";
		}
	}
	?>
	</div>
	<a href = "index.php?page=mentionsLegales" class = "mentionsLegales">Mentions légales</a>
</div>
</body>
</html>