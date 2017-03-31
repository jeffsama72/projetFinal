<form action="./index.php" method="POST">

	<label>Nom</label>
	<input type="text" name="nom" value="<?php echo $client->getNom() ?>"/>
	<br>
	<label>Prénom</label>
	<input type="text" name="prenom" value="<?php echo $client->getPrenom() ?>"/>
	<br>
	<label>Date de naissance</label>
	<input type="text" name="date_naissance" value="<?php echo $client->getDateNaissance() ?>"/>
	<br>
	<label>Adresse</label>
	<input type="text" name="telephone" value="<?php echo $client->getTel() ?>"/>
	<br>
	<label>Code Postal</label>
	<input type="text" name="code_postal" value="<?php echo $client->getCp() ?>"/>
	<br>
	<label>Ville</label>
	<input type="text" name="ville" value="<?php echo $client->getVille() ?>"/>
	<br>
	<label>Email</label>
	<input type="text" name="email" value="<?php echo $client->getEmail() ?>"/>
	<br>
	<label>Disponibilité</label>
	<input type="text" name="disponibilite" value="<?php echo $client->getDispo() ?>"/>
	<br>
	<label>Date d'inscription</label>
	<input type="text" name="date_inscription" value="<?php echo $client->getDateForm() ?>"/>
	<br>
	   	<input type="radio" name="idFormation" value=10>
     	<label>IT Start</label>
        <input type="radio" name="idFormation" value=9>
        <label>DIGISTART</label>
        <input type="radio" name="idFormation" value=8>
        <label>BTS SIO</label>
        <input type="radio" name="idFormation" value=12>
        <label>Developpeur logiciel</label>
        <input type="radio" name="idFormation" value=15>
        <label>Technicien supérieur en support informatique</label>
        <br>
        <input type="radio" name="idFormation" value=13>
        <label>Responsable infrastructure système et réseaux</label>
        <input type="radio" name="idFormation" value=6>
        <label>WEB MASTER et DESIGNER</label>
        <input type="radio" name="idFormation" value=1>
        <label>Chef de projet en conception de système informatique</label> 
	<input type="submit" value="Mettre à jour"/>
	<br>
	<label><?php if(isset($message)) echo $message ?></label>
	<input type="hidden" name="id" value="<?php echo $client->getId() ?>"/>
	<input type="hidden" name="action" value="update"/>
</form>