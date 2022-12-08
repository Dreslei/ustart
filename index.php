<?php 
    require __DIR__.'/vendor/autoload.php';

    use \App\http\router;
    use \App\utils\view;

    define('URL','http://localhost/ustart');

    // Definindo o valor padrão das variaveis
    // Varial comum em varios escopos podem ser definidas aqui
    view::init([
        // Pode ser usado nomeclatura de url_base
        'url'=> URL
    ]);
    
    // Iniciando a ROTA
    $router = new router(URL);
    
    // Incluir as rotas
    include __DIR__ .'/routes/pages.php';

    // Imprimir response da rota
    $router->run()->send_response();

?>