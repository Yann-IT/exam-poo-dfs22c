<?php 
require(PATH_TO_VIEWS.'header.php');
?>
<h2>Ajouter un article :</h2>
  <h3>Titre de votre Article :</h3>
  <form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <input type="text" class="form-control" id="usr" name="titre">
    </div>
      <h3>Contenu de votre Article :</h3>
    <div class="form-group">
      <textarea class="form-control" rows="10" cols="40" id="comment" name="texte"></textarea>
    </div>
      <h3>Photo de votre Article :</h3>
      <input type="file" name="images" value="fileupload" id="fileupload"><br>
      <input type="submit" value="Valider" />
  </form>
<?php require(PATH_TO_VIEWS.'footer.php');?>
