<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 7</title>
    <link rel="stylesheet" href="../estilo/style.css">
</head>
<body>
    <?php 
        $sal = $_GET['salario']??0;
        $total = $sal / 1621  ;
    ?>

    <main>
        <h1>Informe seu salário</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="sal">Salário (R$)</label>
            <input type="number" name="salario" id="salario" value="<?= $sal ?>">
            <p>Considerando o salário mínimo de <strong>R$1.621,00</strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Resultado Final</h2>
        <p><?= $sal ?></p>
        <p><?= $total ?></p>
    </section>
</body>
</html>