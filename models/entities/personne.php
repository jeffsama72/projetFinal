<?php

class Personne 
{
	protected $id;
	protected $Nom;
	protected $prenom;
	protected $dateNaissance;
	protected $tel;
	protected $cp;
	protected $civilite;
	protected $ville;
	protected $email;
	protected $etabOrigine;
	protected $diplomeObtenu;
	protected $dispo;
	protected $dateForm;
	protected $sourceInfo;
	protected $nomSite;
	protected $nomStatut;
	protected $nomFormation;
	protected $emailConfirm;
	protected $nationalite;
	protected $idFormation;
	protected $idSite;
	protected $idStatut;


	public function getId() {
		return $this->id;
	}

	public function setId($id) {
		$this->id = $id;
	}

	public function getCivilite() {
		return $this->civilite;
	}

	public function setCivilite($civilite) {
		$this->civilite = $civilite;
	}

	public function getEmail() {
		return $this->email;
	}

	public function setEmail($email) {
		$this->email = $email;
	}


	public function getEmailConfirm() {
		return $this->emailConfirm;
	}

	public function setEmailConfirm($emailConfirm) {
		$this->emailConfirm = $emailConfirm;
	}

	public function getNom() {
		return $this->Nom;
	}

	public function setNom($Nom) {
		$this->Nom = $Nom;
	}

	public function getPrenom() {
		return $this->prenom;
	}

	public function setPrenom($prenom) {
		$this->prenom = $prenom;
	}

	public function getNationalite() {
		return $this->nationalite;
	}

	public function setNationalite($nationalite) {
		$this->nationalite = $nationalite;
	}

	public function getDateNaissance() {
		return $this->dateNaissance;
	}

	public function setDateNaissance($dateNaissance) {
		$this->dateNaissance = $dateNaissance;
	}

	public function getCp() {
		return $this->cp;
	}

	public function setCp($cp) {
		$this->cp = $cp;
	}

	public function getVille() {
		return $this->ville;
	}

	public function setVille($ville) {
		$this->ville = $ville;
	}

	public function getTel() {
		return $this->tel;
	}

	public function setTel($tel) {
		$this->tel = $tel;
	}

	public function getEtabOrigine() {
		return $this->etabOrigine;
	}

	public function setEtabOrigine($etabOrigine) {
		$this->etabOrigine = $etabOrigine;
	}

	public function getDiplomeObtenu() {
		return $this->diplomeObtenu;
	}

	public function setDiplomeObtenu($diplomeObtenu) {
		$this->diplomeObtenu = $diplomeObtenu;
	}

	public function getDispo() {
		return $this->dispo;
	}

	public function setDispo($dispo) {
		$this->dispo = $dispo;
	}
	public function getDateForm() {
		return $this->dateForm;
	}

	public function setDateForm($dateForm) {
		$this->dateForm = $dateForm;
	}
	public function getSourceInfo() {
		return $this->sourceInfo;
	}

	public function setSourceInfo($sourceInfo) {
	
		$this->sourceInfo = $sourceInfo;
	}
	public function getNomSite() {
		return $this->nomSite;
	}

	public function setNomSite($nomSite) {
		$this->nomSite = $nomSite;
	}
	public function getNomStatut() {
		return $this->nomStatut;
	}

	public function setNomStatut($nomStatut) {
		$this->nomStatut = $nomStatut;
	}
	public function getNomFormation() {
		return $this->nomFormation;
	}

	public function setNomFormation($nomFormation) {
		$this->nomFormation = $nomFormation;
	}

	public function getIdFormation() {
		return $this->idFormation;
	}

	public function setIdFormation($idFormation) {
		$this->idFormation = $idFormation;
	}

	public function getIdSite() {
		return $this->idSite;
	}

	public function setIdSite($idSite) {
		$this->idSite = $idSite;
	}

	public function getIdStatut() {
		return $this->idStatut;
	}

	public function setIdStatut($idStatut) {
		$this->idStatut = $idStatut;
	}
}

?>