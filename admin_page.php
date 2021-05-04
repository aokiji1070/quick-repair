<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();
if($_SESSION['loggedIn']){
      //allow
}
else{
      //redirect to the login page
      header('Location: login_page.php'); 
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
        <link href="css/style.css" rel="stylesheet" id="bootstrap-css">
        
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    </head>

    <body>
        <div class="container-fluid container_red " >
            
        <img src="img/logo_rond.png"  class="brand_logo center_logo" >
        </div>
        <div class="col-md-12 col-xs-12 col-lg-12" style="background-color:rgb(14, 17, 17);">

        </div> 

        </div>

        <div class="main_bloc">
            <div class="center my-form"> 
                <form action="/quick-repair/post_db.php" method="POST">

                    
                    <div class="form-group">


                        <input class="form-control" name="input_code_bar" id="input_code_bar" type="text">
                        <label for="input_code_bar">scanner code bar</label>
                        
                    </div>
                    
                    <div class="form-group">

                        <input class="form-control input-sm" name="input_ID" id="input_ID" type="text">
                        <label for="input_ID">Nom du client</label>
                      
                    </div>

                    <div class="form-group">
                        <input class="form-control " name="input_modele" id="input_modele" type="text">
                        <label for="input_modele">Modèle</label>
                        
                    </div> 

                    <div class="form-group">
                        <input class="form-control" name="input_reparation" id="input_reparation" type="text">
                        <label for="input_reparation">réparation</label>
                        
                    </div> 

                    <div class="form-group">
                        <input class="form-control" name="input_description" id="input_description" type="text">
                        <label for="input_description">description</label>
                        
                    </div>

                    <div class="form-group">
                        <input class="form-control" name="input_mdp_client" id="input_mdp_client" type="text">
                        <label for="input_mdp_client">mdp_client</label>
                        
                    </div>
                    <div class="form-group">
                        <input class="form-control " name="input_remarque" id="input_remarque" type="text">
                        <label for="input_remarque">remarque</label>
                        
                    </div>

                    <div class="form-group">
                        <input class="form-control" name="input_prix" id="input_prix" type="text">
                        <label for="input_prix">prix </label>
                        
                    </div>

                    <div class="form-group">
                        <input class="form-control" name="input_acompte" id="input_acompte" type="text">
                        <label for="input_acompte">Acompte </label>
                         
                    </div>

                    <input type="submit" value="envoyer"> 

                </form>  
            </div>
        </div>
    </body>
</html>
