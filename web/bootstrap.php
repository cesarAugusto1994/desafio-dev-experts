<?php 

ini_set('display_errors', E_ALL);
ini_set('error_reporting', true);

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

function twig_render($name, array $context = [])
{
    $loader = new Twig_Loader_Filesystem(__DIR__ . '/../views');

    $parametros = [];

    if (1=='DEV') {
        $parametros['cache'] = __DIR__ . '/../var/cache/twig';
    }

    $twig = new Twig_Environment($loader, $parametros);

    return $twig->render($name, $context);
}

$query = "CREATE TABLE if NOT EXISTS usuarios (
  id SERIAL,
  nome VARCHAR(100) NOT NULL,
  PRIMARY KEY (id)
)";

//$conn->exec($query);

$query2 = "INSERT into usuarios (nome) values ('Cesar Augusto') ";
//$conn->exec($query2);

$query3 = "select * from usuarios";
$usuarios = $conn->query($query3);

?>