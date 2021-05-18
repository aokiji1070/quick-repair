<?php 

        $bar_code = htmlspecialchars($_POST['input_code_bar']);
        $client =  htmlspecialchars($_POST['input_client']);
        $model = htmlspecialchars($_POST['input_modele']) ;
        $trouble = htmlspecialchars($_POST['input_reparation']) ;
        $description = htmlspecialchars($_POST['input_description']) ; 
        $pass = htmlspecialchars($_POST['input_mdp_client']) ; 
        $remarks = htmlspecialchars($_POST['input_remarque']) ;
        $price = htmlspecialchars($_POST['input_prix']) ;
        $deposit = htmlspecialchars($_POST['input_acompte']) ;
        //$m = htmlspecialchars($_POST['marks']) ;

        $dsn = 'mysql:dbname=fix_and_go;host=localhost';
        $user = 'root';
        $password = '';

        try {

            $pdo = new PDO($dsn, $user, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);        
            $sql = "INSERT INTO repair_list (barcode, client_name, model, trouble, description, password,remarks,total_price,deposit) VALUES (?,?,?,?,?,?,?,?,?)";
           
            $stmt= $pdo->prepare($sql);
            $stmt->execute([$bar_code,$client, $model, $trouble, $description, $pass,$remarks,$price,$deposit,]);
            
            echo "Requete executee"."<br/>";
            echo "tu choques a mucho t'es sur la bonne voie";
            
        } 
        catch (PDOException $e) {

            echo 'Échec lors de la connexion : ' . $e->getMessage();

        }



?>
