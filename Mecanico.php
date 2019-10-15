<?php


class Mecanico extends Funcionario{

public function __construct($nome, $idade, $cpf, $salario, $cargo){
	$this->setNome($nome);
	$this->setIdade($idade);
	$this->setCpf($cpf);
	$this->setSalario($salario);
	$this->setCargo($cargo);
}

private $desconto4;

public function setDescontar4($desconto4param){
$this->desconto4 = $desconto4param;
}

 public function getDescontar4(){
echo"SALÁRIO COM DESCONTO: ".($this->getSalario() - ($this->getSalario() / 100 * $this->desconto4))."<br>";

}


public function descontar()
	{
		echo "Descontado 3%";
	}
}

?>