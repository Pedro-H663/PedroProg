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
        echo " {$this->nome} sua mensalidade foi paga com sucesso <br>";
    }

    public function mostrarDados() {
        parent::mostrarDados();
        echo "Matrícula: {$this->matricula}<br>";
        echo "Curso: {$this->curso}<br>";
    }
}

class Bolsista extends Aluno {
    private $bolsa; 

    public function __construct($nome, $idade, $sexo, $matricula, $curso, $bolsa) {
        parent::__construct($nome, $idade, $sexo, $matricula, $curso);
        $this->bolsa = $bolsa;
    }

    public function renovarBolsa() {
        echo "Sua bolsa foi renovada com sucesso!<br>";
    }

    public function pagarMensalidade() {
        echo "Sua mensalidade paga {$this->nome}.<br>";
    }

    public function mostrarDados() {
        parent::mostrarDados();
        echo "Valor da Bolsa: R$ {$this->bolsa}<br>";
    }
}


$a1 = new Aluno("Matheus", 17, "Masculino", 76767, "Informática");
$b1 = new Bolsista("Leonardo", 18, "Masculino", 67676, "Agronomia", 1200.00);

echo "<h3>Aluno Comum</h3>";
$a1->mostrarDados();
$a1->pagarMensalidade();
echo "<hr>";

echo "<h3>Bolsista</h3>";
$b1->mostrarDados();
$b1->renovarBolsa();
$b1->pagarMensalidade();
?>