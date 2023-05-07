<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <header>
            <h1>Conversor de moedas com API</h1>
        </header>
        <main>
            <?php
                $inicio = date("m-d-Y", strtotime("-7 days"));
                $fim = date("m-d-Y");

                $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
            
                $dados = json_decode(file_get_contents($url), true);
            

                $cotacao = $dados["value"][0]["cotacaoCompra"];
                $datacotacao = $dados["value"][0]["dataHoraCotacao"];

                $num = $_GET['valor'];
                if($num == ""){
                    echo "Favor digitar um numero!";
                }
                else{
                    $convertido = $num / $cotacao;
                    $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);     
                    echo "Os seus <strong>" . numfmt_format_currency($padrao, $num, "BRL") . "</strong> equivalem a <strong>" . numfmt_format_currency($padrao, $convertido, "USD") . "</strong> na cotação do dia " . $datacotacao;
                }
            ?>
            <button type="" onclick="javscript:window.location.href='cotacao'" class="mt-4 mb-2">&#x2b05;Voltar</button>
        </main>
    </body>
</html>