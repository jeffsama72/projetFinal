<?php
session_start();
include_once('/var/www/Prod/projetFinal/library/PDOFactory.php');
include_once('/var/www/Prod/projetFinal/models/entities/User.php');
include_once('/var/www/Prod/projetFinal/models/entities/personne.php');
include_once('/var/www/Prod/projetFinal/models/entities/client.php');
include_once('/var/www/Prod/projetFinal/models/repositories/userRepository.php');
include_once('/var/www/Prod/projetFinal/models/repositories/ClientRepository.php');
include_once('/var/www/Prod/projetFinal/models/repositories/exportRepository.php');


$pdo = PDOFactory::getMysqlConnection();

	if (isset($_REQUEST['action'])) {
		$action = $_REQUEST['action'];
	} else {
		$action = null;
	}


switch ($action) {

	case "verifLogin":
		$userRepo = new UserRepository();
		$user = $userRepo->getUser($pdo, $_POST['login'], $_POST['mdp']);
		
		if($user) {
			$_SESSION['login'] = $user->getLogin();
			include("views/dashboard.php");
		} else {
			include("views/login.php");
		}
		break;

	case "disconnect":
		$_SESSION = array();
		session_destroy();
		include("views/login.php");
		break;

	case "deleteClient":
		//Instancier l'objet modèle client à partir duquel on va supprimer son enregistrement dans la bdd
		$del = new Client();
		$del->setId($_GET['id']);

		//On supprime et on prépare la vue à afficher avec les données dont elle a besoin
		$message = $del->delete($pdo);
		$clientRepo = new ClientRepository();
		$listeClients = $clientRepo->getAll($pdo);
		include("views/dashboard.php");
		break;

	case "deleteAll":
			$delAll = new Client();
			$deleteAll = $delAll->deleteAll($pdo);
			include("views/dashboard.php");
		break;

	case "formEditClient":
		//On prépare la vue a afficher avec les données dont elle a besoin
		$clientRepo = new ClientRepository();
		$client = $clientRepo->getOneById($pdo, $_GET['id']);
		include("views/formEditClient.php");
		break;

	case "update":
		//Instancier un objet du modèle qui va s'occuper de sauvegarder votre client
			$client = new Client();
			$client->setId($_POST['id']);
			$client->setNom($_POST["Nom"]);
			$client->setPrenom($_POST["prenom"]);
			$client->setCivilite($_POST["civ"]);
			$client->setDateNaissance($_POST["date_naissance"]);
			$client->setTel($_POST["telephone"]);
			$client->setCp($_POST["code_postal"]);
			$client->setVille($_POST["ville"]);
			$client->setEmail($_POST["email"]);
			$client->setDispo($_POST["disponibilite"]);
			$client->setDateForm($_POST["date_inscription"]);

			//On sauvegarde et on prépare la vue à afficher ensuite
			$message = $client->update($pdo);
			include_once("views/dashboard.php");
			break;

	case "envoieMail":
			$envoyer = new ExportBase();
			$exportEnvoyer = $envoyer->envoieParMail($pdo);
			include("views/dashboard.php");
		break;

	case "export":
			$exporter = new ExportBase();
			$baseExporter = $exporter->export($pdo);
			include("views/dashboard.php");
		break;

	default:
		if(empty($_SESSION['login'])) {
			include("views/login.php");
		} else {
			include("views/dashboard.php");
			break;
		}
}
?>