<?php
$p1 = new Produto(){
    $p1 -> nome ="caneta";
    $p1 -> preco = 2,5;
    $p1 -> quantidade = 10;
    $p1 -> exibirInformacoes("caneta", 2,5, 10);

}

 $p2 = new Produto();
 $p2 -> nome ="caneta azul";
 $p2 -> preco = 3,5;
 $p2 -> quantidade = 15;
 $p2 -> exibirInformacoes("caneta azul", 3,5, 15);

 function mostrarMediaPrecos($p1, $p2) {
    $media = ($p1->preco + $p1->preco)/2;
    echo "A média dos preços é: $media <br>"
}
mostrarMediaPrecos($p1,$p2)


 






?>