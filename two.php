<?php

abstract class Pessoa {
    protected $nome;
    protected $idade;
    protected $sexo;

    public function __construct($nome, $idade, $sexo) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
    }

    final public function fazerAniversario() {
        $this->idade++;
        echo " Parabéns {$this->nome} agora você tem {$this->idade} anos.<br>";
    }

    public function mostrarDados() {
         echo "Nome: {$this->nome}<br>";
        echo "Idade: {$this->idade}<br>";
        echo "Sexo: {$this->sexo}<br>";
    }
}

class Visitante extends Pessoa {
    
}

$v1 = new Visitante("Pedro", 18, "Masculino");
$v1->mostrarDados();
$v1->fazerAniversario();
?>


?>