

<?php

$dsn = 'mysql:dbname=fix_and_go;host=localhost';
$user = 'root';
$password = '';
$table = 'repair_list';

try {

    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
    $sql = "SELECT * FROM ".$table." WHERE ID=".$_GET['id'];

    $stmt= $pdo->prepare($sql);
    $stmt->execute();
    
    $arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    if(!$arr) exit('No rows');

    if( isset($_GET['id']) ) {
        
        $ID = $_GET['id'];

        foreach ($arr as $array){
            $old_state = $array["status"];
        }

        $sql = "UPDATE `repair_list` SET `status` = NOT ".$old_state." WHERE ID = ".$ID;
        $stmt= $pdo->prepare($sql);
        $stmt->execute();
        
        header("Location: index.php");

    }
    

} catch (PDOException $e) {

echo "Échec lors de l'execution de la requete : " . $e->getMessage();

}






?>