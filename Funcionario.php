<?php

class Funcionario{

private $nome;
private $idade;
private $cpf;
private $salario;
private $cargo;


public function setNome($nomeparam){
$this->nome = $nomeparam;
}
public function getNome(){
	echo "NOME:". $this->nome."<br>";

}

public function setIdade($idadeparam){
$this->idade = $idadeparam;
}
public function getIdade(){
	echo "IDADE:". $this->idade."<br>";

}

public function setCpf($cpfparam){
$this->cpf = $cpfparam;
}
public function getCpf(){
	echo "CPF: ".$this->cpf."<br>";

}

public function setSalario($salarioparam){
$this->salario = $salarioparam;
}
public function getSalario(){
	return $this->salario;


}

public function setCargo($cargoparam){
$this->cargo = $cargoparam;
}
public function getCargo(){
	echo "CARGO:".$this->cargo."<br>";

}


public function descontar (){

}
}

?>

