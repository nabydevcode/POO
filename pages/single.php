<?php
use App\app\Table\Articles;
$articles = Articles::getLastarticle(); ?>
<div class="container">
    <h1> Bienvenue sur la page single </h1>
    <h3>
        <?= $articles->titre ?>
    </h3>
    <h3>
        <?= $articles->categorie ?>
    </h3>
    <p>
        <?= $articles->message ?>
    </p>
    <a href="index.php?p=home"> home </a>

</div>




</div>