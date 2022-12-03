
<?php 
    //Crie um algoritmo que faça a soma de  3 valores, e crie uma condição onde mostre se (if) o resultado é maior ou igual a 80, senão (else) diga que o resultado é menor que 80.

    $nota_primeira_prova = 89;
    $nota_segunda_prova = 53;
    $nota_terceira_prova = 33;

    $nota_total = $nota_primeira_prova + $nota_segunda_prova + $nota_terceira_prova;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercicio 3</title>
    </head>

    <body>
        <?php if ($nota_total >= 80) { ?>
            <h3>Valor é maior ou igual a 80</h3>
        <?php } else { ?>
            <h3>Valor é menor que 80</h3>
        <?php } ?>

        <!-- <?php echo $nota_total >= 80 ? 'Valor é maior ou igual a 80' : 'Valor é menor que 80' ?> -->
    </body>
</html>