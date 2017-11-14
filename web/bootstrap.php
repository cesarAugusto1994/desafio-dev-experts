<?php 

ini_set('display_errors', E_ALL);

echo getenv('DATABASE_URL');

try {

    include __DIR__ . '/../vendor/autoload.php';

    $config = new \Doctrine\DBAL\Configuration();

    $connectionParams = array(
        'dbname' => 'app',
        'user' => 'user',
        'password' => 'p@ssword',
        'host' => 'db',
        'driver' => 'pdo_pgsql',
    );
    $conn = \Doctrine\DBAL\DriverManager::getConnection($connectionParams, $config);

 } catch (PDOException  $e) {
    print $e->getMessage();
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