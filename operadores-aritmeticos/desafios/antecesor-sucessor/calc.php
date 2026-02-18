<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritméticos</title>
    <link rel="stylesheet" href="">
    <style>
        a{
            background-color: darkblue;
            color: white;
            border: 1px solid darkblue;
            display: block;
            width: 200px;
            height: 50px;
            margin: 10px;
            margin: auto;
            
            cursor: pointer;
            text-decoration: none;
            border-radius: 10px;
            box-shadow: 2px 2px 5px black;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        p{
            text-align: center;
            margin-top: 15px;
        }

        a:hover{
            color: limegreen;
        }

        
    </style>
    
</head>
<body>
    <main>


        <!-- Ordem de prescedência:
         
        **
        * / % 
        +  -
        -->

        <!-- Funções aritméticas:
         
        abs(): $res = abs(-2000) -> 2000

        base_convert(): $res = base_convert(numero, 10, 8) -> base 10 para octal(16: hexadecimal, 2 binário)

        ceil(), floor(), round(): arredonda para cima, baixo e arredonda normal

        hypot(): calcula hipotenusa

        intdiv(): divisão inteira -> intdiv(5,2) -> 2

        min(), max(): min(5,2,7,1) -> 1 max -> 7

        pi() ou M_PI

        pow()

        sin(), cos(), tan()

        sqrt()

        -->

        <!-- Operadores
         
        + -> operador de soma aritmético

        . -> concatena strings
        
        
        
        -->
        <h1 style="text-align: center;">Resultado final</h1>

        <?php 
        
        $numero = $_GET['numero'] ?? "digite algo";
        $antecessor = $numero - 1;
        $sucessor = $numero + 1;

        
        echo "O número escolhido foi <strong>$numero </strong><br>";
        echo "O seu antecessor é $antecessor<br>";
        echo "O seu sucessor é $sucessor<br>";
    
        ?> 
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>
</body>
</html>