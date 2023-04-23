<?php

namespace config;

class Conexao
{

    private static $instance;

    public static function getInstance() {
        if (!isset(self::$instance)) {
            // lógica para criar uma nova conexão com o banco de dados
            $conn= mysqli_connect('127.0.0.1', 'root', 'Capricornioesmeralda#1', 'acampamentoDB');
            if (!$conn) {
                die("Falha ao conectar com o banco de dados: " . mysqli_connect_error());
            }

// Se chegou aqui, a conexão foi bem sucedida
//            echo "<h1>Conexão com o banco de dados bem sucedida</h1>";
            return $conn;
        }

        return self::$instance;
    }
}
$conexao =  Conexao::getInstance();

?>