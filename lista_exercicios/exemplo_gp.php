<html>
     <head>
         <meta charset="UTF-8">
         <title>Exemplo Post e Get</title>
     </head>
     <body>
         
         <?php
             if(isset($_GET['endereco'])){
                 echo ("<h4> Parametro enviado por get: ". $_GET['endereco'] . "</h4>");
             }
             
             if(isset($_POST['endereco'])){
                 echo ("<h4> Parametro enviado por post: ". $_POST['endereco'] . "</h4>");
             }
         ?>
         <h1>GET</h1>
         <form method="get">
             <input type="text" name="endereco" placeholder="Digite seu endereço">
             <input type="submit" value="enviar">
         </form>
         
         <h1>POST</h1>
         <form method="post">
             <input type="text" name="endereco" placeholder="Digite seu endereço">
             <input type="submit" value="enviar">
         </form>
     </body>
 </html>