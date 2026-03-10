<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <section>
        <h1>Conversor de Moedas v1.0</h1>
        <?php
            $cotacao = $_GET["nmr"] ?? 0;
            $res = $cotacao / 5.13;
            // $res = number_format($res , 2, ",", ".");

            // echo "Seus R$ " . $cotacao . " equivalem a <strong>US$ " . $res . "</strong><br><br>";
            // echo "* <strong>Cotação fixa de 5,13</strong> informada diretamente no código.";

            $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);

            echo "<p>Seus " . numfmt_format_currency($padrao, $cotacao, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $res, "USD") . "</strong></p>";

        ?>
        <br><br>
        <button onclick="javascript:window.location.href='index.html'">Voltar</button>

    </section>
</body>
</html>