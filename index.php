<!-- bootstrap css -->
<link href="web/css/bootstrap.min.css" rel="stylesheet">

<!-- custom css -->
<link rel="stylesheet" href="web/css/style.css">

<!-- fonts -->
<link href="web/css/font-awesome.min.css" rel="stylesheet"">



<?php 
session_start();
include_once('library/PDOFactory.php');
include_once('models/repositories/clientRepository.php');
include_once('models/entities/personne.php');
include_once('models/entities/client.php');
?>

<?php
$pdo = PDOFactory::getMysqlConnection();

if (isset($_REQUEST['action'])) {
	$action = $_REQUEST['action'];
} else {
	$action = null;
}

switch ($action) {
	case "candidater":
	$vueAAfficher = "views/pageVisiteur.php";
	break;
	
	case "valider":

		$client = new Client();

			if(isset($_POST['nom']))      $client->setNom($_POST["nom"]);
				else      $client->setNom("");

			if(isset($_POST['civ']))      $client->setCivilite($_POST["civ"]);
				else      $client->setCivilite("");

			if(isset($_POST['prenom']))      $client->setPrenom($_POST["prenom"]);
				else      $client->setPrenom("");

			if(isset($_POST['dateNaissance']))      $client->setDateNaissance($_POST["dateNaissance"]);
				else      $client->setDateNaissance("");

			if(isset($_POST['cp']))      $client->setCp($_POST["cp"]);
				else      $client->setCp("");

			if(isset($_POST['ville']))      $client->setVille($_POST["ville"]);
				else      $client->setVille("");

			if(isset($_POST['nationalite']))      $client->setNationalite($_POST["nationalite"]);
				else      $client->setNationalite("");

			$client->setDateForm(date("Y-m-d"));

			if(isset($_POST['tel']))      $client->setTel($_POST["tel"]);
				else      $client->setTel("");

			if(isset($_POST['email']))      $client->setEmail($_POST["email"]);
				else      $client->setEmail("");

			if(isset($_POST['etabOrigine']))      $client->setEtabOrigine($_POST["etabOrigine"]);
				else      $client->setEtabOrigine("");

			if(isset($_POST['diplomeObtenu']))      $client->setDiplomeObtenu($_POST["diplomeObtenu"]);
				else      $client->setDiplomeObtenu("");

			if(isset($_POST['sourceInfo']))      $client->setSourceInfo($_POST["sourceInfo"]);
				else      $client->setSourceInfo("");

			if(isset($_POST['disponibilite']))      $client->setDispo($_POST["disponibilite"]);
				else      $client->setDispo("");

			if(isset($_POST['idSite']))      $client->setNomSite($_POST["idSite"]);
				else      $client->setNomSite("");

			if(isset($_POST['idStatut']))      $client->setNomStatut($_POST["idStatut"]);
				else      $client->setNomStatut("");

			if(isset($_POST['idFormation']))      $client->setNomFormation($_POST["idFormation"]);
				else      $client->setNomFormation("");

			if (isset($_POST['emailConfirm'])&&$_POST["emailConfirm"]===$_POST["email"]) {
			} else {
				echo '<script> alert("L\'email de confirmation ne correspond pas ! Veuillez recommencer."); </script>';
				$client = null;
			}


			if ($client === null) {

				$vueAAfficher = "views/pageVisiteur.php";
			} else {
					
					$message = $client->save($pdo);
					
					$vueAAfficher = "views/accueil.php";
				}
					
		
	break;

	default:
	$vueAAfficher = "views/accueil.php";
	break;
}


include_once("layouts/layout.php");
?>

<!-- JQuery -->
<script src="web/js/jquery-3.1.1.min.js"></script>
<script src="web/js/scriptVisiteur.js"></script>

