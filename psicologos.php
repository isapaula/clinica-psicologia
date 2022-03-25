<?php

    class Psicologo
    {
        private $idPsicologo;
        private $nomePscic;
        private $tipo;
        private $email;
        private $senha;
        private $crm;
        private $horarios;

	public function getIdPsicologo() {
		return $this->idPsicologo;
	}

	public function setIdPsicologo($idPsicologo) {
		$this->idPsicologo = $idPsicologo;
	}

	public function getNomePscic() {
		return $this->nomePscic;
	}

	public function setNomePscic($nomePscic) {
		$this->nomePscic = $nomePscic;
	}

	public function getTipo() {
		return $this->tipo;
	}

	public function setTipo($tipo) {
		$this->tipo = $tipo;
	}

	public function getEmail() {
		return $this->email;
	}

	public function setEmail($email) {
		$this->email = $email;
	}

	public function getSenha() {
		return $this->senha;
	}

	public function setSenha($senha) {
		$this->senha = $senha;
	}

	public function getCrm() {
		return $this->crm;
	}

	public function setCrm($crm) {
		$this->crm = $crm;
	}

	public function getHorarios() {
		return $this->horarios;
	}

	public function setHorarios($horarios) {
		$this->horarios = $horarios;
	}




        
    }
    