<!-- ARRAYS -->

<?php
// $lista = array();
$lista = [];

for($i=0;$i<3;$i++){
    $lista[$i] = 'append';
}

// foreach($lista as $i){
//     echo "$i <br/>";
// }

echo '<pre>'; //método para formatar a exibição da array no BOM
var_dump($lista); //função para exibição de array inline
echo '</pre>';

// echo "$lista[0] <br/>";
// echo "$lista[1] <br/>";
// echo "$lista[2] <br/>";
?>