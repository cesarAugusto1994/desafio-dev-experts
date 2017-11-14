<?php 

ini_set('display_errors', E_ALL);

echo getenv('DATABASE_URL');

try {
    $conn = new Connection("db", "app", "user", "p@ssword");
 } catch (PDOException  $e) {
    print $e->getMessage() . $e->getTraceAsString();
 }

$query = "CREATE TABLE if NOT EXISTS usuarios (
  id SERIAL,
  nome VARCHAR(100) NOT NULL,
  PRIMARY KEY (id)
)";

$conn->exec($query);

$query2 = "INSERT into usuarios (nome) values ('Cesar Augusto') ";
$conn->exec($query2);

$query3 = "select * from usuarios";
$usuarios = $conn->query($query3);

var_dump($usuarios->fetchAll());

include __DIR__ . '/Classes/Produto/Produto.php';

?>