<?php
require ("Funcionario.php");
require ("Gerente.php");
require ("Mecanico.php");
require ("Vendedor.php");
require ("Montador.php");

$gerente = new Gerente ("Fernando", 36, "111.111.111.-11", 3000, "Gerente");
$gerente->getNome();
$gerente->getIdade();
$gerente->getCpf();
echo "SALÁRIO:".$gerente->getSalario()."<br>";
$gerente->getCargo();
$gerente->setDescontar1(20);
$gerente->getDescontar1();
$gerente->descontar();

echo "<br>"."<br>";

$vendedor = new Vendedor ("Marcos", 32, "111.111.111.-11", 2000, "Vendedor");
$vendedor->getNome();
$vendedor->getIdade();
$vendedor->getCpf();
echo "SALÁRIO:".$vendedor->getSalario()."<br>";
$vendedor->getCargo();
$vendedor->setDescontar2(10);
$vendedor->getDescontar2();
$vendedor->descontar();

echo "<br>"."<br>";

$montador = new Montador ("Carlos", 34, "111.111.111.-11", 1500, "Montador");
$montador->getNome();
$montador->getIdade();
$montador->getCpf();
echo "SALÁRIO:".$montador->getSalario()."<br>";
$montador->getCargo();
$montador->setDescontar3(5);
$montador->getDescontar3();
$montador->descontar();


echo "<br>"."<br>";

$mecanico = new Mecanico ("Junior", 30, "111.111.111.-11", 1300, "Mecanico");
$mecanico->getNome();
$mecanico->getIdade();
$mecanico->getCpf();
echo "SALÁRIO:".$mecanico->getSalario()."<br>";
$mecanico->getCargo();
$mecanico->setDescontar4(3);
$mecanico->getDescontar4();
$mecanico->descontar()."<br>";

?>