<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Calculadora</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <style>
            header {
                background-color: #4E33E8;
            }
            h1, h2 {
                text-align: center;
            }
            body{
                background-image: linear-gradient(to bottom, #4E33E8, #354CF2, #3C7ADB, #35AFF2)
            }
            main{
                background-color: white;
                width: 500px;
                margin: auto;
                padding: 30px;
                border-radius: 10px;
                margin-bottom: 30px;
            }
            main > section {
                background-color: #D5D1E8;
                border-radius: 10px;
                padding: 10px;
            }
            form {
                padding: 10px;
            }
            label{
                background-color: #B7B2D7;
                padding: 2px;
                border-radius: 5px;
            }
            input[type='number']{
                width: 100%;
                padding: 2px;
                margin-bottom: 15px;
                margin-top: 5px;
                border-radius: 5px;
            }
            input[type='submit']{
                background-color: #00BC4E;
                color: white;
                width: 100%;
                border-radius: 5px;
            }
            body > section{
                width: 400px;
                margin: auto;
                background-color: white;
                padding: 10px;
                border-radius: 10px;
                margin-bottom: 30px;
            }
            section > p{
                text-align: center;
            }
            pre {
                text-align: center;
            }
        </style>
    </head>
    <body>
        <header>
            <h1>Minha calculadora</h1>
        </header>
        <?php 
            $num1 = $_GET['num1'] ?? 0;
            $num2 = $_GET['num2'] ?? 0;
            $oper = $_GET['oper'] ?? 0;
        ?>
        <main>
            <section>
                <form action="" method="get">
                    <label for="num1">Digite o primeiro numero:</label>
                    <input type="number" name="num1" value="<?= $num1 ?>">
                    <label for="num2">Digite o segundo numero:</label>
                    <input type="number" name="num2" value="<?= $num2 ?>">
                    <label for="">Escolha qual o tipo da operação:</label>
                    <input type="number" name="oper" value="<?= $oper ?>">
                    
                    <p>1 - Adição</p>
                    <p>2 - Subtração</p>
                    <p>3 - Multiplicação</p>
                    <p>4 - Divisão</p>
                    <input type="submit" name="" value="Enviar">
                </form>
            </section>
        </main>
        <section>
            <pre>
                <h2>Resultado</h2>

                <?php 
                    if($oper == 1){
                        $result = $num1 + $num2;
                        echo "<p> A soma de $num1 e $num2 é <strong>$result</strong>.</p>";
                    }
                    elseif($oper == 2){
                        $result = $num1 - $num2;
                        echo "<p> A subtração de $num1 e $num2 é <strong>$result</strong>.</p>";
                    }
                    elseif($oper == 3){
                        $result = $num1 * $num2;
                        echo "<p> A multiplicação de $num1 e $num2 é <strong>$result</strong>.</p>";
                    }
                    elseif($oper == 4){
                        $result = $num1 / $num2;
                        echo "<p> A divisão de $num1 e $num2 é <strong>$result</strong>.</p>";
                    }
                    else{
                        echo "<p> Favor digitar uma das opções entre 1 e 4.</p>";
                    }
                ?>
            </pre>
        </section>
    </body>
</html>