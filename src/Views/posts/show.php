<?php 
require(PATH_TO_VIEWS.'header.php');

?>

    <h1 class="font-bold text-center m-4 text-xl text-purple-700"><?= $post->title;?></h1>
    <p class="text-sm italic font-light text-right m-4"><?= date("D d F, Y",mktime(0,0,0, 6, 10, 2021));?></p>
    <div class="my-5"><?= $post->content;?></div>
    <a class="border-purple-700 border-opacity-100 bg-purple-700 text-purple-50 px-2 py-1 m-3  border rounded-md hover:text-purple-700 hover:bg-transparent" href="modify/<?= $post->id;?>">Modifier</a>
    <a class="border-purple-700 border-opacity-100 bg-purple-700 text-purple-50 px-2 py-1 m-3  border rounded-md hover:text-purple-700 hover:bg-transparent" href="delete/<?= $post->id;?>">Supprimer</a>



    <div class="comments w-5/6  mx-auto">
    <h2 class="font-bold mt-5 text-lg">Commentaires</h2>
    <?php foreach($comments as $comment): ?>   
                    <div class="card rounded overflow-hidden shadow-lg px-6 py-4 my-5">
                        <div class="message_cont col-md-12">
                            <div class="message">
                                <p class="message_title text-xl mb-2 font-bold "><?= $comment->author;?> :
                                </p>
                                <p class="text-sm italic font-light"><?= $comment->date;?></p>
                                <div class="message_blurb mb-3">
                                    <p class="message_blurb_p">
                                        <?= $comment->content;?>
                                    </p>
                                </div>
                            </div>
                            <a class="border-purple-700 border-opacity-100 bg-purple-700 text-purple-50 px-2 py-1 m-3  border rounded-md hover:text-purple-700 hover:bg-transparent" href="/../comments/modify/<?= $comment->id;?>">Modifier</a>
                            <a class="border-purple-700 border-opacity-100 bg-purple-700 text-purple-50 px-2 py-1 m-3  border rounded-md hover:text-purple-700 hover:bg-transparent" href="/../comments/delete/<?= $comment->id;?>">Supprimer</a>
                        </div>
                    </div>
    <?php endforeach; ?>
    <div class="card rounded overflow-hidden shadow-lg px-6 py-4 my-5">
        <h3 class="font-bold my-3">Ajouter un commentaire : </h3>
        <form action="" method="post">
            <div class="form-group">
                <label class="font-semibold text-gray-600 py-2" for="author">Pseudo de l'auteur</label>
                <input type="text" class="w-full appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg  py-4 px-4" id="author" name="author">
            </div>
            <div class="form-group">
                <label class="font-semibold text-gray-600 py-2" for="content">Contenu</label>
                <textarea  class="w-full min-h-[100px] max-h-[300px] h-28 appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg  py-4 px-4" id="content" name="content"></textarea>
            </div>
            <input class="border-purple-700 border-opacity-100 bg-purple-700 text-purple-50 px-2 py-1 m-3  border rounded-md hover:text-purple-700 hover:bg-transparent" type="submit" value="Valider" />
        </form>
    </div>   
    </div>
<?php require(PATH_TO_VIEWS.'footer.php');?>
