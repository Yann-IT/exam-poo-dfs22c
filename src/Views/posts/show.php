<?php 
require(PATH_TO_VIEWS.'header.php');

?>
<body>
    <h1><?= $post->title;?></h1>
    <p><?= date("D d F, Y",mktime(0,0,0, 6, 10, 2021));?></p>
    <div><?= $post->content;?></div>
    <a href="modify/<?= $post->id;?>">Modifier</a>
<?php require(PATH_TO_VIEWS.'footer.php');?>
