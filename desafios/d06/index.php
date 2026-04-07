<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 6</title>
    <link rel="stylesheet" href="../estilo/style.css">
</head>
<body>
    <?php 
        $valor1 = $_GET['divid']??0;
        $valor2 = $_GET['divisor']??0;

        $res = $valor1 / $valor2;
        $resto = $valor1 % $valor2;

    ?>

    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="divid" id="divid" value="<?= $valor1 ?>">
            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="divisor" value="<?= $valor2 ?>">
            <input type="submit" value="Analisar">
        </form>

        
    </main>
        <section>
            <h2>Estrutura da Divisão</h2>
            <p>Dividendo: <?= $valor1 ?></p>
            <p>Dividendo: <?= $valor2 ?></p>
            <p>Resultado: <?= $res ?></p>
            <p>Resto: <?= $resto ?></p>

        </section>

</body>
</html>