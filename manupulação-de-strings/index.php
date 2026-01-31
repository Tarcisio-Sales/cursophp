<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulando</title>
</head>
<body>
    <?php 
        /* Formatos de string:

            double quoted: "Curso": possuem operador de concatenação(.)
            exemplo: "Curso" . "PHP" = "CursoPHP"

            há interpretação de conteúdo:
            exemplo: "PHP \u{1F418}" -> resultado PHP + simbolo do elefante

            single quoted: 'Curso'

            não há interpretação de conteúdo:
            exemplo: 'PHP \u{1F418}' -> resultado PHP \u{1F418}
   
        */
         
        // $nome = 'Tarcisio';
        // $sobrenome = "Sales \u{1F596}";
        // echo "seu nome é $nome" . " e seu sobrenome é $sobrenome.";

        // const ESTADO = "RJ";
        // echo "Moro no ". ESTADO;
        // echo "Estamos no ano de " . date('Y');

        // $nom = "Rodrigo";
        // $snom = "Nogueira";
        // echo "$nom \"Minotauro\" $snom"

        /* Escapes

            \n   quebra linha
            \t   tabulação
            \\   mostra contrabarra
            \$   mostra cifrão
            \u{} Codepoint Unicode
            
        */

         //Heredoc - com interpretação

            // sintaxe: 
            // $curso = "PHP";
            // $ano = date('Y');

            // echo <<< FRASE

            //     Estou estudando 
            //          $curso em $ano.

            //     Estou muito feliz!

            // FRASE;  


        //Nowdoc - sem interpretação

        // sintaxe: 
            // $curso = "PHP";
            // $ano = date('Y');

            // echo <<< 'FRASE'   

            //     Estou estudando 
            //          $curso em $ano.

            //     Estou muito feliz!

            // FRASE;




    
    ?>
</body>
</html>