<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC com POO</title>
</head>

<body>
    <h1>IMC com Programação Estruturada</h1>
    <form action="calcular_imc.php" method="GET">

        <label for="campoNome">Nome Completo</label>
        <input type="text"
            id="campoNome" 
            name="campoNome"
            required
            size="30"
            maxlength="50"
            placeholder="Digite seu nome completo"
            value="Roberto">

        <br /><br />

        <label for="campoPeso">Peso (kg) </label>
        <input type="number"
            id="campoPeso"
            name="campoPeso"
            required
            min="35"
            max="200"
            step="0.1"
            value="70">

        <br /><br />

        <label for="campoAltura">Altura</label>
        <input type="number"
            id="campoAltura"
            name="campoAltura"
            required
            min="1.10"
            max="2.20"
            step="0.01"
            value="1.70">

        <br /><br /><br /><br />

        <input type="submit"
            id="botaoProcessar"
            name="botaoProcessar"
            value="Processar">


    </form>

</body>

</html>