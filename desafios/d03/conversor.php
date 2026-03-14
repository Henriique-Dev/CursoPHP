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
            $cotacao = 5.13;
            $real = $_GET["nmr"] ?? 0;
            $dolar = $real / $cotacao;
            // $res = number_format($res , 2, ",", ".");

            // echo "Seus R$ " . $cotacao . " equivalem a <strong>US$ " . $res . "</strong><br><br>";
            // echo "* <strong>Cotação fixa de 5,13</strong> informada diretamente no código.";

            $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);

            echo "<p>Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $dolar, "USD") . "</strong></p>";
            echo "* <strong>Cotação fixa de 5,13</strong> informada diretamente no código.";

        ?>
        <br><br>
         <button onclick="javascript:window.location.href='index.html'">Voltar</button>

    </section>
</body>
</html>