<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP</title>
    </head>
    <body>
        <?php
            $possui_cartao_credito = false;
        ?>

        <p>O cliente possui cartão de crédito? <?= $possui_cartao_credito == true ? 'Sim' : 'Não'; ?></p>
    </body>
</html>