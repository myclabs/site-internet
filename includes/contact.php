<h2>Contactez nous</h2>
<ul>
	<li>Prenez rendez-vous pour une d�monstration en ligne et une �tude personnalis�e de vos besoins, contraintes et opportunit�s</li>
	<li>
	<?php
		if(isset($_POST['formulaire']))
			include('includes/formulaire.php');		
	?>
	
<form  method="post" action="index.php?page=contact">
   <fieldset>
       <legend>Formulaire de contact</legend>
		<table>
			<tr>
				<td>Nom :</td>
				<td><input type="text" name="nom"/></td>
			</tr>
			<tr>
				<td>Entreprise :</td>
				<td><input type="text" name="entreprise"/></td>
			</tr>
			<tr>
				<td>Activite principale de l'entreprise :</td>
				<td><textarea name="activite" cols="50" rows="4"></textarea></td>
			</tr>
			<tr>
				<td>Fonction dans l'entreprise :</td>
				<td><input type="text" name="fonction"/></td>
			</tr>
			<tr>
				<td>T�l�phone :</td>
				<td><input type="text" name="telephone"/></td>
			</tr>
			<tr>
				<td>E-mail :</td>
				<td><input type="text" name="email"/></td>
			</tr>
			<tr>
				<td>Remarques :</td>
				<td><textarea name="remarques" cols="50" rows="4"></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Envoyer" name = "formulaire"/></td>
			</tr>
		</table>
   </fieldset>      
</form>
</li>
</ul>
