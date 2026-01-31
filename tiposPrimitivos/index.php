<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos</title>
</head>
<body>
    
    <h1>Teste de tipos primitivos</h1>
    <?php 
    
        /* primitivos escalares:

            $sobrenome = "Silva" --- String
            $idade = 34          --- int ou integer 
            $peso = 85.9         --- float, double
            $casado = true       --- boolean ou bool


            exemplos:

            "RJ": string
            3.1415: float
            17: int
            true: bool
            "": string
            -19: int
            "false": string
            0x1A: int
            3e2: double
            "1024": string    
        */

        //0x = hexadecimal 0b = binário 0 = Octal

        // $num = 0x1F;
        // echo "O valor da variável é $num";

        // $v = 300;   
        // var_dump($v); //mostra caracteristica da variável

        // $num = (float) "950";
        // var_dump($num);

        $casado = true;                     
        echo "O valor para casado é $casado"; //true = 1 e false = vazio, null

    
    
    ?>


</body>
</html>