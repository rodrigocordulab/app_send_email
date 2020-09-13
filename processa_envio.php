<?php


class Mensagem {
	
	private $para = null;
	private $assunto = null;
	private $mensagem = null;


	public function __get($atributo){
		return $this->$atributo;
	}

	public function __set($atributo, $valor){
		$this-> $atributo = $valor;
	}

	public function mensagemValida(){
		if(empty($this->para)) || empty($this->assunto) || empty($this->mensagem){
			return false;
		}

		return true;
	}
}

$mensagem = new Mensagem();

$mensagem -> __set('para', $POST['para']);
$mensagem -> __set('assunto', $POST['assunto']);

$mensagem -> __set('mensagem', $POST['mensagem']);

if($mensagem -> mensagemValida()){
	echo 'Mensagem é válida';
}else{
	echo 'Mensagem não é válida';
}

