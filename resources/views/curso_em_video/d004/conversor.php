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
            <h1>Conversor de moedas</h1>
        </header>
        <main>        
            <section>                
                <?php
                    $num = $_GET['valor'];
                    if($num == ""){
                        echo "Favor digitar um numero!";
                    }else{
                        
                        $dollar = $num / 4.95;
                        //Formatando numero de maneira simples
                        /* echo "Os seus R$" . number_format($num, 2, ",", ".") . " reais equivalem a US$" . number_format($dollar, 2,",", ".") . " dólares."; */

                        //Formatando moedas com internacionalização
                        $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);

                        echo "Os seus " . numfmt_format_currency($padrao, $num, "BRL") . " reais equivalem a " . numfmt_format_currency($padrao, $dollar , "USD") . " dólares.";
                    }
                ?>
                <button type="" onclick="javascript:window.location.href='converter'" class="mt-4 mb-2">&#x2b05;Voltar</button>
            </section>
        </main>
    </body>
</html>