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



class Professor extends Pessoa {
    protected $especialidade;
    protected $salario;

    public function __construct($nome, $idade, $sexo, $especialidade, $salario) {
        parent::__construct($nome, $idade, $sexo);
        $this->especialidade = $especialidade;
        $this->salario = $salario;
    }

    public function receberAumento($valor) {
        $this->salario += $valor;
        echo "O professor {$this->nome} recebeu um aumento de R$ {$valor}.<br>";
        echo "Novo salário: R$ {$this->salario}<br>";
    }

    public function mostrarDados() {
        parent::mostrarDados();
        echo "Especialidade: {$this->especialidade}<br>";
        echo "Salário: R$ {$this->salario}<br>";
    }
}

$a1 = new Aluno("Jonas", 19, "Masculino", 11111, "Informática");
$a2 = new Aluno("Jeova", 20, "Masculino", 22222, "Administração");
$b1 = new Bolsista("Jesus", 22, "Masculino", 33333, "Design", 800);
$p1 = new Professor("Judas", 45, "Masculino", "Matemática", 3500);

$pessoas = [$a1, $a2, $b1, $p1];
echo "<h2> Lista de Pessoas e Ações</h2>";

foreach ($pessoas as $p) {
    echo "<hr>";
    echo "<strong>Classe:</strong> " . get_class($p) . "<br>";
    $p->mostrarDados();

    if ($p instanceof Bolsista) {
        $p->renovarBolsa();
        $p->pagarMensalidade();
    } elseif ($p instanceof Aluno) {
        $p->pagarMensalidade();
    } elseif ($p instanceof Professor) {
        $p->receberAumento(500);
    }
//A classe raiz da hierarquia é Pessoa, pois todas as outras classes herdam dela as folhas são Aluno, Bolsista, Professor e Visitante, que são as classes concretas e instanciáveis do sistema.

    echo "<br>";
}
?>
