<?php

//  -> Pegar via teclado (nome e saldo inicial);
echo "Digite o titular da conta: ";
$nome = fgets(STDIN);
echo "Saldo inicial: ";
$saldo = (float) fgets(STDIN);

//  -> Mostrar ao usuário conta aberta (titular e saldo inicial);
echo "\n*********************************";
echo "\n*** Conta Aberta com sucesso! ***\n";
echo "-> Titular: " . $nome;
echo "-> Saldo inicial R$ $saldo\n";
echo "*********************************\n\n";

//  -> Mostrar um menu:
//      * 1. Verificar saldo;
//      * 2. Saque (Tratar se conta tem saldo suficiente para o saque);
//      * 3. Depositar;
//      * 4. Sair;

$opcao = 0;
while($opcao != 4){
    echo "1. Verificar saldo\n";
    echo "2. Fazer saque\n";
    echo "3. Fazer deposito\n";
    echo "4. Sair do sistema\n";
    echo "-> Escolha uma opção: ";
    $opcao = fgets(STDIN);

    // Tratar as opções escolhidas...
    switch($opcao){
        case 1: //Mostrar saldo. OK...
            echo "\n-> Saldo disponível R$ " . $saldo . "\n\n";
            break;
        case 2: // Fazer saque. OK...
            echo "\n-> Qual valor do saque: ";
            $saque = fgets(STDIN);
            if($saque <= $saldo){
                echo "\n Seu saque foi no valor de R$ $saque";
                echo "-> Saque efetuado com sucesso!\n";
                $saldo -= $saque;
            }else{
                echo "\n-> Saldo indisponível.\n";
            }
            echo "\n\n";
            break;
        case 3: // Fazer deposito. OK...
            echo "\n-> Informe o valor do deposito: ";
            $deposito = fgets(STDIN);
            $saldo += $deposito;
            echo "\n Seu deposito foi no valor de R$ $deposito";
            echo "-> Deposito realizado com sucesso!\n\n";
            break;
        case 4: // Sair do sistema.
            echo "\n Saindo do sistema.";
            echo "\n-> Ate logo: " . $nome ;
            break;
        default:
            echo "\n-> Opção inválida!\n-> Favor, digite uma opção válida.\n\n";
    }

}