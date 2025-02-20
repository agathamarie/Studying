<?php

// 36- 5 min
    // $comida = 103;
    // $bebida = 202;
    // $valorTotal = 0;

    // switch($comida){
    //     case 100:
    //         $valorTotal += 11.20;
    //     case 101:
    //         $valorTotal += 8.30;
    //     case 102:
    //         $valorTotal += 11.50;
    //     case 103:
    //         $valorTotal += 16.20;
    // }
    // switch($bebida){
    //     case 201:
    //         $valorTotal += 6.00;
    //     case 202:
    //         $valorTotal += 7.50;
    //     case 203:
    //         $valorTotal += 4.70;
    // }

    // echo "Valor a pagar: R$ ".$valorTotal."!";

// 37 - 3 min
    // $paes = 50;
    // $broas = 50;

    // $precoPao = 1;
    // $precoBroa = 3.50;

    // $totalComida = ($paes * $precoPao) + ($broas * $precoBroa);

    // $poupanca = $totalComida * 0.10;
    // echo "Você vendeu tudo isso: R$".$totalComida.", você precisa guardar: R$".$poupanca;

// 38 - 1.5 min
    // $kiloPrato = 2.00;

    // $valorTotal = $kiloPrato * 59.00;
    // echo "Pague: R$". $valorTotal ." pelo seu prato!";

// 39 - 1.5 min
    // $dia = 2;
    // $mes = 3;
    // $anoTotal = 365;

    // $diasPassados = ($mes * 30) - $dia;

    // echo "Já se passaram ".$diasPassados." dias desde o começo do ano!";

// 40 - 1.5 min
    // $salario = 1200;

    // $c1 = 200 + (200*(2/100));
    // $c2 = 120 + (120*(2/100));

    // echo "Seu João terá que pagar R$".($salario -($c1+$c2));

// 41 - 25 min | Me perdi na logica de inicio, e depois tentei muito arrendondar para baixo sem função, mas não consegui
    // $conta = 101.53;

    // $dividir = $conta / 3;

    // $gabrielMaria = floor($dividir);

    // $parteWillian = $conta - ($gabrielMaria * 2);

    // echo "Maria e Gabriel vão pagar R$".$gabrielMaria." reais e Willian R$".$parteWillian." reais";

// 42 -  3 min
    // $lata = 360 / 1000;
    // $garrafaMedia = 600 / 1000;
    // $garrafaGrande = 2;

    // $qtdLata = 2;
    // $qtdGarrafaM = 3;
    // $qtdGarrafaG = 1;

    // $totalLitros = ($lata * $qtdLata) + ($garrafaMedia * $qtdGarrafaM) + ($garrafaGrande * $qtdGarrafaG);

    // echo "Você vai comprar " . $totalLitros . " litros de refrigerante";

// 43 - 2.5 min
    // $umCent = 5;
    // $cincoCent = 10;
    // $dezCent = 50;
    // $vinte5Cent = 4;
    // $cinquentaCent = 4;
    // $umReal = 5;

    // $total = ($umCent*0.01) + ($cincoCent*0.05) + ($dezCent*0.10) + ($vinte5Cent*0.25) + ($cinquentaCent*0.50) + ($umReal*1);
    // echo "Você juntou: R$".$total." reais";

// 44 - 1 min 
    // $num = 5;
    // for ($i = 0; $i <= 10; $i++) {
    //     echo "\n".$num." x ".$i." = ".($num * $i);
    // }


// 45 - 3 min
    // $anoNasc = 2006;
    // $anoAtual = 2025;

    // $idadeAnos = $anoAtual - $anoNasc;
    // $idadeMeses = ($anoAtual - $anoNasc) * 12;
    // $idadeDias = ($anoAtual - $anoNasc) * 365;
    // $idadeSemanas = (($anoAtual - $anoNasc) * 365) / 7;

    // echo "Idade em anos: ". $idadeAnos ."\nIdade em meses: ". $idadeMeses ."\nIdade em semanas: ".$idadeSemanas."\nIdade em dias: ".$idadeDias;

