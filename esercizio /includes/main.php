<?php
    include_once __DIR__ . '/../db/data.php';
?>


<main><?php
    foreach ($arr_disk as $response) { ?>
            <img src="<?= $response['poster']?>">
            <h2><?= $response['title']?></h2>
            <p><?= $response['author']?></p>
            <p><?= $response['year']?></p><?
    }?>
</main>