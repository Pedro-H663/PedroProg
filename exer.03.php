<?php

class Caneta{
  
    public $cor;
    public $marca;
    public $ponta;
    public $tamanho;
    public $carga;

    public function escrever(){
        echo "Escrevendo...<br>";
    }
    public function rabiscar(){
        echo "Rabiscando...<br>";
    }
    public function sublinar(){
        echo "Sublinhando...<br>";
    }
    public function pintar(){
        echo "Pintando...<br>";
    }

}

$caneta1 = new Caneta();

$caneta1->cor = "verde";
$caneta1->marca = "BIC";
$caneta1->ponta = 0.5;
$caneta1->tamanho = "medio";
$caneta1->carga = 100;

echo "Cor: " . $caneta1->cor . "<br>";
echo "Marca: " . $caneta1->marca . "<br>";
echo "Ponta: " . $caneta1->ponta . "<br>";
echo "Tamanho: " . $caneta1->tamanho . "<br>";
echo "Carga: " . $caneta1->carga . "<br>";

$caneta1->escrever();
$caneta1->rabiscar();
$caneta1->sublinar();
$caneta1->pintar();
?>
