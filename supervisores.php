<?php 

    class Supervisor   
    {
        private $idSuperv;
        private $nomeSuper;
        private $tipo;
        private $email;
        private $senha;

        

    public function getIdSuperv() {
        return $this->idSuperv;
    }
    
    public function setIdSuperv($idSuperv) {
        $this->idSuperv = $idSuperv;
    }

	public function getNomeSuper() {
		return $this->nomeSuper;
	}

	public function setNomeSuper($nomeSuper) {
		$this->nomeSuper = $nomeSuper;
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
        
    }
    