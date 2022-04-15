<!-- CASTING -->

<?php
    $valor = 10; //integer
    $novoValor = (float) $valor; //int --> float
    //tbm é possível fazer a conversão para double, string, real
    $novoValor2 = (double) $valor; //int --> float
    $novoValor3 = (string) $valor; //int --> float

    echo gettype($valor);
    echo '<br>';
    echo gettype($novoValor);
    echo '<br>';
    echo gettype($novoValor2);
    echo '<br>';
    echo gettype($novoValor3);
?>