<?php 


        $dsn = 'mysql:dbname=fix_and_go;host=localhost';
        $user = 'root';
        $password = '';
        

        try {
            $pdo = new PDO($dsn, $user, $password);
            $password = htmlspecialchars($_POST['password']);
            $username = htmlspecialchars($_POST['username']);
            $id = htmlspecialchars($_GET['id']);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);        
            $sql = "DELETE FROM utilisateurs WHERE ID='".$id."'";
            
            $stmt= $pdo->prepare($sql);
            $stmt->execute([$username,$password]);
            
            header("Location: manage-repairers.php");
        } 
        catch (PDOException $e) {

            echo 'Échec lors de la connexion : ' . $e->getMessage();

        }



?>