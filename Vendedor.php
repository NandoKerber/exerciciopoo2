<?php


class Vendedor extends Funcionario{

public function __construct($nome, $idade, $cpf, $salario, $cargo){
	$this->setNome($nome);
	$this->setIdade($idade);
	$this->setCpf($cpf);
	$this->setSalario($salario);
	$this->setCargo($cargo);
}

private $desconto2;

public function setDescontar2($desconto2param){
$this->desconto2 = $desconto2param;
}

 public function getDescontar2(){
echo"SALÁRIO COM DESCONTO: ".($this->getSalario() - ($this->getSalario() / 100 * $this->desconto2))."<br>";

}


public function descontar()
	{
		echo "Descontado 10%";
	}

}

?>