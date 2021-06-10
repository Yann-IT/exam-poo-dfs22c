<?php 
require(PATH_TO_VIEWS.'header.php');
?>
<body>
    <h1 class="text-gray-900">Articles</h1>
    <ul>
        <?php foreach ($posts as $post) : ?>
            <li><a href="posts/<?= $post->id?>"><?= $post->title ?></a></li>
        <?php endforeach; ?>
    </ul>
    <a href="posts/create">Créer un article</a>
<?php require(PATH_TO_VIEWS.'footer.php');?>

