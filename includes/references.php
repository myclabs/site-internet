<h2>Références</h2>
<script type="text/javascript" src="jquery-1.5.2.js"></script>  
<script type="text/javascript"> 
<!-- 
$(document).ready(function() {
  $('.accordeon').hide(); // on cache tous les textes (blocs ayant la classe accordeon)
  $('span').click(
  function() { 
	if ($(this).next('p:visible').length != 0) {
	$(this).next('p.accordeon').slideUp(); 
	}
	else { 
		$(this).next('p:hidden').slideDown() // on deroule le div caché qui suit directement le titre
		.siblings('p:visible').slideUp(); // et on cache les div similaires qui etait visible
		}
	});
});
// -->  
</script>
<ul>	
	<li ><span class = "deroulant"><b>Maison des Vins et Spiritueux</b> : plusieurs milliers d'entreprises adhérentes</span>		
	<p class = "accordeon">L’application développée permet, pour chaque adhérent, le suivi de ses émissions par site, étape et groupe de produits.<br /><br />

	Le périmètre de suivi proposé est complet (de la production agricole jusqu’à la distribution finale).<br /><br />

	L’utilisateur peut saisir les données fines obtenues au niveau de ses fournisseurs (inventaires d’émissions de ces derniers ou valeurs agrégées).<br /><br />

	La notion de carbone ajouté distingue la contribution de l’adhérent dans la chaîne complète de valeur.</p>
	<img src="images/logoSpiritueux.png" alt="logo  Maison des vins spritiueux" class ="logoref"/></li>
	
	<li ><span class = "deroulant"><b>Association des Maires de Stations de Montagne</b>: plus de cent stations de montagne adhérentes</span>
	<p class = "accordeon">L’application développée permet, pour chaque commune adhérente, le suivi de ses émissions à la fois sous l’angle patrimoine &amp; services, et sous l’angle territoire.<br /><br />

	Le périmètre de suivi proposé se focalise sur les postes les plus émergents pour une station de montagne, ainsi que sur les postes pour lesquels la commune dispose de leviers d’action.<br /><br />

	Les axes d’analyse ont été pensés sur-mesure pour chaque domaine d’émissions, par rapport aux spécificités des stations de montagne.<br /><br />

	Une bibliothèque de documents justificatifs, des outils de simulation, et un système de partage d’actualités entre adhérents complètent l’application.</p><br /><br />
	<img src="images/logoSkiFrance.png" alt="logo  Maison des vins spritieurx" class ="logoref"/></li>
</ul>
