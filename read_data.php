<?php

$dsn = 'mysql:dbname=fix_and_go;host=localhost';
$user = 'root';
$password = '';
$table = 'repair_list';

try {

    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
    $sql = "SELECT * FROM ".$table;

    $stmt= $pdo->prepare($sql);
    $stmt->execute();
    
    $arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    if(!$arr) exit('No rows');
    

} catch (PDOException $e) {

echo "Échec lors de l'execution de la requete : " . $e->getMessage();

}






?>