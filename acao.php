<?php
require 'Carro.php';
require 'Equipe.php';
require 'Piloto.php';
require 'Pontuavel.php';
require 'PilotoVeterano.php';
require 'Construtor.php';
require 'Categoria.php';
require 'Corrida.php';

$carro = new Carro("SF-26", "1000cv");
$equipe = new Equipe("Ferrari", "Itália", $carro);
if ($_POST['tipo'] == "piloto") {
    $piloto = new Piloto(
        $_POST['nome'],
        $_POST['idade'],
        $_POST['nacionalidade'],
        $equipe
    );
} else {
    $piloto = new PilotoVeterano(
        $_POST['nome'],
        $_POST['idade'],
        $_POST['nacionalidade'],
        $equipe,
        $_POST['titulos'],
        $_POST['anosCarreira']
    );
}
$construtor = new Construtor("Ferrari", "Itália", 312);
$categoria = new Categoria("Fórmula 1", "Sem reabastecimento");
$corrida = new Corrida("GP de Interlagos", "Brasil", $categoria);

$carro->adicionarPiloto($piloto);
$categoria->adicionarEquipe($equipe);
$corrida->adicionarPiloto($piloto);

echo "<h1>Sistema de Gerenciamento de Automobilismo</h1>";

echo "<h2>Carro</h2>";
echo "Modelo: " . $carro->getModelo() . "<br>";
echo "Potência: " . $carro->getPotencia() . "<br>";

echo "<h2>Equipe</h2>";
echo "Nome: " . $equipe->getNome() . "<br>";
echo "Nacionalidade: " . $equipe->getNacionalidade() . "<br>";
echo "Carro: " . $equipe->getCarro()->getModelo() . "<br>";

echo "<h2>Piloto</h2>";
echo "Nome: " . $piloto->getNome() . "<br>";
echo "Idade: " . $piloto->getIdade() . "<br>";
echo "Nacionalidade: " . $piloto->getNacionalidade() . "<br>";
echo "Equipe: " . $piloto->getEquipe()->getNome() . "<br>";

if ($_POST['tipo'] == "veterano") {
    echo $piloto->exibirPontuacao() . "<br>";
    echo $piloto->exibirPerfil() . "<br>";
}

echo "<h2>Construtor</h2>";
echo "Nome: " . $construtor->getNome() . "<br>";
echo "País: " . $construtor->getPais() . "<br>";
echo $construtor->exibirPontuacao() . "<br>";

echo "<h2>Categoria</h2>";
echo "Tipo: " . $categoria->getTipo() . "<br>";
echo "Regras: " . $categoria->getRegras() . "<br>";

echo "<h2>Corrida</h2>";
echo "Nome: " . $corrida->getNome() . "<br>";
echo "Local: " . $corrida->getLocal() . "<br>";
echo "Categoria: " . $corrida->getCategoria()->getTipo() . "<br>";

echo "<h2>Status</h2>";
echo $piloto->participarCorrida($corrida) . "<br>";
echo $equipe->exibirDetalhes() . "<br>";
?>
