<?php


class Montador extends Funcionario{

public function __construct($nome, $idade, $cpf, $salario, $cargo){
	$this->setNome($nome);
	$this->setIdade($idade);
	$this->setCpf($cpf);
	$this->setSalario($salario);
	$this->setCargo($cargo);
}

private $desconto3;

public function setDescontar3($desconto3param){
$this->desconto3 = $desconto3param;
}

 public function getDescontar3(){
echo"SALÁRIO COM DESCONTO: ".($this->getSalario() - ($this->getSalario() / 100 * $this->desconto3))."<br>";

}


public function descontar()
	{
		echo "Descontado 5%";
	}

}
?>