<?php 
require(PATH_TO_VIEWS.'header.php');
?>
<div class="col-md-4">
    <h2 class="font-bold mt-5 text-lg">Modifier un commentaire :</h2>
    <form action="" method="post" class="form-control">
      <div class="form-group">
          <label class="font-semibold text-gray-600 py-2" for="title">Auteur</label>
        <input type="text" class="w-full appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg  py-4 px-4" id="author" size="50" name="author" value=<?= '"'.$comment->author.'"'?>>
      </div>
      <div class="form-group">
          <label class="font-semibold text-gray-600 py-2" for="content">Contenu</label>
        <textarea class="w-full min-h-[100px] max-h-[300px] h-28 appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg  py-4 px-4" id="content" rows="20" cols="50" name="content" ><?= $comment->content;?></textarea>
      </div>
        <input class="border-purple-700 border-opacity-100 bg-purple-700 text-purple-50 px-2 py-1 m-3  border rounded-md hover:text-purple-700 hover:bg-transparent" type="submit" value="Valider" />
  </form>
</div>
<?php require(PATH_TO_VIEWS.'footer.php');?>