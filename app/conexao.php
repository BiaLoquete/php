<?php
 
    //para conectar com o banco usando o PDO
    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "app";
    $dsn = "mysql:host=$host; dbname=$banco;";

    try {
        $conexao = new PDO($dsn, $usuario, $senha);
    } catch (\PDOExpeption $e) {
        throw new PODException($e->getMessage());
    }
