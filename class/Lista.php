<?php

class Lista{

	public $itens;

	public function __construct(){
		$this->itens = array();
	}

	public function addProduto($produto){
		array_push($this->itens,$produto);
	}

	public function deleteProduto($produto){
		if($key = array_search($produto, $this->itens) != false){
			unset($this->itens[$key]);
		}
	}

}

?>