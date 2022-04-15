/*
Crie uma aplicação capaz de identificar se uma determinada pessoa pode ou não doar sangue.Utilize a variáveis $idade e $peso no processo. Neste primeiro momento, faça a atribuição de valores as variáveis de forma estática, ou seja, no processo de atribuição.

Se a idade estiver entre (e inclusive) 16 e 69 anos e o peso for igual ou superior a 50kg, então o sistema deve imprimir a mensagem "Atende aos requisitos", caso contrário o sistema deverá exibir a mensagem "Não atende aos requisitos".
*/

<?php
$idade = 16;
$peso = 50;

//IF ENCADEADO
// if($idade >= 16){
//     if($peso >= 50){
//         echo '<p>Atende aos requisitos.</p>';
//     }
//     else {
//         echo '<p>Não atende aos requisitos.</p>';
//     }
// }
// else {
//     echo '<p>Não atende aos requisitos.</p>';
// }

//IF TERNÁRIO
echo $idade >= 16 && $peso >= 50 ? '<p>Atende aos requisitos.</p>' : '<p>Não atende aos requisitos.</p>';
?>