<style>
    #idade{
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
        <form action="exercicio_7.php" method="post">
            <p><input id="idade" name="idade" type="number" required="true" placeholder="Digite sua idade" min="1" max="100"></p> <!-- Burlar - Regra na view ? -->
            <p>
                <input type="submit" value="Enviar">
            </p>
        </form>
        <?php 
            if (isset($_POST['idade']) != "") { // empty //is_numeric

                $idade = $_POST['idade'];

                if ($idade >= 18 && $idade < 21) {
                    echo "Você está apto a fazer a CNH nas categorias AB";
                } else if ($idade >= 21) {
                    echo "Você está apto a fazer a CNH nas categorias AB e D";
                } else {
                    echo "Você não tem idade para ter CNH";
                }
            } 
        ?>

    </body>
</html>