// 46 - 5 min | Demorei para achar algo que simulasse o input e descobri que os operadores lógicos tem ordem de importancia
    // $nome = 'Agatha';
    // $sexo = 'F';
    // $estadoCivil = 'CASADA';

    // if (($sexo == 'F' or $sexo == 'f') and $estadoCivil == 'CASADA') {
    //     echo 'Quantos anos você está casada? ';
    //     $anoCasada = fgets(STDIN); 
    //     echo 'Anos casada: '.$anoCasada ;
    // }
    // echo ":)\n";


// 47 - menos que 1min
    // $n1 = 10;
    // $n2 = 10;

    // $C = $n1 == $n2 ? $n1 + $n2 : $n1 * $n2;
    // echo"Valor dos seus dois numeros: ".$C;

// 48 - 3 min
    // $precoProduto = 100;
    // $formaPagamento = 1;

    // switch ($formaPagamento) {
    //     case 1: // a vista no dinheiro ou pix
    //         $total = $precoProduto - ($precoProduto*10/100);
    //         break;
    //     case 2: // a vista no cartao de credito
    //         $total = $precoProduto - ($precoProduto*(5/100));
    //         break;
    //     case 3: // 2x no cartao
    //         $total = $precoProduto;
    //         break;
    //     case 4: // 3x no cartao
    //         $total = $precoProduto + ($precoProduto*(10/100));
    //         break;
    // }
    // echo'Valor total a pagar: R$'.$total.' reais.';

// 49 - 1 min
    // $real = 50;
    // $cotacaoDolar = 5;

    // echo"Convertendo R$".$real." reais para dolares, fica: US$".($real * $cotacaoDolar)." dolares";

// 50 - menos que 1 min
    // $num = 10;
    // echo"Sucessor: ".($num+1)."\nAntecessor: ".($num-1);

// 51 - 1 min
    // $total = 0;
    // while ($num != -999) {
    //     echo 'Digite um número: ';
    //     $num = fgets(STDIN);
    //     $total +=  $num;
    // }
    // echo "Total: '{$total}";

// 52 - 1.5 min
    // $cont = 0;
    // while ($num != -1) {
    //     echo 'Digite um número: ';
    //     $num += fgets(STDIN);
    //     $cont++;
    // }
    // echo "Quantidade de números digitados: '{$cont}";

// 53 - 1 min
    // $cont = 0;
    // while ($num != -999) {
    //     echo 'Digite um número: ';
    //     $num += fgets(STDIN);
    //     if($num % 2 != 0){
    //         $cont++;
    //     }
    // }
    // echo "Quantidade de números impares digitados: '{$cont}";

// 54 - 1 min
    // $cont = 0;
    // while ($num != 0) {
    //     echo 'Digite um número: ';
    //     $num += fgets(STDIN);
    //     if($num == 50){
    //         $cont++;
    //     }
    // }
    // echo "Quantidade de '50' digitados: '{$cont}";


// 55 - 4 min
    // for ($i = 0; $i < 20; $i++) {
    //     echo 'Digite um número: ';
    //     $num = fgets(STDIN);
    //     $nums[] = $num;
    // }
    // $maior = max($nums);
    // $menor = min($nums);
    // echo "Maior número digitado: $maior, menor número digitado: $menor ";

    // // outra forma de fazer sem max e min:
    // $maior = PHP_INT_MIN;
    // $menor = PHP_INT_MAX;

    // for ($i = 0; $i < 20; $i++) { 
    //     echo 'Digite um número: ';
    //     $num = fgets(STDIN);
        
    //     if ($num > $maior) {
    //         $maior = $num;
    //     }
    //     if ($num < $menor) {
    //         $menor = $num;
    //     }
    // }

// 56 - 4.5 min
    // $livrosBimestre = 3;

    // switch ($livrosBimestre) {
    //     case 1:
    //         $pontos = 5;
    //         break;
    //     case 2:
    //         $pontos = 15;
    //         break;
    //     case 3:
    //         $pontos = 30;
    //         break;
    //     case 4:
    //         $pontos = 60;
    //         break;
    // }

    // if ($pontos >= 20 && $pontos <= 30) {
    //     echo "Você pode escolher entre: Uma Eco Bag OU Caneta personalizada.";
    // } else if ($pontos >= 35 && $livrosBimestre < 60) {
    //     echo "Você pode escolher entre: Um livro (com valor máximo de R$30,00) OU Luminária de cabeceira.";
    // } else if ($livrosBimestre >= 65) {
    //     echo "Você pode escolher entre: 2 livros (com valor máximo de R$100,00) OU Power bank.";
    // } else {
    //     echo "Você não tem pontos suficientes.";
    // }

