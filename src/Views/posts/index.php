<?php 
require(PATH_TO_VIEWS.'header.php');
?>
<body>
    <h1 class="font-bold text-center m-4 text-xl text-purple-700">Articles</h1>
    <ul>
        <?php foreach ($posts as $post) : ?>
            <li class="card rounded overflow-hidden shadow-lg px-6 py-4 my-5">
            <a class="text-lg hover:underline text-purple-700" href="posts/<?= $post->id?>"><?= $post->title ?></a>
            <p><?php echo substr($post->content,0, 200)." ..."; ?></p>
            <a href="posts/<?= $post->id?>" class="hover:underline text-purple-700">Lire la suite</a>
            </li>
        <?php endforeach; ?>
    </ul>
    <a class="border-purple-700 border-opacity-100 bg-purple-700 text-purple-50 px-2 py-1 m-3  border rounded-md hover:text-purple-700 hover:bg-transparent" href="posts/create">Créer un article</a>
<?php require(PATH_TO_VIEWS.'footer.php');?>

