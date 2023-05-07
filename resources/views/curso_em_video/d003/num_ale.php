<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    </head>
    <body>
        <header>
        <h1>Trabalhando com numeros aleatórios</h1>
        </header>
        
        <main>
            
            <?php 
                /* O rand é mais antigo e não tão confiavel */
                /* $num =  rand(1, 100);
                echo "Geramos um numero aleatório entre 1 e 100.<br>";
                echo " O valor é $num.<br>"; */

                /* recomendado usar o mt_rand */
                $num =  mt_rand(1, 100);
                echo "Geramos um numero aleatório entre 1 e 100.<br>";
                echo " O valor é $num.<br>";

            ?>
            <a href="num_ale" type="button" class="mt-2 mb-4 btn btn-primary">Gerar outro</a>   
            <a href="aleatorio" type="button" class="mt-2 mb-4 btn btn-secondary">Voltar</a>            
        </main>
    </body>
</html>