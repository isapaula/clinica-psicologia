<?php

    class Sessao
    {
       private  $idSessao;
       private  $pk_pront;
       private  $pk_psic;
       private  $dataSessao;
       private  $horario;
       private  $conteudo;
       private  $coment;
       private  $sala;

	public function getIdSessao() {
		return $this->idSessao;
	}

	public function setIdSessao( $idSessao) {
		$this->idSessao = $idSessao;
	}

	public function getPk_pront() {
		return $this->pk_pront;
	}

	public function setPk_pront( $pk_pront) {
		$this->pk_pront = $pk_pront;
	}

	public function getPk_psic() {
		return $this->pk_psic;
	}

	public function setPk_psic( $pk_psic) {
		$this->pk_psic = $pk_psic;
	}

	public function getDataSessao() {
		return $this->dataSessao;
	}

	public function setDataSessao( $dataSessao) {
		$this->dataSessao = $dataSessao;
	}

	public function getHorario() {
		return $this->horario;
	}

	public function setHorario( $horario) {
		$this->horario = $horario;
	}

	public function getConteudo() {
		return $this->conteudo;
	}

	public function setConteudo( $conteudo) {
		$this->conteudo = $conteudo;
	}

	public function getComent() {
		return $this->coment;
	}

	public function setComent( $coment) {
		$this->coment = $coment;
	}

	public function getSala() {
		return $this->sala;
	}

	public function setSala( $sala) {
		$this->sala = $sala;
	}


        
    }
    