<?php

namespace Jhonata\CadastroProduto\Database\Repositorios;

use Jhonata\CadastroProduto\Database\Interfaces\IDado;
use Medoo\Medoo;

class MysqlRepositorio implements IDado {

    private $database;

    public function __construct() {
        $host = getenv('HOST_MYSQL') ?: 'localhost';
        $db = getenv('DB_NAME') ?: 'estoque';
        $user = getenv('DB_USER') ?: 'root';
        $pass = getenv('DB_PASSWORD') ?: 'root';

        $this->database = new Medoo([
            'database_type' => 'mysql',
            'database_name' => $db,
            'server' => $host,
            'username' => $user,
            'password' => $pass,
        ]);
    }

    public function salvar($script_sql) {
        try {
            $this->database->query($script_sql);
        } catch (\Exception $e) {
            // Lide com o erro, por exemplo, registre-o ou jogue uma exceção personalizada.
            // echo "Erro ao executar a consulta: " . $e->getMessage();
        }
    }

    /**
     * @param string $query
     * @return array
     */
    public function todos($query) {
        return $this->database->query($query)->fetchAll();
    }
}
