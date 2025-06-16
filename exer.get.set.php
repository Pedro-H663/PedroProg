<?php

class ContaBancaria {
    private $numeroConta;
    private $numeroAgencia;
    private $saldo;
    private $nomeTitular;

    public function __construct($nome, $numeroConta, $numeroAgencia, $saldo = 100) {
        $this->nomeTitular = $nome;
        $this->numeroConta = $numeroConta;
        $this->numeroAgencia = $numeroAgencia;
        $this->saldo = $saldo;
    }

    public function getNumeroConta() {
        return $this->numeroConta;
    }

    public function setNumeroConta($numeroConta) {
        $this->numeroConta = $numeroConta;
    }

    public function getNumeroAgencia() {
        return $this->numeroAgencia;
    }

    public function setNumeroAgencia($numeroAgencia) {
        $this->numeroAgencia = $numeroAgencia;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function depositar($valor) {
        if ($valor > 0) {
            $this->saldo += $valor;
            echo "Depósito de R$ {$valor} efetuado com sucesso.<br>";
        } else {
            echo "Valor de depósito inválido.<br>";
        }
    }

    public function sacar($valor) {
        if ($valor > $this->saldo) {
            echo "Saldo insuficiente para saque.<br>";
        } elseif ($valor <= 0) {
            echo "Valor de saque inválido.<br>";
        } else {
            $this->saldo -= $valor;
            echo "Saque de R$ {$valor} efetuado com sucesso.<br>";
        }
    }
}

?>
