<?php

class Client extends Personne
{

	public function save($pdo) {
		
		//Si l'id est renseigné à l'appel de la méthode alors c'est une mise à jour, sinon $id équivaut à false et alors l'objet client actuel doit faire l'objet d'un nouvel enregistrement.
		if($this->id) {
			//appeler la bonne méthode
			$message = $this->update($pdo);
			return $message;
		} else {
			$message = $this->insert($pdo);
			return $message;
		}
	}

	private function insert($pdo) {

		try {
			//Exécuter la requête insert d'une personne en base de donnée
			//Préparation de la requête
			$stmt = $pdo->prepare('INSERT INTO fiche_visiteur (Nom, prenom, date_naissance, code_postal, ville, tel, email, etab_origine, date_saisie_form, diplome_obtenu, disponibilite, Nationalite, Civilite, source_info_imie, id_site, id_statut, id_formation) VALUES ( :nom, :prenom, :dateNaissance, :cp, :ville, :tel, :email, :etabOrigine, :dateForm, :diplomeObtenu, :disponibilite, :nationalite, :civ, :sourceInfo, :idSite, :idStatut, :idFormation)');

			//Binder les paramètres à la requête de manière sécurisée
			$stmt->bindParam(':nom', $this->Nom, PDO::PARAM_STR);
			$stmt->bindParam(':prenom', $this->prenom, PDO::PARAM_STR);
			$stmt->bindParam(':dateNaissance', $this->dateNaissance, PDO::PARAM_STR);
			$stmt->bindParam(':cp', $this->cp, PDO::PARAM_STR);
			$stmt->bindParam(':ville', $this->ville, PDO::PARAM_STR);
			$stmt->bindParam(':tel', $this->tel, PDO::PARAM_STR);
			$stmt->bindParam(':nationalite', $this->nationalite, PDO::PARAM_STR);
			$stmt->bindParam(':dateForm', $this->dateForm, PDO::PARAM_STR);
			$stmt->bindParam(':disponibilite', $this->dispo, PDO::PARAM_STR);
			$stmt->bindParam(':email', $this->email, PDO::PARAM_STR);
			$stmt->bindParam(':civ', $this->civilite, PDO::PARAM_STR);
			$stmt->bindParam(':etabOrigine', $this->etabOrigine, PDO::PARAM_STR);
			$stmt->bindParam(':diplomeObtenu', $this->diplomeObtenu, PDO::PARAM_INT);
			$stmt->bindParam(':sourceInfo', $this->sourceInfo, PDO::PARAM_STR);
			$stmt->bindParam(':idSite', $this->nomSite, PDO::PARAM_STR);
			$stmt->bindParam(':idStatut', $this->nomStatut, PDO::PARAM_STR);
			$stmt->bindParam(':idFormation', $this->nomFormation, PDO::PARAM_STR);

			//On exécute ensuite la requête préparée
			$stmt->execute();

			echo '<script>
					alert("Votre candidature a bien été enregistrée.");
				</script>';
		}
		catch(PDOException $e) {
			echo '<script>
					alert("Votre candidature n\'a pas bien été enregistrée.");
				</script>';
			$vueAAfficher = "views/pageVisiteur.php";
		}

	}

	public function update($pdo) {

		try {
			//Exécuter la requête insert d'une personne en base de donnée
			//Préparation de la requête
			$stmt = $pdo->prepare('UPDATE fiche_visiteur SET Nom = :nom, prenom = :prenom , date_naissance = :dateNaissance, code_postal = :cp, ville = :ville, tel = :tel, email = :email, etab_origine = :etabOrigine, date_saisie_form = :dateForm, diplome_obtenu = :diplomeObtenu, disponibilite = :disponibilite,  Civilite = :civi, source_info_imie = :sourceInfo WHERE id = :id' );

			//Binder les paramètres à la requête de manière sécurisée
			$stmt->bindParam(':id', $this->id, PDO::PARAM_INT);
			$stmt->bindParam(':nom', $this->Nom, PDO::PARAM_STR);
			$stmt->bindParam(':prenom', $this->prenom, PDO::PARAM_STR);
			$stmt->bindParam(':dateNaissance', $this->dateNaissance, PDO::PARAM_INT);
			$stmt->bindParam(':cp', $this->cp, PDO::PARAM_INT);
			$stmt->bindParam(':ville', $this->ville, PDO::PARAM_STR);
			$stmt->bindParam(':tel', $this->tel, PDO::PARAM_INT);
			$stmt->bindParam(':dateForm', $this->dateForm, PDO::PARAM_STR);
			$stmt->bindParam(':disponibilite', $this->dispo, PDO::PARAM_STR);
			$stmt->bindParam(':email', $this->email, PDO::PARAM_STR);
			$stmt->bindParam(':civi', $this->civilite, PDO::PARAM_STR);
			$stmt->bindParam(':etabOrigine', $this->etabOrigine, PDO::PARAM_STR);
			$stmt->bindParam(':diplomeObtenu', $this->diplomeObtenu, PDO::PARAM_INT);
			$stmt->bindParam(':sourceInfo', $this->sourceInfo, PDO::PARAM_STR);

			//On exécute ensuite la requête préparée
			$stmt->execute();

			echo '<script>
					alert("Votre candidature a bien été mise à jour");
				</script>';
		}
		catch(PDOException $e) {
			echo '<script>
					alert("Votre candidature n\'a pas été mise a jour.Erreur : ' . $e->getMessage() . '");
				</script>';
			include("views/dashboard.php");
		}
	}


	public function delete($pdo) {

		//Supprimer un enregistrement en base de donnée
		//Faire un try catch qui renvoie un message pour indiquer si la suppression s'est bien déroulée ou non
		try{
			$stmt = $pdo->prepare('DELETE FROM fiche_visiteur WHERE id = :id');
			$stmt->bindParam(':id', $this->id, PDO::PARAM_INT);

			$stmt->execute();

			return "Votre candidat a bien été supprimé.";
		}
		catch(PDOException $e) {
			return "Votre suppression a échoué, en voici la raison : " . $e->getMessage();
		}
	}

	public function deleteAll($pdo) {

		//Supprimer plusieurs enregistrements en base de donnée
		//Faire un try catch qui renvoie un message pour indiquer si la suppression s'est bien déroulée ou non
		try{
			$stmt = $pdo->prepare('DELETE FROM fiche_visiteur');

			$stmt->execute();

			return "Votre client a bien été supprimé.";
		}
		catch(PDOException $e) {
			return "Votre suppression a échoué, en voici la raison : " . $e->getMessage();
		}
	}
}