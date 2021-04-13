<?php 

        $ID =  htmlspecialchars($_POST['input_ID']);
        $arrivage = htmlspecialchars($_POST['input_code_bar']);
        $model = htmlspecialchars($_POST['input_modele']) ;
        $trouble = htmlspecialchars($_POST['input_reparation']) ;
        $description = htmlspecialchars($_POST['input_description']) ; 
        $pass = htmlspecialchars($_POST['input_mdp_client']) ; 
        $remarks = htmlspecialchars($_POST['input_remarque']) ;
        $price = htmlspecialchars($_POST['input_prix']) ;
        $deposit = htmlspecialchars($_POST['input_acompte']) ;

        $dsn = 'mysql:dbname=fix_and_go;host=localhost';
        $user = 'root';
        $password = '';

        try {

            $pdo = new PDO($dsn, $user, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);        
            $sql = "INSERT INTO repair_list (client_name, model, trouble) VALUES (?,?,?)";
            $stmt= $pdo->prepare($sql);
            $stmt->execute([$ID, $model, $trouble]);
            
            echo "Données envoyées"."<br/>";
            echo "salut";
            
        } catch (PDOException $e) {

            echo 'Échec lors de la connexion : ' . $e->getMessage();

        }



?>
