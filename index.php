<?php

use utils\personGenerator;

require_once 'utils/cpfGenerator.php';
require_once 'utils/personGenerator.php';
require_once 'vendor/autoload.php';

$personGenerator = new personGenerator();
$person = $personGenerator->generate("pt_BR", "");
?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- favicon-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/favicon/site.webmanifest">
    <link rel="shortcut icon" href="assets/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="assets/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <!-- favicon-->

    <!--  description  -->
    <meta name="description" content="Aqui você pode ver o seu IP público de forma simples e rápida.">
    <!--  description  -->

    <link rel="stylesheet" href="css/styles.css">
    <title>Meu IP</title>
</head>
<body>
<div id="App">
    <div class="container">
        <!-- Show IP -->
        <div class="layout top-container">
            <div class="central-wrapper">
                <div class="left-container">
                    <h1 class="personCpf">CPF: <b><?= $person['cpf'] ?></b></h1>
                    <h1 class="personName"><?= $person['firstName'] . " " . $person['lastName'] ?></h1>
                    <h1 class="tag"><?= $person['email'] ?></h1>

                    <p class="disclaimer">
                        Estes dados não são verdadeiros. A geração dos dados pessoais são feitas de forma aleatória.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <p>
            Desenvolvido por Abner Rodrigues
        </p>
        <div>
            <a href="https://github.com/rodriguesabner">Github</a>
            <p id="sep">|</p>
            <a href="api/person.php">API</a>
        </div>

    </div>
</div>
</body>
</html>
