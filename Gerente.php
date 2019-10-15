<?php

class Gerente extends Funcionario{

public function __construct($nome, $idade, $cpf, $salario, $cargo){
	$this->setNome($nome);
	$this->setIdade($idade);
	$this->setCpf($cpf);
	$this->setSalario($salario);
	$this->setCargo($cargo);
}

private $desconto1;

public function setDescontar1($desconto1param){
$this->desconto1 = $desconto1param;
}

 public function getDescontar1(){
echo"SALÁRIO COM DESCONTO: ".($this->getSalario() - ($this->getSalario() / 100 * $this->desconto1))."<br>";

}
public function descontar()
	{
		echo "Descontado 20%";
	}

}
?>