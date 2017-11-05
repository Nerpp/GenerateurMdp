<html>
  <head>
   <meta charset = "utf-8" />
    <title>Generateur de Mdp</title>
    
    <link rel = "stylesheet" href = "CSS/style.css"/>

  </head>
  
  <div>
      
      <p><h1> Generateur de mot de passe</h1></p>
      
  </div>

<div>
  <form name="identification" method="post" action="index.php">
   
    <fieldset name="champsaisie">

      <label for"identifiant">Nom du Site</label>
      <input type="text" name="nomSite" id="nomSite" placeholder="Nom du Site" value="">
<!--      <span class="error"> <?php echo $IdentifiantErr; ?></span>-->

  <p>Par défaut les caracteres speciaux sont séléctionné et le mdp contient 32 caracteres </p>
   
    <label for"Choix"></label>
    <p>
    <input type="checkbox" name="sansCaractereSpeciaux" value="sansCaractereSpeciaux">Sans caractére spéciaux
    
    </br>Si besoin definir la longueur du mdp: <input type="text" name="lMDP">
    </p>
      
      <input type="submit">
      <!--name est reconnu par le PHP id par le JS-->
      <input type="hidden" name="page" id="page" value="envoit">
        </form>
       
      <p>le mot de passe est = <?php echo $MDP; ?> </p>
       
     </fieldset>

</div>

</html>
