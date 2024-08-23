<?php

$post = $db->prepare('SELECT * FROM post     WHERE id=?', [$_GET['id']], 'App\app\table\Articles', true);

?>
<div class="container">
    <h1> Bienvenue sur la page single </h1>


    <h3>
        <?= $post->titre ?>
    </h3>
    <p>
        <?= $post->message ?>
    </p>
    <a href="index.php?p=home"> home </a>
</div>