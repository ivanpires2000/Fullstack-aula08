<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula 08</title>
</head>
<body>
    <h1>Introdução a programação backend</h1>

    <?php

        echo 'Olá, Ivan';
        echo '<br>';

        //Cria uma variavel chamada ano_nascimento
        $ano_nascimento = 1983;

        //Cria uma variavel chamada ano_atual
        $ano_atual = 2024;

        //Criamos uma variavel para armazenar a idade da pessoa,
        //Realizamos um calculo de subtração entre o ano atual eo ano de nascimento
        $idade = $ano_atual - $ano_nascimento;

        //Exibimos a idade da pessoa
        //No php, o caracter "." concatena (junta) strings.
        echo 'Voce possui ' . $idade . ' anos.';
    ?>

    <br>
    <a href="formulario.php">Ir para o formulário</a>
    <br>
    <a href="calculadora.php">Ir para a calculadora</a>




</body>
</html>