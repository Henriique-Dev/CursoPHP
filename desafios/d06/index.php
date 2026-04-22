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
        $valor1 = $_GET['divid'] ?? 0;
        $valor2 = $_GET['divisor'] ?? 1;

        
        $res = $valor1 / $valor2;
        $resto = $valor1 % $valor2;
        

    ?>

    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="divid" id="divid" value="<?= $valor1 ?>">
            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="divisor" min="1" value="<?= $valor2 ?>">
            <input type="submit" value="Analisar">
        </form>

        
    </main>

    <section>
        <table class="divisao">
            <tr>
                <td><?= $valor1 ?></td>
                <td><?= $valor2 ?></td>
            </tr>
            <tr>
                <td><?= $resto ?></td>
                <td><?= $res ?></td>
            </tr>
        </table>

    </section>

</body>
</html>