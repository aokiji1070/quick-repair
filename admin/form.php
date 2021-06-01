<form action="post_db2.php" method="POST">
<h1 class="center">formulaire de réception </h1>

                    
<div class="form-group">

<label for="input_code_bar">code bar</label>
    <input class="form-control" name="input_code_bar" id="input_code_bar" type="text">
    
    
</div>

<div class="form-group">
    <label for="input_ID">Nom du client</label>
    <input class="form-control input-sm" name="input_client" id="input_client" type="text">
    
  
</div>
<div class="form-group">

<div class="form-group">
    <label for="input_modele">Modèle</label>
    <input class="form-control " name="input_modele" id="input_modele" type="text">
    
    
</div> 

<div class="form-group">
    <label for="input_reparation">réparation</label>
    <input class="form-control" name="input_reparation" id="input_reparation" type="text">
    
    
</div> 

<div class="form-group">
    <label for="input_description">description</label>
    <input class="form-control" name="input_description" id="input_description" type="text">
    
    
</div>

<div class="form-group">
    <label for="input_mdp_client">mdp_client</label>
    <input class="form-control" name="input_mdp_client" id="input_mdp_client" type="text">
    
    
</div>
<div class="form-group">
    <label for="input_remarque">remarque</label>    
    <input class="form-control " name="input_remarque" id="input_remarque" type="text">
    
    
</div>

<div class="form-group">
    <label for="input_prix">prix </label>
    <input class="form-control" name="input_prix" id="input_prix" type="text">
    
    
</div>

<div class="form-group">
    <label for="input_acompte">Acompte </label>
    <input class="form-control" name="input_acompte" id="input_acompte" type="text">
    
     
</div>

<div class="form-group">

    <label for="cars">Choisir le réparateur:</label>

    <select name="repairer_name" id="">
        
        <?php
        
        foreach ($arr as $array){
            echo "<option value='".$array['username']."'>".$array['username']."</option>";
        
        }
        
        ?>
        
    </select> 
     
</div>

<input type="submit" value="envoyer"> 

</form>  