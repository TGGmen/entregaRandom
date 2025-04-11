<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex2 - Subtracao aleatoria</title>
</head>
<body>

<h1>ex2 - Subtracao aleatoria</h1>
    <form action="index.php" method="post">
        <label for="valor">Digite um numero:</label>
        <input type="number" name="valor" id="valor" required>
        <button type="submit">Enviar</button>
    </form>

    <?php

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $valor = $_POST['valor'];
    $subtracao = rand(1, 10);
    $contador = 0;

   
        do {
            $valor -= $subtracao;
            $contador++;
        } while ($valor > 0);
   

    echo "<h2>O numero foi subtraido $contador vezes até o resultado ser menor ou igual a zero</h2>";


    }
    
    ?>

</body>
</html>
