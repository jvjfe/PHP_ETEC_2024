<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Notas</title>
</head>

<body>

    <h2>Aula 01</h2>
    <form action="processar.php" method="GET">

        <label for="nome">Nome:</label>

        <input type="text" 
        id="nome" 
        name="campoNome"
        placeholder="Digite Seu nome completo"
        maxlength="45"
        size="35"
        required>

        <br><br>

        <label for="nota1">Nota 1:</label>
        <input type="number"
        id="nota1" 
        name="campoNota1"
        min="0"
        max="10"
        required>

        <br><br>

        <label for="nota2">Nota 2:</label>
        <input type="number" 
        id="nota2" 
        name="campoNota2"
        min="0"
        max="10"
        required>
        
        <br><br><br><br>

        <button type="submit" 
        id="processar" 
        name="botaoProcessar" 
        value="Calcular">Enviar</button>

    </form>

</body>

</html>