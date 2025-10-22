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
        echo "Parabéns {$this->nome} agora você tem {$this->idade} anos.<br>";
    }

    public function mostrarDados() {
        echo "Nome: {$this->nome}<br>";
        echo "Idade: {$this->idade}<br>";
        echo "Sexo: {$this->sexo}<br>";
    }
}

class Aluno extends Pessoa {
    protected $matricula;
    protected $curso;

    public function __construct($nome, $idade, $sexo, $matricula, $curso) {
        parent::__construct($nome, $idade, $sexo); 
        $this->matricula = $matricula;
        $this->curso = $curso;
    }

    public function pagarMensalidade() {
        echo " {$this->nome} sua mensalidade foi paga com sucesso<br>";
    }

    public function mostrarDados() {
        parent::mostrarDados(); 
        echo "Matrícula: {$this->matricula}<br>";
        echo "Curso: {$this->curso}<br>";
    }
}

$a1 = new Aluno("Pedro", 18, "Masculino", 130827, "Informática");
$a1->mostrarDados();
$a1->pagarMensalidade();
$a1->fazerAniversario();
?>