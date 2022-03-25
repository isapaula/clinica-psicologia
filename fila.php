<?php 

    class Fila
    {
        public $NomeFila;
        public $estaNaFila;
		public $email; 
		public $cpf;


	public function getNomeFila() {
		return $this->NomeFila;
	}

	public function setNomeFila($NomeFila) {
		$this->NomeFila = $NomeFila;
	}

	public function getEstaNaFila() {
		return $this->estaNaFila;
	}

	public function setEstaNaFila($estaNaFila) {
		$this->estaNaFila = $estaNaFila;
	}
	public function getEmail() {
		return $this->email;
	}

	public function setEmail($email ) {
		$this->email = $email;
	}

	public function setCpf($cpf) {
		$this->cpf = $cpf;
	}
	public function getCpf() {
		return $this->cpf;
	}

	

}
    