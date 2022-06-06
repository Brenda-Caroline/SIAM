<?php

abstract class Conexao
{

private static string $db = "mysql";
    private static string $host = "localhost";
    private static string $user = "root";
    private static string $pass = "";
    private static string $dbname = "siam";
    private static int $port = 3306;
    private static object $conexaoBD;

    public function connect() {
        try {
            self::$conexaoBD = new PDO(self::$db . ':host=' . self::$host . ';port=' . self::$port . ';dbname=' . self::$dbname, self::$user, self::$pass);
            return self::$conexaoBD;
        } catch (Exception $ex) {
            die('Erro: Por favor tente novamente. Caso o problema persista, entre em contato o administrador adm@empresa.com');
        }
    }

}

?>
    