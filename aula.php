<?php

class produto {

public $nome;
public $preco;
public $quantidade;
  
public function exibirInformacoes(){
    echo "<strong>Nome: </strong>$this->nome,<strong>Preço:</strong>$this->preco,<strong>Quantidade:</strong>$this->quantidade <br>";
}
}





?>