<?php

class ListaTest extends PHPUnit_Framework_TestCase{
	
	public $lista;

	public function setUp(){
		$this->lista = new Lista();
	}

	public function testChecarSeListaEstaVazia(){
		$this->assertEmpty($this->lista->itens);
	}

	public function testChecarListaAposAdicionarUmItem(){
		$this->lista->addProduto('Bolacha');
		$this->assertCount(1,$this->lista->itens);
	}

	public function testChecarListaAposDeletarUmItem(){
		$this->lista->deleteProduto('Bolacha');
		$this->assertEmpty($this->lista->itens);
	}
		
	public function tearDown(){
		$this->lista = null;
	}
}


?>