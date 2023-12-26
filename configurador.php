<?php
session_start(); // Inicie a sessão
include 'connect.php';

// Recupere o nome do utilizador da sessão
$Nome = $_SESSION['Nome'];
$Processador = $_POST["Processador"];
$PlacaMae = $_POST["Placa_mae"];
$PlacaVideo = $_POST["Placa_video"];
$Memoria = $_POST["Memoria"];
$Disco = $_POST["Disco"];
$Fonte = $_POST["Fonte"];
$Torre = $_POST["Torre"];



if (!$Nome || !$Processador || !$PlacaMae || !$PlacaVideo || !$Memoria || !$Disco || !$Fonte || !$Torre) {
    echo "Campos em falta. Volte atrás e tente novamente.";
    exit;
}

$inserir_componentes_query = "INSERT INTO Componentes (processador, PlacaMae, PlacaVideo, Memoria, Disco, Fonte, Torre, Nome) VALUES ('$Processador', '$PlacaMae', '$PlacaVideo', '$Memoria', '$Disco', '$Fonte', '$Torre', '$Nome')";
$inserir_componentes = mysqli_query($liga, $inserir_componentes_query);

header("Location: configurador.html");


?>
