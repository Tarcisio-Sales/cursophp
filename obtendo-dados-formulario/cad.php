<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resultado</title>
    <link rel="stylesheet" href="estilo/style-guanabara.css">
    
</head>
<body>
      <header><h1>Resultado do processamento</h1></header>
      <main>
        <?php 
        
            $nome = $_GET["nome"] ?? "sem nome"; // ?? operador de null coalescing: se não enviar nada já recebe valor
            $sobrenome = $_GET["sobrenome"] ?? "desconhecido";
            echo "<p>É um prazer te conhecer, $nome $sobrenome! Esse é o meu site.</p>";
        
        
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior.</a></p>
      </main>
</body>
</html>