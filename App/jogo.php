<?php 

namespace App\Model;

use \App\Model\Conexao;
use \PDO;

class Usuario {
        /**
         * Identificador único do Jogo
         * @var integer
         */
        public $id;
    
        /**
         * Nome do Jogo
         * @var string
         */
        public $nome;

        /**
         * Horas jogadas pelo usuário
         * @var string
         */
        public $horas;
    
        /**
         * Tempo ativo do usuário
         * @var string
         */
        public $id_usuario;
    
    
        /**
         * Método responsável por cadastrar um novo usuário no banco
         * @return boolean
         */
        public function cadastrar(){
            //INSERIR O USUÁRIO NO BANCO
            $objDatabase = new Conexao('jogo');
    
            $this->id = $objDatabase->insert([
                'nome'         => $this->nome,
                'horas'        => $this->horas,
                'id_usuario'   => $this->id_usuario
            ]);
    
            //RETORNAR SUCESSO 
            return true;
        }
    
        /**
         * Método responsável por atualizar um usuário no banco
         * @return boolean
         */
        public function atualizar(){
            return (new Conexao('jogo'))->update('id = '.$this->id ,[
                                                                    'nome'         => $this->nome,
                                                                    'horas'        => $this->horas,
                                                                    'id_usuario'   => $this->id_usuario
                                                                    ]);
        }
    
        /**
         * Método responsável por excluir um usuário
         * @return boolean
         */
        public function excluir(){
            return (new Conexao ('jogo'))->delete("id = ".$this->id);
        }
    
        /**
         * Método responsável por retornar todos os Jogos
         * @param $where
         * @param $order
         * @param $limit
         * @return Jogos
         */
        public static function getJogos($where = null, $order= null, $limit = null){
            return (new Conexao('jogo'))->select($where,$order,$limit)
                                               ->fetchAll(PDO::FETCH_CLASS,self::class);
        }
    
        /**
         * Método responsável por buscar um Jogo pelo seu id
         * @param integer $id
         * @return Jogo
         */
        public static function getJogo($id){
            return (new Conexao('jogo'))->select('id = '.$id)
                                               ->fetchObject(self::class);
        }
    
    
    }


?>