
<?php 
    //Crie um algoritmo que faça a soma de 5 números mostre sua média, o total e também os 2 primeiros valores.

    $nota_primeira_prova = 89;
    $nota_segunda_prova = 53;
    $nota_terceira_prova = 33;
    $nota_quarta_prova = 99;
    $nota_trabalho_final = 88;

    $nota_total = $nota_primeira_prova + $nota_segunda_prova + $nota_terceira_prova + $nota_quarta_prova + $nota_trabalho_final;
    $media =  $nota_total / 5;
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
        <h4>Nota 1º Avaliação: <?php echo $nota_primeira_prova ?></h4>
        <h4>Nota 2º Avaliação: <?php echo $nota_segunda_prova ?></h4>
        <hr>
        <span>Nota total: <?php echo $nota_total ?></span>
        <br>
        <label>Média: <?php echo $media ?></label>
    </body>
</html>