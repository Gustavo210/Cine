<?php
define( 'MYSQL_HOST', 'localhost' );
define( 'MYSQL_USER', 'root' );
define( 'MYSQL_PASSWORD', 'teste' );
define( 'MYSQL_DB_NAME', 'unacine' );
try
{
    $PDO = new PDO( 'mysql:host=' . MYSQL_HOST . ';charset=utf8;dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD );
}
catch ( PDOException $e )
{
    die("Erro ao conectar com o MySQL: " . $e->getMessage());
}

?>
