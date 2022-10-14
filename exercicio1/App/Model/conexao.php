<?php 

namespace App\Model;

use \PDO;
use PDOExcepiton;

class Conexao {

/**
     * Host de conexão com o banco de dados
     * @var string
     */
    const HOST = 'localhost';

    /**
     * Nome do banco de dados
     * @var string
     */
    const DBNAME = 'teste';

    /**
     * Nome de usuário do banco de dados
     * @var string
     */
    const USER = 'root';

    /**
     * Senha do usuário do banco de dados
     * @var string
     */
    const PASS='';

    /**
     * Nome da tabela a ser manipulada
     * @var string $table
     */
    private $table;

    /**
     * Instancia de conexão com o Banco de dados
     * @var PDO
     */
    private $conexao;

    /**
     * Define a tabela e instancia a conexão
     */
    public function __construct($table = 'null'){
        $this->table = $table;
        $this->setConnection();
    }

    /**
     * Método responsável por criar a conexão com o banco de dados
     */
    private function setConnection(){
        try{
            $this->conexao = new PDO('mysql:host='.self::HOST.';dbname='.self::DBNAME,self::USER,self::PASS);
            $this->conexao->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            die('ERROR '.$e->getMessage());
        }
    }

    /**
     * Método responsável por executar queries dentro do banco de dados
     * @param string $query
     * @param array
     * @return PDOStatement
     */
    public function execute($query, $params = []){
        try{
            $stmt = $this->conexao->prepare($query);
            $stmt->execute($params);
            return $stmt;
        } catch(PDOException $e){
            die('ERROR:'.$e->getMessage());
        }
    }

    /**
     * Método responsável por inserir dados no baco de dados
     * @param array $values [field => value]
     * @return integer ID inserido
     */
    public function insert($values){
        //DADOS DA QUERY
        $fields = array_keys($values);
        $binds = array_pad([],count($fields),'?');

        //MONTA A QUERY
        $query = 'INSERT INTO '.$this->table.' ('.implode(', ',$fields).') VALUES ('.implode(', ',$binds).')';
        //echo '<pre>';print_r($query);echo '</pre>';
        //EXECUTA O INSERT
        $this->execute($query,array_values($values));

        //RETORNA O ID INSERIDO
        return $this->conexao->lastInsertId();
    }

    /**
     * Método responsável por executar uma consulta no banco de dados
     * @param string $where
     * @param string $order
     * @param string $limit
     * @return PDOStatement
     */
    public function select($where = null, $order = null,$limit = null,$fields = '*'){
        //DADOS DA QUERY
        $where = strlen($where) ? 'WHERE '.$where : '';
        $order = strlen($order) ? 'ORDER BY '.$order : '';
        $limit = strlen($limit) ? 'LIMIT '.$limit : '';

        //MONTA A QUERY
        $query = 'SELECT '.$fields.' FROM '.$this->table.' '.$where.' '.$order.' '.$limit;

        //EXECUTA A QUERY
        return $this->execute($query);
    }

    /**
     * Método responsável por atualizar os dados do banco
     * @param string $where
     * @param string $values [field => value]
     * @return boolean
     */
    public function update($where,$values){
    //DADOS DA QUERY
    $fields = array_keys($values);


    //MONTA A QUERY
    $query = 'UPDATE '.$this->table.' SET '.implode('=?,',$fields).'=? WHERE '.$where;

    //EXECUTA A QUERY
    $this->execute($query,array_values($values));

    //RETORNA SUCESSO
    return true;
}

    /**
     * Método responsável por excluir um dado do banco
     * @param string $where
     * @return boolean
     */
    public function delete($where){
        //MONTA A QUERY
        $query = 'DELETE FROM '.$this->table.' WHERE '.$where;

        //EXECUTA A QUERY
        $this->execute($query);

        //RETORNA SUCESSO
        return true;
    }

}


?>