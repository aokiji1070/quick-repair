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
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link href="css/style.css" rel="stylesheet" id="bootstrap-css">
        

    
    </head>

    <body>
        <div class="container-fluid container_red " >

        <a href="logout.php" >Logout</a>

        
            
        <img src="img/logo_rond.png"  class="brand_logo center_logo" >
        </div>
        <div class="col-md-12 col-xs-12 col-lg-12" style="background-color:rgb(14, 17, 17);">

        </div> 
       

        <div class="main_bloc">
            <div class="center "> 
                <div class="table-wrapper">
                    <?php include 'read_data.php';?>
                    <table class="fl-table">
                        <thead>
                        <tr>
                            <th>Client_name</th>
                            <th>modèle</th>
                            <th>description</th>
                            <th>password</th>
                            <th>remarque</th>
                            <th>trouble</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                            
                            foreach ($arr as $array){
                                echo "<tr>";
                                echo "<td>".$array['client_name']."</td>";
                                echo "<td>".$array['model']."</td>";
                                echo "<td>".$array['trouble']."</td>";
                                echo "<td>".$array['password']."</td>";
                                echo "<td>".$array['remarks']."</td>";
                                echo "<td>".$array['remarks']."</td>";
                            
                                echo "</tr>";                             
                            }

                            ?>
                        <!-- <tr>
                            <td>Content 1</td>
                            <td>Content 1</td>
                            <td>Content 1</td>
                            <td>Content 1</td>
                            <td>Content 1</td>
                        </tr>
                        <tr>
                            <td>Content 2</td>
                            <td>Content 2</td>
                            <td>Content 2</td>
                            <td>Content 2</td>
                            <td>Content 2</td>
                        </tr> -->
                        <tbody>
                    </table>
                </div>
                
            </div>
        </div>
    </body>
</html>
