<?php

// Coletando os valores dos itens
$quantidade1 = $_POST["quantidade1"]; // CLASSICA
$quantidade2 = $_POST["quantidade2"]; // FOLHADAS
$quantidade3 = $_POST["quantidade3"]; // 10+2
$quantidade4 = $_POST["quantidade4"]; // COMBÃO
$quantidade5 = $_POST["quantidade5"]; // COCA
$quantidade6 = $_POST["quantidade6"]; // SPRITE
$quantidade7 = $_POST["quantidade7"]; // PRATS
$quantidade8 = $_POST["quantidade8"]; // AGUA
$quantidade9 = $_POST["quantidade9"]; // SUKITA
$quantidade10 = $_POST["quantidade10"]; // CARNE
$quantidade11 = $_POST["quantidade11"]; // QUEIJO
$quantidade12 = $_POST["quantidade12"]; // FRANGO
$quantidade13 = $_POST["quantidade13"]; // CHOCOLATE
$quantidade14 = $_POST["quantidade14"]; // TORTA
$quantidade15 = $_POST["quantidade15"]; // MOUSE
$quantidade16 = $_POST["quantidade16"]; // PUDIM
$quantidade17 = $_POST["quantidade17"]; // BROWNIE

$obs = $_POST["obs"]; // observações
$ValorTotal = 0.00;

// Definindo os preços de cada produto
$preco_classica = 29.50;
$preco_folhadas = 38.90;
$preco_10mais2 = 59.90;
$preco_combao = 55.90;
$preco_coca = 5.50;
$preco_sprite = 6.00;
$preco_prats = 6.50;
$preco_agua = 2.50;
$preco_sukita = 16.50;
$preco_carne = 3.50;
$preco_queijo = 4.00;
$preco_frango = 5.50;
$preco_chocolate = 6.00;
$preco_torta = 7.50;
$preco_mouse = 6.50;
$preco_pudim = 5.50;
$preco_brownie = 7.00;

// Calculando o valor total do pedido
$ValorTotal += $preco_classica * $quantidade1;
$ValorTotal += $preco_folhadas * $quantidade2;
$ValorTotal += $preco_10mais2 * $quantidade3;
$ValorTotal += $preco_combao * $quantidade4;
$ValorTotal += $preco_coca * $quantidade5;
$ValorTotal += $preco_sprite * $quantidade6;
$ValorTotal += $preco_prats * $quantidade7;
$ValorTotal += $preco_agua * $quantidade8;
$ValorTotal += $preco_sukita * $quantidade9;
$ValorTotal += $preco_carne * $quantidade10;
$ValorTotal += $preco_queijo * $quantidade11;
$ValorTotal += $preco_frango * $quantidade12;
$ValorTotal += $preco_chocolate * $quantidade13;
$ValorTotal += $preco_torta * $quantidade14;
$ValorTotal += $preco_mouse * $quantidade15;
$ValorTotal += $preco_pudim * $quantidade16;
$ValorTotal += $preco_brownie * $quantidade17;

// Exibindo a mensagem de sucesso e o valor total
echo "Pedido realizado com sucesso!<br>";
echo "Sua conta ficou em R$: " . number_format($ValorTotal, 2, ',', '.') . "<br>";
echo "Observações: " . htmlspecialchars($obs) . "<br>";
echo "<br><a href='cardapio.html'>Voltar</a>";

?>
