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
            $nmr = $_GET["nmr"];
            $res = $nmr * 5.13;
            $res = number_format($res , 2, ",", ".");

            echo "Seus R$ " . $nmr . " equivalem a <strong>US$ " . $res . "</strong><br><br>";
            echo "* <strong>Cotação fixa de 5,13</strong> informada diretamente no código.";
        ?>
        <br><br>
        <button onclick="history.back()">Voltar</button>

    </section>
</body>
</html>