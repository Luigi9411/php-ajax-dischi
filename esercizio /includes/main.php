<?php
    include_once __DIR__ . '/../db/data.php';
?>


<main>
<div class="container">
<div class="discs-container"><?php
    foreach ($arr_disk as $response) { ?>
         <div class="disc">
             <img src="<?= $response['poster']?>">
             <h6 class="title"><?= $response['title']?></h6>
             <p class="p"><?= $response['author']?></p>
             <p class="p-year"><?= $response['year']?></p>
         </div><?php
    }?>
</div>
</div>

</main>