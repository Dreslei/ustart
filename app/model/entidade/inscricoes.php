<?php 

namespace App\model\entidade;

use \WilliamCosta\DatabaseManager\Database;

class inscricoes {

    public $id;

    public $nome;

    public $mensagem;

    // public $data;

    // Cadastrar no banco de dados
    public function cadastrar() {

    // Pode ser usado timestamp no banco
    // $this->data = date("Y-m-d H:i:s");

    // Inserindo informações da inscrição nos eventos
    $this->id = (new Database('inscricao'))->insert([
        'nome' => $this->nome,
        'cpf' => $this->cpf,
        'evento' => $this->evento,
    ]);

    return true;

    //    echo '<pre>';
    //    print_r($this);
    //    echo '</pre>';
    //    exit(); 

    }

    // Reponsavel pelo retorno das incrições
    public static function getInscricoes($where = null, $order = null, $limit = null, $field = '*') {
        return (new Database('inscricao'))->select($where,$order,$limit,$field);
    }

}

?>