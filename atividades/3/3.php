<!-- Crie um script capaz de produzir, através de um laço de repetição, um array com 6 elementos numéricos aleatórios entre 1 e 60, simulando o funcionamento do sorteui da mega sena, Atente-se ao fato de que os números aleatórios contidos dentro do array não podem ser repetidos. -->

<?php
$array = [];

for($i = 0; $i <= 5; $i++){
    $array[] = rand(1,60);
}

foreach($array as $valor){
    if(in_array($valor, $array) == true){
        $array[array_search($valor, $array)] = rand(1,60);
    }
}

echo '<pre>';
print_r($array);
echo '</pre>';
?>