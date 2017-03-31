<?php

class UserRepository
{

	public function getUser($pdo, $login, $mdp) {

		$resultat = $pdo->prepare('SELECT id, login, mdp FROM admin WHERE login = :login AND mdp = :mdp');
		$mdp = sha1($mdp);
		$resultat->bindParam(':login', $login, PDO::PARAM_STR);
		$resultat->bindParam(':mdp', $mdp, PDO::PARAM_STR);
		$resultat->setFetchMode(PDO::FETCH_OBJ);
		
		$resultat->execute();
		
		$obj = $resultat->fetch();

		if(empty($obj)) {
			return null;
		} else {
			$user = new User();
			$user->setId($obj->id);
			$user->setLogin($obj->login);
			$user->setPassword($obj->mdp);

			return $user;
		}
	}
}