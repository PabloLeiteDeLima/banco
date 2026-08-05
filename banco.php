<?php

//  -> Pegar via teclado (nome e saldo inicial);
echo "Digite o titular da conta: ";
$nome = fgets(STDIN);
echo "Saldo inicial: ";
$saldo = fgets(STDIN);

//  -> Mostrar ao usuário conta aberta (titular e saldo inicial);
echo "\n*************************";
echo "\n=> Conta Aberta com sucesso!\n-> Titular: " . $nome . "-> Saldo inicial R$ " . $saldo . " reais";
echo "*************************\n\n";