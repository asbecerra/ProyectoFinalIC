<?php

class ConexionBaseDatos
{
    /**
     * @var PDO
     */
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function hola($que = 'Mundo')
    {
        $sql = "INSERT INTO hola VALUES (" . $this->pdo->quote($what) . ")";
        $this->pdo->query($sql);
        return "Hola $que";
    }


    public function que()
    {
        $sql = "SELECT que FROM hola";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchColumn();
    }
}
