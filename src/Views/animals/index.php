<?php 
require(PATH_TO_VIEWS.'header.php');
?>
<body>
    <h1 class="text-gray-900">Liste des animaux</h1>
    <ul>
        <?php foreach ($animals as $animal) : ?>
            <li><?= $animal->name ?></li>
        <?php endforeach; ?>
    </ul>
<?php require(PATH_TO_VIEWS.'footer.php');?>

