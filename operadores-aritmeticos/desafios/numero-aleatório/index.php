<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número aleatório</title>
    <link rel="stylesheet" href="../style-guanabara.css">
</head>
<body>

    

    <main>
        <h1>Trabalhando com número aleatórios</h1>
        <?php
        
        $ale = rand(0,100);
        echo "<p>O valor gerado foi <strong>$ale</strong></p>"
        
        ?>
        <button onclick="javacript:document.location.reload()">&#x1F504; Gerar outro</button>
    </main>
</body>
</html>