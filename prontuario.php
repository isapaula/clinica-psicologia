<?php 

    class Prontuario {
        private $idProntuario;
        private $nomePaci;
        private $tipo;
        private $email;
        private $senha;
		private $psicologo;
        private $cpf;
        private $datanasci;
        private $sexo;
        private $tipoTerapia;
        private $statusPront;
        private $faltas;
        private $assinatura;

	public function getIdProntuario() {
		return $this->idProntuario;
	}

	public function setIdProntuario($idProntuario) {
		$this->idProntuario = $idProntuario;
	}

	public function getNomePaci() {
		return $this->nomePaci;
	}

	public function setNomePaci($nomePaci) {
		$this->nomePaci = $nomePaci;
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
	public function getPsicologo() {
		return $this->psicologo;
	}

	public function setPsicologo($psicologo) {
		$this->psicologo = $psicologo;
	}

	public function getCpf() {
		return $this->cpf;
	}

	public function setCpf($cpf) {
		$this->cpf = $cpf;
	}

	public function getDatanasci() {
		return $this->datanasci;
	}

	public function setDatanasci($datanasci) {
		$this->datanasci = $datanasci;
	}

	public function getSexo() {
		return $this->sexo;
	}

	public function setSexo($sexo) {
		$this->sexo = $sexo;
	}

	public function gettipoTerapia() {
		return $this->tipoTerapia;
	}

	public function settipoTerapia($tipoTerapia) {
		$this->tipoTerapia = $tipoTerapia;
	}

	public function getStatusPront() {
		return $this->statusPront;
	}

	public function setStatusPront($statusPront) {
		$this->statusPront = $statusPront;
	}

	public function getFaltas() {
		return $this->faltas;
	}

	public function setFaltas($faltas) {
		$this->faltas = $faltas;
	}

	public function getAssinatura() {
		return $this->assinatura;
	}

	public function setAssinatura($assinatura) {
		$this->assinatura = $assinatura;
	}
        
}

class Login
{
	private $user;
	private $senha;

	public function getUser() {
		return $this->user;
	}

	public function setUser($user) {
		$this->user = $user;
	}

	public function getSenha() {
		return $this->senha;
	}

	public function setSenha($senha) {
		$this->senha = $senha;
	}

	
}


    