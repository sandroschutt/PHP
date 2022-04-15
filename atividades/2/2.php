<!-- Crie uma função para calcular o imposto de renda a ser pago com base em um salário passado por parâmetro.

Para calcular o valor a ser pago, considere a tabela abaixo:


BASE DE CÁLCULO         ALÍQUOTA
Até 1.903.98            isento
1.903.98 até 2.826.65   7.5%
2.826.65 até 3.751.05   15%
3.751.05 até 4.664.68   22.5%
acima disso             27.5% -->

<?php
function calculaImpostoRenda($salario){
    if($salario <= 1903.98){
        echo 'Isento';
    }
    else if($salario > 1903.98 && $salario <= 2826.65){
        $imposto = $salario * .075;
        echo "Valor do IR: R$$imposto";
    }
    else if($salario > 2826.65 && $salario <= 3751.05){
        $imposto = $salario * .15;
        echo "Valor do IR: R$$imposto";
    }
    else if($salario > 3751.05 && $salario <= 4664.68){
        $imposto = $salario * .225;
        echo "Valor do IR: R$$imposto";
    }
    else{
        $imposto = $salario * .275;
        echo "Valor do IR: R$$imposto";
    }
}

$salario = 5000.00;
calculaImpostoRenda($salario);
?>