// 57 - 35 min | Quis testar de outra forma, tentei de vários jeitos, tentei pelo terminal, tentei pelo html, cansei e fiz assim. Preciso estudar mais sobre php
    // $sorveteBaunilha = 5.00;
    // $sorveteCafe = 6.50;
    // $bolinhoFloresta = 7.50;
    // $chipa = 2.00;
    // $capuccino = 5.00;

    // echo"Menu: 1 - Sorvete de Baunilha R$ $sorveteBaunilha | 2 - Sorvete de Café R$ $sorveteCafe | 3 - Bolinho de Floresta Negra R$ $bolinhoFloresta | 4 - Chipa R$ $chipa | 5 - Capuccino R$ $capuccino";

    // $escolha = 1;

    // switch ($escolha) {
    //     case 1:
    //         $total = $sorveteBaunilha;
    //         break;
    //     case 2:
    //         $total = $sorveteCafe;
    //         break;
    //     case 3:
    //         $total = $bolinhoFloresta;
    //         break;
    //     case 4:
    //         $total = $chipa;
    //         break;
    //     case 5:
    //         $total = $capuccino;
    //         break;
    // }

    // echo 'Deseja dar gorjeta para o garçom: ';
    // $gorjeta = True;

    // if($gorjeta == True) {
    //     echo "Seu total é de R$ ".($total + ($total*(10/100)));
    // } else {
    //     echo "Seu total é de R$ $total";
    // }

// 59 - 5 min | Demorei para pensar como ia mostrar o intervalo entre n1 e n2
    // $n1 = 10;
    // $n2 = 15;
    // $intervalo = [];

    // $maior = ($n1 > $n2) ? $n1 : $n2;
    // $menor = ($n1 < $n2) ? $n1 : $n2;
    // for ($i = $menor + 1; $i < $maior; $i++) {
    //     $intervalo[] = $i;
    // }
    // print_r($intervalo);

// 60 - 1.5  min
    // $num = 5;

    // for ($i = 1; $i <= 10; $i++){
    //     echo $num." x ".$i." = ".($num * $i); 
    // }

// 61 - 2 min
    // $impar = 0;
    // $par = 0;

    // for ($i = 0; $i < 10; $i++) {
    //     $num = fgets(STDIN);
    //     if($num % 2 == 0) {
    //         $par++;
    //     } else {
    //         $impar++;
    //     }
    // }

    // echo "Quantidade de números pares: $par\n";
    // echo "Quantidade de números ímpares: $impar\n";

// 62 - 2 min
    // $num = 5;
    // $fatorial = 1;

    // for ($i = 1; $i <= $num; $i++) {
    //     $fatorial *= $i;
    // }

    // echo "Fatorial: $fatorial";

// 63 - 3 min
    // $nums = [1, 5, 2, 7];
    // $soma = 0;

    // foreach ($nums as $num){
    //     $soma += $num;
    // }
    // echo $soma ."";
    // $maior = max($nums);
    // $menor = min($nums);
    // echo "Maior número digitado: $maior, menor número digitado: $menor ";


// 64 - min
$cidades = [
    'Campo Grande' => [
        'codigo' => 1234,
        'numeroVeiculosPasseio' => 25,
        'numeroAcidenteComVitima' => 35
    ],
    'Três Lagoas' => [
        'codigo' => 4321,
        'numeroVeiculosPasseio' => 15,
        'numeroAcidenteComVitima' => 10
    ],
    'Dourados' => [
        'codigo' => 2134,
        'numeroVeiculosPasseio' => 20,
        'numeroAcidenteComVitima' => 15
    ],
    'Andradina' => [
        'codigo' => 1243,
        'numeroVeiculosPasseio' => 5,
        'numeroAcidenteComVitima' => 25
    ],
    'Curitiba' => [
        'codigo' => 2143,
        'numeroVeiculosPasseio' => 10,
        'numeroAcidenteComVitima' => 5
    ]
];

foreach($cidade as $cidades){
    $acidentes['nota-final'];
}