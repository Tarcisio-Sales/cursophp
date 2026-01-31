<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis e Constantes</title>
</head>
<body>
    <h1>Variáveis</h1>

    <?php 

        $nome = "Gustavo";
        $sobrenome = "Guanabara"; //variáveis podem receber valores
        const PAIS = "Brasil"; //constante não varia. Não recebe valores ao longo do código.

        echo "Muito prazer, $nome $sobrenome! Você mora no " . PAIS . ".";



        /* Regra para nomes identificadores 
            
            * variáveis començam com $ e segundo pode ser letra ou simbolo_
            * aceita [a-z], [A-Z],[0-9] e [_]
            * aceita caracteres de acento
            * É case sensitive
            * nomes especiais como $this não podem ser usados
        
        */

        /* Recomendação para dar nomes

            * nomes claros e fáceis;
            * evite nomes curtos. ex: nome ao inves de n;
            * definir padrão de nomeação ao longo do projeto: variáveis minusculas, constantes MAIUSCULAS;
            * camel Case para metodos e atributos;
            * snake Case para nomear constantes;

            $nomeCompletoCliente = "Camel Case";
            telefone_contato_fornecedor = "Snake Case"
        
        
        */

    ?>

    
</body>
</html>