<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex1 - cedulas de dinheiro</title>
</head>
<body>

    <h1>ex1 - quantidades de notas</h1>
    <form action="index.php" method="post">
        <label for="valor">Valor:</label>
        <input type="number" name="valor" id="valor" required>
        <button type="submit">Enviar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $valor = $_POST['valor'];
        $notas = [100, 50, 20, 10, 5, 2, 1];
        $quantidadeNotas = [];

        foreach ($notas as $nota) {
            $quantidadeNotas[$nota] = intdiv($valor, $nota);
            $valor %= $nota;
        }

        echo "<h2>Quantidade de notas:</h2>";
        foreach ($quantidadeNotas as $nota => $quantidade) {
            echo "<p>$quantidade nota(s) de R$$nota</p>";
        }
    }
    ?>
    

</body>
</html>