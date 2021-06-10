<?php 
require(PATH_TO_VIEWS.'header.php');
?>
<div class="col-md-4">
    <h2>Modifier un article :</h2>
    <form action="" method="post" class="form-control">
      <div class="form-group">
          <label for="title">Titre</label>
        <input type="text" class="form-control" id="title" size="50" name="title" value=<?= '"'.$post->title.'"'?>>
      </div>
      <div class="form-group">
          <label for="content">Contenu</label>
        <textarea class="form-control" id="content" rows="20" cols="50" name="content" ><?= $post->content;?></textarea>
      </div>
        <input type="submit" value="Valider" />
  </form>
</div>
<?php require(PATH_TO_VIEWS.'footer.php');?>