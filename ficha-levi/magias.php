<?php
$servername = "sql212.infinityfree.com";  // Substitua com o nome do servidor
$username = "if0_37022282";                 // Substitua com seu usuário
$password = "751834927levi";                   // Substitua com sua senha
$dbname = "if0_37022282_ficha_personagem";            // Substitua com o nome do banco de dados

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Prepara e vincula
$stmt = $conn->prepare("INSERT INTO ficha_personagem (classe, info2, info3, raca, info5, bonus1, bonus2, atributo1, broke1_1, atributo2, broke2_1, atributo3, atributo4, atributo5, broke1_2, atributo6, broke2_2, atributo7, atributo8, checkbox1_1, checkbox1_2, checkbox1_3, checkbox2_1, checkbox2_2, checkbox2_3, vida, vida_maxima, vida_atual, bottom1_input, bottom2_input1, bottom2_input2) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

$stmt->bind_param("sssssssssssssssssssssssssssssss", $classe, $info2, $info3, $raca, $info5, $bonus1, $bonus2, $atributo1, $broke1_1, $atributo2, $broke2_1, $atributo3, $atributo4, $atributo5, $broke1_2, $atributo6, $broke2_2, $atributo7, $atributo8, $checkbox1_1, $checkbox1_2, $checkbox1_3, $checkbox2_1, $checkbox2_2, $checkbox2_3, $vida, $vida_maxima, $vida_atual, $bottom1_input, $bottom2_input1, $bottom2_input2);

// Define os parâmetros e executa
$classe = $_POST['classe'];
$info2 = $_POST['info2'];
$info3 = $_POST['info3'];
$raca = $_POST['raca'];
$info5 = $_POST['info5'];
$bonus1 = $_POST['bonus1'];
$bonus2 = $_POST['bonus2'];
$atributo1 = $_POST['atributo1'];
$broke1_1 = $_POST['broke1-1'];
$atributo2 = $_POST['atributo2'];
$broke2_1 = $_POST['broke2-1'];
$atributo3 = $_POST['atributo3'];
$atributo4 = $_POST['atributo4'];
$atributo5 = $_POST['atributo5'];
$broke1_2 = $_POST['broke1-2'];
$atributo6 = $_POST['atributo6'];
$broke2_2 = $_POST['broke2-2'];
$atributo7 = $_POST['atributo7'];
$atributo8 = $_POST['atributo8'];
$checkbox1_1 = isset($_POST['checkbox1-1']) ? 1 : 0;
$checkbox1_2 = isset($_POST['checkbox1-2']) ? 1 : 0;
$checkbox1_3 = isset($_POST['checkbox1-3']) ? 1 : 0;
$checkbox2_1 = isset($_POST['checkbox2-1']) ? 1 : 0;
$checkbox2_2 = isset($_POST['checkbox2-2']) ? 1 : 0;
$checkbox2_3 = isset($_POST['checkbox2-3']) ? 1 : 0;
$vida = $_POST['vida'];
$vida_maxima = $_POST['vida-maxima'];
$vida_atual = $_POST['vida-atual'];
$bottom1_input = $_POST['bottom1-input'];
$bottom2_input1 = $_POST['bottom2-input1'];
$bottom2_input2 = $_POST['bottom2-input2'];

$stmt->execute();

echo "Novo registro criado com sucesso";

$stmt->close();
$conn->close();
?>
