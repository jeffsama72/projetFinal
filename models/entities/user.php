<?php

class User 
{

	private $id;
	private $login;
	private $mdp;

	public function getId() {
		return $this->id;
	}

	public function setId($id) {
		$this->id = $id;
	}

	public function getLogin() {
		return $this->login;
	}

	public function setLogin($login) {
		$this->login = $login;
	}

	public function getPassword() {
		return $this->mdp;
	}

	public function setPassword($mdp) {
		$this->mdp = $mdp;
	}
}
