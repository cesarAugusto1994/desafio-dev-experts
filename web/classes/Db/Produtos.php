<?php

/**
 * Class Produtos
 */
class Produtos
{
    /**
     * @var \Doctrine\DBAL\Connection
     */
    private $connection;

    public function __construct(\Doctrine\DBAL\Connection $connection)
    {
        $this->connection = $connection;
    }

    public function buscar()
    {
        $query = " SELECT * FROM produtos ";

        $conn = $this->connection->query($query);

        return $conn->fetchAll();
    }

    public function criar($nome, $tipo, $valor, $imposto)
    {
        $query = " INSERT INTO produtos (nome, tipo, valor, imposto) 
                   VALUES ('{$nome}', {$tipo}, {$valor}, {$imposto})";

        Connection::getInstance()->factory()->exec($query);
    }
}