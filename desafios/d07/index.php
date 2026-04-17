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
        function formatar_moeda($valor) {
            return number_format($valor, 2, ',', '.');
        }
        $sal_minimo = 1621.00;

        $sal = $_GET['salario']??0;

        $quantidade_salario = floor( $sal / $sal_minimo);
        $sobra = $sal - ($quantidade_salario * $sal_minimo);

    ?>

    <main>
        <h1>Informe seu salário</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="sal">Salário (R$)</label>
            <input type="number" name="salario" id="salario" value="<?= $sal ?>">
            <p>Considerando o salário mínimo de <strong>R$1.621,00</strong>.</p>
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Resultado Final</h2>
        <?php 
            echo "Quem recebe um salario de R$" . formatar_moeda($sal) . " ganha <strong>$quantidade_salario sálarios mínimos</strong> + R$" . formatar_moeda($sobra) . ".";
        ?>
    </section>
</body>
</html>