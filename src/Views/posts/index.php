<?php 
require(PATH_TO_VIEWS.'header.php');
?>
<body>
    <h1 class="text-gray-900">Articles</h1>
    <ul>
        <?php foreach ($posts as $post) : ?>
            <li><?= $post->title ?></li>
        <?php endforeach; ?>
    </ul>
<?php require(PATH_TO_VIEWS.'footer.php');?>

