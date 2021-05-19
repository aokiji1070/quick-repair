<form action="post_db2.php" method="POST">

                    
<div class="form-group">


    <input class="form-control" name="input_code_bar" id="input_code_bar" type="text">
    <label for="input_code_bar">scanner code bar</label>
    
</div>

<div class="form-group">

    <input class="form-control input-sm" name="input_client" id="input_client" type="text">
    <label for="input_ID">Nom du client</label>
  
</div>
<div class="form-group">

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