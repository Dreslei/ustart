<?php 

    namespace App\Controller\Pages;

    use \App\utils\view;
    use \App\model\entidade\empresa;

    class Inscricoes extends page{
        
        public static function getInscricoes(){

            $conteudo = view::render('pages/inscricoes',[

            ]);
            
            return parent::getPage('Inscricoes',$conteudo);
        }
    }

    // class Home extends page{
    //     public static function getHome(){
    //         $conteudo = view::render('pages/home',[
    //             'nome'=> 'U-Start',
    //             'sala' =>'io7lc5m'
    //         ]);
    //         return parent::getPage('U-Start 02',$conteudo);
    //     }
    // }

    // class Home{
    //     public static function getHome(){
    //         return "Hello World";
    //     }
    // }

?>

