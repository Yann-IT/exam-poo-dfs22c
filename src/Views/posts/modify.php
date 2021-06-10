<?php var_dump($post); ?>
<div class="col-md-4">
    <h2>Modifier un article :</h2>
    <form action="modify" method="post" class="form-control">
      <div>
      
      </div>
      <h1><?= $post->title;?></h1>
      <p><?= date("D d F, Y",mktime(0,0,0, 6, 10, 2021));?></p>
      <div><?= $post->content;?></div>
    <input type="submit"value="Valider" name="update"/>
  </form>
</div>