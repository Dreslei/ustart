<style>
    #valores{
        width: 10rem; /* 20 * 16px = 160px Relativa */
        /* width: 120px;  Absoluta */
    }
</style>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercicio 6</title>
    </head>

    <body>
        <form action="exercicio_6.php" method="post">
            <p>Insira um valor: <input id="valores" type="number" required="true" placeholder="Primeira nota" min="1" max="50" name="valor1"></p>                
            <p>Insira um valor: <input  id="valores" type="number" required="true" placeholder="Segunda nota" min="1" max="50" name="valor2"></p>
            <p>
                <input type="submit" value="Enviar">
            </p>
        </form>
        <?php 
            if (isset($_POST['valor1']) && isset(($_POST['valor2'])) ) {
                
                $valor1 = ($_POST['valor1']);
                $valor2 = ($_POST['valor2']);

                $resultado =  $valor1 + $valor2;

                if ($resultado >= 70) {
                    echo "O aluno ficou com a nota ". $resultado ." e foi <b>Aprovado</b>";
                } else {
                    echo "O aluno ficou com a nota ". $resultado ." e foi <b>Reprovado</b>";
                }
            } else {
                echo "Você precisa inserir um valor";
            }
        ?>

    </body>
</html>