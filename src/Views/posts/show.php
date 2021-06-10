<?php 
require(PATH_TO_VIEWS.'header.php');

?>
<body>
    <h1><?= $post->title;?></h1>
    <p><?= date("D d F, Y",mktime(0,0,0, 6, 10, 2021));?></p>
    <div><?= $post->content;?></div>
    <a href="modify/<?= $post->id;?>">Modifier</a>
    <a href="delete/<?= $post->id;?>">Supprimer</a>



    <div class="comments">
    <h2>Commentaires</h2>
    <?php foreach($comments as $comment): ?>   
                    <div class="row">
                        <div class="message_cont col-md-12">
                            <div class="message">
                                <p class="message_title"><?= $comment->author;?>:
                                </p>
                                <div class="message_blurb">
                                    <p class="message_blurb_p">
                                        <?= $comment->content;?>
                                    </p>
                                    <p><?= $comment->date;?></p>
                                </div>
                            </div>
                            <a href="/../comments/modify/<?= $comment->id;?>">Modifier</a>
                            <a href="delete/<?= $comment->id;?>">Supprimer</a>
                        </div>
                    </div>
    <?php endforeach; ?>
    <div>
        <h3>Ajouter un commentaire : </h3>
        <form action="" method="post">
            <div class="form-group">
                <label for="author">Pseudo de l'auteur</label>
                <input type="text" class="form-control" id="author" name="author">
            </div>
            <div class="form-group">
                <label for="content">Contenu</label>
                <textarea  class="form-control" id="content" name="content"></textarea>
            </div>
            <input type="submit" value="Valider" />
        </form>
    </div>   
    </div>
<?php require(PATH_TO_VIEWS.'footer.php');?>
