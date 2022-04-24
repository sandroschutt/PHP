<?php
$vagas = array();

$arquivo = fopen('php/vagas.hd', 'r');

while (!feof($arquivo)) {
    $registro = fgets($arquivo);
    $vagas[] = $registro;
}

fclose($arquivo);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- IMPORTS -->

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- CSS PERSONALIZADO -->
    <link rel="stylesheet" href="styles/style.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intern Job</title>
</head>

<body class="bg-dark">
    <!-- BARRA DE NAVEGAÇÃO -->
    <nav class="nav navbar navbar-expand-lg bg-success justify-content-between">
        <!-- LOGO -->
        <div>
            <img src="logo.png" alt="" srcset="" style="width: 50px; height: 50px; opacity: 35%; display: inline;">
            <h4 class="nav nav-item" style="color: #0000004f; display: inline;">1NT3RN_J0B</h4>
        </div>

        <!-- MENU -->
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active menu-link" href="index.php">H0M3</a>
            </li>
            <li class="nav-item">
                <a class="nav-link menu-link" href="#">SU4S V4G4S</a>
            </li>
            <li class="nav-item">
                <a class="nav-link menu-link" href="#">3ST4T1ST1C4S</a>
            </li>
        </ul>
    </nav>

    <!-- ENTRADA DE DADOS -->
    <div class="d-flex" style="font-family: 'Courier New', monospace;">
        <div class="card-body">
            <form class="" action="php/processa-dados.php" method="post">
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <input type="text" name="nome" class="form-control bg-dark border-success text-success" placeholder="Nome da Vaga">
                        </div>
                        <div class="col">
                            <input type="date" name="data" class="form-control bg-dark border-success text-success" placeholder="Data da aplicação">
                        </div>
                        <div class="col">
                            <select name="categoria" id="" class="form-select bg-dark border-success text-success" aria-label="Categoria">
                                <option selected>Categoria</option>
                                <option value="Analista de Dados">Analista de Dados</option>
                                <option value="Analista de Sistemas">Analista de Sistemas</option>
                                <option value="Automação">Automação</option>
                                <option value="Back-end Jr">Back-end Jr</option>
                                <option value="Back-End Pleno">Back-end Pleno</option>
                                <option value="Back-End Sênior">Back-end Sênior</option>
                                <option value="Banco de Dados">Banco de Dados</option>
                                <option value="C++ Dev">C++ Dev</option>
                                <option value="C# Dev">C# Dev</option>
                                <option value="Engenheiro de Software">Engenheiro de Software</option>
                                <option value="Estagio Front-End">Estágio Front-end</option>
                                <option value="Estagio Back-End">Estágio Back-end</option>
                                <option value="Flutter Dev">Flutter Dev</option>
                                <option value="Front-End Jr">Front-end Jr</option>
                                <option value="Front-End Pleno">Front-end Pleno</option>
                                <option value="Front-End Sênior">Front-end Sênior</option>
                                <option value="I.A.">I.A.</option>
                                <option value="Java Dev">Java Dev</option>
                                <option value="PHP Dev">PHP Dev</option>
                                <option value="Python Dev">Python Dev</option>
                                <option value="Ruby on Rails Dev">Ruby on Rails Dev</option>
                            </select>
                        </div>
                        <div class="col">
                            <select name="status" id="" class="form-select bg-dark border-success text-success" aria-label="Status">
                                <option selected>Status</option>
                                <option value="Analista de Dados">Aplicado</option>
                                <option value="Analista de Sistemas">Currículo em Análise</option>
                                <option value="Back-End Pleno">Entrevista</option>
                                <option value="Automação">Fit Cultural</option>
                                <option value="Back-end Jr">Teste de Lógica</option>
                                <option value="Back-End Sênior">Reprovado</option>
                                <option value="Banco de Dados">Cancelado</option>
                            </select>
                        </div>
                        <div class="col">
                            <input type="text" name="link" class="form-control border-success bg-dark text-success" placeholder="link">
                        </div>
                        <button type="submit" class="col-sm btn btn-dark btn-sm text-success">Add</button>
                    </div>
            </form>
        </div>

        <h3 class="text-success" style="margin: 20px 0 10px 0;">Suas Vagas:</h3>

        <div class="card-body">
            <?php foreach ($vagas as $vaga) { ?>

                <?php

                $vaga_dados = explode('#', $vaga);

                ?>
                <div class="cartao card-body bg-dark">
                    <h4 class="col card-title"><a href="<?= $vaga_dados[4] ?>" class="link" style="text-decoration: none; color: green;"><?= $vaga_dados[0] ?></a></h4>
                    <p class="btn btn-dark text-success"><?= $vaga_dados[1] ?></p>
                    <p class="btn btn-dark text-success"><?= $vaga_dados[2] ?></p>
                    <p class="btn btn-dark text-success"><?= $vaga_dados[3] ?></p>
                </div>

            <?php } ?>
        </div>
    </div>
</body>

</html>