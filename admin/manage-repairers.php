<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();
if($_SESSION['loggedIn'] && $_SESSION["role"]=="admin"){
      //allow
      
}
else{
      //redirect to the login page
      header('Location: /index.php'); 
      
}

$dsn = 'mysql:dbname=fix_and_go;host=localhost';
$user = 'root';
$password = '';
$table = 'utilisateurs';

try {

    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
    $sql = "SELECT username, ID FROM utilisateurs WHERE role='repairer'";

    $stmt= $pdo->prepare($sql);
    $stmt->execute();
    
    $arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    //if(!$arr) exit('No rows');
    

} catch (PDOException $e) {

echo "Échec lors de l'execution de la requete : " . $e->getMessage();

}

?>

<!DOCTYPE html>
<html>

    <head>
            
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Page Login</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link href="/css/style.css" rel="stylesheet" id="bootstrap-css">
        
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    </head>

    <body>
        <div class="container-fluid container_red " >
            
        <img src="/img/logo_rond.png"  class="brand_logo center_logo" >
        </div>
        <div class="col-md-12 col-xs-12 col-lg-12" style="background-color:white;">
        <a href="/logout.php" >Logout</a> |
        <a href="index.php" >Réparations en cours</a> |
        <a href="new-repair.php" >Nouvelle réparation</a> |
        <a href="#" >Gérer les réparateurs</a>
        
        </div> 

        </div>

        <div class="main_bloc">
            
            <div class="center my-form"> 
                <form method='POST' action='add_repairer.php'>
                    
                    <div class="form-group">
                        <div>
                            <ul>
                                    
                                <?php
                                    foreach ($arr as $array){
                                            echo "<li>".$array['username']." <a href='delete-user.php?id=".$array['ID']."'>[Supprimer]</a></br></li>";   
                                    }
                                    
                                ?>
                            </ul>
                        </div>
                        
                            <input class="form-control " name="username" id="" type="text">
                            <label for="input_modele">Nom du réparateur</label>
                        
                        </div> 

                        <div class="form-group">
                            <input class="form-control" name="password" id="" type="password">
                            <label for="input_password">Mot de passe</label>
                        </div>
                         

                    <input type="submit" value="ajouter"> 

                </form>
            </div>
        </div>
    </body>
</html>
