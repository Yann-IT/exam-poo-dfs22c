<?php 
require(PATH_TO_VIEWS.'header.php');
?>
<h2 class="font-bold text-center m-4 text-xl text-purple-700">Ajouter un article</h2>
  <h3 class="font-bold mt-5 text-md">Titre de votre Article :</h3>
  <form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <input type="text" class="w-full appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg  py-4 px-4" id="usr" name="titre">
    </div>
      <h3 class="font-bold mt-5 text-md">Contenu de votre Article :</h3>
    <div class="form-group">
      <textarea class="w-full min-h-[100px] max-h-[300px] h-28 appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg  py-4 px-4" rows="10" cols="40" id="comment" name="texte"></textarea>
    </div>
    <input class="border-purple-700 border-opacity-100 bg-purple-700 text-purple-50 px-2 py-1 m-3  border rounded-md hover:text-purple-700 hover:bg-transparent" type="submit" value="Valider" />
  </form>
<?php require(PATH_TO_VIEWS.'footer.php');?>
