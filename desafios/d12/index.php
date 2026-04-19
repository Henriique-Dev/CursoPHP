<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 12</title>
    <link rel="stylesheet" href="../estilo/style.css">
</head>
<body>
    <?php 
        $segun = (int) ($_GET['segun'] ?? 0);

        $resto = $segun;

        $semanas = intdiv($resto, 604800);
        $resto %= 604800;

        $dias = intdiv($resto, 86400);
        $resto %= 86400;

        $horas = intdiv($resto, 3600);
        $resto %= 3600;

        $minutos = intdiv($resto, 60);
        $segundos = $resto % 60;

    ?>

    <main>
        <h1>Calculadora de Tempo</h1>

        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="segun">Qual é o total de segundos?</label>
            <input type="number" name="segun" id="segun" value="<?= $segun ?>">

            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Totalizando tudo</h2>
        <p>Analisando o valor que você digitou, <strong><?= number_format($segun,0, ',', '.') ?> segundos</strong> equivalem a um total de: </p>
        <ul>
            <li><?= $semanas ?> semanas</li>
            <li><?= $dias ?> dias</li>
            <li><?= $horas ?> horas</li>
            <li><?= $minutos ?> minutos</li>
            <li><?= $segundos ?> segundos</li>
        </ul>
    </section>
</body>
</html>