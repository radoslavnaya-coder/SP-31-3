<?php 

foreach($posts as $post):?>

<img src="/uploads/<?= $post['image']?>" width="80vw">
<h2>
    <?= $post['title']?>
</h2>
<p>
    <?= $post['content']?>
</p>


<?php endforeach;?>