<?php
use App\app\Table\Articles;

$articles = Articles::allOrbyid($_GET['id']);

?>

<div class="container">
    <h1> Bienvenue sur la page single </h1>
    <h3>
        Titre:
        <?= $articles->titre ?>
    </h3>
    <h3>
        <em> Categorie_id:

            <?= $articles->category_id ?>
        </em>
    </h3>

    <p>
        Message:
        <?= $articles->message ?>

    </p>
    <a href="index.php?p=home"> home </a>

</div>