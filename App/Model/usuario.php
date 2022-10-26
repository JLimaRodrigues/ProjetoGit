<?php 

namespace App\Model;

use \App\Model\Conexao;
use \PDO;

class Usuario {
        /**
         * Identificador único do usuario
         * @var integer
         */
        public $id_usuario;
    
        /**
         * Nickname do Usuário
         * @var string
         */
        public $nickname;

        /**
         * Pontos do usuário
         * @var integer
         */
        public $pontos;
    
        /**
         * Tempo ativo do usuário
         * @var string
         */
        public $jogo_favorito;

        /**
         * Ultima atualização
         * @var string
         */
        public $ultima_atualizacao;
    
    
        /**
         * Método responsável por cadastrar um novo usuário no banco
         * @return boolean
         */
        public function cadastrar(){
            //INSERIR O USUÁRIO NO BANCO
            $objDatabase = new Conexao('usuario');
    
            $this->id = $objDatabase->insert([
                'nickname'             => $this->nickname,
                'pontos'               => $this->pontos,
                'jogo_favorito'        => $this->jogo_favorito,
                'ultima_atualizacao'   => $this->ultima_atualizacao
            ]);
    
            //RETORNAR SUCESSO 
            return true;
        }
    
        /**
         * Método responsável por atualizar um usuário no banco
         * @return boolean
         */
        public function atualizar(){
            return (new Conexao ('usuario'))->update('id = '.$this->id ,[
                                                                        'nickname'             => $this->nickname,
                                                                        'pontos'               => $this->pontos,
                                                                        'jogo_favorito'        => $this->jogo_favorito,
                                                                        'ultima_atualizacao'   => $this->ultima_atualizacao
                                                                            ]);
        }
    
        /**
         * Método responsável por excluir um usuário
         * @return boolean
         */
        public function excluir(){
            return (new Conexao ('usuario'))->delete("id = ".$this->id);
        }
    
        /**
         * Método responsável por retornar todos os Usuários
         * @param $where
         * @param $order
         * @param $limit
         * @return Usuarios
         */
        public static function getUsuarios($where = null, $order= null, $limit = null){
            return (new Conexao ('usuario'))->select($where,$order,$limit)
                                               ->fetchAll(PDO::FETCH_CLASS,self::class);
        }
    
        /**
         * Método responsável por buscar um usuário pelo seu id
         * @param integer $id
         * @return Usuario
         */
        public static function getUsuario($id){
            return (new Conexao ('usuario'))->select('id = '.$id)
                                               ->fetchObject(self::class);
        }
    
    
    }


?>