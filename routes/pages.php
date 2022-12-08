<?php 

use \App\http\response;
use \App\controller\pages;

    // Pode incluir varias rotas para o mesmo lugar.
    $router->get('/' ,[ 
        function(){
            return new response(200,pages\home::getHome());
        }
    ]);
    
    // Rota diferente porém o response envia para o mesmo lugar.
    // $router->get('/teste_rota' ,[ 
    //     function(){
    //         return new response(200,pages\home::getHome());
    //     }
    // ]);

    $router->get('/sobre' ,[ 
        function(){
            return new response(200,pages\sobre::getSobre());
        }
    ]);
    // Rota dinamica / Paginacao = Código da pagina
    $router->get('/pagina/{paginacao}/{inscricao}' ,[ 
        function($paginacao,$inscricao){
            return new response(200,'Página '. $paginacao. '-' .$inscricao);
        }
    ]);

?>