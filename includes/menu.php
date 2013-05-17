<div class = "menu">	
	<script type="text/javascript"> 
	function roll_over(img_name, img_src) {
		document[img_name].src = img_src;
    }
   </script>
		<?php
		//crée une div vide si il n'y a pas de grand icône dans le menu, ce qui empêche le menu de remonter 
		if( isset($_GET['page']) && $_GET['page'] == 'mentionsLegales') {
			echo '<div id = "menuVide"> </div>';
		}
		//Affichage des éléments menu (sub-optimal)
		if( isset($_GET['page']))
			echo '<a href="index.php" class = "lienMenu"  
				onmouseover="roll_over(\'accueil\', \'ongletsMenu/accueilH.png\')" 
				onmouseout="roll_over(\'accueil\', \'ongletsMenu/accueil.png\')">
				<img id="accueil" src="ongletsMenu/accueil.png" alt="Accueil" class = "ongletMenu"/></a>';					
		else 
			echo '<a href="index.php" ><img src="ongletsMenu/accueilG.png" alt="Accueil" class = "ongletMenuG"/></a>';	
		
		if( isset($_GET['page']) && $_GET['page'] == 'produitsEtServices')
		echo '<a href="index.php?page=produitsEtService"><img src="ongletsMenu/produitsEtServicesG.png" alt="Produits et services" class = "ongletMenuG"/></a>';
		else
			echo '<a href="index.php?page=produitsEtServices" class = "lienMenu" 
				onmouseover="roll_over(\'produitsEtServices\', \'ongletsMenu/produitsEtServicesH.png\')" 
				onmouseout="roll_over(\'produitsEtServices\', \'ongletsMenu/produitsEtServices.png\')">
				<img id = "produitsEtServices" src="ongletsMenu/produitsEtServices.png" alt="Produits et services" class = "ongletMenu"/></a>';

		if( isset($_GET['page']) && $_GET['page'] == 'objectifs')
			echo '<a href="index.php?page=objectifs"><img src="ongletsMenu/objectifsG.png" alt="Nos objectifs" class = "ongletMenuG"/></a>';
		else
			echo '<a href="index.php?page=objectifs" class = "lienMenu" 
				onmouseover="roll_over(\'objectifs\', \'ongletsMenu/objectifsH.png\')" 
				onmouseout="roll_over(\'objectifs\', \'ongletsMenu/objectifs.png\')">
				<img id = "objectifs" src="ongletsMenu/objectifs.png" alt="objectifs" class = "ongletMenu"/></a>';

		if( isset($_GET['page']) && $_GET['page'] == 'references')
			echo '<a href="index.php?page=references"><img src="ongletsMenu/referencesG.png" alt="Références" class = "ongletMenuG"/></a>';
		else
		echo '<a href="index.php?page=references" class = "lienMenu"
			onmouseover="roll_over(\'references\', \'ongletsMenu/referencesH.png\')" 
			onmouseout="roll_over(\'references\', \'ongletsMenu/references.png\')">
			<img id = "references" src="ongletsMenu/references.png" alt="Références" class = "ongletMenu"/></a>';

		if( isset($_GET['page']) && $_GET['page'] == 'quiSommesNous')
		echo '<a href= "index.php?page=quiSommesNous"><img src="ongletsMenu/quiSommesNousG.png" alt="Qui sommes nous?" class = "ongletMenuG"/></a>';
		else
		echo '<a href= "index.php?page=quiSommesNous" class = "lienMenu"
			onmouseover="roll_over(\'quiSommesNous\', \'ongletsMenu/quiSommesNousH.png\')" 
			onmouseout="roll_over(\'quiSommesNous\', \'ongletsMenu/quiSommesNous.png\')">
			<img id = "quiSommesNous" src="ongletsMenu/quiSommesNous.png" alt="Qui sommes nous?" class = "ongletMenu"/></a>';

		if( isset($_GET['page']) && $_GET['page'] == 'contact')
		echo '<a href= "index.php?page=contact"><img src="ongletsMenu/contactG.png" alt="contact" class = "ongletMenuG"/></a>';
		else
		echo '<a href= "index.php?page=contact" class = "lienMenu"
			onmouseover="roll_over(\'contact\', \'ongletsMenu/contactH.png\')" 
			onmouseout="roll_over(\'contact\', \'ongletsMenu/contact.png\')">
			<img id = "contact" src="ongletsMenu/contact.png" alt="contact" class = "ongletMenu"/></a>';
		?>
	</div>