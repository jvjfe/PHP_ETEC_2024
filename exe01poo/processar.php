<?php
    $nome = $_GET["campoNome"];
    $nota1 = $_GET["campoNota1"];
    $nota2 = $_GET["campoNota2"];

    //acessando arquivos do classeBoletim.php

    require("classeBoletim.php");

    // Instanciamos a partir da classe Boletim

    $boletim = new Boletim(); //construção do método construtor Boletim()
    $boletim->setNome($nome); // setando valores do nome
    $boletim->setNota1($nota1); //setando valores da nota1
    $boletim->setNota2($nota2); // setando valores da nota2
    $boletim->calcularMedia(); //executando o método calcularMedia
    $boletim->calcularResultado(); //executando o método calcularResultado

    // obtendo os valores dos atributos (GET) e armazenando em variáveis
    
    $media = $boletim->getMedia();
    $resultado = $boletim->getResultado();

    //Criar e declarar tem o mesmo significado, porém criamos variaveis e instanciamos objetos

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCÍCIO 1 PHP</title>
</head>
<body>
    <h1>RESULTADO FINAL</h1>
    <p>Nome: <?php echo $nome; ?> </p>
    <p>Nota 1: <?php echo $nota1; ?> </p>
    <p>Nota 2: <?php echo $nota2; ?> </p>
    <p>Média: <?php echo $media; ?> </p>
    <p>Resultado: <?php echo $resultado; ?> </p>

    
</body>
</html>