
<?php
abstract class pessoa {
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

}
   

class Aluno extends Pessoa {
    private $curso;

public function __construct($nome, $idade, $sexo, $curso) {
    parent::__construct($nome, $idade, $sexo);
    $this->curso = $curso;
    }

    public function apresentar() {
        echo "Oi sou {$this->nome}, tenho {$this->idade} anos e faço o curso de {$this->curso}.<br>";
    }
}


$aluno1 = new Aluno("Pedro", 18, "Masculino", "Informática");
$aluno1->apresentar();
$aluno1->fazerAniversario();

?>
<br>
<br>
resposta do exercicio um:
Porque classes abstratas servem apenas como modelo.
Elas podem conter métodos comuns e abstratos, mas não representam um objeto concreto